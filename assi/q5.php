<?php
$units = 300; 

$totalBill = 0;

if ($units <= 50) {
    $totalBill = $units * 3.50;
} elseif ($units <= 150) {
    $totalBill = (50 * 3.50) + (($units - 50) * 4.00);
} elseif ($units <= 250) {
    $totalBill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
} else {
    $totalBill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
}

echo "Total Electricity Bill for $units units: Rs. " . number_format($totalBill, 2);
?>
