# GreenElectricity

### Uruchomienie aplikacji

1. Sklonuj repozytorium do odpowiedniego folderu.

2. Uruchom polecenie `composer install`.

3. Zmien plik `.env.example` na `.env`, skonfiguruj w nim połączenie z bazą danych mysql, oraz zmień parametr `APP_DEBUG` na `false`.

4. Uruchom polecenie `php artisan jwt:secret`.

6. Uruchom polecenie `php artisan key:generate`.

7. Uruchom polecenie `php artisan migrate --seed`.
