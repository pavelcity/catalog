<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pravila extends Model
{
    use HasFactory;

		protected $fillable = [
			'politictitle',
			'politic',

			'dostavkatitle',
			'dostavka',

			'pokupkatitle',
			'pokupka',

			'obmentitle',
			'obmen'
		];
}
