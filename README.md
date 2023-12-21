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

### Vista inicial.
![Vista_inicial](image.png)
En la vista inicial encontraras un mensaje junto con una navbar por la que podrás navegar.

### Vista Users
![users](https://github.com/pabloAR22/PruebaDomina/assets/61284007/ef131e2c-db95-484d-bc40-d0f630a75e37)
Desde esta vista puedes crear, editar o eliminar un usuario.

### Vista Proyectos
![proyectos](https://github.com/pabloAR22/PruebaDomina/assets/61284007/3b43aa6c-b24c-44a2-954f-7950e8e5dcd4)

En esta vista puedes crear, editar o eliminar un proyecto.
Al darle en el icono del ojo en cada uno de los proyectos podrás acceder al detalle de cada uno de los proyectos desde el cual mediante el boton
"Add task" puedes agregar una nueva tarea al proyecto.

### Vista tasks
![tasks](https://github.com/pabloAR22/PruebaDomina/assets/61284007/3791e9e2-34b6-40fb-a626-6cd7e8ad87df)
Desde esta vista podras ver, editar y eliminar tareas.
Al hacer click en el icono del ojo en cada uno de los items, podrás ver el detalle de cada una de las tareas, desde la cual podrás agregar un comentario a esta tarea.
![Vista_Detalle_tareas](https://github.com/pabloAR22/PruebaDomina/assets/61284007/bd9520e9-d9fe-44b7-94d8-43ddefe1b0f5)

### Modelo de datos
![ERD_](https://github.com/pabloAR22/PruebaDomina/assets/61284007/3277cbcb-7690-45d8-91c8-89cd84704575)

