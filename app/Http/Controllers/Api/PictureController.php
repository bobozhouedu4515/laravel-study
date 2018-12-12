<?php

namespace App\Http\Controllers\Api;

use App\Models\Picture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends CommonController
{

    public function pictures ()
    {
        return $this->response ()->array (Picture::all ());
    }

}
