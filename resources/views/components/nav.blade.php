<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-gutter py-md bg-surface/95 backdrop-blur-md shadow-sm dark:shadow-none">
  <div class="flex items-center gap-xl">
    <span class="text-h3 font-h3 text-secondary dark:text-secondary-fixed">
        <img src="{{asset("no-bg.png")}}" alt="" class="h-12">
    </span>
    <div class="hidden md:flex gap-lg">
      <a class="text-primary font-bold border-b-2 border-primary pb-1 font-body-md text-body-md hover:text-secondary transition-colors duration-200" href="#">Explorer</a>
      <a class="text-on-surface-variant dark:text-surface-variant font-body-md text-body-md hover:text-secondary transition-colors duration-200" href="#">Devenir Hôte</a>
      <a class="text-on-surface-variant dark:text-surface-variant font-body-md text-body-md hover:text-secondary transition-colors duration-200" href="#">Aide</a>
    </div>
  </div>

  <div class="flex items-center gap-md">
    <!-- Language Dropdown -->
    <div x-data="{ open: false }" class="relative">
      <button 
        @click="open = !open"
        class="material-symbols-outlined text-on-surface-variant p-sm hover:bg-surface-variant rounded-full transition-all flex items-center gap-1"
        :class="{ 'bg-surface-variant': open }">
        language
      </button>

      <!-- Dropdown Menu -->
      <div 
        x-show="open"
        @click.outside="open = false"
        class="absolute right-0 mt-2 w-48 bg-surface-container rounded-2xl shadow-xl border border-outline-variant py-2 z-50 overflow-hidden">
        
        <a href="#" class="flex items-center gap-3 px-5 py-3 hover:bg-surface-variant transition-colors">
          <span class="text-xl">🇫🇷</span>
          <span class="font-medium">Français</span>
        </a>
        
        <a href="#" class="flex items-center gap-3 px-5 py-3 hover:bg-surface-variant transition-colors">
          <span class="text-xl">🇬🇧</span>
          <span class="font-medium">English</span>
        </a>
      </div>
    </div>

    <button class="hidden md:flex bg-secondary-container text-on-secondary-container rounded-lg p-3 text-label-sm font-label-sm items-center justify-center gap-xs">
      DECOUVRIR PREMIUM
    </button>
  </div>
</nav>