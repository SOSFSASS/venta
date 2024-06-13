<div class="markdown-heading" dir="auto"><h1 tabindex="-1" class="heading-element" dir="auto">Sistema de Venta para una tienda</h1><a id="user-content-punto-de-venta-para-una-tienda" class="anchor" aria-label="Permalink: Punto de Venta para una tienda" href="#punto-de-venta-para-una-tienda"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z"></path></svg></a></div>
<div class="markdown-heading" dir="auto"><h2 tabindex="-1" class="heading-element" dir="auto">Dependencias</h2><a id="user-content-dependencias" class="anchor" aria-label="Permalink: Dependencias" href="#dependencias"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z"></path></svg></a></div>
<ul dir="auto">
<li>Se debe tener instalado <a href="https://www.apachefriends.org/es/download.html" title="XAMPP" rel="nofollow">XAMPP</a> (versión <strong>PHP</strong> <strong>8.1</strong> o superior)</li>
<li>Se debe tener instalado <a href="https://getcomposer.org/download/" title="Composer" rel="nofollow">Composer</a></li>
</ul>
<div class="markdown-heading" dir="auto"><h2 tabindex="-1" class="heading-element" dir="auto">Como instalar en Local</h2><a id="user-content-como-instalar-en-local" class="anchor" aria-label="Permalink: Como instalar en Local" href="#como-instalar-en-local"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z"></path></svg></a></div>
<ol dir="auto">
<li>
<p dir="auto">Clone o descargue el repositorio a una carpeta en Local</p>
</li>
<li>
<p dir="auto">Abra el repositorio en su editor de código favorito (<strong>Visual Studio Code</strong>)</p>
</li>
<li>
<p dir="auto">Ejecute la aplicación <strong>XAMPP</strong> e inice los módulos de <strong>Apache</strong> y <strong>MySQL</strong></p>
</li>
<li>
<p dir="auto">Abra una nueva terminal en su editor</p>
</li>
<li>
<p dir="auto">Compruebe de que tiene instalado todas dependencias correctamente, ejecute los siguientes comandos: <strong>(Ambos comandos deberán ejecutarse correctamente - ejecutar en la terminal)</strong></p>
</li>
</ol>
<div class="highlight highlight-source-shell notranslate position-relative overflow-auto" dir="auto" data-snippet-clipboard-copy-content="php -v"><pre>php -v</pre></div>
<div class="highlight highlight-source-shell notranslate position-relative overflow-auto" dir="auto" data-snippet-clipboard-copy-content="composer -v"><pre>composer -v</pre></div>
<ol dir="auto">
<li>Ahora ejecute los comandos para la configuración del proyecto (<strong>ejecutar en la terminal</strong>):</li>
</ol>
<ul dir="auto">
<li>Este comando nos va a instalar todas la dependencias de composer</li>
</ul>
<div class="highlight highlight-source-shell notranslate position-relative overflow-auto" dir="auto" data-snippet-clipboard-copy-content="composer install"><pre>composer install</pre></div>
<ul dir="auto">
<li>En el directorio raíz encontrará el arhivo <strong>.env.example</strong>, dupliquelo, al archivo duplicado cambiar de nombre como <strong>.env</strong>, este archivo se debe modificar según las configuraciones de nuestro proyecto. Ahí se muestran como debería quedar</li>
</ul>
<div class="highlight highlight-source-shell notranslate position-relative overflow-auto" dir="auto" data-snippet-clipboard-copy-content="DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbsistemaventas 
DB_USERNAME=root
DB_PASSWORD="><pre>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=venta 
DB_USERNAME=root
DB_PASSWORD=</pre></div>
<ul dir="auto">
<li>Ejecutar el comando para crear la Key de seguridad</li>
</ul>
<div class="highlight highlight-source-shell notranslate position-relative overflow-auto" dir="auto" data-snippet-clipboard-copy-content="php artisan key:generate "><pre>php artisan key:generate </pre></div>
<ul dir="auto">
<li>Ejecutar el comando para crear ruta de imagen</li>
</ul>
<div class="highlight highlight-source-shell notranslate position-relative overflow-auto" dir="auto" data-snippet-clipboard-copy-content="php artisan storage:link"><pre>php artisan storage:link </pre></div>
<ul dir="auto">
<li>
<p dir="auto">Ingrese al administrador de <a href="http://localhost/phpmyadmin/" rel="nofollow">PHP MyAdmin</a> y cree una nueva base de datos, el nombre es opcional, pero por defecto nombrarla <strong>dbsistemaventas</strong></p>
</li>
<li>
<p dir="auto">Correr la migraciones del proyecto</p>
</li>
</ul>
<div class="highlight highlight-source-shell notranslate position-relative overflow-auto" dir="auto" data-snippet-clipboard-copy-content="php artisan migrate"><pre>php artisan migrate</pre></div>
<ul dir="auto">
<li>Ejecute los seeders, esto creará un usuario administrador, puede revisar las credenciales en el archivo (<strong>database/seeders/UserSeeder</strong>)</li>
</ul>
<div class="highlight highlight-source-shell notranslate position-relative overflow-auto" dir="auto" data-snippet-clipboard-copy-content="php artisan db:seed"><pre>php artisan db:seed</pre></div>
<ul dir="auto">
<li>Ejecute el proyecto</li>
</ul>
<div class="highlight highlight-source-shell notranslate position-relative overflow-auto" dir="auto" data-snippet-clipboard-copy-content="php artisan serve"><pre>php artisan serve</pre></div>
<div class="markdown-heading" dir="auto"><h2 tabindex="-1" class="heading-element" dir="auto">Notas</h2><a id="user-content-notas" class="anchor" aria-label="Permalink: Notas" href="#notas"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z"></path></svg></a></div>
<ul dir="auto">
<li>Obtenga más información sobre este proyecto <a href="https://api.whatsapp.com/send?phone=+51921674886&text=%C2%A1Hola!%20Cual%20es%20tu%20consulta" rel="nofollow">aquí</a>.</li>
<li><a href="https://elisay-code.netlify.app" rel="nofollow">Más información sobre el proyecto</a></li>
</ul>
<div class="markdown-heading" dir="auto"><h2 tabindex="-1" class="heading-element" dir="auto">Licencia</h2><a id="user-content-licencia" class="anchor" aria-label="Permalink: Licencia" href="#licencia"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z"></path></svg></a></div>
