<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php foreach($editar as $row): ?>
    <form role="form" method="post" action="<?php echo base_url('clientes/updateCliente'); ?>">

        <div class="form-group">
            <input type="number" name="id_cliente" id="id_cliente" class="form-control " value="<?php echo $row->id_cliente; ?>" readonly>
        </div>
        <div class="form-group">
            <input type="text" name="nome_cliente" id="nome_cliente" class="form-control " value="<?php echo $row->nome_cliente; ?>">
        </div>
        <div class="form-group">
            <input type="number" size="9" name="telemovel" id="telemovel" class="form-control " value="<?php echo $row->telemovel; ?>">
        </div>
        <div class="form-group">
            <input type="text" name="morada" id="morada" class="form-control " value="<?php echo $row->morada; ?>">
        </div>

        <button type="submit" style="width: 200px; font-size: 14pt;" class="btn btn-default center-block">Alterar</button>

        <hr style="margin-top:10px;margin-bottom:10px;" >

    </form>
<?php endforeach; ?>