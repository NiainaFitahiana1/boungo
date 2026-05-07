@props([ 'title' => null ])

<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
    {{-- head slot for page-specific head assets --}}
    {{ $head ?? '' }}
</head>
<body class="bg-background text-on-background font-body-md overflow-x-hidden">
    <main class="min-h-screen flex">
        {{-- Left column (hidden on small screens) --}}
        <aside class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-primary-container" aria-hidden="false">
            {{-- if user passed a left slot, render it, otherwise show a minimal branding fallback --}}
            @if(trim($left ?? '') !== '')
                {{ $left }}
            @else
                <div class="p-8">
                    <h2 class="font-h2 text-2xl text-surface-container-lowest">{{ config('app.name', 'NestLink') }}</h2>
                    <p class="mt-2 text-surface-container-lowest/80">Bienvenue sur la zone d'authentification.</p>
                </div>
            @endif
        </aside>

        {{-- Right column: main content (form) --}}
        <section class="w-full lg:w-1/2 flex items-center justify-center p-gutter bg-surface">
            {{ $slot }}
        </section>
    </main>

    {{-- scripts slot for page-specific scripts --}}
    {{ $scripts ?? '' }}
</body>
</html>
