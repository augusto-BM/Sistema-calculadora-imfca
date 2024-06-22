
<?php
@include '../../modelo/conexion.php';
session_start();

?>

<?php
    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

        $nombre_campaña = $_POST["nombre_campaña"];
        $estado = "activo";
        
        // Preparar la consulta SQL para insertar los datos en la tabla
        $sql_campañas = "INSERT INTO campaings (name, estado) 
                VALUES ('$nombre_campaña','$estado')";
        $query = mysqli_query($conn, $sql_campañas);

        
        // Ejecutar la consulta y verificar si fue exitosa
        if ($query) {
            $_SESSION['mensaje'] = "Campaña registrado exitosamente";
            header("Location: ../../vista/administrador/principal.php");
        } else {
            $_SESSION['mensaje'] = "Error al registrar Campaña";
            header("Location: ../../vista/administrador/principal.php");
        }
        
    }
    
    ?>

