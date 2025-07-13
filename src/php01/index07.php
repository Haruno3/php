<?php
function triangle($score1, $score2) {
    return $score1 * $score2 / 2;
}
function square($score1, $score2) {
    return $score1 * $score2;
}
function trapezoid($score1, $score2, $score3) {
    return ($score1 + $score3) * $score2 / 2;
}

echo triangle(7, 8) . "\n";
echo square(5,6) . "\n";
echo trapezoid(5,6,3);