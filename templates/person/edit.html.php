<?php

/** @var \App\Model\Person $person */
/** @var \App\Service\Router $router */

$title = "Edit Person {$person->getName()} ({$person->getId()})";
$bodyClass = "edit";

ob_start(); ?>
    <h1><?= $title ?></h1>
    <form action="<?= $router->generatePath('person-edit') ?>" method="post" class="edit-form">
        <?php require __DIR__ . DIRECTORY_SEPARATOR . '_form.html.php'; ?>
        <input type="hidden" name="action" value="person-edit">
        <input type="hidden" name="id" value="<?= $person->getId() ?>">
    </form>

    <ul class="action-list">
        <li>
            <a href="<?= $router->generatePath('person-index') ?>">Back to list</a>
        </li>
        <li>
            <form action="<?= $router->generatePath('person-delete') ?>" method="post">
                <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                <input type="hidden" name="action" value="person-delete">
                <input type="hidden" name="id" value="<?= $person->getId() ?>">
            </form>
        </li>
    </ul>

<?php $main = ob_get_clean();

include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'base.html.php';
