<?php

return [
    'meta' => [
        'title' => 'Pereyra Construcciones | Obras, reformas y sistema SIP',
        'description' => 'Pereyra Construcciones realiza muros de contencion, plateas de hormigon, construccion tradicional o en seco, revestimientos, parrilleros y reformas. Presupuestos presenciales sin cargo.',
    ],
    'brand' => [
        'name' => 'Pereyra Construcciones',
        'headline' => 'Obra nueva, reformas y construccion en seco con criterio de obra real.',
        'subheadline' => 'Resolvemos desde plateas y muros de contencion hasta sistemas SIP, steel framing, revestimientos y terminaciones. Cada presupuesto se trabaja de forma presencial, clara y sin cargo.',
    ],
    'contact' => [
        'whatsapp' => env('BUSINESS_WHATSAPP', ''),
        'phone' => env('BUSINESS_PHONE', ''),
        'email' => env('BUSINESS_EMAIL', ''),
        'location' => env('BUSINESS_LOCATION', 'Coordinacion por consulta previa'),
        'whatsapp_message' => 'Hola, quiero consultar por un presupuesto con Pereyra Construcciones.',
    ],
    'highlights' => [
        'Presupuesto presencial y sin cargo',
        'Construccion tradicional y en seco',
        'Terminaciones, reformas y obra nueva',
    ],
    'services' => [
        [
            'name' => 'Muros de contencion',
            'category' => 'Exterior y estructura',
            'description' => 'Soluciones de contencion para desniveles, cerramientos y ordenamiento del terreno.',
        ],
        [
            'name' => 'Construccion en madera con sistema SIP',
            'category' => 'Construccion en seco',
            'description' => 'Estructuras rapidas y eficientes para vivienda, ampliaciones y espacios anexos.',
        ],
        [
            'name' => 'Revestimiento con siding',
            'category' => 'Terminacion exterior',
            'description' => 'Revestimientos durables y de bajo mantenimiento para fachadas y ampliaciones.',
        ],
        [
            'name' => 'Plateas de hormigon',
            'category' => 'Base de obra',
            'description' => 'Bases niveladas y preparadas para construccion tradicional o en seco.',
        ],
        [
            'name' => 'Casas infantiles con palos rollizos',
            'category' => 'Madera',
            'description' => 'Proyectos en madera con un enfoque funcional, resistente y bien terminado.',
        ],
        [
            'name' => 'Reformas y construccion desde cero',
            'category' => 'Integral',
            'description' => 'Acompaniamiento completo para ampliaciones, remodelaciones y obras nuevas.',
        ],
        [
            'name' => 'Construccion tradicional o en seco',
            'category' => 'Sistemas de obra',
            'description' => 'Trabajos en mamposteria, steel framing, isopanel o sistema SIP segun el proyecto.',
        ],
        [
            'name' => 'Revestimientos, pisos y paredes',
            'category' => 'Terminaciones',
            'description' => 'Colocacion y terminacion de superficies interiores y exteriores con buen detalle.',
        ],
        [
            'name' => 'Parrilleros, estufas y hornos de barro',
            'category' => 'Espacios exteriores',
            'description' => 'Construcciones funcionales para disfrutar y sumar valor al espacio exterior.',
        ],
    ],
    'workflows' => [
        [
            'title' => 'Tradicional',
            'description' => 'Cuando la obra pide mamposteria, hormigon y resoluciones clasicas, trabajamos con una base firme y criterios de ejecucion claros.',
        ],
        [
            'title' => 'Steel framing e isopanel',
            'description' => 'Ideal para ampliar, optimizar tiempos y resolver espacios con una obra mas seca y ordenada.',
        ],
        [
            'title' => 'Sistema SIP',
            'description' => 'Una opcion eficiente para levantar estructura, cerramientos y cubiertas con buena velocidad de avance.',
        ],
    ],
    'process' => [
        [
            'title' => 'Primera consulta',
            'description' => 'Escuchamos la idea, el tipo de trabajo y el objetivo general para orientar bien el presupuesto.',
        ],
        [
            'title' => 'Visita presencial',
            'description' => 'Todo presupuesto se hace en el lugar para revisar medidas, accesos y condiciones reales de la obra.',
        ],
        [
            'title' => 'Definicion del alcance',
            'description' => 'Se deja claro si el presupuesto se necesita con materiales, sin materiales o si queda a definir.',
        ],
        [
            'title' => 'Entrega del presupuesto',
            'description' => 'Se presentan condiciones, dudas resueltas y forma de trabajo antes de avanzar con la obra.',
        ],
    ],
    'terms' => [
        [
            'title' => 'Presupuesto sin cargo',
            'description' => 'La evaluacion inicial y el presupuesto presencial no tienen costo.',
        ],
        [
            'title' => 'Visita presencial obligatoria',
            'description' => 'Nos permite relevar mejor cada trabajo y evitar suposiciones que despues generen desajustes.',
        ],
        [
            'title' => 'Con o sin materiales',
            'description' => 'Al solicitar el presupuesto debe indicarse si la propuesta incluye materiales o solo mano de obra.',
        ],
        [
            'title' => 'Forma de pago',
            'description' => 'El metodo de pago se define una vez entregado el presupuesto y conversadas las condiciones.',
        ],
        [
            'title' => 'Vigencia de 160 dias',
            'description' => 'Pasado ese plazo pueden aplicarse ajustes segun materiales, tiempos y contexto de obra.',
        ],
    ],
    'gallery' => [
        [
            'title' => 'Platea preparada para obra',
            'category' => 'Base estructural',
            'image' => 'images/projects/platea-hormigon.jpg',
        ],
        [
            'title' => 'Sistema SIP en avance frontal',
            'category' => 'Construccion en seco',
            'image' => 'images/projects/sistema-sip-estructura-frontal.jpg',
        ],
        [
            'title' => 'Sistema SIP con vista lateral',
            'category' => 'Construccion en seco',
            'image' => 'images/projects/sistema-sip-estructura-lateral.jpg',
        ],
        [
            'title' => 'Cubierta y estructura superior',
            'category' => 'Madera y cubierta',
            'image' => 'images/projects/sistema-sip-cubierta.jpg',
        ],
        [
            'title' => 'Interior de cubierta en madera',
            'category' => 'Terminacion interior',
            'image' => 'images/projects/interior-madera-cubierta.jpg',
        ],
        [
            'title' => 'Paneles interiores listos para montaje',
            'category' => 'Sistema SIP',
            'image' => 'images/projects/interior-madera-paneles.jpg',
        ],
        [
            'title' => 'Revestimiento de cocina',
            'category' => 'Revestimientos',
            'image' => 'images/projects/revestimiento-cocina.jpg',
        ],
        [
            'title' => 'Ceramica colocada con nivelacion',
            'category' => 'Terminaciones',
            'image' => 'images/projects/revestimiento-ceramica.jpg',
        ],
        [
            'title' => 'Instalacion electrica en reforma',
            'category' => 'Reformas',
            'image' => 'images/projects/instalacion-electrica.jpg',
        ],
        [
            'title' => 'Muro en ejecucion',
            'category' => 'Mamposteria',
            'image' => 'images/projects/muro-en-ejecucion.jpg',
        ],
        [
            'title' => 'Casa terminada en madera',
            'category' => 'Exterior final',
            'image' => 'images/projects/casa-madera-terminada.jpg',
        ],
    ],
];
