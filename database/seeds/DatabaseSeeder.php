<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    private $tables = [
        'users',
        'password_resets',
        'roles',
        'user_roles',
        'permissions',
        'role_permissions',
        'categories',
        'types',
        'books',
        'lists',
        'book_lists',
        'book_readers',
        'book_metas',
        'purchases'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if ( App::environment() == 'local' ) {
            Model::unguard();
            $this->cleanDatabase();
            $this->call('UserTableSeeder');
//            $this->call('CategoryTableSeeder');
//            $this->call('ShopTableSeeder');
//            $this->call('BalanceTableSeeder');
//            $this->call('EmployeeTableSeeder');
//            $this->call('AgentTableSeeder');
        }
    }

    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ( $this->tables as $table ) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
