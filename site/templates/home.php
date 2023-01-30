<?php snippet('header'); ?>

<main style="opacity: 0;">
    <div class="container-projects-list">
        <?php foreach ($site->find('projects')->children()->shuffle() as $project) : ?>
            <article class="container-project-preview">
                <a href="<?= $project->url() ?>">
                    <?php if($project->cover()->toFile()): ?>
                    <div class="image-project-preview">
                        
                        <?php if ($project->cover()->toFile()->extension() == 'gif') : ?>
                            <img src="<?= $project->cover()->toFile()->url() ?>" loading="lazy">
                        <?php else : ?>
                            <img src="<?= $project->cover()->toFile()->thumb(['width' => 1280, 'format' => 'webp'])->url() ?>" loading="lazy">
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
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