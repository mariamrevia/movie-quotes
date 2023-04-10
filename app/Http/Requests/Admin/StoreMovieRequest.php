<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'title.en' => ['required', 'unique:movies,title->en'],
			'title.ka' => ['required', 'unique:movies,title->ka'],
		];
	}
}
