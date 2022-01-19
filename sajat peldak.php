
// if...else, elseif

<?php  

if(10>4)
{
    echo"Ez egy igaz allitas";
}elseif(55==55)
{
    echo "Ez is egy igaz allitas";
}else
{
    echo "Egyik allitas sem volt igaz";
}

?>

//switch...case

<?php

switch ( $szam ) {
	case 5  :
		echo "A szam erterke 5" ;	
		break;
	case 4 ;
		echo "A szam erteke 4";
		break;
	default:
		echo "Nem tudom melyik a szam";
    break;
	}


?>

//while

<?php 

$a=5;
$sum=0;

while( $a < 50)
{
    $sum=$sum+$a;
    $a=$a+5;
}

echo "A szamok osszege 5-tol 50-ig: " . $sum;

?>

//Do...while

<?php 

$a=5;
$sum=0;

do
{
    $sum=$sum+$a;
    $a=$a+5;

}while( $a < 50);

echo "A szamok osszege 5-tol 50-ig: " . $sum;

?>

//for
<?php

$tanulok=['Pista', 'Piroska', 'Peti', 'Panni'];
for($i=0; $i<count($tanulok); $i++)
{
    echo "A " . $i+1 ." tanulo neve: ". $tanulok[$i];
}

?>

//foreach

<?php
$tanulok=['Pista', 'Piroska', 'Peti', 'Panni'];
foreach ($tanulok as $tanulo) {
	echo $tanulo . " ";
}
foreach ($tanulok as $key => $tanulo) {
	echo $key . "->" . $tanulo . " ";
}
?>

// fuggvenyek 

<?php 

function kivon($a, $b){

    $sum=$a-$b;
    return $sum;
}

$eredmeny= kivon(50,10);


?>
<?php
function osszeadas($a, $b, $kiiratas = false) {
    $sum = $a + $b;
    if ($kiiratas) {
        echo "Az eredmeny: " . $sum;
    }
    return $sum;
}
$sum1 = osszeadas (1, 2, true);
?>


