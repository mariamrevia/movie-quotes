<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'title.en' => ['required', 'unique:movies,title->en'],
			'title.ka' => ['required', 'unique:movies,title->ka'],
		];
	}
}
