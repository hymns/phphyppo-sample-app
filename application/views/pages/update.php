<html>
<head>
	<title>Update Article</title>
</head>
<body>
<h2>Update Article</h2>
<form action="/article/page/update" method="post">
<input type="hidden" name='data[id]' value='<?php echo $id; ?>'>
	Title <input type="text" name="data[title]" value='<?php echo $title; ?>'> <br />
	Content <textarea cols=40 rows=5 name="data[body]"><?php echo htmlentities($body); ?></textarea> <br />
	<input type="submit" value="Update Article">
</form>
</body>
</html>