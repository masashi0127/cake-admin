<?= $this->Html->docType() ?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>CakeAdmin - Login</title>
    <?= $this->Html->css('min/'.strtolower($this->viewPath)) ?>
</head>
<body>
<?php if ($this->viewPath !== 'Login') : ?>
<?= $this->element('header') ?>
<?php endif ?>
<?= $this->fetch('content') ?>
</body>
</html>