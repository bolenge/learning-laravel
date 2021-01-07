<?php 

namespace App\Http\Gestion;

use App\Http\Gestion\PhotoGestionInterface;

class PhotoGestion implements PhotoGestionInterface
{

    public function save($image)
	{
		if($image->isValid())
		{
			$chemin = config('images.path');
			$extension = $image->getClientOriginalExtension();

			do {
				$nom = date('Y-m-d-h-i-s').'.'.$extension;
			} while(file_exists($chemin . '/' . $nom));

            return $image->move($chemin, $nom);
		}

		return false;
	}

}