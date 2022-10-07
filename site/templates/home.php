<?php snippet('header'); ?>

<main>
    <div class="container-projects-list">
        <?php foreach ($site->find('projects')->children()->shuffle() as $project) : ?>
            <article class="container-project-preview">
                <a href="<?= $project->url() ?>">
                    <div class="image-project-preview">
                        <img src="<?= $project->cover()->toFile()->url() ?>">
                    </div>
                    <div class="project-lead">
                        <h2><?= $project->title() ?></h2>
                        <?= $project->lead()->kt() ?>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</main>

<footer>
</footer>

<?php snippet('footer'); ?>