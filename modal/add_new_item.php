<?php 
require_once('database/Database.php');
$db = new Database();
$sql = "SELECT *
		FROM item_type
		ORDER BY item_type_desc ASC";
$types = $db->getRows($sql);
// echo '<pre>';
// 	print_r($types);
// echo '</pre>';
 ?>
<div class="modal fade" id="modal-item">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
			
				<form class="form-horizontal" role="form" id="form-item">
				<input type="hidden" id="item-id">
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Nombre del producto:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="item-name" placeholder="Ingresa el nombre generico" required="" autofocus="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Precio:</label>
				    <div class="col-sm-9"> 
				      <input type="number" min="0.1" step="any" class="form-control" id="item-price" placeholder="Ingresa el precio" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Código:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="code" placeholder="Ingresa el código" required="" autofocus="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Fabricante:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="brand" placeholder="Ingresa el fabricante" required="" autofocus="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Gramos:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="grams" placeholder="Ingresa los gramos" required="" autofocus="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Tipo:</label>
				    <div class="col-sm-9"> 
				      <select id="item-type" class="btn btn-default">
				      	<?php foreach($types as $t): ?>
				      		<option value="<?= $t['item_type_id']; ?>"><?= ucwords($t['item_type_desc']); ?></option>
				      	<?php endforeach; ?>
				      </select>
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" id="submit-item" value="add" class="btn btn-default">Guardar datos
				      <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
				      </button>
				    </div>
				  </div>
				</form>
				
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<?php 
$db->Disconnect();
 ?>