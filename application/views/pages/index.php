<html>
<head>
	<title>Article Application</title>
</head>
<body>
<h2>Latest Article</h2>
<b><a href="/article/page/create">Add New</a></b>
<!--- page list --->
<?php foreach($pages as $page): ?>
<p>
	<b><a href="/article/page/view/<?php echo $page['id']; ?>"><?php echo $page['title']; ?></a></b><br>
	<?php echo substr($page['body'], 0, 300); ?>...
	<a href="/article/page/remove/<?php echo $page['id']; ?>"><img src="/article/media/img/remove.gif" border=0></a>
	<a href="/article/page/update/<?php echo $page['id']; ?>"><img src="/article/media/img/update.gif" border=0></a>
</p>
<?php endforeach; ?>
<!--- /page list --->
</body>
</html>