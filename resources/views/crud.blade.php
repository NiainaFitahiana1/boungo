<!DOCTYPE html>
<html class="light" lang="fr">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: { extend: {} }
    };
  </script>
</head>
<body class="bg-background font-body-md text-on-surface">

<div class="min-h-screen flex">
  <!-- Sidebar (compact) -->
  <aside class="w-64 bg-primary text-on-primary p-6 hidden md:block">
    <h1 class="text-2xl font-bold mb-4">NestLink Admin</h1>
    <nav class="space-y-2">
      <button class="w-full text-left px-3 py-2 bg-secondary-container text-on-secondary-container rounded">CRUD Console</button>
    </nav>
  </aside>

  <main class="flex-1 p-8">
    <div class="max-w-6xl mx-auto">
      <header class="flex items-center gap-4 mb-8">
        <h2 class="text-2xl font-bold">CRUD AJAX — Console</h2>
        <p class="text-sm text-on-surface-variant">Testez les endpoints CRUD de votre application</p>
      </header>

      <section class="bg-white rounded-xl shadow p-6">
        <div class="flex gap-3 items-center mb-4">
          <label class="font-medium">Ressource</label>
          <select id="resource-select" class="border p-2 rounded">
            <option value="roles">roles</option>
            <option value="ads">ads</option>
            <option value="ads-images">ads-images</option>
            <option value="favorites">favorites</option>
            <option value="views">views</option>
            <option value="comments">comments</option>
            <option value="applies">applies</option>
            <option value="notifications">notifications</option>
          </select>
          <button id="refresh" class="px-3 py-2 bg-surface-container-high rounded">Refresh</button>
          <div class="ml-auto flex gap-2">
            <button id="create" class="px-3 py-2 bg-green-600 text-white rounded">Créer</button>
            <button id="open-crud-component" class="px-3 py-2 bg-primary text-white rounded">Open UI</button>
          </div>
        </div>

        <div id="list" class="overflow-auto">
          <table class="w-full table-auto border-collapse">
            <thead>
              <tr class="text-left bg-surface-container-highest">
                <th class="p-3 border">#</th>
                <th class="p-3 border">Données</th>
                <th class="p-3 border">Actions</th>
              </tr>
            </thead>
            <tbody id="rows"></tbody>
          </table>
        </div>
      </section>
    </div>
  </main>
</div>

<!-- Modal JSON editor -->
<div id="form-modal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">
  <div class="bg-white rounded p-6 w-full max-w-3xl">
    <div class="flex items-center justify-between mb-2">
      <h3 id="form-title" class="text-lg font-bold">Créer</h3>
      <button id="modal-close" class="text-gray-500">✕</button>
    </div>
    <textarea id="form-data" rows="12" class="w-full border p-2 rounded font-mono" placeholder='JSON, ex: {"name":"role1"}'></textarea>
    <div class="mt-4 flex justify-end gap-2">
      <button id="cancel" class="px-3 py-2 rounded border">Annuler</button>
      <button id="submit" class="px-3 py-2 bg-primary text-white rounded">Envoyer</button>
    </div>
  </div>
</div>

<script>
  // why: provide CSRF and helper paths
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  function apiPath(resource){ return `/crud-api/${resource}`; }

  // render helpers
  function escapeHtml(s){ return String(s).replaceAll('&','&amp;').replaceAll('<','&lt;').replaceAll('>','&gt;'); }

  async function fetchList(){
    const resource = document.getElementById('resource-select').value;
    const res = await fetch(apiPath(resource));
    const payload = await res.json();
    const items = payload.data ?? payload;
    renderRows(items || []);
  }

  function renderRows(items){
    const tbody = document.getElementById('rows');
    tbody.innerHTML = '';
    items.forEach(item => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td class="p-3 border align-top">${item.id ?? ''}</td>
        <td class="p-3 border align-top font-mono text-sm whitespace-pre-wrap">${escapeHtml(JSON.stringify(item, null, 2))}</td>
        <td class="p-3 border align-top">
          <div class="flex gap-2">
            <button data-id="${item.id}" class="view px-2 py-1 bg-surface-container-high rounded">Voir</button>
            <button data-id="${item.id}" class="edit px-2 py-1 bg-yellow-300 rounded">Modifier</button>
            <button data-id="${item.id}" class="delete px-2 py-1 bg-red-600 text-white rounded">Supprimer</button>
          </div>
        </td>
      `;
      tbody.appendChild(tr);
    });
  }

  // modal logic
  const modal = document.getElementById('form-modal');
  const formTitle = document.getElementById('form-title');
  const formData = document.getElementById('form-data');
  let editing = null;

  document.getElementById('create').addEventListener('click', () => {
    editing = null; formTitle.textContent = 'Créer'; formData.value = '{}'; openModal();
  });
  document.getElementById('cancel').addEventListener('click', closeModal);
  document.getElementById('modal-close').addEventListener('click', closeModal);

  function openModal(){ modal.classList.remove('hidden'); modal.classList.add('flex'); }
  function closeModal(){ modal.classList.add('hidden'); modal.classList.remove('flex'); }

  document.getElementById('rows').addEventListener('click', async (e) => {
    const id = e.target.dataset.id; if(!id) return; const resource = document.getElementById('resource-select').value;
    if(e.target.classList.contains('view')){
      const r = await fetch(`${apiPath(resource)}/${id}`); const data = await r.json(); alert(JSON.stringify(data, null, 2));
    }
    if(e.target.classList.contains('edit')){
      const r = await fetch(`${apiPath(resource)}/${id}`); const data = await r.json(); editing = id; formTitle.textContent = `Modifier ${resource} #${id}`; formData.value = JSON.stringify(data, null, 2); openModal();
    }
    if(e.target.classList.contains('delete')){
      if(!confirm('Confirmer la suppression ?')) return;
      const r = await fetch(`${apiPath(resource)}/${id}`, { method: 'DELETE', headers: { 'X-CSRF-TOKEN': csrfToken } });
      if(r.ok) fetchList(); else alert('Erreur lors de la suppression');
    }
  });

  document.getElementById('submit').addEventListener('click', async () => {
    const resource = document.getElementById('resource-select').value; let payload;
    try{ payload = JSON.parse(formData.value); } catch(e){ alert('JSON invalide'); return; }
    const method = editing ? 'PUT' : 'POST'; const url = editing ? `${apiPath(resource)}/${editing}` : apiPath(resource);
    const res = await fetch(url, { method, headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken }, body: JSON.stringify(payload) });
    if(res.ok){ closeModal(); fetchList(); } else { const json = await res.json().catch(()=>null); alert('Erreur: ' + (json?.message || res.statusText)); }
  });

  document.getElementById('refresh').addEventListener('click', fetchList);
  document.getElementById('resource-select').addEventListener('change', fetchList);

  // optional: open the fancy UI from the attachment if user wants
  document.getElementById('open-crud-component').addEventListener('click', () => {
    window.open('/crud-component', '_blank');
  });

  // initial load
  fetchList();
</script>
</body>
</html>
