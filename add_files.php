<?php 
    include("segurity_session.php");
	include("conection_bd.php");
	date_default_timezone_set('America/Mexico_City');
    //-----------------------------------------------------------------------------------------
    
    $FECHA_INGRESO=mysqli_real_escape_string($conection,$_POST['FECHA_INGRESO']);
    $NO_EXPEDIENTE=mysqli_real_escape_string($conection,$_POST['NO_EXPEDIENTE']);
    $NO_CAJA=mysqli_real_escape_string($conection,$_POST['NO_CAJA']);
    $ANIO_CAJA=mysqli_real_escape_string($conection,$_POST['ANIO_CAJA']);
    $PROPIETARIO=mysqli_real_escape_string($conection,$_POST['PROPIETARIO']);
    $CORREO_PROPIETARIO=mysqli_real_escape_string($conection,$_POST['CORREO_PROPIETARIO']);
    $TELEFONO_PROPIETARIO=mysqli_real_escape_string($conection,$_POST['TELEFONO_PROPIETARIO']);
    $REP_LEGAL=mysqli_real_escape_string($conection,$_POST['REP_LEGAL']);
    $CORREO_REP_LEGAL=mysqli_real_escape_string($conection,$_POST['CORREO_REP_LEGAL']);
    $TELEFONO_REP_LEGAL=mysqli_real_escape_string($conection,$_POST['TELEFONO_REP_LEGAL']);
    $DENOMINACION_RAZON=mysqli_real_escape_string($conection,$_POST['DENOMINACION_RAZON']);
    $DOMICILIO_CALLE=mysqli_real_escape_string($conection,$_POST['DOMICILIO_CALLE']);
    $DOMICILIO_NO_EXT=mysqli_real_escape_string($conection,$_POST['DOMICILIO_NO_EXT']);
    $DOMICILIO_NO_INT=mysqli_real_escape_string($conection,$_POST['DOMICILIO_NO_INT']);
    $DOMICILIO_COLONIA=mysqli_real_escape_string($conection,$_POST['DOMICILIO_COLONIA']);
    $DOMICILIO_MUNICIPIO=mysqli_real_escape_string($conection,$_POST['DOMICILIO_MUNICIPIO']);
    $DOMICILIO_CP=mysqli_real_escape_string($conection,$_POST['DOMICILIO_CP']);
    $GIRO=mysqli_real_escape_string($conection,$_POST['GIRO']);
    $ACTIVIDAD_COMERCIAL=mysqli_real_escape_string($conection,$_POST['ACTIVIDAD_COMERCIAL']);
    //------------------------------------------------------------------------------------------
    $ETAPA_TRAMITE=mysqli_real_escape_string($conection,$_POST['ETAPA_TRAMITE']);
    $ESTADO_ETAPA1=mysqli_real_escape_string($conection,$_POST['ESTADO_ETAPA1']);
    $NO_OFICIO_PREVENCION=mysqli_real_escape_string($conection,$_POST['NO_OFICIO_PREVENCION']);
    $FECHA_PREVENCION=mysqli_real_escape_string($conection,$_POST['FECHA_PREVENCION']);
    $NO_OFICIO_PROCEDENCIA=mysqli_real_escape_string($conection,$_POST['NO_OFICIO_PROCEDENCIA']);
    $FECHA_PROCEDENCIA=mysqli_real_escape_string($conection,$_POST['FECHA_PROCEDENCIA']);
    //------------------------------------------------------------------------------------------
    $MATERIA_MA_SLD=mysqli_real_escape_string($conection,$_POST['MATERIA_MA_SLD']);
    $RADIO_MA_SLD=mysqli_real_escape_string($conection,$_POST['RADIO_MA_SLD']);
    $NO_OFICIO_MA_SLD=mysqli_real_escape_string($conection,$_POST['NO_OFICIO_MA_SLD']);
    $FECHA_NOTIFICACION_INVEA_MA_SLD=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_INVEA_MA_SLD']);
    $MATERIA_MA_DUM=mysqli_real_escape_string($conection,$_POST['MATERIA_MA_DUM']);
    $RADIO_MA_DUM=mysqli_real_escape_string($conection,$_POST['RADIO_MA_DUM']);
    $NO_OFICIO_MA_DUM=mysqli_real_escape_string($conection,$_POST['NO_OFICIO_MA_DUM']);
    $FECHA_NOTIFICACION_INVEA_MA_DUM=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_INVEA_MA_DUM']);
    $MATERIA_MA_PCL=mysqli_real_escape_string($conection,$_POST['MATERIA_MA_PCL']);
    $RADIO_MA_PCL=mysqli_real_escape_string($conection,$_POST['RADIO_MA_PCL']);
    $NO_OFICIO_MA_PCL=mysqli_real_escape_string($conection,$_POST['NO_OFICIO_MA_PCL']);
    $FECHA_NOTIFICACION_INVEA_MA_PCL=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_INVEA_MA_PCL']);
    $MATERIA_MA_MAM=mysqli_real_escape_string($conection,$_POST['MATERIA_MA_MAM']);
    $RADIO_MA_MAM=mysqli_real_escape_string($conection,$_POST['RADIO_MA_MAM']);
    $NO_OFICIO_MA_MAM=mysqli_real_escape_string($conection,$_POST['NO_OFICIO_MA_MAM']);
    $FECHA_NOTIFICACION_INVEA_MA_MAM=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_INVEA_MA_MAM']);
    $MATERIA_MA_DEC=mysqli_real_escape_string($conection,$_POST['MATERIA_MA_DEC']);
    $RADIO_MA_DEC=mysqli_real_escape_string($conection,$_POST['RADIO_MA_DEC']);
    $NO_OFICIO_MA_DEC=mysqli_real_escape_string($conection,$_POST['NO_OFICIO_MA_DEC']);
    $FECHA_NOTIFICACION_INVEA_MA_DEC=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_INVEA_MA_DEC']);
    $MATERIA_MA_COM=mysqli_real_escape_string($conection,$_POST['MATERIA_MA_COM']);
    $RADIO_MA_COM=mysqli_real_escape_string($conection,$_POST['RADIO_MA_COM']);
    $NO_OFICIO_MA_COM=mysqli_real_escape_string($conection,$_POST['NO_OFICIO_MA_COM']);
    $FECHA_NOTIFICACION_INVEA_MA_COM=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_INVEA_MA_COM']);
    $MATERIA_MA_MOV=mysqli_real_escape_string($conection,$_POST['MATERIA_MA_MOV']);
    $RADIO_MA_MOV=mysqli_real_escape_string($conection,$_POST['RADIO_MA_MOV']);
    $NO_OFICIO_MA_MOV=mysqli_real_escape_string($conection,$_POST['NO_OFICIO_MA_MOV']);
    $FECHA_NOTIFICACION_INVEA_MA_MOV=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_INVEA_MA_MOV']);
    $MATERIA_MA_ADA=mysqli_real_escape_string($conection,$_POST['MATERIA_MA_ADA']);
    $RADIO_MA_ADA=mysqli_real_escape_string($conection,$_POST['RADIO_MA_ADA']);
    $NO_OFICIO_MA_ADA=mysqli_real_escape_string($conection,$_POST['NO_OFICIO_MA_ADA']);
    $FECHA_NOTIFICACION_INVEA_MA_ADA=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_INVEA_MA_ADA']);
    //------------------------------------------------------------------------------------------
    $NO_EVALUACION_SLD=mysqli_real_escape_string($conection,$_POST['NO_EVALUACION_SLD']);
    $FECHA_NOTIFICACION_SLD=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_SLD']);
    $RESULTADO_EVALUACION_SLD=mysqli_real_escape_string($conection,$_POST['RESULTADO_EVALUACION_SLD']);
    $NO_EVALUACION_DUM=mysqli_real_escape_string($conection,$_POST['NO_EVALUACION_DUM']);
    $FECHA_NOTIFICACION_DUM=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_DUM']);
    $RESULTADO_EVALUACION_DUM=mysqli_real_escape_string($conection,$_POST['RESULTADO_EVALUACION_DUM']);
    $NO_EVALUACION_PCL=mysqli_real_escape_string($conection,$_POST['NO_EVALUACION_PCL']);
    $FECHA_NOTIFICACION_PCL=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_PCL']);
    $RESULTADO_EVALUACION_PCL=mysqli_real_escape_string($conection,$_POST['RESULTADO_EVALUACION_PCL']);
    $NO_EVALUACION_MAM=mysqli_real_escape_string($conection,$_POST['NO_EVALUACION_MAM']);
    $FECHA_NOTIFICACION_MAM=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_MAM']);
    $RESULTADO_EVALUACION_MAM=mysqli_real_escape_string($conection,$_POST['RESULTADO_EVALUACION_MAM']);
    $NO_EVALUACION_DEC=mysqli_real_escape_string($conection,$_POST['NO_EVALUACION_DEC']);
    $FECHA_NOTIFICACION_DEC=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_DEC']);
    $RESULTADO_EVALUACION_DEC=mysqli_real_escape_string($conection,$_POST['RESULTADO_EVALUACION_DEC']);
    $NO_EVALUACION_COM=mysqli_real_escape_string($conection,$_POST['NO_EVALUACION_COM']);
    $FECHA_NOTIFICACION_COM=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_COM']);
    $RESULTADO_EVALUACION_COM=mysqli_real_escape_string($conection,$_POST['RESULTADO_EVALUACION_COM']);
    $NO_EVALUACION_MOV=mysqli_real_escape_string($conection,$_POST['NO_EVALUACION_MOV']);
    $FECHA_NOTIFICACION_MOV=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_MOV']);
    $RESULTADO_EVALUACION_MOV=mysqli_real_escape_string($conection,$_POST['RESULTADO_EVALUACION_MOV']);
    $NO_EVALUACION_ADA=mysqli_real_escape_string($conection,$_POST['NO_EVALUACION_ADA']);
    $FECHA_NOTIFICACION_ADA=mysqli_real_escape_string($conection,$_POST['FECHA_NOTIFICACION_ADA']);
    $RESULTADO_EVALUACION_ADA=mysqli_real_escape_string($conection,$_POST['RESULTADO_EVALUACION_ADA']);
    //------------------------------------------------------------------------------------------

    $RADIO_CUENTA_DUF=mysqli_real_escape_string($conection,$_POST['RADIO_CUENTA_DUF']);
    $NO_DUF=mysqli_real_escape_string($conection,$_POST['NO_DUF']);
    $MOTIVO_FALTA_DUF=mysqli_real_escape_string($conection,$_POST['MOTIVO_FALTA_DUF']);
    $OBSERVACIONES=mysqli_real_escape_string($conection,$_POST['OBSERVACIONES']);

    //------------------------------------------------------------------------------------------
    $USUARIO_MOVIMIENTO=$_SESSION["user_name"];
    $FECHA_MOVIMIENTO=date("Y-m-d");
    $HORA_MOVIMIENTO=date("H:i:s");
    //------------------------------------------------------------------------------------------
    $sql_insertar = "INSERT INTO expedientes_recepcion 
    (FECHA_INGRESO,NO_EXPEDIENTE,NO_CAJA,ANIO_CAJA,PROPIETARIO,CORREO_PROPIETARIO,TELEFONO_PROPIETARIO,REP_LEGAL,CORREO_REP_LEGAL,TELEFONO_REP_LEGAL,DENOMINACION_RAZON,DOMICILIO_CALLE,DOMICILIO_NO_EXT,DOMICILIO_NO_INT,DOMICILIO_COLONIA,DOMICILIO_MUNICIPIO,DOMICILIO_CP,GIRO,ACTIVIDAD_COMERCIAL,ETAPA_TRAMITE,ESTADO_ETAPA1,NO_OFICIO_PREVENCION,FECHA_PREVENCION,NO_OFICIO_PROCEDENCIA,FECHA_PROCEDENCIA,MATERIA_MA_SLD,RADIO_MA_SLD,NO_OFICIO_MA_SLD,FECHA_NOTIFICACION_INVEA_MA_SLD,MATERIA_MA_DUM,RADIO_MA_DUM,NO_OFICIO_MA_DUM,FECHA_NOTIFICACION_INVEA_MA_DUM,MATERIA_MA_PCL,RADIO_MA_PCL,NO_OFICIO_MA_PCL,FECHA_NOTIFICACION_INVEA_MA_PCL,MATERIA_MA_MAM,RADIO_MA_MAM,NO_OFICIO_MA_MAM,FECHA_NOTIFICACION_INVEA_MA_MAM,MATERIA_MA_DEC,RADIO_MA_DEC,NO_OFICIO_MA_DEC,FECHA_NOTIFICACION_INVEA_MA_DEC,MATERIA_MA_COM,RADIO_MA_COM,NO_OFICIO_MA_COM,FECHA_NOTIFICACION_INVEA_MA_COM,MATERIA_MA_MOV,RADIO_MA_MOV,NO_OFICIO_MA_MOV,FECHA_NOTIFICACION_INVEA_MA_MOV,MATERIA_MA_ADA,RADIO_MA_ADA,NO_OFICIO_MA_ADA,FECHA_NOTIFICACION_INVEA_MA_ADA,NO_EVALUACION_SLD,FECHA_NOTIFICACION_SLD,RESULTADO_EVALUACION_SLD,NO_EVALUACION_DUM,FECHA_NOTIFICACION_DUM,RESULTADO_EVALUACION_DUM,NO_EVALUACION_PCL,FECHA_NOTIFICACION_PCL,RESULTADO_EVALUACION_PCL,NO_EVALUACION_MAM,FECHA_NOTIFICACION_MAM,RESULTADO_EVALUACION_MAM,NO_EVALUACION_DEC,FECHA_NOTIFICACION_DEC,RESULTADO_EVALUACION_DEC,NO_EVALUACION_COM,FECHA_NOTIFICACION_COM,RESULTADO_EVALUACION_COM,NO_EVALUACION_MOV,FECHA_NOTIFICACION_MOV,RESULTADO_EVALUACION_MOV,NO_EVALUACION_ADA,FECHA_NOTIFICACION_ADA,RESULTADO_EVALUACION_ADA,CUENTA_CON_DUF,NO_DUF,MOTIVO_FALTA_DUF,OBSERVACIONES,USUARIO_MOVIMIENTO,FECHA_MOVIMIENTO,HORA_MOVIMIENTO)
     values ('".$FECHA_INGRESO."','".$NO_EXPEDIENTE."','".$NO_CAJA."','".$ANIO_CAJA."','".$PROPIETARIO."','".$CORREO_PROPIETARIO."','".$TELEFONO_PROPIETARIO."','".$REP_LEGAL."','".$CORREO_REP_LEGAL."','".$TELEFONO_REP_LEGAL."','".$DENOMINACION_RAZON."','".$DOMICILIO_CALLE."','".$DOMICILIO_NO_EXT."','".$DOMICILIO_NO_INT."','".$DOMICILIO_COLONIA."','".$DOMICILIO_MUNICIPIO."','".$DOMICILIO_CP."','".$GIRO."','".$ACTIVIDAD_COMERCIAL."',$ETAPA_TRAMITE,$ESTADO_ETAPA1,'".$NO_OFICIO_PREVENCION."','".$FECHA_PREVENCION."','".$NO_OFICIO_PROCEDENCIA."','".$FECHA_PROCEDENCIA."',$MATERIA_MA_SLD,$RADIO_MA_SLD,'".$NO_OFICIO_MA_SLD."','".$FECHA_NOTIFICACION_INVEA_MA_SLD."',$MATERIA_MA_DUM,$RADIO_MA_DUM,'".$NO_OFICIO_MA_DUM."','".$FECHA_NOTIFICACION_INVEA_MA_DUM."',$MATERIA_MA_PCL,$RADIO_MA_PCL,'".$NO_OFICIO_MA_PCL."','".$FECHA_NOTIFICACION_INVEA_MA_PCL."',$MATERIA_MA_MAM,$RADIO_MA_MAM,'".$NO_OFICIO_MA_MAM."','".$FECHA_NOTIFICACION_INVEA_MA_MAM."',$MATERIA_MA_DEC,$RADIO_MA_DEC,'".$NO_OFICIO_MA_DEC."','".$FECHA_NOTIFICACION_INVEA_MA_DEC."',$MATERIA_MA_COM,$RADIO_MA_COM,'".$NO_OFICIO_MA_COM."','".$FECHA_NOTIFICACION_INVEA_MA_COM."',$MATERIA_MA_MOV,$RADIO_MA_MOV,'".$NO_OFICIO_MA_MOV."','".$FECHA_NOTIFICACION_INVEA_MA_MOV."',$MATERIA_MA_ADA,$RADIO_MA_ADA,'".$NO_OFICIO_MA_ADA."','".$FECHA_NOTIFICACION_INVEA_MA_ADA."','".$NO_EVALUACION_SLD."','".$FECHA_NOTIFICACION_SLD."','".$RESULTADO_EVALUACION_SLD."','".$NO_EVALUACION_DUM."','".$FECHA_NOTIFICACION_DUM."','".$RESULTADO_EVALUACION_DUM."','".$NO_EVALUACION_PCL."','".$FECHA_NOTIFICACION_PCL."','".$RESULTADO_EVALUACION_PCL."','".$NO_EVALUACION_MAM."','".$FECHA_NOTIFICACION_MAM."','".$RESULTADO_EVALUACION_MAM."','".$NO_EVALUACION_DEC."','".$FECHA_NOTIFICACION_DEC."','".$RESULTADO_EVALUACION_DEC."','".$NO_EVALUACION_COM."','".$FECHA_NOTIFICACION_COM."','".$RESULTADO_EVALUACION_COM."','".$NO_EVALUACION_MOV."','".$FECHA_NOTIFICACION_MOV."','".$RESULTADO_EVALUACION_MOV."','".$NO_EVALUACION_ADA."','".$FECHA_NOTIFICACION_ADA."','".$RESULTADO_EVALUACION_ADA."',$RADIO_CUENTA_DUF,'".$NO_DUF."','".$MOTIVO_FALTA_DUF."','".$OBSERVACIONES."','".$USUARIO_MOVIMIENTO."','".$FECHA_MOVIMIENTO."','".$HORA_MOVIMIENTO."')";


    $resultado_insertar = mysqli_query($conection,$sql_insertar);
    if ($resultado_insertar === TRUE) {
        header ("Location: files");
    }else {
    	//header ("Location: Failure.php");
    	printf("Errormessage: %s\n", mysqli_error($conection));
    }
?>