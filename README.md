# Pereyra Construcciones

Web institucional desarrollada en Laravel para presentar servicios, trabajos realizados y una via clara de contacto para presupuestos presenciales.

## Stack

- Laravel 13 como framework full-stack.
- Blade para renderizado server-side.
- Tailwind CSS 4 para estilos.
- Vite con Node.js para assets frontend.
- SQLite para el MVP y pruebas locales rapidas.
- Docker Compose para levantar la app y el pipeline frontend sin depender del entorno host.
- GitHub Actions para CI.

## Decisiones tecnicas

### Por que Laravel full-stack

La web necesitaba salir rapido, con codigo ordenado y facil de defender como propio. Laravel resuelve rutas, vistas, validacion, persistencia y testing sin dividir la aplicacion en capas artificiales.

### Como se aplican SOLID y Clean sin sobreingenieria

- `HomeController` solo compone la vista principal.
- `ContactLeadController` coordina el caso de uso del formulario.
- `StoreContactLeadRequest` centraliza validaciones y mensajes.
- `StoreContactLeadAction` encapsula la logica de persistencia.
- `ContactLead` representa la entidad persistida.
- `config/site.php` concentra contenido institucional para evitar logica mezclada en Blade.

Esto mantiene controladores finos, responsabilidades claras y una estructura facil de extender.

## Funcionalidades incluidas

- Landing institucional responsive.
- Seccion de servicios.
- Galeria de trabajos reales.
- Seccion de proceso comercial y condiciones del presupuesto.
- Formulario de contacto persistido en base de datos.
- CTA flotante a WhatsApp con fallback al formulario si el numero no esta configurado.
- Tests de home y formulario.
- Docker Compose y workflow de CI.

## Variables de entorno

Completa estas variables en `.env` si queres habilitar datos reales:

```env
BUSINESS_WHATSAPP=
BUSINESS_PHONE=
BUSINESS_EMAIL=
BUSINESS_LOCATION="Coordinacion por consulta previa"
```

`BUSINESS_WHATSAPP` debe contener solo el numero, preferentemente con codigo de pais, por ejemplo `59899123456`.

## Ejecutar en local

### Opcion 1: con Docker

```bash
docker compose up --build
```

La app queda disponible en `http://localhost:8000` y Vite en `http://localhost:5173`.

### Opcion 2: con herramientas locales

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
npm install
npm run dev
php artisan serve
```

## Tests y build

```bash
php artisan test
npm run build
```

## Estructura principal

```text
app/
  Actions/
  Http/Controllers/
  Http/Requests/
  Models/
config/site.php
database/migrations/
resources/views/
docker/
.github/workflows/ci.yml
```

## Notas del proyecto

- El contenido esta redactado en espanol para el cliente final.
- Las imagenes de la galeria se cargaron desde material real provisto para el emprendimiento.
- La base queda lista para evolucionar a panel interno, mails o integraciones futuras sin rehacer la app.
