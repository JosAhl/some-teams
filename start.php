<?php
require_once __DIR__ . "/header.php";

include __DIR__ . "/data.php";

?>

<main>
    <div class="grid-container">
        <?php foreach ($teams as $teamName => $teamDetails): ?>
            <article class="grid-item">
                <h2><a href="<?= $teamDetails['url']; ?>"><?= $teamName; ?></a></h2>
                <img src="<?= $teamDetails['logo']; ?>" alt="<?= $teamName; ?> logo">
                <p><strong>League:</strong> <?= $teamDetails['league']; ?></p>
                <p><strong>UEFA Coefficient Ranking:</strong> <?= $teamDetails['uefa-coefficient-ranking']; ?></p>
                <p><strong>City:</strong> <?= $teamDetails['city']; ?></p>
                <p><strong>Group:</strong> <?= $teamDetails['group']; ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</main>

<?php
require_once __DIR__ . "/footer.php";
