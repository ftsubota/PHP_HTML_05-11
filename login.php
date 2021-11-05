<?php

// buscar o template com o twig e renderizar
// $twig está sendo injetado e método render (arquivo, array de valores)
$template = $twig->render('login.html', [
    'horario' => date('d/m/y H:i:s')
    
]);
echo $template;