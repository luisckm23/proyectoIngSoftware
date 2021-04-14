SELECT * FROM clientes;

INSERT INTO clientes (nombre_cliente, direccion, telefono, usuario, e_mail, contraseña) VALUES
('Xavier', 'Cimatario', 0, 'xavi', 'xavier@gmail.com', 'xavier123');

DELETE FROM clientes WHERE id_cliente=7;



SELECT * FROM libros;

INSERT INTO libros (titulo, isbn, precio, stock, editorial) VALUES
('ingenieria de software', '965321', 200, 3, 'Sommerville'),
('Bases de datos', '965784', 200, 2, 'Rama');

DELETE FROM libros WHERE id_libro=13;