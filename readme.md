# Docker - PHP - Nginx - MySQL Development Project Structure

This repository contains a basic project structure for developing PHP applications with Docker, Nginx, and MySQL.

## Project Directory

```
project-root/
│
├── docker/
│   ├── nginx/
│   │   └── conf.d
│   │       └── default.conf
│   └── php/
│       └── Dockerfile
├── app/
│   ├── public/
│   │   └── index.php
│   ├── src/
│   │   └── (your PHP application files)
│   └── composer.json
├── readme.md
└── docker-compose.yml
```

## Setup Instructions

1. Clone or download the repository to your local machine.

2. Create a `.env` file in the project root directory to specify environment variables:

```
MYSQL_PORT=3306
MYSQL_ROOT_PASSWORD=<your_root_password>
MYSQL_USER=<your_user>
MYSQL_PASSWORD=<your_password>
MYSQL_DATABASE=<your_database>
```

3. Execute the following command to build and start the containers:

```
docker-compose up --build -d
```

4. Verify that the containers are running by executing:

```
docker ps
```

5. Run the PHP Application container using the following command'

```
docker exec -it <php-app-container> sh(or bash or any)
```

6. Inside the PHP container, run Composer install command to install dependencies:

```
composer install --prefer-dist --ignore-platform-reqs(--no-dev if dev dependencies is not needed)
```

7. Generate autoload files using Composer:

```
composer dump-autoload(--optimize flag for faster autoloading)
```

8. Exit PHP container:

```
exit
```
