<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>
<div class="h-full flex flex-col gap-4">
    <div class="prose max-w-[100%]">
        <!-- ref: https://britishwildlifecentre.co.uk/planyourvisit/animals/ -->
        <h1>Animals at the British Wildlife Centre</h1>
        <p>These are some of the forty or so species on display at the Centre. You should see most of these when you visit, unless the animals are having a check-up or work being carried out on their enclosures. Just click on the links below to learn more about these species.</p>
    </div>
    <div class="grid grid-cols-4 gap-8 overflow-y-auto h-full p-2 shadow-md rounded-md border border-primary">
        <?php foreach($animals as $animal): ?>
        <div class="card bg-base-100 image-full w-full shadow-xl border border-secondary">
            <figure class="max-h-[300px]">
                <img
                src="/static/img/<?=$animal["image"]?>"
                alt="<?= $animal["name"] ?>"
                class="w-full blur-sm"/>
            </figure>
            <div class="card-body">
                <h2 class="card-title"><?= $animal["name"] ?> - <?=$animal["species"]?></h2>
                <p><?= strlen($animal["description"]) > 250 ? substr($animal["description"], 0, 250) . '...' : $animal["description"] ?></p>
                <div class="card-actions justify-end">
                    <a class="btn btn-primary" href="/animals/<?=$animal['id']?>">View More</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>