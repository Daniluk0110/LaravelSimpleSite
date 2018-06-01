<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('pages')->count() == 0) {
            DB::table('pages')->insert([
                'name' => 'home',
                'alias' => 'hero_section',
                'text' => '<h2>We create <strong>awesome</strong> web templates</h2>\n <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'\'s standard dummy text  printer took a galley of type and scrambled it to make a type specimen.</p>\n',
                'images' => 'main_device_image.png',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);


            DB::table('pages')->insert([
                'name' => 'about us',
                'alias' => 'aboutUs',
                'text' => '<h3>Lorem Ipsum has been the industry\'s standard dummy text ever..</h3>\r\n<br>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p>\r\n<br>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>',
                'images' => 'about-img.jpg',
                'created_at' => '2018-01-06 00:00:00',
                'updated_at' => '2018-01-06 00:00:00'
            ]);

        }
    }
}
