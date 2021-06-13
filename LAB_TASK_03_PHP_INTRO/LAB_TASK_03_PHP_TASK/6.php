<?php
$student = array("A", "B", "C",); 
$Name="C";
for($i=0;$i<=2;$i++)
{
    if($student[$i]==$Name)
{
    echo "$student[$i]";
}
else{
    echo "<br> Name not found <br>";
}
}
?>