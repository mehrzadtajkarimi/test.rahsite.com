
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="public\js\jquery-3.3.1.min.js"></script>
	<title>Document</title>
</head>
<body>
<button type="button" name="button">
	click
</button>

<script type="text/javascript">
$('button').click(function(){
	var url='test1.php';
	var data={'id':1};
	$.post(url,data,function(msg){
		alert(msg);
	});
})
</script>

</body>
</html>
