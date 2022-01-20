#TRY-BASIC-LARAVEL

A mini trying folder to try thing with Laravel, bootstrap, and Laravel UI.

## Instalation

-composer install
-npm install && npm run dev

## Database Connection (In this case using mysql)
-Copy and paste the file named .env.example, in the new copy, rename it to anly .env
-Change these things according to your Data base :

    --In the .env file, line 11 to 16:
        -DB_CONNECTION=mysql  (your data base)
        -DB_HOST=localhost
        -DB_PORT=3306
        -DB_DATABASE=cats_trying_api (the name of your data base)
        -DB_USERNAME=root
        -DB_PASSWORD=

    --In the folder config, open database.php and do these:

        -In the line 18:
            -'default' => env('DB_CONNECTION', 'mysql'), (Change 'mysql' to your data base, or leave it if it's the one you're using)

        -Lines 49 to 53
            -'host' => env('DB_HOST', 'localhost'),
            -'port' => env('DB_PORT', '3306'),
            -'database' => env('DB_DATABASE', 'cats_trying_api'), (the name of your data base)
            -'username' => env('DB_USERNAME', 'root'),
            -'password' => env('DB_PASSWORD', ''),