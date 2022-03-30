<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner_tb')->insert([
            'b_name' => 'Website banner',
            'description' => 'Website banner',
            'image' =>'',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
