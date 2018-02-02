# Codepattern

Code pattern

url: https://codepattern.azurewebsites.net/

Run These commands:

CREATE TABLE users(
    ID int IDENTITY(1,1) PRIMARY KEY,
    username varchar(255) NOT NULL,
    upassword varchar(255),
);

CREATE TABLE levels (
    level1 varchar(255) NOT NULL,
    level2 varchar(255) NOT NULL,
    ID int FOREIGN KEY REFERENCES users(ID)
);
