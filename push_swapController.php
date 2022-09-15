<?php

class Swap
{

    public function sa($la)
    {
        if (sizeof($la) > 1) {
            $first = $la[0];
            $seconde = $la[1];
            $la[0] = $seconde;
            $la[1] = $first;
            return $la;
        }
        else
            echo "";

    }
    public function sb($lb)
    {
        if (sizeof($lb) > 1) {
            $first = $lb[0];
            $seconde = $lb[1];
            $lb[0] = $seconde;
            $lb[1] = $first;
            echo "sb";
            return $lb;
        }
        else
            echo "";
    }
    public function sc($la, $lb)
    {

        if (sizeof($la) > 1 && sizeof($lb) > 1) {
            $first = $la[0];
            $seconde = $la[1];
            $first_1 = $lb[0];
            $seconde_1 = $lb[1];
            $la[0] = $seconde;
            $la[1] = $first;
            $lb[0] = $seconde_1;
            $lb[1] = $first_1;
            echo "sc";
        }
        else
            echo "";
    }
    public function pa($la, $lb)
    {
        if (sizeof($lb) > 0) {
            array_unshift($la, $lb[0]);
            return $la;
        }
        else
            echo "";

    }
    public function pb($la, $lb)
    {

        if (sizeof($la) > 2) {
            array_unshift($lb, $la[0]);
            return $lb;
        }
        else
            echo "";
    }
    public function ra($la)
    {

        if (sizeof($la) >= 2) {
            array_push($la, $la[0]);
            unset($la[0]);
            echo "ra";
            return $la;
        }
        else
            echo "";

    }
    public function rb($lb)
    {
        if (sizeof($lb) >= 2) {
            array_push($lb, $lb[0]);
            unset($lb[0]);
            echo "rb";
            return $lb;
        }
        else
            echo "";

    }
    public function rr($la, $lb)
    {
        if (sizeof($la) >= 2 && sizeof($lb) >= 2) {
            array_push($lb, $lb[0]);
            array_push($la, $la[0]);
            unset($lb[0]);
            unset($la[0]);
            echo "rr";
        }
        else
            echo "";

    }

    public function rra($la)
    {
        if (sizeof($la) >= 2) {
            array_unshift($la, array_pop($la));
            echo "rra";
        }
        else
            echo "";

    }
    public function rrb($lb)
    {
        if (sizeof($lb) >= 2) {

            //$lbst = array_pop($la); // recupère la derniere valeur du tableau
            array_unshift($lb, array_pop($lb));
            echo "rrb";
        }
        else
            echo "";
    }
    public function rrr($la, $lb)
    {
        if (sizeof($la) >= 2 && sizeof($lb) >= 2) {
            array_unshift($la, array_pop($la));
            array_unshift($lb, array_pop($lb));
            echo "rrr";
        }
        else
            echo "";
    }

}
?>