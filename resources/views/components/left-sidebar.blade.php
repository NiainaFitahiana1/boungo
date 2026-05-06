<aside class="hidden lg:flex flex-col fixed left-gutter top-24 h-[calc(100vh-8rem)] z-40 bg-surface-container-low shadow-md rounded-xl w-72 overflow-y-auto">
  <div class="p-lg border-b border-outline-variant">
    <h2 class="text-h2 font-h2 text-primary text-xl">Affiner la recherche</h2>
    <p class="text-label-md font-label-md text-on-surface-variant mt-xs">Trouvez votre foyer idéal</p>
  </div>
  <div class="p-lg space-y-xl">
    <div class="space-y-md">
      <div class="flex items-center gap-sm text-primary">
        <span class="material-symbols-outlined">payments</span>
        <span class="font-label-md text-label-md uppercase tracking-wider">Prix Max</span>
      </div>
      <div class="relative w-full h-2 bg-surface-variant rounded-full mt-lg">
        <div class="absolute left-0 top-0 h-full w-2/3 bg-secondary-container rounded-full"></div>
        <div class="absolute left-2/3 top-1/2 -translate-y-1/2 w-5 h-5 bg-on-secondary-fixed-variant rounded-full shadow-lg cursor-pointer ring-4 ring-surface"></div>
      </div>
      <div class="flex justify-between text-label-sm font-label-sm text-on-surface-variant">
        <span>200€</span>
        <span>1200€+</span>
      </div>
    </div>
    <div class="space-y-md">
      <div class="flex items-center gap-sm text-primary">
        <span class="material-symbols-outlined">home_work</span>
        <span class="font-label-md text-label-md uppercase tracking-wider">Type de bien</span>
      </div>
      <div class="grid grid-cols-2 gap-sm">
        <button class="bg-secondary-container text-on-secondary-container rounded-lg p-3 text-label-sm font-label-sm flex items-center justify-center gap-xs">Appartement</button>
        <button class="bg-surface-variant text-on-surface-variant rounded-lg p-3 text-label-sm font-label-sm flex items-center justify-center gap-xs">Maison</button>
        <button class="bg-surface-variant text-on-surface-variant rounded-lg p-3 text-label-sm font-label-sm flex items-center justify-center gap-xs">Chambre</button>
        <button class="bg-surface-variant text-on-surface-variant rounded-lg p-3 text-label-sm font-label-sm flex items-center justify-center gap-xs">Coloc</button>
      </div>
    </div>
    <div class="space-y-md">
      <div class="flex items-center gap-sm text-primary">
        <span class="material-symbols-outlined">location_on</span>
        <span class="font-label-md text-label-md uppercase tracking-wider">Localisation</span>
      </div>
      <input class="w-full bg-surface-container-highest border-none rounded-lg p-md text-body-sm font-body-sm focus:ring-2 focus:ring-secondary-container outline-none" placeholder="Ville ou quartier" type="text" />
    </div>
    <div class="space-y-md">
      <div class="flex items-center gap-sm text-primary">
        <span class="material-symbols-outlined">bed</span>
        <span class="font-label-md text-label-md uppercase tracking-wider">Chambres</span>
      </div>
      <div class="flex gap-xs">
        <button class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-label-md font-label-md hover:bg-secondary-container transition-all">1+</button>
        <button class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-label-md font-label-md hover:bg-secondary-container transition-all">2+</button>
        <button class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-label-md font-label-md hover:bg-secondary-container transition-all">3+</button>
        <button class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-label-md font-label-md hover:bg-secondary-container transition-all">4+</button>
      </div>
    </div>
  </div>
  <div class="mt-auto p-lg border-t border-outline-variant">
    <button class="w-full py-md bg-primary text-on-primary rounded-xl font-label-md text-label-md hover:bg-secondary transition-all flex items-center justify-center gap-sm">
      <span class="material-symbols-outlined">tune</span>
      Réinitialiser les filtres
    </button>
  </div>
</aside>
