<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:50',
            'category_id' => 'required',
            'jobType' => 'required',
            'vacancy' => 'required',
            'location' => 'required|max:70',
            'description' => 'required:',
            'company_name' => 'required|min:3|max:50',
            'experiences' => 'required',
            "salary" => "sometimes",
            "keywords" => "sometimes",
            "responsibility" => "sometimes",
            "qualifications" => "sometimes",
            "company_location" => "sometimes",
            "company_website" => "sometimes"
        ];
    }
}
