<?php

$user = "modulo6";
$password = "modulo6";
$dbname = "tcs2";
$port = "5432";
$host = "159.65.230.188";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";

$query = 'select t_asistencia_postgrado.nu_id from public.t_asistencia_postgrado';




$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");

$numReg = pg_num_rows($resultado);

if($numReg>0){
echo "<table border='1' align='center'>
<tr bgcolor='skyblue'>
<th>ID</th>
<th>Usuario</th>
<th>Contrasena</th></tr>";
while ($fila=pg_fetch_array($resultado)) {
echo "<tr><td>".$fila['nu_id']."</td>";
//echo "<td>".$fila['ape_nom']."</td>";
//echo "<td>".$fila['ape_nom']."</td></tr>";
}
                echo "</table>";
}else{
                echo "No hay Registros";
}

pg_close($conexion);

?>