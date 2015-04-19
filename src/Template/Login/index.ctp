<body class="content">
<?= $this->Form->create(
    null,
    [
        'url' => ['controller' => 'Login', 'action' => 'login'],
        'class' => 'login-form',
        'inputDefaults' => [
            'label' => false
        ]
    ]
); ?>

<?= $this->Form->input(
    'account_id',
    [
        'type' => 'text',
        'class' => 'login-form__account-id',
        'placeholder' => 'username',
        'label' => false,
        'div' => false
    ]
)?>
<?= $this->Form->input(
    'password',
    [
        'type' => 'password',
        'class' => 'login-form__password',
        'placeholder' => 'password',
        'label' => false,
        'div' => false
    ]
) ?>

<?= $this->Flash->render(
    'auth',
    ['class' => 'login-form__error-message']
) ?>

<?= $this->Form->button(
    'Login',
    [
        'class' => 'login-form__button-submit'
    ]
) ?>
<?= $this->Form->end() ?>
</div>