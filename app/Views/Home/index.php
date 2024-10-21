<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>
<div class="flex h-full">
    <div id="randomAnimals" class="flex flex-col justify-evenly min-w-64 h-full flex-wrap overflow-hidden gap-4">
        <button class="btn btn-primary">
            See all animals
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </button>
        <?php 
        foreach ($animals as $animal):
        ?>
        <div class="card bg-base-100 w-full shadow-xl">
            <div class="card-body">
                <h2 class="card-title"><?= esc($animal["name"]) ?></h2>
                <p><?= esc($animal["description"]) ?></p>
                <p>Species: <?= esc($animal["species"]) ?></p>
                <p>Age: <?= esc($animal["age"]) ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div id="rest" class="grow"></div>
    <div id="events"></div>
</div>
<?= $this->endSection() ?>