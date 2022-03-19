CREATE DATABASE minijuegos;

USE minijuegos;

CREATE TABLE Flashcards(
    idFlashcard tinyint unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    img blob NULL,
    descripcion varchar(300) NOT NULL,
    audioUrl VARCHAR(512) CHARACTER SET 'ascii' COLLATE 'ascii_general_ci' NOT NULL,
    tipo char(1) NOT NULL
);