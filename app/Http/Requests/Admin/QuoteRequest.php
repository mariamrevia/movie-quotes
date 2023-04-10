<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'body[en]'     => 'required',
			'body[ka]'     => 'required',
			'image'        => 'required|image',
			'movie_id'     => 'required|exists:movies,id',
		];
	}
}
