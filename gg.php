<?php
if (isset($_GET['url']) && strlen($_GET['url']) > 0) {
	$link = $_GET['url'];
	$link = explode("?id=", $link);
	$id = $link[1];
		echo ("https://drive.google.com/uc?export=download&id=".$id);
} else {
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
		

		<script type="text/javascript">
			function testart() {
				var delaytime = $("#delay").val()
				var linha = $("#linkgg").val();
		        var linhaenviar = linha.split("\n");
		        var total = linhaenviar.length;
		        var ap = 0;
		        var rp = 0;
		        linhaenviar.forEach(function(value, index) {
		            setTimeout(
		                function() {
		                    $.ajax({
		                        url: 'gg.php?url=' + value,
		                        type: 'GET',
		                        async: true,
		                        success: function(resultado) {
		                        	window.open(resultado);
		                        	removelinha();
		                        }
		                    });
		                }, delaytime * 1000 * index);
		        });
			}


			function removelinha() {
		        var lines = $("#linkgg").val().split('\n');
		        lines.splice(0, 1);
		        $("#linkgg").val(lines.join("\n"));
			}
		</script>
		<title>Download google</title>
	</head>
	<body>

		<textarea placeholder="EnterLINK" id="linkgg" style="width: 1080px;height: 900px"></textarea>
		<input type="number" id="delay" placeholder="Thời gian delay (s)" required>
		<button class="btn btn-primary" style="width: 200px; outline: none;" id="testar" onclick="testart()" >START</button>
	</body>
	</html>


	<?php
}
