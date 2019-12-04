<?php

$result=$_GET["data"];
$count=0;
// var_dump($result);
$kek=['a bitter pill','blew it','black economy','bombed','went like a bomb','blue collar','bottom line','bottlenecks','back to the drawing board','blow-by-blow'];

for($i=0;$i<count($result)  ;$i++){   
    if(strlen($result[$i])!=0){
        echo ("вы выбрали "."<font color=red>". $result[$i] ."</font>"." правильный ответ "."<font color=blue>".$kek[$i]."</font>"."<br>");
    }
    if($result[$i]==$kek[$i]){
        $count+=1;
    }
}
echo($count);

