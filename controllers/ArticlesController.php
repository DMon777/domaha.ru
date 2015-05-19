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

    public function actionAdd(){
        include __DIR__."/../views/add_article.php";
        if(isset($_POST['add'])){
            if(!empty($_POST['title']) && !empty($_POST['article'])){
                $title = $_POST['title'];
                $article = $_POST['article'];
                $this->addArticle($title,$article);
            }
        }
    }

    public function addArticle($title,$article){
        $art = new Article();
        $art->add($title,$article);
    }

} 