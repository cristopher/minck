<?php

class SqlModel
{

    public static function FacturasWherePropiedad($centro_costo, $rut, $empresa)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $sql = "SELECT [finRecepcion].[CodigoEmpresa],[finRecepcion].[CodigoRut],[finRecepcion].[Fecha_Doc],[finRecepcion].[Numero_Doc]
        ,[finRecepcion].[Neto],[finRecepcion].[Exento1],[finRecepcion].[IdRegistro],[finRecepcion].[IdfinRecepcion]
        ,[finRecepcion].[Saldo_Doc],[finRecepcion].[PathFactura],[finRecepcion].[SaldoMonedaOrigen] FROM [UNYSOFT].[dbo].[finRecepcion]
        WHERE CodigoTipoDoc IN ('FVEE','FVEX', 'FEVA')  AND CodigoRut = '".$rut."' AND CentroCosto = '".$centro_costo."' AND CodigoEmpresa = '".$empresa."' ORDER BY Numero_Doc DESC";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function FacturasWherePropiedadYFecha($centro_costo, $rut, $empresa, $fecha)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $fechaInic = "01-".$fecha;
        $fechaFin = date("t", strtotime("01-".$fecha))."-".$fecha;

        $sql = "SELECT [finRecepcion].[CodigoEmpresa],[finRecepcion].[CodigoRut],[finRecepcion].[Fecha_Doc],[finRecepcion].[Numero_Doc]
        ,[finRecepcion].[Neto],[finRecepcion].[Exento1],[finRecepcion].[IdRegistro],[finRecepcion].[IdfinRecepcion]
        ,[finRecepcion].[Saldo_Doc],[finRecepcion].[PathFactura],[finRecepcion].[SaldoMonedaOrigen],
		(SUBSTRING(Fecha_Doc, 0, 3) +'-'+ SUBSTRING(Fecha_Doc, 3, 2)+'-'+ SUBSTRING(Fecha_Doc, 5, 4)) AS ExtractString FROM [UNYSOFT].[dbo].[finRecepcion]
        WHERE CodigoTipoDoc IN ('FVEE', 'FEVA')  AND CodigoRut = '".$rut."' AND CentroCosto = '".$centro_costo."' AND CodigoEmpresa = '".$empresa."' 
		AND parse((SUBSTRING(Fecha_Doc, 0, 3) +'-'+ SUBSTRING(Fecha_Doc, 3, 2)+'-'+ SUBSTRING(Fecha_Doc, 5, 4)) as datetime using 'es-CL') BETWEEN '".$fechaInic."' AND '".$fechaFin."' ORDER BY Numero_Doc DESC";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function FacturasWhereCentroCostoYFecha($centro_costo, $empresa, $fecha)
    {
        $database = SqlFactory::getFactory()->getConnection();

        $fechaInic = "01-01-".$fecha;
        $fechaFin = "31-12-".$fecha;

        $sql = "SELECT [finRecepcion].[CodigoEmpresa],[finRecepcion].[CodigoRut],[finRecepcion].[Fecha_Doc],[finRecepcion].[Numero_Doc]
        ,[finRecepcion].[Neto],[finRecepcion].[Exento1],[finRecepcion].[IdRegistro],[finRecepcion].[IdfinRecepcion]
        ,[finRecepcion].[Saldo_Doc],[finRecepcion].[PathFactura],[finRecepcion].[SaldoMonedaOrigen],
		(SUBSTRING(Fecha_Doc, 0, 3) +'-'+ SUBSTRING(Fecha_Doc, 3, 2)+'-'+ SUBSTRING(Fecha_Doc, 5, 4)) AS ExtractString FROM [UNYSOFT].[dbo].[finRecepcion]
        WHERE CodigoTipoDoc IN ('FVEE', 'FEVA')  AND CentroCosto = '".$centro_costo."' AND CodigoEmpresa = '".$empresa."' 
		AND parse((SUBSTRING(Fecha_Doc, 0, 3) +'-'+ SUBSTRING(Fecha_Doc, 3, 2)+'-'+ SUBSTRING(Fecha_Doc, 5, 4)) as datetime using 'es-CL') BETWEEN '".$fechaInic."' AND '".$fechaFin."' AND [Saldo_Doc] > 100 ORDER BY Numero_Doc DESC";

        $query = $database->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
