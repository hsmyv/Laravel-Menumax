<?php

function uploadImage($model, $imageName)
{
    if (request()->hasFile($imageName)) {
        $model->clearMediaCollection($imageName);
        $model->addMediaFromRequest($imageName)->toMediaCollection($imageName);
    }
}

function uploadImages($model, $imageFile, $imageName)
{
    $model->clearMediaCollection($imageFile);
    $model->addMedia($imageFile)->toMediaCollection($imageName);
}
