<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>
<div class="flex w-full flex-col border-opacity-50 py-0">
    <div class="flex gap-4 items-center">
        <span>Filters: </span>
        <select class="select select-bordered w-full max-w-xs" onchange="applyFilters()" id="audienceSelect">
            <option disabled selected value="all">Audience</option>
            <option value="all">All</option>
            <?php foreach ($event_types as $type):?>
            <option value="<?=$type?>"><?=ucfirst($type)?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" class="input input-bordered w-full max-w-xs" onkeyup="applyFilters()" id="descInput"
            placeholder="Search by description" />
        <button class="btn btn-outline btn-primary" onclick="clearFilters()">Clear Filters</button>
    </div>
    <div class="divider mt-0 mb-8">Current Events</div>
    <div class="grid grid-cols-4 gap-8">
        <?php foreach($events as $event): ?>
        <div class="indicator w-full" data-audience="<?=$event["audience"]?>" data-desc="<?=$event["description"] ?>">
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
        <div class="card bg-base-100 w-full shadow-xl" data-audience="<?=$event["audience"]?>"
            data-desc="<?=$event["description"] ?>">
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
<script>
const events = document.querySelectorAll(".grid > div");
const audienceSelect = document.getElementById("audienceSelect");

function audienceChange(eventState) {
    const audience = audienceSelect.value;
    for (var i = 0; i < events.length; i++) {
        if (eventState[i] === false) {
            continue;
        }
        if (events[i].dataset.audience !== audience && audience !== "all") {
            eventState[i] = false;
        }
    }
    if (audience === "all") {
        audienceSelect.classList.remove("select-secondary");
    } else {
        audienceSelect.classList.add("select-secondary");
    }
    return eventState;
}

const descriptionInput = document.getElementById("descInput");

function descriptionSearch(eventState) {
    const desc = descriptionInput.value;
    for (var i = 0; i < events.length; i++) {
        if (eventState[i] === false) {
            continue;
        }
        if ((!events[i].dataset.desc.toLowerCase().includes(desc.toLowerCase())) && desc !== "") {
            eventState[i] = false;
        }
    }
    if (desc === "") {
        descriptionInput.classList.remove("input-secondary");
    } else {
        descriptionInput.classList.add("input-secondary");
    }
    return eventState;
}

function clearFilters() {
    audienceSelect.value = "all";
    audienceSelect.classList.remove("select-secondary");
    descriptionInput.value = "";
    descriptionInput.classList.remove("input-secondary");
    events.forEach((event) => {
        event.classList.remove("hidden");
    });
}

function applyFilters() {
    var eventState = Array.from(Array(events.length).keys(), () => true);
    eventState = audienceChange(eventState);
    eventState = descriptionSearch(eventState);
    for (var i = 0; i < events.length; i++) {
        if (eventState[i] === true) {
            events[i].classList.remove("hidden");
        } else {
            events[i].classList.add("hidden");
        }
    }
}
</script>
<?= $this->endSection() ?>