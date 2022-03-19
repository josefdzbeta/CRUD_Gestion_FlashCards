DROP DATABASE minijuegos;
CREATE DATABASE minijuegos;


USE minijuegos;

CREATE TABLE Flashcards(
    idFlashcard tinyint unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    descripcion varchar(300) NOT NULL,
    audioUrl VARCHAR(512) CHARACTER SET 'ascii' COLLATE 'ascii_general_ci' NOT NULL,
    img VARCHAR(512) CHARACTER SET 'ascii' COLLATE 'ascii_general_ci' NULL,
    tipo varchar(20) NOT NULL
);