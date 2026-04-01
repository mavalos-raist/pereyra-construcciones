<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $site['meta']['title'] }}</title>
        <meta name="description" content="{{ $site['meta']['description'] }}">
        <meta name="theme-color" content="#f97316">
        <meta property="og:title" content="{{ $site['meta']['title'] }}">
        <meta property="og:description" content="{{ $site['meta']['description'] }}">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('images/projects/sistema-sip-estructura-frontal.jpg') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script type="application/ld+json">{!! $structuredData !!}</script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-stone-950 text-stone-100 antialiased">
        <a href="#inicio" class="skip-link">Saltar al contenido</a>
        <div class="site-shell min-h-screen">
            <header class="site-header sticky top-0 z-50" data-site-header>
                <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-6 lg:px-8">
                    <a href="#inicio" class="flex items-center gap-3">
                        <span class="grid h-11 w-11 place-items-center rounded-full border border-white/15 bg-brand-500/20 font-display text-lg font-bold tracking-[0.2em] text-brand-200">PC</span>
                        <div>
                            <p class="font-display text-base font-semibold text-white sm:text-lg">{{ $site['brand']['name'] }}</p>
                            <p class="text-xs uppercase tracking-[0.32em] text-stone-400">Obra tradicional y en seco</p>
                        </div>
                    </a>

                    <button
                        type="button"
                        class="inline-flex items-center rounded-full border border-white/15 px-4 py-2 text-sm font-semibold text-stone-100 lg:hidden"
                        data-nav-toggle
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                    >
                        Menu
                    </button>

                    <nav class="hidden items-center gap-7 text-sm font-medium text-stone-300 lg:flex">
                        <a href="#servicios" class="transition hover:text-white">Servicios</a>
                        <a href="#trabajos" class="transition hover:text-white">Trabajos</a>
                        <a href="#proceso" class="transition hover:text-white">Como trabajamos</a>
                        <a href="#contacto" class="transition hover:text-white">Contacto</a>
                        <a href="{{ $whatsappUrl }}" class="inline-flex items-center rounded-full bg-brand-500 px-5 py-2.5 font-semibold text-stone-950 transition hover:bg-brand-400">
                            {{ $hasWhatsapp ? 'WhatsApp' : 'Pedir presupuesto' }}
                        </a>
                    </nav>
                </div>

                <nav id="mobile-menu" class="hidden border-t border-white/10 bg-stone-950/95 px-5 py-4 lg:hidden" data-nav-menu>
                    <div class="flex flex-col gap-4 text-sm font-medium text-stone-200">
                        <a href="#servicios" class="transition hover:text-white">Servicios</a>
                        <a href="#trabajos" class="transition hover:text-white">Trabajos</a>
                        <a href="#proceso" class="transition hover:text-white">Como trabajamos</a>
                        <a href="#contacto" class="transition hover:text-white">Contacto</a>
                        <a href="{{ $whatsappUrl }}" class="inline-flex w-fit items-center rounded-full bg-brand-500 px-5 py-2.5 font-semibold text-stone-950">
                            {{ $hasWhatsapp ? 'Escribir por WhatsApp' : 'Ir al formulario' }}
                        </a>
                    </div>
                </nav>
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="border-t border-white/10 bg-stone-950/90">
                <div class="mx-auto flex max-w-7xl flex-col gap-4 px-5 py-8 text-sm text-stone-400 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
                    <p>{{ $site['brand']['name'] }}. Obras, reformas y construccion en seco con presupuesto presencial.</p>
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="#servicios" class="transition hover:text-white">Servicios</a>
                        <a href="#trabajos" class="transition hover:text-white">Trabajos</a>
                        <a href="#contacto" class="transition hover:text-white">Contacto</a>
                    </div>
                </div>
            </footer>
        </div>

        <a
            href="{{ $whatsappUrl }}"
            class="fixed bottom-5 right-5 z-40 inline-flex items-center gap-3 rounded-full border border-brand-300/25 bg-brand-500 px-5 py-3 text-sm font-semibold text-stone-950 shadow-soft transition hover:-translate-y-0.5 hover:bg-brand-400"
        >
            <span class="h-2.5 w-2.5 rounded-full bg-stone-950"></span>
            {{ $hasWhatsapp ? 'WhatsApp' : 'Ir al contacto' }}
        </a>
    </body>
</html>
