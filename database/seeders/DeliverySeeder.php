<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;


class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveryinfo_tb')->insert([
            'u_name' => 'Bd task company',
            'Amount' => +01-3-8888-6868,
            'pay_method' => 'Nagad',
            'Fees' => 45.00,
            'Comments' => 'OM Name: Demo
                            OM Phone No: +8801317584839
                            Transaction No: 12156842565
                            ID Card No: 778 797 897',
            'Date'      => date('2022-02-24'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
