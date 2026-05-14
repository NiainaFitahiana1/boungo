<x-layouts.app>
    <x-left-sidebar-user-info/>
    <div class="md:col-span-12 lg:col-span-9 lg:ml-80 glass-panel p-xl rounded-2xl shadow-sm space-y-xl w-full">
        <section class="grid grid-cols-1 md:grid-cols-2 gap-xl">
            <div class="col-span-full border-b border-outline-variant pb-md">
                <h3 class="font-h3 text-h3 text-primary flex items-center gap-sm">
                    <span class="material-symbols-outlined text-secondary">location_on</span>
                    Localisation & Type
                </h3>
            </div>

            <div class="space-y-sm">
                <label class="font-label-md text-on-surface">Titre de l'annonce</label>
                <input name="title" type="text" 
                    class="w-full p-md bg-surface-container-lowest border-outline rounded-xl focus:ring-secondary focus:border-secondary transition-all" 
                    placeholder="Ex: Studio moderne centre-ville"/>
            </div>

            <div class="space-y-sm">
                <label class="font-label-md text-on-surface">Type de bien</label>
                <select name="property_type" 
                        class="w-full p-md bg-surface-container-lowest border-outline rounded-xl focus:ring-secondary transition-all">
                    <option value="">Sélectionnez un type</option>
                    <option value="appartement">Appartement</option>
                    <option value="studio">Studio</option>
                    <option value="maison">Maison</option>
                    <option value="chambre">Chambre</option>
                </select>
            </div>

            <div class="space-y-sm">
                <label class="font-label-md text-on-surface">Localisation</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">search</span>
                    <input name="location" type="text" 
                        class="w-full pl-xl p-md bg-surface-container-lowest border-outline rounded-xl focus:ring-secondary transition-all" 
                        placeholder="Adresse, ville, quartier..."/>
                </div>
            </div>

            <div class="space-y-sm">
                <label class="font-label-md text-on-surface">Prix mensuel (€)</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute right-md top-1/2 -translate-y-1/2 text-outline">euro</span>
                    <input name="price" type="number" 
                        class="w-full p-md bg-surface-container-lowest border-outline rounded-xl focus:ring-secondary transition-all" 
                        placeholder="0.00"/>
                </div>
            </div>
        </section>
        <section class="space-y-lg">
            <div class="border-b border-outline-variant pb-md">
                <h3 class="font-h3 text-h3 text-primary flex items-center gap-sm">
                    <span class="material-symbols-outlined text-secondary">add_a_photo</span>
                    Photos Primordiales
                </h3>
                <p class="text-body-sm text-on-surface-variant mt-1">Ajoutez au minimum 3 photos (la première sera l'image principale)</p>
            </div>

            <div class="border-2 border-dashed border-outline-variant rounded-2xl p-2xl flex flex-col items-center justify-center gap-md bg-surface-container-low hover:bg-surface-container hover:border-secondary transition-colors cursor-pointer group">
                <div class="w-16 h-16 bg-white rounded-full shadow-sm flex items-center justify-center text-secondary group-hover:scale-110 duration-300">
                    <span class="material-symbols-outlined text-[32px]">cloud_upload</span>
                </div>
                <div class="text-center">
                    <p class="text-body-lg font-bold">Glissez-déposez vos photos ici</p>
                    <p class="text-body-sm text-on-surface-variant">JPG, PNG, WEBP • Max 10MB par photo</p>
                </div>
                <button type="button" class="bg-primary text-on-primary px-lg py-sm rounded-full font-label-md">
                    Parcourir les fichiers
                </button>
            </div>

            <!-- Photo Grid Preview -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-md">
                <!-- Exemple d'images existantes (à gérer dynamiquement) -->
                <div class="aspect-video rounded-xl overflow-hidden bg-surface-dim relative group">
                    <img class="w-full h-full object-cover" src="https://..." alt="Photo principale"/>
                    <div class="absolute top-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">Principale</div>
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
                        <button type="button" class="text-white hover:text-red-400">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </div>
                
                <!-- Autres emplacements vides -->
                <div class="aspect-video rounded-xl border-2 border-dashed border-outline-variant flex items-center justify-center text-outline-variant hover:border-secondary transition-colors">
                    <span class="material-symbols-outlined text-3xl">add</span>
                </div>
                <div class="aspect-video rounded-xl border-2 border-dashed border-outline-variant flex items-center justify-center text-outline-variant hover:border-secondary transition-colors">
                    <span class="material-symbols-outlined text-3xl">add</span>
                </div>
                <div class="aspect-video rounded-xl border-2 border-dashed border-outline-variant flex items-center justify-center text-outline-variant hover:border-secondary transition-colors">
                    <span class="material-symbols-outlined text-3xl">add</span>
                </div>
            </div>
        </section>
        <section class="space-y-lg">
            <div class="border-b border-outline-variant pb-md">
                <h3 class="font-h3 text-h3 text-primary flex items-center gap-sm">
                    <span class="material-symbols-outlined text-secondary">check_circle</span>
                    Équipements
                </h3>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-md">
                <label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
                    <input type="checkbox" name="amenities[]" value="wifi" class="rounded text-secondary focus:ring-secondary"/>
                    <span class="text-body-sm">Wifi</span>
                </label>
                <label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
                    <input type="checkbox" name="amenities[]" value="lave-linge" class="rounded text-secondary focus:ring-secondary"/>
                    <span class="text-body-sm">Lave-linge</span>
                </label>
                <!-- Ajoute les autres équipements ici -->
                <label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
                    <input type="checkbox" name="amenities[]" value="cuisine-equipee" class="rounded text-secondary focus:ring-secondary"/>
                    <span class="text-body-sm">Cuisine équipée</span>
                </label>
                <label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
                    <input type="checkbox" name="amenities[]" value="parking" class="rounded text-secondary focus:ring-secondary"/>
                    <span class="text-body-sm">Parking</span>
                </label>
                <!-- ... continue avec les autres ... -->
            </div>
        </section>
        <section class="space-y-lg">
            <div class="border-b border-outline-variant pb-md">
                <h3 class="font-h3 text-h3 text-primary flex items-center gap-sm">
                    <span class="material-symbols-outlined text-secondary">description</span>
                    Description détaillée
                </h3>
            </div>
            <div class="space-y-sm">
                <textarea name="description" rows="7" 
                        class="w-full p-xl bg-surface-container-lowest border-outline rounded-2xl focus:ring-secondary transition-all"
                        placeholder="Décrivez votre bien, les points forts, le quartier, les transports..."></textarea>
                <p class="text-label-sm text-on-surface-variant text-right">0 / 2000 caractères</p>
            </div>
        </section>
    </div>
</x-layouts.app>