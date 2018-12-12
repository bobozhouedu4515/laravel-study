<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Transformers\ArticleTransformer;


class ArticleController extends CommonController
{


    public function articles ()
    {
        return $this->response()->array(Article::latest ()->paginate(10),new ArticleTransformer());
    }

    public function show ($id)
    {
        return Article::find($id);
    }

    public function menuArticle ($id)
    {
        return Article::where('category_id',$id)->get();
    }


}
