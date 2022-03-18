<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Установка

1. Копируем репозиторий
2. Переименуем .env.example на .env
3. ```
   composer install

   ```

4. ```
   docker-compose up -d

   ```

5. ```
   docker exec -it admin_api sh

   ```

6. ```
   php artisan key:generate

   ```

7. ```
   php artisan migrate

   ```

8. ```
   php artisan db:seed

   ```

9. ```
   exit

   ```

10. API endpoint http://localhost:8000/api/v1 -> фильрация по sale или rent, number_of_rooms, number_of_bathrooms, number_of_bedrooms.

11. Нужно отправить GET запрос с query parameters пример ?type=sale&number_of_rooms=10&number_of_bathrooms=4&number_of_bedrooms=1
