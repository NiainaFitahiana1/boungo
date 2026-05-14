<x-layouts.app>
  <x-left-sidebar />

  <!-- Contenu principal avec Alpine.js -->
  <div class="md:col-span-12 lg:col-span-9 lg:ml-80" 
    x-data="{
      showModal: false,
      modalData: null,
      ads: [],
      pagination: null,
      loading: true,
      page: 1,
      filters: {
        search: '',
        type: '',
        status: '',
        sort: ''
      },
      debounceTimer: null,
      
      openModal(item) {
        this.modalData = item;
        this.showModal = true;
      },
      
      closeModal() {
        this.showModal = false;
        this.modalData = null;
      },
      
      buildQueryString() {
        const params = new URLSearchParams();
        params.append('page', this.page);
        
        if (this.filters.search) params.append('search', this.filters.search);
        if (this.filters.type) params.append('type', this.filters.type);
        if (this.filters.status) params.append('status', this.filters.status);
        
        // Tri
        if (this.filters.sort === 'price_asc') {
          params.append('sort', 'price');
          params.append('order', 'asc');
        }
        
        return params.toString();
      },
      
      async fetchAds(pageNum = 1) {
        this.loading = true;
        this.page = pageNum;
        
        try {
          const query = this.buildQueryString();
          const response = await fetch(`/crud-api/ads?${query}`);
          const data = await response.json();
          
          this.ads = data.data || [];
          // Récupérer les infos de pagination
          this.pagination = {
            current_page: data.current_page,
            last_page: data.last_page,
            total: data.total,
            per_page: data.per_page
          };
        } catch (error) {
          console.error('Erreur lors du chargement des annonces:', error);
          this.ads = [];
        } finally {
          this.loading = false;
        }
      },
      
      filterDebounce() {
        clearTimeout(this.debounceTimer);
        this.debounceTimer = setTimeout(() => {
          this.applyFilters();
        }, 500);
      },
      
      applyFilters() {
        this.page = 1;
        this.fetchAds(1);
      },
      
      resetFilters() {
        this.filters = {
          search: '',
          type: '',
          status: '',
          sort: ''
        };
        this.page = 1;
        this.fetchAds(1);
      },
      
      init() {
        this.fetchAds();
      }
    }">

    <x-search-filters />

    <x-cards-grid>
      <!-- Boucle dynamique des annonces -->
      <template x-if="loading">
        <div class="col-span-full flex items-center justify-center py-12">
          <div class="text-center">
            <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-primary"></div>
            <p class="mt-2 text-on-surface">Chargement des annonces...</p>
          </div>
        </div>
      </template>

      <template x-if="!loading && ads.length === 0">
        <div class="col-span-full flex items-center justify-center py-12">
          <p class="text-on-surface">Aucune annonce disponible pour le moment.</p>
        </div>
      </template>

      <template x-if="!loading && ads.length > 0">
        <template x-for="ad in ads" :key="ad.id">
          <div :data-card="true" 
               :data-title="ad.title" 
               :data-location="ad.city" 
               :data-price="`${ad.price}€`" 
               :data-image="ad.images && ad.images.length > 0 ? ad.images[0].url : 'https://via.placeholder.com/300x300?text=No+Image'" 
               :data-features="ad.features || ''" 
               :data-size="ad.size || ''" 
               :data-rooms="ad.rooms || ''" 
               :data-capacity="ad.capacity || ''" 
               :data-description="ad.description"
               class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-transparent hover:border-secondary-container group">
            
            <div class="relative h-60 overflow-hidden">
              <img :alt="ad.title" 
                   class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
                   :src="ad.images && ad.images.length > 0 ? ad.images[0].url : 'https://via.placeholder.com/300x300?text=No+Image'" />
              <button class="absolute top-md right-md bg-white/80 backdrop-blur-md p-xs rounded-full shadow-md text-outline hover:text-error transition-colors">
                <span class="material-symbols-outlined">favorite</span>
              </button>
              <div class="absolute bottom-md left-md bg-primary/90 text-on-primary px-md py-xs rounded-lg font-h3 text-body-md backdrop-blur-sm">
                <span x-text="`${ad.price}€`"></span><span class="text-label-sm font-normal">/mois</span>
              </div>
            </div>

            <div class="p-lg space-y-md">
              <div>
                <h3 class="text-h3 font-h3 text-primary truncate" x-text="ad.title"></h3>
                <p class="text-body-sm font-body-sm text-outline flex items-center gap-xs">
                  <span class="material-symbols-outlined text-[18px]">location_on</span> 
                  <span x-text="ad.city"></span>
                </p>
              </div>
              
              <div class="flex flex-wrap gap-xs">
                <template x-for="feature in (ad.features || '').split(',').filter(f => f.trim())" :key="feature">
                  <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter" x-text="feature.trim()"></span>
                </template>
              </div>
              
              <button @click="openModal({ title: $event.currentTarget.closest('[data-card]').dataset.title, price: $event.currentTarget.closest('[data-card]').dataset.price, location: $event.currentTarget.closest('[data-card]').dataset.location, image: $event.currentTarget.closest('[data-card]').dataset.image, description: $event.currentTarget.closest('[data-card]').dataset.description, size: $event.currentTarget.closest('[data-card]').dataset.size, rooms: $event.currentTarget.closest('[data-card]').dataset.rooms, capacity: $event.currentTarget.closest('[data-card]').dataset.capacity, features: ($event.currentTarget.closest('[data-card]').dataset.features || '').split(',') })" 
                      class="w-full py-md bg-surface-container-high text-primary font-label-md text-label-md rounded-xl hover:bg-secondary-container hover:text-on-secondary-container transition-all">
                Voir détails
              </button>
            </div>
          </div>
        </template>
      </template>
    </x-cards-grid>

    <x-pagination />
  </div>

  <x-right-sidebar />

  <!-- ====================== GRANDE MODAL ====================== -->
  {{-- <div x-show="showModal" 
       class="fixed inset-0 z-[100] flex items-center justify-center px-4">
    
    <!-- Overlay -->
    <div @click="showModal = false" class="absolute inset-0 bg-black/70 backdrop-blur-md"></div>

    <!-- Modal -->
    <div class="relative bg-surface-container-lowest w-full max-w-5xl max-h-[95vh] rounded-3xl shadow-2xl flex flex-col overflow-hidden">
      
      <!-- En-tête -->
      <div class="px-6 py-5 border-b border-outline-variant flex items-center justify-between">
        <h2 class="text-h3 font-h3 text-primary">Détails de l'annonce</h2>
        <button @click="showModal = false" 
                class="material-symbols-outlined text-4xl text-on-surface-variant hover:text-error transition-colors">
          close
        </button>
      </div>

      <!-- Contenu -->
      <div class="overflow-y-auto flex-1">
        <div class="grid md:grid-cols-2">
          
          <!-- Image -->
          <div class="relative h-96 md:h-auto bg-black">
            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuALVHvqT1W_m5HkYfNQZw51bmB8rMQxZMiGQQXbB_yQN4zmeWLAu_-TbrGa0D10J5Fqm_HDg6ivF1EChr4OEEtrlqjeWWJ1Tcis1v4OkrfJRU6gRnITypZBg7zSuY9-Vkub12LT8CZeubxb6sOdfxnzIz7Vng1WKkI3_2G4tK0vd9FI8bwUBzKJ6as3bjb3VUYgf8fUiMu6xp_gGYpLiQeMGp0qRFVsYJedPMO7HG6YhswMJbXqhKt8vIV4fQgMpbizDx4eC_GwHmX-" 
                 class="w-full h-full object-cover" alt="Studio Lumineux Canal">
          </div>

          <!-- Informations -->
          <div class="p-6 md:p-8 space-y-6">
            <div>
              <h1 class="text-3xl font-semibold text-primary">Studio Lumineux Canal</h1>
              <p class="flex items-center gap-2 text-body-md text-outline mt-2">
                <span class="material-symbols-outlined">location_on</span>
                Paris, 10ème Arrondissement
              </p>
              <div class="text-4xl font-bold text-primary mt-4">550€ <span class="text-xl font-normal text-on-surface-variant">/ mois</span></div>
            </div>

            <div class="grid grid-cols-3 gap-3">
              <div class="bg-surface-variant/60 rounded-2xl p-4 text-center">
                <span class="material-symbols-outlined text-3xl">bed</span>
                <p class="text-sm mt-1">Studio</p>
              </div>
              <div class="bg-surface-variant/60 rounded-2xl p-4 text-center">
                <span class="material-symbols-outlined text-3xl">square_foot</span>
                <p class="text-sm mt-1">28 m²</p>
              </div>
              <div class="bg-surface-variant/60 rounded-2xl p-4 text-center">
                <span class="material-symbols-outlined text-3xl">person</span>
                <p class="text-sm mt-1">2 pers.</p>
              </div>
            </div>

            <div>
              <h3 class="font-semibold mb-3">Description</h3>
              <p class="text-body-md leading-relaxed text-on-surface-variant">
                Magnifique studio lumineux idéalement situé le long du canal Saint-Martin. Entièrement rénové, meublé avec goût et parfait pour une ou deux personnes.
              </p>
            </div>

            <div>
              <h3 class="font-semibold mb-3">Équipements</h3>
              <div class="flex flex-wrap gap-2">
                <span class="px-4 py-2 bg-surface-variant rounded-full text-sm">WiFi Fibre</span>
                <span class="px-4 py-2 bg-surface-variant rounded-full text-sm">Cuisine équipée</span>
                <span class="px-4 py-2 bg-surface-variant rounded-full text-sm">Machine à laver</span>
                <span class="px-4 py-2 bg-surface-variant rounded-full text-sm">Douche italienne</span>
                <span class="px-4 py-2 bg-surface-variant rounded-full text-sm">Climatisation</span>
              </div>
            </div>

            <div class="pt-6">
              <button class="w-full py-4 bg-primary hover:bg-primary-hover text-on-primary rounded-2xl text-lg font-semibold transition-all">
                Réserver ce logement
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

</x-layouts.app>