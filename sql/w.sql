SELECT
    h.fecha AS FechaFactura,
    h.tipo + '-' + CONVERT(varchar(15), h.numero) AS Factura,
    d.fecha AS FechaPedido,
    d.numero AS NumeroPedido,
    b.serie AS Vin,
    CASE
        WHEN d.es_canje = 'S' THEN 'Canje'
        WHEN d.flota IS NOT NULL THEN 'Flota'
        WHEN e.concepto_1 = 10 THEN 'Intercambio'
        WHEN d.nit = 900531238 THEN 'DEMO'
        ELSE 'Publico'
    END AS tipoVenta,
    CASE
        WHEN d.venta_digital = 'S' THEN 'Digital'
        ELSE 'Piso'
    END AS CanalOrigenVenta,
    CASE
        WHEN p.forma = 1 THEN 'Anticipo'
        WHEN p.forma = 2 THEN 'CDT'
        WHEN p.forma = 3 THEN 'Documento Posfechado'
        WHEN p.forma = 4 THEN 'Financiera'
        WHEN p.forma = 5 THEN 'Pagare'
        WHEN p.forma = 6 THEN 'Usado en Consigancion'
        WHEN p.forma = 7 THEN 'Contado'
        WHEN p.forma = 8 THEN 'Pago Especial'
        WHEN p.forma = 9 THEN 'Financiera con ND'
        WHEN p.forma = 10 THEN 'Consignacion con Intermediario'
        WHEN p.forma = 11 THEN 'Otros Pagos a recibir'
        WHEN p.forma IS NULL THEN 'Financiera'
        WHEN p.forma > 10 THEN 'Financiera'
    END AS TipoPago,
    h.venta AS Venta$,
    h.decuento AS Descuento,
    h.iva,
    h.impoconsumo,
    h.ventatotal,
    n.costo_unitario AS CostodeVenta,
    0 AS Bonificaciones,
    0 AS IncentivoCosto,
    0 AS IncentivoDetal,
    h.ventatotal AS CostoTotal,
    b.modelo_ano AS Ano_modelo,
    b.des_marca AS Marca,
    c.descripcion AS linea_familia,
    b.des_modelo AS Version_DescipcionModelo,
    b.tipo AS clase,
    b.modelo AS catalogo,
    b.des_color AS ColorPintura,
    b.color AS CodigoColor,
    b.Color_Interno AS ColorInterior,
    ISNULL(CONVERT(varchar, k.fecha_hora_evento, 103), '') AS FechaMatricula,
    ISNULL(b.placa, '') AS Placa,
    d.vendedor AS CedulaAsesorComercial,
    g.nombres AS NombreAsesorComercial,
    i.fecha_hora_evento AS FechaCompra,
    CASE
        WHEN p.forma = 4 THEN 'si'
        WHEN d.nit_prenda IS NULL THEN 'no'
        ELSE 'si'
    END AS Prenda,
    ISNULL(m.valor_aprobado, '') AS MontoFinanciado,
    ISNULL(q.nombres, '') AS EntidadFinanciera,
    ISNULL(m.plazo_solicitado, '') AS PlazoFinanciado,
    ISNULL(
        CONVERT(
            VARCHAR,
            DATEADD(month, m.plazo_solicitado, h.fecha),
            103
        ),
        ''
    ) AS FechaVencimientoFinanciamiento,
    ISNULL(CONVERT(varchar, j.fecha_hora_evento, 103), '') AS Fecha_entrega,
    '' AS FechaActivacionGarantia,
    d.nit AS Nit_Cedula,
    CASE
        WHEN e.regimen IN ('N', 'S')
        AND e.tipo_identificacion IN ('C', 'E', 'O', 'P', 'T') THEN 'Persona Natural'
        WHEN e.regimen IN ('C', 'S')
        AND e.tipo_identificacion = 'N' THEN 'Persona Juridica'
        ELSE 'OTRO'
    END AS TipoPersona,
    CASE
        WHEN e.tipo_identificacion = 'N' THEN e.nombres
        ELSE ''
    END AS RazonSocial,
    ISNULL(e.nombres, '') AS PrimerNombreCliente,
    '' AS SegundoNombreCliente,
    '' AS PrimerApellidoCliente,
    '' AS SegundoApellidoCliente,
    ISNULL(e.direccion, '') AS Direccion,
    ISNULL(e.telefono_1, '') AS Telefono,
    ISNULL(e.celular, '') AS Celular,
    ISNULL(e.mail, '') AS Email,
    CASE
        WHEN l.Acepta = 0 THEN 'No'
        WHEN l.Acepta = 1 THEN 'Si'
        ELSE ''
    END AS PermiteContactar,
    CASE
        WHEN l.servicios = 1 THEN 'Desea ser informado de los productos y/o servicios'
        ELSE ''
    END AS MotivoContacto,
    '' AS KilometrajeVenta,
    '' AS Asegurado,
    '' AS TipoSeguro,
    '' AS VentaPolizaConcesionario,
    '' AS Aseguradora,
    CASE
        WHEN o.retoma = 'Si' THEN 'Si'
        ELSE 'No'
    END AS Retoma,
    ISNULL(o.tipoRetoma, '') AS TipoRetoma,
    'Cucuta' AS Sucursal
FROM
    dbo.v_vh_vehiculos AS b
    LEFT OUTER JOIN dbo.vh_familias AS c ON b.familia = c.familia
    LEFT OUTER JOIN dbo.vh_documentos_ped AS d ON b.codigo = d.codigo
    LEFT OUTER JOIN dbo.terceros AS e ON d.nit = e.nit
    LEFT OUTER JOIN dbo.terceros_nombres AS f ON e.nit = f.nit
    LEFT OUTER JOIN dbo.terceros AS g ON d.vendedor = g.nit
    LEFT OUTER JOIN dbo.v_documentos_valores AS h ON d.codigo = h.codigo
    AND d.plan_venta = 1
    LEFT OUTER JOIN dbo.vh_eventos_vehiculos AS i ON d.codigo = i.codigo
    AND i.evento = 00
    LEFT OUTER JOIN dbo.vh_eventos_vehiculos AS j ON d.codigo = j.codigo
    AND j.evento = 75
    LEFT OUTER JOIN dbo.vh_eventos_vehiculos AS k ON d.codigo = k.codigo
    AND k.evento = 55
    LEFT OUTER JOIN dbo.Crmv_terceros_medio_contacto AS l ON e.id = l.IdTerceros
    LEFT OUTER JOIN dbo.vh_creditos AS m ON d.IdNegocio = m.negocio
    LEFT OUTER JOIN (
        SELECT
            d.tipo,
            d.numero,
            dl.codigo,
            dl.valor_unitario,
            dl.costo_unitario
        FROM
            dbo.documentos AS d
            LEFT OUTER JOIN (
                SELECT
                    tipo,
                    numero,
                    codigo,
                    valor_unitario,
                    costo_unitario
                FROM
                    dbo.documentos_lin
                WHERE
                    (sw = 3)
            ) AS dl ON d.tipo = dl.tipo
            AND d.numero = dl.numero
    ) AS n ON b.codigo = n.codigo
    LEFT OUTER JOIN (
        SELECT
            numero,
            forma,
            valor,
            'Si' AS retoma,
            CASE
                WHEN forma = 6 THEN 'Directo'
                WHEN forma = 10 THEN 'Tercero'
            END AS tipoRetoma
        FROM
            dbo.vh_documentos_ped_pago
        WHERE
            (forma IN (10, 6))
    ) AS o ON d.numero = o.numero
    LEFT OUTER JOIN (
        SELECT
            z.numero,
            z.forma,
            z.valor
        FROM
            (
                SELECT
                    numero,
                    MAX(valor) AS valor
                FROM
                    (
                        SELECT
                            numero,
                            forma,
                            SUM(valor) AS valor
                        FROM
                            dbo.vh_documentos_ped_pago AS vh_documentos_ped_pago_2
                        GROUP BY
                            numero,
                            forma
                    ) AS x
                GROUP BY
                    numero
            ) AS y
            LEFT OUTER JOIN (
                SELECT
                    numero,
                    forma,
                    SUM(valor) AS valor
                FROM
                    dbo.vh_documentos_ped_pago AS vh_documentos_ped_pago_1
                GROUP BY
                    numero,
                    forma
            ) AS z ON y.numero = z.numero
            AND y.valor = z.valor
    ) AS p ON d.numero = p.numero
    LEFT OUTER JOIN dbo.terceros AS q ON d.nit_prenda = q.nit
WHERE
    (h.bodega = 3)
    AND (h.fecha >= DATEADD(day, - 62, GETDATE()))