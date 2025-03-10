<article<?php echo $article['Featured'] ? " class=featured" : "" ?>>
    <img src="<?=$article['Avatar']?>" alt="">
    <div>
        <p><?= $article['AuthorName'] ?></p>
        <date>Mar 4</date>
        <h3><?= $article['Title'] ?></h3>
        <p>#nextjs #webdev #frontend #programming</p>
        <div>
            <p>25 reactions</p>
            <p>7 comments</p>
            <p>4 min read</p>
            <p>bookmark</p>
        </div>
    </div>
</article>
