<?php

namespace App\Traits;

trait FileUploadTrait
{
    public function storeFile($request) 
    {
        if (!$request->hasFile('picture')) {
            return null;
        }

        $file = $request->picture;
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->storeAs('uploads', $fileName, 'public');

        return $fileName;
    }
}