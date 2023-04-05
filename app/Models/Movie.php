<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
	use HasFactory;

	protected $guarded = ['id'];

	public function quotes(): HasMany
	{
		return $this->hasMany(Quote::class);
	}
}
