<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Player[] $players */
/** @var \App\Models\Team[] $teams */
$teamsById = [];
foreach ($teams as $team) {
    $teamsById[$team->id] = $team;
}
?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Hráči</h1>
        <a class="btn btn-success" href="<?= $link->url('player.form') ?>">+ Pridať hráča</a>
    </div>

    <?php if (count($players) === 0) { ?>
        <div class="alert alert-info">Databáza zatiaľ neobsahuje žiadnych hráčov.</div>
    <?php } else { ?>
        <table class="table table-striped align-middle">
            <thead>
            <tr>
                <th>Meno</th>
                <th>Priezvisko</th>
                <th>Pozícia</th>
                <th>Číslo dresu</th>
                <th>Tím</th>
                <th>Akcie</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($players as $player) { ?>
                <tr>
                    <td><?= e($player->name) ?></td>
                    <td><?= e($player->surname) ?></td>
                    <td><?= e($player->position) ?></td>
                    <td><?= e($player->shirtNumber) ?></td>
                    <td><?= e(isset($teamsById[$player->teamId]) ? $teamsById[$player->teamId]->name : 'Bez tímu') ?></td>
                    <td class="d-flex gap-2">
                        <a class="btn btn-sm btn-warning"
                           href="<?= $link->url('player.form', ['id' => $player->id]) ?>">Upraviť</a>
                        <form method="post" action="<?= $link->url('player.delete') ?>"
                              onsubmit="return confirm('Naozaj chcete vymazať tohto hráča?');">
                            <input type="hidden" name="id" value="<?= e($player->id) ?>">
                            <button class="btn btn-sm btn-danger" type="submit">Vymazať</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</div>
