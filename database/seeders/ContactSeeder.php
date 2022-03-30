<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('contact_tb')->insert([
            'Heading' => 'heading is here',
            'phone' => '+01-3-8888-6868',
            'address' => '60-49 Road 11378 New York',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20645.5438642198!2d90.40340098108884!3d23.83100572064308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a4136c4b61%3A0x19549f5462616f04!2sBdtask%20Limited%20-%20Best%20Software%20Company%20in%20Bangladesh!5e0!3m2!1sen!2sbd!4v1646899308151!5m2!1sen!2sbd',
            'opentime' => '10:00 am to 23:00 pm',
            'email' => 'contact@armanhosen.com',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
