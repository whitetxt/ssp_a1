<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>
<div class="h-full flex flex-col gap-4 max-w-[60%] mx-auto">
    <div class="prose max-w-[100%] text-center">
        <a href="/animals" class="btn btn-outline btn-primary mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            Back
        </a>
        <h1><?=$animal["name"]?> - <i><?=$animal["species"]?></i></h1>
    </div>
    <div class="prose max-w-[100%]">
        <img src="/static/img/<?=$animal['image']?>" alt="" class="float-right ml-4 max-w-64">
        <p><?=$animal["description"]?></p>
    </div>
    <div>
        <img src="/static/img/<?=$animal['image2']?>" alt="" class="float-left mr-4 max-w-64">
        <p><b>Origin - </b><?=$animal["origin"]?></p>
        <p><b>Size - </b><?=$animal["size"]?></p>
        <p><b>Habitat - </b><?=$animal["habitat"]?></p>
        <p><b>Young - </b><?=$animal["young"]?></p>
        <p><b>Diet - </b><?=$animal["diet"]?></p>
        <p><b>Population - </b><?=$animal["population"]?></p>
        <p><b>Looks - </b><?=$animal["looks"]?></p>
    </div>
</div>
<?= $this->endSection() ?>