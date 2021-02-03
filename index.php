<?php

require "functions.php";

function isEmpty ($grid, $x, $y){
	return $grid[$x][$y]==null;
}
function hasAnyEmptyCell($grid){
	for ($i=0;$i<3;$i++) {
		for ($j=0;$j<3;$j++) {

			if ($grid[$i][$j]==null) {
				return true;
			};

		}
	}
	return false;
}
function showCharacter($numCase){
	switch ($numCase) {
		case 1:
			$ShowCase = "x";
			break;
		
		case 2:
			$ShowCase = "o";
			break;
		
		default:
			$ShowCase = " ";
			break;
	}
	return $ShowCase;
}

function changePlayer($numActuel){
	if($numActuel===1){
		return 2;
	}else{
		return 1;
	}
}
// Un tableau de 3x3 par defaut avec des valeurs de cellules a null.
for ($i=0;$i<3;$i++) {
	for ($j=0;$j<3;$j++) {

		$game[$i][$j]=null;

	}
}



play($game);


/*
function showCharacter($cell): string
{
    //return string.
}
*/
