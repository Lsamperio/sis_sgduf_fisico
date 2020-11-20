<?php
include '../conection_bd.php';

$resultado = mysqli_query($conection, "SELECT dt.id as id_general, pi.id as id_procedencia, us.NOMBRES, us.APELLIDO_PATERNO, dt.no_caja_tramitacion, dt.id_procedencia, dt.cp_proyecto,  dt.origen_ingreso, dt.no_expediente, dt.folio_solicitud, dt.nombre_propietario, dt.tel_propietario, dt.correo_propietario, dt.representante_legl, dt.tel_rep_legal, dt.correo_rep_legal, dt.deno_proyecto, dt.domicilio_proyecto, dt.municipio_proyecto, dt.cp_proyecto, dt.giro, dt.actividad_comercial, dt.descripcion_general, dt.monto_inversion, dt.tipo_nomeda, dt.no_emplos_dir, dt.no_emplos_ind, pi.estado_prevencion, pi.estado_procencia, pi.estado_etapa, codigo_barras, pi.turnado_etapa2, pi.fec_notificacion_procedencia FROM datos_generales dt INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales INNER JOIN usuarios us ON us.ID_USER = dt.usu_captura where pi.estado_etapa='rechazado'");

$c=0;

while($fila=$resultado->fetch_assoc()){
	$id_general=$fila['id_general'];
	$id_e1=$fila['id_procedencia'];
	$data[$c]["mas"] ="Más";
	$data[$c]["origen_ingreso"] = $fila["origen_ingreso"];
	$data[$c]["no_expediente"] = $fila["no_expediente"];
	$data[$c]["folio_solicitud"] = $fila["folio_solicitud"];
	$data[$c]["nombre_propietario"] = $fila["nombre_propietario"];
	$data[$c]["deno_proyecto"] = $fila["deno_proyecto"];
	$data[$c]["giro"] = $fila["giro"];
	$data[$c]["descripcion_general"] = $fila["descripcion_general"];
	$data[$c]["domicilio_proyecto"] = $fila["domicilio_proyecto"];
	$data[$c]["tel_propietario"] = $fila["tel_propietario"];
	$data[$c]["representante_legl"] = $fila["representante_legl"];
	$data[$c]["tel_rep_legal"] = $fila["tel_rep_legal"];
	$data[$c]["monto_inversion"] = $fila["monto_inversion"];
	$data[$c]["no_emplos_dir"] = $fila["no_emplos_dir"];
	$data[$c]["no_emplos_ind"] = $fila["no_emplos_ind"];
	$data[$c]["estado_procencia"] = $fila["estado_procencia"];
	$data[$c]["fec_notificacion_procedencia"] = $fila["fec_notificacion_procedencia"];
	$data[$c]["codigo_barras"] = $fila["codigo_barras"];
	$data[$c]["turnado_etapa2"] = $fila["turnado_etapa2"];
	$data[$c]["id_general"] = $fila["id_general"];
	$data[$c]["id_procedencia"] = $fila["id_procedencia"];
	$c++;
}
if (isset($data)) {
	$var='no pasa nada';
}
else{
	$id_general=$fila['id_general'];
	$id_e1=$fila['id_procedencia'];
	$data[0]["mas"] ="Más";
	$data[0]["origen_ingreso"] = 'sin datos';
	$data[0]["no_expediente"] = 'sin datos';
	$data[0]["folio_solicitud"] = 'sin datos';
	$data[0]["nombre_propietario"] = 'sin datos';
	$data[0]["deno_proyecto"] = 'sin datos';
	$data[0]["giro"] = 'sin datos';
	$data[0]["descripcion_general"] = 'sin datos';
	$data[0]["domicilio_proyecto"] = 'sin datos';
	$data[0]["tel_propietario"] = 'sin datos';
	$data[0]["representante_legl"] = 'sin datos';
	$data[0]["tel_rep_legal"] = 'sin datos';
	$data[0]["monto_inversion"] = 'sin datos';
	$data[0]["no_emplos_dir"] = 'sin datos';
	$data[0]["no_emplos_ind"] = 'sin datos';
	$data[0]["estado_procencia"] = 'sin datos';
	$data[0]["fec_notificacion_procedencia"] = 'sin datos';
	$data[0]["codigo_barras"] ='sin datos';
	$data[0]["turnado_etapa2"] = 'sin datos';
	$data[0]["id_general"] = 'sin datos';
	$data[0]["id_procedencia"] = 'sin datos';
}
$results = ["sEcho" => 1,
	"iTotalRecords" => count($data),
	"iTotalDisplayRecords" => count($data),
	"aaData" => $data
];

echo json_encode($results);
 ?>