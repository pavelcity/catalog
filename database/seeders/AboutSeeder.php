<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
					'title' => 'Это я'
				]);
    }
}
