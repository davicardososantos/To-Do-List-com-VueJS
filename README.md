npm install -g @vue/cli
vue --version
npm update -g @vue/cli
vue create quiz
cd quiz
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
npm run dev

npm install vue-router@4
vue add router

vue add vuex


composer create-project laravel/laravel api
cd api
 
php artisan serve

php artisan make:migration create_clients_table
php artisan make:model Client
php artisan make:controller ClientController

php artisan route:list --path=api

