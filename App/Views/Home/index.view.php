<?php

/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="football-main container">
    <section class="football-hero">
        <div>
            <p class="eyebrow">SEZÓNA 2026</p>
            <h1>Futbalový prehľad</h1>
            <p>Prehľad tímov, hráčov a zápasov na jednom mieste.</p>
            <a class="football-btn football-btn-primary" href="<?= $link->url('team.index') ?>">
                Zobraziť tímy
            </a>
        </div>
        <div class="football-ball" aria-hidden="true">⚽</div>
    </section>

</main>
