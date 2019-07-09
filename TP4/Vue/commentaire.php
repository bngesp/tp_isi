<h1>commentaires</h1>
<div class="row">
    <?php
    $id = 3;
    $sql = "Select * from commentaire where posts_id=?";
    foreach ( $inst->traitement2($sql,  [$id], "Application\DataBase\Table\Commentaire") as $key => $value){?>
        <div class="row">
            <p>
                <?= $value->comment; ?>

            </p>

            <a href="<?= $value->getUrl();?>" class="btn btn-primary">Post</a>
        </div>

    <?php } ?>

</div>