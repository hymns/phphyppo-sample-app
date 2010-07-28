<html>
<head>
	<title>Create New Article</title>
</head>
<body>
<h2>Create New Article</h2>
<form action="/article/page/create" method="post">
	Title <input type="text" name="data[title]"> <br />
	Content <textarea cols=40 rows=5 name="data[body]"></textarea> <br />
	<input type="submit" value="Add Article">
</form>
</body>
</html>