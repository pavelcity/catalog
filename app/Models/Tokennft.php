<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Token;

class Tokennft extends Model
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
			'tokennft_id',
			'title',
			'slug',
			'pic480_1',
			'pic425_1',
			'pic414_1',
			'pic375_1',
			'short',
			'price',
			'descr',

			'pic350_1',
			'price1',

			'pic350_2',
			'price2',

			'pic350_2',
			'price2',

			'pic350_3',
			'price3',

			'pic350_4',
			'price4',

			'pic350_5',
			'price5',

			'pic350_6',
			'price6',

			'pic350_7',
			'price7',

			'pic350_8',
			'price8',

			'pic350_9',
			'price9',

			'pic350_10',
			'price10',

			'metaTitle',
			'description',
			'keywords',
			'author',

			'ogimg',

			'schemaDescription',
			'schemaAuthor',
			'schemaPublisher'
		];


		public function token () {
			return $this->belongTo(Token::class);
		}
}
