<?= $this->Html->docType(); ?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>CakeAdmin - Login</title>
    <?= $this->Html->css('min/'.strtolower($this->viewPath)); ?>
</head>
<body>
<?= $this->element('header'); ?>
<?= $this->fetch('content'); ?>
</body>
</html>