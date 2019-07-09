<?php
/**
 * Commentaire.php
 * Created by Bassirou NGOM.
 * User: bngesp <https://github.com/bngesp>
 * Licence: MIT
 * Date: 2019-07-09
 * Time: 18:04
 * Email: bassiroungom@esp.sn
 */

namespace  Application\DataBase\Table;
class Commentaire
{

    public function getUrl(){
       return  "index.php?page=posts&id=$this->posts_id";
    }
}