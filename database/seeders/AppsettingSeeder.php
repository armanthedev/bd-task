<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;
use Illuminate\Database\Seeder;

class AppsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appsetting_tb')->insert([
            'title'         => 'app title',
            'offer'         => 'Free Shipping for all Order of $99',
            'address'       => 'B-25, 4th Floor, Mannan Plaza Dhaka, 1229',
            'email'         => 'contact@armanhosen.com',
            'phone'         => '+880-1612975172',
            'fav_img'       => '',
            'site_logo'     => '',
            'admin_align'   => '',
            'office_time'   => 'Monday - Friday: 08:00 - 22:00
                                    Saturday, Sunday: Closed',
            'copyright_text'   => '2022 © Copyright armanhosen.com',
            'created_at'    => new DateTime(),
            'updated_at'    => new DateTime()
        ]);
    }
}
