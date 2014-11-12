CREATE TABLE Empleado (
    id INT AUTO_INCREMENT NOT NULL, 
    Nombre VARCHAR(64) NOT NULL, 
    Apellido VARCHAR(64) NOT NULL, 
    Telefono VARCHAR(32) NOT NULL, 
    Direccion VARCHAR(100) NOT NULL, 
    Bonificacion BIGINT NOT NULL, 
    Sueldo BIGINT NOT NULL, 
    PRIMARY KEY(id)
) 
DEFAULT CHARACTER SET utf8 
COLLATE utf8_unicode_ci ENGINE = InnoDB;