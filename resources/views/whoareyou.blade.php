<html>
<head>
    <title>Who Are You</title>
</head>
<body>
<form action="/whoami" method="POST">
@csrf
Name: <input type="text" name="complete_name">
<button type="submit">Submit</button>
</form>
</body>
</html>