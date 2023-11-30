<style type="text/css">
    .table-wrapper {
  max-height: 80vh;
  overflow: auto;
  width: 100%;
  display:inline-block;
}
.table-wrapper th {
    position: sticky;
    top: 1px;
    background: #fff;
    color: black;
    text-align: center;
   }
   .notfirst:hover {
      background-color: #0000002e;
    }
</style>


<!-- <p class="text-center"><button class="btn btn-success btn-sm" onclick="generarexcel(1)"><span class="fa fa-file-excel"></span></button></p> -->
<div class="table-responsive table-wrapper">
<table class="table table-bordered">
    <thead>
        <th style="text-align: center;">ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Tipo Documento</th>
        <th>Numero Documento</th>
        <th>Email/Correo</th>
        <th>Telefono/Contacto</th>
        <th>Direccion/Domicilio</th>
        <th>Fecha/Nacimiento</th>
        <th>Estado</th>

		<th colspan="1">Acciones</th>
    </thead>
    <tbody>
            <?php foreach ($datos as $datos2) { ?>
                <tr>
                    <td style="text-align: center;"><b><?php echo $datos2['id']; ?></b></td>
                    <td style="text-align: center;"><b><?php echo $datos2['nombres']; ?></b></td>
                    <td style="text-align: center;"><b><?php echo $datos2['apellidos']; ?></b></td>
                    
                    <td><b><?php $this->tipoDocumento($datos2['id_tipo_documento']); ?></b></td>

                    <td style="text-align: center;"><b><?php echo $datos2['num_documento']; ?></b></td>
                    <td style="text-align: center;"><b><?php echo $datos2['email']; ?></b></td>
                    <td style="text-align: center;"><b><?php echo $datos2['telefono_contacto']; ?></b></td>
                    <td style="text-align: center;"><b><?php echo $datos2['direccion_domicilio']; ?></b></td>
                    <td style="text-align: center;"><b><?php echo $datos2['fecha_nacimiento']; ?></b></td>

                    <?php $ACTIVO = "ACTIVO"; ?>
                    <?php $INACTIVO = "INACTIVO"; ?>
                    <?php 
                        if ($datos2['estado'] == NULL) {
                            echo '<td style="background-color: #e14e4e;">'.$INACTIVO.'</td>';
                        }else{
                            echo '<td style="background-color: #279b44;">'.$ACTIVO.'</td>';
                        }
                    ?>

                    <td style="text-align: center;">
                        <button class="btn btn-danger btn-sm" id="eliminaregistro" onclick="confirmareliminar(`<?php echo $datos2['id'];?>`)"><span class="fa fa-trash"></button></a>
                    </td>

                </tr>
            <?php }; ?>
    </tbody>
</table>
</div>