<?php

/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="football-main container">
    <section class="football-hero">
        <div>
            <p class="eyebrow">SEZÓNA 2026</p>
            <h1>Futbalový prehľad</h1>
            <p>Prehľad tímov, hráčov a zápasov na jednom mieste.</p>
            <a class="football-btn football-btn-primary" href="<?= $link->url('team.detail') ?>">
                Zobraziť detail tímu
            </a>
        </div>
        <div class="football-ball" aria-hidden="true">⚽</div>
    </section>

    <section class="football-section">
        <h2>Vybraný tím</h2>
        <div class="team-summary">
            <div class="team-logo-placeholder">LOGO TÍMU</div>
            <div>
                <h3>ŠK Slovan Bratislava</h3>
                <p><strong>Krajina:</strong> Slovensko | <strong>Štadión:</strong> Tehelné pole</p>
                <a class="football-btn football-btn-outline" href="<?= $link->url('team.detail') ?>">
                    Otvoriť detail
                </a>
            </div>
        </div>
    </section>
</main>
