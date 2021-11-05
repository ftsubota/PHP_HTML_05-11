<?php

if ($_POST['email'] == 'admin@email.com' && $_POST['pass'] == '1234'){
    $template = $twig -> render('perfil.html', [
        'usuario' => $_POST['email']
    ]);
} else {
    header('Location: /login');
}
echo $template;