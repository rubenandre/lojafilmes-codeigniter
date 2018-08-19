<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php foreach($editar as $row): ?>
    <form role="form" method="post" action="<?php echo base_url('filmes/updateFilme'); ?>">

        <div class="form-group">
            <input type="number" name="id_filme" id="id_filme" class="form-control " value="<?php echo $row->id_filme; ?>" readonly>
        </div>
        <div class="form-group">
            <input type="text" name="nome_filme" id="nome_filme" class="form-control " value="<?php echo $row->nome_filme; ?>">
        </div>
        <div class="form-group">
            <input type="number" size="4" name="ano_filme" id="ano_filme" class="form-control " value="<?php echo $row->ano_filme; ?>">
        </div>

        <button type="submit" style="width: 200px; font-size: 14pt;" class="btn btn-default center-block">Alterar</button>

        <hr style="margin-top:10px;margin-bottom:10px;" >

    </form>
<?php endforeach; ?>