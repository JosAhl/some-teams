<?php
require_once __DIR__ . "/header.php";

include __DIR__ . "/data.php";

?>
<!------------MAIN CONTENT: START------------>
<main>
    <div class="grid-container">
        <?php foreach ($teams as $teamName => $teamDetails): ?>
            <a href="<?= $teamDetails['url']; ?>" class="grid-link">
                <article class="grid-item">
                    <h2><?= $teamName; ?></h2>
                    <img src="<?= $teamDetails['logo']; ?>" alt="<?= $teamName; ?> logo">
                    <p><strong>League:</strong> <?= $teamDetails['league']; ?></p>
                    <p><strong>City:</strong> <?= $teamDetails['city']; ?></p>
                    <p><strong>Group:</strong> <?= $teamDetails['group']; ?></p>
                    <p><strong>UEFA Ranking:</strong> <?= $teamDetails['uefa-coefficient-ranking']; ?></p>
                </article>
            </a>
        <?php endforeach; ?>
    </div>
</main>

<?php
require_once __DIR__ . "/footer.php";
