<?php
require_once "class_lingkaran.php";
echo "NILAI PHI " . Lingkaran::PHI;
$ling1 = new Lingkaran(10);
$ling2 = new Lingkaran(4);
echo "<br>Luas Lingkaran I " . $ling1->getLuas();
echo "<br>Luas Lingkaran II " . $ling2->getLuas();
echo "<br>Keliling Lingkaran I " . $ling1->getKeliling();
echo "<br>Keliling Lingkaran II " . $lingk2->getKeliling();
