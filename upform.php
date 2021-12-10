<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos en php</title>
</head>
<body>

  
<form name="form1" id="form1" method="post" action="implode.php" enctype="multipart/form-data">
						
						<h4 class="text-center">Cargar Multiple Archivos</h4>
                        <div class="form-group">

							<label for="archivo1" class="col-sm-2 control-label">Cedula de identificacion Fiscal</label>
							<div class="col-sm-8">
								<input type="file" class="form-control"id="archivo[]" name="archivo[]" multiple="" >
							</div>
							<label for="archivo1" class="col-sm-2 control-label">Ause </label>
							<div class="col-sm-8">
								<input type="file" class="form-control"id="archivo[]" name="archivo[]" multiple="" >
							</div>
							<label for="archivo1" class="col-sm-2 control-label">Otro</label>
							<div class="col-sm-8">
								<input type="file" class="form-control"id="archivo[]" name="archivo[]" multiple="" >
							</div>
							<label for="archivo1" class="col-sm-2 control-label">Otros</label>
							<div class="col-sm-8">
								<input type="file" class="form-control"id="archivo[]" name="archivo[]" multiple="" >
							</div>
							
						
							<button type="submit" class="btn btn-primary">Cargar</button>
						</div>				
</form> 
</body>
</html> 

