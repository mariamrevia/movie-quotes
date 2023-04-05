<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminMovieRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'title' => 'required|unique:movies,title',
		];
	}
}
