<x-layouts.app>
  <x-left-sidebar />

  <div class="md:col-span-12 lg:col-span-12 lg:ml-80">
    <div class="min-h-screen w-100flex items-center justify-center py-12 px-6">
        <div class="text-center">
            <div class="mb-6 inline-flex items-center justify-center w-32 h-32 bg-secondary-container rounded-3xl">
                <span class="material-symbols-outlined text-[80px] text-secondary">search_off</span>
            </div>
            
            <h2 class="text-h3 font-h3 text-primary mb-3"><span class="text-secondary">404</span> Oups ! On s'est perdu</h2>
            <p class="text-body-md text-outline max-w-xs mx-auto">
                La page que vous cherchez n'existe pas.
            </p>

            <a href="/" 
               class="mt-10 inline-block px-8 py-4 bg-primary hover:bg-primary-hover text-on-primary rounded-2xl font-medium transition-all">
                Retour à l'accueil
            </a>
        </div>
    </div>
  </div>
</x-layouts.app>