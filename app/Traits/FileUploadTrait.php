<?php

namespace App\Traits;

trait FileUploadTrait
{
    public function storeFile($file) 
    {
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->storeAs('uploads', $fileName, 'public');

        return $fileName;
    }
}