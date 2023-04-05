<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminQuoteRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'body'    => 'required',
			'image'   => 'required|image',
			'movie_id'=> ['required', Rule::exists('movies', 'id')],
		];
	}
}
