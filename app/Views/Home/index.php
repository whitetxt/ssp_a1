<?= $this->extend("layouts/default") ?>
<?= $this->section("content") ?>
<div class="flex h-full">
    <div id="randomAnimals"
        class="grid grid-rows-10 lg:flex-col justify-evenly min-w-64 h-full flex-wrap overflow-hidden gap-4 max-w-[15vw]">
        <a class="btn btn-secondary" href="/animals">
            See all animals
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
        <?php 
        foreach ($animals as $animal):
        ?>
        <div class="card card-compact bg-base-100 w-full shadow-xl border border-secondary row-span-3">
            <div class="card-body overflow-hidden">
                <h2 class="card-title"><?= $animal["name"] ?> (<?= $animal["species"]?>)</h2>
                <p class="overflow-y-auto"><?= $animal["description"] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div id="rest" class="grow prose mx-auto w-max max-w-[60%] px-4 overflow-y-auto">
        <!-- ref: https://britishwildlifecentre.co.uk/aboutus/our-story/ -->
        <h1>The Story of the Centre</h1>
        <h2>History</h2>
        <p>The British Wildlife Centre was founded in 1997 by David Mills. Before then, on the site of what is now the wildlife centre, for 30 years David was a dairy farmer with the award-winning Venn herd of pedigree Jersey cows which, in its day, was one of the leading Jersey herds in the country. In 1994 David ceased dairy farming and reluctantly sold his beloved herd to realise his second dream – to create his own zoo. He decided to specialise in British wildlife as he felt that there was need to educate the public about native species and the challenges they face living in the wild in Britain today.</p>
        <p>The Centre finally opened for pre-booked tours in 1998, with David doing everything himself; looking after the animals and giving guided tours, with a friend helping out with the admin. The Centre opened fully to the public in 2000 and has been growing slowly but steadily ever since, with over 20 staff now employed.</p>

        <h2>Inspirations</h2>
        <p>David's inspirations for the Centre were his heroes, pioneering conservationists, Sir Peter Scott, Gerald Durrell and John Aspinall, who had started their own wildlife centres. John Aspinall actively encouraged his keepers to form close bonds with the animals and provide a stimulating environment to encourage natural behaviour; a policy we wholeheartedly embrace here at the Centre.</p>

        <h2>Conservation through Education</h2>
        <p>We are sometimes asked why we do not open every day. The reason is that on weekdays in term time we specialise in school visits and other exclusive visits. We can then focus on teaching children to appreciate and respect Britain's own wonderful native wild species, so that they may develop a life-long interest in their protection and survival. Our philosophy can be summed up as ‘Conservation through Education'.</p>
        <p>We are a privately owned organisation and the vast majority of our profits are ploughed back into improving accommodation for animals, breeding programmes, conservation and providing the best experience we can for our visitors. Our aim is to remain a non-commercial, specialist visitor attraction that provides a unique insight into the world of Britain's wonderful wildlife.</p>
    </div>
    <div id="events" class="grid grid-rows-10 justify-evenly min-w-64 h-full flex-wrap overflow-hidden gap-4 max-w-[15vw]">
        <a class="btn btn-secondary" href="/events">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            See all events
        </a>
        <?php foreach ($events as $event): ?>
        <div class="card bg-base-100 w-full shadow-xl border border-secondary row-span-3">
            <div class="card-body">
                <h2 class="card-title"><?= $event["name"] ?></h2>
                <p class="flex flex-row items-center"><?= $event["description"] ?></p>
                <p class="flex flex-row items-center">Perfect for <?= $event["audience"] ?></p>
                <p class="flex flex-row items-center">Date: <?= $event["date"] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>