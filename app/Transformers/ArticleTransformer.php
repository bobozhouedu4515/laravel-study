<?php
    namespace App\Transformers;
    use App\Models\Article;
    use League\Fractal\TransformerAbstract;

    class ArticleTransformer extends TransformerAbstract
    {
        protected $availableIncludes = ['category'];
        public function transform (Article $article)
        {
            return [
              'id'=>$article['id'],
                'title' => $article[ 'title' ],
                'content'=>$article['content'],
                'created_at'=>$article->created_at->
                toDateTimeString()
            ];
        }
        public function includeCategory (Article $article)
        {
            return $this->item ($article->category ,new CategoryTransformer());
        }
    }
