<main>
        <section>
            <h2>Listes des langages</h2>

            <?php
            
                include_once "./model/listlang.inc.php";
                #print_r($articles);
                foreach($articles as $key => $value){

                }
            ?>
            <?php foreach ($articles as $article):?>
                    <ul>
                        <li>
                            <h2><?= $article['title'] ?></h2>
                        </li>
                        <li>
                            <p><?= $article['content'] ?></p>
                        </li>
                            <a href="<?= $article['url'] ?>" target="blank">
                                <?= $article['link'] ?> &raquo;
                        </a>
                    </ul>
            <?php endforeach?>




        </section>
</main>