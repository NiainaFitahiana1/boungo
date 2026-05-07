<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "background": "#f7f9fb",
                    "primary-container": "#1e2a44",
                    "on-secondary": "#ffffff",
                    "tertiary": "#051629",
                    "on-secondary-fixed": "#2a1700",
                    "on-error": "#ffffff",
                    "surface-bright": "#f7f9fb",
                    "inverse-primary": "#bac6e7",
                    "outline-variant": "#c5c6ce",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-container": "#684000",
                    "on-surface": "#191c1e",
                    "inverse-on-surface": "#eff1f3",
                    "tertiary-container": "#1b2b3f",
                    "on-primary": "#ffffff",
                    "surface-container": "#eceef0",
                    "on-primary-container": "#8591b0",
                    "surface-dim": "#d8dadc",
                    "on-primary-fixed-variant": "#3b4662",
                    "error": "#ba1a1a",
                    "on-tertiary-fixed-variant": "#38485d",
                    "error-container": "#ffdad6",
                    "tertiary-fixed-dim": "#b7c8e1",
                    "primary-fixed": "#d9e2ff",
                    "on-error-container": "#93000a",
                    "secondary-container": "#fea619",
                    "on-secondary-fixed-variant": "#653e00",
                    "on-primary-fixed": "#0e1b34",
                    "surface": "#f7f9fb",
                    "surface-tint": "#525e7b",
                    "surface-container-low": "#f2f4f6",
                    "secondary-fixed-dim": "#ffb95f",
                    "surface-container-high": "#e6e8ea",
                    "secondary-fixed": "#ffddb8",
                    "on-surface-variant": "#45464d",
                    "inverse-surface": "#2d3133",
                    "surface-variant": "#e0e3e5",
                    "surface-container-highest": "#e0e3e5",
                    "on-background": "#191c1e",
                    "tertiary-fixed": "#d3e4fe",
                    "on-tertiary": "#ffffff",
                    "primary-fixed-dim": "#bac6e7",
                    "secondary": "#855300",
                    "on-tertiary-container": "#8292ab",
                    "primary": "#08152e",
                    "outline": "#75777e",
                    "on-tertiary-fixed": "#0b1c30"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "xl": "2.5rem",
                    "lg": "1.5rem",
                    "gutter": "1.5rem",
                    "margin": "1rem",
                    "xs": "0.25rem",
                    "base": "8px",
                    "2xl": "4rem",
                    "sm": "0.5rem",
                    "md": "1rem"
            },
            "fontFamily": {
                    "label-md": ["Inter"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-sm": ["Inter"],
                    "h3": ["Inter"],
                    "h2": ["Inter"],
                    "body-sm": ["Inter"],
                    "h1": ["Inter"]
            },
            "fontSize": {
                    "label-md": ["14px", {"lineHeight": "1", "letterSpacing": "0.01em", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "h2": ["32px", {"lineHeight": "1.25", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
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
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
    </style>
</head>
<body class="bg-surface text-on-surface flex flex-col items-center justify-center min-h-screen p-md">
<!-- Transactional Email Container -->
<div class="w-full max-w-[600px] bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden border border-outline-variant">
<!-- Header - Brand Identity -->
<header class="bg-primary px-lg py-xl flex justify-center items-center">
<h1 class="font-h3 text-h3 font-bold text-on-primary tracking-tight">NestLink</h1>
</header>
<!-- Main Content Area -->
<main class="px-lg py-2xl space-y-lg">
<div class="space-y-sm">
<h2 class="font-h3 text-h3 text-primary-container">Mise à jour de votre compte</h2>
<div class="h-1 w-12 bg-secondary-container rounded-full"></div>
</div>
<section class="space-y-md">
<p class="font-body-md text-body-md text-on-surface-variant">
                    Bonjour,
                </p>
<p class="font-body-md text-body-md text-on-surface-variant">
                    Nous vous informons qu'une mise à jour importante a été effectuée sur les conditions d'utilisation de votre compte <strong>NestLink</strong>. Cette modification vise à renforcer la sécurité de vos transactions et à améliorer la clarté de nos services de mise en relation.
                </p>
<!-- Information Block -->
<div class="bg-surface-container-low p-md border-l-4 border-secondary-container rounded-r-lg">
<p class="font-body-sm text-body-sm text-on-surface">
<span class="font-bold">Ce qui change :</span> L'authentification à deux facteurs est désormais simplifiée et accessible directement depuis votre tableau de bord dans la section "Paramètres".
                    </p>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
                    Aucune action immédiate n'est requise de votre part pour continuer à utiliser nos services. Toutefois, nous vous recommandons de consulter les détails complets de cette mise à jour lors de votre prochaine connexion.
                </p>
<!-- Transactional CTA Button -->
<div class="pt-md">
<a class="inline-flex items-center justify-center bg-primary text-on-primary font-label-md text-label-md px-xl py-md rounded-lg hover:bg-primary-container transition-colors duration-200" href="#">
                        Accéder à mon compte
                    </a>
</div>
</section>
<footer class="pt-xl border-t border-surface-variant">
<p class="font-body-sm text-body-sm text-on-surface-variant italic">
                    L'équipe NestLink
                </p>
</footer>
</main>
<!-- Component: Footer (from JSON context) -->
<div class="bg-surface-container-low py-md px-lg flex flex-col md:flex-row justify-between items-center gap-md">
<div class="flex flex-col md:flex-row items-center gap-md">
<span class="font-label-md text-label-md font-bold text-primary">NestLink</span>
<div class="flex gap-md">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-secondary transition-opacity opacity-80 hover:opacity-100" href="#">Contact</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-secondary transition-opacity opacity-80 hover:opacity-100" href="#">Confidentialité</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-secondary transition-opacity opacity-80 hover:opacity-100" href="#">Aide</a>
</div>
</div>
<p class="font-label-sm text-label-sm text-on-surface-variant">© 2024 NestLink. Tous droits réservés.</p>
</div>
</div>
<!-- Secondary info footer outside the main card -->
<div class="mt-xl text-center max-w-[500px]">
<p class="font-label-sm text-label-sm text-on-surface-variant opacity-60">
            Ceci est une notification automatique. Merci de ne pas répondre à cet e-mail. Si vous avez besoin d'assistance, veuillez utiliser notre centre d'aide.
        </p>
</div>
</body></html>