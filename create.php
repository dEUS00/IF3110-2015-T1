<!DOCTYPE html>
<html>
<head>
	<title>
		What's your Question?
	</title>
</head>

<body>
	<h1 align="center">
		Simple StackExchange
	</h1>
	<br>
	<br>
	<h2 align="center">
		What's your question?
	</h2>
	<hr width="75%" align="center">
	<br>
	<form action="submit_question.php" method="POST">
		<input type="text" name="name" value="Name" onfocus="if (this.value=='Name') this.value='';">
		<br>
		<input type="text" name="email" value="Email" onfocus="if (this.value=='Email') this.value='';">
		<br>
		<input type="text" name="topic" value="Question Topic" onfocus="if (this.value=='Question Topic') this.value='';">
		<br>
		<input type="text" name="content" value="Content" onfocus="if (this.value=='Content') this.value='';">
		<br>
		<input type="submit" name="post" value="Post">
	</form>
</body>
</html>