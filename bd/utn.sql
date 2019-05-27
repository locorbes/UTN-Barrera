CREATE TABLE TIPOS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tipo VARCHAR(32) NOT NULL
)ENGINE=INNODB;

CREATE TABLE USUARIOS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idtipo INT NOT NULL,
    estado BOOL,
    mail VARCHAR(320),
    clave VARCHAR(32),
    CONSTRAINT FOREIGN KEY (idtipo) REFERENCES TIPOS(id)
)ENGINE=INNODB;

CREATE TABLE EVENTOSXCUENTAS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idusuario INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    descripcion VARCHAR(32),
    CONSTRAINT FOREIGN KEY (idusuario) REFERENCES USUARIOS(id)
)ENGINE=INNODB;

CREATE TABLE ESTADOSTARJETA(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	estado VARCHAR(32)
)ENGINE=INNODB;

CREATE TABLE TARJETAS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idestado INT NOT NULL,
    idusuario INT,
    CONSTRAINT FOREIGN KEY (idestado) REFERENCES ESTADOSTARJETA(id),    
    CONSTRAINT FOREIGN KEY (idusuario) REFERENCES USUARIOS(id)
)ENGINE=INNODB;

CREATE TABLE EVENTOSXTARJETAS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    idusuario INT,
    idtarjeta INT,    
    CONSTRAINT FOREIGN KEY (idusuario) REFERENCES USUARIOS(id),
    CONSTRAINT FOREIGN KEY (idtarjeta) REFERENCES TARJETAS(id)
)ENGINE=INNODB;

CREATE TABLE PERSONAS(
	dni INT PRIMARY KEY NOT NULL,
    nombre VARCHAR(32),
    apellido VARCHAR(32),
    estado BOOL,
    saldo DECIMAL(10,2)   
)ENGINE=INNODB;

CREATE TABLE TARJETASXPERSONA(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    dni INT NOT NULL,
    idtarjeta INT NOT NULL,
    estado BOOL,
    CONSTRAINT FOREIGN KEY (dni) REFERENCES PERSONAS(dni),    
    CONSTRAINT FOREIGN KEY (idtarjeta) REFERENCES TARJETAS(id)
)ENGINE=INNODB;

CREATE TABLE PAGOS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,  
    pago VARCHAR(32)		
)ENGINE=INNODB;

CREATE TABLE TARIFAS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(32),
    tarifa DECIMAL(10,2) NULL
)ENGINE=INNODB;

CREATE TABLE RECIBOS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    dni INT NOT NULL,
    idusuario INT NOT NULL,
    idpago INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10,2),   
    CONSTRAINT FOREIGN KEY (dni) REFERENCES PERSONAS(dni),
    CONSTRAINT FOREIGN KEY (id) REFERENCES PAGOS(id),
    CONSTRAINT FOREIGN KEY (idusuario) REFERENCES USUARIOS(id)
)ENGINE=INNODB;

CREATE TABLE DETALLES(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idrecibo INT NOT NULL, 
    idtarifa INT NOT NULL, 
    CONSTRAINT FOREIGN KEY (idrecibo) REFERENCES RECIBOS(id),
    CONSTRAINT FOREIGN KEY (idtarifa) REFERENCES TARIFAS(id)
)ENGINE=INNODB;

CREATE TABLE RELACION(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	relacion VARCHAR(32)
)ENGINE=INNODB;

CREATE TABLE SECTORES(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	sector VARCHAR(64)
)ENGINE=INNODB;

CREATE TABLE PERSONAXRELACIONXSECTOR(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    dni INT NOT NULL,
    idrelacion INT NOT NULL,
    idsector INT NOT NULL,
    CONSTRAINT FOREIGN KEY (dni) REFERENCES PERSONAS(dni),
    CONSTRAINT FOREIGN KEY (idrelacion) REFERENCES RELACION(id),
    CONSTRAINT FOREIGN KEY (idsector) REFERENCES SECTORES(id)
)ENGINE=INNODB;

CREATE TABLE PUESTOS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    puesto VARCHAR(32)
)ENGINE=INNODB;

CREATE TABLE SALIDAS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idpuesto INT NOT NULL,
    dni INT NOT NULL,
    idtarjeta INT NULL,    
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT FOREIGN KEY (idpuesto) REFERENCES PUESTOS(id),
    CONSTRAINT FOREIGN KEY (dni) REFERENCES PERSONAS(dni)
)ENGINE=INNODB;

CREATE TABLE ENTRADAS(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idpuesto INT NOT NULL,
    dni INT NOT NULL,
    idtarjeta INT NULL,    
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT FOREIGN KEY (idpuesto) REFERENCES PUESTOS(id),
    CONSTRAINT FOREIGN KEY (dni) REFERENCES PERSONAS(dni)
)ENGINE=INNODB;