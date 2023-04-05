<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'title' => 'required|unique:movies,title',
		];
	}
}
