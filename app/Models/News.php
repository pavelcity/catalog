<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use HasFactory;
		use Sluggable;

		public function sluggable(): array
		{
			return [
				'slug' => [
					'source' => 'title'
				]
			];
		} 




		protected $fillable = [
			'status',
			'title',
			'slug',
			'pic',
			'smallpic',
			'pic480',
			'pic414',
			'short',
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
