<?php

class Swap
{

    public function sa($la)
    {
        // var_dump($la);
        if (sizeof($la) > 1) {
            $first = $la[0];
            $seconde = $la[1];
            $la[0] = $seconde;
            $la[1] = $first;
            // var_dump($la);
            echo"sa";
        }
        else {            
            echo "";
        }

    }
    public function sb($lb)
    {
        var_dump($lb);
        if (sizeof($lb) > 0) {
            $first = $lb[0];
            $seconde = $lb[1];
            $lb[0] = $seconde;
            $lb[1] = $first;
            var_dump($lb);
            echo"sb";
        }
        else {
            echo "";
        }
    }
    public function sc($la, $lb)
    {
        //var_dump($lb);
        //var_dump($la);
        if (sizeof($la) > 1 && sizeof($lb) > 0) {
            $first = $la[0];
            $seconde = $la[1];
            $first_1 = $lb[0];
            $seconde_1 = $lb[1];
            $la[0] = $seconde;
            $la[1] = $first;
            $lb[0] = $seconde_1;
            $lb[1] = $first_1;
            //var_dump($lb);
            //var_dump($la);
            echo"sc";
        }
        else {
            echo "";
        }
    }
    public function pa($la,$lb)
    {
        var_dump($la);
        var_dump($lb);
        if (sizeof($la) > 1 && sizeof($lb) > 0) {
            array_unshift($la,$lb[0]);
            var_dump($la);
            var_dump($lb);
            echo"pa";
        }
        
        else {
            echo "";
        }
    }
    public function pb($la,$lb)
    {
        //var_dump($lb);
        //var_dump($la);

        if (sizeof($la) > 2) {
            array_unshift($lb,$la[0]);
            //var_dump($lb);
            //var_dump($la);
            echo"pb";
        }
        
        else {
            echo "";
        }
    }
    public function ra($la)
    {
        var_dump($la);

        if (sizeof($la) > 1) {
            array_push($la,$la[0]);
            unset($la[0]);
            //var_dump($la);
            echo "ra";
        }
        
        else {
            echo "";
        }
    }
    public function rb($lb)
    {
        //var_dump($lb);

        if (sizeof($lb) > 0) {
            array_push($lb,$lb[0]);
            unset($lb[0]);
            //var_dump($lb);
            echo "ra";
        }
        
        else {
            echo "";
        }
    }
    public function rr($la,$lb)
    {
        var_dump($lb);
        var_dump($la);
        if (sizeof($la) > 1 && sizeof($lb) > 0) {
            array_push($lb,$lb[0]);
            array_push($la,$la[0]);
            unset($lb[0]);
            unset($la[0]);
            var_dump($lb);
            var_dump($la);
            echo "rr";
        }
        else {
            echo "";
        }
    }

    public function rra($la)
    {
        // var_dump($la);

        if (sizeof($la) > 1) {
            
            //$last = array_pop($la); // recupère la derniere valeur du tableau
            array_unshift($la,array_pop($la));
            echo "rra";
            // var_dump($la);
    }
        else {
            echo "";
        }
    }
    public function rrb($lb)
    {
        var_dump($lb);

        if (sizeof($lb) > 0) {
            
            //$lbst = array_pop($la); // recupère la derniere valeur du tableau
            array_unshift($lb,array_pop($lb));
            echo "rrb";
            var_dump($lb);
    }
        else {
            echo "";
        }
    }
    public function rrr()
    {
        echo "je suis la fonction rra et rrb en même temps \n";
    }

}
?>