EDIT .env to YOUR LOCALHOST DATABASE

composer install
npm run dev
php artisan generate:key
php artisan migrate
php artisan db:seed
php artisan serve