<?php

include "splAutoloader.php";

$transport = new Car(350, 3000000, 450, "BMW", 2001);
echo $transport->movement();
echo "------------------------<br>";
$transport1 = new Bycycle(100, 350000, 20, "Барабанные", "Есть");
echo $transport1->movement();