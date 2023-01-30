<?php snippet('header'); ?>

    <main style="opacity: 0;">
        <div class="container-project-impressions">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="container-project">
            <h1><?= $page->title() ?></h1>
            
            <?= $page->lead()->kt() ?>

            <button type="button" class="show-more">
                <img src="/assets/svg/Plus.svg" alt="Plus Icon">
            </button>

            <div class="text">
                <?= $page->text()->kt() ?>
            </div>

            <?php if($page->video() != ''): ?>
            <div class="video">
                <?= $page->video()->kt() ?>
            </div>
            <?php endif; ?>

            <div class="gallery">
                <?php
                    $images = $page->gallery()->toFiles();
                    foreach($images as $image): ?>
                    <div class="image-project-impression"><img id="<?= $image->contentFileName() ?>" src="<?= $image->thumb(['width' => 960, 'format' => 'webp'])->url() ?>"/></div>
                <?php endforeach ?>
            </div>
        </div>
    </main>

    <footer>
        <!--<a href="#">Back</a>-->
        <span></span>
        <a href="/projects">Projects</a>
        <span></span>
        <!--<a href="#">Next</a>-->
    </footer>

    <script>

        let images = [
            <?php foreach($images as $image): ?>
                {
                    id: '<?= $image->contentFileName() ?>',
                    url: '<?= $image->thumb(['width' => 200, 'format' => 'webp'])->url() ?>'
                },
            <?php endforeach ?>
        ];

    </script>
    
<?php snippet('footer'); ?>