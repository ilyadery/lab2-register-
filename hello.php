<?php session_start();
$words = [
    'ru' => ['priv' => "Вас приветствует этот сайт!", 'change' => "Изменить", 'exit' => "Выйти"],
    'en' => ['priv' => "This site welcomes you!", 'change' => "Change", 'exit' => "Logout"],
    'ua' => ['priv' => "Вас вітає цей сайт!", 'change' => "Змінити", 'exit' => "Вийти"],
    'it' => ['priv' => "Questo sito ti dà il benvenuto!", 'change' => "Emendare", 'exit' => "Disconnettersi"],
];
var_dump('<pre>',$_POST['lang']);
if (empty($_POST['lang'])) {
} else {
    $_SESSION['lang'] = $_POST['lang'];
}
function trans($lang, $words)
{
    return $words[$_SESSION['lang']][$lang];
}
?>
<html>
<head>
    <title>Lab2-Hello</title>
</head>
<body class="GOOD">
<div class="inner">
     <div class="tug">
        
            <?php echo $_SESSION['login']; ?>
            <br>
            <?php
            echo trans('priv', $words);
            ?>       
</div>
<div class="input">

            <form class="form" method="post" action="Hello.php"> 
 <select name="lang" class="dropdown">
        <?php foreach ($words as $lang => $type) { ?>
            <option value="<?php echo $lang ?>" <? if ($lang == $_SESSION['lang']) 
			{
                echo 'selected';
            } ?>><?php echo $lang ?>
			</option>
                        <?php } ?>
    </select>
                </div>
				<div class="left">
    <table>	
        <td>
               
                <button class="button"
                        type="submit"><?php echo trans('change', $words); ?></button>
           
        </td>
        <td>
            <form class="form" action="logout.php">
                <button class="button"
                        type="submit"><?php echo trans('exit', $words); ?></button>
            </form>
        </td>
    </table>
	 </form>
</div>
</body>
</html>
