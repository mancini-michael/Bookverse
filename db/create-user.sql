CREATE TABLE users (
    nome VARCHAR NOT NULL,
    cognome VARCHAR NOT NULL,
    email VARCHAR PRIMARY KEY,
    passw VARCHAR NOT NULL,
    indirizzo VARCHAR NOT NULL,
    citta VARCHAR NOT NULL,
    cap NUMERIC NOT NULL
);