<?php
    ini_set('display_errors','On');
    require 'src/School/User.php';
    use App\School\User;
    $user=new User();
    echo $user->setEmail("dani@dani.com")->getEmail();
    echo '<br>';
    // echo "El user es: {$user->getEmail()}<br>";
    var_dump($user);