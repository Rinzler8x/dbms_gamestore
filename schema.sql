CREATE DATABASE dbmsproject;

CREATE TABLE games(
    games_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    games_name varchar(128) NOT NULL,
    games_publisher varchar(128) NOT NULL,
    games_genre varchar(128) NOT NULL,
    games_price varchar(128) NOT NULL,
    games_publishdate varchar(128) NOT NULL
);

CREATE TABLE users(
    users_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    users_username varchar(128) NOT NULL,
    users_email varchar(128) NOT NULL,
    users_password varchar(128) NOT NULL,
    users_name varchar(128) NOT NULL
);

CREATE TABLE bill(
    bill_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    bill_userid int(11) NOT NULL,
    bill_gameid int(11) NOT NULL,
    bill_date varchar(128) NOT NULL,
    bill_amount varchar(128) NOT NULL,
    FOREIGN KEY(bill_userid) REFERENCES users(users_id) ON DELETE CASCADE,
    FOREIGN KEY(bill_gameid) REFERENCES games(games_id) ON DELETE CASCADE
);