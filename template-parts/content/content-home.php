<section id="Section1" class="cbd-front-page-section-1">
    <div class="col-2">
        <div class="w-medium">
            <?php $section1 = get_field('front-page-section-1'); ?>
            <h1 class="cbd-front-page-main-title"><?= $section1['front-page-section-1-main-title']; ?></h1>
            <h2 class="cbd-headline f-xl"><?= $section1['front-page-section-1-headline-1']; ?></h2>
            <h3 class="cbd-headline f-l"><?= $section1['front-page-section-1-headline-2']; ?></h3>
            <p><?= $section1['front-page-section-1-p']; ?></p>
            <div class="col-2">
                <div class="w-medium">
                    <h3 class="cbd-headline"><?= $section1['front-page-section-1-container-1']['front-page-section-1-container-1-title']; ?></h3>
                    <?= $section1['front-page-section-1-container-1']['front-page-section-1-container-1-content']; ?>
                </div>
                <div class="w-medium">
                    <h3 class="cbd-headline"><?= $section1['front-page-section-1-container-2']['front-page-section-1-container-2-title']; ?></h3>
                    <?= $section1['front-page-section-1-container-2']['front-page-section-1-container-2-content']; ?>
                </div>
            </div>
        </div>
        <div class="w-medium">
            <figure class="s1-img-container">
                <img src="<?= $section1['front-page-section-1-img-1']['url']; ?>" alt="<?= $section1['front-page-section-1-img-1']['alt']; ?>" />
            </figure>
            <figure class="s1-img-container">
                <img src="<?= $section1['front-page-section-1-img-2']['url']; ?>" alt="<?= $section1['front-page-section-1-img-2']['alt']; ?>" />
            </figure>
        </div>
        <a class="cbd-btn" role="button" href="#contact">Me Contacter</a>
    </div>
</section>
<section id="Section2" class="cbd-front-page-section-2">
    <?php $section2 = get_field('front-page-section-2'); ?>

    <div class="col-2-2-1">
        <div>
            <h3 class="cbd-headline f-l"><?= $section2['front-page-section-2-text']; ?></h3>
            <div>
            <input type="hidden" id="ShopCountdownEndTime" value="<?= $section2['front-page-section-2-date']; ?>"/>
            <div id="Countdown"></div>
            </div>
        </div>
        <div>
            <figure class="flex-end">
                <img class="cbd-section-2-logo" src="<?= $section2['front-page-section-2-logo']['url']; ?>" alt="<?= $section2['front-page-section-2-logo']['alt']; ?>">
            </figure>
        </div>
    </div>
</section>
<section id="Section3" class="cbd-front-page-section-3">
    <?php $section3 = get_field('front-page-section-3'); ?>
    <div class="col-2">
        <div class="align-center">
            <figure class="s3-img-container"><img src="<?= $section3['front-page-section-3-img']['url']; ?>" alt="<?= $section3['front-page-section-3-img']['alt']; ?>"></figure>
        </div>
        <div class="w-medium">
            <h3 class="cbd-headline f-l"><?=$section3['front-page-section-3-title']; ?></h3>
            <?= $section3['front-page-section-3-text']; ?>
        </div>
    </div>
</section>
<section id="Section4" class="cbd-front-page-section-4">
    <?php $section4 = get_field('front-page-section-4'); ?>
    <div>
        <div class="col-center">
            <h3 class="cbd-headline f-l"><?= $section4['front-page-section-4-title']; ?></h3>
            <?= $section4['front-page-section-4-video']; ?>
        </div>
    </div>
</section>