<?php
// $Kya="keyvan";
// $mm="abdollahi";
// $ege=17;
// //echo//
// // 
// echo $Kya,$mm ;
// echo"<br>";
// echo $ege ;
// echo "<br>";
$people = array ('keyvan'=>array ('keyvan.abdollahi','17', 'gamer'),
"yousef"=>array ("youef ghaidel","20","play soccer"),
"milad" =>array ("milad vahdai","30","football"),);
echo $people['keyvan'][0] ; 
echo "<br>" ;
echo $people['keyvan'][1] ;
echo "<br>" ;
echo $people['keyvan'][2] ;
echo "<br>" ;
//youef
echo $people["yousef"][0] ;
echo "<br>" ;
echo $people["yousef"][1] ;
echo "<br>" ;
echo $people["yousef"][2] ;
echo "<br>";
//milad
echo $people["milad"][0] ;
echo "<br>";
echo $people["milad"][1] ;
echo "<br>";
echo $people["milad"][2] ;
echo "<br>";
//if and else
$x=15;
$y=20;
if ($x>=11){
    echo "keyvan";

}else{
    echo "abdollahi";
}
$number = array (10,15,12,7,5,16,7,17,14,2);
for ($i=0;$i<10;$i++){
    if ($number[$i]>=10){
        echo "keyvan ";
    }else{
        echo "abdollahi ";
   }
}
?>