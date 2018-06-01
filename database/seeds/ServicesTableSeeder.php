<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('services')->count() == 0) {
            DB::table('services')->insert([
                'name' => 'Android',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'\'s standard dummy text.',
                'icon' => 'fa-android',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('services')->insert([
                'name' => 'Apple IOS',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'\'s standard dummy text.',
                'icon' => 'fa-apple',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('services')->insert([
                'name' => 'Design',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'\'s standard dummy text.',
                'icon' => 'fa-dropbox',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('services')->insert([
                'name' => 'Concept',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'\'s standard dummy text.',
                'icon' => 'fa-html5',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('services')->insert([
                'name' => 'User Research',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'\'s standard dummy text.',
                'icon' => 'fa-slack',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

            DB::table('services')->insert([
                'name' => 'User Experience',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'\'s standard dummy text.',
                'icon' => 'fa-users',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);
        }
    }
}
