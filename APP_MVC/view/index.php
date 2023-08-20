<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

    h1{
        text-align: center;
        font-family: "Rock Salt", cursive;
        color: #FF5733;
        font-weight: bolder;
    }
    th{
        width: 8rem;
        text-align: left;
        background-color: teal;
        text-align: center;
        color: white;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 1px;
    }
    td{
        width: 8rem;
        font-family: 'Roboto', sans-serif;
        background-color: #abdbe3;
        color: 000000;
        letter-spacing: 1px;
        
    }
    table{
        
        position: relative;
        left: 150px;
        font-weight: bold;
        margin-right: auto;

    }
</style>



<h1>Listado de coches</h1>
<table id="base">
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Nombre</th>
        <!-- RETO colocar cada propietario en su Fila correspondiente -->
        <!--<th>Propietario</th> -->
    </tr>
    
    <?php foreach ($rowset as $row): ?>
        <tr>
            <td><?php echo $row->marca ?></td>
            <td><?php echo $row->modelo ?></td>
            <td><?php echo $row->color ?></td>
            <td><?php echo $row->propietario ?></td>
        </tr>

    <?php endforeach;?>
</table>