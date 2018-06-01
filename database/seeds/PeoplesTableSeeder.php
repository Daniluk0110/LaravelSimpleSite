<?php

use Illuminate\Database\Seeder;

class PeoplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('peoples')->count() == 0) {
            DB::table('peoples')->insert([
                'name' => 'Tom Rensed',
                'position' => 'Chief Executive Officer',
                'images' => 'team_pic1.jpg',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('peoples')->insert([
                'name' => 'Kathren Mory',
                'position' => 'Vice President',
                'images' => 'team_pic2.jpg',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('peoples')->insert([
                'name' => 'Lancer Jack',
                'position' => 'Senior Manager',
                'images' => 'team_pic3.jpg',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);
        }
    }
}
