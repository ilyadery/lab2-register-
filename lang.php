<?php session_start();
$lang = [
    'ru' => "Русский",
    'en' => "English",
    'ua' => "Ukrainian",
    'it' => "Italiano",
];
?>
<html>
<head>
    <title>Lab2-Hello</title>
</head>
<body>
<div class="inner">    
            <?php echo $_SESSION['login']; ?>
                      Добро пожаловать
					  
            <form class="form" method="post" action="hello.php">
                <div class="field">
                    <label>
                        <class="header">Выберите ваш язык</h2>
                    </label>
                    <select name="lang" class="dropdown">
                        <?php foreach ($lang as $l => $type) 
						{ ?>
                            <option value="<?php echo $l ?>"><?php echo $type ?>
							</option>
                        <?php 
						} ?>
                    </select>
                </div>
                <button class="button" type="submit">Изменить</button>
            </form>	           
</div>
</body>
</html>