<form method="post">
    <input type="number" name="sum" placeholder="number">
    <input type="submit" value="tinh">
</form>
<?php
$sum;
$i = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["sum"];
}
while ($sum + $i < $name){
    $sum+=$i;
    $i++;
}
echo "<h3>".$sum."</h3>";
