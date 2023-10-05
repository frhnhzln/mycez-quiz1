<?php
function findPythagoreanTriplet($targetSum) {
    for ($a = 1; $a < $targetSum / 3; $a++) {
        for ($b = $a + 1; $b < $targetSum / 2; $b++) {
            $c = $targetSum - $a - $b;
            if ($a * $a + $b * $b == $c * $c) {
                return [$a, $b, $c];
            }
        }
    }
    return null;
}

$targetSum = 1000;
$triplet = findPythagoreanTriplet($targetSum);

if ($triplet) {
    list($a, $b, $c) = $triplet;
    $product = $a * $b * $c;
    echo "The Pythagorean triplet is ($a, $b, $c)\n";
    echo "The product abc is $product\n";
} else {
    echo "No Pythagorean triplet found for the given target sum.\n";
}
?>
