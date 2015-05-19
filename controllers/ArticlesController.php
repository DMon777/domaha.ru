<?php



class ArticlesController {

    public function actionAll(){
        $art = new Article();
        $articles = $art->get_all();
        include __DIR__."/../views/all_articles.php";
    }

    public function actionOne(){
        $art = new Article();
        $article = $art->get_one($_GET['id']);
        include __DIR__."/../views/one_article.php";
    }

} 