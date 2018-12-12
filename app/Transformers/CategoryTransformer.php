<?php
    /**
     * Created by PhpStorm.
     * User: ASUS
     * Date: 2018/12/7
     * Time: 19:07
     */
    namespace App\Transformers;
    use App\Models\Category;
    use League\Fractal\TransformerAbstract;
    class CategoryTransformer extends TransformerAbstract
    {
        protected $availableIncludes = ['article'];
        public function transform (Category $category)
        {
//            echo 88;
//            dd ($category);
            return [
                'id' => $category[ 'id' ],
                'title' => $category[ 'title' ]
            ];
        }

        public function includeArticle (Category $category)
        {
//            echo 99;
//            dd ($category->toArray ());
//            dd ($category -> article->toArray());
            return $this -> item ($category , new ArticleTransformer());
        }

    }
