# Task9 — Integración de AdminLTE en Laravel

**Objetivo**
- Integrar el contenido de la Actividad 11 dentro de un panel de administración usando AdminLTE.
- Simplificar la plantilla eliminando secciones demo innecesarias y adaptar el menú lateral con las opciones de la actividad.

**Referencias**
- AdminLTE: `https://github.com/ColorlibHQ/AdminLTE`

**Compatibilidad y entorno**
- Proyecto base: Laravel (actualizado para compatibilidad con PHP 8.x).
- Nota de compatibilidad: Laravel 7 presenta errores de tipos con PHP 8.x (ArrayAccess, Countable, IteratorAggregate). Se resolvió actualizando el framework a una versión compatible y ajustando middleware (`TrustProxies`). Si usas PHP 7.4/8.0, puedes mantener Laravel 7.

**Estructura implementada**
- Layout principal: `resources/views/layouts/admin.blade.php`
- Vistas de contenido:
  - `resources/views/admin/dashboard.blade.php`
  - `resources/views/admin/section1.blade.php`
  - `resources/views/admin/section2.blade.php`
- Rutas: `routes/web.php` (Dashboard, Section1, Section2)
- Assets AdminLTE:
  - `public/dist/css/` y `public/dist/js/`
  - `public/plugins/` (jQuery, Bootstrap, FontAwesome, OverlayScrollbars, etc.)

**Qué se hizo**
- Integración de AdminLTE en un proyecto nuevo llamado `task9`.
- Limpieza de secciones demo de AdminLTE: se usó sólo el layout básico con sidebar, navbar y footer.
- Sustitución del menú lateral por las opciones de la Actividad 11: Dashboard, Sección 1, Sección 2.
- Colocación del contenido de cada sección de la Actividad 11 en sus vistas respectivas.
- Edición del footer para incluir la información de la Actividad 11.
- Ajustes de layout recomendados por AdminLTE:
  - Activación de `layout-fixed`.
  - Inclusión de `OverlayScrollbars` para el comportamiento del sidebar.
- Corrección de middleware de proxies para Laravel 8: `App\Http\Middleware\TrustProxies` importa `Illuminate\Http\Middleware\TrustProxies`.

**Ejecución local**
- Requisitos: PHP y Composer.
- Instalar dependencias: `composer install`
- Copiar `.env` y configurar clave: `cp .env.example .env && php artisan key:generate`
- Servir la aplicación desde `public`:
  - `php -S 127.0.0.1:8000 -t public`
- Abrir en el navegador:
  - `http://127.0.0.1:8000/` (Dashboard)
  - `http://127.0.0.1:8000/section1`
  - `http://127.0.0.1:8000/section2`

**Ubicación de assets y layout**
- En `layouts/admin.blade.php` se referencian los CSS/JS:
  - CSS: `plugins/fontawesome-free/css/all.min.css`, `dist/css/adminlte.min.css`, `plugins/overlayScrollbars/css/OverlayScrollbars.min.css`
  - JS: `plugins/jquery/jquery.min.js`, `plugins/bootstrap/js/bootstrap.bundle.min.js`, `plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js`, `dist/js/adminlte.min.js`
- El menú lateral usa clases de AdminLTE (`nav nav-pills nav-sidebar flex-column`) y marca la ruta activa.

**Capturas y entrega**
- Publica el repositorio en GitHub y comparte la URL del proyecto.
- Genera capturas del Dashboard y de cada sección (Section1, Section2) mostrando el layout y navegación.
- Entrega las capturas en un documento junto con la URL del repositorio.

**Notas adicionales**
- Si trabajas con Laravel 7 y PHP 8.x, considera:
  - Añadir `#[ReturnTypeWillChange]` a métodos de `ArrayAccess`, `Countable`, `IteratorAggregate` en `Collection`, o
  - Usar PHP 7.4/8.0, o
  - Actualizar Laravel a 8/10/11 para soporte nativo de PHP 8.1+.
- Para personalizar el tema: puedes cambiar el color del sidebar (`sidebar-dark-...`, `sidebar-light-...`), activar `text-sm`, y añadir `content-header` con breadcrumbs.
