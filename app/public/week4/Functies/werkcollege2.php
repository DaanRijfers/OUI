<h1>Functie 1</h1>
<?php 
$genres = ["horror", "comedy","sci-fi", "romance", "action "];
foreach ($genres as $value) {
    echo "$value <br>";
    
}
?>

<h1>Functie 2</h1>
<?php
sort($genres);
foreach ($genres as $value) {
    echo "$value <br>";
    
}
?>

<h1>Functie 3</h1>
<p>figuur 1</p>
<?php  
for($i=0; $i<1; $i++) {
    for($j=0; $j<10; $j++)
    {
    echo '*';
    }
    echo '<br>';
    }
?>
<p>figuur 2</p>
<?php  
for($i=0; $i<4; $i++) {
    for($j=0; $j<10; $j++)
    {
    echo '*';
    }
    echo '<br>';
    }
?>

<p>figuur 3</p>

<?php
//example to demonstrate star pattern-2
for($i=1; $i<=10; $i++) {
for($j=1; $j<=$i; $j++)
{
echo '*';
}
echo '<br>';
}
?>

<p>figuur 4</p>

<?php
    for($i=10; $i>=1; $i--) {
    for($j=1; $j<=$i; $j++)
    {
    echo '*';
    }
    echo '<br>';
    }
?>