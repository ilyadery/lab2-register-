<?php
session_start();
$users = [
    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat',],
];
if (empty($_POST['login']) && empty($_POST['password'])) {
    include('login.php'); 
?>
    <br>
    <div class="inner">
        <div class="message">
            <i class="close icon"></i>
            <div class="header">
                Введите логин и пароль!
            </div>
        </div>
    </div>
    <? return;
}
foreach ($users as $value) {
    if ($value['login'] == $_POST['login'] && $value['password'] == $_POST['password']) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['lang'] = $value['lang'];
        break;
    }
}
if (isset($_SESSION['login'])) {
    if (empty($_SESSION['lang'])) {
        include('lang.php');
    } else {
        include('hello.php');
    }
} else {
    include('login.php'); ?>
    <br>
    <div class="inner">
        <div class="message">
            <i class="close icon"></i>
            <div class="header">
                Неправильный логин или пароль.
            </div>
        </div>
    </div>
	<?php
}