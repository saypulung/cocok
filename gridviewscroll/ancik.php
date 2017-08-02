
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	GridViewScroll with jQuery
</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="freeze/jquery.freezetablecolumns.1.1.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#freeze-table').freezeTableColumns({
        width:       800,   // required
        height:      500,   // required
        numFrozen:   1,     // optional
        frozenWidth: 160,   // optional
        
      });
    });
  </script>
    <style type="text/css">
    	BODY,TD
		{
		    font-family: Tahoma, Arial, Verdana;
		    font-weight: normal;
		    font-size: 12px;
		    color: #333333;
		}
    </style>
</head>
<body>
	<div class="container" style="margin-top:20px">
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						J4NCOEG
					</div>
				  <div class="panel-body">
				    Basic panel example
				  </div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						TABLE
					</div>
					<div class="panel-body">
					<div class='block-content'>
						<table id="freeze-table" class="table">
					      <thead>
					        <tr>
					          <th style="width: 100px !important;">Name</th>
					          <th  style="width: 100px !important;">Location</th>
					          <th  style="width: 100px !important;">Registration Date</th>
					          <th style="width: 100px !important;">Occupation</th>
					          <th style="width: 100px !important;">Profession</th>
					          <th style="width: 100px !important;">Registration Date</th>
					          <th style="width: 100px !important;">Occupation</th>
					          <th style="width: 100px !important;">Profession</th>
					        </tr>
					      </thead>
					      <tbody>
					      	<?php for($i=0;$i<30;$i++){?>
					        <tr>
					          <td>Kit</td>
					          <td>Hong Kong</td>
					          <td>2013-04-08</td>
					          <td>Freelancer</td>
					          <td>Web development</td>
					          <td>2013-04-08</td>
					          <td>Freelancer</td>
					          <td>Web development</td>
					        </tr>
					        <?php
					        }
					        ?>
					       </tbody>
					     </table>
						<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script type="text/javascript">
	    
	</script>
</body>
</html>