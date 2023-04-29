<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //php
$txt1="manasa";
$txt2="mamatha";
$txt1=$txt2;
echo"<br>";
echo$txt2;
echo"<br>";
//increment and decrement
// pre increment 
$a=15;
echo(++$a);
echo"<br>";
//post increment
echo($a++);
echo"<br>";
echo($a);
echo"<br>";
//pre decrement
$a=15;
echo(--$a);
echo"<br>";
//post decrement
echo($a--);
echo"<br>";
echo($a);
echo"<br>";
//if statement
$a=10;
$b=15;
$c=20;
if($a<$b && $a<$c)
{
echo("the $a is greater than $b and $c");
}
echo"<br>";
//statements
//if else statement
$a=10;
$b=15;
$c=20;
if($a<$b && $a>$c)
{
echo("the $a is greater than $b and $c");
}
else
{
   echo("the $c is less than $a and $b");
}
echo"<br>";
//if elseif else statement
$a=10;
$b=15;
$c=20;
if($a<$b && $a>$c)
{
echo("the $a is greater than $b and $c");
}
elseif($a<$c && $b>$c)
{
   echo("the $c is less than $a and $b");
}
else{
    echo("$b is less than $c and greater than $a");
}
echo"<br>";
//loops
//while loop
$x = 0;

while($x < 15) {
  echo "The number is: $x <br>";
  $x++;
}
//

    ?>

</body>
</html>