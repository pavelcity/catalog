<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Twomodel extends Model
{
    use HasFactory;

		protected $fillable = [
			'sort',
			'title',
			'link',
			'pic950',
			'pic768',
			'pic480',
			'pic414',
			'pic375',
			'ogimg',
		];
}
