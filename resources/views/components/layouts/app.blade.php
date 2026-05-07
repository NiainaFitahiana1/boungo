<!DOCTYPE html>
<html class="light" lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="icon" href="{{ asset('mi.ico') }}">
    <title>boungo - Explorer</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "tertiary-fixed": "#d3e4fe",
              "on-secondary-fixed": "#2a1700",
              "on-secondary": "#ffffff",
              "on-error": "#ffffff",
              "error-container": "#ffdad6",
              "surface-container": "#eceef0",
              "tertiary": "#051629",
              "secondary": "#855300",
              "tertiary-container": "#1b2b3f",
              "on-surface": "#191c1e",
              "on-primary-fixed-variant": "#3b4662",
              "surface-variant": "#e0e3e5",
              "on-tertiary": "#ffffff",
              "on-tertiary-container": "#8292ab",
              "on-tertiary-fixed-variant": "#38485d",
              "on-tertiary-fixed": "#0b1c30",
              "on-surface-variant": "#45464d",
              "on-secondary-container": "#684000",
              "on-error-container": "#93000a",
              "surface-dim": "#d8dadc",
              "outline": "#75777e",
              "primary-container": "#1e2a44",
              "on-primary-container": "#8591b0",
              "inverse-primary": "#bac6e7",
              "primary": "#08152e",
              "surface-bright": "#f7f9fb",
              "background": "#f7f9fb",
              "surface-container-lowest": "#ffffff",
              "outline-variant": "#c5c6ce",
              "inverse-on-surface": "#eff1f3",
              "surface": "#f7f9fb",
              "secondary-container": "#fea619",
              "secondary-fixed-dim": "#ffb95f",
              "on-background": "#191c1e",
              "primary-fixed-dim": "#bac6e7",
              "tertiary-fixed-dim": "#b7c8e1",
              "on-primary": "#ffffff",
              "surface-container-low": "#f2f4f6",
              "on-primary-fixed": "#0e1b34",
              "on-secondary-fixed-variant": "#653e00",
              "surface-container-high": "#e6e8ea",
              "surface-container-highest": "#e0e3e5",
              "surface-tint": "#525e7b",
              "error": "#ba1a1a",
              "primary-fixed": "#d9e2ff",
              "inverse-surface": "#2d3133",
              "secondary-fixed": "#ffddb8",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              "2xl": "4rem",
              xl: "2.5rem",
              gutter: "1.5rem",
              margin: "1rem",
              md: "1rem",
              base: "8px",
              lg: "1.5rem",
              xs: "0.25rem",
              sm: "0.5rem",
            },
            fontFamily: {
              "body-lg": ["Inter"],
              "label-md": ["Inter"],
              "body-md": ["Inter"],
              h3: ["Inter"],
              "body-sm": ["Inter"],
              h1: ["Inter"],
              h2: ["Inter"],
              "label-sm": ["Inter"],
            },
            fontSize: {
              "body-lg": ["18px", { lineHeight: "1.6", fontWeight: "400" }],
              "label-md": ["14px", { lineHeight: "1", letterSpacing: "0.01em", fontWeight: "600" }],
              "body-md": ["16px", { lineHeight: "1.6", fontWeight: "400" }],
              h3: ["24px", { lineHeight: "1.3", fontWeight: "600" }],
              "body-sm": ["14px", { lineHeight: "1.5", fontWeight: "400" }],
              h1: ["48px", { lineHeight: "1.2", letterSpacing: "-0.02em", fontWeight: "700" }],
              h2: ["32px", { lineHeight: "1.25", letterSpacing: "-0.01em", fontWeight: "700" }],
              "label-sm": ["12px", { lineHeight: "1", letterSpacing: "0.05em", fontWeight: "600" }],
            },
          },
        },
      };
    </script>
    <style>
      .material-symbols-outlined {
        font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
      }
      body {
        font-family: "Inter", sans-serif;
      }
      .glass-nav {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
      }
    </style>
  </head>
  <body class="bg-background text-on-surface">
  <x-nav />
    <main class="pt-24 pb-xl px-gutter mx-auto grid grid-cols-1 md:grid-cols-12 gap-lg">
      {{ $slot }}
    </main>
  <x-footer />
  <x-mobile-nav />
  </body>
</html>
