<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class QuoteRequest extends FormRequest
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
