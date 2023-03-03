Select
    rr.codigo_oferta,
    pendvtas = v1.can_ventas - v1.can_des_ventas,
    can_transito =case
        when v1.can_transito > 0 then v1.can_transito - v1.can_des_compras
        else 0
    end,
    pendcom = v1.can_compras - v1.can_des_compras,
    fecpend = v1.ult_fecha_com,
    b.descripcion,
    b.bodega,
    r.codigo,
    can_ini = convert(decimal(22, 0), r.can_ini),
    can_ent = convert(decimal(22, 0), r.can_ent),
    can_sal = convert(decimal(22, 0), r.can_sal),
    stock = convert(decimal(22, 0), r.can_ini + r.can_ent - r.can_sal),
    f.ubicacion,
    f.ubicacion2,
    f.toma_1,
    f.toma_2,
    f.toma_3,
    f.stock_minimo,
    f.stock_maximo,
    f.stock_seguridad,
    separa = d.cantidad,
    rr.calificacion_abc,
    Traslados = ''
FROM
    #tem_a a  LEFT JOIN referencias_sto  r ON a.bodega=r.bodega and a.codigo=r.codigo and a.ano=r.ano and a.mes=r.mes JOIN referencias rr ON a.codigo=rr.codigo  JOIN bodegas b ON a.bodega=b.bodega  
    LEFT JOIN referencias_fis f ON a.bodega = f.bodega
    AND a.codigo = f.codigo
    LEFT JOIN v_documentos_lin_separa d ON a.bodega = d.bodega
    AND a.codigo = d.codigo
    LEFT JOIN v_pend_sw_tot v1 ON a.codigo = v1.codigo
    and a.bodega = v1.bodega
Order by
    b.bodega,
    rr.codigo_oferta