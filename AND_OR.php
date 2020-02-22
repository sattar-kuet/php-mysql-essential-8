<?php
$a = 8;
$b =70;
$c = 10;

if($a>$b AND $a>$c){
	echo $a;
}
else if($b>$a AND $b>$c){
	echo $b;
}
else{
	echo $c;
}
//##############

$day = 'Friday';

if($day == 'Friday' OR $day == 'Satarday'){
	echo 'Holiday';
}
else{
	echo 'Working Day';
}

//################

$a = 10;

if($a>10 OR $a==10){ // $a>=10
    echo 'True';
}else{
	echo 'False';
}


?>