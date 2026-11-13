<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Team|null $team */
$isEdit = $team !== null;
?>

<div class="container mt-4">
    <h1><?= $isEdit ? 'Upraviť tím' : 'Pridať tím' ?></h1>
    <form method="post" action="<?= $link->url('team.save') ?>" class="mt-3" style="max-width: 600px;">
        <?php if ($isEdit) { ?>
            <input type="hidden" name="id" value="<?= e($team->id) ?>">
        <?php } ?>
        <div class="mb-3">
            <label class="form-label" for="name">Názov</label>
            <input class="form-control" id="name" name="name" required value="<?= e($team?->name ?? '') ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="country">Krajina</label>
            <input class="form-control" id="country" name="country" required value="<?= e($team?->country ?? '') ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="foundedYear">Rok založenia</label>
            <input class="form-control" id="foundedYear" name="foundedYear" type="number" min="1800"
                   value="<?= e($team?->foundedYear ?? '') ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="stadium">Štadión</label>
            <input class="form-control" id="stadium" name="stadium" required
                   value="<?= e($team?->stadium ?? '') ?>">
        </div>
        <button class="btn btn-primary" type="submit">Uložiť</button>
        <a class="btn btn-secondary" href="<?= $link->url('team.index') ?>">Späť</a>
    </form>
</div>
