CREATE DATABASE tienda_master;
USE tienda_master;

CREATE TABLE usuarios(
id              int(255) auto_increment not null,
email           varchar(255) not null,
password        varchar(255) not null,
rol             varchar(20),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)  
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NULL, 'admin@admin.com', 'contraseña', 'admin');

CREATE TABLE productos(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
descripcion     text,
precio          float(100,2) not null,
stock           int(255) not null,
)ENGINE=InnoDb;

INSERT INTO productos VALUES(NULL, 'MarxXXI', 'En un momento histórico de tremendas y rapidísimas transformaciones...', '7', '100');

INSERT INTO productos VALUES(NULL, 'Ecologia', 'Nos hallamos ante un aumento generalizado de los precios de los combustibles y, como consecuencia, de los alimentos...', '8', '70');

INSERT INTO productos VALUES(NULL, 'Coyuntura', 'Desde que el régimen del dinero se impusiera a sangre y fuego, el carácter cíclico...', '8', '50');


CREATE TABLE pedidos(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
provincia       varchar(100) not null,
localidad       varchar(100) not null,
direccion       varchar(255) not null,
coste           float(200,2) not null,
estado          varchar(20) not null,
fecha           date,
hora            time,
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
producto_id     int(255) not null,
unidades        int(255) not null,
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;



