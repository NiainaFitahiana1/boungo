<x-layouts.app>
  <x-left-sidebar />

  <!-- Contenu principal avec Alpine.js -->
  <div class="md:col-span-12 lg:col-span-9 lg:ml-80" 
    x-data="{ showModal: false, modalData: null, openModal(item){ this.modalData = item; this.showModal = true }, closeModal(){ this.showModal = false; this.modalData = null } }">

    <x-search-filters />

    <x-cards-grid>

  <!-- Card 1 -->
  <div data-card data-title="Studio Lumineux Canal" data-location="Paris, 10ème Arr." data-price="550€" data-image="https://lh3.googleusercontent.com/aida-public/AB6AXuALVHvqT1W_m5HkYfNQZw51bmB8rMQxZMiGQQXbB_yQN4zmeWLAu_-TbrGa0D10J5Fqm_HDg6ivF1EChr4OEEtrlqjeWWJ1Tcis1v4OkrfJRU6gRnITypZBg7zSuY9-Vkub12LT8CZeubxb6sOdfxnzIz7Vng1WKkI3_2G4tK0vd9FI8bwUBzKJ6as3bjb3VUYgf8fUiMu6xp_gGYpLiQeMGp0qRFVsYJedPMO7HG6YhswMJbXqhKt8vIV4fQgMpbizDx4eC_GwHmX-" data-features="Wifi,Meublé,Sécurisé" data-size="28 m²" data-rooms="Studio" data-capacity="2" data-description="Magnifique studio lumineux idéalement situé le long du canal Saint-Martin. Entièrement rénové, meublé avec goût et parfait pour une ou deux personnes." class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-transparent hover:border-secondary-container group">
        <div class="relative h-60 overflow-hidden">
          <img alt="Studio Lumineux Canal" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
               src="https://lh3.googleusercontent.com/aida-public/AB6AXuALVHvqT1W_m5HkYfNQZw51bmB8rMQxZMiGQQXbB_yQN4zmeWLAu_-TbrGa0D10J5Fqm_HDg6ivF1EChr4OEEtrlqjeWWJ1Tcis1v4OkrfJRU6gRnITypZBg7zSuY9-Vkub12LT8CZeubxb6sOdfxnzIz7Vng1WKkI3_2G4tK0vd9FI8bwUBzKJ6as3bjb3VUYgf8fUiMu6xp_gGYpLiQeMGp0qRFVsYJedPMO7HG6YhswMJbXqhKt8vIV4fQgMpbizDx4eC_GwHmX-" />
          <button class="absolute top-md right-md bg-white/80 backdrop-blur-md p-xs rounded-full shadow-md text-secondary hover:text-error transition-colors">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">favorite</span>
          </button>
          <div class="absolute bottom-md left-md bg-primary/90 text-on-primary px-md py-xs rounded-lg font-h3 text-body-md backdrop-blur-sm">550€<span class="text-label-sm font-normal">/mois</span></div>
        </div>
        <div class="p-lg space-y-md">
          <div>
            <h3 class="text-h3 font-h3 text-primary truncate">Studio Lumineux Canal</h3>
            <p class="text-body-sm font-body-sm text-outline flex items-center gap-xs"><span class="material-symbols-outlined text-[18px]">location_on</span> Paris, 10ème Arr.</p>
          </div>
          <div class="flex flex-wrap gap-xs">
            <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Wifi</span>
            <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Meublé</span>
            <span class="px-sm py-0.5 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Sécurisé</span>
          </div>
          <button @click="openModal({ title: $event.currentTarget.closest('[data-card]').dataset.title, price: $event.currentTarget.closest('[data-card]').dataset.price, location: $event.currentTarget.closest('[data-card]').dataset.location, image: $event.currentTarget.closest('[data-card]').dataset.image, description: $event.currentTarget.closest('[data-card]').dataset.description, size: $event.currentTarget.closest('[data-card]').dataset.size, rooms: $event.currentTarget.closest('[data-card]').dataset.rooms, capacity: $event.currentTarget.closest('[data-card]').dataset.capacity, features: ($event.currentTarget.closest('[data-card]').dataset.features || '').split(',') })" 
                  class="w-full py-md bg-surface-container-high text-primary font-label-md text-label-md rounded-xl hover:bg-secondary-container hover:text-on-secondary-container transition-all">
            Voir détails
          </button>
        </div>
      </div>

  <!-- Card 2 -->
  <div data-card data-title="Colocation Loft Industriel" data-location="Lyon, Confluence" data-price="720€" data-image="https://lh3.googleusercontent.com/aida-public/AB6AXuBCYCN-tUW4UBCB6BUgMZdURfLwq9G_t2O3cofGfnzOtRHlbSy0CSM88pLuKhrQAU4ibAU1sjGy1IS-RVU4B_zNU3hTi2yQwsiBvNdcrEOgv1QEcyij8RA5Ku8ttCJzlaSBzO5rOl2LyRGUX1AVHhF9h3aMi0Tn0sd1QV5UHZmBl9c-TzlLE-EZm_64vSL8Gi_Hr7T956_A7Y2AHOf64qabkSOIsKhBD5mo1siHJFL88qspDZg-6Gb9eDF10XMQNGf69-MLRgmsd0e_" data-features="Terrasse,Proche Metro,Vérifié" data-size="" data-rooms="Loft" data-capacity="4" data-description="Loft industriel spacieux en colocation, proche des transports et commodités." class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-transparent hover:border-secondary-container group">
        <div class="relative h-60 overflow-hidden">
          <img alt="Colocation Loft Industriel" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
               src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCYCN-tUW4UBCB6BUgMZdURfLwq9G_t2O3cofGfnzOtRHlbSy0CSM88pLuKhrQAU4ibAU1sjGy1IS-RVU4B_zNU3hTi2yQwsiBvNdcrEOgv1QEcyij8RA5Ku8ttCJzlaSBzO5rOl2LyRGUX1AVHhF9h3aMi0Tn0sd1QV5UHZmBl9c-TzlLE-EZm_64vSL8Gi_Hr7T956_A7Y2AHOf64qabkSOIsKhBD5mo1siHJFL88qspDZg-6Gb9eDF10XMQNGf69-MLRgmsd0e_" />
          <button class="absolute top-md right-md bg-white/80 backdrop-blur-md p-xs rounded-full shadow-md text-outline hover:text-error transition-colors">
            <span class="material-symbols-outlined">favorite</span>
          </button>
          <div class="absolute bottom-md left-md bg-primary/90 text-on-primary px-md py-xs rounded-lg font-h3 text-body-md backdrop-blur-sm">720€<span class="text-label-sm font-normal">/mois</span></div>
        </div>
        <div class="p-lg space-y-md">
          <div>
            <h3 class="text-h3 font-h3 text-primary truncate">Colocation Loft Industriel</h3>
            <p class="text-body-sm font-body-sm text-outline flex items-center gap-xs"><span class="material-symbols-outlined text-[18px]">location_on</span> Lyon, Confluence</p>
          </div>
          <div class="flex flex-wrap gap-xs">
            <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Terrasse</span>
            <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Proche Metro</span>
            <span class="px-sm py-0.5 bg-secondary-fixed text-on-secondary-fixed-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Vérifié</span>
          </div>
          <button @click="openModal({ title: $event.currentTarget.closest('[data-card]').dataset.title, price: $event.currentTarget.closest('[data-card]').dataset.price, location: $event.currentTarget.closest('[data-card]').dataset.location, image: $event.currentTarget.closest('[data-card]').dataset.image, description: $event.currentTarget.closest('[data-card]').dataset.description, size: $event.currentTarget.closest('[data-card]').dataset.size, rooms: $event.currentTarget.closest('[data-card]').dataset.rooms, capacity: $event.currentTarget.closest('[data-card]').dataset.capacity, features: ($event.currentTarget.closest('[data-card]').dataset.features || '').split(',') })" 
                  class="w-full py-md bg-surface-container-high text-primary font-label-md text-label-md rounded-xl hover:bg-secondary-container hover:text-on-secondary-container transition-all">
            Voir détails
          </button>
        </div>
      </div>

  <!-- Card 3 -->
  <div data-card data-title="Chambre Confort chez l'habitant" data-location="Bordeaux, Chartrons" data-price="480€" data-image="https://lh3.googleusercontent.com/aida-public/AB6AXuDwdZse6KIKarE_3-7Yg0bgAE0lR0tR149PvqGelrAHV3QjAVBoCItlcSJsWXT9Mkpy1-BWwvwnTWr4ZXjjbCDad1nsukDHtucPGjQNTFZvbikS4MSuGZcJpEs15J6zP5Tt6qJPjXJj0aM1qba_PCNhTp7_waoEhg-05c504nT1IDwG0XXWQnTyL7d1jCRa0Hz0CA2rx75PzQCACBvcDwn_T-q_wGWY-Kw5jbbu1w9Jaz_Z4bN1m_ITj5RO1l6Ec9P3ib4zT9zB3PME" data-features="Calme,Bureau,Jardin" data-size="" data-rooms="Chambre" data-capacity="1" data-description="Chambre individuelle confortable chez l'habitant, quartier calme." class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-transparent hover:border-secondary-container group">
        <div class="relative h-60 overflow-hidden">
          <img alt="Chambre Confort chez l'habitant" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
               src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwdZse6KIKarE_3-7Yg0bgAE0lR0tR149PvqGelrAHV3QjAVBoCItlcSJsWXT9Mkpy1-BWwvwnTWr4ZXjjbCDad1nsukDHtucPGjQNTFZvbikS4MSuGZcJpEs15J6zP5Tt6qJPjXJj0aM1qba_PCNhTp7_waoEhg-05c504nT1IDwG0XXWQnTyL7d1jCRa0Hz0CA2rx75PzQCACBvcDwn_T-q_wGWY-Kw5jbbu1w9Jaz_Z4bN1m_ITj5RO1l6Ec9P3ib4zT9zB3PME" />
          <button class="absolute top-md right-md bg-white/80 backdrop-blur-md p-xs rounded-full shadow-md text-outline hover:text-error transition-colors">
            <span class="material-symbols-outlined">favorite</span>
          </button>
          <div class="absolute bottom-md left-md bg-primary/90 text-on-primary px-md py-xs rounded-lg font-h3 text-body-md backdrop-blur-sm">480€<span class="text-label-sm font-normal">/mois</span></div>
        </div>
        <div class="p-lg space-y-md">
          <div>
            <h3 class="text-h3 font-h3 text-primary truncate">Chambre Confort chez l'habitant</h3>
            <p class="text-body-sm font-body-sm text-outline flex items-center gap-xs"><span class="material-symbols-outlined text-[18px]">location_on</span> Bordeaux, Chartrons</p>
          </div>
          <div class="flex flex-wrap gap-xs">
            <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Calme</span>
            <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Bureau</span>
            <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Jardin</span>
          </div>
          <button @click="openModal({ title: $event.currentTarget.closest('[data-card]').dataset.title, price: $event.currentTarget.closest('[data-card]').dataset.price, location: $event.currentTarget.closest('[data-card]').dataset.location, image: $event.currentTarget.closest('[data-card]').dataset.image, description: $event.currentTarget.closest('[data-card]').dataset.description, size: $event.currentTarget.closest('[data-card]').dataset.size, rooms: $event.currentTarget.closest('[data-card]').dataset.rooms, capacity: $event.currentTarget.closest('[data-card]').dataset.capacity, features: ($event.currentTarget.closest('[data-card]').dataset.features || '').split(',') })" 
                  class="w-full py-md bg-surface-container-high text-primary font-label-md text-label-md rounded-xl hover:bg-secondary-container hover:text-on-secondary-container transition-all">
            Voir détails
          </button>
        </div>
      </div>

  <!-- Card 4 -->
  <div data-card data-title="Studio Moderne hyper-centre" data-location="Nantes, Centre" data-price="650€" data-image="https://lh3.googleusercontent.com/aida-public/AB6AXuAZnNQmGtX-uY7gJrPuYEvrdspdf4rno8XcqsAWb03zFvFxtvEcHPJtXwp3Eoj2dRoF5rWal2-SsnSdOQNMDOZ8v27XrreuhPRNhJBdmh5eR4CyhRBwaGZNtIgBAfYwgGgR1RcEzpiHdW27g6UibKkCbIL8T55U-dqQfB0uOa2RtDbTgrHBJS0zeEGljU97coxc32IZHa-g91fobveaWGL3Q3gl3b06ALSdLwVfZv0gnEyKrXUDDJDWfTihaKtsujag7OYX7ITHx4oE" data-features="Neuf,Lave-linge,Smart Home" data-size="" data-rooms="Studio" data-capacity="2" data-description="Studio moderne, emplacement central, équipé et prêt à emménager." class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-transparent hover:border-secondary-container group">
        <div class="relative h-60 overflow-hidden">
          <img alt="Studio Moderne hyper-centre" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
               src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZnNQmGtX-uY7gJrPuYEvrdspdf4rno8XcqsAWb03zFvFxtvEcHPJtXwp3Eoj2dRoF5rWal2-SsnSdOQNMDOZ8v27XrreuhPRNhJBdmh5eR4CyhRBwaGZNtIgBAfYwgGgR1RcEzpiHdW27g6UibKkCbIL8T55U-dqQfB0uOa2RtDbTgrHBJS0zeEGljU97coxc32IZHa-g91fobveaWGL3Q3gl3b06ALSdLwVfZv0gnEyKrXUDDJDWfTihaKtsujag7OYX7ITHx4oE" />
          <button class="absolute top-md right-md bg-white/80 backdrop-blur-md p-xs rounded-full shadow-md text-outline hover:text-error transition-colors">
            <span class="material-symbols-outlined">favorite</span>
          </button>
          <div class="absolute bottom-md left-md bg-primary/90 text-on-primary px-md py-xs rounded-lg font-h3 text-body-md backdrop-blur-sm">650€<span class="text-label-sm font-normal">/mois</span></div>
        </div>
        <div class="p-lg space-y-md">
          <div>
            <h3 class="text-h3 font-h3 text-primary truncate">Studio Moderne hyper-centre</h3>
            <p class="text-body-sm font-body-sm text-outline flex items-center gap-xs"><span class="material-symbols-outlined text-[18px]">location_on</span> Nantes, Centre</p>
          </div>
          <div class="flex flex-wrap gap-xs">
            <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Neuf</span>
            <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Lave-linge</span>
            <span class="px-sm py-0.5 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">Smart Home</span>
          </div>
          <button @click="openModal({ title: $event.currentTarget.closest('[data-card]').dataset.title, price: $event.currentTarget.closest('[data-card]').dataset.price, location: $event.currentTarget.closest('[data-card]').dataset.location, image: $event.currentTarget.closest('[data-card]').dataset.image, description: $event.currentTarget.closest('[data-card]').dataset.description, size: $event.currentTarget.closest('[data-card]').dataset.size, rooms: $event.currentTarget.closest('[data-card]').dataset.rooms, capacity: $event.currentTarget.closest('[data-card]').dataset.capacity, features: ($event.currentTarget.closest('[data-card]').dataset.features || '').split(',') })" 
                  class="w-full py-md bg-surface-container-high text-primary font-label-md text-label-md rounded-xl hover:bg-secondary-container hover:text-on-secondary-container transition-all">
            Voir détails
          </button>
        </div>
      </div>

    </x-cards-grid>

    <x-pagination />
  </div>

  <x-right-sidebar />

  <!-- ====================== GRANDE MODAL ====================== -->
  <div x-show="showModal" 
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
  </div>

</x-layouts.app>