CREATE TABLE Cliente(
idCliente INTEGER PRIMARY KEY,
Nombre VARCHAR(100),
Fecha_Nasc DATE,
Email VARCHAR(100),
Pass VARCHAR(100));

CREATE TABLE Solicitacion(
idSol INTEGER PRIMARY KEY,
Nombre VARCHAR(100),
Descripcion VARCHAR(10000),
Solicitacion_Cliente INT,
FOREIGN KEY (Solicitacion_Cliente) REFERENCES Cliente(idCliente));

CREATE TABLE Juego(
idJuego INTEGER PRIMARY KEY,
Fecha_Lanz DATE,
Cat VARCHAR(50),
Nombre VARCHAR(200),
Juego_Cliente INT,
FOREIGN KEY (Juego_Cliente) REFERENCES Cliente(idCliente));

CREATE TABLE Video(
idVideo INTEGER PRIMARY KEY,
Titulo VARCHAR(100),
Descripcion VARCHAR(10000),
Video_Noticia INT,
FOREIGN KEY (Video_Noticia) REFERENCES Noticia(idNoticia));

CREATE TABLE Noticia(
idNoticia INTEGER PRIMARY KEY,
Texto VARCHAR(10000),
h1 VARCHAR(1000),
Juego_idJuego INT,
FOREIGN KEY (Juego_idJuego) REFERENCES Juego(idJuego));



CREATE TABLE Imagen(
idImagen INTEGER PRIMARY KEY,
Titulo VARCHAR(1000),
Descripcion VARCHAR(1000),
Imagen_Noticia INT,
FOREIGN KEY (Imagen_Noticia) REFERENCES Noticia(idNoticia));


