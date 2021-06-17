<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Collection;

class Catcollection extends Model
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
			'title',
			'slug',
		];


 

		public function collections () {
			return $this->hasMany(Collection::class);
		}
}
