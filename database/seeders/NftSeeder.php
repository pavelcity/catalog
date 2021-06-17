<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banernfts')->insert([
					'title' => 'nft baner',
					'link' => '/nft'
				]);
    }
}
