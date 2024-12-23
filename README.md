Soulsdle Backend
Este es el backend de Soulsdle, un minijuego inspirado en el estilo de Loldle, pero con temática de Dark Souls. El proyecto se centra en gestionar la base de datos de usuarios, puntajes y en manejar los cambios del modo Daily, que varía el objetivo del día.

Descripción
Soulsdle Backend es una API RESTful que permite:

Gestionar usuarios: Registro, inicio de sesión y autenticación.
Registrar puntuaciones: Los jugadores pueden enviar sus puntuaciones diarias y ver su rendimiento.
Modo Daily: Cada día se genera un nuevo desafío en el juego, el cual se cambia y se administra automáticamente desde el backend.
La API está construida en PHP utilizando el framework Laravel y maneja una base de datos MySQL para almacenar la información.

Instalación
Requisitos previos
PHP >= 7.4
Composer
MySQL o MariaDB
Node.js (para administrar dependencias del frontend, si es necesario)
Pasos de instalación
Clonar el repositorio:

bash
Copiar código
git clone https://github.com/tu_usuario/soulsdle-backend.git
cd soulsdle-backend
Instalar dependencias: Ejecuta composer install para instalar todas las dependencias de PHP.

bash
Copiar código
composer install
Configurar la base de datos: Copia el archivo .env.example a .env y edítalo con los datos de tu base de datos.

bash
Copiar código
cp .env.example .env
Ajusta las siguientes variables en el archivo .env para la conexión de base de datos:

env
Copiar código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=soulsdle_db
DB_USERNAME=usuario
DB_PASSWORD=contraseña
Generar clave de la aplicación: Laravel requiere una clave única para la aplicación, genera una con el siguiente comando:

bash
Copiar código
php artisan key:generate
Ejecutar migraciones: Asegúrate de que la base de datos esté configurada y ejecuta las migraciones para crear las tablas necesarias:

bash
Copiar código
php artisan migrate
Iniciar el servidor: Una vez configurado, puedes iniciar el servidor con:

bash
Copiar código
php artisan serve
El servidor estará disponible en http://127.0.0.1:8000.

Uso de la API
Endpoints principales
GET /api/users
Obtiene una lista de todos los usuarios.

POST /api/register
Registra un nuevo usuario. Debes proporcionar un correo y contraseña en el cuerpo de la solicitud.

POST /api/login
Inicia sesión con las credenciales del usuario. Devuelve un token JWT para autenticación.

POST /api/scores
Envía una nueva puntuación para el día actual. Se espera un valor de puntuación en el cuerpo de la solicitud.

GET /api/daily-challenge
Obtiene el desafío del día actual. Este es el objetivo que el jugador debe intentar completar en el juego.

Autenticación
Para la autenticación, la API utiliza JSON Web Tokens (JWT). Al iniciar sesión, se obtiene un token que debe incluirse en las cabeceras de las solicitudes a los endpoints protegidos.

Ejemplo de cabecera de autenticación:

bash
Copiar código
Authorization: Bearer {token}
Contribución
¡Las contribuciones son bienvenidas! Si tienes ideas o mejoras para el proyecto, por favor abre un Pull Request.

Haz un fork del repositorio.
Crea una rama para tu nueva funcionalidad (git checkout -b feature/nueva-funcionalidad).
Realiza los cambios y haz un commit (git commit -am 'Agrega nueva funcionalidad').
Haz push a tu rama (git push origin feature/nueva-funcionalidad).
Crea un Pull Request.
Licencia
Este proyecto está bajo la licencia MIT.

Consejos adicionales:
Si en algún momento el proyecto crece, puedes agregar más detalles en la sección de instalación, uso o API según sea necesario.
Asegúrate de actualizar cualquier URL y detalle relacionado con tu repositorio y cómo interactúan otros servicios con el proyecto.
