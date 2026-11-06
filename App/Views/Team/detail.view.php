<?php

/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="football-main container">
    <section class="team-header-card">
        <div class="team-logo-placeholder">LOGO TÍMU</div>
        <div class="team-info">
            <h1>ŠK Slovan Bratislava</h1>
            <p class="team-meta"><strong>Krajina:</strong> Slovensko |
                <strong>Založený:</strong> 1919 |
                <strong>Štadión:</strong> Tehelné pole</p>
            <button class="football-btn football-btn-favorite">★ Pridať k obľúbeným</button>
        </div>
    </section>

    <section class="football-section">
        <h2>Zoznam hráčov</h2>
        <div class="filter-bar">
            <input class="football-form-control" type="text" placeholder="Vyhľadať hráča podľa mena...">
            <select class="football-form-control">
                <option>Všetky pozície</option>
                <option>Brankár</option>
                <option>Obranca</option>
                <option>Stredopoliar</option>
                <option>Útočník</option>
            </select>
            <a class="football-btn football-btn-success" href="<?= $link->url('player.form') ?>">+ Pridať hráča</a>
        </div>

        <div class="table-responsive">
            <table class="data-table">
                <thead>
                <tr>
                    <th>Číslo dresu</th>
                    <th>Meno a priezvisko</th>
                    <th>Pozícia</th>
                    <th>Akcie</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Dominik Takáč</td>
                    <td>Brankár</td>
                    <td>
                        <a class="football-btn football-btn-sm football-btn-edit"
                           href="<?= $link->url('player.index') ?>">Upraviť</a>
                        <a class="football-btn football-btn-sm football-btn-delete"
                           href="<?= $link->url('player.index') ?>">Mazať</a>
                    </td>
                </tr>
                <tr>
                    <td>77</td>
                    <td>Dávid Strelec</td>
                    <td>Útočník</td>
                    <td>
                        <a class="football-btn football-btn-sm football-btn-edit"
                           href="<?= $link->url('player.index') ?>">Upraviť</a>
                        <a class="football-btn football-btn-sm football-btn-delete"
                           href="<?= $link->url('player.index') ?>">Mazať</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>
