<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait HasImage
{
    /*
    Menangkap request yang diberikan dari sebuah inputan dan path 
    sebagai tempat penyimpanan gambar
    */
    public function uploadImage($request, $path)
    {
        $image = null;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image->storeAs($path, $image->hashName());
        }

        return $image;
    }

    public function updateImage($path, $data, $name)
    {
        Storage::disk('local')->delete($path . basename($data->image));

        $data->update([
            'image' => $name,
        ]);
    }
}