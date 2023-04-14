CREATE DATABASE foodkrokodile CHARACTER SET utf16 COLLATE utf16_hungarian_ci;
USE foodkrokodile;

-- PrimaryKey Tables
-- Az egyszeübb dolgok lekreálása

CREATE TABLE asd{
    id INT,
    te TEXT
};

/*
CREATE TABLE user {
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    loginName VARCHAR(50) NOT NULL,
    pssw VARCHAR(255) NOT NULL,
    name VARCHAR(50) NOT NULL
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    address TEXT NOT NULL
};
CREATE TABLE restaruant{
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    loginName VARCHAR(50) NOT NULL,
    pssw VARCHAR(255) NOT NULL,
    name VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    address TEXT NOT NULL
};

CREATE TABLE courier{
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    loginName VARCHAR(50) NOT NULL,
    pssw VARCHAR(255) NOT NULL
};

CREATE TABLE status{
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    typeName VARCHAR(50) NOT NULL
};
CREATE TABLE payment{
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    typeName VARCHAR(50) NOT NULL
};

CREATE TABLE category{
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    typeName VARCHAR(50) NOT NULL
};

-- Foreign Key Tables
-- Amikhez már meglévő kulcsok kellenek
CREATE TABLE food {
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    desc TEXT,
    categId INTEGER FOREIGN KEY REFERENCES category(id)
};

CREATE TABLE menu {
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    price INTEGER NOT NULL,
    foodId INTEGER FOREIGN KEY REFERENCES food(id),
    resId INTEGER FOREIGN KEY REFERENCES restaruant(id)
};

CREATE TABLE order {
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userId INTEGER FOREIGN KEY REFERENCES user(id),
    resId INTEGER FOREIGN KEY REFERENCES restaruant(id),
    orderDate DATETIME, -- a Cart hiányában ezt csak akkor adom meg ha megerősíti
    shippedDate DATETIME, -- itt is
    address TEXT,
    statusId INTEGER FOREIGN KEY REFERENCES status(id) NOT NULL,
    paymentId INTEGER FOREIGN KEY REFERENCES payment(id),   -- amig nem választ addig nem töltjük fel 
    price INTEGER NOT NULL --SUM-olt számolt Price
};

-- Az elöző tábla annyi magyarázatra szorul még hogy a Cart/kosár nevezük akárminek az alapból nem adatbázis szinten lesz elérhető, de addig is egy 'template'
-- orderinget el kell kezdeni ha neki állna vásárolni.. ezt meg ha gombr akattint végig kell majd ellenöriznünk és a status változtatásával tudjuk figyelni éppen milyen

CREATE TABLE orderedItems {
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    qty INTEGER NOT NULL DEFAULT=1,
    orderId INTEGER FOREIGN KEY REFERENCES order(id),
    menuId INTEGER FOREIGN KEY REFERENCES menu(id)
};

CREATE TABLE delivery {
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    startDate DATETIME NOT NULL,
    orderId INTEGER FOREIGN KEY REFERENCES order(id),
    courierId INTEGER FOREIGN KEY REFERENCES courier(id)
};
*/
-- Feltöltések adatokkal:::