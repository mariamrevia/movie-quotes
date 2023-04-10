<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Quote extends Model
{
	use HasFactory;

	use HasTranslations;

	public $translatable = ['body'];

	protected $guarded = ['id'];

	public function movie(): BelongsTo
	{
		return $this->belongsTo(Movie::class);
	}
}
