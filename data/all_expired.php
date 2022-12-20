<?php 
require_once('../class/Expired.php');
$expireds = $expired->all_expired();

 ?>
 <h2>Medicamentos vencidos</h2>
<div class="table-responsive">
        <table id="myTable-expired" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th><center>Nombre</center></th>
                    <th><center>Precio</center></th>
                    <th><center>Cant.</center></th>
                    <th><center>Fecha de vencimiento</center></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($expireds as $ex): ?>
                <tr align="center" class="text-danger">
                    <td><?= ucwords($ex['exp_itemName']); ?></td>
                    <td><?= "$ ".number_format($ex['exp_itemPrice'], 2); ?></td>
                    <td><?= $ex['exp_itemQty']; ?></td>
                    <td><?= $ex['exp_expiredDate']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<!-- for the datatable of employee -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-expired').DataTable();
    });
</script>

<?php 
$expired->Disconnect();
 ?>