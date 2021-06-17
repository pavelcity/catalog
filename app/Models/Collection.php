<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Catcollection;

class Collection extends Model
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
			'catcollection_id',

			'title',
			'slug',
			'descr',
			'size',
			'color',
			'material',
			'price',

			'pic400_1',
			'pic375_1',
			'pic400_2',
			'pic375_2',
			'pic400_3',
			'pic375_3',
			'pic400_4',
			'pic375_4',
			'pic400_5',
			'pic375_5',

			'pic400_6',
			'pic375_6',
			'pic400_7',
			'pic375_7',
			'pic400_8',
			'pic375_8',
			'pic400_9',
			'pic375_9',
			'pic400_10',
			'pic375_10',

			'metaTitle',
			'description',
			'keywords',
			'author',

			'ogimg',

			'schemaDescription',
			'schemaAuthor',
			'schemaPublisher',
		];
 

		public function catcollection () {
			return $this->belongsTo(Catcollection::class);
		}
}
