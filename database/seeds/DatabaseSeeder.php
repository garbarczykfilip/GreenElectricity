<?php

use App\Entities\Magazine;
use App\Entities\Publisher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Publisher::class, 100)->create()->each(function ($publisher) {
            $magazines = factory(Magazine::class, 15)->make();
            $publisher->magazines()->saveMany($magazines);
        });

        $this->call(UsersTableSeeder::class);
    }
}
