<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "inverse-surface": "#2d3133",
                    "inverse-on-surface": "#eff1f3",
                    "surface-tint": "#525e7b",
                    "on-surface": "#191c1e",
                    "on-primary": "#ffffff",
                    "surface-container-low": "#f2f4f6",
                    "on-secondary-fixed-variant": "#653e00",
                    "primary-fixed": "#d9e2ff",
                    "on-error-container": "#93000a",
                    "tertiary-fixed-dim": "#b7c8e1",
                    "primary-container": "#1e2a44",
                    "on-secondary-container": "#684000",
                    "tertiary": "#051629",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-highest": "#e0e3e5",
                    "surface-bright": "#f7f9fb",
                    "on-tertiary-container": "#8292ab",
                    "surface-dim": "#d8dadc",
                    "tertiary-container": "#1b2b3f",
                    "on-secondary": "#ffffff",
                    "secondary-container": "#fea619",
                    "outline-variant": "#c5c6ce",
                    "surface-container-high": "#e6e8ea",
                    "on-tertiary-fixed-variant": "#38485d",
                    "on-primary-container": "#8591b0",
                    "on-secondary-fixed": "#2a1700",
                    "tertiary-fixed": "#d3e4fe",
                    "surface-variant": "#e0e3e5",
                    "on-background": "#191c1e",
                    "inverse-primary": "#bac6e7",
                    "on-primary-fixed": "#0e1b34",
                    "error-container": "#ffdad6",
                    "outline": "#75777e",
                    "on-tertiary": "#ffffff",
                    "secondary-fixed": "#ffddb8",
                    "on-surface-variant": "#45464d",
                    "on-error": "#ffffff",
                    "surface-container": "#eceef0",
                    "primary-fixed-dim": "#bac6e7",
                    "primary": "#08152e",
                    "background": "#f7f9fb",
                    "surface": "#f7f9fb",
                    "error": "#ba1a1a",
                    "on-primary-fixed-variant": "#3b4662",
                    "on-tertiary-fixed": "#0b1c30",
                    "secondary-fixed-dim": "#ffb95f",
                    "secondary": "#855300"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "xl": "2.5rem",
                    "gutter": "1.5rem",
                    "2xl": "4rem",
                    "xs": "0.25rem",
                    "margin": "1rem",
                    "sm": "0.5rem",
                    "md": "1rem",
                    "lg": "1.5rem",
                    "base": "8px"
            },
            "fontFamily": {
                    "h2": ["Inter"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "body-sm": ["Inter"],
                    "h3": ["Inter"],
                    "h1": ["Inter"]
            },
            "fontSize": {
                    "h2": ["32px", {"lineHeight": "1.25", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "label-md": ["14px", {"lineHeight": "1", "letterSpacing": "0.01em", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "h1": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .step-active { width: 100%; transition: width 0.5s ease-in-out; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-background font-body-md text-on-surface">
<!-- SideNavBar (Authority Source: JSON) -->
<aside class="fixed left-0 top-0 h-full flex flex-col p-md bg-primary dark:bg-primary-container shadow-md z-50 w-64">
<div class="mb-xl px-sm">
<h1 class="font-h3 text-h3 text-on-primary">NestLink Admin</h1>
<p class="text-label-sm text-on-primary/60 mt-xs uppercase tracking-widest">Gérez vos propriétés</p>
</div>
<nav class="flex-1 space-y-sm">
<a class="flex items-center gap-md p-md text-on-primary/70 hover:bg-white/10 rounded-lg transition-all duration-300 ease-out font-body-md" href="#">
<span class="material-symbols-outlined">dashboard</span>
                Tableau de bord
            </a>
<a class="flex items-center gap-md p-md bg-secondary-container text-on-secondary-container rounded-lg font-bold transition-all duration-300 ease-out font-body-md" href="#">
<span class="material-symbols-outlined">home_work</span>
                Mes Annonces
            </a>
<a class="flex items-center gap-md p-md text-on-primary/70 hover:bg-white/10 rounded-lg transition-all duration-300 ease-out font-body-md" href="#">
<span class="material-symbols-outlined">person</span>
                Profil
            </a>
<a class="flex items-center gap-md p-md text-on-primary/70 hover:bg-white/10 rounded-lg transition-all duration-300 ease-out font-body-md" href="#">
<span class="material-symbols-outlined">chat</span>
                Messages
            </a>
<a class="flex items-center gap-md p-md text-on-primary/70 hover:bg-white/10 rounded-lg transition-all duration-300 ease-out font-body-md" href="#">
<span class="material-symbols-outlined">settings</span>
                Paramètres
            </a>
</nav>
<div class="mt-auto space-y-sm">
<button class="w-full bg-secondary-container text-on-secondary-container font-bold py-md rounded-xl hover:scale-95 duration-150 flex items-center justify-center gap-sm">
<span class="material-symbols-outlined">add_circle</span>
                Nouvelle Annonce
            </button>
<div class="h-[1px] bg-on-primary/10 my-md"></div>
<a class="flex items-center gap-md p-md text-on-primary/70 hover:bg-white/10 rounded-lg font-body-md" href="#">
<span class="material-symbols-outlined">help</span>
                Aide
            </a>
<a class="flex items-center gap-md p-md text-on-primary/70 hover:bg-white/10 rounded-lg font-body-md" href="#">
<span class="material-symbols-outlined">logout</span>
                Déconnexion
            </a>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="ml-64 min-h-screen p-xl flex flex-col items-center">
<div class="w-full max-w-4xl space-y-xl">
<!-- Header Section -->
<header class="flex flex-col gap-sm">
<h2 class="font-h2 text-h2 text-primary">Publier une nouvelle annonce</h2>
<p class="text-body-lg text-on-surface-variant">Décrivez votre bien pour attirer les meilleurs locataires.</p>
</header>
<!-- Progress Indicator -->
<div class="grid grid-cols-3 gap-md w-full relative">
<div class="h-2 bg-surface-container-highest rounded-full overflow-hidden col-span-3 mb-sm">
<div class="h-full bg-secondary-container w-[66%]"></div>
</div>
<div class="flex flex-col gap-xs opacity-40">
<span class="text-label-sm font-bold text-primary">01 INFORMATIONS</span>
</div>
<div class="flex flex-col gap-xs">
<span class="text-label-sm font-bold text-secondary">02 DÉTAILS &amp; MÉDIAS</span>
<span class="h-1 bg-secondary w-8 rounded-full"></span>
</div>
<div class="flex flex-col gap-xs opacity-40">
<span class="text-label-sm font-bold text-primary">03 VALIDATION</span>
</div>
</div>
<!-- Form Content -->
<div class="glass-panel p-xl rounded-2xl shadow-sm space-y-xl">
<!-- Section 1: Info & Location -->
<section class="grid grid-cols-1 md:grid-cols-2 gap-xl">
<div class="col-span-full border-b border-outline-variant pb-md">
<h3 class="font-h3 text-h3 text-primary flex items-center gap-sm">
<span class="material-symbols-outlined text-secondary">location_on</span>
                            Localisation &amp; Type
                        </h3>
</div>
<div class="space-y-sm">
<label class="font-label-md text-on-surface">Titre de l'annonce</label>
<input class="w-full p-md bg-surface-container-lowest border-outline rounded-xl focus:ring-secondary focus:border-secondary transition-all" placeholder="Ex: Studio moderne centre-ville" type="text"/>
</div>
<div class="space-y-sm">
<label class="font-label-md text-on-surface">Type de bien</label>
<select class="w-full p-md bg-surface-container-lowest border-outline rounded-xl focus:ring-secondary transition-all">
<option>Appartement</option>
<option>Studio</option>
<option>Maison</option>
<option>Chambre</option>
</select>
</div>
<div class="space-y-sm">
<label class="font-label-md text-on-surface">Localisation</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">search</span>
<input class="w-full pl-xl p-md bg-surface-container-lowest border-outline rounded-xl focus:ring-secondary transition-all" placeholder="Ville, quartier..." type="text"/>
</div>
</div>
<div class="space-y-sm">
<label class="font-label-md text-on-surface">Prix mensuel (€)</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-md top-1/2 -translate-y-1/2 text-outline">euro</span>
<input class="w-full p-md bg-surface-container-lowest border-outline rounded-xl focus:ring-secondary transition-all" placeholder="0.00" type="number"/>
</div>
</div>
</section>
<!-- Section 2: Photos (Drag & Drop) -->
<section class="space-y-lg">
<div class="border-b border-outline-variant pb-md">
<h3 class="font-h3 text-h3 text-primary flex items-center gap-sm">
<span class="material-symbols-outlined text-secondary">add_a_photo</span>
                            Médias
                        </h3>
</div>
<div class="border-2 border-dashed border-outline-variant rounded-2xl p-2xl flex flex-col items-center justify-center gap-md bg-surface-container-low hover:bg-surface-container hover:border-secondary transition-colors cursor-pointer group">
<div class="w-16 h-16 bg-white rounded-full shadow-sm flex items-center justify-center text-secondary group-hover:scale-110 duration-300">
<span class="material-symbols-outlined text-[32px]">cloud_upload</span>
</div>
<div class="text-center">
<p class="text-body-lg font-bold">Glissez-déposez vos photos ici</p>
<p class="text-body-sm text-on-surface-variant">JPG, PNG jusqu'à 10MB (min. 3 photos)</p>
</div>
<button class="bg-primary text-on-primary px-lg py-sm rounded-full font-label-md">Parcourir les fichiers</button>
</div>
<!-- Photo Grid Preview -->
<div class="grid grid-cols-4 gap-md">
<div class="aspect-video rounded-xl overflow-hidden bg-surface-dim relative group">
<img class="w-full h-full object-cover" data-alt="A bright, sunlit modern apartment interior with minimalist furniture and high ceilings. The style is clean and professional with a neutral color palette of whites and soft grays. Natural morning light pours through large windows creating a welcoming and airy hospitality atmosphere for potential renters." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRbg_ynYYGKk-JLS3eTdGeJy9YdTQupLXVz5TltMpxaaRW3HRMJJR6XGA7sT1xSaTTzqZ6SXOPG-8d6va2SX63PfZnG3TXyW3V0cz5wIDe4IiyaJeNvqFIYItq3BEEYuJZZEGEhTsdiVD6DfIAeKDR-q6yTW8tHo4j2DV6wNdwvprkqzvh9kHOMVLTddSJQz_ehIkiE9H4K8Y42-LJKOFeWK-EdfwQGTQCDsHTwWtr4GOLr8J2VIJHygJiUvah0foG-xPEudQc1KYk"/>
<div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
<button class="text-white"><span class="material-symbols-outlined">delete</span></button>
</div>
</div>
<div class="aspect-video rounded-xl border-2 border-dashed border-outline-variant flex items-center justify-center text-outline-variant">
<span class="material-symbols-outlined">add</span>
</div>
</div>
</section>
<!-- Section 3: Amenities -->
<section class="space-y-lg">
<div class="border-b border-outline-variant pb-md">
<h3 class="font-h3 text-h3 text-primary flex items-center gap-sm">
<span class="material-symbols-outlined text-secondary">check_circle</span>
                            Équipements
                        </h3>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-md">
<label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
<input class="rounded text-secondary focus:ring-secondary border-outline" type="checkbox"/>
<span class="text-body-sm">Wifi</span>
</label>
<label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
<input class="rounded text-secondary focus:ring-secondary border-outline" type="checkbox"/>
<span class="text-body-sm">Lave-linge</span>
</label>
<label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
<input class="rounded text-secondary focus:ring-secondary border-outline" type="checkbox"/>
<span class="text-body-sm">Cuisine équipée</span>
</label>
<label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
<input class="rounded text-secondary focus:ring-secondary border-outline" type="checkbox"/>
<span class="text-body-sm">Parking</span>
</label>
<label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
<input class="rounded text-secondary focus:ring-secondary border-outline" type="checkbox"/>
<span class="text-body-sm">Climatisation</span>
</label>
<label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
<input class="rounded text-secondary focus:ring-secondary border-outline" type="checkbox"/>
<span class="text-body-sm">Ascenseur</span>
</label>
<label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
<input class="rounded text-secondary focus:ring-secondary border-outline" type="checkbox"/>
<span class="text-body-sm">Animaux</span>
</label>
<label class="flex items-center gap-md p-md bg-white rounded-xl border border-outline-variant cursor-pointer hover:border-secondary transition-all">
<input class="rounded text-secondary focus:ring-secondary border-outline" type="checkbox"/>
<span class="text-body-sm">Balcon</span>
</label>
</div>
</section>
<!-- Section 4: Description -->
<section class="space-y-lg">
<div class="border-b border-outline-variant pb-md">
<h3 class="font-h3 text-h3 text-primary flex items-center gap-sm">
<span class="material-symbols-outlined text-secondary">description</span>
                            Description détaillée
                        </h3>
</div>
<div class="space-y-sm">
<textarea class="w-full p-xl bg-surface-container-lowest border-outline rounded-2xl focus:ring-secondary transition-all" placeholder="Partagez les atouts de votre logement, les transports à proximité, l'ambiance du quartier..." rows="6"></textarea>
<p class="text-label-sm text-on-surface-variant text-right">0 / 2000 caractères</p>
</div>
</section>
<!-- Action Buttons -->
<footer class="flex items-center justify-between pt-xl border-t border-outline-variant">
<button class="flex items-center gap-sm px-xl py-md text-primary font-bold hover:bg-surface-container rounded-xl transition-all">
<span class="material-symbols-outlined">arrow_back</span>
                        Précédent
                    </button>
<button class="bg-primary text-on-primary px-2xl py-md rounded-xl font-bold hover:scale-95 duration-150 shadow-md">
                        Publier l'annonce
                    </button>
</footer>
</div>
</div>
<!-- Space for Footer Navigation (Authority: JSON) -->
<footer class="w-full mt-2xl border-t border-outline-variant/30 py-md flex flex-col md:flex-row justify-between items-center text-on-surface-variant font-label-sm">
<p>© 2024 NestLink. Tous droits réservés.</p>
<div class="flex gap-xl mt-md md:mt-0">
<a class="hover:text-secondary transition-opacity opacity-80 hover:opacity-100" href="#">Mentions légales</a>
<a class="hover:text-secondary transition-opacity opacity-80 hover:opacity-100" href="#">Confidentialité</a>
<a class="hover:text-secondary transition-opacity opacity-80 hover:opacity-100" href="#">Contact</a>
</div>
</footer>
</main>
</body></html>