<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ToDo List </title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="list">
			<h1 class="header">TO DO</h1>
			<ul class="items">
				<li><span class="item">Shopping</li>
				<a href="#" class="done-button">Done</a>
				<li><span class="item-done">studyn</li>
			</ul>

			<form class="item-add" action="add.php" method="post">
				<input type="text" name="name" placeholder="Type a new item" class="input" autocomplete="off" required>
				<input type="submit" value="Add" class="submit">
			</form>
		</div>
	</body>
</html>
