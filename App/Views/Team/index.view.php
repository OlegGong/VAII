<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Team[] $teams */
?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Tímy</h1>
        <a class="btn btn-success" href="<?= $link->url('team.form') ?>">+ Pridať tím</a>
    </div>

    <?php if (count($teams) === 0) { ?>
        <div class="alert alert-info">Databáza zatiaľ neobsahuje žiadne tímy.</div>
    <?php } else { ?>
        <table class="table table-striped align-middle">
            <thead>
            <tr>
                <th>Názov</th>
                <th>Krajina</th>
                <th>Štadión</th>
                <th>Akcie</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($teams as $team) { ?>
                <tr>
                    <td><?= e($team->name) ?></td>
                    <td><?= e($team->country) ?></td>
                    <td><?= e($team->stadium) ?></td>
                    <td class="d-flex gap-2">
                        <a class="btn btn-sm btn-primary"
                           href="<?= $link->url('team.detail', ['id' => $team->id]) ?>">Hráči</a>
                        <a class="btn btn-sm btn-warning"
                           href="<?= $link->url('team.form', ['id' => $team->id]) ?>">Upraviť</a>
                        <form method="post" action="<?= $link->url('team.delete') ?>"
                              onsubmit="return confirm('Naozaj chcete vymazať tento tím?');">
                            <input type="hidden" name="id" value="<?= e($team->id) ?>">
                            <button class="btn btn-sm btn-danger" type="submit">Vymazať</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</div>
