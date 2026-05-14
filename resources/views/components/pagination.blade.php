<div class="mt-2xl flex items-center justify-center gap-sm">
  <!-- Bouton précédent -->
  <button @click="page > 1 && fetchAds(page - 1)" 
          :disabled="page === 1"
          :class="{ 'opacity-50 cursor-not-allowed': page === 1 }"
          class="w-12 h-12 rounded-full flex items-center justify-center hover:bg-surface-variant transition-all border border-outline-variant disabled:hover:bg-transparent">
    <span class="material-symbols-outlined">chevron_left</span>
  </button>

  <!-- Pages numérotées -->
  <template x-for="pageNum in Array.from({ length: Math.min(5, pagination?.last_page || 1) }, (_, i) => i + 1)" :key="pageNum">
    <button @click="fetchAds(pageNum)"
            :class="{ 'bg-primary text-on-primary': pageNum === page, 'hover:bg-surface-variant': pageNum !== page }"
            class="w-12 h-12 rounded-full flex items-center justify-center font-label-md transition-all"
            x-text="pageNum">
    </button>
  </template>

  <!-- Points de suspension si plus de pages -->
  <template x-if="(pagination?.last_page || 1) > 5">
    <span class="text-outline">...</span>
  </template>

  <!-- Dernière page si applicable -->
  <template x-if="(pagination?.last_page || 1) > 5">
    <button @click="fetchAds(pagination.last_page)"
            :class="{ 'bg-primary text-on-primary': page === pagination.last_page, 'hover:bg-surface-variant': page !== pagination.last_page }"
            class="w-12 h-12 rounded-full flex items-center justify-center font-label-md transition-all"
            x-text="pagination.last_page">
    </button>
  </template>

  <!-- Bouton suivant -->
  <button @click="page < (pagination?.last_page || 1) && fetchAds(page + 1)"
          :disabled="page === (pagination?.last_page || 1)"
          :class="{ 'opacity-50 cursor-not-allowed': page === (pagination?.last_page || 1) }"
          class="w-12 h-12 rounded-full flex items-center justify-center hover:bg-surface-variant transition-all border border-outline-variant disabled:hover:bg-transparent">
    <span class="material-symbols-outlined">chevron_right</span>
  </button>
</div>

<!-- Affichage des résultats -->
<div class="mt-lg text-center text-body-sm text-outline">
  <template x-if="pagination">
    <span x-text="`Page ${page} sur ${pagination.last_page} - Total: ${pagination.total} annonces`"></span>
  </template>
</div>
