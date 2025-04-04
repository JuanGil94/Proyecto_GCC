<?php
$securitySettings_var = array( 'providers' => array( array( 'type' => '%db',
'activationField' => 'active',
'active' => true,
'code' => '00',
'emailField' => 'email',
'extUserIdField' => 'ext_security_id',
'fullnameField' => 'fullname',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'password',
'resetDateField' => 'reset_date',
'resetTokenField' => 'reset_token',
'table' => array( 'connId' => 'GCC_at_S00001_CCAD01',
'table' => 'dbo.UsuGCC-_users' ),
'userGroupField' => 'UserName',
'usernameField' => 'username',
'userpicField' => '' ) ),
'sessionControl' => array( 'lifeTime' => 15,
'sessionName' => 'FdIHCRqbCXEuOx1yvW3v',
'JWTSecret' => 'ibM3D3ojrsLt0VHyTPKD',
'forceExpire' => true,
'keepAlive' => false,
'warnExpire' => true ),
'registration' => array( 'passwordValidation' => array( 'strong' => true,
'minimumLength' => 8,
'uniqueCharacters' => 1,
'digitsAndSymbols' => 2,
'upperAndLowerCase' => true ),
'remindMethod' => 1,
'hashAlgorithm' => 0,
'adminEmail' => 'evargasri@deaj.ramajudicial.gov.co',
'caseInsensitiveLogin' => true,
'changePasswordPage' => true,
'changePwdPage' => true,
'hashPassword' => true,
'notifyAdmin' => true,
'notifyUser' => true,
'registerPage' => false,
'remindPage' => true,
'remindPasswordPage' => true,
'sendActivationLink' => true ),
'captchaSettings' => array( 'captchaType' => 0,
'siteKey' => '',
'secretKey' => '',
'passesCount' => 5 ),
'emailSettings' => array( 'fromEmail' => 'soportecobrocoactivo@deaj.ramajudicial.gov.co',
'usePHPDefinedSMTP' => false,
'useBuiltInMailer' => false,
'SMTPServer' => 'smtp.office365.com',
'SMTPPort' => 587,
'SMTPUser' => 'appcobrocoactivo@deaj.ramajudicial.gov.co',
'SMTPPassword' => 'C1av3C06r0*',
'securityProtocol' => 2 ),
'advancedSecurity' => array( 'allowGuestLogin' => true,
'tables' => array( 'Actuaciones Por Mes' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Acuerdo de Pago' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'AlertBusqBienes' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'AlertIncAcuPago' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'AlertIntSusp' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'AlertNotMandPago' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'AlertSegAdelante' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'AlertSinPersuasivo' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Actualización' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Actualización DataChild' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Cancelación Acuerdo de Pago' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Cancelación Acuerdo de Pago DataChild' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Excluidos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Excluidos DataChild' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Guía del Deudor Moroso' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Incumplimiento Acuerdo de Pago Semestral' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Incumplimiento Acuerdo de Pago Semestral DataChild' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Reporte Semestral' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Reporte Semestral Datachild' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Retiros' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BDME Retiros DataChild' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Base de Datos - Historico' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BienesInmuebles' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'BienesMuebles' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Certificado del Resumen Mensual' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Certificado del Resumen por Periodo' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Clasificaciones -- Cartera' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Consolidado por Conceptos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Consulta Publica' => array( 'mainOwnerIDField' => 'SancionadoId',
'securityOption' => 0,
'userOwnerIDField' => 'ID' ),
'Consulta Publica Generacion Desprendible' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Consulta Publica Notificacion Detalle' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Corporaciones - Especialidades' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Cumplimiento de metas de Recaudo' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Deterioro de Cartera por Proceso' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Indicadores Recaudos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Indicadores Sin Actuaciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Indicadores de Gestión' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Indicadores de búsqueda' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Informe ejecutivo de Gestión' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Intereses por Proceso' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Listado Medidas Cautelares' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Listado de Chequeo Motivo devolucion DataChild' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Listado de Chequeo Oficios DataChild' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Listado de Chequeo Sancionado DataChild' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Listado de Chequeos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'MandamientoAutomatico' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Mandamientos de pago Automaticos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Movimiento Mensual' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Obligaciones de Dificil Recaudo' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'PrescripcionAutomatica' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Prescripciones Automática' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Presunción Prescripción' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Privados de la Libertad' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Procesos - Mes' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Procesos Sin Notificación' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Productos Bancarios' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Prueba Archivo Plano' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Recaudo - Mes' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Recaudo Por Seccional' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Recaudos por Años' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Remanentes-' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Reportes' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Reportes DataChild prescritos con resolución expedida_Solidarios' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Reportes DataChild prescritos con resolución expedida_Solidarios_Bienes' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Resumen_Mensual' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Tablero de Control General' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Tablero de Control Gestión' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Tablero de Control Total Procesos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Tableros_RecaudoSeccional' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Tasas Comerciales' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Tasas TES (Deterioro de Cartera)' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Tasas Tributarias' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Test de Deterioro (Resumen)' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Total Procesos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Total Recaudado' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'Transacciones Usuario' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'admin_admembers' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Abogados' => array( 'mainOwnerIDField' => 'AbogadoId',
'securityOption' => 0,
'userOwnerIDField' => 'ID' ),
'dbo.Actas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Actuaciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Acuerdos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.AlertMandPago' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Alertas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.AlertasOficios' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.AlertasTipos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Aplazamientos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Auditorias' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.AuditoriasProcesosView' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Autorizaciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Ayudas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Bancos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.BusquedasPropiedades' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Calificaciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Carceles' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.CarteraTipos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Chequeos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ChequeosOficios' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ChequeosSancionados' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Ciudades' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Ciudades1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Ciudades2' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Ciudades3' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Ciudades4' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Ciudades5' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Conceptos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Conceptos1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Conceptos2' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.CorporacionesView' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.CorrespondenciaMasiva' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Correspondencias' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Cuentas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Departamentos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Despachos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Despachos1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Despachos2' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Despachos4' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Despachos5' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Devoluciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Direcciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Empresas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Entidades' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Especialidades' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Estados' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Estados1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Etapas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Etapas1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Fechas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Festivos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Genero' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Horarios' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.IPsRestringidas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Importaciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Indeterminados' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Intereses' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Interrupciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Liquidaciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ListaChequeosReporte' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Llamadas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Medidas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Menus' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Minjusticia' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Minjusticia2' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Minjusticia3' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Motivos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Motivos1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.MotivosDevoluciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Naturalezas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Naturalezas1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Niveles' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Niveles1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Niveles2' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Novedades' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Oficios' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Oficios Sigobius' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Oficios1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Operaciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Pagos1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Pagos2' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Parejas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Prescritos Report' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Presupuestos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Procesos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ProcesosCorrespondencias' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ProcesosPrescritos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ProcesosReasignar' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ProcesosSancionados' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ProcesosSinNotificaReport' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ProcesosView1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Propiedades' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Propiedades1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Propiedades2' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Propiedades3' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.PropiedadesMedidas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Reasignaciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Reliquidaciones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Remanentes Report' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ReporteClasificacionCartera' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ReporteCorporaciónEspecialidad' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.ReporteMandamientos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Reportes' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Salarios' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Sancionados' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Seccional_ProcesosView1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Seccionales' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Seccionales1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Seguimiento y control de Acuerdos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Solidarios' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Suspensiones' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Suspensiones1' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Temas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Test' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.TiposDocumentos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Tramites' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.UserProfile' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.UsuGCC-_users' => array( 'mainOwnerIDField' => 'ID',
'securityOption' => 0,
'userOwnerIDField' => 'ID' ),
'dbo.UsuGCC-uggroups' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.UsuGCC-ugmembers' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.UsuariosCarteraTipos' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.UsuariosSeccionales' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Uvbs' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.Uvts' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.codificadoresDespacho' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.despachosSigob' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.tipoCobro' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.tipoRecaudo' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.tipoTasas' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.tiposNovedades' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.usugcc-_audit' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.usugcc__noti' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.webpages_Roles' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ),
'dbo.webpages_UsersInRoles' => array( 'mainOwnerIDField' => '',
'securityOption' => 0,
'userOwnerIDField' => '' ) ) ),
'auditAndLocking' => array( 'loggingTable' => array( 'connId' => 'GCC_at_S00001_CCAD01',
'table' => 'dbo.usugcc-_audit' ),
'lockingTable' => array( 'connId' => 'GCC_at_S00001_CCAD01',
'table' => '˂Create new˃' ),
'tables' => array( 'AlertBusqBienes' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'AlertIncAcuPago' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'AlertIntSusp' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'AlertNotMandPago' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'AlertSegAdelante' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'AlertSinPersuasivo' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'Tasas Comerciales' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'Tasas TES (Deterioro de Cartera)' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'Tasas Tributarias' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'admin_admembers' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'admin_members' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'admin_rights' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'admin_users' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Abogados' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Actas' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Actuaciones' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Acuerdos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.AlertMandPago' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Alertas' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.AlertasTipos' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Auditorias' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.AuditoriasProcesosView' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Autorizaciones' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Ayudas' => array( 'logFieldValues' => false,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Bancos' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Carceles' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.CarteraTipos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Chequeos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.ChequeosOficios' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.ChequeosSancionados' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Ciudades' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Ciudades1' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Conceptos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Conceptos1' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.CorporacionesView' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Correspondencias' => array( 'logFieldValues' => false,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Correspondencias1' => array( 'logFieldValues' => false,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Cuentas' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Departamentos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Despachos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Despachos1' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Despachos4' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Devoluciones' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Direcciones' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Empresas' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Entidades' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Especialidades' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Estados' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Etapas' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Fechas' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Festivos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Genero' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Horarios' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.IPsRestringidas' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Importaciones' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Indeterminados' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Intereses' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Interrupciones' => array( 'logFieldValues' => false,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Liquidaciones' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Llamadas' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Medidas' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Menus' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Minjusticia' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Minjusticia2' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Minjusticia3' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Motivos' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.MotivosDevoluciones' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Naturalezas' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Niveles' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Oficios' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Oficios Sigobius' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Oficios1' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.OperacionTipo' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Operaciones' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Pagos1' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Parejas' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Presupuestos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Procesos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.ProcesosPrescritos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.ProcesosReasignar' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Propiedades' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Propiedades1' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Propiedades3' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Reasignaciones' => array( 'logFieldValues' => false,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Reliquidaciones' => array( 'logFieldValues' => false,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Reportes' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Salarios' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Sancionados' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.Seccionales' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Solidarios' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Suspensiones' => array( 'logFieldValues' => false,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Suspensiones1' => array( 'logFieldValues' => false,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Temas' => array( 'logFieldValues' => false,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Test' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.TiposDocumentos' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Tramites' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.UserProfile' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.UsuGCC-_users' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.UsuGCC-uggroups' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.Uvts' => array( 'logFieldValues' => true,
'logModifications' => true,
'recordLocking' => false ),
'dbo.tipoCobro' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ),
'dbo.usugcc-_audit' => array( 'logFieldValues' => false,
'logModifications' => true,
'recordLocking' => false ),
'dbo.usugcc__noti' => array( 'logFieldValues' => false,
'logModifications' => false,
'recordLocking' => false ) ),
'loggingMode' => 1,
'loggingFile' => 'audit.log',
'logSecurityActions' => true,
'lockAfterUnsuccessfulLogin' => false,
'enableLocking' => false ),
'twoFactorSettings' => array( 'available' => false,
'required' => false,
'enable' => true,
'remember' => true,
'types' => array(  ),
'twoFactorField' => '˂Create new˃',
'emailField' => 'Email',
'phoneField' => '˂Create new˃',
'codeField' => '˂Create new˃',
'projectName' => 'UsuGCC-' ),
'projectName' => 'UsuGCC-',
'loginDataSource' => 'dbo.UsuGCC-_users',
'loginForm' => 1,
'dynamicPermissions' => true,
'dpTablePrefix' => 'dbo.UsuGCC-',
'dpTableConnId' => 'GCC_at_S00001_CCAD01',
'hardcodedLogin' => false,
'enabled' => true,
'advancedSecurityAvailable' => true,
'userGroupsAvailable' => true,
'defaultProviderCode' => '00',
'adOnlyLogin' => false,
'dbProvider' => array( 'type' => '%db',
'activationField' => 'active',
'active' => true,
'code' => '00',
'emailField' => 'email',
'extUserIdField' => 'ext_security_id',
'fullnameField' => 'fullname',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'password',
'resetDateField' => 'reset_date',
'resetTokenField' => 'reset_token',
'table' => array( 'connId' => 'GCC_at_S00001_CCAD01',
'table' => 'dbo.UsuGCC-_users' ),
'userGroupField' => 'UserName',
'usernameField' => 'username',
'userpicField' => '' ),
'adAdminGroups' => array(  ),
'showUserSource' => false,
'dbProviderCodes' => array( '00' ),
'notifications' => array( 'enabled' => true,
'table' => array( 'connId' => 'GCC_at_S00001_CCAD01',
'table' => 'dbo.usugcc__noti' ) ) );
?>