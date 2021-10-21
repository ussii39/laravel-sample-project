<?php

namespace Database\Seeders;

use DateTime as GlobalDateTime;
use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            'first_name' => "aaa", 'last_name' => "bbb", 'company_id' => 1, 'email' =>"aaaa@gmail.com", "website" => "http://www.", 'created_at' => new GlobalDateTime(),'updated_at' => new GlobalDateTime()]);
    }
}
