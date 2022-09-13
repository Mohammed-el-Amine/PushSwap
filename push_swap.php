<?php
//j'include mon fichier controller pour executer ici les fonction dont j'ai besoin
include("push_swapController.php");

//instancier ma classe

function nombre($la){
    $lb=[];
    //instanciation
    // $truce->sa($la);
    // echo " ";
    // $truce->sb($la);
    // echo " ";
    // $truce->sc($la,$la);
    // echo " ";
    //$truce->pa($la,$la=["20","22","24","26","17"]);
    // echo " ";
    // $truce->pb($la,$la=["20","22","24","26","17"]);
    // echo " ";
    // $truce->ra($la);
    // echo " ";
    // $truce->rb($la);
    // echo " ";
    //$truce->rr($la,$lb=["20","22","24","26","17"]);
    //echo " ";
    // $truce->rra($la);
    //echo " ";
    //$truce->rrb($la);
    // $truce->rrr($la,$lb=["20","22","24","26","17"]);
    
    $truce = new Swap();

    if(is_array($la)){
        array_shift($la); // je commence par supprimer la valeur du première index pour obtenir que le tableau de nombre 
        
        // foreach($la as $result){
        //     echo $result."\n";
        // }
            if($la[0] > $la[1]){
                $truce->sa($la);
            }
        else echo "";
    }
    echo "\n";
        
}
nombre($argv);

?>