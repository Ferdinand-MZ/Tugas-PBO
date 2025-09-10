<?php

echo "<h3>Perulangan 1</h3>";

$i = 0;
while($i < 101)
{
    echo $i;
    echo "<br/>";
    $i = $i + 10;
}
?>

<?php

echo "<h3>Perulangan 2</h3>";

$a = 1;
while($a < 11)
{
    $b = 1;
    while($b < 11)
    {
        echo $b." ";
        $b++;
    }
    $a++;
    echo "<br/>";
}
?>

<?php

echo "<h3>Perulangan 3 </h3>";

$a = 1;
while($a < 11)
{
    if ($a == 7) {
        $a++;
        continue;
    }
    echo $a;
    $a++;
}
?>