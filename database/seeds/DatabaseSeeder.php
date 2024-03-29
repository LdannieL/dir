<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        factory(App\User::class, 5)->create();
        factory(App\Post::class, 10)->create();
        factory(App\Category::class, 4)->create();

        Model::reguard();
    }
}
