<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $category_id = $this->request->get("category_id");
        return [
            "name" => "required",
            "slug" => "required|sometimes|unique:App\Models\Category,slug,$category_id",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "Bu alan zorunludur.",
            "slug.required" => "Bu alan zorunludur.",
            "slug.unique" => "Girdiğiniz :attribute sistemde kayıtlıdır.",
        ];
    }

    protected function passedValidation()
    {
        if (!$this->request->has("slug")) {
            $name = $this->request->get("name");
            $slug = Str::of($name)->slug();
            $this->request->set("slug", $slug);
        }
    }

}
