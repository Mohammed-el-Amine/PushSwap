<?php
//j'include mon fichier controller pour executer ici les fonction dont j'ai besoin
include("push_swapController.php");

//instancier ma classe

//instancer une methode

function nombre($nb){
    $lb=[];
    $truce = new Swap();
    // $truce->sa($nb);
    // echo " ";
    // $truce->sb($nb);
    // echo " ";
    // $truce->sc($nb,$nb);
    // echo " ";
    //$truce->pa($nb,$nb=["20","22","24","26","17"]);
    // echo " ";
    // $truce->pb($nb,$nb=["20","22","24","26","17"]);
    // echo " ";
    // $truce->ra($nb);
    // echo " ";
    // $truce->rb($nb);
    // echo " ";
    //$truce->rr($nb,$nb=["20","22","24","26","17"]);
    //echo " ";
    // $truce->rra($nb);
    //echo " ";
    $truce->rrb($nb);
    //echo "";
    echo "\n";

}
nombre(["1784","12","17","98"]);

?>