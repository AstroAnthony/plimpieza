INSERT INTO tb_equipo (nombre, apellido)
VALUES ('Julio', 'Cesar');
SELECT * FROM tb_equipo;
INSERT INTO tb_paquete (nombre, tipopaquete, cantidad)
VALUES ('Paquete 1', 'Básico', '5');
SELECT * FROM tb_paquete;
INSERT INTO tb_paquete (nombre, tipopaquete, cantidad)
VALUES ('Paquete 6', 'Municipio', '200');
UPDATE tb_paquete SET nombre = 'Paquete 7'
WHERE id_paquete = 7;
UPDATE tb_paquete SET estado = 0
WHERE id_paquete = 7;