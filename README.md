## Curso interactivo de Zend Framework

Curso practico de Zend Framework

En este curso vamos a ver como desarrollar una aplicacion desde cero con Zend Framework, el proyecto sera un sitio de anuncios gratuitos.

Durante el desarrollo de este mini sitios de anuncios, vamos a poder probar alguno de los componentes mas importantes de Zend Framework.

Este proyecto ademas es abierto, cualquier puede hacer un fork, y proponer nuevos cambios.



### Como funciona 


La idea es que paso a paso se vea como desarrollar una aplicacion desde cero con Zend Framework. 

A medida que se avance con los features de la aplicacion, vamos a poder ver en el historial de branch como la aplicacion evoluciona desde el punto 0 hasta un sistema final. 


### Como participar.

Con dos actualizaciones por semana, van a poder seguir la evolucion de la aplicacion, cada uno va a poder ver el codigo, y compartir sus aportes. 

Esto es una version "Alpha", una parte de un curso online, que quiero lanzar en un futuro, todos los que quieran participar pueden hacerlo de forma gratuita, cada parte va a ir acompaniada de un video tutorial, o documento de como aplicar la misma funcionalidad en otros proyectos. 


### Descargar y Trabajar con el proyecto. 


La forma mas facil es descargarse el proyecto completo desde esta url https://github.com/pablofmorales/Curso-interactivo-de-ZF/tarball/master

La otra forma, es descargaselo usando git para luego hacer un fork, y poder compartir mejoras. 


```
git clone git@github.com:pablofmorales/Curso-interactivo-de-ZF.git
```


### Configuracion del proyecto. 

Una vez descargado el proyecto necesitamos configurar nuestro ambiente de trabajo. 

Para eso vamos a ir a la configuracion de nuestro apache, y vamos a agregar un virtual host  para este proyecto. 

El virtualhost deberia tener un codigo parecido al siguiente

```
<VirtualHost *:80>
   DocumentRoot "/var/www/html/cursozf/public"
   ServerName cursozf.local

   # This should be omitted in the production environment
   SetEnv APPLICATION_ENV development

   <Directory "/var/www/html/cursozf/public">
       Options Indexes MultiViews FollowSymLinks
       AllowOverride All
       Order allow,deny
       Allow from all
   </Directory>

</VirtualHost>

```

Tengamos en cuenta que en Directory "..." vamos a poner el path de nuestro proyecto, mas la carpeta public que es donde zf guarda el archivo index.php que sirve de entrada a nuestra aplicacion. Lo mismo en DocumentRoot


Una vez agregado el vhost a nuestro apache, reiniciamos el apache. 

solo falta decirle a nuestra pc que cuando entremos en el browser la url http://cursozf.local apunte a nuestro apache, para eso vamos a editar el archivo /etc/hosts en linux, y el archivo c:\windows\system32\driver\etc\host en liwindows y vamos a agregar la siguiente linea

```
127.0.0.1   cursozf.local
```

Guardamos, y como ultimo paso vamos a nuestro browser y ponemos la url de nuestro proyecto http://cursozf.local 


Y listo :)

