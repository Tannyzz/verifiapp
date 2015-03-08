# verifiapp
VerifiApp te muestra el estado de aglomeración de los Verificentros del D.F. Con apoyo de Google Maps podras ubicar facilmente el Verificentro que tenga menos automoviles en servicio, asi, reduciendo los tiempos de espera de las largas filas.

Dependencias VerifiApp:

Aplicacion WEB:
	-HTML5
	-PHP 5
	-MySQL 5.3
	-Framework MAterialize http://http://materializecss.com/
	-Javascript 3.0
	-API GoogleMaps 3
	-AppServ
	
Aplicacion Android USUARIOS:

	JDK 1.7
	SDK Android 2.3
	Soportada solo para versiones 4.0 en adelante

Aplicacion Android ADMIN VerifiApp:

	JDK 1.7
	SDK Android 2.3
	Soportada solo para versiones 4.0 en adelante

CONFIGURACION:
	Aplicación Android ADMIN VerifiApp

	Las variables que son mandadas por el WebService de PHP son

	Latitud y Longitud, para que el registro de un auto nuevo en el sistema se haga en el maker correspondiente al Verificentro.
	La version ADMIN sera previamente configurada con esos dos parametros para ser entregada al verificentro.

	Funciona con 1 base de dato "VERIFICENTROS" con una tabla por nombre "TABLE 1" y con los atributos:
		id_verificentro, verificentro, direccion, telefonos, latitud, longitud, y num_autos.

CONFIGURACION DE DESARROLLO LOCAL:

	-Instaalar AppServ
	-Configurar la DB "VERIFICENTROS"
	-Se crea la carpeta del proyecto
	-Descargamos Materialize y lo importamos a nuestro proyecto
	-Localhost se configura automaticamente por AppServ
	
DESPLIEGUE:
	
	-Se instala AppServ en culquier sistema operativo y genera una carpeta en AppServ/www donde debera ser depositado el proyecto
	-Se crea la DB correspondiente
	-Se necesita conexion a internet
	-Descargamos la carpeta verifiapp_mobauacm
	-La insertamos en AppServ/www 
	-Desde tu navegador ingresa a la ruta local "localhost/verifiapo/"
	-Se ejecuta automaticamente index.html

