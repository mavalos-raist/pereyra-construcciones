@extends('layouts.site')

@section('content')
    <section id="inicio" class="relative overflow-hidden border-b border-white/10">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(249,115,22,0.22),_transparent_35%),radial-gradient(circle_at_bottom_right,_rgba(251,191,36,0.12),_transparent_30%)]"></div>

        <div class="relative mx-auto grid max-w-7xl gap-12 px-5 py-16 sm:px-6 lg:grid-cols-[1.05fr_0.95fr] lg:px-8 lg:py-24">
            <div class="flex flex-col justify-center">
                <p class="mb-4 text-sm font-semibold uppercase tracking-[0.32em] text-brand-300">Pereyra Construcciones</p>
                <h1 class="max-w-3xl font-display text-4xl font-bold leading-tight text-white sm:text-5xl lg:text-6xl">
                    {{ $site['brand']['headline'] }}
                </h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-stone-300">
                    {{ $site['brand']['subheadline'] }}
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    @foreach ($site['highlights'] as $highlight)
                        <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-stone-200">
                            {{ $highlight }}
                        </span>
                    @endforeach
                </div>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#contacto" class="inline-flex items-center rounded-full bg-brand-500 px-6 py-3 text-sm font-semibold text-stone-950 transition hover:bg-brand-400">
                        Solicitar presupuesto
                    </a>
                    <a href="#trabajos" class="inline-flex items-center rounded-full border border-white/15 px-6 py-3 text-sm font-semibold text-white transition hover:border-white/30 hover:bg-white/5">
                        Ver trabajos
                    </a>
                </div>

                <dl class="mt-12 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                        <dt class="text-xs uppercase tracking-[0.3em] text-stone-400">Modalidad</dt>
                        <dd class="mt-3 text-lg font-semibold text-white">Presencial y sin cargo</dd>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                        <dt class="text-xs uppercase tracking-[0.3em] text-stone-400">Sistemas</dt>
                        <dd class="mt-3 text-lg font-semibold text-white">Tradicional, steel framing, isopanel y SIP</dd>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                        <dt class="text-xs uppercase tracking-[0.3em] text-stone-400">Enfoque</dt>
                        <dd class="mt-3 text-lg font-semibold text-white">Obra nueva, reforma y terminacion</dd>
                    </div>
                </dl>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <article class="rounded-[2rem] border border-white/10 bg-stone-900/70 p-4 shadow-soft sm:col-span-2">
                    <img
                        src="{{ asset('images/projects/sistema-sip-estructura-frontal.jpg') }}"
                        alt="Obra en sistema SIP en ejecucion"
                        class="aspect-[16/10] w-full rounded-[1.5rem] object-cover"
                    >
                </article>
                <article class="rounded-[2rem] border border-white/10 bg-stone-900/70 p-4 shadow-soft">
                    <img
                        src="{{ asset('images/projects/platea-hormigon.jpg') }}"
                        alt="Platea de hormigon armada"
                        class="aspect-[4/5] w-full rounded-[1.5rem] object-cover"
                    >
                </article>
                <article class="relative rounded-[2rem] border border-white/10 bg-white/5 p-6 shadow-soft">
                    <p class="text-xs uppercase tracking-[0.32em] text-brand-300">Forma de trabajo</p>
                    <h2 class="mt-4 font-display text-3xl font-semibold text-white">Visita, presupuesto y ejecucion con alcance claro.</h2>
                    <p class="mt-4 text-sm leading-7 text-stone-300">
                        Cada proyecto se releva en el lugar, se conversa con o sin materiales y se definen los pasos antes de avanzar.
                    </p>
                    <img
                        src="{{ asset('images/projects/revestimiento-cocina.jpg') }}"
                        alt="Terminacion de cocina revestida"
                        class="mt-6 aspect-[4/3] w-full rounded-[1.5rem] object-cover"
                    >
                </article>
            </div>
        </div>
    </section>

    <section id="servicios" class="border-b border-white/10 bg-stone-100 text-stone-950">
        <div class="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-8 lg:py-20">
            <div class="max-w-3xl">
                <p class="section-kicker text-brand-500">Servicios</p>
                <h2 class="mt-4 font-display text-3xl font-bold sm:text-4xl">Soluciones de obra pensadas para ejecutar, terminar y entregar bien.</h2>
                <p class="mt-5 text-base leading-8 text-stone-600 sm:text-lg">
                    Trabajamos sobre obra nueva, reformas y estructuras en seco o tradicionales. El enfoque cambia segun el proyecto, pero la logica es la misma: relevamiento serio, presupuesto claro y ejecucion prolija.
                </p>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($site['services'] as $index => $service)
                    <article class="rounded-[2rem] border border-stone-300 bg-white p-6 shadow-card transition hover:-translate-y-1">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.26em] text-brand-500">{{ $service['category'] }}</p>
                                <h3 class="mt-3 font-display text-2xl font-semibold text-stone-950">{{ $service['name'] }}</h3>
                            </div>
                            <span class="text-sm font-semibold text-stone-400">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                        </div>
                        <p class="mt-5 leading-7 text-stone-600">{{ $service['description'] }}</p>
                    </article>
                @endforeach
            </div>

            <div class="mt-14 grid gap-5 lg:grid-cols-3">
                @foreach ($site['workflows'] as $workflow)
                    <article class="rounded-[2rem] border border-stone-300 bg-stone-950 p-7 text-stone-100 shadow-soft">
                        <p class="text-xs uppercase tracking-[0.26em] text-brand-300">Sistema</p>
                        <h3 class="mt-3 font-display text-2xl font-semibold">{{ $workflow['title'] }}</h3>
                        <p class="mt-4 leading-7 text-stone-300">{{ $workflow['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="trabajos" class="border-b border-white/10 bg-stone-950">
        <div class="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-8 lg:py-20">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <p class="section-kicker text-brand-300">Trabajos realizados</p>
                    <h2 class="mt-4 font-display text-3xl font-bold text-white sm:text-4xl">Obra real, avances reales y terminaciones que muestran oficio.</h2>
                </div>
                <p class="max-w-2xl text-base leading-8 text-stone-300">
                    Seleccionamos una muestra corta del tipo de trabajos que realiza la empresa: plateas, sistema SIP, revestimientos, instalaciones y resoluciones de obra.
                </p>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($site['gallery'] as $item)
                    <figure class="overflow-hidden rounded-[2rem] border border-white/10 bg-white/5 shadow-soft">
                        <img
                            src="{{ asset($item['image']) }}"
                            alt="{{ $item['title'] }}"
                            class="aspect-[4/3] w-full object-cover transition duration-500 hover:scale-[1.03]"
                            loading="lazy"
                        >
                        <figcaption class="space-y-2 p-5">
                            <p class="text-xs font-semibold uppercase tracking-[0.26em] text-brand-300">{{ $item['category'] }}</p>
                            <p class="text-lg font-semibold text-white">{{ $item['title'] }}</p>
                        </figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    <section id="proceso" class="border-b border-white/10 bg-stone-200 text-stone-950">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-6 lg:grid-cols-[1fr_0.9fr] lg:px-8 lg:py-20">
            <div>
                <p class="section-kicker text-brand-500">Como trabajamos</p>
                <h2 class="mt-4 font-display text-3xl font-bold sm:text-4xl">Presupuesto presencial, dudas claras y alcance definido antes de empezar.</h2>
                <div class="mt-10 space-y-5">
                    @foreach ($site['process'] as $step)
                        <article class="rounded-[1.75rem] border border-stone-300 bg-white p-6 shadow-card">
                            <h3 class="font-display text-2xl font-semibold text-stone-950">{{ $step['title'] }}</h3>
                            <p class="mt-3 leading-7 text-stone-600">{{ $step['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="rounded-[2rem] border border-stone-300 bg-stone-950 p-8 text-stone-100 shadow-soft">
                <p class="section-kicker text-brand-300">Condiciones comerciales</p>
                <div class="mt-8 space-y-5">
                    @foreach ($site['terms'] as $term)
                        <article class="rounded-[1.5rem] border border-white/10 bg-white/5 p-5">
                            <h3 class="font-display text-xl font-semibold">{{ $term['title'] }}</h3>
                            <p class="mt-3 text-sm leading-7 text-stone-300">{{ $term['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="border-b border-white/10 bg-brand-500/90 text-stone-950">
        <div class="mx-auto flex max-w-7xl flex-col gap-6 px-5 py-10 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
            <div class="max-w-3xl">
                <p class="text-xs font-semibold uppercase tracking-[0.28em] text-stone-900/70">Consulta inicial</p>
                <h2 class="mt-3 font-display text-3xl font-bold sm:text-4xl">Si queres avanzar con una obra o reforma, empecemos por el relevamiento correcto.</h2>
            </div>
            <a href="#contacto" class="inline-flex w-fit items-center rounded-full border border-stone-950/15 bg-stone-950 px-6 py-3 text-sm font-semibold text-white transition hover:bg-stone-900">
                Coordinar consulta
            </a>
        </div>
    </section>

    <section id="contacto" class="bg-stone-950">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8 lg:py-20">
            <div class="space-y-6">
                <div>
                    <p class="section-kicker text-brand-300">Contacto</p>
                    <h2 class="mt-4 font-display text-3xl font-bold text-white sm:text-4xl">Contanos que necesitas y coordinamos la visita.</h2>
                    <p class="mt-5 max-w-xl text-base leading-8 text-stone-300">
                        Este formulario nos sirve para entender el trabajo antes de coordinar. El presupuesto siempre se termina de definir en una visita presencial.
                    </p>
                </div>

                <div class="grid gap-4">
                    <article class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                        <p class="text-xs uppercase tracking-[0.26em] text-brand-300">Presupuesto</p>
                        <p class="mt-3 text-lg font-semibold text-white">Sin cargo y con alcance definido en el lugar.</p>
                    </article>
                    <article class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                        <p class="text-xs uppercase tracking-[0.26em] text-brand-300">Ubicacion</p>
                        <p class="mt-3 text-lg font-semibold text-white">{{ $site['contact']['location'] }}</p>
                    </article>
                    <article class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                        <p class="text-xs uppercase tracking-[0.26em] text-brand-300">Via rapida</p>
                        <p class="mt-3 text-lg font-semibold text-white">
                            @if ($hasWhatsapp)
                                WhatsApp disponible para la primera consulta.
                            @else
                                Configura el numero de WhatsApp en el entorno para habilitar el acceso directo.
                            @endif
                        </p>
                    </article>
                    @if ($site['contact']['phone'] || $site['contact']['email'])
                        <article class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                            <p class="text-xs uppercase tracking-[0.26em] text-brand-300">Datos de contacto</p>
                            <div class="mt-3 grid gap-2 text-base text-white">
                                @if ($site['contact']['phone'])
                                    <a href="tel:{{ preg_replace('/\D+/', '', $site['contact']['phone']) }}" class="w-fit font-semibold transition hover:text-brand-300">
                                        {{ $site['contact']['phone'] }}
                                    </a>
                                @endif
                                @if ($site['contact']['email'])
                                    <a href="mailto:{{ $site['contact']['email'] }}" class="w-fit font-semibold transition hover:text-brand-300">
                                        {{ $site['contact']['email'] }}
                                    </a>
                                @endif
                            </div>
                        </article>
                    @endif
                </div>
            </div>

            <div class="rounded-[2rem] border border-white/10 bg-stone-100 p-6 text-stone-950 shadow-soft sm:p-8">
                @if (session('status'))
                    <div class="mb-6 rounded-2xl border border-emerald-300 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 rounded-2xl border border-red-300 bg-red-50 px-4 py-4 text-sm text-red-800">
                        <p class="font-semibold">Hay datos para corregir antes de enviar la consulta:</p>
                        <ul class="mt-2 list-disc space-y-1 pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact-leads.store') }}" method="POST" class="grid gap-5">
                    @csrf

                    <div class="grid gap-5 sm:grid-cols-2">
                        <label class="grid gap-2">
                            <span class="text-sm font-semibold">Nombre y apellido</span>
                            <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-input" placeholder="Ej: Juan Pereyra" required>
                            @error('full_name')
                                <span class="text-sm text-red-700">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="grid gap-2">
                            <span class="text-sm font-semibold">Telefono</span>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-input" placeholder="Ej: 099 000 000" required>
                            @error('phone')
                                <span class="text-sm text-red-700">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <label class="grid gap-2">
                            <span class="text-sm font-semibold">Correo electronico</span>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-input" placeholder="Opcional">
                            @error('email')
                                <span class="text-sm text-red-700">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="grid gap-2">
                            <span class="text-sm font-semibold">Medio preferido</span>
                            <select name="preferred_contact" class="form-input" required>
                                <option value="">Seleccionar</option>
                                <option value="whatsapp" @selected(old('preferred_contact') === 'whatsapp')>WhatsApp</option>
                                <option value="llamada" @selected(old('preferred_contact') === 'llamada')>Llamada</option>
                                <option value="email" @selected(old('preferred_contact') === 'email')>Email</option>
                            </select>
                            @error('preferred_contact')
                                <span class="text-sm text-red-700">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <label class="grid gap-2">
                            <span class="text-sm font-semibold">Servicio</span>
                            <select name="service" class="form-input" required>
                                <option value="">Seleccionar</option>
                                @foreach ($serviceOptions as $serviceOption)
                                    <option value="{{ $serviceOption }}" @selected(old('service') === $serviceOption)>{{ $serviceOption }}</option>
                                @endforeach
                            </select>
                            @error('service')
                                <span class="text-sm text-red-700">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="grid gap-2">
                            <span class="text-sm font-semibold">Presupuesto</span>
                            <select name="budget_scope" class="form-input" required>
                                <option value="">Seleccionar</option>
                                <option value="con-materiales" @selected(old('budget_scope') === 'con-materiales')>Con materiales</option>
                                <option value="sin-materiales" @selected(old('budget_scope') === 'sin-materiales')>Sin materiales</option>
                                <option value="a-definir" @selected(old('budget_scope') === 'a-definir')>A definir</option>
                            </select>
                            @error('budget_scope')
                                <span class="text-sm text-red-700">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>

                    <label class="grid gap-2">
                        <span class="text-sm font-semibold">Ubicacion del trabajo</span>
                        <input type="text" name="project_location" value="{{ old('project_location') }}" class="form-input" placeholder="Barrio, zona o localidad">
                        @error('project_location')
                            <span class="text-sm text-red-700">{{ $message }}</span>
                        @enderror
                    </label>

                    <label class="grid gap-2">
                        <span class="text-sm font-semibold">Detalle del trabajo</span>
                        <textarea
                            name="message"
                            rows="5"
                            class="form-input min-h-36 resize-y"
                            placeholder="Contanos que queres hacer, si es obra nueva o reforma, y cualquier dato importante."
                            required
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-sm text-red-700">{{ $message }}</span>
                        @enderror
                    </label>

                    <div class="rounded-[1.5rem] border border-stone-300 bg-white px-5 py-4 text-sm leading-7 text-stone-600">
                        Todo presupuesto se trabaja de forma presencial. La forma de pago se conversa una vez entregado el presupuesto y su vigencia es de 160 dias.
                    </div>

                    <button type="submit" class="inline-flex items-center justify-center rounded-full bg-brand-500 px-6 py-3 text-sm font-semibold text-stone-950 transition hover:bg-brand-400">
                        Enviar consulta
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
