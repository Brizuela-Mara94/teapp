#!/bin/bash

# Cambiar al directorio src
cd src

# Si se pasa el argumento '-r', eliminar la base de datos y ejecutar migraciones
if [[ "$1" == "-r" ]]; then
    echo "Eliminando archivo database.sqlite..."
    rm -f database/database.sqlite
    echo "Ejecutando migraciones y seeders..."
    php artisan migrate --force --seed
fi

# Iniciar el servidor de npm en segundo plano
npm run dev &

# Iniciar el servidor de Laravel en primer plano
php artisan serve &
