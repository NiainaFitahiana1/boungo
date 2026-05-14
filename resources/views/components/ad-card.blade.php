@props(['ad'])

<div data-card 
     data-title="{{ $ad->title }}" 
     data-location="{{ $ad->city }}" 
     data-price="{{ $ad->price }}€" 
     data-image="{{ $ad->images->first()?->url ?? 'https://via.placeholder.com/300x300?text=No+Image' }}" 
     data-features="{{ $ad->attributes['features'] ?? '' }}" 
     data-size="{{ $ad->attributes['size'] ?? '' }}" 
     data-rooms="{{ $ad->attributes['rooms'] ?? '' }}" 
     data-capacity="{{ $ad->attributes['capacity'] ?? '' }}" 
     data-description="{{ $ad->description }}"
     class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-transparent hover:border-secondary-container group">
  
  <div class="relative h-60 overflow-hidden">
    <img alt="{{ $ad->title }}" 
         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
         src="{{ $ad->images->first()?->url ?? 'https://via.placeholder.com/300x300?text=No+Image' }}" />
    <button class="absolute top-md right-md bg-white/80 backdrop-blur-md p-xs rounded-full shadow-md text-outline hover:text-error transition-colors">
      <span class="material-symbols-outlined">favorite</span>
    </button>
    <div class="absolute bottom-md left-md bg-primary/90 text-on-primary px-md py-xs rounded-lg font-h3 text-body-md backdrop-blur-sm">
      {{ $ad->price }}<span class="text-label-sm font-normal">/mois</span>
    </div>
  </div>

  <div class="p-lg space-y-md">
    <div>
      <h3 class="text-h3 font-h3 text-primary truncate">{{ $ad->title }}</h3>
      <p class="text-body-sm font-body-sm text-outline flex items-center gap-xs">
        <span class="material-symbols-outlined text-[18px]">location_on</span> {{ $ad->city }}
      </p>
    </div>
    
    @if(isset($ad->attributes['features']) && $ad->attributes['features'])
      <div class="flex flex-wrap gap-xs">
        @foreach(explode(',', $ad->attributes['features']) as $feature)
          <span class="px-sm py-0.5 bg-surface-variant text-on-surface-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">
            {{ trim($feature) }}
          </span>
        @endforeach
      </div>
    @endif
    
    <button @click="openModal({ title: $event.currentTarget.closest('[data-card]').dataset.title, price: $event.currentTarget.closest('[data-card]').dataset.price, location: $event.currentTarget.closest('[data-card]').dataset.location, image: $event.currentTarget.closest('[data-card]').dataset.image, description: $event.currentTarget.closest('[data-card]').dataset.description, size: $event.currentTarget.closest('[data-card]').dataset.size, rooms: $event.currentTarget.closest('[data-card]').dataset.rooms, capacity: $event.currentTarget.closest('[data-card]').dataset.capacity, features: ($event.currentTarget.closest('[data-card]').dataset.features || '').split(',') })" 
            class="w-full py-md bg-surface-container-high text-primary font-label-md text-label-md rounded-xl hover:bg-secondary-container hover:text-on-secondary-container transition-all">
      Voir détails
    </button>
  </div>
</div>
