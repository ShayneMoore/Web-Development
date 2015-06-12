CREATE DATABASE db1;
USE db1;

CREATE TABLE flight(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	air_num VARCHAR(15) NOT NULL,
	dep_city VARCHAR(15) NOT NULL,
	dest_city VARCHAR(15) NOT NULL,
	cur_price INT NOT NULL
);

INSERT INTO flight(air_num,dep_city, dest_city, cur_price)
	VALUES ('UA298','Atlanta','Boston',298);

INSERT INTO flight(air_num,dep_city, dest_city, cur_price)
	VALUES ('AA1471','Atlanta','Los Angeles',419);

INSERT INTO flight(air_num,dep_city, dest_city, cur_price)
	VALUES ('AA121','Texas','Los Angeles',419);

INSERT INTO flight(air_num,dep_city, dest_city, cur_price)
	VALUES ('UA165','Boston','Los Angeles',419);
