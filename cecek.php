<!DOCTYPE html>
<html>
<head>
	<title>Cock</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="container">
		<div class="col-lg-12" style="margin-top: 30px;">
			<div class="well">
				Wedoyyysss
			</div>
			<form action="" method="post">
				<input type="radio" name="pil" value="Pilihan1" id="pil1">
				<input type="radio" name="pil" value="Pilihan2" id="pil2">
				<button type="button" class="btn btn-primary pil1">Pilih 1</button>
				<button type="button" class="btn btn-primary pil2">Pilih 2</button>
			</form>
		</div>

	</div>
	<script type="text/javascript">
		$('.pil1').click(function(){
			$('#pil1').prop('checked',true);
			$('#pil2').prop('checked',false);
		});
		$('.pil2').click(function(){
			$('#pil2').prop('checked',true);
			$('#pil1').prop('checked',false);
		});
	</script>
</body>
</html>