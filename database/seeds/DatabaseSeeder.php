<?php

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
         $this->call(PagesTableSeeder::class);
         $this->call(PeoplesTableSeeder::class);
         $this->call(PortfoliosTableSeeder::class);
         $this->call(ServicesTableSeeder::class);
    }
}
