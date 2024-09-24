<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DailyCostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //2024_09_23_194606_create_daily_costs_table.phpファイルのカラム名を指定
            // バリデーションルールを設定
            'shop_id' => 'required|integer',
            'cost_type' => 'required|string',
            'amount' => 'required|numeric',
            'is_fixed' => 'required|boolean',

        ];
    }
}
