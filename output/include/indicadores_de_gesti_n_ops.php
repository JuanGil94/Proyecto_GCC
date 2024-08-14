<?php
$topsindicadores_de_gesti_n = array();
		$topsindicadores_de_gesti_n["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO [Presunción Prescripción] (

)
VALUES
(

)"
	);
				$topsindicadores_de_gesti_n["selectList"] = array(
		"subtype" => "sql",
		"sql" => "DECLARE @Ano INT = ':session.indicadores_ano';
DECLARE @Username VARCHAR(30) = ':session.UserNameF';

DECLARE @CarteraTipoId INT = (
    SELECT CarteraTipoId
    FROM UserProfile
    WHERE UserProfile.UserName = @Username
);

WITH ProcesosData AS (
    SELECT 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Procesos.Fecha) AS Ano,
        MONTH(Procesos.Fecha) AS MesNumero,
        DATENAME(MONTH, Procesos.Fecha) AS Mes,
        COUNT(*) AS Procesos,
        SUM(Procesos.Obligacion) AS Valor,
        0 AS Recaudo
    FROM Procesos
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
    WHERE YEAR(Procesos.Fecha) = @Ano
        AND Procesos.CarteraTipoId = @CarteraTipoId
    GROUP BY 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Procesos.Fecha),
        MONTH(Procesos.Fecha),
        DATENAME(MONTH, Procesos.Fecha)
    
    UNION ALL
    
    SELECT 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Pagos.Registro) AS Ano,
        MONTH(Pagos.Registro) AS MesNumero,
        DATENAME(MONTH, Pagos.Registro) AS Mes,
        0 AS Procesos,
        0 AS Valor,
        SUM(Pagos.Pago) AS Recaudo
    FROM Pagos1 Pagos
    INNER JOIN Procesos ON Pagos.ProcesoId = Procesos.ProcesoId
    INNER JOIN Seccionales ON Procesos.SeccionalId = Seccionales.SeccionalId
    INNER JOIN Cuentas ON Pagos.CuentaId = Cuentas.CuentaId
    INNER JOIN Despachos ON Procesos.DespachoId = Despachos.DespachoId
    WHERE Cuentas.Activa = 1
        AND Procesos.CarteraTipoId = @CarteraTipoId
    GROUP BY 
        Seccionales.Seccional,
        Despachos.Codigo,
        Despachos.Despacho,
        YEAR(Pagos.Registro),
        MONTH(Pagos.Registro),
        DATENAME(MONTH, Pagos.Registro)
    HAVING YEAR(Pagos.Registro) = @Ano
)

SELECT 
    A.Seccional,
    CASE 
        WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
        WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
        WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
        WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
        WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
        WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
        WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
        WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
        ELSE A.Despacho
    END AS Juzgados,
    A.Mes,
    SUM(A.Procesos) AS Procesos,
    SUM(A.Valor) AS Valor,
    SUM(A.Recaudo) AS Recaudo,
    SUM(A.Valor) - SUM(A.Recaudo) AS Saldo
FROM ProcesosData A
WHERE A.Despacho LIKE '%PENAL%'
GROUP BY 
    A.Seccional,
    CASE 
        WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
        WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
        WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
        WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
        WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
        WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
        WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
        WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
        ELSE A.Despacho
    END,
    A.MesNumero,
    A.Mes
ORDER BY 
    A.Seccional, 
    CASE 
        WHEN A.Despacho LIKE '%CIRCUITO%' THEN 'CIRCUITO'
        WHEN A.Despacho LIKE '%MUNICIPAL%' THEN 'MUNICIPALES'
        WHEN A.Despacho LIKE '%CORTE%' THEN 'CORTE SUPREMA'
        WHEN A.Despacho LIKE '%TRIBUNAL%' THEN 'TRIBUNALES'
        WHEN A.Despacho LIKE '%ESPECIALIZADO%' THEN 'ESPECIALIZADOS'
        WHEN A.Despacho LIKE '%MENORES%' THEN 'MENORES'
        WHEN A.Despacho LIKE '%GARANTÍA%' THEN 'GARANTIAS'
        WHEN A.Despacho LIKE '%ADOLESCENTES%' THEN 'ADOLESCENTES'
        ELSE A.Despacho
    END,
    A.MesNumero; 
"
	);
		$tables_data["Indicadores de Gestión"][".operations"] = &$topsindicadores_de_gesti_n;
?>