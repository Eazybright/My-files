<html>
<head>
	<title>Eazybright Forum</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
		integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<center>

		<h1><?php echo "Welcome to your Home page,".$_POST['username']; ?></h1>

			<?php foreach ($news as $news_item): ?>

				<h3><?php echo $news_item['title']; ?></h3>
				
				
				 <a href="<?= base_url('news/view/'.$news_item['slug'])?>">View article</a>

			<?php endforeach; ?>
</center>

<a href="<?= base_url('news/login')?>">Logout</a>
</body>
</html>