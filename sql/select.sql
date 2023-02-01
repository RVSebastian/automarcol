-- Query para filtrar por modelo
SELECT
    *
FROM
    (
        select
            DISTINCT I1.Marca,
            I1.Version_DescipcionModelo,
            I1.Ano_Modelo,
            STUFF(
                (
                    select
                        ', ' + upper(I3.descripcion)
                    from
                        vh_colores as I3
                        INNER JOIN INVNUE01_2021_2 as I2 on I2.CodigoColor = I3.color
                    WHERE
                        I2.Version_DescipcionModelo = I1.Version_DescipcionModelo FOR XML PATH('')
                ),
                1,
                2,
                ''
            ) AS Colores,
            I1.Costocompra,
            I1.Clase,
            '' AS PresentationIMG,
            '' AS CarrouselIMG,
            '' AS CollageIMG,
            '' AS Traccion,
            '' AS Cilindraje,
            '' AS Combustible,
            '' AS Linea,
            '' AS Puertas,
            '' AS Pasajeros,
            '' AS Version,
            UPPER(I1.status) AS Status
        from
            INVNUE01_2021_2 AS I1
        UNION
        select
            DISTINCT I1.Marca,
            I1.Version_DescipcionModelo,
            I1.Ano_Modelo,
            STUFF(
                (
                    select
                        ', ' + upper(I3.descripcion)
                    from
                        vh_colores as I3
                        INNER JOIN INVNUE01_2021_2 as I2 on I2.CodigoColor = I3.color
                    WHERE
                        I2.Version_DescipcionModelo = I1.Version_DescipcionModelo FOR XML PATH('')
                ),
                1,
                2,
                ''
            ) AS Colores,
            I1.Costocompra,
            I1.Clase,
            '' AS PresentationIMG,
            '' AS CarrouselIMG,
            '' AS CollageIMG,
            '' AS Traccion,
            '' AS Cilindraje,
            '' AS Combustible,
            '' AS Linea,
            '' AS Puertas,
            '' AS Pasajeros,
            '' AS Version,
            UPPER(I1.status) AS Status
        from
            INVNUE01_2021_BAJAJ AS I1 -- UNIMOS BAJAJ
        UNION
        select
            DISTINCT I1.Marca,
            I1.Version_DescipcionModelo,
            I1.Ano_Modelo,
            STUFF(
                (
                    select
                        ', ' + upper(I3.descripcion)
                    from
                        vh_colores as I3
                        INNER JOIN INVNUE01_2021_2 as I2 on I2.CodigoColor = I3.color
                    WHERE
                        I2.Version_DescipcionModelo = I1.Version_DescipcionModelo FOR XML PATH('')
                ),
                1,
                2,
                ''
            ) AS Colores,
            I1.Costocompra,
            I1.Clase,
            '' AS PresentationIMG,
            '' AS CarrouselIMG,
            '' AS CollageIMG,
            '' AS Traccion,
            '' AS Cilindraje,
            '' AS Combustible,
            '' AS Linea,
            '' AS Puertas,
            '' AS Pasajeros,
            '' AS Version,
            UPPER(I1.status) AS Status
        from
            INVNUE01_2021_PEUGEOT AS I1 -- UNIMOS PEUGEOT
        UNION
        select
            DISTINCT I1.Marca,
            I1.Version_DescipcionModelo,
            I1.Ano_Modelo,
            STUFF(
                (
                    select
                        ', ' + upper(I3.descripcion)
                    from
                        vh_colores as I3
                        INNER JOIN INVNUE01_2021_2 as I2 on I2.CodigoColor = I3.color
                    WHERE
                        I2.Version_DescipcionModelo = I1.Version_DescipcionModelo FOR XML PATH('')
                ),
                1,
                2,
                ''
            ) AS Colores,
            I1.Costocompra,
            I1.Clase,
            '' AS PresentationIMG,
            '' AS CarrouselIMG,
            '' AS CollageIMG,
            '' AS Traccion,
            '' AS Cilindraje,
            '' AS Combustible,
            '' AS Linea,
            '' AS Puertas,
            '' AS Pasajeros,
            '' AS Version,
            UPPER(I1.status) AS Status
        from
            INVNUE01_2021_FOTON AS I1 -- UNIMOS FOTON
        UNION
        select
            DISTINCT I1.Marca,
            I1.Version_DescipcionModelo,
            I1.Ano_Modelo,
            STUFF(
                (
                    select
                        ', ' + upper(I3.descripcion)
                    from
                        vh_colores as I3
                        INNER JOIN INVNUE01_2021_2 as I2 on I2.CodigoColor = I3.color
                    WHERE
                        I2.Version_DescipcionModelo = I1.Version_DescipcionModelo FOR XML PATH('')
                ),
                1,
                2,
                ''
            ) AS Colores,
            I1.Costocompra,
            I1.Clase,
            '' AS PresentationIMG,
            '' AS CarrouselIMG,
            '' AS CollageIMG,
            '' AS Traccion,
            '' AS Cilindraje,
            '' AS Combustible,
            '' AS Linea,
            '' AS Puertas,
            '' AS Pasajeros,
            '' AS Version,
            UPPER(I1.status) AS Status
        from
            INVNUE01_2021_FCA AS I1 -- UNIMOS FCA
    ) T
where
    Version_DescipcionModelo = 'ESCAPE 4X2'
    and status = 'disponible' --filtramos por modelo;




    -- QUERY PARA BUSCAR POR MARCA
SELECT
    *
FROM
    (
        select
            DISTINCT I1.Marca,
            I1.Version_DescipcionModelo,
            I1.Ano_Modelo,
            I1.Costocompra,
            I1.Clase,
            '' AS PresentationIMG,
            '' AS Traccion,
            '' AS Cilindraje,
            '' AS Combustible,
            '' AS Puertas,
            UPPER(I1.status) AS Status
        from
            INVNUE01_2021_2 AS I1
            INNER JOIN img_modelo as img on img.modelo = I1.Version_DescripcionModelo
        WHERE
            I1.status = 'disponible' -- UNIMOS FORD
        UNION
        select
            DISTINCT I1.Marca,
            I1.Version_DescipcionModelo,
            I1.Ano_Modelo,
            I1.Costocompra,
            I1.Clase,
            '' AS PresentationIMG,
            '' AS Traccion,
            '' AS Cilindraje,
            '' AS Combustible,
            '' AS Puertas,
            UPPER(I1.status) AS Status
        from
            INVNUE01_2021_BAJAJ AS I1
        WHERE
            I1.status = 'disponible' -- UNIMOS BAJAJ
        UNION
        select
            DISTINCT I1.Marca,
            I1.Version_DescipcionModelo,
            I1.Ano_Modelo,
            I1.Costocompra,
            I1.Clase,
            '' AS PresentationIMG,
            '' AS Traccion,
            '' AS Cilindraje,
            '' AS Combustible,
            '' AS Puertas,
            UPPER(I1.status) AS Status
        from
            INVNUE01_2021_FCA AS I1
        WHERE
            I1.status = 'disponible' -- UNIMOS FCA
        UNION
        select
            DISTINCT I1.Marca,
            I1.Version_DescipcionModelo,
            I1.Ano_Modelo,
            I1.Costocompra,
            I1.Clase,
            '' AS PresentationIMG,
            '' AS Traccion,
            '' AS Cilindraje,
            '' AS Combustible,
            '' AS Puertas,
            UPPER(I1.status) AS Status
        from
            INVNUE01_2021_PEUGEOT AS I1
        WHERE
            I1.status = 'disponible' -- UNIMOS PEUGEOT
        UNION
        select
            DISTINCT I1.Marca,
            I1.Version_DescipcionModelo,
            I1.Ano_Modelo,
            I1.Costocompra,
            I1.Clase,
            '' AS PresentationIMG,
            '' AS Traccion,
            '' AS Cilindraje,
            '' AS Combustible,
            '' AS Puertas,
            UPPER(I1.status) AS Status
        from
            INVNUE01_2021_FOTON AS I1
        WHERE
            I1.status = 'disponible' -- UNIMOS FOTON
    ) T
WHERE
    MARCA = 'BAJAJ';

--FILTRAMOS POR MARCA