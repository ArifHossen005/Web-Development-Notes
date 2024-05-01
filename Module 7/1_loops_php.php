<?php 

echo "\n";
echo"Odd\n";

for ($i = 1; $i <=10; $i+=2)
{
echo"$i";
echo PHP_EOL;
}

echo "\n";
echo"Even\n";

for ($i = 0; $i <=10; $i+=2)
{
echo"$i";
echo PHP_EOL;
}

echo "\n";
echo "Nested loop";
for ($i = 1; $i <10; $i++)
{
echo PHP_EOL;
for ($j = 0; $j<$i; $j++)
{
    echo "*";
}
}


echo "\n";
echo"While loop";
echo "\n";


$i=0;
while ($i < 10)
{
    $i++;
    echo$i.PHP_EOL;
}


echo "\n";
echo"Do While loop";
echo "\n";

$i=0;
do{
$i++;
echo$i.PHP_EOL;
}while($i<10);


echo "\n";
echo"go to loop";
echo "\n";

$i= 0;  
a:$i++;
echo $i.PHP_EOL;
if( $i< 10) goto a;