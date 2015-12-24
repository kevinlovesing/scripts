<?php

get_number(56114000,56116999);

function is_spec_number($number)
{
        $str = "$number" ;
        $a = substr($str,-1,1);
        $b = substr($str,-2,1);
        $c = substr($str,-3,1);
        if(strcmp($a,$b)==0 && strcmp($b,$c)==0){
		return true;
        }
	return false ;
}

function get_number($start, $end)
{
	for(;$start <= $end; $start++){
		if (is_spec_number($start)){
			echo $start."\n";
		}
    	}
}

?>
