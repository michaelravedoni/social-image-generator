<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Abordage\OpenGraphImages\OpenGraphImages;

class ImageController extends Controller
{
    public function get(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required',
            'background_color' => 'string',
            'text_color' => 'string',
            'name' => 'string',
            'name_color' => 'string',
            'app_name_decoration_color' => 'string',
            'text_alignment' => 'in:left,center,right',
            'text_sticky' => 'in:left,center,right',
            'name_position' => 'in:top-left,top-center,top-right,bottom-left,bottom-center,bottom-right',
            'name_decoration_style' => 'in:line,label,rectangle',
            'font_size' => 'integer',
            'name_font_size' => 'integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        /* Color Format : HEX, RGB or RGBA format */
        $config = [
            'background_color' => request()->has('bg_color') ? '#'.request()->input('bg_color') : '#eeeeee',
            'text_color' => request()->has('color') ? '#'.request()->input('color') : '#222222',
            'app_name' => request()->input('name', null),
            'app_name_color' => request()->has('name_color') ? '#'.request()->input('name_color') : '#222222',
            'app_name_decoration_color' => request()->has('name_decoration_color') ? '#'.request()->input('name_decoration_color') : '#ffffff',
            'text_alignment' => request()->input('text_alignment', 'left'),
            'text_sticky' => request()->input('text_sticky', 'center'),
            'app_name_position' => request()->input('name_position', 'bottom-center'),
            'app_name_decoration_style' => request()->input('name_decoration_style', 'line'),
            'font_size' => (int) request()->input('font_size', 55),
            'app_name_font_size' => (int) request()->input('name_font_size', 30),
            'font_path' => null,
            'app_name_font_path' => null,
        ];

        $type = request()->input('type', 'opengraph');
        $text = request()->input('text', '');
        $openGraphImage = new OpenGraphImages($config);
        $image = $openGraphImage->make($text, $type)->get();
        return response($image)->header('Content-type','image/png');
    }
}
