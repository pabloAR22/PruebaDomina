# Bienvenido a task manager
## Desarrollado por Pablo Aristizabal Rada, 2023

### Arquitectura
La aplicación fue desarrollada en laravel, el db manager utilizado durante el desarrollo es postgre SQL y pgAdmin en su versión 4.

### Instalación
1. Se deben bajar los cambios desde git.
2. Correr las migraciones y sembrar la base de datos con el comando *php artisan migrate:refresh --seed*
3. En caso de que algunos estilos no se esten aplicando correctamente, recomiendo dejar corriendo en una consola el comando npm run dev o npm run watch.

### Primeros pasos
Una vez hechos los pasos anteriores, en base de datos deberás tener en la tabla users un usuario creado automaticamente por el seed, la contraseña por defecto es "password" el email o usuario se saca del campo email.


![Untitled](https://github.com/pabloAR22/PruebaDomina/assets/61284007/39568fab-22b8-476b-a41a-1fc622c3bf03)
