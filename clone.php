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
			<form action="" method="post" class="form-inline">
				<div class="panel panel-default">
				  <div class="panel-heading">
				  	<div class="pull-right">
				  		<a href="javascript:;" class="btn btn-xs btn-primary clone">Tambah</a>
				  	</div>
				    <h3 class="panel-title">Form</h3>
				  </div>
				  
				  
				  <div class="panel-body">
				    <div class="row form-clone">
				      <div class="col-md-12 form-body">
						<div class="form-group">
						    <label for="exampleInputName2">Name</label>
						    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail2">Email</label>
						    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
						  </div>
						</div>
					</div>
				  </div>
				</div>
				
			</form>
		</div>

	</div>
	<script type="text/javascript">
		$('.clone').click(function(){
			var cln = $('.form-clone');
			var len = cln.length;
			cln.last().clone().appendTo('.panel-body');
			var id = len+1;
			$('.form-clone').last().attr('id','form-row-'+id);
			if(len==1){
				
				$('.form-body').last().append('<div class="form-group"><button onclick="hapus('+id+')" type="button" class="btn btn-danger btn-xs hapus">Hapus'+id+'</button></div>');
			}else{
				$('.hapus').last().remove();
				$('.form-body').last().append('<div class="form-group"><button onclick="hapus('+id+')" type="button" class="btn btn-danger btn-xs hapus">Hapus'+id+'</button></div>');
			}
		});
		
		function hapus(id){
			$('#form-row-'+id).remove();
		}
	</script>
</body>
</html>