<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagesRequest;
use App\Http\Gestion\PhotoGestion;
use App\Http\Gestion\PhotoGestionInterface;

class PhotoController extends Controller
{
    public function getForm()
    {
        return \view('photo');
    }

    public function postForm(ImagesRequest $request, PhotoGestionInterface $photoGestion)
    {
        if ($photoGestion->save($request->file('image'))) {
            return \view('photo_ok');
        }

       return \redirect('photo')->with('error', 'Désolé, votre image ne peut pas être envoyée !');
    }
}
