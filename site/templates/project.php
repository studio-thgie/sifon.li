<?php snippet('header'); ?>

    <main>
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
                <img src="" alt="Plus Icon">
            </button>

            <div class="text">
                <?= $page->text()->kt() ?>
            </div>

            <?php $images = $page->gallery()->toFiles(); ?>

            <?php foreach($images as $image): ?>
                <div class="image-project-impression"><img src="<?= $image->thumb(['width' => 960, 'format' => 'webp'])->url() ?>"/></div>
            <?php endforeach ?>
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
                '<?= $image->thumb(['width' => 200, 'format' => 'webp'])->url() ?>',
            <?php endforeach ?>
        ],
            columns = document.querySelectorAll('.container-project-impressions > div'),
            max_images = Math.floor(images.length / columns.length); /* images.length / columns.length */

    </script>
    
<?php snippet('footer'); ?>