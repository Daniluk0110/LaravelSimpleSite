<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('portfolios')->count() == 0) {
            DB::table('portfolios')->insert([
                'name' => 'SMS Mobile App',
                'images' => 'portfolio_pic1.jpg',
                'filter' => 'appleIOS',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('portfolios')->insert([
                'name' => 'Finance App',
                'images' => 'portfolio_pic2.jpg',
                'filter' => 'design',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('portfolios')->insert([
                'name' => 'GPS Concept',
                'images' => 'portfolio_pic3.jpg',
                'filter' => 'design',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('portfolios')->insert([
                'name' => 'Shopping',
                'images' => 'portfolio_pic4.jpg',
                'filter' => 'android',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('portfolios')->insert([
                'name' => 'Managment',
                'images' => 'portfolio_pic5.jpg',
                'filter' => 'design',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('portfolios')->insert([
                'name' => 'iPhone',
                'images' => 'portfolio_pic6.jpg',
                'filter' => 'web',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('portfolios')->insert([
                'name' => 'Nexus Phone',
                'images' => 'portfolio_pic7.jpg',
                'filter' => 'web',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('portfolios')->insert([
                'name' => 'Android',
                'images' => 'portfolio_pic8.jpg',
                'filter' => 'android',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);
        }
    }
}
