<?php
declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineArchive - Katalog Film</title>
<link rel="stylesheet" href="style.css?v=2.0">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Profil</a>
            <a href="katalog.php">Katalog Film</a>
        </nav>
    </header>

    <main class="container">
        <section>
            <h1>Daftar Koleksi Film</h1>
            <div class="movie-grid">
                <?php foreach ($movies as $movie): ?>
                    <article class="movie-card">
                        <img src="<?= e($movie['poster']) ?>" alt="Poster <?= e($movie['title']) ?>">
                        <h2><?= e($movie['title']) ?> (<?= $movie['year'] ?>)</h2>
                        <p class="genre"><?= e($movie['genre']) ?></p>
                        <p class="rating">⭐ <?= number_format($movie['rating'], 1) ?> / 10</p>
                        
                        <!-- Percabangan (if/else) memengaruhi badge status -->
                        <?php if ($movie['status'] === 'Watched'): ?>
                            <span class="badge badge-watched">Sudah Ditonton</span>
                        <?php else: ?>
                            <span class="badge badge-plan">Rencana Nonton</span>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
                </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> CineArchive - Mini Project Pemrograman Web</p>
    </footer>
</body>
</html>