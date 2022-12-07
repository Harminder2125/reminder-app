<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        $states = array(
            array('name' => "Andaman and Nicobar Islands"),
            array('name' => "Andhra Pradesh"),
            array('name' => "Arunachal Pradesh"),
            array('name' => "Assam"),
            array('name' => "Bihar"),
            array('name' => "Chandigarh"),
            array('name' => "Chhattisgarh"),
            array('name' => "Dadra and Nagar Haveli and Daman & Diu"),
            // array('name' => "Daman and Diu"),
            array('name' => "Delhi"),
            array('name' => "Goa"),
            array('name' => "Gujarat"),
            array('name' => "Haryana"),
            array('name' => "Himachal Pradesh"),
            array('name' => "Jammu and Kashmir"),
            array('name' => "Jharkhand"),
            array('name' => "Karnataka"),
            array('name' => "Kerala"),
            array('name' => "Ladakh"),
            array('name' => "Lakshadweep"),
            array('name' => "Madhya Pradesh"),
            array('name' => "Maharashtra"),
            array('name' => "Manipur"),
            array('name' => "Meghalaya"),
            array('name' => "Mizoram"),
            array('name' => "Nagaland"),

            array('name' => "Odisha"),
            array('name' => "Puducherry"),
            array('name' => "Punjab"),
            array('name' => "Rajasthan"),
            array('name' => "Sikkim"),
            array('name' => "Tamil Nadu"),
            array('name' => "Telangana"),
            array('name' => "Tripura"),
            array('name' => "Uttarakhand"),
            array('name' => "Uttar Pradesh"),
            array('name' => "West Bengal"),
        );
        DB::table('states')->insert($states);

    }
}
