CREATE TABLE users (
    nome VARCHAR NOT NULL,
    cognome VARCHAR NOT NULL,
    email VARCHAR PRIMARY KEY,
    passw VARCHAR NOT NULL,
    indirizzo VARCHAR NOT NULL,
    citta VARCHAR NOT NULL,
    cap VARCHAR NOT NULL
);

CREATE TABLE user_purchases (
    email VARCHAR REFERENCES users(email),
    isbn VARCHAR REFERENCES books_catalogue(isbn),
    prezzo VARCHAR NOT NULL
);

CREATE TABLE user_shopping_cart (
    email VARCHAR REFERENCES users(email),
    isbn VARCHAR REFERENCES books_catalogue(isbn),
    prezzo VARCHAR NOT NULL
);