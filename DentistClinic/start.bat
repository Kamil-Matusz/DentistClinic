%systemDrive%\xampp\mysql\bin\mysql -uroot -e "CREATE DATABASE IF NOT EXISTS dentistclinic;"
call composer install
call php artisan key:generate
call php artisan storage:link
call php artisan migrate
call php artisan db:seed
start http://127.0.0.1:8000
start cmd /k "php artisan serve"
