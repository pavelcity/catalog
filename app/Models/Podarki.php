<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podarki extends Model
{
    use HasFactory;

		protected $fillable = [
			'title',
			'price',
			'utm',
			'pic420',
			'pic480',
			'pic414',
			'pic375'
		];
}
