<form method="post" action="<?php echo base_url('Clientes/addCliente'); ?>">

    <input type="text" name="nome_cliente" id="nome_cliente" placeholder="Nome do Cliente" tabindex="1" required> <br/><br/>
    <input type="number" name="telemovel" id="telemovel" placeholder="Telemóvel" tabindex="2" required> <br/><br/>
    <input type="text" name="morada" id="morada" placeholder="Morada" tabindex="3" required> <br/><br/>

    <button type="submit">Registrar</button>

</form>

<h1>-------------------------------------------------------------------------------------------------</h1>

<h1>Clientes</h1>

<?php foreach($query as $row): ?>
    <tr>
        <th><?php echo $row->id_cliente; ?></th>
        <td><?php echo $row->nome_cliente; ?></td>
        <td><?php echo $row->telemovel; ?></td>
        <td><?php echo $row->morada; ?></td>
        <form method="post" action="<?php echo base_url('Clientes/deleteCliente') ?>" style="display: inline;">
            <input type="number" name="id_cliente" id="id_cliente" value="<?php echo $row->id_cliente ?>" hidden>
            <button type="submit">Eliminar</button>
        </form>
        <form method="post" action="<?php echo base_url('Clientes/editCliente') ?>" style="display: inline;">
            <button type="submit">Editar</button>
        </form>
    </tr>
    <br/>
<?php endforeach; ?>