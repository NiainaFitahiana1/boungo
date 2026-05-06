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
    <button class="material-symbols-outlined text-on-surface-variant p-sm hover:bg-surface-variant rounded-full transition-all">language</button>
    <div class="flex items-center gap-sm bg-surface-container-high rounded-full px-sm py-xs border border-outline-variant hover:shadow-md transition-all cursor-pointer">
      <span class="material-symbols-outlined">menu</span>
      <span class="material-symbols-outlined text-on-surface-variant" style="font-variation-settings: 'FILL' 1">account_circle</span>
    </div>
  </div>
</nav>
