<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_tb')->insert([
            'freeshipping' => 'Free Shipping for all Order of $99',
            'facebook' => 'https://www.facebook.com/arman.hosen.731572/',
            'twitter' => 'https://www.facebook.com/arman.hosen.731572/',
            'linkdin' => 'https://www.facebook.com/arman.hosen.731572/',
            'pinterest' => 'https://www.facebook.com/arman.hosen.731572/',
            'image'     =>'',
            'Date'      => date('2022-03-04'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
