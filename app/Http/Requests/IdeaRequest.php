<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 *
 */
class IdeaRequest extends FormRequest {

  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool {
    return TRUE;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array {
    return [
      'description' => ['required', 'min:10'],
    ];
  }

  /**
   *
   */
  public function messages() {
    return [
      'description.required' => 'this very required',
      'description.min' => 'Give me something at least :min characters long',
    ];
  }

}
