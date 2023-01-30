<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $site->title()->esc() ?> &mdash; <?= $page->title()->esc() ?></title>

    <?= css([
      'assets/normalize.css',
      'assets/styles.css',
    ]) ?>

</head>
<body class="page-index">

    <div class="container-logo">
        <a href="<?= $site->url() ?>"><img class="logo" src="/assets/svg/Sifon-Logo.svg" alt="Sifon Logo"></a>
    </div>
    <header class="container-nav">
        <div>
            <button type="button" class="nav-button">
                <img class="nav-closed" src="/assets/svg/Burger.svg" alt="Navigation Open Icon">
                <img class="nav-open" src="/assets/svg/Burger-Close.svg" alt="Navigation Close Icon">
            </button>
        </div>
        <aside>
            <button type="button" class="shuffle"><img src="/assets/svg/Shuffle.svg" alt="Suffle"></button>
            <button type="button" class="page-down"><img src="/assets/svg/Page-Down.svg" alt="Page Down"></button>
        </aside>
    </header>
    <?php

        $items = $pages->listed()->notTemplate('project');

    ?>
    <nav>
        <ul>
            <?php foreach($items as $item): ?>
            <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
            <?php endforeach ?>
        </ul>
    </nav>