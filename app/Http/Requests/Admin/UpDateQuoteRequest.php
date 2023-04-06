<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpDateQuoteRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'body'    => 'required',
			'image'   => 'image',
			'movie_id'=> 'required|exists:movies,id',
		];
	}
}