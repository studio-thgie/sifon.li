<?php snippet('header'); ?>

<main style="opacity: 0;">
    <div class="container-projects-masonry grid">
        <?php foreach ($site->find('projects')->children()->shuffle() as $project) : ?>
            <?php if ($project->cover()->toFile()) : ?>
                <div class="image-project-preview grid-item">
                    <a href="<?= $project->url() ?>">
                        <?php if ($project->cover()->toFile()->extension() == 'gif') : ?>
                            <img src="<?= $project->cover()->toFile()->url() ?>" loading="lazy">
                        <?php else : ?>
                            <img src="<?= $project->cover()->toFile()->thumb(['width' => 710, 'format' => 'webp'])->url() ?>" loading="lazy">
                        <?php endif; ?>
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</main>

<footer>
</footer>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        imagesLoaded(document.querySelectorAll('.grid-item img'), () => {

            var elem = document.querySelector('.grid');
            var msnry = new Masonry(elem, {
                itemSelector: '.grid-item',
                gutter: 5
            });
        });

    });
</script>

<?php snippet('footer'); ?>