<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>
<div class="h-full flex flex-col gap-4 items-center justify-center">
    <div class="prose max-w-[100%] text-center">
        <h1>Whoops!</h1>
        <p>We couldn't find the animal with ID <?=$animal_id?> - Would you like to look at all the animals we have?</p>
        <a class="btn btn-accent" href="/animals">View all animals</a>
    </div>
</div>
<?= $this->endSection() ?>