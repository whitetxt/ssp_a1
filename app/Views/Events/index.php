<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>
<div class="flex w-full flex-col border-opacity-50 py-0">
    <div class="divider mt-0 mb-8">Current Events</div>
    <div class="grid grid-cols-4 gap-8">
        <?php foreach($events as $event):
            $state = "Upcoming";
            $date = new DateTime($event["date"]);
            $now = new DateTime();
            $now = new DateTime($now->format("Y-m-d"));
            // if date is today
            if ($date->format("Y-m-d") === $now->format("Y-m-d")) {
                $state = "Today!";
            } else if ($now->diff($date)->days < 7){
                $state = "Soon";
            }
            $text = $state;
            $days = $now->diff($date)->days;
            if ($state === "Soon") {
                $text = "In {$days} day";
                if ($days > 1) {
                    $text .= "s";
                }
            }
            $badge_type = ["Soon" => "badge-warning", "Today!" => "badge-success"];
            $border_type = ["Soon" => "border border-warning", "Today!" => "border border-success", "Upcoming" => ""];
            if (array_search($state, ["Soon", "Today!"]) !== false) { ?>
                <div class="indicator w-full">
                    <span class="indicator-item indicator-center badge <?=$badge_type[$state]?>"> <?=$text?></span>
            <?php } ?>
            <div class="card bg-base-100 w-full shadow-xl <?=$border_type[$state]?>">
                <div class="card-body">
                    <h2 class="card-title"><?= $event["name"] ?></h2>
                    <p><?= $event["description"] ?></p>
                    <p>Happening on: <?= $event["date"] ?></p>
                    <p>Perfect for <?= $event["audience"] ?></p>
                </div>
            </div>
            <?php if (array_search($state, ["Soon", "Today!"]) !== false) { ?>
            </div>
            <?php } ?>
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