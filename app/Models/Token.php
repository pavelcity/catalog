<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tokennft;

class Token extends Model
{
    use HasFactory;

		protected $fillable = [
			'title',
			'pic370_1',
			'pic370_2',
			'pic370_3',
			'pic370_4',
			'pic370_5',
			'pic370_6',
			'pic370_7',
			'pic370_8',
			'pic370_9',
			'pic370_10',
			'price'
		];



		public function tokenNft () {
			return $this->hasOne(Tokennft::class);
		}


}
