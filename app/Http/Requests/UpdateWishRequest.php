<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Verlanglijstjes\Wish;

class UpdateWishRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /** @var Wish $wish */
        $wish = $this->route('wish');

        return $wish && $this->user()->can('update', $wish);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'wish' => 'required',
            'link' => 'url',
        ];
    }
}
