<?php

    namespace App\Http\Controllers\Api;

    use App\Models\Category;
    use App\Transformers\CategoryTransformer;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    class CategoryController extends CommonController
    {
        public function categories ()
        {
            return $this -> response -> collection (Category ::all(), new CategoryTransformer());
        }
    }
