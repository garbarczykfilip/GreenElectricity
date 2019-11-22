# GreenElectricity

## Uruchomienie aplikacji

1. Sklonuj repozytorium do odpowiedniego folderu.

2. Uruchom polecenie `composer install`.

3. Zmien plik `.env.example` na `.env`, skonfiguruj w nim połączenie z bazą danych mysql, oraz zmień parametr `APP_DEBUG` na `false`.

4. Uruchom polecenie `php artisan jwt:secret`.

6. Uruchom polecenie `php artisan key:generate`.

7. Uruchom polecenie `php artisan migrate --seed`.

## Metody aplikacji

### Ogólnodostępne metody

1. `/api/authorize`, typ: `POST`, przyjmuje parametry `name` i `password`. Zwraca token użytkownika.

### Ogólnodostępne metody

Aby móc użyć poniższych metod należy wcześniej wygenerowany token dodać w nagłówku `Authorization: Bearer <TOKEN>`.

1. `/api/publishers/list`, typ: `GET`, nie przyjmuje parametrów. Zwraca listę wydawnictw.

2. `/api/magazines/search`, typ: `GET`, przyjmuje opcjonalne parametry `name`, `publisher_id`, oraz `page`. Zwraca pasujące rekordy z obsługą stronicowania.

3. `/api/magazines/{id}`, typ: `GET`, przyjmuje parametr `id`. Zwraca pojedynczy magazyn, jeżeli istnieje.
