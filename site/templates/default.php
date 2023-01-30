<?php snippet('header'); ?>

    <main style="opacity: 0;">
        <div class="container-project">
            <h1><?= $page->title() ?></h1>

            <?php if($page->cover()->toFile()): ?>
            <div class="image-project-preview">
                
                <?php if ($page->cover()->toFile()->extension() == 'gif') : ?>
                    <img src="<?= $page->cover()->toFile()->url() ?>">
                <?php else : ?>
                    <img src="<?= $page->cover()->toFile()->thumb(['width' => 1280, 'format' => 'webp'])->url() ?>">
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <?= $page->lead()->kt() ?>

            <?= $page->text()->kt() ?>
        </div>
    </main>

    <footer>
        <!--<a href="#">Back</a>-->
        <span></span>
        <a href="/projects">Projects</a>
        <span></span>
        <!--<a href="#">Next</a>-->
    </footer>
    
<?php snippet('footer'); ?>