<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
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
        if ($this->file()){
            $campos = [
                'categories_id' => 'required',
                'NombreProducto' => 'required|string|max:30|min:2',
                'precio' => 'Integer|Min:0.01|Max:10000',
                'imagen' => 'required|mimes:jpeg,jpg,png,bmp',
            ];
        }else{
            $campos = [
                'categories_id' => 'required',
                'NombreProducto' => 'required|string|max:30|min:2',
                'precio' => 'Integer|Min:0.01|Max:10000',
            ];
        }       
        return $campos;
    }
}
