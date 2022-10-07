<?php snippet('header'); ?>

    <main>
        <div class="container-project">
            <h1><?= $page->title() ?></h1>
            
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