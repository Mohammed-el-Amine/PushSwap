<?php
//j'include mon fichier controller pour executer ici les fonction dont j'ai besoin
include("push_swapController.php");


/** Functions from push_swap_controller.php
 * sa : échange les positions des deux premiers éléments de $la (rien ne se produit s’il n’y a pas assez d’éléments).
 
 * sb : échange les positions des deux premiers éléments de $lb (rien ne se produit s’il n’y a pas assez d’éléments).
 
 * sc : sa et sb en même temps.
 
 * pa : prend le premier élément de $lb et le place à la première position de $la (rien ne se produit si lb est vide).
 
 * pb : prend le premier élément de $la et le place à la première position de $lb (rien ne se produit si la est vide).
 
 * ra : fait une rotation de $la vers le début. (le premier élément devient le dernier)
 
 * rb : fait une rotation de lb vers le début (le premier élément devient le dernier).
 
 * rr : ra et rb en même temps.
 
 * rra : fait une rotation de $la vers la fin. (le dernier élément devient le premier).
 
 * rrb : fait une rotation de $lb vers la fin. (le dernier élément devient le premier).
 
 * rrr : rra et rrb en même temps.
 
 * afficher les series d'operations.
 * Exemple : CLI =  php push_swap 12 58 40 | cat -e => "sa pb sa$"   **/


// function truce($la)
// {

//     $truce = new Swap();
//     $lb = [];

//     if ($la[0] > $la[1]) {
//         //print_r($la);
//         $la = $truce->sa($la);
//         echo "sa ";
//         $pb = $truce->pb($la, $lb);
//         $lb = $pb;
//         array_shift($la);
//         echo "pb ";
//     }
//     else {
//     }
//     // print_r($la); //resultat de la
//     // print_r($lb); //resultat de lb
//     if ($la[0] > $la[1]) {
//         $sa = $truce->sa($la);
//         $la = $sa;
//         echo "sa ";
//         $pa = $truce->pa($la, $lb);
//         $la = $pa;
//         array_shift($lb);
//         echo "pa ";
//     }
//     else {
//     }
//     print_r($la);
//     print_r($lb);

// }

/**
 * Gestion d'erreur concernant l'appel de la fonction truce($la).
 */
// if ($argc > 2) {
//     array_shift($argv);
//     truce($argv);
//     echo "\n";
// }
// else {
//     echo "\n";
// }


// function tri($la)
// {
//     $tri = new Swap();
//     $lb = [];
//     print_r($la);
//     print_r($lb);
//     foreach ($la as $value) {
        
//         if ($value[0]> $value[1]) {
//             $la = $tri->sa($la);
//             echo "sa";
//             $lb = $tri->pb($la, $lb);
//             array_shift($la);
//             echo"pb";
//             $la= $tri->sa($la);
//             $la = $tri->pa($la,$lb);
//             array_shift($lb);
//         }

//     }
//     print_r($la);
//     print_r($lb);


// }

// if ($argc < 2) {
//     throw new Exception ("Merci de renseigner une valeur en paramètre");
// }else{
//     array_shift($argv);
//     tri($argv);
//     echo "\n";
// }

function algo($la){
    $lb = [];

    $croissant = new Swap;
    $count = count($la); // me permet de récuperer le nombre d'argument au total
    if($count === 1){echo "\n";return;} // s'il ne s'agit que d'un chiffre/nombre on ne fais rien
    elseif($count === 2 && $la[0]> $la[1]){$la = $croissant->sa($la);echo"sa\n";return;}// si seulement deux valeur ont ete entrer on verifie le quel est le plus grand et effectue le changement si necessaire
    elseif($count >= 3){
        $true = true;
        while($true){
            if(!empty($la)){
                for($i=0;$i<=count($la);$i++){
                    if(isset($la[1])){
                        if($la[0] > $la[1]){
                            // print_r($la);
                            $la = $croissant->sa($la);
                            echo "sa ";
                            $lb = $croissant->pb($la,$lb);echo "pb ";
                            // print_r($la);print_r($lb);
                            array_shift($la);
                            
                        }else $lb = $croissant->pb($la,$lb); echo "pb ";echo"\n";$true = false;
                    }
                }
            }   
        }print_r($la);print_r($lb);
    }
    else echo "\n"; // si rien n'est a faire on renvoie juste un retour a la ligne
}

    if ($argc < 2) {throw new Exception ("Merci de renseigner au minimum une valeur en paramètre");} //si aucune valeur n'est renseigner un message d'erreur est renvoyer
    else{array_shift($argv); algo($argv);} //arrayshift() => je supprime la premiere valeur qui est passer en argument (celle-ci se trouve etre le nom de mon fichier); algo() => execute mon fichier en utilisant les arguments
?>