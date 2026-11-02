<?php
declare(strict_types=1);

// Fungsi buatan sendiri 1: Sanitasi Output XSS
function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// Fungsi buatan sendiri 2: Hitung Rata-rata Rating
function getAverageRating(array $movies): float {
    if (empty($movies)) {
        return 0.0;
    }
    // Fungsi array bawaan: array_column, array_sum, count
    $ratings = array_column($movies, 'rating');
    return array_sum($ratings) / count($ratings);
}