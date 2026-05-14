<aside class="hidden lg:flex flex-col fixed left-gutter top-24 h-[calc(100vh-8rem)] z-40 bg-surface-container-low shadow-md rounded-xl w-72 overflow-y-auto">
  <div class="p-lg border-b border-outline-variant">
    <h2 class="text-h2 font-h2 text-primary text-xl">Affiner la recherche</h2>
    <p class="text-label-md font-label-md text-on-surface-variant mt-xs">Trouvez votre foyer idéal</p>
  </div>
  <div class="p-lg space-y-xl">
    <!-- Barre de recherche -->
    <div class="space-y-md">
      <div class="flex items-center gap-sm text-primary">
        <span class="material-symbols-outlined">search</span>
        <span class="font-label-md text-label-md uppercase tracking-wider">Recherche</span>
      </div>
      <div class="relative group">
        <span class="absolute left-lg top-1/2 -translate-y-1/2 material-symbols-outlined text-outline text-[18px]">search</span>
        <input x-model="filters.search" 
               @input="filterDebounce"
               class="w-full pl-lg pr-lg py-md bg-surface-container-highest border-none rounded-xl shadow-sm text-body-sm font-body-sm focus:ring-2 focus:ring-secondary-container outline-none transition-all group-hover:shadow-md" 
               placeholder="Rechercher un logement..." 
               type="text" />
      </div>
    </div>

    <!-- Tri par prix -->
    <div class="space-y-md">
      <div class="flex items-center gap-sm text-primary">
        <span class="material-symbols-outlined">trending_down</span>
        <span class="font-label-md text-label-md uppercase tracking-wider">Tri</span>
      </div>
      <button @click="filters.sort = filters.sort === 'price_asc' ? '' : 'price_asc'; applyFilters()"
              :class="{ 'bg-primary text-on-primary': filters.sort === 'price_asc' }"
              class="w-full px-lg py-md bg-surface-container-high text-on-surface-variant rounded-xl whitespace-nowrap text-label-sm font-label-sm flex items-center justify-center gap-xs hover:bg-surface-variant transition-all">
        <span class="material-symbols-outlined text-[16px]">trending_down</span>
        Moins cher
      </button>
    </div>

    <!-- Type d'annonce -->
    <div class="space-y-md">
      <div class="flex items-center gap-sm text-primary">
        <span class="material-symbols-outlined">home</span>
        <span class="font-label-md text-label-md uppercase tracking-wider">Type</span>
      </div>
      <div class="space-y-xs">
        <button @click="filters.type = filters.type === 'location' ? '' : 'location'; applyFilters()"
                :class="{ 'bg-primary text-on-primary': filters.type === 'location' }"
                class="w-full px-lg py-md bg-surface-container-high text-on-surface-variant rounded-xl text-label-sm font-label-sm flex items-center gap-xs hover:bg-surface-variant transition-all">
          <span class="material-symbols-outlined text-[16px]">home</span>
          Location
        </button>
        <button @click="filters.type = filters.type === 'colocation' ? '' : 'colocation'; applyFilters()"
                :class="{ 'bg-primary text-on-primary': filters.type === 'colocation' }"
                class="w-full px-lg py-md bg-surface-container-high text-on-surface-variant rounded-xl text-label-sm font-label-sm flex items-center gap-xs hover:bg-surface-variant transition-all">
          <span class="material-symbols-outlined text-[16px]">group</span>
          Colocation
        </button>
      </div>
    </div>

    <!-- Statut -->
    <div class="space-y-md">
      <div class="flex items-center gap-sm text-primary">
        <span class="material-symbols-outlined">check_circle</span>
        <span class="font-label-md text-label-md uppercase tracking-wider">Statut</span>
      </div>
      <button @click="filters.status = filters.status === 'active' ? '' : 'active'; applyFilters()"
              :class="{ 'bg-primary text-on-primary': filters.status === 'active' }"
              class="w-full px-lg py-md bg-surface-container-high text-on-surface-variant rounded-xl text-label-sm font-label-sm flex items-center justify-center gap-xs hover:bg-surface-variant transition-all">
        <span class="material-symbols-outlined text-[16px]">check_circle</span>
        Disponible
      </button>
    </div>

    <!-- Badge du nombre de filtres actifs -->
    <template x-if="Object.values(filters).some(v => v)">
      <div class="text-body-sm text-outline">
        <span class="inline-block px-sm py-xs bg-secondary-fixed text-on-secondary-fixed-variant rounded-full">
          <span x-text="`${Object.values(filters).filter(v => v).length} filtre(s) actif(s)`"></span>
        </span>
      </div>
    </template>
  </div>
  <div class="mt-auto p-lg border-t border-outline-variant">
    <button @click="resetFilters()"
            class="w-full py-md bg-primary text-on-primary rounded-xl font-label-md text-label-md hover:bg-secondary transition-all flex items-center justify-center gap-sm">
      <span class="material-symbols-outlined">close</span>
      Réinitialiser les filtres
    </button>
  </div>
</aside>
