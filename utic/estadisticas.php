<?php
include '../conection_bd.php';
//--------------------------PROCEDENCIA-------------------
$sql_cofaem_procedencia_notificados = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE pi.estado_procencia='CON PROCEDENCIA NOTIFICADA' AND dt.origen_ingreso='COFAEM' AND pi.estado_etapa='confirmado' AND pi.conclusion=''
");
$sql_cofaem_procedencia_sin_notificar = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE pi.estado_procencia='CON PROCEDENCIA SIN NOTIFICAR' AND dt.origen_ingreso='COFAEM' AND pi.estado_etapa='confirmado' AND pi.conclusion=''
");
$sql_dgou_procedencia_notificados = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE pi.estado_procencia='CON PROCEDENCIA NOTIFICADA' AND dt.origen_ingreso='dgou' AND pi.estado_etapa='confirmado' AND pi.conclusion=''
");
$sql_dgou_procedencia_sin_notificar = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE pi.estado_procencia='CON PROCEDENCIA SIN NOTIFICAR' AND dt.origen_ingreso='dgou' AND pi.estado_etapa='confirmado' AND pi.conclusion=''
");
//***************************************************************************************

//--------------------------PREVENCION-------------------
$sql_cofaem_prevencion_notificados = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE (pi.estado_prevencion='CON PREVENCION NOTIFICADA' OR pi.estado_prevencion='CON PREVENCION SUBSANADA') AND pi.estado_procencia='SIN PROCEDENCIA' AND dt.origen_ingreso='COFAEM' AND pi.estado_etapa='confirmado' AND pi.conclusion=''
");
$sql_cofaem_prevencion_sin_notificar = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE pi.estado_prevencion='CON PREVENCION SIN NOTIFICAR' AND pi.estado_procencia='SIN PROCEDENCIA' AND dt.origen_ingreso='COFAEM' AND pi.estado_etapa='confirmado' AND pi.conclusion=''
");
$sql_dgou_prevencion_notificados = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE (pi.estado_prevencion='CON PREVENCION NOTIFICADA' OR pi.estado_prevencion='CON PREVENCION SUBSANADA') AND pi.estado_procencia='SIN PROCEDENCIA' AND dt.origen_ingreso='dgou' AND pi.estado_etapa='confirmado' AND pi.conclusion=''
");
$sql_dgou_prevencion_sin_notificar = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE pi.estado_prevencion='CON PREVENCION SIN NOTIFICAR' AND pi.estado_procencia='SIN PROCEDENCIA' AND dt.origen_ingreso='dgou' AND pi.estado_etapa='confirmado' AND pi.conclusion=''
");
//***************************************************************************************

//------------------------------EN ANÁLISIS---------------------------
$sql_cofaem_analisis = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE (pi.estado_prevencion='SIN PREVENCION' OR PI.estado_prevencion='') AND (pi.estado_procencia='SIN PROCEDENCIA' OR pi.estado_procencia='') AND dt.origen_ingreso='COFAEM' AND pi.estado_etapa='confirmado' AND pi.conclusion=''
");
$sql_dgou_analisis = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE (pi.estado_prevencion='SIN PREVENCION' OR PI.estado_prevencion='') AND (pi.estado_procencia='SIN PROCEDENCIA' OR pi.estado_procencia='') AND dt.origen_ingreso='DGOU' AND pi.estado_etapa='confirmado' AND pi.conclusion=''
");
//*************************************************************************************

//-------------------ETAPA 2 REQUISITOS ESPECIFICOS-----------------------------
$sql_cofaem_con_requisitos = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE dt.origen_ingreso='COFAEM' AND pi.estado_etapa='3' AND pi.ingreso_requisitos='ingresó RE' AND pi.conclusion=''
");
$sql_cofaem_sin_requisitos = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE dt.origen_ingreso='COFAEM' AND pi.estado_etapa='3' AND pi.ingreso_requisitos='sin ingreso RE' AND pi.conclusion=''
");
$sql_dgou_con_requisitos = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE dt.origen_ingreso='DGOU' AND pi.estado_etapa='3' AND pi.ingreso_requisitos='ingresó RE' AND pi.conclusion=''
");
$sql_dgou_sin_requisitos = mysqli_query($conection, "SELECT COUNT(dt.nombre_propietario) as total
FROM datos_generales dt
INNER JOIN procedencia_integracion pi ON dt.id = pi.id_datos_generales
WHERE dt.origen_ingreso='DGOU' AND pi.estado_etapa='3' AND pi.ingreso_requisitos='sin ingreso RE' AND pi.conclusion=''
");
//***************************************************************************************

//-------------------------MATERIAS----------------------------
$sql_sld = mysqli_query($conection, "SELECT COUNT(ts.id) as total
FROM procedencia_integracion pi
INNER JOIN ts_sld ts ON pi.id = ts.id_procedencia
WHERE ts.estado_respuesta_dep!='Evaluación Técnica Procedente' AND ts.estado_respuesta_dep!='Evaluación Técnica Improcedente' AND pi.conclusion='' AND pi.estado_etapa='3'
");
$sql_dec = mysqli_query($conection, "SELECT COUNT(ts.id) as total
FROM procedencia_integracion pi
INNER JOIN ts_dec ts ON pi.id = ts.id_procedencia
WHERE ts.estado_respuesta_dep!='Evaluación Técnica Procedente' AND ts.estado_respuesta_dep!='Evaluación Técnica Improcedente' AND pi.conclusion='' AND pi.estado_etapa='3'
");
$sql_dum = mysqli_query($conection, "SELECT COUNT(ts.id) as total
FROM procedencia_integracion pi
INNER JOIN ts_dum ts ON pi.id = ts.id_procedencia
WHERE ts.estado_respuesta_dep!='Evaluación Técnica Procedente' AND ts.estado_respuesta_dep!='Evaluación Técnica Improcedente' AND pi.conclusion='' AND pi.estado_etapa='3'
");
$sql_mam = mysqli_query($conection, "SELECT COUNT(ts.id) as total
FROM procedencia_integracion pi
INNER JOIN ts_mam ts ON pi.id = ts.id_procedencia
WHERE ts.estado_respuesta_dep!='Evaluación Técnica Procedente' AND ts.estado_respuesta_dep!='Evaluación Técnica Improcedente' AND pi.conclusion='' AND pi.estado_etapa='3'
");
$sql_vld = mysqli_query($conection, "SELECT COUNT(ts.id) as total
FROM procedencia_integracion pi
INNER JOIN ts_vld ts ON pi.id = ts.id_procedencia
WHERE ts.estado_respuesta_dep!='Evaluación Técnica Procedente' AND ts.estado_respuesta_dep!='Evaluación Técnica Improcedente' AND pi.conclusion='' AND pi.estado_etapa='3'
");
$sql_ada = mysqli_query($conection, "SELECT COUNT(ts.id) as total
FROM procedencia_integracion pi
INNER JOIN ts_ada ts ON pi.id = ts.id_procedencia
WHERE ts.estado_respuesta_dep!='Evaluación Técnica Procedente' AND ts.estado_respuesta_dep!='Evaluación Técnica Improcedente' AND pi.conclusion='' AND pi.estado_etapa='3'
");
$sql_pcl = mysqli_query($conection, "SELECT COUNT(ts.id) as total
FROM procedencia_integracion pi
INNER JOIN ts_pcl ts ON pi.id = ts.id_procedencia
WHERE ts.estado_respuesta_dep!='Evaluación Técnica Procedente' AND ts.estado_respuesta_dep!='Evaluación Técnica Improcedente' AND pi.conclusion='' AND pi.estado_etapa='3'
");
$sql_ftl = mysqli_query($conection, "SELECT COUNT(ts.id) as total
FROM procedencia_integracion pi
INNER JOIN ts_ftl ts ON pi.id = ts.id_procedencia
WHERE ts.estado_respuesta_dep!='Evaluación Técnica Procedente' AND ts.estado_respuesta_dep!='Evaluación Técnica Improcedente' AND pi.conclusion='' AND pi.estado_etapa='3'
");
$sql_mov = mysqli_query($conection, "SELECT COUNT(ts.id) as total
FROM procedencia_integracion pi
INNER JOIN ts_mov ts ON pi.id = ts.id_procedencia
WHERE ts.estado_respuesta_dep!='Evaluación Técnica Procedente' AND ts.estado_respuesta_dep!='Evaluación Técnica Improcedente' AND pi.conclusion='' AND pi.estado_etapa='3'
");
//**********************************************************************************************

//-------------------------EMISION--------------------------------
$tabla      = mysqli_query($conection, "SELECT em.tipo_tramite as tipo, em.impacto_riesgo as clasificacion, COUNT(em.id) as total_dufs, SUM(dt.monto_inversion) as inversion, SUM(dt.no_emplos_dir) as empleos_dir, SUM(dt.no_emplos_ind) as empleos_ind
FROM emision em
INNER JOIN datos_generales dt ON em.id_datos_generales= dt.id
WHERE em.consecutivo!=0 AND em.estado_duf!='CANCELADO'
GROUP BY em.tipo_tramite, em.impacto_riesgo");
$totalDUFS  = 0;
$totalMONTO = 0;
$totalED    = 0;
$totalEI    = 0;

foreach ($tabla as $fila) {
    $totalDUFS  = $totalDUFS + $fila['total_dufs'];
    $totalMONTO = $totalMONTO + $fila['inversion'];
    $totalED    = $totalED + $fila['empleos_dir'];
    $totalEI    = $totalEI + $fila['empleos_ind'];
}

$sql = mysqli_query($conection, "SELECT em.tipo_tramite as tipo, em.impacto_riesgo as clasificacion,
pi.ma_SLD, pi.ma_DEC, pi.ma_MAM , pi.ma_DUM , pi.ma_PCL, pi.ma_VLD , pi.ma_MOV , pi.ma_ADA , pi.ma_FTL
FROM emision em
INNER JOIN procedencia_integracion pi ON em.id_procedencia= pi.id
WHERE em.consecutivo!=0 AND em.estado_duf!='CANCELADO'");
$altoRiesgo=0;
$impactoSanitario=0;
$desarrolloEconomico=0;
$otros=0;
foreach ($sql as $fila) {
    if ($fila['clasificacion'] == 'ALTO IMPACTO') {
        $altoRiesgo = $altoRiesgo +1;

    } else if ($fila['ma_SLD']==1) {
        $impactoSanitario =  $impactoSanitario+1;

    } else if ($fila['ma_DEC']==1){
    	$desarrolloEconomico = $desarrolloEconomico + 1;
    } else  {

       $otros = $otros +1;
    }
}
$totalG               = $altoRiesgo + $impactoSanitario + $desarrolloEconomico + $otros;
//*************************************************************************************

$datos_cofaem_procedencia_notificados = mysqli_fetch_assoc($sql_cofaem_procedencia_notificados);
$datos_cofaem_procedencia_sin_notificar = mysqli_fetch_assoc($sql_cofaem_procedencia_sin_notificar);
$datos_dgou_procedencia_notificados = mysqli_fetch_assoc($sql_dgou_procedencia_notificados);
$datos_dgou_procedencia_sin_notificar = mysqli_fetch_assoc($sql_dgou_procedencia_sin_notificar);
$datos_cofaem_prevencion_notificados = mysqli_fetch_assoc($sql_cofaem_prevencion_notificados);
$datos_cofaem_prevencion_sin_notificar = mysqli_fetch_assoc($sql_cofaem_prevencion_sin_notificar);
$datos_dgou_prevencion_notificados = mysqli_fetch_assoc($sql_dgou_prevencion_notificados);
$datos_dgou_prevencion_sin_notificar = mysqli_fetch_assoc($sql_dgou_prevencion_sin_notificar);
$datos_cofaem_analisis = mysqli_fetch_assoc($sql_cofaem_analisis);
$datos_dgou_analisis = mysqli_fetch_assoc($sql_dgou_analisis);
$datos_cofaem_con_requisitos = mysqli_fetch_assoc($sql_cofaem_con_requisitos);
$datos_cofaem_sin_requisitos = mysqli_fetch_assoc($sql_cofaem_sin_requisitos);
$datos_dgou_con_requisitos = mysqli_fetch_assoc($sql_dgou_con_requisitos);
$datos_dgou_sin_requisitos = mysqli_fetch_assoc($sql_dgou_sin_requisitos);
$datos_sld = mysqli_fetch_assoc($sql_sld);
$datos_dec = mysqli_fetch_assoc($sql_dec);
$datos_dum = mysqli_fetch_assoc($sql_dum);
$datos_mam = mysqli_fetch_assoc($sql_mam);
$datos_vld = mysqli_fetch_assoc($sql_vld);
$datos_ada = mysqli_fetch_assoc($sql_ada);
$datos_pcl = mysqli_fetch_assoc($sql_pcl);
$datos_ftl = mysqli_fetch_assoc($sql_ftl);
$datos_mov = mysqli_fetch_assoc($sql_mov);

$totalProcedencia=$datos_cofaem_procedencia_notificados['total'] +$datos_cofaem_procedencia_sin_notificar['total'] + $datos_cofaem_prevencion_notificados['total'] +$datos_cofaem_prevencion_sin_notificar['total'] +$datos_cofaem_analisis['total'] +$datos_dgou_procedencia_notificados['total'] +$datos_dgou_procedencia_sin_notificar['total'] +$datos_dgou_prevencion_notificados['total'] +$datos_dgou_prevencion_sin_notificar['total'] +$datos_dgou_analisis['total'];

$total_procedencia_notificados=$datos_cofaem_procedencia_notificados['total'] + $datos_dgou_procedencia_notificados['total'] ;
$porcentaje_procedencia_notificados=(($total_procedencia_notificados*100)/$totalProcedencia);

$total_procedencia_sin_notificar=$datos_cofaem_procedencia_sin_notificar['total'] + $datos_dgou_procedencia_sin_notificar['total'];
$porcentaje_sin_notificar=(($total_procedencia_sin_notificar*100)/$totalProcedencia);

$total_prevencion_notificados=$datos_cofaem_prevencion_notificados['total'] + $datos_dgou_prevencion_notificados['total'] ;
$porcentaje_prevencion_notificados=(($total_prevencion_notificados*100)/$totalProcedencia);

$total_prevencion_sin_notificar=$datos_cofaem_prevencion_sin_notificar['total'] + $datos_dgou_prevencion_sin_notificar['total'];
$porcentaje_prevencion_sin_notificar=(($total_prevencion_sin_notificar*100)/$totalProcedencia);

$total_analisis=$datos_cofaem_analisis['total'] + $datos_dgou_analisis['total'];
$porcentaje_analisis=(($total_analisis*100)/$totalProcedencia);


$total_etapa2=$datos_cofaem_con_requisitos['total'] + $datos_dgou_con_requisitos['total'] +
	 					$datos_cofaem_sin_requisitos['total'] + $datos_dgou_sin_requisitos['total'];

$total_con_requisitos=$datos_cofaem_con_requisitos['total'] + $datos_dgou_con_requisitos['total'];
$porcentaje_con_requisitos=(($total_con_requisitos*100)/$total_etapa2);

$total_sin_requisitos=$datos_cofaem_sin_requisitos['total'] + $datos_dgou_sin_requisitos['total'];
$porcentaje_sin_requisitos=(($total_sin_requisitos*100)/$total_etapa2);
include '../menu.php';

 ?>
 	<div class="container">
	 	<h5>ESTADÍSTICA GENERAL DE LA DIRECCIÓN DE PROCEDENCIA JURÍDICA E INTEGRACIÓN DE EXPEDIENTES</h5>
	 	<table border="2px" class="table">
	 		<thead>
	 			<tr>
	 				<th>ESTADO DEL TRÁMITE</th>
	 				<TH>ESTADO</TH>
	 				<TH>COFAEM</TH>
	 				<TH>SEDUYM</TH>
	 				<TH>TOTAL</TH>
	 				<th>%</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 			<tr>
	 				<td rowspan="2">CON PROCEDENCIA</td>
	 				<td>NOTIFICADA</td>
	 				<TD><?php echo $datos_cofaem_procedencia_notificados['total'] ?></TD>
	 				<TD><?php echo $datos_dgou_procedencia_notificados['total'] ?></TD>
	 				<TD><?php echo$total_procedencia_notificados ?></TD>
	 				<td><?php echo round($porcentaje_procedencia_notificados); ?>%</td>
	 			</tr>
	 			<TR>
	 				<TD>SIN NOTIFICAR</TD>
	 				<TD><?php echo $datos_cofaem_procedencia_sin_notificar['total'] ?></TD>
	 				<TD><?php echo $datos_dgou_procedencia_sin_notificar['total'] ?></TD>
	 				<TD><?php echo $total_procedencia_sin_notificar ?></TD>
	 				<td><?php echo round($porcentaje_sin_notificar) ?>%</td>
	 			</TR>
	 			<tr>
	 				<td rowspan="2">CON PREVENCIÓN</td>
	 				<td>NOTIFICADA</td>
	 				<TD><?php echo $datos_cofaem_prevencion_notificados['total'] ?></TD>
	 				<TD><?php echo $datos_dgou_prevencion_notificados['total'] ?></TD>
	 				<TD><?php echo $total_prevencion_notificados ?></TD>
	 				<td><?php echo round($porcentaje_prevencion_notificados) ?>%</td>
	 			</tr>
	 			<TR>
	 				<TD>SIN NOTIFICAR</TD>
	 				<TD><?php echo $datos_cofaem_prevencion_sin_notificar['total'] ?></TD>
	 				<TD><?php echo $datos_dgou_prevencion_sin_notificar['total'] ?></TD>
	 				<TD><?php echo $total_prevencion_sin_notificar?></TD>
	 				<td><?php echo round($porcentaje_prevencion_sin_notificar) ?>%</td>
	 			</TR>
	 			<tr>
	 				<td  colspan="2">EN ANÁLISIS</td>
	 				<TD><?php echo $datos_cofaem_analisis['total'] ?></TD>
	 				<TD><?php echo $datos_dgou_analisis['total'] ?></TD>
	 				<TD><?php echo $total_analisis ?></TD>
	 				<td><?php echo round($porcentaje_analisis) ?>%</td>
	 			</tr>
	 			<tr>
	 				<td colspan="2">TOTAL</td>
	 				<td>
	 					<?php echo  $datos_cofaem_procedencia_notificados['total'] +
						$datos_cofaem_procedencia_sin_notificar['total'] +
						$datos_cofaem_prevencion_notificados['total'] +
						$datos_cofaem_prevencion_sin_notificar['total'] +
						$datos_cofaem_analisis['total'] ?>
					</td>
					<td>
						<?php echo  $datos_dgou_procedencia_notificados['total'] +
						$datos_dgou_procedencia_sin_notificar['total'] +
						$datos_dgou_prevencion_notificados['total'] +
						$datos_dgou_prevencion_sin_notificar['total'] +
						$datos_dgou_analisis['total'] ?>
					</td>
					<td>
						<?php echo $totalProcedencia;
						?>
					</td>
					<td>100%</td>
	 			</tr>
	 		</tbody>
	 	</table>

		<h5>ESTADÍSTICA GENERAL DE LA DIRECCIÓN DE COORDINACIÓN Y SEGUIMIENTO</h5>
	 	<table border="2px" class="table">
	 		<thead>
	 			<tr>
	 				<th>ESTADO GENERAL</th>
	 				<th>COFAEM</th>
	 				<th>SEDUYM</th>
	 				<th>TOTAL</th>
	 				<th>%</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 			<tr>
	 				<td>CON INGRESO DE REQUISITOS ESPECÍFICOS</td>
	 				<td><?php echo $datos_cofaem_con_requisitos['total'] ?></td>
	 				<td><?php echo $datos_dgou_con_requisitos['total'] ?></td>
	 				<td><?php echo $total_con_requisitos ?></td>
	 				<td><?php echo round($porcentaje_con_requisitos) ?>%</td>
	 			</tr>
	 			<tr>
	 				<td>SIN INGRESO DE REQUISITOS ESPECÍFICOS</td>
	 				<td><?php echo $datos_cofaem_sin_requisitos['total'] ?></td>
	 				<td><?php echo $datos_dgou_sin_requisitos['total'] ?></td>
	 				<td><?php echo $total_sin_requisitos ?></td>
	 				<td><?php echo round($porcentaje_sin_requisitos) ?>%</td>
	 			</tr>
	 			<tr>
	 				<td colspan="3">TOTAL</td>
	 				<td>
	 					<?php echo $total_etapa2 ?>
	 				</td>
	 				<td>100%</td>
	 			</tr>
	 		</tbody>
	 	</table>

	<!-- 	<h5>TRÁMITES EN ESPERA DE EVALUACIONES TÉCNICAS POR PARTE DE LAS DEPENDENCIAS U ORGANISMOS AUXILIARES</h5>
	 	<div class="table-responsive">
	 	<table border="2px" class="table">
	 		<thead>
	 			<tr>
	 				<th>SALUBRIDAD LOCAL</th>
	 				<th>DESARROLLO ECONÓMICO</th>
	 				<th>DESARROLLO URBANO Y VIVIENDA</th>
	 				<th>MEDIO AMBIENTE</th>
	 				<th>VIALIDAD</th>
	 				<th>AGUA Y DRENAGE</th>
	 				<th>PROTECCIÓN CIVIL</th>
	 				<th>FORESTAL</th>
	 				<th>MOVILIDAD</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 			<tr>
	 				<td><?php //echo $datos_sld['total'] ?></td>
	 				<td><?php //echo $datos_dec['total'] ?></td>
	 				<td><?php //echo $datos_dum['total'] ?></td>
	 				<td><?php //echo $datos_mam['total'] ?></td>
	 				<td><?php //echo $datos_vld['total'] ?></td>
	 				<td><?php //echo $datos_ada['total'] ?></td>
	 				<td><?php //echo $datos_pcl['total'] ?></td>
	 				<td><?php //echo $datos_ftl['total'] ?></td>
	 				<td><?php //echo $datos_mov['total'] ?></td>
	 			</tr>
	 		</tbody>
	 	</table>
	 </div>
-->

		
	 </div>
	 <!--aqui termina-->
        </main>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
 </body>
 </html>