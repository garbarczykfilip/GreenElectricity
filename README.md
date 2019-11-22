# GreenElectricity

### Uruchomienie aplikacji

1. Sklonuj repozytorium do odpowiedniego folderu.

2. Uruchom polecenie `composer install`.

3. Uruchom polecenie `php artisan key:generate`.

4. Uruchom polecenie `php artisan jwt:key`.

6. Zmien plik `.env.example` na `.env`, skonfiguruj w nim połączenie z bazą danych mysql, oraz zmień parametr `APP_DEBUG` na `false`.
