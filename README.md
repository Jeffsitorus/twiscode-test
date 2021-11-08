REQRUITMENT

PHP Min 7.2.x
Database MariaDB
laravel reqruitment laravel lumen

Install composer

Install Git (disarankan menggunakan client 🌲 Source Tree)

INSTALATION

Clone repository ke dalam working directory anda:

git clone https://github.com/Jeffsitorus/twiscode-test.git

Masuk ke dalam folder twiscode-test dan nstall laravel dependencies dengan menjalankan perintah CLI berikut :

composer install

Copy file .env.example ➡ .env. Dan pastikan konfigurasi database sesuai dengan akun DBMS anda


Buat database di local (sesuai konfigurasi di file .env)
CREATE DATABASE twiscode-test;

Inisialisasi Database dan data awal dengan menjalankan migrasi
composer dump-autoload (Jaga-jaga composer autoload error)
php artisan migrate (Eksekusi file migrasi database\migrations)

Kunjungi aplikasi anda di browser. localhost/twiscode-test/public untuk memastikan deplaza sudah terinstall dengan benar
