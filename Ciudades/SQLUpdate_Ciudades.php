<?php 
    include '../SqlTools/database.php';
    if (isset($_POST['submit'])) {
        $Usuario = $_POST['Usuario'];
        $Empresa = $_POST['Empresa'];
        $id = $_POST['idCiudades'];
        $DescripcionCiudad = $_POST['DescripcionCiudad'];
        $Estados_idEstado=$_POST['Estados_idEstado'];

        $a = new database();
        $a->update('ciudades', "idCiudades = $id", ['DescripcionCiudad'=>$DescripcionCiudad,'Estados_idEstado'=>$Estados_idEstado]);

        if ($a == true) {
            header("location: TablaCiudades.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
        }
    }
