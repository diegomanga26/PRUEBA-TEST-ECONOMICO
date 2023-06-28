# Proyecto de Base de Datos de CampusLand

Este proyecto es una base de datos sencilla para el sistema de gestión de una universidad ficticia llamada CampusLand. La base de datos está diseñada para almacenar información relacionada con los estudiantes, profesores, cursos y departamentos de la universidad.

## Requisitos

- MySQL: Asegúrate de tener instalado y configurado un servidor MySQL en tu entorno de desarrollo.

## Configuración de la Base de Datos

1. Clona este repositorio en tu máquina local:

```
bashCopy code
git clone https://github.com/tu-usuario/proyecto-campusland.git
```

1. Accede al directorio del proyecto:

```
bashCopy code
cd proyecto-campusland
```

1. Importa la estructura de la base de datos a tu servidor MySQL:

```
cssCopy code
mysql -u usuario -p < estructura.sql
```

Asegúrate de reemplazar "usuario" con tu nombre de usuario de MySQL. Será necesario ingresar tu contraseña de MySQL para realizar la importación.

## Uso

Una vez que hayas importado la estructura de la base de datos, puedes comenzar a utilizarla para almacenar y consultar información relacionada con CampusLand.

El archivo `estructura.sql` contiene las declaraciones SQL para crear las 4 tablas principales:

1. Estudiantes (`students`): Almacena información sobre los estudiantes, como su ID, nombre, correo electrónico y fecha de nacimiento.
2. Profesores (`professors`): Almacena información sobre los profesores, como su ID, nombre, correo electrónico y departamento al que pertenecen.
3. Cursos (`courses`): Almacena información sobre los cursos ofrecidos en la universidad, incluyendo su ID, nombre y el ID del profesor que lo imparte.
4. Departamentos (`departments`): Almacena información sobre los departamentos de la universidad, como su ID y nombre.

Puedes utilizar las sentencias SQL estándar para realizar consultas, inserciones, actualizaciones y eliminaciones de datos en las tablas.

## Contribución

Si deseas contribuir a este proyecto, puedes seguir los pasos a continuación:

1. Haz un fork de este repositorio y clona tu fork en tu máquina local.
2. Crea una rama para tu contribución:

```
cssCopy code
git checkout -b mi-contribucion
```

1. Realiza los cambios y mejoras que desees.
2. Realiza un commit de tus cambios:

```
sqlCopy code
git commit -m "Agregada funcionalidad XYZ"
```

1. Sube tus cambios a tu repositorio fork:

```
perlCopy code
git push origin mi-contribucion
```

1. Crea un Pull Request en este repositorio para revisar tus cambios.

## Licencia

Este proyecto se distribuye bajo la Licencia MIT. Puedes ver los detalles en el archivo [LICENSE](https://chat.openai.com/LICENSE).

## Contacto

Si tienes alguna pregunta o sugerencia relacionada con este proyecto, puedes contactarme a través de mi dirección de correo electrónico: [tu-email@ejemplo.com](mailto:tu-email@ejemplo.com).

¡Gracias por tu interés en el proyecto CampusLand! Esperamos que sea útil para tus necesidades de gestión de base de datos en el entorno universitario.