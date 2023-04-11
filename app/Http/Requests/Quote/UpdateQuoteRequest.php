<?php

namespace App\Http\Requests\Quote;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuoteRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'body.en'     => 'required',
			'body.ka'     => 'required',
			'image'       => 'image',
			'movie_id'    => 'required|exists:movies,id',
		];
	}
}
