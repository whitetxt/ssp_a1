<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>
<div class="flex w-full flex-col border-opacity-50 py-0">
    <div class="divider mt-0 mb-8">Current Events</div>
    <div class="grid grid-cols-4 gap-8">
        <?php foreach($events as $event): ?>
        <div class="indicator w-full">
            <span class="indicator-item indicator-center event-<?=$event["state"]?>">
                <?=$event["text"]?>
            </span>
            <div class="card bg-base-100 w-full shadow-xl">
                <div class="card-body">
                    <h2 class="card-title"><?= $event["name"] ?></h2>
                    <p><?= $event["description"] ?></p>
                    <p>Happening on: <?= $event["date"] ?></p>
                    <p>Perfect for <?= $event["audience"] ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="divider">Past Events</div>
    <div class="grid grid-cols-4 gap-8">
        <?php foreach($past_events as $event): ?>
        <div class="card bg-base-100 w-full shadow-xl">
            <div class="card-body">
                <h2 class="card-title"><?= $event["name"] ?></h2>
                <p><?= $event["description"] ?></p>
                <p>Happening on: <?= $event["date"] ?></p>
                <p>Perfect for <?= $event["audience"] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>