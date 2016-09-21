<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

<body>

<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-licor-modal-lg">Large modal</button>

<div class="modal fade bs-licor-modal-lg" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Ingreso de Licores</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-8">
            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label>Nombre:</label>
                </div>
                <div class="col-md-4">
                  <input type="text" name="cantidad_producto" placeholder="50">
                </div>
              </div>        
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label>Precio:</label>
                </div>
                <div class="col-md-4">
                  <input type="text" name="cantidad_producto" placeholder="50">
                </div>
              </div>        
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label>Foto:</label>
                </div>
                <div class="col-md-4">
                  <input type="file" name="imagen_producto" >
                </div>
              </div>        
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</html>

