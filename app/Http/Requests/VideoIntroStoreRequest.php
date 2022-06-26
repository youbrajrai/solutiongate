<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoIntroStoreRequest extends FormRequest
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
            'name' => ['required'],
            'director' => ['required'],
            'duration' => ['required'],
            'casts' => ['required'],
//            'video' => ['required', 'mimes:mp4,mov,ogg|max:51200'],
            'video' => ['required', 'mimes:mp4,x-flv,x-msvideo|max:51200'],
        ];
    }
}
