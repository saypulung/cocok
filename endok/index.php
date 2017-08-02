<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<form action="" method="post">
	<input type="text" name="a" value="cicil"/>
	<input type="text" name="b" value="cocol" disabled />
	<input type="submit" name="c">
	<button id="e" type="button">Err</button>
</form>
<script type="text/javascript">
	$('#e').click(function(){
		//e.preventDefault();
		//alert('cukkk');
		window.app.closeApp();
		window.app.printVal("jancuk");
	})
</script>
<?php
$_SESSION['jancuk']='asoee';
$_SESSION['f']=array('a','b','c');
print_r($_SESSION);
print_r($_POST);