<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Team $team */
/** @var \App\Models\Player[] $players */
?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1><?= e($team->name) ?></h1>
            <p class="mb-0"><?= e($team->country) ?>, <?= e($team->stadium) ?><?php if ($team->foundedYear) { ?>,
                založený <?= e($team->foundedYear) ?><?php } ?></p>
        </div>
        <div class="d-flex gap-2">
            <a class="btn btn-warning" href="<?= $link->url('team.form', ['id' => $team->id]) ?>">Upraviť tím</a>
            <a class="btn btn-secondary" href="<?= $link->url('team.index') ?>">Späť na tímy</a>
        </div>
    </div>

    <h2>Hráči tímu</h2>
    <?php if (count($players) === 0) { ?>
        <div class="alert alert-info">Tím zatiaľ nemá priradených hráčov.</div>
    <?php } else { ?>
        <table class="table table-striped">
            <thead>
            <tr><th>Meno</th><th>Priezvisko</th><th>Pozícia</th><th>Číslo dresu</th><th>Akcie</th></tr>
            </thead>
            <tbody>
            <?php foreach ($players as $player) { ?>
                <tr>
                    <td><?= e($player->name) ?></td>
                    <td><?= e($player->surname) ?></td>
                    <td><?= e($player->position) ?></td>
                    <td><?= e($player->shirtNumber) ?></td>
                    <td>
                        <a class="btn btn-sm btn-warning"
                           href="<?= $link->url('player.form', ['id' => $player->id]) ?>">Upraviť priradenie</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } ?>
    <a class="btn btn-success" href="<?= $link->url('player.form') ?>">+ Pridať hráča</a>
</div>
