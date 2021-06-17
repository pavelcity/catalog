<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
					[
						'name' => 'Супер-админ',
						'email' => 'suadmin@me.me',
						'password' => bcrypt('778880000')
					],
					[
						'name' => 'Менеджер',
						'email' => 'watch@me.me',
						'password' => bcrypt('770055')
					]
				]);
    }
}
