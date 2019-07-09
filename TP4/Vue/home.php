<h1>la classe LGP3 ISI</h1>
<div class="row">
<?php
foreach ( $inst->traitement("Select * from posts") as $key => $value){?>
        <div class="row">
            <h3> <?= $value->titre;?></h3>
            <p>
                <?= $value->contenu; ?>
            </p>
        </div>

<?php } ?>

</div>