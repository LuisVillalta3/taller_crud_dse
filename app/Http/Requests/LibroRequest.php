<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'titulo' => 'required',
      'autor' => 'required',
      'editorial' => 'required',
      'genero' => 'required',
      'isbn' => 'required',
      'edicion' => 'required',
      'anio' => 'required',
      'idioma' => 'required',
    ];
  }
}
