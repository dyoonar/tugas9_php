<?php 
$a=0;
$b=1;
echo "No. 1 : <br>";
for ($i=0; $i<20; $i++)
{
  $c = $a + $b;
  echo " $c";
  $a = $b;
  $b = $c;
}
echo "<hr>";
echo "No. 2 : <br>";
for($i=0;$i<200;$i++){
    $x = 0; 
        for($j=1;$j<=$i;$j++){
            if($i % $j==0){ 
                $x++;
                }
        }
            if($x==2){
            	echo $i.",";
            }
    }
?>