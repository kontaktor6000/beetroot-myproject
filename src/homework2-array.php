<?php include 'array.php';  ?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>HTML5</title>

  <style>
   article, aside, details, figcaption, figure, footer,header,
   hgroup, menu, nav, section { display: block; }
  </style>
 </head>
 <body>
  <p>Создать массив пользователей из 5-7 пользователей сайта вида<br>

$users = [];<br> 
$users["5"] = ["name" => "Test", "email" => "test@test.com"];<br>
$users["3"] = ["name" => "Anton", "email" => "anton@gmail.com"];<br>
где "5" — id пользователя сайта:;</p>
<p>с помощью функций работы с масивами вывести </p>

<h3>общее количество пользователей сайта:</h3>
<p>Общее кол-во пользователей - <?= count($users) ?></p>

<h3>отсортировать пользователей в порядке убывания id:</h3>
	<?php krsort($users); ?>
<div>
	<pre>
		<?php print_r($users); ?>
	</pre>
</div>

<h3>получить пользователя с максимальным и минимальным айди:</h3>

<?php include 'max_min_ids.php'; ?>
<p>Max ID User: <?= $userMaxId ?></p>
<p>Min ID User: <?= $userMinId ?></p>

<h3>получить пользователя с айди следующим за минимальным и предыдущим максимальному айди:</h3>
<?php include 'next_and_prev_users.php' ?>
<pre>
<?php print_r($nextUser); ?>
</pre>
<pre>
<?php print_r($prevUser); ?>
</pre>


<h3>удалить из массива пользователя с минимальным айди. </h3>
<?php include 'unset_user.php'; ?>
<pre>
<?php print_r($users); ?>
</pre>

 </body>
</html>