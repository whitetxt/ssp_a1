<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>
<div class="grid grid-cols-4 gap-8">
    <?php foreach($events as $event): ?>
    <div class="card bg-base-100 w-full shadow-xl">
        <div class="card-body">
            <h2 class="card-title"><?= esc($event["name"]) ?></h2>
            <p><?= esc($event["description"]) ?></p>
            <p>Happening on: <?= esc($event["date"]) ?></p>
            <p>Perfect for <?= esc($event["audience"]) ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>