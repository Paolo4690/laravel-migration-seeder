# Laravel migration seeder
1. **DB Structure**
    - trains
        - id | bigInt
        - agency | string(50) | nullable
        - departure_station | string(100) | nullable
        - arrival_station | string(100) | nullable
        - departure_time | dateTime | nullable
        - arrival_times | dateTime | nullable
        - train_code | smallInt | nullable
        - carriages | smallInt | nullable
        - in_time | smallInt | nullable
        - deleted | smallInt | nullable
        - create_at | dateTime
        - modified_at | dateTime
1. **Create DB**
1. **.env file**
    - if .env exists:
        - update the fields about the db
    - id .env does not exists:
        - copy the .env.example file in the same folder
        - rename it to .env
        - execute command: php artisan key:generate
        -  update the fields about the db
1. php artisan make:model -all Train
    - **Model**
        - Train
    - **Controller**
        - TrainController
    - **Migration**
        - create_trains_table
    -  **Seeder**
        - TrainSeeder.php
    - **View**

1. php artisan migrate
