<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Inscription | NestLink</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-container-high": "#e6e8ea",
                    "on-tertiary-fixed": "#0b1c30",
                    "on-primary-fixed-variant": "#3b4662",
                    "error-container": "#ffdad6",
                    "on-secondary-container": "#684000",
                    "on-secondary-fixed": "#2a1700",
                    "surface-container": "#eceef0",
                    "primary-fixed-dim": "#bac6e7",
                    "on-surface-variant": "#45464d",
                    "primary-fixed": "#d9e2ff",
                    "outline-variant": "#c5c6ce",
                    "on-primary-fixed": "#0e1b34",
                    "secondary-container": "#fea619",
                    "secondary-fixed": "#ffddb8",
                    "on-secondary": "#ffffff",
                    "surface": "#f7f9fb",
                    "primary-container": "#1e2a44",
                    "error": "#ba1a1a",
                    "inverse-on-surface": "#eff1f3",
                    "on-primary-container": "#8591b0",
                    "surface-container-highest": "#e0e3e5",
                    "surface-dim": "#d8dadc",
                    "tertiary-container": "#1b2b3f",
                    "on-surface": "#191c1e",
                    "on-error-container": "#93000a",
                    "surface-container-lowest": "#ffffff",
                    "outline": "#75777e",
                    "tertiary": "#051629",
                    "surface-container-low": "#f2f4f6",
                    "on-background": "#191c1e",
                    "primary": "#08152e",
                    "on-tertiary": "#ffffff",
                    "surface-tint": "#525e7b",
                    "on-tertiary-fixed-variant": "#38485d",
                    "on-tertiary-container": "#8292ab",
                    "tertiary-fixed-dim": "#b7c8e1",
                    "surface-bright": "#f7f9fb",
                    "background": "#f7f9fb",
                    "secondary": "#855300",
                    "tertiary-fixed": "#d3e4fe",
                    "inverse-surface": "#2d3133",
                    "secondary-fixed-dim": "#ffb95f",
                    "on-primary": "#ffffff",
                    "on-error": "#ffffff",
                    "inverse-primary": "#bac6e7",
                    "surface-variant": "#e0e3e5",
                    "on-secondary-fixed-variant": "#653e00"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "xs": "0.25rem",
                    "sm": "0.5rem",
                    "md": "1rem",
                    "2xl": "4rem",
                    "margin": "1rem",
                    "lg": "1.5rem",
                    "base": "8px",
                    "xl": "2.5rem",
                    "gutter": "1.5rem"
            },
            "fontFamily": {
                    "h3": ["Inter"],
                    "label-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-sm": ["Inter"],
                    "h2": ["Inter"],
                    "body-sm": ["Inter"],
                    "body-md": ["Inter"],
                    "h1": ["Inter"]
            },
            "fontSize": {
                    "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "label-md": ["14px", {"lineHeight": "1", "letterSpacing": "0.01em", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "h2": ["32px", {"lineHeight": "1.25", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
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
        body {
            background-color: #f7f9fb;
        }
        .registration-card {
            box-shadow: 0 10px 40px -10px rgba(8, 21, 46, 0.08);
        }
    </style>
</head>
<body class="font-body-md text-on-surface">
<main class="min-h-screen flex flex-col md:flex-row">
<!-- Left Section: Form Content -->
<section class="w-full md:w-1/2 flex items-center justify-center p-gutter lg:p-2xl bg-surface">
<div class="max-w-md w-full">
<!-- Brand Anchor Header -->
<div class="mb-xl flex items-center gap-sm">
<span class="text-h3 font-h3 text-secondary">NestLink</span>
</div>
<div class="mb-lg">
<h1 class="font-h2 text-h2 text-primary mb-sm">Créez votre compte</h1>
<p class="font-body-md text-on-surface-variant">Rejoignez la communauté NestLink pour trouver votre prochain foyer ou gérer vos biens en toute sérénité.</p>
</div>
<!-- Registration Form -->
<form class="space-y-lg">
<div class="grid grid-cols-1 gap-md">
<!-- Full Name Field -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-primary" for="name">Nom complet</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">person</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-xl focus:ring-2 focus:ring-secondary-container focus:border-secondary-container transition-all outline-none" id="name" placeholder="Jean Dupont" type="text"/>
</div>
</div>
<!-- Email Field -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-primary" for="email">Adresse email</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">mail</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-xl focus:ring-2 focus:ring-secondary-container focus:border-secondary-container transition-all outline-none" id="email" placeholder="nom@exemple.com" type="email"/>
</div>
</div>
<!-- User Type Selection -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-primary">Je suis un...</label>
<div class="grid grid-cols-2 gap-md">
<label class="relative flex items-center justify-center p-3 border-2 border-outline-variant rounded-xl cursor-pointer hover:border-secondary-container transition-all has-[:checked]:border-secondary-container has-[:checked]:bg-secondary-container/10">
<input checked="" class="sr-only" name="user-type" type="radio" value="tenant"/>
<div class="flex flex-col items-center gap-xs">
<span class="material-symbols-outlined text-primary">person_search</span>
<span class="font-label-sm text-label-sm">Locataire</span>
</div>
</label>
<label class="relative flex items-center justify-center p-3 border-2 border-outline-variant rounded-xl cursor-pointer hover:border-secondary-container transition-all has-[:checked]:border-secondary-container has-[:checked]:bg-secondary-container/10">
<input class="sr-only" name="user-type" type="radio" value="landlord"/>
<div class="flex flex-col items-center gap-xs">
<span class="material-symbols-outlined text-primary">real_estate_agent</span>
<span class="font-label-sm text-label-sm">Propriétaire</span>
</div>
</label>
</div>
</div>
<!-- Password Field -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-primary" for="password">Mot de passe</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">lock</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-xl focus:ring-2 focus:ring-secondary-container focus:border-secondary-container transition-all outline-none" id="password" placeholder="••••••••" type="password"/>
</div>
<p class="font-label-sm text-label-sm text-on-surface-variant">Minimum 8 caractères</p>
</div>
</div>
<!-- TOS Checkbox -->
<div class="flex items-start gap-md">
<div class="flex items-center h-5">
<input class="w-5 h-5 text-secondary border-outline-variant rounded focus:ring-secondary-container bg-surface-container-low" id="terms" type="checkbox"/>
</div>
<label class="font-body-sm text-body-sm text-on-surface-variant" for="terms">
                            J'accepte les <a class="text-secondary font-semibold hover:underline" href="#">CGU</a> et la <a class="text-secondary font-semibold hover:underline" href="#">Politique de confidentialité</a> de NestLink.
                        </label>
</div>
<!-- Action Button -->
<button class="w-full py-4 bg-secondary-container text-on-secondary-container font-h3 text-h3 rounded-xl shadow-md hover:shadow-lg hover:scale-[1.01] active:scale-95 transition-all duration-200" type="submit">
                        Create Account
                    </button>
</form>
<!-- Redirect to Login -->
<div class="mt-xl text-center">
<p class="font-body-md text-on-surface-variant">
                        Déjà inscrit ? 
                        <a class="text-primary font-bold hover:text-secondary transition-colors underline-offset-4 hover:underline" href="#">Connexion</a>
</p>
</div>
</div>
</section>
<!-- Right Section: Visual Experience -->
<section class="hidden md:block w-1/2 relative bg-primary-container overflow-hidden">
<!-- Background Image with Overlay -->
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="A luxurious modern apartment interior with floor-to-ceiling windows overlooking a serene urban cityscape at dusk. The room is filled with warm, soft ambient lighting highlighting designer furniture in deep navy and rich wood tones. The overall atmosphere is premium, sophisticated, and peaceful, perfectly representing the high-end hospitality and home feeling of the brand. A subtle warm glow from golden hour sunset filters through the glass." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgbj6zeRPrZEpW7z-88PGKKgqEtrKxJg1ftzLfhaDPRniFy6iB6D8z4lpriDk0XmZZe-m0OyXqnHJKHy2Bff3Es0-KOU1unpB9exkN0r8cjXjL0J3mz2GSIP4XgahQbKIPNUrXae8Djw_5Q-GIB9XkhaReQ5CR30HDAu7CHTyXYYTxdu29iIgtOJX3whU1LQGys57R85_aY22BadDRQSVMnQOiHebQUGqCx-H1bvVJRVwBg80AKqLrdiSki9_2XVXKD-fl2o_EhQgH"/>
<div class="absolute inset-0 bg-primary/40 backdrop-blur-[2px]"></div>
</div>
<!-- Contextual Branding Content -->
<div class="relative z-10 h-full flex flex-col justify-end p-2xl">
<div class="max-w-lg registration-card bg-surface/10 backdrop-blur-md p-xl rounded-2xl border border-white/20">
<div class="flex items-center gap-sm mb-md">
<span class="material-symbols-outlined text-secondary-container" style="font-variation-settings: 'FILL' 1;">verified</span>
<span class="font-label-md text-label-md text-white uppercase tracking-wider">Plateforme vérifiée</span>
</div>
<h2 class="font-h1 text-h1 text-white mb-md leading-tight">Vivez l'immobilier différemment.</h2>
<p class="font-body-lg text-body-lg text-white/80">Rejoignez plus de 50 000 utilisateurs qui font confiance à NestLink pour leur recherche de logement en France.</p>
<!-- Stats / Social Proof -->
<div class="mt-xl pt-lg border-t border-white/10 flex gap-xl">
<div>
<p class="font-h2 text-h2 text-secondary-container">12k+</p>
<p class="font-label-sm text-label-sm text-white/60">Biens vérifiés</p>
</div>
<div>
<p class="font-h2 text-h2 text-secondary-container">24/7</p>
<p class="font-label-sm text-label-sm text-white/60">Support client</p>
</div>
</div>
</div>
</div>
<!-- Floating Decoration Elements -->
<div class="absolute top-1/4 -right-12 w-64 h-64 bg-secondary-container/20 rounded-full blur-3xl"></div>
<div class="absolute bottom-1/4 -left-12 w-48 h-48 bg-primary/30 rounded-full blur-3xl"></div>
</section>
</main>
<!-- Footer Partial (Minimal for transactional page) -->
<footer class="w-full py-md px-gutter flex flex-col md:flex-row justify-between items-center gap-md bg-surface text-on-surface-variant font-label-sm text-label-sm">
<div>© 2024 NestLink. Tous droits réservés.</div>
<div class="flex gap-lg">
<a class="hover:underline hover:text-secondary transition-all" href="#">CGU</a>
<a class="hover:underline hover:text-secondary transition-all" href="#">Confidentialité</a>
<a class="hover:underline hover:text-secondary transition-all" href="#">Contact</a>
</div>
</footer>
</body></html>