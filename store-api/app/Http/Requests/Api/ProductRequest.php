<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getActionMethod()) {
            case 'store':
            {
                return [
                    'product_category_id' => 'exists:product_categories,id',
                    'product_name' => 'required|string',
                    'product_name_en' => 'required|string',
                    'thumbnail' => 'image',
                    'slug' => 'string',
                    'short_description' => 'string',
                    'short_description_en' => 'string',
                    'price' => ['required', 'regex:~\d{1,}\.\d{2}$~'],
                    'sale_price' => ['required', 'regex:~\d{1,}\.\d{2}$~'],
                    'stock' => 'required|integer',
                    'seo_title' => 'string',
                    'seo_keyword' => 'string',
                    'seo_description' => 'string',
                    'benefit' => 'string',
                    'benefit_en' => 'string',
                    'tech_description' => 'string',
                    'tech_description_en' => 'string',
                    'description' => 'string',
                    'description_en' => 'string',
                    'usage' => 'string',
                    'usage_en' => 'string',
                    'main_image' => 'required|image',
                    'main_image_2' => 'required|image',
                    'benefit_image' => 'image',
                    'product_video' => 'file',
                    'status' => 'required',
                    'rating' => 'required',
                    'sold_count' => 'required',
                    'review_count' => 'required',
                ];
            }
            case 'edit':
            {
                return [
                    'product_category_id' => 'exists:product_categories,id',
                    'thumbnail' => 'image',
                    'price' => ['regex:~\d{1,}\.\d{2}$~'],
                    'sale_price' => ['regex:~\d{1,}\.\d{2}$~'],
                    'stock' => 'integer',
                    'main_image' => 'image',
                    'main_image_2' => 'image',
                    'benefit_image' => 'image',
                    'product_video' => 'file',
                ];
            }
        }
    }
}
