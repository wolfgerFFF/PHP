<?php

function power($val, $pow)
	{
		if ($pow == 1){
			return $val;
		}
		if ($pow != 1){
			return $val * power($val, $pow-1);
		}	
	}
	echo power(4, 4);
