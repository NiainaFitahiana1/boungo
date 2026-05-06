<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>CRUD AJAX</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
  <div class="max-w-6xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">CRUD AJAX — Test Console</h1>

    <div class="mb-4 flex gap-2 items-center">
      <label class="font-medium">Ressource:</label>
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
      <button id="refresh" class="ml-2 px-3 py-2 bg-blue-600 text-white rounded">Refresh</button>
      <button id="create" class="ml-auto px-3 py-2 bg-green-600 text-white rounded">Create</button>
    </div>

    <div id="list" class="bg-white rounded shadow p-4">
      <table class="w-full table-auto">
        <thead>
          <tr class="text-left">
            <th class="p-2">#</th>
            <th class="p-2">Data</th>
            <th class="p-2">Actions</th>
          </tr>
        </thead>
        <tbody id="rows"></tbody>
      </table>
    </div>

    <div id="form-modal" class="fixed inset-0 bg-black/40 hidden items-center justify-center">
      <div class="bg-white rounded p-6 w-full max-w-2xl">
        <h2 id="form-title" class="text-xl font-bold mb-2">Créer</h2>
        <textarea id="form-data" rows="10" class="w-full border p-2 rounded font-mono" placeholder='JSON (ex: {"name":"role1"})'></textarea>
        <div class="mt-4 flex gap-2 justify-end">
          <button id="cancel" class="px-3 py-2 rounded border">Annuler</button>
          <button id="submit" class="px-3 py-2 bg-blue-600 text-white rounded">Envoyer</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    function apiPath(resource){
      return `/crud-api/${resource}`;
    }

    async function fetchList(){
      const resource = document.getElementById('resource-select').value;
      const res = await fetch(apiPath(resource));
      const data = await res.json();
      renderRows(data.data ?? data);
    }

    function renderRows(items){
      const tbody = document.getElementById('rows');
      tbody.innerHTML = '';
      (items || []).forEach(item => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td class="p-2 align-top">${item.id ?? ''}</td>
          <td class="p-2 font-mono text-sm">${escapeHtml(JSON.stringify(item, null, 2))}</td>
          <td class="p-2 align-top flex gap-2">
            <button data-id="${item.id}" class="view btn px-2 py-1 bg-gray-200 rounded">Voir</button>
            <button data-id="${item.id}" class="edit btn px-2 py-1 bg-yellow-300 rounded">Edit</button>
            <button data-id="${item.id}" class="delete btn px-2 py-1 bg-red-500 text-white rounded">Suppr</button>
          </td>
        `;
        tbody.appendChild(tr);
      });
    }

    function escapeHtml(s){ return s.replaceAll('&','&amp;').replaceAll('<','&lt;').replaceAll('>','&gt;'); }

    document.getElementById('refresh').addEventListener('click', fetchList);
    document.getElementById('resource-select').addEventListener('change', fetchList);

    // modal
    const modal = document.getElementById('form-modal');
    const formTitle = document.getElementById('form-title');
    const formData = document.getElementById('form-data');
    let editing = null;

    document.getElementById('create').addEventListener('click', () => {
      editing = null;
      formTitle.textContent = 'Créer';
      formData.value = '{}';
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    });

    document.getElementById('cancel').addEventListener('click', () => {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    });

    document.getElementById('rows').addEventListener('click', async (e) => {
      const id = e.target.dataset.id;
      const resource = document.getElementById('resource-select').value;
      if(e.target.classList.contains('view')){
        const r = await fetch(`${apiPath(resource)}/${id}`);
        const json = await r.json();
        alert(JSON.stringify(json, null, 2));
      }
      if(e.target.classList.contains('edit')){
        const r = await fetch(`${apiPath(resource)}/${id}`);
        const json = await r.json();
        editing = id;
        formTitle.textContent = 'Modifier ' + resource + ' #' + id;
        formData.value = JSON.stringify(json, null, 2);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      }
      if(e.target.classList.contains('delete')){
        if(!confirm('Supprimer ?')) return;
        const r = await fetch(`${apiPath(resource)}/${id}`, { method: 'DELETE', headers: {'X-CSRF-TOKEN': csrfToken} });
        if(r.ok) fetchList(); else alert('Erreur');
      }
    });

    document.getElementById('submit').addEventListener('click', async () => {
      const resource = document.getElementById('resource-select').value;
      let payload;
      try{ payload = JSON.parse(formData.value); } catch(e){ alert('JSON invalide'); return; }

      const method = editing ? 'PUT' : 'POST';
      const url = editing ? `${apiPath(resource)}/${editing}` : apiPath(resource);

      const res = await fetch(url, {
        method,
        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken },
        body: JSON.stringify(payload)
      });

      if(res.ok){
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        fetchList();
      } else {
        const json = await res.json().catch(()=>null);
        alert('Erreur: ' + (json?.message || res.statusText));
      }
    });

    // initial load
    fetchList();
  </script>
</body>
</html>
