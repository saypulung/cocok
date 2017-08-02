<!DOCTYPE html>
<html>
<head>
	<title>Cock</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/roster/assets/jquery-easyui/themes/bootstrap/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/roster/assets/jquery-easyui/themes/icon.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://localhost/roster/assets/jquery-easyui/jquery.easyui.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-lg-12" style="margin-top: 30px;">
			<div class="well">
				<?php
					if(isset($_POST['ok'])){
						print_r($_POST);
					}else{
						echo 'Coba dulu combogrid';
					}
				?>
			</div>
			<form action="" method="post">
				<input type="text" name="cdata" class="combogrid form-control"/>
				<input type="submit" name="ok" value="Kirim"/>
			</form>
		</div>

	</div>
	<script type="text/javascript">
		var cg = $('.combogrid').combogrid({
            panelWidth:500,
            url: 'http://localhost/roster/roster_itera/get_dosen_ajax',
            idField:'kode_dosen',
            textField:'nama_dosen',
            mode:'remote',
            pagination:'true',
            fitColumns:true,
            rownumbers: true,
            columns:[[
                {field:'kode_dosen',title:'Kode Dosen',width:40},
                {field:'nama_dosen',title:'Nama Dosen',width:80}
            ]]
        });
        dg.datagrid('enableFilter', [{
                field:'kode_dosen',
                type:'numberbox',
                options:{precision:1}
            },{
                field:'nama_dosen',
                type:'nama_dosen',
                options:{precision:1},
                op:['less','greater']
            }]);
	</script>
</body>
</html>