<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;  


 

		protected $fillable = [
			'status',
			'title',

			'phone',
			'email',

			'pic1500',
			'pic1440',
			'pic1366',
			'pic1024',
			'pic992',
			'pic768',
			'pic600',

			'pic480',
			'pic414',

			'pic375',

			'descr',

			'metaTitle',
			'description',
			'keywords',
			'author',
			
			'ogimg',

			'schemaDescription',
			'schemaAuthor',
			'schemaPublisher',
		];

}
