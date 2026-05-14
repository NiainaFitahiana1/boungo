<aside class="hidden lg:flex flex-col fixed left-gutter top-24 h-[calc(100vh-8rem)] z-40 bg-surface-container-low shadow-md rounded-xl w-72 overflow-y-auto">
  
  <!-- Header -->
  <div class="p-lg border-b border-outline-variant">
    <h2 class="text-h2 font-h2 text-primary text-xl">Mon Espace</h2>
    <p class="text-label-md font-label-md text-on-surface-variant mt-xs">Connectez-vous pour ne rien manquer</p>
  </div>

  <!-- Profil Teaser -->
  <div class="p-lg border-b border-outline-variant">
    <div class="flex items-center gap-md">
      <div class="w-14 h-14 bg-surface-variant rounded-2xl flex items-center justify-center text-4xl">
        👤
      </div>
      <div>
        <p class="font-medium text-on-surface">Invité</p>
        <p class="text-label-sm text-on-surface-variant">Connectez-vous pour personnaliser votre expérience</p>
      </div>
    </div>
  </div>

  <div class="p-lg space-y-xl">

    <!-- Avantages de l'inscription -->
    <div class="space-y-md">
      <div class="flex items-center gap-sm text-primary">
        <span class="material-symbols-outlined">star</span>
        <span class="font-label-md text-label-md uppercase tracking-wider">Pourquoi s'inscrire ?</span>
      </div>
      
      <div class="space-y-sm text-body-sm">
        <div class="flex gap-sm items-start">
          <span class="material-symbols-outlined text-secondary mt-0.5">favorite</span>
          <div>
            <p class="font-medium">Sauvegardez vos coups de cœur</p>
            <p class="text-on-surface-variant text-label-sm">Retrouvez tous vos logements favoris en un clic</p>
          </div>
        </div>
        
        <div class="flex gap-sm items-start">
          <span class="material-symbols-outlined text-secondary mt-0.5">search</span>
          <div>
            <p class="font-medium">Recherches sauvegardées</p>
            <p class="text-on-surface-variant text-label-sm">Recevez les nouvelles annonces correspondantes</p>
          </div>
        </div>
        
        <div class="flex gap-sm items-start">
          <span class="material-symbols-outlined text-secondary mt-0.5">notifications</span>
          <div>
            <p class="font-medium">Alertes personnalisées</p>
            <p class="text-on-surface-variant text-label-sm">Ne manquez plus jamais le bon logement</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Stats rapides -->
    <div class="space-y-md">
      <div class="flex items-center gap-sm text-primary">
        <span class="material-symbols-outlined">bar_chart</span>
        <span class="font-label-md text-label-md uppercase tracking-wider">Communauté</span>
      </div>
      <div class="grid grid-cols-2 gap-sm text-center">
        <div class="bg-surface-container-highest rounded-xl p-3">
          <p class="text-2xl font-semibold text-primary">1248</p>
          <p class="text-label-sm text-on-surface-variant">Logements</p>
        </div>
        <div class="bg-surface-container-highest rounded-xl p-3">
          <p class="text-2xl font-semibold text-primary">86</p>
          <p class="text-label-sm text-on-surface-variant">Nouveautés</p>
        </div>
      </div>
    </div>

    <!-- Derniers favoris (teaser) -->
    <div class="space-y-md">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-sm text-primary">
          <span class="material-symbols-outlined">favorite</span>
          <span class="font-label-md text-label-md uppercase tracking-wider">Favoris</span>
        </div>
        <span class="text-label-sm text-on-surface-variant">0</span>
      </div>
      
      <div class="bg-surface-variant/50 rounded-xl p-4 text-center text-on-surface-variant text-label-sm border border-dashed border-outline-variant">
        Vos logements favoris apparaîtront ici
      </div>
    </div>

  </div>

  <!-- Footer CTA -->
  <div class="mt-auto p-lg border-t border-outline-variant space-y-md">
    <button onclick="window.location.href='/register'" 
            class="w-full py-3.5 bg-primary text-on-primary rounded-2xl font-label-md text-label-md hover:bg-primary/90 transition-all flex items-center justify-center gap-sm shadow-md">
      <span class="material-symbols-outlined">person_add</span>
      Créer mon compte gratuit
    </button>
    
    <button onclick="window.location.href='/login'" 
            class="w-full py-3 bg-surface-container-highest text-on-surface rounded-2xl font-label-md text-label-md hover:bg-surface-container transition-all">
      J'ai déjà un compte
    </button>
  </div>

</aside>