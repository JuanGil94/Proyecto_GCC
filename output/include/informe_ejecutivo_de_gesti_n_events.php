<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_informe_ejecutivo_de_gesti_n  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;


	}

//	handlers

				// List page: Before process
function BeforeProcessList($pageObject)
{

		
	   $U_user = $_SESSION["UserNameF"];
		 $ejecutivo_cartera = $_SESSION['ejecutivo_cartera'];
		 $ejecutivo_desde = 	$_SESSION['ejecutivo_desde'];
		 $ejecutivo_hasta = 	$_SESSION['ejecutivo_hasta'];// Fecha en formato YYYY-MM-DD

		 // Separar la fecha en año, mes y día
		//list($ano, $mes, $dia) = explode('-', $cons_mes);


				// Crear un objeto DateTime a partir del año y mes
		$dateDesde = new DateTime($ejecutivo_desde);
		$dateHasta = new DateTime($ejecutivo_hasta);

				// Generar el primer día del mes
		$primer_dia = $dateDesde->modify('first day of this month')->format('d-m-Y');

		// Generar el último día del mes
		$ultimo_dia = $dateHasta->modify('last day of this month')->format('d-m-Y');

		/*
		// Establecer el último día del mes usando el método modify
		$date->modify('last day of this month');

		// Separar el año, mes y el último día
		$ano = $date->format('Y');
		$mes = $date->format('m');
		$dia = $date->format('d'); // Último día del mes

		// Definir un array con los nombres de los meses
		$meses = [
			 '01' => 'enero',
			 '02' => 'febrero',
			 '03' => 'marzo',
			 '04' => 'abril',
			 '05' => 'mayo',
			 '06' => 'junio',
			 '07' => 'julio',
			 '08' => 'agosto',
			 '09' => 'septiembre',
			 '10' => 'octubre',
			 '11' => 'noviembre',
			 '12' => 'diciembre'
		];

		// Convertir el mes numérico al nombre correspondiente
		$nombre_mes = $meses[$mes];*/

		// Definir un array con los nombres de las carteras
		$cartera = [
			 '1' => 'CARTERA CORRIENTE',
			 '2' => 'CARTERA PRESCRITA CSJ',
			 '3' => 'CARTERA PRESCRITA MINJUSTICIA',
			 '4' => 'CARTERA MINJUSTICIA',
			 '5' => 'CARTERA EJEMPLARIZANTE'
		];

		// Convertir el id cartera numérico al nombre correspondiente
		$cartera_nombre = $cartera[$ejecutivo_cartera ];


		  global $xt;


  		$sql = "		DECLARE @UserName VARCHAR(30) = '$U_user';
        DECLARE   @Desde    DATE = '$primer_dia';
        DECLARE   @Hasta    DATE = '$ultimo_dia';
        DECLARE   @Millones BIT = '0';
		DECLARE @Divisor INT = CASE
                                    WHEN @Millones = 1
                                    THEN 1e6
                                    ELSE 1
                                END;
        DECLARE @UserId INT=
        (
            SELECT UserId
            FROM UserProfile
            WHERE UserName = @Username
        );
        DECLARE @CarteraTipoId INT= '$ejecutivo_cartera';

        SET @Hasta = EOMONTH(@Hasta);
        WITH a
             AS (
             -- 3.    La Columna “PROCESOS ACTIVOS AL CORTE DEL PERIODO” (en sus subcolumnas Numero de Procesos y Valor), debe mostrar los valores al periodo de corte (Fecha Final)
             SELECT Seccionales.Seccional, 
                    SUM(ProcTota) AS ProcActi, 
                    SUM(ObliTota + CostTota + InteTota) AS ValoActi, 
                    0 AS ProcPendPres, 
                    0 AS ValoPendPres, 
                    0 AS ProcPresMes, 
                    0 AS ValoPresMes
             FROM Resumen
                  INNER JOIN Seccionales ON Resumen.SeccionalId = Seccionales.SeccionalId
             WHERE(Resumen.CarteraTipoId = @CarteraTipoId)
                  AND (Resumen.Hasta = @Hasta)
             GROUP BY Seccionales.Seccional
             UNION
             -- 4.    La Columna “PROCESOS PENDIENTES POR PRECRIBIR AL CORTE DEL PERIODO” (en sus subcolumnas Numero de Procesos y Valor), debe mostrar los valores al periodo de corte (Fecha Final)
             SELECT Seccionales.Seccional, 
                    0 AS ProcActi, 
                    0 AS ValoActi, 
                    COUNT(*) AS ProcPendPres, 
                    SUM(Historicos.Saldo) AS ValoPendPres, 
                    0 AS ProcPresMes, 
                    0 AS ValoPresMes
             FROM Historicos
                  INNER JOIN Seccionales ON Historicos.SeccionalId = Seccionales.SeccionalId
             WHERE(Historicos.CarteraTipoId = @CarteraTipoId)
                  AND (Historicos.Prescripcion < CASE
                                                     WHEN @Hasta = '2018-12-31'
                                                     THEN-60
                                                     ELSE 0
                                                 END)
                  AND (Historicos.EstadoId = 2)
                  AND (Historicos.Hasta = @Hasta)
             GROUP BY Seccionales.Seccional
             UNION
             -- 6.    La Columna “PROCESOS PRESCRITOS EN EL PERIODO”  (en sus subcolumnas Numero de Procesos y Valor), debe mostrar los procesos prescritos DURANTE el periodo DESDE/HASTA que el usuario ha introducido de acuerdo con descripción del numeral 1.
             SELECT Seccionales.Seccional, 
                    0 AS ProcActi, 
                    0 AS ValoActi, 
                    0 AS ProcPendPres, 
                    0 AS ValoPendPres, 
                    COUNT(*) AS ProcPresMes, 
                    SUM(Saldo) AS ValoPresMes
             FROM ProcesosView1 inner join Seccionales on Seccionales.SeccionalId = ProcesosView1.SeccionalId 
             WHERE(EstadoId = 6) -- Terminados
                  AND (MotivoId = 2) -- Prescripcion
                  AND (Terminacion BETWEEN @Desde AND @Hasta)
                  AND (CarteraTipoId = @CarteraTipoId)
             GROUP BY Seccionales.Seccional, ProcesosView1.SeccionalId )
             SELECT a_1.Seccional, 
                    SUM(a_1.ProcActi) AS ProcActi, 
                    SUM(a_1.ValoActi / @Divisor) AS ValoActi, 
                    SUM(a_1.ProcPendPres) AS ProcPendPres, 
                    SUM(a_1.ValoPendPres / @Divisor) AS ValoPendPres, 
                    SUM(a_1.ProcPresMes) AS ProcPresMes, 
                    SUM(a_1.ValoPresMes / @Divisor) AS ValoPresMes,
                    -- 5.    La Columna “ANALISIS % AL CORTE DEL PERIODO” (en sus subcolumnas Numero de Procesos y Valor), debe mostrar los porcentajes de participación de las columnas del numeral 4, con respecto a las del numeral 3
                    CASE
                        WHEN SUM(a_1.ProcActi) = 0
                        THEN 0
                        ELSE CONVERT(FLOAT, SUM(a_1.ProcPendPres)) / CONVERT(FLOAT, SUM(a_1.ProcActi))
                    END AS ProcAnal,
                    CASE
                        WHEN SUM(a_1.ValoActi) = 0
                        THEN 0
                        ELSE CONVERT(FLOAT, SUM(a_1.ValoPendPres)) / CONVERT(FLOAT, SUM(a_1.ValoActi))
                    END AS ValoAnal, 
                    CarteraTipos.CarteraTipo, 
                    @Desde Desde, 
                    @Hasta Hasta
             FROM a AS a_1
                  CROSS JOIN CarteraTipos
             WHERE(CarteraTipos.CarteraTipoId = @CarteraTipoId)
             GROUP BY a_1.Seccional, 
                      CarteraTipos.CarteraTipo
             --HAVING SUM(a_1.ProcActi) <> 0
             ORDER BY a_1.Seccional;";
		    // Define tu consulta SQL

    // Ejecuta la consulta
    $resultado = CustomQuery($sql);

		// Genera el inicio de la tabla HTML
		$htmlTable = '<div id="miContenedor" style="display: flex; margin-bottom: 20px;">';

		// Agrega el texto
		//$htmlTable .= '<div style="flex: 1; text-align: center; font-weight: bold; font-size: 16px;">';
		$htmlTable .= '<div style="flex: 1;">';
				// Agrega la imagen
		//$htmlTable .= '<img src="images/LogoCSJ.png" alt="Logo" style="width: 215px; height: 70px;">';
		$htmlTable .= '<img src="images/LogoCSJ.png" alt="Logo" style="width: 215px; height: 70px; float: left; margin-right: 20px;">';
		$htmlTable .= '<p style="display: block; text-align: center; font-weight: bold; font-size: 16px; margin-left: 235px;">';
		$htmlTable .= 'Dirección Ejecutiva de Administración Judicial<br>';
		$htmlTable .= 'Informe Ejecutivo de Gestión<br>';
	  $htmlTable .= 'Consolidado por Dirección Seccional<br>';
		$htmlTable .= 'Período: del '.$primer_dia.' al '.$ultimo_dia.'<br>';
		$htmlTable .= ''.$cartera_nombre.'';
		$htmlTable .= '</p>';




		// Agrega el título de la tabla
		$htmlTable .= '<table border="1" cellpadding="9" cellspacing="0" style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif;">';

		// Estilo de encabezado
		$htmlTable .= '<thead style="background-color: #d9d9d9; font-weight: bold; text-align: center;">';

		$htmlTable .= '<tr>';
		$htmlTable .= '<td rowspan="2" colspan="1" style="text-align: center; font-weight: bold;  background-color: #d9d9d9;">DIRECCION SECCIONAL</td>';
		$htmlTable .= '<td colspan="2" style="text-align: center; font-weight: bold;  background-color: #d9d9d9;">PROCESOS ACTIVOS AL CORTE DEL PERÍODO</td>';
		$htmlTable .= '<td colspan="2" style="text-align: center; font-weight: bold;  background-color: #d9d9d9;">PROCESOS PENDIENTES POR PRESCRIBIR AL CORTE DEL PERÍODO</td>';
		$htmlTable .= '<td colspan="2" style="text-align: center; font-weight: bold;  background-color: #d9d9d9;">ANÁLISIS % AL CORTE DEL PERÍODO</td>';
		$htmlTable .= '<td colspan="2" style="text-align: center; font-weight: bold;  background-color: #d9d9d9;">PROCESOS PRESCRITOS EN EL PERÍODO</td>';
		$htmlTable .= '</tr>';
		$htmlTable .= '<tr>';
		$htmlTable .= '<th style="text-align: center; width: 10%;">No. Proc.</th>';
		$htmlTable .= '<th style="text-align: center; width: 10%;">Valor</th>';
		$htmlTable .= '<th style="text-align: center; width: 10%;">No. Proc.</th>';
		$htmlTable .= '<th style="text-align: center; width: 10%;">Valor</th>';
		$htmlTable .= '<th style="text-align: center; width: 10%;">No. Proc.</th>';
		$htmlTable .= '<th style="text-align: center; width: 10%;">Valor</th>';
		$htmlTable .= '<th style="text-align: center; width: 10%;">No. Proc.</th>';
		$htmlTable .= '<th style="text-align: center; width: 10%;">Valor</th>';
		$htmlTable .= '</tr>';
		$htmlTable .= '</thead>';

		// Genera el cuerpo de la tabla
		$htmlTable .= '<tbody>';



		// Procesa los resultados y agrega las filas
		while ($data = db_fetch_array($resultado)) {



			 $htmlTable .= '<tr>';
			 $htmlTable .= '<td style="text-align: center;">' . htmlspecialchars($data['Seccional']) . '</td>';
			 $htmlTable .= '<td style="text-align: right;">' . htmlspecialchars(number_format($data['ProcActi'], 0, ',', '.')) . '</td>';
			 $htmlTable .= '<td style="text-align: right;">' . htmlspecialchars(number_format($data['ValoActi'], 0, ',', '.')) . '</td>';
			 $htmlTable .= '<td style="text-align: right;">' . htmlspecialchars(number_format($data['ProcPendPres'], 0, ',', '.')) . '</td>';
			 $htmlTable .= '<td style="text-align: right;">' . htmlspecialchars(number_format($data['ValoPendPres'], 0, ',', '.')) . '</td>';
			 $htmlTable .= '<td style="text-align: right;">' . htmlspecialchars(number_format(round($data['ProcAnal'] * 100, 2), 2, ',', '.')) . ' %</td>';
			 $htmlTable .= '<td style="text-align: right;">' . htmlspecialchars(number_format(round($data['ValoAnal'] * 100, 2), 2, ',', '.')) . ' %</td>';
			 $htmlTable .= '<td style="text-align: right;">' . htmlspecialchars(number_format($data['ProcPresMes'])) . '</td>';
			 $htmlTable .= '<td style="text-align: right;">' . htmlspecialchars(number_format($data['ValoPresMes'], 0, ',', '.')) . '</td>';
			 $htmlTable .= '</tr>';
				
				$TotalProAct += $data['ProcActi'];
				$TotalValoActi += $data['ValoActi'];
				$TotalProcPendPres += $data['ProcPendPres'];
				$TotalValoPendPres += $data['ValoPendPres'];
				$TotalProcAnal += $data['ProcAnal'];
				$TotalValoAnal += $data['ValoAnal'];
				$TotalProcPresMes += $data['ProcPresMes'];
				$TotalValoPresMes += $data['ValoPresMes'];

				
		}
		
		$htmlTable .= '<tr>';
		$htmlTable .= '<th style="text-align: center; width: 10%; bold;">TOTAL</th>';
		$htmlTable .= '<th style="text-align: right; width: 10%; bold;">' . htmlspecialchars(number_format($TotalProAct, 0, ',', '.')) . '</th>';
		$htmlTable .= '<th style="text-align: right; width: 10%; bold;">' . htmlspecialchars(number_format($TotalValoActi, 0, ',', '.')) . '</th>';
		$htmlTable .= '<th style="text-align: right; width: 10%; bold;">' . htmlspecialchars(number_format($TotalProcPendPres, 0, ',', '.')) . '</th>';
		$htmlTable .= '<th style="text-align: right; width: 10%; bold;">' . htmlspecialchars(number_format($TotalValoPendPres, 0, ',', '.')) . '</th>';
		$htmlTable .= '<th style="text-align: right; width: 10%; bold;">' . htmlspecialchars(number_format(($TotalProcPendPres/$TotalProAct)* 100, 2) , 2, ',', ',') .'%'. '</th>';
		$htmlTable .= '<th style="text-align: right; width: 10%; bold;">' . htmlspecialchars(number_format(($TotalValoPendPres/$TotalValoActi)* 100, 2) , 2, ',', ',') .'%'. '</th>';
		$htmlTable .= '<th style="text-align: right; width: 10%; bold;">' . htmlspecialchars(number_format($TotalProcPresMes, 0, ',', '.')) . '</th>';
		$htmlTable .= '<th style="text-align: right; width: 10%; bold;">' . htmlspecialchars(number_format($TotalValoPresMes, 0, ',', '.')) . '</th>';
		$htmlTable .= '</tr>';

		$htmlTable .= '</tbody>';
		$htmlTable .= '</table>';
		$htmlTable .= '</div>';
		$htmlTable .= '</div>'; // Cierra el div flex


		// Asigna el HTML generado a una variable para usarla en la plantilla
		$xt->assign("mi_tabla_html", $htmlTable);

		return true; // Devuelve true para continuar con el proceso

;
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>