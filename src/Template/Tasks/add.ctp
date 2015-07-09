<input type="text" id="username">
<input type="text" id="fullname">

<button id="register">register</button>

<?= $this->Html->script('min/'.strtolower($this->viewPath).'/add.js?'.date('YmdHis')); ?>