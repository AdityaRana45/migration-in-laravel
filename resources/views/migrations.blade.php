<div>
    <!-- We must ship. - Taylor Otwell -->clean

    php artisan make:migration create_student_table<br>
    php artisan migrate
    php artisan migrate:reset
    php artisan migrate:rollback --step2
    php artisan migrate --path=/database/migrations/.......path
    php artisan migrate:refresh
</div>
