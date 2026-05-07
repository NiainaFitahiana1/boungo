<div class="w-full max-w-md">
    <!-- Brand Anchor for Mobile -->
    <div class="lg:hidden mb-xl">
        <span class="font-h3 text-h3 text-primary">NestLink</span>
    </div>
    <div class="mb-xl">
        <h2 class="font-h2 text-h2 text-primary">Bienvenue.</h2>
        <p class="font-body-md text-on-surface-variant mt-sm">Veuillez vous connecter pour accéder à votre compte.</p>
    </div>
    <!-- Form -->
    <form class="space-y-lg" method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Field -->
        <div class="space-y-sm">
            <label class="font-label-md text-primary" for="email">Adresse e-mail</label>
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">mail</span>
                <input class="w-full pl-12 pr-md py-md bg-surface-container-low border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary focus:border-secondary transition-all outline-none text-on-surface" id="email" name="email" placeholder="nom@exemple.com" type="email" value="{{ old('email') }}" required autofocus />
            </div>
        </div>
        <!-- Password Field -->
        <div class="space-y-sm">
            <div class="flex justify-between items-center">
                <label class="font-label-md text-primary" for="password">Mot de passe</label>
                <a class="font-label-sm text-secondary hover:underline" href="#">Mot de passe oublié ?</a>
            </div>
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">lock</span>
                <input class="w-full pl-12 pr-md py-md bg-surface-container-low border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary focus:border-secondary transition-all outline-none text-on-surface" id="password" name="password" placeholder="••••••••" type="password" required autocomplete="current-password" />
                <button class="absolute right-md top-1/2 -translate-y-1/2 text-outline hover:text-on-surface" type="button">
                    <span class="material-symbols-outlined">visibility</span>
                </button>
            </div>
        </div>
        <!-- Remember Me -->
        <div class="flex items-center gap-sm">
            <input class="w-4 h-4 text-secondary border-outline-variant rounded focus:ring-secondary" id="remember" name="remember" type="checkbox" />
            <label class="font-body-sm text-on-surface-variant" for="remember">Se souvenir de moi</label>
        </div>
        <!-- CTA Button -->
        <button class="w-full py-md px-lg bg-secondary-container text-on-secondary-container font-label-md rounded-lg shadow-sm hover:shadow-md active:scale-[0.98] transition-all flex justify-center items-center gap-sm" type="submit">
            Connexion
            <span class="material-symbols-outlined">arrow_forward</span>
        </button>
    </form>
    <!-- Divider -->
    <div class="my-xl flex items-center gap-md">
    <div class="grow h-px bg-outline-variant"></div>
        <span class="font-label-sm text-outline">OU CONTINUER AVEC</span>
    <div class="grow h-px bg-outline-variant"></div>
    </div>
    <!-- Social Login -->
    <div class="grid grid-cols-2 gap-md">
        <button class="flex items-center justify-center gap-sm py-md px-md border border-outline-variant rounded-lg font-label-md text-primary hover:bg-surface-container transition-colors">
            <!-- Google SVG -->
            Google
        </button>
        <button class="flex items-center justify-center gap-sm py-md px-md border border-outline-variant rounded-lg font-label-md text-primary hover:bg-surface-container transition-colors">
            <!-- Apple SVG -->
            Apple
        </button>
    </div>
    <!-- Registration Prompt -->
    <p class="mt-2xl text-center font-body-sm text-on-surface-variant">
        Vous n'avez pas de compte ?
        <a class="text-primary font-label-sm hover:underline ml-xs" href="#">Inscrivez-vous gratuitement</a>
    </p>
</div>