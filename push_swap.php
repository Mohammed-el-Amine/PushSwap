<?php
//j'include mon fichier controller pour executer ici les fonction dont j'ai besoin
include("push_swapController.php");


/** Functions from push_swap_controller.php
 * sa : échange les positions des deux premiers éléments de la (rien ne se produit s’il n’y a pas assez d’éléments).
 
 * sb : échange les positions des deux premiers éléments de lb (rien ne se produit s’il n’y a pas assez d’éléments).
 
 * sc : sa et sb en même temps.
 * pa : prend le premier élément de lb et le place à la première position de la (rien ne se produit si lb est vide).
 
 * pb : prend le premier élément de la et le place à la première position de lb (rien ne se produit si la est vide).
 
 * ra : fait une rotation de la vers le début. (le premier élément devient le dernier)
 
 * rb : fait une rotation de lb vers le début (le premier élément devient le dernier).
 
 * rr : ra et rb en même temps.
 
 * rra : fait une rotation de la vers la fin. (le dernier élément devient le premier).
 
 * rrb : fait une rotation de lb vers la fin. (le dernier élément devient le premier).
 
 * rrr : rra et rrb en même temps.
 
 * afficher les series d'operations. Exemple : CLI= php push_swap 12 58 40 | cat -e => "sa pb sa$"   **/


function truce($la)
{

    $truce = new Swap();
    $lb = [];

    if ( $sa = $truce->sa($la)) {
        print_r($la);
        echo "sa";
        $la = $sa;
        echo " ";
        //var_dump($la);
        $pb= $truce->pb($la,$lb);
        echo "pb";
        $lb = $pb;
        array_shift($la);

        //print_r($la);
        //print_r($lb);

    }//echo "\n pour lb\n";print_r($la); echo " pour la\n";print_r($lb);print_r($la);

}

/**
 * Gestion d'erreur concernant l'appel de la fonction et ses arguments.
 */

if ($argc > 2) {
    array_shift($argv);
    truce($argv);
    echo "\n";
}
else {echo "\n";}
?>