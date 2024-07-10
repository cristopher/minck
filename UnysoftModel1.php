<?php

class UnysoftModel
{

    public static function getAllConsorcio()
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT conEmpresa, conDescripcion, conEtapa, conConjunto FROM venConjuntoEtapas";
        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public static function getUnidadesHabitacionales($uniEtapa, $uniEmpresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [venUnidadesHab].[uniConsorcio], [venUnidadesHab].[uniEmpresa], [venUnidadesHab].[uniConjunto], [venUnidadesHab].[uniEtapa], [venUnidadesHab].[uniCodigo], [venUnidadesHab].[uniCliente], [maeCliente].[cliRazonSocial], [venUnidadesHab].[uniDireccion], [venUnidadesHab].[uniNumero]
        , [venUnidadesHab].[uniFechaEntrega], [venUnidadesHab].[uniUnidadBien], [venUnidadesHab].[uniCuentaContable], [venUnidadesHab].[uniTipoBien], [venUnidadesHab].[uniFactura], [venUnidadesHab].[uniFechaFac], [venUnidadesHab].[uniEstadoCliente]
        , [venUnidadesHab].[uniFechaReservado], [venUnidadesHab].[uniFechaAcordado], [venUnidadesHab].[uniFechaPrometido], [venUnidadesHab].[uniFechaTransferido], [venUnidadesHab].[uniEnArriendo], [venUnidadesHab].[uniFechaArriendo]
        , [venUnidadesHab].[uniUbicacion], [venUnidadesHab].[uniVivienda], [venUnidadesHab].[uniTerreno], [venUnidadesHab].[uniVTerreno], [venUnidadesHab].[uniAvaluoFiscal], [venUnidadesHab].[uniExcentoFiscal], [venUnidadesHab].[uniAfectoFiscal]
        , [venUnidadesHab].[uniCosto], [venUnidadesHab].[uniFechaCosto], [venUnidadesHab].[uniValor], [venUnidadesHab].[uniMasMenos], [venUnidadesHab].[uniSigno], [venUnidadesHab].[uniFecha], [venUnidadesHab].[uniValor2], [venUnidadesHab].[uniMasMenos2], [venUnidadesHab].[uniSigno2]
        , [venUnidadesHab].[uniFecha2], [venUnidadesHab].[uniValor3], [venUnidadesHab].[uniTopeDescuento], [venUnidadesHab].[uniFechaTopeDescuento], [venUnidadesHab].[uniDescuento], [venUnidadesHab].[uniLeasing], [venUnidadesHab].[uniContado]
        , [venUnidadesHab].[uniObservacion], [venUnidadesHab].[uniFechaMuni], [venUnidadesHab].[uniCodigoMuni], [venUnidadesHab].[uniTextoMuni], [venUnidadesHab].[uniRol], [venUnidadesHab].[uniFechaCert], [venUnidadesHab].[uniCodigoCert]
        , [venUnidadesHab].[uniTextoCert], [venUnidadesHab].[uniCompañia], [venUnidadesHab].[uniTipo], [venUnidadesHab].[uniPoliza], [venUnidadesHab].[uniVencimiento], [venUnidadesHab].[uniMonto], [venUnidadesHab].[uniNorte], [venUnidadesHab].[uniSur], [venUnidadesHab].[uniEste]
        , [venUnidadesHab].[uniOeste], [venUnidadesHab].[uniNorEste], [venUnidadesHab].[uniNorOeste], [venUnidadesHab].[uniSurEste], [venUnidadesHab].[uniSurOeste], [venUnidadesHab].[uniTazado], [venUnidadesHab].[uniFechaInicio], [venUnidadesHab].[uniFechaLiberacion]
        , [venUnidadesHab].[uniAvaluoBancario], [venUnidadesHab].[uniAvaluoComercial], [venUnidadesHab].[uniPorcentajeGarantia], [venUnidadesHab].[uniGarantia1], [venUnidadesHab].[uniGarantia2], [venUnidadesHab].[uniGarantia3]
        , [venUnidadesHab].[uniProveedorGarantia], [venUnidadesHab].[uniPropiedadFoja], [venUnidadesHab].[uniPropiedadNumero], [venUnidadesHab].[uniPropiedadFecha], [venUnidadesHab].[uniHipotecaFoja]
        , [venUnidadesHab].[uniHipotecaNumero], [venUnidadesHab].[uniHipotecaFecha], [venUnidadesHab].[uniGraProhFoja], [venUnidadesHab].[uniGraProhNumero], [venUnidadesHab].[uniGraProhFecha], [venUnidadesHab].[uniEscritura]
        , [venUnidadesHab].[uniFechaEscritura], [venUnidadesHab].[uniAlzamiento], [venUnidadesHab].[uniFechaAlzamiento], [venUnidadesHab].[uniPromesa], [venUnidadesHab].[uniFechaPromesa], [venUnidadesHab].[uniAsociado]
        , [venUnidadesHab].[uniMetrajeEspecial], [venUnidadesHab].[uniNivel], [venUnidadesHab].[uniFoto], [venUnidadesHab].[uniFoto2], [venUnidadesHab].[uniFoto3], [venUnidadesHab].[uniFoto4], [venUnidadesHab].[uniFechaPreEntrega], [venUnidadesHab].[uniFechaConformidad]
        , [venUnidadesHab].[uniFechaTerGarantia], [venUnidadesHab].[uniEncargado], [venUnidadesHab].[uniManzana], [venUnidadesHab].[uniAsignada], [venUnidadesHab].[uniX], [venUnidadesHab].[uniY], [venUnidadesHab].[uniLote], [venUnidadesHab].[uniSitio], [venUnidadesHab].[uniSupInterior]
        , [venUnidadesHab].[uniSupLoggia] FROM [venUnidadesHab] LEFT JOIN [maeCliente] ON [maeCliente].[cliRut] = [venUnidadesHab].[uniCliente]
        WHERE [venUnidadesHab].[uniEtapa] = :uniEtapa and [venUnidadesHab].[uniEmpresa] = :uniEmpresa ORDER BY [venUnidadesHab].[uniUnidadBien]";
        $query = $database->prepare($sql);
        $query->execute(array(':uniEtapa' => $uniEtapa, ':uniEmpresa' => $uniEmpresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getUnidadesHabitacionalesSuma($uniEtapa, $uniEmpresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $resultado = new stdClass();

        $losDepas = [];

        $sql = "SELECT SUM([T1].[ingMontoUf]) as final
            FROM(
                SELECT [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                FROM [UNYSOFT].[dbo].[venOperaciones]
                INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
                WHERE  [venOperaciones].[opeEmpresa] = :uniEmpresa AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = :uniEtapa 
                GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres]) as T1";

        $query = $database->prepare($sql);
        $query->execute(array(':uniEtapa' => $uniEtapa, ':uniEmpresa' => $uniEmpresa));

        $losDepas = $query->fetch(PDO::FETCH_ASSOC);
        $total = floatval($losDepas["final"]);

        $resultado->vendido = $total;

        $sql = "SELECT sum(total - uniDescuento) as final FROM (

            SELECT [venUnidadesHab].[uniEmpresa],[venUnidadesHab].[uniConjunto],[venUnidadesHab].[uniEtapa],[venUnidadesHab].[uniCodigo],
            [venUnidadesHab].[uniEstadoCliente],[venUnidadesHab].[uniValor],[venUnidadesHab].[uniValor2],
            [venUnidadesHab].[uniValor3],[venUnidadesHab].[uniTopeDescuento],[venUnidadesHab].[uniDescuento], 
            CASE WHEN [venUnidadesHab].[uniValor3] > 0 THEN 
            [venUnidadesHab].[uniValor3] ELSE (CASE WHEN [venUnidadesHab].[uniValor2] > 0 THEN
             [venUnidadesHab].[uniValor2] ELSE [venUnidadesHab].[uniValor] END) END AS total 
             FROM [UNYSOFT].[dbo].[venUnidadesHab] 
             WHERE [venUnidadesHab].[uniEmpresa] = :uniEmpresa AND [venUnidadesHab].[uniEtapa] = :uniEtapa AND uniEstadoCliente IN ('N', 'R') ) as t1
            ";
        $query = $database->prepare($sql);
        $query->execute(array(':uniEtapa' => $uniEtapa, ':uniEmpresa' => $uniEmpresa));

        $valorTemporal = $query->fetch(PDO::FETCH_ASSOC);

        $resultado->total = floatval($valorTemporal["final"]) + $total;
        $resultado->vender = $resultado->total - $resultado->vendido;

        return $resultado;
    }

    public static function getRecibido($uniEtapa, $uniEmpresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $resultado = new stdClass();

        $sql = "SELECT (SUM(total) - SUM(descuento)) as Final FROM (SELECT CASE WHEN uniValor3 > 0 THEN uniValor3 ELSE (CASE WHEN uniValor2 > 0 THEN uniValor2 ELSE uniValor END) END AS total, uniDescuento AS descuento FROM [UNYSOFT].[dbo].[venUnidadesHab] where uniEmpresa = :uniEmpresa AND uniEtapa = :uniEtapa ) as T1";
        $query = $database->prepare($sql);
        $query->execute(array(':uniEtapa' => $uniEtapa, ':uniEmpresa' => $uniEmpresa));

        $resultado->total = $query->fetch(PDO::FETCH_ASSOC);

        $sql = "SELECT (SUM(total) - SUM(descuento)) as Final FROM (SELECT CASE WHEN uniValor3 > 0 THEN uniValor3 ELSE( CASE WHEN uniValor2 > 0 THEN uniValor2 ELSE uniValor END ) END AS total, uniDescuento AS descuento FROM [UNYSOFT].[dbo].[venUnidadesHab] where uniEmpresa = :uniEmpresa AND uniEtapa = :uniEtapa AND uniEstadoCliente IN ('T', 'P', 'A')) as T1";
        $query = $database->prepare($sql);
        $query->execute(array(':uniEtapa' => $uniEtapa, ':uniEmpresa' => $uniEmpresa));

        $resultado->vendido = $query->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public static function getIngresos($uniEtapa, $uniEmpresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [ingConsorcio], [ingEmpresa], [ingIdRegistro], [ingCliente]
        , [ingReserva], [ingConjunto], [ingFecha], [ingMonto], [ingMontoUf]
        , [ingInteres], [ingObservacion], [ingComprobanteUnyven], [ingComprobanteUnyfin]
        , [ingUsuarioActivo], [ingFechaUsuario], [ingEtapa], [conIdConjunto]
        , [ingSalaVenta], [ingEstado], [ingFechaAnulado], [ingUsuarioAnulado]
        , [ingObsAnulado], [ingFechaCambio], [ingRegistroProtesto]
        FROM venIngresos WHERE ingEtapa = :ingEtapa and ingEmpresa = :ingEmpresa ORDER BY ingCliente";
        $query = $database->prepare($sql);
        $query->execute(array(':ingEtapa' => $uniEtapa, ':ingEmpresa' => $uniEmpresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getIngresosRecibidos($uniEtapa, $uniEmpresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

       $sql = "
       SELECT SUM(t3.total) as final FROM (
                                  
           SELECT [T1].[opeEmpresa],[T1].[opeEtapa],[T1].[opeCliente],[T1].[opeReserva],[T1].[opeIdRegistro],
           
           CASE WHEN [T2].[ingMontoUf] >= [T1].[ingMontoUf] THEN 
       [T1].[ingMontoUf] ELSE [T2].[ingMontoUf] END AS total
           FROM (
               SELECT [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
               FROM [UNYSOFT].[dbo].[venOperaciones]
               INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
               WHERE  [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' 
               GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres]
           ) as T1
           INNER JOIN (
               SELECT [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
               FROM [UNYSOFT].[dbo].[venOperaciones]
               INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = -1
               WHERE  [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' 
               GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres]
           ) as T2 ON [T1].[opeEmpresa] = [T2].[opeEmpresa] AND [T1].[opeCliente] = [T2].[opeCliente] AND [T1].[opeReserva] = [T2].[opeReserva]) as t3";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC)["final"];
    }

    public static function getPagosFuturos($uniEtapa, $uniEmpresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [venIngresosDetalle].[ingFechaVencimiento],[venIngresos].[ingCliente],[maeCliente].[cliRazonSocial],[venIngresosDetalle].[ingMontoUF],[venIngresosDetalle].[ingMontoPesos],[venIngresosDetalle].[ingGlosa] FROM [UNYSOFT].[dbo].[venIngresosDetalle] INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venIngresos].[ingIdRegistro] = [venIngresosDetalle].[ingIdRegistro] LEFT JOIN [UNYSOFT].[dbo].[maeCliente] ON [maeCliente].[cliRut] = [venIngresos].[ingCliente] WHERE [venIngresosDetalle].[ingIdRegistro] IN (SELECT [venIngresos].[ingIdRegistro] FROM [UNYSOFT].[dbo].[venOperaciones] INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venIngresos].[ingCliente] = [venOperaciones].[opeCliente] AND [venIngresos].[ingEmpresa] = [venOperaciones].[opeEmpresa] AND [venOperaciones].[opeEtapa] = [venIngresos].[ingEtapa] AND [venIngresos].[ingReserva] = [venOperaciones].[opeReserva] AND [venIngresos].[ingInteres] = -1 WHERE [venOperaciones].[opeEmpresa] = :ingEmpresa AND [venOperaciones].[opeEtapa] = :ingEtapa AND [venOperaciones].[opeAnulado] = 'N' ) AND ([venIngresosDetalle].[ingPagado] <> 'S' OR [venIngresosDetalle].[ingPagado] iS NULL) order by [maeCliente].[cliRazonSocial]";

        $query = $database->prepare($sql);
        $query->execute(array(':ingEtapa' => $uniEtapa, ':ingEmpresa' => $uniEmpresa));

        $losIngresos = $query->fetchAll(PDO::FETCH_ASSOC);

        $losResultados = [];

        foreach($losIngresos as $key => $value) {
            $source = $value["ingFechaVencimiento"];

            $año = substr($source, -4);
            $dia = substr($source, 0,2);
            $mes = substr($source, 2,2);
            $date = new DateTime($año .'-'.$mes.'-'.$dia);
            $f1 = new DateTime("-4 Month");
            $f2 = new DateTime("+1 Month");

            if (($date > $f1) && ($date < $f2)){
                $losResultados[count($losResultados)] = $value;
            }
        }

        return $losResultados;
    }

    public static function getPagosFuturosTotal($uniEtapa, $uniEmpresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [venIngresosDetalle].[ingFechaVencimiento],[venIngresos].[ingCliente],[maeCliente].[cliRazonSocial],[venIngresosDetalle].[ingMontoUF],[venIngresosDetalle].[ingMontoPesos],[venIngresosDetalle].[ingGlosa] FROM [UNYSOFT].[dbo].[venIngresosDetalle] INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venIngresos].[ingIdRegistro] = [venIngresosDetalle].[ingIdRegistro] LEFT JOIN [UNYSOFT].[dbo].[maeCliente] ON [maeCliente].[cliRut] = [venIngresos].[ingCliente] WHERE [venIngresosDetalle].[ingIdRegistro] IN (SELECT [venIngresos].[ingIdRegistro] FROM [UNYSOFT].[dbo].[venOperaciones] INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venIngresos].[ingCliente] = [venOperaciones].[opeCliente] AND [venIngresos].[ingEmpresa] = [venOperaciones].[opeEmpresa] AND [venOperaciones].[opeEtapa] = [venIngresos].[ingEtapa] AND [venIngresos].[ingReserva] = [venOperaciones].[opeReserva] AND [venIngresos].[ingInteres] = -1 WHERE [venOperaciones].[opeEmpresa] = :ingEmpresa AND [venOperaciones].[opeEtapa] = :ingEtapa AND [venOperaciones].[opeAnulado] = 'N' ) AND ([venIngresosDetalle].[ingPagado] <> 'S' OR [venIngresosDetalle].[ingPagado] iS NULL) order by [maeCliente].[cliRazonSocial]";

        $query = $database->prepare($sql);
        $query->execute(array(':ingEtapa' => $uniEtapa, ':ingEmpresa' => $uniEmpresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function getAllDeudas($uniEtapa, $uniEmpresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [consolidado].[opeCliente],[consolidado].[opeReserva],[consolidado].[cliRazonSocial],[consolidado].[ingMontoPesos],[consolidado].[Haber],[consolidado].[Saldo]
        FROM (
  SELECT [Debe].[opeCliente],[Debe].[opeReserva],[Debe].[cliRazonSocial],[Debe].[ingMontoPesos],[Haber].[Haber],([Debe].[ingMontoPesos] - [Haber].[Haber]) as Saldo
  FROM(SELECT [venOperaciones].[opeCliente],[venOperaciones].[opeReserva],LOWER([maeCliente].[cliRazonSocial]) as cliRazonSocial,[venIngresosDetalle].[ingMontoPesos]
    FROM [UNYSOFT].[dbo].[venOperaciones] 
    INNER JOIN  [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND
    [venOperaciones].[opeEtapa] = [venIngresos].[ingEtapa] AND [venOperaciones].[opeFecha] = [venIngresos].[ingFecha]
  
    INNER JOIN [UNYSOFT].[dbo].[venIngresosDetalle] ON [venIngresosDetalle].[ingIdRegistro] = [venIngresos].[ingIdRegistro]
    INNER JOIN [UNYSOFT].[dbo].[maeCliente] ON [venOperaciones].[opeCliente] = [maeCliente].[cliRut]
    where [venOperaciones].[opeEmpresa] = ".$uniEmpresa." and [venOperaciones].[opeEtapa] = ".$uniEtapa." and[venOperaciones].[opeAnulado] = 'N' AND  [venIngresos].[ingInteres] = 0 AND
    [venIngresosDetalle].[ingCodigoFormaPago] = 'AC'
  ) as Debe
  INNER JOIN (SELECT [venOperaciones].[opeCliente]
        ,[venOperaciones].[opeReserva]
        ,SUM ([venIngresos].[ingMontoUf]) as Haber
    FROM [UNYSOFT].[dbo].[venOperaciones] 
    INNER JOIN  [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND
    [venOperaciones].[opeEtapa] = [venIngresos].[ingEtapa]
    where [venOperaciones].[opeEmpresa] = ".$uniEmpresa." and [venOperaciones].[opeEtapa] = ".$uniEtapa." and[venOperaciones].[opeAnulado] = 'N' AND  [venIngresos].[ingInteres] = -1
    GROUP BY [venOperaciones].[opeCliente]
        ,[venOperaciones].[opeReserva]) as Haber
        ON [Debe].[opeCliente] = [Haber].[opeCliente] AND 
        [Debe].[opeReserva] = [Haber].[opeReserva]) as consolidado
        WHERE Saldo > 1
        ORDER BY [consolidado].[cliRazonSocial]";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function tablaInformeResumen($uniEmpresa, $uniEtapa)
    {
        $resumen = new stdClass();

        $disponible = new stdClass();
        $reservado = new stdClass();
        $acordado = new stdClass();
        $prometido = new stdClass();
        $transferido = new stdClass();

        $d = self::obtenerDatosSegunEstado($uniEmpresa, $uniEtapa, 'N');
        $disponible->n = $d['N'];
        $disponible->lista = $d['lista'];
        $disponible->descuentos = $d['descuento'];
        $disponible->final = $d['total'];
        $disponible->recibidos = self::obtenerDineroRecibido($uniEmpresa, $uniEtapa, 'N')['total'];
        $disponible->detalle = self::obtenerDetalleSegunEstado($uniEmpresa, $uniEtapa, 'N');

        $r = self::obtenerDatosSegunEstado($uniEmpresa, $uniEtapa, 'R');
        $reservado = new stdClass();
        $reservado->n = $r['N'];
        $reservado->lista = $r['lista'];
        $reservado->descuentos = $r['descuento'];
        $reservado->final = $r['total'];
        $reservado->recibidos = self::obtenerDineroRecibido($uniEmpresa, $uniEtapa, 'R')['total'];
        $reservado->detalle = self::obtenerDetalleSegunEstado($uniEmpresa, $uniEtapa, 'R');

        $a = self::obtenerDatosSegunEstado($uniEmpresa, $uniEtapa, 'A');
        $acordado = new stdClass();
        $acordado->n = $a['N'];
        $acordado->lista = $a['lista'];
        $acordado->descuentos = $a['descuento'];
        $acordado->final = $a['total'];
        $acordado->recibidos = self::obtenerDineroRecibido($uniEmpresa, $uniEtapa, 'A')['total'];
        $acordado->detalle = self::obtenerDetalleSegunEstado($uniEmpresa, $uniEtapa, 'A');

        $p = self::obtenerDatosSegunEstado($uniEmpresa, $uniEtapa, 'P');
        $prometido = new stdClass();
        $prometido->n = $p['N'];
        $prometido->lista = $p['lista'];
        $prometido->descuentos = $p['descuento'];
        $prometido->final = $p['total'];
        $prometido->recibidos = self::obtenerDineroRecibido($uniEmpresa, $uniEtapa, 'P')['total'];
        $prometido->detalle = self::obtenerDetalleSegunEstado($uniEmpresa, $uniEtapa, 'P');

        $t = self::obtenerDatosSegunEstado($uniEmpresa, $uniEtapa, 'T');
        $transferido = new stdClass();
        $transferido->n = $t['N'];
        $transferido->lista = $t['lista'];
        $transferido->descuentos = $t['descuento'];
        $transferido->final = $t['total'];
        $transferido->recibidos = self::obtenerDineroRecibido($uniEmpresa, $uniEtapa, 'T')['total'];
        $transferido->detalle = self::obtenerDetalleSegunEstado($uniEmpresa, $uniEtapa, 'T');

        $resumen->Disponible = $disponible;
        $resumen->Reservado = $reservado;
        $resumen->Acordado = $acordado;
        $resumen->Prometido = $prometido;
        $resumen->Transferido = $transferido;

        return $resumen;
    }

    public static function obtenerDineroRecibido($uniEmpresa, $uniEtapa, $filtro)
    {

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM([venIngresosDetalle].[ingMontoPesos]) as total FROM [UNYSOFT].[dbo].[venIngresosDetalle] INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venIngresosDetalle].[ingIdRegistro] = [venIngresos].[ingIdRegistro] INNER JOIN [UNYSOFT].[dbo].[maeCliente] ON [maeCliente].[cliRut] = [venIngresos].[ingCliente] WHERE [venIngresosDetalle].[ingIdRegistro] IN(SELECT [ingIdRegistro] FROM [UNYSOFT].[dbo].[venIngresos] WHERE [venIngresos].[ingEmpresa] = '" . $uniEmpresa. "' AND [venIngresos].[ingEtapa] = '" . $uniEtapa. "' AND [venIngresos].[ingInteres] = -1) AND [venIngresos].[ingCliente] IN (SELECT [venUnidadesHab].[uniCliente] FROM [UNYSOFT].[dbo].[venUnidadesHab] WHERE [venUnidadesHab].[uniEmpresa] = '" . $uniEmpresa. "' AND [venUnidadesHab].[uniEtapa] = '" . $uniEtapa. "' AND [venUnidadesHab].[uniEstadoCliente] =  '".$filtro."')";
        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);

    }

    public static function obtenerDatosSegunEstado($uniEmpresa, $uniEtapa, $filtro)
    {

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT N, total as lista, descuento, SUM(total - descuento) as total FROM( SELECT count(N) as N, SUM (total) total, SUM(descuento) as descuento FROM ( SELECT uniConsorcio as N, CASE WHEN [uniValor3] > 0 THEN [uniValor3] ELSE( CASE WHEN [uniValor2] > 0 THEN [uniValor2] ELSE [uniValor] END ) END AS total, uniDescuento as descuento FROM [UNYSOFT].[dbo].[venUnidadesHab] WHERE [venUnidadesHab].uniEmpresa = '" . $uniEmpresa. "' AND [venUnidadesHab].uniEtapa = '" . $uniEtapa. "' AND [venUnidadesHab].[uniEstadoCliente] = '".$filtro."') as t1) as t2 GROUP BY N, total, descuento";
        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);

    }

    public static function obtenerDetalleSegunEstado($uniEmpresa, $uniEtapa, $ingEstado)
    {

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [uniCliente],[uniNumero],[uniUnidadBien],[uniTipoBien],[uniEstadoCliente],[uniFechaReservado],[uniFechaAcordado],[uniFechaPrometido]
        ,[uniFechaTransferido],[uniUbicacion],[uniVivienda]
        ,[uniCodigo]
        ,[uniTerreno] ,[uniValor],[uniValor2],[uniValor3],[uniDescuento],[uniFechaMuni],[uniEscritura],[uniFechaEscritura]
        ,[uniAlzamiento],[uniFechaAlzamiento],[uniPromesa],[uniFechaPromesa],[uniNivel],[uniFechaTerGarantia],[uniEncargado]
        FROM [UNYSOFT].[dbo].[venUnidadesHab] WHERE [venUnidadesHab].[uniEmpresa] = :ingEmpresa AND [venUnidadesHab].[uniEtapa] = :ingEtapa AND [venUnidadesHab].[uniEstadoCliente] = :ingEstado";
        $query = $database->prepare($sql);
        $query->execute(array(':ingEtapa' => $uniEtapa, ':ingEmpresa' => $uniEmpresa, ':ingEstado' => $ingEstado));

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    //calcula el dinero por recibir según los acuerdos comerciales vigentes
    //el dinero reflejado es el monto fijado en el acuerdo comercial - sus pagos
    public static function obtenerPorRecibirOMeDeben($uniEtapa,$uniEmpresa)
    {

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM([t5].[Saldo]) as Saldo FROM (
                    SELECT [t4].[opeEmpresa],[t4].[opeEtapa],[t4].[opeCliente],[t4].[opeReserva],[t4].[opeIdRegistro],[t4].[Saldo]
                    FROM (
                        SELECT [t3].[opeEmpresa],[t3].[opeEtapa],[t3].[opeCliente],[t3].[opeReserva],[t3].[opeIdRegistro],SUM([t3].[ingMontoUf] - [t3].[ingMontoUf2]) Saldo
                        FROM (
                            SELECT [t1].[opeEmpresa],[t1].[opeEtapa],[t1].[opeCliente],[t1].[opeReserva],[t1].[opeIdRegistro],[t1].[ingMontoUf],[t2].[ingMontoUf] as ingMontoUf2
                            FROM (
                                SELECT [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                                FROM [UNYSOFT].[dbo].[venOperaciones]
                                INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
                                WHERE  [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' 
                                GROUP BY [venOperaciones].[opeEmpresa], [venOperaciones].[opeEtapa], [venOperaciones].[opeCliente], [venOperaciones].[opeReserva], [venOperaciones].[opeIdRegistro], [venOperaciones].[opeValorUF], [venIngresos].[ingInteres] 
                            ) as t1
                            INNER JOIN (
                                SELECT [venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                                FROM [UNYSOFT].[dbo].[venOperaciones]
                                INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = -1
                                WHERE  [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' 
                                GROUP BY [venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF]
                            ) as t2 ON [t2].[opeIdRegistro] = [t1].[opeIdRegistro] 
                        ) as t3 
                        GROUP BY [t3].[opeEmpresa],[t3].[opeEtapa],[t3].[opeCliente],[t3].[opeReserva],[t3].[opeIdRegistro] 
                    ) as t4
                    WHERE [t4].[Saldo] > 1 
                )as t5";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC)["Saldo"];
    }

    public static function obtenerPorRecibirAcuerdosYPromesas($uniEtapa,$uniEmpresa)
    {

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM([T5].[Saldo]) as Saldo FROM (SELECT [t4].[opeEmpresa],[t4].[opeEtapa],[t4].[opeCliente],[t4].[opeReserva],[t4].[opeIdRegistro],[t4].[Saldo],[venUnidadesHab].[uniEstadoCliente]
                FROM (
                    SELECT [t3].[opeEmpresa],[t3].[opeEtapa],[t3].[opeCliente],[t3].[opeReserva],[t3].[opeIdRegistro],SUM([t3].[ingMontoUf] - [t3].[ingMontoUf2]) as Saldo
                    FROM (
                        SELECT [t1].[opeEmpresa],[t1].[opeEtapa],[t1].[opeCliente],[t1].[opeReserva],[t1].[opeIdRegistro],[t1].[ingMontoUf],[t2].[ingMontoUf] as ingMontoUf2
                        FROM (
                            SELECT [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                            FROM [UNYSOFT].[dbo].[venOperaciones]
                            INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
                            WHERE [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' 
                            GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres] 
                        ) as t1
                        INNER JOIN (
                            SELECT [venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                            FROM [UNYSOFT].[dbo].[venOperaciones]
                            INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = -1
                            WHERE  [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' 
                            GROUP BY [venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF]
                        ) as t2 ON [t2].[opeIdRegistro] = [t1].[opeIdRegistro] 
                    ) as t3 
                    GROUP BY [t3].[opeEmpresa],[t3].[opeEtapa],[t3].[opeCliente],[t3].[opeReserva],[t3].[opeIdRegistro] 
                ) as t4
                INNER JOIN [UNYSOFT].[dbo].[venOperacionesUnidadesHab] ON [venOperacionesUnidadesHab].[opeuniIdRegistro] = [t4].[opeIdRegistro]
                INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venUnidadesHab].[uniCodigo] = [venOperacionesUnidadesHab].[opeuniCodigoUnidadHab] 
                WHERE [t4].[Saldo] > 1 AND [venUnidadesHab].[uniEstadoCliente] IN ('P', 'A')
                GROUP BY [t4].[opeEmpresa],[t4].[opeEtapa],[t4].[opeCliente],[t4].[opeReserva],[t4].[opeIdRegistro],[t4].[Saldo],[venUnidadesHab].[uniEstadoCliente]) as T5";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC)["Saldo"];
    }

    public static function obtenerPorRecibirHipotecariosValesVista($uniEtapa,$uniEmpresa)
    {

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM([T7].[Saldo]) as Saldo FROM (
                    SELECT [T5].[opeEmpresa],[T5].[opeEtapa],[T5].[opeCliente],[T5].[opeReserva],[T5].[opeIdRegistro],[T5].[t1MontoUf],[T5].[t2MontoUf],SUM([T5].[t1MontoUf] - [T5].[t2MontoUf]) as Saldo,[T6].[cheques]
                    FROM (
                        SELECT [T4].[opeEmpresa],[T4].[opeEtapa],[T4].[opeCliente],[T4].[opeReserva],[T4].[opeIdRegistro],[T4].[t1MontoUf],[T4].[t2MontoUf],[venUnidadesHab].[uniEstadoCliente]
                        FROM (
                            SELECT [T3].[opeEmpresa],[T3].[opeEtapa],[T3].[opeCliente],[T3].[opeReserva],[T3].[opeIdRegistro],[T3].[t1MontoUf],[T3].[t2MontoUf],[T3].[deuda]
                            FROM (
                                SELECT [T1].[opeEmpresa],[T1].[opeEtapa],[T1].[opeCliente],[T1].[opeReserva],[T1].[opeIdRegistro],[T1].[ingMontoUf] as t1MontoUf,[T2].[ingMontoUf] as t2MontoUf,([T1].[ingMontoUf] - [T2].[ingMontoUf]) as deuda
                                FROM (
                                    SELECT [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                                    FROM [UNYSOFT].[dbo].[venOperaciones]
                                    INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
                                    WHERE  [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' 
                                    GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres]
                                ) as T1
                                INNER JOIN (
                                    SELECT [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                                    FROM [UNYSOFT].[dbo].[venOperaciones]
                                    INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = -1
                                    WHERE [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' 
                                    GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres]
                                ) as T2 ON [T1].[opeEmpresa] = [T2].[opeEmpresa] AND [T1].[opeCliente] = [T2].[opeCliente] AND [T1].[opeReserva] = [T2].[opeReserva]
                            ) as T3 WHERE [T3].[deuda] > 1
                        ) as T4 
                        INNER JOIN [UNYSOFT].[dbo].[venOperacionesUnidadesHab] ON [T4].[opeIdRegistro] = [venOperacionesUnidadesHab].[opeuniIdRegistro]
                        INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venOperacionesUnidadesHab].[opeuniCodigoUnidadHab] = [venUnidadesHab].[uniCodigo] 
                        WHERE uniEstadoCliente = 'T'
                        GROUP BY [T4].[opeEmpresa], [T4].[opeEtapa],[T4].[opeCliente],[T4].[opeReserva],[T4].[opeIdRegistro],[T4].[t1MontoUf],[T4].[t2MontoUf],[T4].[deuda], [venUnidadesHab].[uniEstadoCliente]
                    ) as [T5]
                    LEFT JOIN (
                        SELECT [venIngresos].[ingCliente],
                        COUNT([venIngresosDetalle].[ingMontoUF]) as cheques
                        FROM [UNYSOFT].[dbo].[venIngresosDetalle] 
                        INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venIngresos].[ingIdRegistro] = [venIngresosDetalle].[ingIdRegistro] 
                        WHERE [venIngresosDetalle].[ingIdRegistro] IN (
                            SELECT [venIngresos].[ingIdRegistro] FROM [UNYSOFT].[dbo].[venOperaciones] 
                            INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venIngresos].[ingCliente] = [venOperaciones].[opeCliente] AND [venIngresos].[ingEmpresa] = [venOperaciones].[opeEmpresa] AND [venOperaciones].[opeEtapa] = [venIngresos].[ingEtapa] AND [venIngresos].[ingReserva] = [venOperaciones].[opeReserva] AND [venIngresos].[ingInteres] = -1 
                            WHERE [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' AND [venOperaciones].[opeAnulado] = 'N' 
                        ) AND ([venIngresosDetalle].[ingPagado] <> 'S' OR [venIngresosDetalle].[ingPagado] iS NULL) 
                        GROUP BY [venIngresos].[ingCliente]
                    ) as [T6] ON [T6].[ingCliente] = [T5].[opeCliente]
                    GROUP BY [T5].[opeEmpresa],[T5].[opeEtapa],[T5].[opeCliente],[T5].[opeReserva],[T5].[opeIdRegistro],[T5].[t1MontoUf],[T5].[t2MontoUf],[T6].[cheques]
                ) as [T7]
                WHERE [T7].cheques is NULL";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC)["Saldo"];       

    }

    public static function obtenerPorRecibirCheques($uniEtapa,$uniEmpresa)
    {

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM([T8].[valor]) as Saldo
                FROM (
                    SELECT [T7].[opeEmpresa],[T7].[opeEtapa],[T7].[opeCliente],[T7].[opeReserva],[T7].[opeIdRegistro],[T7].[t1MontoUf],[T7].[t2MontoUf],[T7].[Saldo],[T7].[cheques],[T7].[valor]
                    FROM (
                        SELECT [T5].[opeEmpresa],[T5].[opeEtapa],[T5].[opeCliente],[T5].[opeReserva],[T5].[opeIdRegistro],[T5].[t1MontoUf],[T5].[t2MontoUf],SUM([T5].[t1MontoUf] - [T5].[t2MontoUf]) as Saldo,[T6].[cheques],[T6].[valor]
                        FROM (
                            SELECT [T4].[opeEmpresa],[T4].[opeEtapa],[T4].[opeCliente],[T4].[opeReserva],[T4].[opeIdRegistro],[T4].[t1MontoUf],[T4].[t2MontoUf],[venUnidadesHab].[uniEstadoCliente]
                            FROM (
                                SELECT [T3].[opeEmpresa],[T3].[opeEtapa],[T3].[opeCliente],[T3].[opeReserva],[T3].[opeIdRegistro],[T3].[t1MontoUf],[T3].[t2MontoUf],[T3].[deuda]
                                FROM (
                                    SELECT [T1].[opeEmpresa],[T1].[opeEtapa],[T1].[opeCliente],[T1].[opeReserva],[T1].[opeIdRegistro],[T1].[ingMontoUf] as t1MontoUf,[T2].[ingMontoUf] as t2MontoUf,([T1].[ingMontoUf] - [T2].[ingMontoUf]) as deuda
                                    FROM (
                                        SELECT [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                                        FROM [UNYSOFT].[dbo].[venOperaciones]
                                        INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
                                        WHERE  [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' 
                                        GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres]
                                    ) as T1
                                    INNER JOIN (
                                        SELECT [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                                        FROM [UNYSOFT].[dbo].[venOperaciones]
                                        INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = -1
                                        WHERE  [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' 
                                        GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres]
                                    ) as T2 ON [T1].[opeEmpresa] = [T2].[opeEmpresa] AND [T1].[opeCliente] = [T2].[opeCliente] AND [T1].[opeReserva] = [T2].[opeReserva]
                                ) as T3 WHERE [T3].[deuda] < 1
                            ) as T4 
                            INNER JOIN [UNYSOFT].[dbo].[venOperacionesUnidadesHab] ON [T4].[opeIdRegistro] = [venOperacionesUnidadesHab].[opeuniIdRegistro]
                            INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venOperacionesUnidadesHab].[opeuniCodigoUnidadHab] = [venUnidadesHab].[uniCodigo] 
                            WHERE uniEstadoCliente = 'T'
                            GROUP BY [T4].[opeEmpresa], [T4].[opeEtapa],[T4].[opeCliente],[T4].[opeReserva],[T4].[opeIdRegistro],[T4].[t1MontoUf],[T4].[t2MontoUf],[T4].[deuda], [venUnidadesHab].[uniEstadoCliente]
                        ) as T5
                        LEFT JOIN (
                            SELECT [venIngresos].[ingCliente], COUNT([venIngresosDetalle].[ingMontoUF]) as cheques, SUM([venIngresosDetalle].[ingMontoPesos]) as valor 
                            FROM [UNYSOFT].[dbo].[venIngresosDetalle] 
                            INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venIngresos].[ingIdRegistro] = [venIngresosDetalle].[ingIdRegistro] 
                            WHERE [venIngresosDetalle].[ingIdRegistro] 
                            IN (
                                SELECT [venIngresos].[ingIdRegistro] FROM [UNYSOFT].[dbo].[venOperaciones] 
                                INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venIngresos].[ingCliente] = [venOperaciones].[opeCliente] AND [venIngresos].[ingEmpresa] = [venOperaciones].[opeEmpresa] AND [venOperaciones].[opeEtapa] = [venIngresos].[ingEtapa] AND [venIngresos].[ingReserva] = [venOperaciones].[opeReserva] AND [venIngresos].[ingInteres] = -1 
                                WHERE [venOperaciones].[opeEmpresa] = '".$uniEmpresa."' AND [venOperaciones].[opeEtapa] = '".$uniEtapa."' AND [venOperaciones].[opeAnulado] = 'N' 
                            ) 
                            AND ([venIngresosDetalle].[ingPagado] <> 'S' OR [venIngresosDetalle].[ingPagado] iS NULL) 
                            GROUP BY [venIngresos].[ingCliente]
                        ) as T6 ON T6.ingCliente = t5.opeCliente
                        GROUP BY [T5].[opeEmpresa] ,[T5].[opeEtapa],[T5].[opeCliente],[T5].[opeReserva],[T5].[opeIdRegistro],[T5].[t1MontoUf],[T5].[t2MontoUf],t6.cheques,t6.valor
                    ) as [T7]
                    Where [T7].[cheques] IS NOT NULL 
                ) as T8";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC)["Saldo"];
        
    }

    public static function obtenerAcuerdosComerciales($uniEmpresa, $uniEtapa)
    {

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [venOperaciones].[opeEmpresa], [venOperaciones].[opeEtapa], [venOperaciones].[opeCliente], LOWER([maeCliente].[cliRazonSocial]) as cliRazonSocial, [venOperaciones].[opeReserva], [venOperaciones].[opeIdRegistro], SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                FROM [UNYSOFT].[dbo].[venOperaciones]
                INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
                INNER JOIN [UNYSOFT].[dbo].[maeCliente] ON [venOperaciones].[opeCliente] = [maeCliente].[cliRut] 
                WHERE  [venOperaciones].[opeEmpresa] = :ingEmpresa AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = :ingEtapa 
                GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[maeCliente].[cliRazonSocial] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres] ORDER BY len([venOperaciones].[opeCliente]), [venOperaciones].[opeCliente]";

        $query = $database->prepare($sql);
        $query->execute(array(':ingEtapa' => $uniEtapa, ':ingEmpresa' => $uniEmpresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function procesarAcuerdosComerciales($uniEmpresa, $uniEtapa)
    {

        $acuerdosComerciales = self::obtenerAcuerdosComerciales($uniEmpresa, $uniEtapa);

        foreach($acuerdosComerciales as $key => &$value) {
            $txt = $value["cliRazonSocial"];

            $txt = explode(" ", $value["cliRazonSocial"]);

            foreach ($txt as &$valor) {
                $valor = mb_strtoupper(substr($valor, 0, 1)) . substr($valor, 1, strlen($valor));
            }
            unset($valor);

            $value["cliRazonSocial"] = implode(" ", $txt);

            unset($value);
        }

        return $acuerdosComerciales;


    }

    public static function obtenerAcuerdoComercial($opeIdRegistro)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [venOperaciones].[opeIdRegistro], [venOperaciones].[opeEmpresa], [venOperaciones].[opeEtapa], [venOperaciones].[opeCliente], LOWER([maeCliente].[cliRazonSocial]) as cliRazonSocial, [venOperaciones].[opeReserva], [venOperaciones].[opeIdRegistro], SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                FROM [UNYSOFT].[dbo].[venOperaciones]
                INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
                INNER JOIN [UNYSOFT].[dbo].[maeCliente] ON [venOperaciones].[opeCliente] = [maeCliente].[cliRut] 
                WHERE  [venOperaciones].[opeIdRegistro] = :opeIdRegistro AND [venOperaciones].[opeAnulado] = 'N'  
                GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[maeCliente].[cliRazonSocial] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres] ORDER BY len([venOperaciones].[opeCliente]), [venOperaciones].[opeCliente]";

        $query = $database->prepare($sql);
        $query->execute(array(':opeIdRegistro' => $opeIdRegistro));

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function obtenerUnidadesHabitacionalesSegunAcuerdo($acuerdo_id)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [opeuniIdRegistro],[opeuniCodigoUnidadHab],[opeuniValorUnidadHab],[opeuniDescuentoUnidadHab],[opeuniTipo] FROM [UNYSOFT].[dbo].[venOperacionesUnidadesHab] WHERE opeuniIdRegistro = :acuerdo_comercial;";

        $query = $database->prepare($sql);
        $query->execute(array(':acuerdo_comercial' => $acuerdo_id));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function valorAcuerdoComercial($etapa, $empresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM([th].[ingMontoPesos]) as monto FROM (
            SELECT [venIngresosDetalle].[ingMontoPesos]
              FROM [UNYSOFT].[dbo].[venOperaciones] 
              INNER JOIN  [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND
              [venOperaciones].[opeEtapa] = [venIngresos].[ingEtapa] AND [venOperaciones].[opeFecha] = [venIngresos].[ingFecha]
            
              INNER JOIN [UNYSOFT].[dbo].[venIngresosDetalle] ON [venIngresosDetalle].[ingIdRegistro] = [venIngresos].[ingIdRegistro]
              where [venOperaciones].[opeEmpresa] = :empresa and [venOperaciones].[opeEtapa] = :etapa and[venOperaciones].[opeAnulado] = 'N' AND  [venIngresos].[ingInteres] = 0 AND
              [venIngresosDetalle].[ingCodigoFormaPago] = 'AC') as th
            ";

        $query = $database->prepare($sql);
        $query->execute(array(':etapa' => $etapa, ':empresa' => $empresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function valorDineroRecibido($etapa, $empresa)
    {

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM([t1].[Haber])as monto FROM( SELECT [venOperaciones].[opeCliente]
        ,LOWER([maeCliente].[cliRazonSocial]) as cliRazonSocial
              ,[venOperaciones].[opeReserva]
              ,SUM ([venIngresos].[ingMontoUf]) as Haber
        
        
          FROM [UNYSOFT].[dbo].[venOperaciones] 
          INNER JOIN  [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND
          [venOperaciones].[opeEtapa] = [venIngresos].[ingEtapa]
          INNER JOIN [UNYSOFT].[dbo].[maeCliente] ON [venOperaciones].[opeCliente] = [maeCliente].[cliRut]
          where [venOperaciones].[opeEmpresa] = :empresa and [venOperaciones].[opeEtapa] = :etapa and[venOperaciones].[opeAnulado] = 'N' AND  [venIngresos].[ingInteres] = -1
          GROUP BY [venOperaciones].[opeCliente]
              ,[venOperaciones].[opeReserva], cliRazonSocial ) as t1
        ";

        $query = $database->prepare($sql);
        $query->execute(array(':etapa' => $etapa, ':empresa' => $empresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function valorDineroPorRecibir($etapa, $empresa)
    {

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM(TH.saldo) as monto from( SELECT [consolidado].[opeCliente]
        ,[consolidado].[opeReserva]
        ,[consolidado].[cliRazonSocial]
        ,[consolidado].[ingMontoPesos]
        ,[consolidado].[Haber]
        ,[consolidado].[Saldo]
        FROM (
  SELECT [Debe].[opeCliente]
        ,[Debe].[opeReserva]
        ,[Debe].[cliRazonSocial]
        ,[Debe].[ingMontoPesos]
        ,[Haber].[Haber]
        ,([Debe].[ingMontoPesos] - [Haber].[Haber]) as Saldo
  FROM(SELECT [venOperaciones].[opeCliente]
        ,[venOperaciones].[opeReserva]
        ,LOWER([maeCliente].[cliRazonSocial]) as cliRazonSocial
              ,[venIngresosDetalle].[ingMontoPesos]
    FROM [UNYSOFT].[dbo].[venOperaciones] 
    INNER JOIN  [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND
    [venOperaciones].[opeEtapa] = [venIngresos].[ingEtapa] AND [venOperaciones].[opeFecha] = [venIngresos].[ingFecha]
    INNER JOIN [UNYSOFT].[dbo].[venIngresosDetalle] ON [venIngresosDetalle].[ingIdRegistro] = [venIngresos].[ingIdRegistro]
    INNER JOIN [UNYSOFT].[dbo].[maeCliente] ON [venOperaciones].[opeCliente] = [maeCliente].[cliRut]
    where [venOperaciones].[opeEmpresa] = ".$empresa." and [venOperaciones].[opeEtapa] = ".$etapa." and[venOperaciones].[opeAnulado] = 'N' AND  [venIngresos].[ingInteres] = 0 AND
    [venIngresosDetalle].[ingCodigoFormaPago] = 'AC'
  ) as Debe
  INNER JOIN (SELECT [venOperaciones].[opeCliente]
        ,[venOperaciones].[opeReserva]
        ,SUM ([venIngresos].[ingMontoUf]) as Haber
    FROM [UNYSOFT].[dbo].[venOperaciones] 
    INNER JOIN  [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND
    [venOperaciones].[opeEtapa] = [venIngresos].[ingEtapa]
    where [venOperaciones].[opeEmpresa] = ".$empresa." and [venOperaciones].[opeEtapa] = ".$etapa." and[venOperaciones].[opeAnulado] = 'N' AND  [venIngresos].[ingInteres] = -1
    GROUP BY [venOperaciones].[opeCliente]
        ,[venOperaciones].[opeReserva]) as Haber
        ON [Debe].[opeCliente] = [Haber].[opeCliente] AND 
        [Debe].[opeReserva] = [Haber].[opeReserva]) as consolidado
  ) as th 	  WHERE Saldo > 1
  ";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function porVender($etapa, $empresa)
    {

        //obtener los acuerdos comerciales, obtener las unidades de los acuerdos comerciales y usar esas unidades para diferenciar las que no estan vendidas

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM(T1.total) as monto FROM (SELECT CASE WHEN [uniValor3] > 0 THEN [uniValor3] ELSE( CASE WHEN [uniValor2] > 0 THEN [uniValor2] ELSE [uniValor] END ) END AS total
        FROM [UNYSOFT].[dbo].[venUnidadesHab] WHERE uniEmpresa = ".$empresa." AND uniEtapa = ".$etapa." AND uniCodigo NOT IN (SELECT opeuniCodigoUnidadHab
        FROM [UNYSOFT].[dbo].venOperacionesUnidadesHab 
        RIGHT JOIN
        (SELECT opeIdRegistro FROM [UNYSOFT].[dbo].[venOperaciones]
        WHERE  [venOperaciones].[opeEmpresa] = ".$empresa." AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = ".$etapa.") as T1 ON T1.opeIdRegistro = [venOperacionesUnidadesHab].opeuniIdRegistro)) as T1";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function unidadesTransferidasTotalVendido($etapa, $empresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM(H1.[ingMontoPesos]) as monto FROM (SELECT [venUnidadesHab].[uniCliente],[venIngresos].[ingMontoUf],[venIngresosDetalle].[ingMontoPesos]
    FROM [UNYSOFT].[dbo].[venOperacionesUnidadesHab]
    INNER JOIN
    (SELECT opeIdRegistro, opeCliente, opeReserva,opeEmpresa FROM [UNYSOFT].[dbo].[venOperaciones] WHERE  [venOperaciones].[opeEmpresa] = ".$empresa." AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = ".$etapa.") as T1
    ON T1.opeIdRegistro = [venOperacionesUnidadesHab].opeuniIdRegistro
  INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venOperacionesUnidadesHab].opeuniCodigoUnidadHab = [venUnidadesHab].[uniCodigo]
  INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [T1].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [T1].[opeCliente] = [venIngresos].[ingCliente] AND [T1].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
  INNER JOIN [UNYSOFT].[dbo].[venIngresosDetalle] ON [venIngresosDetalle].[ingIdRegistro] = [venIngresos].[ingIdRegistro]
                  Where [venUnidadesHab].[uniEstadoCliente] = 'T'  AND [venIngresosDetalle].[ingCodigoFormaPago] = 'AC' GROUP BY [venUnidadesHab].[uniCliente],[venIngresos].[ingMontoUf], [venIngresosDetalle].[ingMontoPesos]) as H1";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function unidadesTransferidasTotalRecibido($etapa, $empresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM(T3.ingMontoUf) as monto
        FROM (
        
        SELECT [T1].[opeEmpresa], [T1].[opeEtapa], [T1].[opeCliente],[T1].cliRazonSocial, [T1].[opeReserva], [T1].[opeIdRegistro], [T1].ingMontoUf, [T2].[uniEstadoCliente]
        FROM(
        
        SELECT [venOperaciones].[opeEmpresa], [venOperaciones].[opeEtapa], [venOperaciones].[opeCliente], LOWER([maeCliente].[cliRazonSocial]) as cliRazonSocial, [venOperaciones].[opeReserva], [venOperaciones].[opeIdRegistro], SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                        FROM [UNYSOFT].[dbo].[venOperaciones]
                        INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = -1
                        INNER JOIN [UNYSOFT].[dbo].[maeCliente] ON [venOperaciones].[opeCliente] = [maeCliente].[cliRut] 
                        WHERE  [venOperaciones].[opeEmpresa] = ".$empresa." AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = ".$etapa." 
                        GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[maeCliente].[cliRazonSocial] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres]
        ) as T1
        
        INNER JOIN (SELECT [venOperaciones].[opeCliente], [venOperaciones].[opeReserva], [venOperaciones].[opeIdRegistro],
        [venUnidadesHab].[uniEstadoCliente]
                        FROM [UNYSOFT].[dbo].[venOperaciones]
                        INNER JOIN [UNYSOFT].[dbo].[venOperacionesUnidadesHab] ON [venOperaciones].[opeIdRegistro] = [venOperacionesUnidadesHab].[opeuniIdRegistro] 
                        INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venUnidadesHab].[uniCodigo] = [venOperacionesUnidadesHab].[opeuniCodigoUnidadHab] 
                        WHERE  [venOperaciones].[opeEmpresa] = ".$empresa." AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = ".$etapa."
                        GROUP BY [venOperaciones].[opeCliente] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF], [venUnidadesHab].[uniEstadoCliente]) as T2
        
                        ON T2.[opeCliente] = T1.[opeCliente] AND T2.[opeReserva] = T1.[opeReserva] AND T2.[opeIdRegistro] = T1.[opeIdRegistro]
        
                        WHERE [T2].[uniEstadoCliente] = 'T'
        
                        ) as T3
        ";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function unidadesAcordadoTotalVendido($etapa, $empresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM(H1.[ingMontoPesos]) as monto FROM (SELECT [venUnidadesHab].[uniCliente],[venIngresos].[ingMontoUf],[venIngresosDetalle].[ingMontoPesos]
        FROM [UNYSOFT].[dbo].[venOperacionesUnidadesHab]
        INNER JOIN
        (SELECT opeIdRegistro, opeCliente, opeReserva,opeEmpresa FROM [UNYSOFT].[dbo].[venOperaciones] WHERE  [venOperaciones].[opeEmpresa] = ".$empresa." AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = ".$etapa.") as T1
        ON T1.opeIdRegistro = [venOperacionesUnidadesHab].opeuniIdRegistro
      INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venOperacionesUnidadesHab].opeuniCodigoUnidadHab = [venUnidadesHab].[uniCodigo]
      INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [T1].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [T1].[opeCliente] = [venIngresos].[ingCliente] AND [T1].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
          INNER JOIN [UNYSOFT].[dbo].[venIngresosDetalle] ON [venIngresosDetalle].[ingIdRegistro] = [venIngresos].[ingIdRegistro]
                      Where [venUnidadesHab].[uniEstadoCliente] = 'A' AND [venIngresosDetalle].[ingCodigoFormaPago] = 'AC' GROUP BY [venUnidadesHab].[uniCliente],[venIngresos].[ingMontoUf], [venIngresosDetalle].[ingMontoPesos]) as H1
    ";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function unidadesAcordadoTotalRecibido($etapa, $empresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM(T3.ingMontoUf) as monto
        FROM (
        
        SELECT [T1].[opeEmpresa], [T1].[opeEtapa], [T1].[opeCliente],[T1].cliRazonSocial, [T1].[opeReserva], [T1].[opeIdRegistro], [T1].ingMontoUf, [T2].[uniEstadoCliente]
        FROM(
        
        SELECT [venOperaciones].[opeEmpresa], [venOperaciones].[opeEtapa], [venOperaciones].[opeCliente], LOWER([maeCliente].[cliRazonSocial]) as cliRazonSocial, [venOperaciones].[opeReserva], [venOperaciones].[opeIdRegistro], SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                        FROM [UNYSOFT].[dbo].[venOperaciones]
                        INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = -1
                        INNER JOIN [UNYSOFT].[dbo].[maeCliente] ON [venOperaciones].[opeCliente] = [maeCliente].[cliRut] 
                        WHERE  [venOperaciones].[opeEmpresa] = ".$empresa." AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = ".$etapa." 
                        GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[maeCliente].[cliRazonSocial] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres]
        ) as T1
        
        INNER JOIN (SELECT [venOperaciones].[opeCliente], [venOperaciones].[opeReserva], [venOperaciones].[opeIdRegistro],
        [venUnidadesHab].[uniEstadoCliente]
                        FROM [UNYSOFT].[dbo].[venOperaciones]
                        INNER JOIN [UNYSOFT].[dbo].[venOperacionesUnidadesHab] ON [venOperaciones].[opeIdRegistro] = [venOperacionesUnidadesHab].[opeuniIdRegistro] 
                        INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venUnidadesHab].[uniCodigo] = [venOperacionesUnidadesHab].[opeuniCodigoUnidadHab] 
                        WHERE  [venOperaciones].[opeEmpresa] = ".$empresa." AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = ".$etapa."
                        GROUP BY [venOperaciones].[opeCliente] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF], [venUnidadesHab].[uniEstadoCliente]) as T2
        
                        ON T2.[opeCliente] = T1.[opeCliente] AND T2.[opeReserva] = T1.[opeReserva] AND T2.[opeIdRegistro] = T1.[opeIdRegistro]
        
                        WHERE [T2].[uniEstadoCliente] = 'A'
        
                        ) as T3
        ";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function unidadesPrometidoTotalVendido($etapa, $empresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM(H1.[ingMontoPesos]) as monto FROM (SELECT [venUnidadesHab].[uniCliente],[venIngresos].[ingMontoUf],[venIngresosDetalle].[ingMontoPesos]
    FROM [UNYSOFT].[dbo].[venOperacionesUnidadesHab]
    INNER JOIN
    (SELECT opeIdRegistro, opeCliente, opeReserva,opeEmpresa FROM [UNYSOFT].[dbo].[venOperaciones] WHERE  [venOperaciones].[opeEmpresa] = ".$empresa." AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = ".$etapa.") as T1
    ON T1.opeIdRegistro = [venOperacionesUnidadesHab].opeuniIdRegistro
  INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venOperacionesUnidadesHab].opeuniCodigoUnidadHab = [venUnidadesHab].[uniCodigo]
  INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [T1].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [T1].[opeCliente] = [venIngresos].[ingCliente] AND [T1].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = 0
  INNER JOIN [UNYSOFT].[dbo].[venIngresosDetalle] ON [venIngresosDetalle].[ingIdRegistro] = [venIngresos].[ingIdRegistro]
                  Where [venUnidadesHab].[uniEstadoCliente] = 'P' AND [venIngresosDetalle].[ingCodigoFormaPago] = 'AC' GROUP BY [venUnidadesHab].[uniCliente],[venIngresos].[ingMontoUf], [venIngresosDetalle].[ingMontoPesos]) as H1";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function unidadesPrometidoTotalRecibido($etapa, $empresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM(T3.ingMontoUf) as monto
        FROM (
        
        SELECT [T1].[opeEmpresa], [T1].[opeEtapa], [T1].[opeCliente],[T1].cliRazonSocial, [T1].[opeReserva], [T1].[opeIdRegistro], [T1].ingMontoUf, [T2].[uniEstadoCliente]
        FROM(
        
        SELECT [venOperaciones].[opeEmpresa], [venOperaciones].[opeEtapa], [venOperaciones].[opeCliente], LOWER([maeCliente].[cliRazonSocial]) as cliRazonSocial, [venOperaciones].[opeReserva], [venOperaciones].[opeIdRegistro], SUM([venIngresos].[ingMontoUf]) as ingMontoUf
                        FROM [UNYSOFT].[dbo].[venOperaciones]
                        INNER JOIN [UNYSOFT].[dbo].[venIngresos] ON [venOperaciones].[opeEmpresa] = [venIngresos].[ingEmpresa] AND [venOperaciones].[opeCliente] = [venIngresos].[ingCliente] AND [venOperaciones].[opeReserva] = [venIngresos].[ingReserva] AND [venIngresos].[ingInteres] = -1
                        INNER JOIN [UNYSOFT].[dbo].[maeCliente] ON [venOperaciones].[opeCliente] = [maeCliente].[cliRut] 
                        WHERE  [venOperaciones].[opeEmpresa] = ".$empresa." AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = ".$etapa." 
                        GROUP BY [venOperaciones].[opeEmpresa],[venOperaciones].[opeEtapa],[venOperaciones].[opeCliente],[maeCliente].[cliRazonSocial] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF],[venIngresos].[ingInteres]
        ) as T1
        
        INNER JOIN (SELECT [venOperaciones].[opeCliente], [venOperaciones].[opeReserva], [venOperaciones].[opeIdRegistro],
        [venUnidadesHab].[uniEstadoCliente]
                        FROM [UNYSOFT].[dbo].[venOperaciones]
                        INNER JOIN [UNYSOFT].[dbo].[venOperacionesUnidadesHab] ON [venOperaciones].[opeIdRegistro] = [venOperacionesUnidadesHab].[opeuniIdRegistro] 
                        INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venUnidadesHab].[uniCodigo] = [venOperacionesUnidadesHab].[opeuniCodigoUnidadHab] 
                        WHERE  [venOperaciones].[opeEmpresa] = ".$empresa." AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = ".$etapa."
                        GROUP BY [venOperaciones].[opeCliente] ,[venOperaciones].[opeReserva],[venOperaciones].[opeIdRegistro],[venOperaciones].[opeValorUF], [venUnidadesHab].[uniEstadoCliente]) as T2
        
                        ON T2.[opeCliente] = T1.[opeCliente] AND T2.[opeReserva] = T1.[opeReserva] AND T2.[opeIdRegistro] = T1.[opeIdRegistro]
        
                        WHERE [T2].[uniEstadoCliente] = 'P'
        
                        ) as T3
        ";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function contarTransferidas($etapa, $empresa,$filtro)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT COUNT([uniConsorcio]) as numero FROM [UNYSOFT].[dbo].[venUnidadesHab]
        WHERE [venUnidadesHab].[uniEmpresa] = :empresa AND [venUnidadesHab].[uniEtapa] = :etapa AND [venUnidadesHab].[uniEstadoCliente] = 'T'";

        if ($filtro != "todos"){
            $sql .= " AND [venUnidadesHab].[uniUnidadBien] = '".$filtro."'";
        }

        $query = $database->prepare($sql);
        $query->execute(array(':etapa' => $etapa, ':empresa' => $empresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function contarReservas($etapa, $empresa,$filtro)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT COUNT([uniConsorcio]) as numero FROM [UNYSOFT].[dbo].[venUnidadesHab]
        WHERE [venUnidadesHab].[uniEmpresa] = :empresa AND [venUnidadesHab].[uniEtapa] = :etapa AND [venUnidadesHab].[uniEstadoCliente] = 'R'";

        if ($filtro != "todos"){
            $sql .= " AND [venUnidadesHab].[uniUnidadBien] = '".$filtro."'";
        }

        $query = $database->prepare($sql);
        $query->execute(array(':etapa' => $etapa, ':empresa' => $empresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function contarPrometidas($etapa, $empresa,$filtro)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT COUNT([uniConsorcio]) as numero FROM [UNYSOFT].[dbo].[venUnidadesHab]
        WHERE [venUnidadesHab].[uniEmpresa] = :empresa AND [venUnidadesHab].[uniEtapa] = :etapa AND [venUnidadesHab].[uniEstadoCliente] = 'P'";

        if ($filtro != "todos"){
            $sql .= " AND [venUnidadesHab].[uniUnidadBien] = '".$filtro."'";
        }

        $query = $database->prepare($sql);
        $query->execute(array(':etapa' => $etapa, ':empresa' => $empresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function contarDisponibles($etapa, $empresa,$filtro)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT COUNT([uniConsorcio]) as numero FROM [UNYSOFT].[dbo].[venUnidadesHab]
        WHERE [venUnidadesHab].[uniEmpresa] = :empresa AND [venUnidadesHab].[uniEtapa] = :etapa AND [venUnidadesHab].[uniEstadoCliente] = 'N'";


        if ($filtro != "todos"){
            $sql .= " AND [venUnidadesHab].[uniUnidadBien] = '".$filtro."'";
        }

        $query = $database->prepare($sql);
        $query->execute(array(':etapa' => $etapa, ':empresa' => $empresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function contarAcordadas($etapa, $empresa,$filtro)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT COUNT([uniConsorcio]) as numero FROM [UNYSOFT].[dbo].[venUnidadesHab]
        WHERE [venUnidadesHab].[uniEmpresa] = :empresa AND [venUnidadesHab].[uniEtapa] = :etapa AND [venUnidadesHab].[uniEstadoCliente] = 'A'";

        if ($filtro != "todos"){
            $sql .= " AND [venUnidadesHab].[uniUnidadBien] = '".$filtro."'";
        }

        $query = $database->prepare($sql);
        $query->execute(array(':etapa' => $etapa, ':empresa' => $empresa));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function unidadesReservadasTotal($etapa, $empresa, $filtro)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM(T1.resuniValorUnidadHab - T1.[resuniDescuento]) as monto FROM (SELECT [venReservasUnidadesHab].[resReserva] ,[venReservasUnidadesHab].[resuniCodigoUnidadHab],[venUnidadesHab].[uniUnidadBien],[venReservasUnidadesHab].[resuniValorUnidadHab] ,[venReservasUnidadesHab].[resuniDescuento] ,[venReservasUnidadesHab].[resuniTipo] ,[venReservas].[resValorUF]
        FROM [UNYSOFT].[dbo].[venReservasUnidadesHab] INNER JOIN [UNYSOFT].[dbo].[venReservas] ON [venReservasUnidadesHab].[resReserva] = [venReservas].[resReserva]
        INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venReservasUnidadesHab].[resuniCodigoUnidadHab] = [venUnidadesHab].[uniCodigo]
        WHERE resuniCodigoUnidadHab IN (SELECT uniCodigo FROM [UNYSOFT].[dbo].[venUnidadesHab] WHERE  [venUnidadesHab].[uniEmpresa] = ".$empresa." AND [venUnidadesHab].[uniEtapa] = ".$etapa." AND uniEstadoCliente = 'R') ";
    
        if ($filtro != "todos"){
            $sql .= " AND [venUnidadesHab].[uniUnidadBien] = '".$filtro."' ";
        }

        $sql .= " AND [venReservas].[resFechaAnulado] is null  ) as T1";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function unidadesDisponiblesTotal($etapa, $empresa, $filtro)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT SUM(T1.total) as monto FROM (SELECT CASE WHEN [uniValor3] > 0 THEN [uniValor3] ELSE( CASE WHEN [uniValor2] > 0 THEN [uniValor2] ELSE [uniValor] END ) END AS total FROM [UNYSOFT].[dbo].[venUnidadesHab] WHERE [venUnidadesHab].[uniEmpresa] = ".$empresa." AND [venUnidadesHab].[uniEtapa] = ".$etapa." AND uniEstadoCliente = 'N'";

        if ($filtro != "todos"){
            $sql .= " AND [venUnidadesHab].[uniUnidadBien] = '".$filtro."' ";
        }

        $sql .= ") as T1";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function propiedades($etapa, $empresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [uniCodigo], [uniCliente], [cliRazonSocial], [uniNumero], [uniUnidadBien], [uniTipoBien], [uniEstadoCliente], [uniUbicacion], [uniVivienda], [uniTerreno], [uniValor], [uniValor2], [uniValor3], [uniDescuento], [TP].[valor4],  [TP].[opeuniValorUnidadHab], [TP].[opeuniDescuentoUnidadHab],
        CASE WHEN uniFechaTransferido > 0 THEN uniFechaTransferido ELSE (CASE WHEN uniFechaPrometido > 0 THEN uniFechaPrometido ELSE (CASE WHEN uniFechaAcordado > 0 THEN uniFechaAcordado ELSE  uniFechaReservado END ) END ) END AS fecha 
        FROM [UNYSOFT].[dbo].[venUnidadesHab] LEFT JOIN UNYSOFT.dbo.maeCliente ON maeCliente.cliRut = venUnidadesHab.uniCliente 
        LEFT JOIN (
            SELECT [venOperacionesUnidadesHab].[opeuniCodigoUnidadHab],[venOperacionesUnidadesHab].[opeuniValorUnidadHab],[venOperacionesUnidadesHab].[opeuniDescuentoUnidadHab], ([venOperacionesUnidadesHab].[opeuniValorUnidadHab] - [venOperacionesUnidadesHab].[opeuniDescuentoUnidadHab]) as valor4
            FROM [UNYSOFT].[dbo].[venOperaciones] INNER JOIN [UNYSOFT].[dbo].[venOperacionesUnidadesHab] ON [venOperaciones].[opeIdRegistro] = [venOperacionesUnidadesHab].[opeuniIdRegistro] 
            WHERE [venOperaciones].[opeEmpresa] = ".$empresa." and [venOperaciones].[opeEtapa] = ".$etapa." and[venOperaciones].[opeAnulado] = 'N'
        ) as TP ON [TP].[opeuniCodigoUnidadHab] = [uniCodigo] WHERE uniEmpresa = ".$empresa." AND uniEtapa = ".$etapa.";";

        $query = $database->prepare($sql);
        $query->execute();

        $_propiedades = array();

        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $propiedad) {

            if (array_key_exists('uniCodigo', $propiedad)){
                if ($propiedad["uniEstadoCliente"] == "R"){
                    $valorReserva = self::valorReservaVentaUnidad($propiedad["uniCodigo"]);

                    $propiedad["_valorReserva"] = intval($valorReserva["resuniValorUnidadHab"]);
                    $propiedad["_descReserva"] = intval($valorReserva["resuniDescuento"]);
                    $propiedad["_valor4"] = (intval($valorReserva["resuniValorUnidadHab"]) - intval($valorReserva["resuniDescuento"]));
                }
            }

            array_push($_propiedades, $propiedad);
        }

        return $_propiedades;
    }

    public static function montoUnidadesVendidasSegunAcuerdoComercial($etapa,$empresa,$estadoCliente,$uniUnidadBien)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "Select SUM(T3.total) as monto FROM (
            SELECT [T1].[opeIdRegistro], [T1].[opeCliente],[T1].[opeReserva],[T1].[opeEmpresa]
            ,[venOperacionesUnidadesHab].[opeuniCodigoUnidadHab],[venOperacionesUnidadesHab].[opeuniValorUnidadHab],[venOperacionesUnidadesHab].[opeuniDescuentoUnidadHab],
            [venUnidadesHab].[uniEstadoCliente], [venUnidadesHab].[uniUnidadBien], SUM([venOperacionesUnidadesHab].[opeuniValorUnidadHab] - [venOperacionesUnidadesHab].[opeuniDescuentoUnidadHab]) as Total
                FROM [UNYSOFT].[dbo].[venOperacionesUnidadesHab]
                INNER JOIN
                    (
                        SELECT opeIdRegistro, opeCliente, opeReserva,opeEmpresa 
                        FROM [UNYSOFT].[dbo].[venOperaciones] 
                        WHERE  [venOperaciones].[opeEmpresa] = '".$empresa."' AND [venOperaciones].[opeAnulado] = 'N' AND [venOperaciones].[opeEtapa] = '".$etapa."' 
                    ) as T1
                ON T1.opeIdRegistro = [venOperacionesUnidadesHab].opeuniIdRegistro
                INNER JOIN [UNYSOFT].[dbo].[venUnidadesHab] ON [venOperacionesUnidadesHab].opeuniCodigoUnidadHab = [venUnidadesHab].[uniCodigo]
                Where [venUnidadesHab].[uniEstadoCliente] = '".$estadoCliente."' AND [venUnidadesHab].[uniUnidadBien] = '".$uniUnidadBien."' 
                GROUP BY [T1].[opeIdRegistro], [T1].[opeCliente],[T1].[opeReserva],[T1].[opeEmpresa]
            ,[venOperacionesUnidadesHab].[opeuniCodigoUnidadHab],[venOperacionesUnidadesHab].[opeuniValorUnidadHab],[venOperacionesUnidadesHab].[opeuniDescuentoUnidadHab],
            [venUnidadesHab].[uniEstadoCliente], [venUnidadesHab].[uniUnidadBien] ) as T3";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function valorReservaVentaUnidad($resuniCodigoUnidadHab){

        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT TOP 1 [resuniValorUnidadHab], [resuniDescuento] FROM [UNYSOFT].[dbo].[venReservasUnidadesHab] where resuniCodigoUnidadHab = '".$resuniCodigoUnidadHab."' order by resReserva desc";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    } 

}
