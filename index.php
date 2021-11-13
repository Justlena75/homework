<?php //Упражнение №1
print 'How are you?<br>'; 
print "I'm fine.<br>";
?>


<?php //Упражнение №2
$hamburger=4.95;
$milkshake=1.95;
$coca_cola=0.85;
$VAT=7.5;
$tips=16;
$S=(2*$hamburger+$milkshake+$coca_cola)*(100+$VAT)/100*(100+$tips)/100;
echo $S . '<br>';
?>

<?php //Упражнение №3
$hamburger=4.95;
$milkshake=1.95;
$coca_cola=0.85;
$VAT=7.5;
$tips=16;
$S=2*$hamburger+$milkshake+$coca_cola;
echo $hamburger . ' ' . '2' . '<br>';
echo $milkshake . ' ' . '1' . '<br>';
echo $coca_cola . ' ' . '1' . '<br>';
echo round($S, 2) . '<br>';
echo round ($S*(100+$VAT)/100, 2) .'<br>' ;
echo round($S*(100+$VAT)/100*(100+$tips)/100, 2) . '<br>';
?>

<?php //Упражнение №4
$first_name='Elena';
$last_name='Ustinova';
$full_name=$first_name . ' ' . $last_name;
$n=strlen($full_name);
echo $full_name . ' ' . $n . '<br>';
?>

<?php /*А это
упражнение №5*/
$n=0;
while ($n<5){
    $n++;
    echo $n . ' ';
}
echo '<br>';

$k=2;
for ($l=1; $l<6; $l++) {
    echo $k . ' ';
    $k*=2;
}
echo '<br>'; 
?>

<?php
$tF=-50;
while ($tF<51){
    $tC=($tF-32)*5/9;
    echo $tF . 'F / ' . round($tC, 1) . 'C<br>';
    $tF++;
}

for ($tF=-50; $tF<51; $tF++) {
    $tC=($tF-32)*5/9;
    echo $tF . 'F / ' . round($tC, 1) . 'C<br>';
}   
?>