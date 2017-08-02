<!DOCTYPE html>
<html>
<head>
	<title>Cock</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"/>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/en.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>
<body>
	<select id="cocok" class="sel2" style="width: 10%">
		<option value="1">N 1</option>
		<option value="2">N 2</option>
		<option value="3">N 3</option>
		<option value="4">N 4</option>
		<option value="5">N 5</option>
	</select>
	<ul>
		<li id="click-1" class="click" data-id="1">-------1</li>
		<li id="click-2" class="click" data-id="2">-------2</li>
		<li id="click-3" class="click" data-id="3">-------3</li>
		<li id="click-4" class="click" data-id="4">-------4</li>
		<li id="click-5" class="click" data-id="5">-------5</li>
	</ul>
	<script type="text/javascript">
		var ex = $('.sel2').select2();
		$('.click').click(function(){
			var id = $(this).attr('data-id');
			console.log(id);
			$('#cocok option').each(function(){
				$(this).removeAttr('selected');
			});
			ex.val(id).trigger('change');
			//$('#cocokval-'+id).attr('selected="selected"');
		})
	</script>
</body>
</html>