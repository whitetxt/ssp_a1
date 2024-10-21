<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>
<div class="grid grid-cols-4 gap-8">
    <?php foreach($animals as $animal): ?>
    <div class="card bg-base-100 w-full shadow-xl">
        <div class="card-body">
            <h2 class="card-title"><?= esc($animal["name"]) ?></h2>
            <p><?= esc($animal["description"]) ?></p>
            <p>Species: <?= esc($animal["species"]) ?></p>
            <p>Age: <?= esc($animal["age"]) ?></p>
            <p>Arrival Date: <?= esc($animal["arrival_date"]) ?></p>
            <p>Rescued: <?= $animal["is_rescued"] ? "Yes" : "No" ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>