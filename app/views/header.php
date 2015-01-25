<?php if (!$_header) return; ?>
<!DOCTYPE html>
<html>
<head>
<link href="<?=WWW?>/public/images/favicon.ico" rel="icon" type="image/x-icon" />
<link href="<?=WWW?>/public/css/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="content-type" content="text/html;charset=<?=CODEPAGE?>">
<script language="javascript" src="<?=WWW?>/public/js/jquery.min.js"></script>
<title><?=(($_header_title != '') ? $_header_title . ' :: ' : '')?>Система размещения заказов</title>
</head>
<body>
	<div class="header_frame">
		<div class="header">
			<div class="title">
				<a class="go_main_page" href="<?=WWW?>/" title="Перейти на главную страницу">Система размещения заказов</a>
			</div>
			<div class="menu">
				<ul>
<?php

// Флаг "Заказчик"
$c = (UID && $_user && $_user['customer']);
// Флаг "Исполнитель"
$e = (UID && $_user && $_user['executor']);


if ($c && $e)
{
?>					<li class="highlight"><a href="<?=WWW?>/orders/add">Разместить заказ</a></li>
					<li class="highlight"><a href="<?=WWW?>/orders">Просмотр заказов</a></li>
					<li><a href="<?=WWW?>/orders/my">Мои заказы</a></li>
					<li><a href="<?=WWW?>/orders/go">История заказов</a></li>
<?php
}
elseif ($c)
{
?>					<li class="highlight"><a href="<?=WWW?>/orders/add">Разместить заказ</a></li>
					<li><a href="<?=WWW?>/orders">Просмотр заказов</a></li>
					<li><a href="<?=WWW?>/orders/my">Мои заказы</a></li>
<?php
}
elseif ($e)
{
?>					<li class="highlight"><a href="<?=WWW?>/orders">Просмотр заказов</a></li>
					<li><a href="<?=WWW?>/orders/go">История заказов</a></li>
<?php
}
else
{
?>					<li class="highlight"><a href="<?=WWW?>/orders">Просмотр заказов</a></li>
<?php
}


?>					<li><a href="<?=WWW?>/about">О проекте</a></li>
				</ul>
<?php

// Если пользователь авторизован на сайте
if (UID)
{
	// Вывод кнопки выхода из пользователя
?>				<div class="login">
					<a href="<?=WWW?>/logout" title="Выйти из пользователя">Выход: <?=$_user['name']?></a>
				</div>
<?php
	
}
else
{
	// Вывод кнопки входа на сайт
?>				<div class="login">
					<a href="<?=WWW?>/login/">Войти на сайт</a>
				</div>
<?php
	
}

?>			</div>
		</div>
	</div>
	<div class="header_spacer">&nbsp;</div>
	<div class="main_frame">
