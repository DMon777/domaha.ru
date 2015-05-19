

<a href="?action=Add">Добавить статью</a>
<p>test commit</p>
<?php

mb_internal_encoding("UTF-8");

foreach($articles as $key => $article):?>

    <h2><?=$article['title'];?></h2>
    <p><?=mb_substr($article['article'],0,100);?>...</p>
    <a href="?id=<?=$article['id'];?>&amp;action=One">Читать полностью</a>

<?php
endforeach;
?>






