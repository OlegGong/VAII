<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Player|null $player */
/** @var \App\Models\Team[] $teams */
$isEdit = $player !== null;
?>

<div class="container mt-4">
    <h1><?= $isEdit ? 'Upraviť hráča' : 'Pridať hráča' ?></h1>
    <form method="post" action="<?= $link->url('player.save') ?>" class="mt-3" style="max-width: 600px;">
        <?php if ($isEdit) { ?>
            <input type="hidden" name="id" value="<?= e($player->id) ?>">
        <?php } ?>
        <div class="mb-3">
            <label class="form-label" for="name">Meno</label>
            <input class="form-control" id="name" name="name" required
                   value="<?= e($player?->name ?? '') ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="surname">Priezvisko</label>
            <input class="form-control" id="surname" name="surname" required
                   value="<?= e($player?->surname ?? '') ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="position">Pozícia</label>
            <input class="form-control" id="position" name="position" required
                   value="<?= e($player?->position ?? '') ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="shirtNumber">Číslo dresu</label>
            <input class="form-control" id="shirtNumber" name="shirtNumber" type="number" min="1" required
                   value="<?= e($player?->shirtNumber ?? '') ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="teamId">Tím</label>
            <select class="form-select" id="teamId" name="teamId">
                <option value="">Bez tímu</option>
                <?php foreach ($teams as $team) { ?>
                    <option value="<?= e($team->id) ?>"
                        <?= (string)($player?->teamId ?? '') === (string)$team->id ? 'selected' : '' ?>>
                        <?= e($team->name) ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Uložiť</button>
        <a class="btn btn-secondary" href="<?= $link->url('player.index') ?>">Späť</a>
    </form>
</div>
