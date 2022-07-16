<?php

namespace App\Http\Requests\Shared\Service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return $this->createRules();
        } elseif ($this->isMethod('put')) {
            return $this->updateRules();
        }
    }

    /**
     * Define validation rules to store method for resource creation
     *
     * @return array
     */
    public function createRules(): array
    {
        return [
            'image' => 'required',
            'image' => 'required',
            'seller_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'livraison' => 'required'
        ];
    }

    /**
     * Define validation rules to update method for resource update
     *
     * @return array
     */
    public function updateRules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'seller_id' => 'required',
            'price' => 'required',
            'image' => 'required',
            'livraison' => 'required'
        ];
    }
}
