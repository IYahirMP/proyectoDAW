CREATE TABLE organigrama (
    ID_ORGANIGRAMA int(11) NOT NULL AUTO_INCREMENT,
    AREA varchar(60) NOT NULL,
    DESCRIPCION text NOT NULL,
    AREA_DEPENDE int(11) NOT NULL,
    NIVEL int(11) NOT NULL,
    TIPO_AREA int(11) NOT NULL,
    TITULAR varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE area (
    ID_AREA int(11) NOT NULL,
    NOMBRE_AREA varchar(20) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

SELECT organigrama.ID_ORGANIGRAMA,
        organigrama.AREA,
        organigrama.DESCRIPCION,
        area1.NOMBRE_AREA as AREA_DEPENDE,
        organigrama.NIVEL,
        area2.NOMBRE_AREA as TIPO_AREA,
        organigrama.TITULAR
        FROM organigrama
        INNER JOIN area area1 ON organigrama.AREA_DEPENDE = area1.ID_AREA
        INNER JOIN area area2 ON organigrama.TIPO_AREA = area2.ID_AREA;

SET FOREIGN_KEY_CHECKS = 0;
SET GLOBAL FOREIGN_KEY_CHECKS = 0;