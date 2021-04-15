<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Survey Form</title>
	<link rel="stylesheet" href="/user_guide/css/style.css">
</head>
<body>
	<form action="/result" method='POST'>
		<input type="hidden" name='action' value='processed'>

		<label for="name">Your name: </label>
		<input type="text" id='name' name='name' required>

		<label for="location">Dojo Location: </label>
		<select name="location" id="location" required>
			<option value="Philippines">Philippines</option>
			<option value="Japan">Japan</option>
			<option value="Korea">Korea</option>
		</select>

		<label for="language">Favorite Language: </label>
		<select name="language" id="language" required>
			<option value="JavaScript">Javascript</option>
			<option value="PHP">PHP</option>
			<option value="Java">Java</option>
		</select>

		<label for="comment">Comment (optional): </label>
		<textarea name="comment" id="comment" cols="30" rows="10"></textarea>

		<input type="submit" value='Submit'>
	</form>
</body>
</html>