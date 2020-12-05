USE NOMINA_HS;
select * from novedad;
SELECT n.id_novedad,u.USUARIO,tn.NOMBRE_TN,n.empleadofk,n.fecha_inicio,n.fecha_fin,n.valor,e.ESTADO FROM novedad as n 
INNER JOIN estado as e ON n.estado_id = e. id_estado
INNER JOIN usuarios as u ON u.id_usuario = n.id_usuarios_fk
INNER JOIN tipo_novedad as tn ON tn.id_tiponovedad = n.tipo_novedad_fk;
SELECT  d.*,e. ESTADO  FROM Departamento d INNER JOIN ESTADO e on e. ID_ESTADO = d.ESTADO_ID  
delete from departamento where id_dpto = 4
update departamento set id_dpto=4  where id_dpto = 5
select * from Departamento;
SELECT * FROM USUARIOS
select * from empleado;
SELECT * FROM OBRA;
SELECT *  FROM CARGO;
select * from contrato;
SELECT em.ID_EMPLEADO,em.NOMBRES,em.APELLIDOS,em.FECHA_INGRESO,em.DIRECCION,em.TELEFONO,em.SALARIO,c.NOMBRE_CARGO,o.NOMBRE_OBRA,cn.TIPO_CONTRATO,d.NOMBRE_DPTO,e.ESTADO  FROM Empleado em 
INNER JOIN estado e on e.ID_ESTADO = em.ESTADO_ID
INNER JOIN cargo c on c.ID_CARGO = em.ID_CARGO_FK 
INNER JOIN obra o ON o.ID_OBRA = em.ID_CARGO_FK
INNER JOIN contrato cn ON cn.ID_CONTRATO = em.ID_CONTRATO_FK
INNER JOIN departamento d ON d.ID_DPTO = em.ID_DEPARTAMENTO_FK
SELECT * FROM NOVEDAD;
select * from rol;
SELECT u.*,e.ESTADO,r.NOMBRE FROM usuarios u INNER JOIN estado e on e.ID_ESTADO = u.ESTADO_ID INNER JOIN rol r on r.ID_ROL=u.ID_ROL_FK;
select * from empleado

update empleado set ESTADO_ID=1 WHERE ID_EMPLEADO=123
alter table usuarios CHANGE column CONTRASEÑA  CONTRASENA VARCHAR(30);

select * from novedad
select * from tipo_novedad

SELECT e.ID_EMPLEADO
	,e.NOMBRES
	,e.APELLIDOS
	,e.SALARIO
    ,c.NOMBRE_CARGO
    ,IF( tp.PORCENTAJE IS NULL,0,(e.SALARIO * tp.PORCENTAJE)) AS Salud
    ,IF(tp1.PORCENTAJE IS NULL,0,(e.SALARIO * tp1.PORCENTAJE)) AS Pension
    ,IF(nHE.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHE.PORCENTAJE) * SUM(nHE.VALOR)),0) AS HoraExtra
    ,IF(nHD.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHD.PORCENTAJE) * SUM(nHD.VALOR)),0) AS HoraDominical
    ,IF(nV.VALOR IS NOT NULL,(((e.SALARIO / 240) * 8) * SUM(nV.VALOR)),0) AS Vacaciones
    ,(e.SALARIO + IF(nHE.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHE.PORCENTAJE) * SUM(nHE.VALOR)),0) + IF(nHD.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHD.PORCENTAJE) * SUM(nHD.VALOR)),0)
    + IF(nV.VALOR IS NOT NULL,(((e.SALARIO / 240) * 8) * SUM(nV.VALOR)),0)) AS TotalDevengado
    ,(IF( tp.PORCENTAJE IS  NULL,0,(e.SALARIO * tp.PORCENTAJE)) + IF(tp1.PORCENTAJE IS  NULL,0,(e.SALARIO * tp1.PORCENTAJE))) AS TotalDeducido
    ,((e.SALARIO + IF(nHE.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHE.PORCENTAJE) * SUM(nHE.VALOR)),0) + IF(nHD.VALOR IS NOT NULL,(((e.SALARIO / 240) * tpHD.PORCENTAJE) * SUM(nHD.VALOR)),0)
    + IF(nV.VALOR IS NOT NULL,(((e.SALARIO / 240) * 8) * SUM(nV.VALOR)),0)) - (IF( tp.PORCENTAJE IS  NULL,0,(e.SALARIO * tp.PORCENTAJE)) + IF(tp1.PORCENTAJE IS  NULL,0,(e.SALARIO * tp1.PORCENTAJE)))) AS TotalAPagar
FROM empleado AS e
LEFT JOIN tipo_novedad as tpHE ON tpHE.nombre_tn = 'Hora Extra'
LEFT JOIN novedad AS nHE ON  nHE.empleadofk = e.id_empleado  AND nHE.tipo_novedad_fk=tpHE.id_tiponovedad
LEFT JOIN tipo_novedad as tpHD ON tpHD.nombre_tn = 'Hora Dominical'
LEFT JOIN novedad AS nHD ON nHD.empleadofk = e.id_empleado  AND nHD.tipo_novedad_fk=tpHD.id_tiponovedad
LEFT JOIN novedad AS nV ON nV.empleadofk = e.id_empleado  AND nV.tipo_novedad_fk=(select id_tiponovedad from tipo_novedad where nombre_tn = 'Vacaciones')
LEFT JOIN tipo_novedad AS tp ON tp.nombre_tn = 'Salud'
LEFT JOIN tipo_novedad AS tp1 ON tp1.nombre_tn = 'Pension'
INNER JOIN cargo as c ON c.id_cargo=e.id_cargo_fk
GROUP BY e.id_empleado


