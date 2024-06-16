Upon setup you need to run this following

// to get databases
php artisan migrate

// to create user account.
// you can change the default user account goto database>seeder>AdminUserSeeder
php artisan db:seed --class=AdminUserSeeder