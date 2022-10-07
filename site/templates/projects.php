<?php snippet('header'); ?>

<main>
    <div class="container-projects-masonry grid">
        <?php foreach ($site->find('projects')->children()->shuffle() as $project) : ?>
            <article class="container-project-preview">
                <a href="<?= $project->url() ?>">
                    <div class="image-project-preview">
                        <img src="<?= $project->cover()->toFile()->url() ?>">
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</main>

<footer>
</footer>

<?= js([
    'assets/minimasonry.min.js'
]) ?>

<script>

    document.addEventListener('DOMContentLoaded', () => {

        var masonry = new MiniMasonry({
            container: '.container-projects-masonry',
            surroundingGutter: false
        }); 

        console.log('hello')
        
    }); 

    

</script>
    
<?php snippet('footer'); ?>