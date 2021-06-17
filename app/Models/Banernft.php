<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banernft extends Model
{
    use HasFactory;

		protected $fillable = [
			'title',
			'link',
			'pic950',
			'pic768',
			'pic480',
			'pic414',
			'pic375'
		];
}
