<div class="mb-xl lg:hidden">
  <!-- Barre de recherche -->
  <div class="relative group">
    <span class="absolute left-lg top-1/2 -translate-y-1/2 material-symbols-outlined text-outline">search</span>
    <input x-model="filters.search" 
           @input="filterDebounce"
           class="w-full pl-14 pr-lg py-5 bg-surface-container-lowest border-none rounded-2xl shadow-md text-body-lg font-body-lg focus:ring-2 focus:ring-secondary-container outline-none transition-all group-hover:shadow-lg" 
           placeholder="Rechercher un logement, ville, quartier..." 
           type="text" />
  </div>

  <!-- Filtres par boutons -->
  <div class="flex gap-sm mt-lg overflow-x-auto pb-sm no-scrollbar">
    <!-- Tri par prix -->
    <button @click="filters.sort = filters.sort === 'price_asc' ? '' : 'price_asc'; applyFilters()"
            :class="{ 'bg-primary text-on-primary': filters.sort === 'price_asc' }"
            class="px-lg py-xs bg-surface-container-high text-on-surface-variant rounded-full whitespace-nowrap text-label-sm font-label-sm flex items-center gap-xs hover:bg-surface-variant transition-all">
      <span class="material-symbols-outlined text-[16px]">trending_down</span>
      Moins cher
    </button>

    <!-- Type d'annonce : Colocation -->
    <button @click="filters.type = filters.type === 'colocation' ? '' : 'colocation'; applyFilters()"
            :class="{ 'bg-primary text-on-primary': filters.type === 'colocation' }"
            class="px-lg py-xs bg-surface-container-high text-on-surface-variant rounded-full whitespace-nowrap text-label-sm font-label-sm flex items-center gap-xs hover:bg-surface-variant transition-all">
      <span class="material-symbols-outlined text-[16px]">group</span>
      Colocation
    </button>

    <!-- Type d'annonce : Location -->
    <button @click="filters.type = filters.type === 'location' ? '' : 'location'; applyFilters()"
            :class="{ 'bg-primary text-on-primary': filters.type === 'location' }"
            class="px-lg py-xs bg-surface-container-high text-on-surface-variant rounded-full whitespace-nowrap text-label-sm font-label-sm flex items-center gap-xs hover:bg-surface-variant transition-all">
      <span class="material-symbols-outlined text-[16px]">home</span>
      Location
    </button>

    <!-- Statut : Disponible -->
    <button @click="filters.status = filters.status === 'active' ? '' : 'active'; applyFilters()"
            :class="{ 'bg-primary text-on-primary': filters.status === 'active' }"
            class="px-lg py-xs bg-surface-container-high text-on-surface-variant rounded-full whitespace-nowrap text-label-sm font-label-sm flex items-center gap-xs hover:bg-surface-variant transition-all">
      <span class="material-symbols-outlined text-[16px]">check_circle</span>
      Disponible
    </button>

    <!-- Réinitialiser les filtres -->
    <template x-if="Object.values(filters).some(v => v)">
      <button @click="resetFilters()"
              class="px-lg py-xs bg-error/20 text-error rounded-full whitespace-nowrap text-label-sm font-label-sm flex items-center gap-xs hover:bg-error/30 transition-all">
        <span class="material-symbols-outlined text-[16px]">close</span>
        Réinitialiser
      </button>
    </template>
  </div>

  <!-- Badge du nombre de filtres actifs -->
  <template x-if="Object.values(filters).some(v => v)">
    <div class="mt-lg text-body-sm text-outline">
      <span class="inline-block px-sm py-xs bg-secondary-fixed text-on-secondary-fixed-variant rounded-full">
        <span x-text="`${Object.values(filters).filter(v => v).length} filtre(s) actif(s)`"></span>
      </span>
    </div>
  </template>
</div>
