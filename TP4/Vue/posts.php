

 <h1>Post </h1>
<div class="row">
<?php
$id = $_GET["id"];
$sql = "Select * from posts where id=?";
foreach ( $inst->traitement($sql) as $key => $value){?>
    <div class="row">
        <h1> <?= $value->titre; ?></h1>
        <p>
            <?= $value->contenu;?>
        </p>
    </div>

<?php } ?>

</div>