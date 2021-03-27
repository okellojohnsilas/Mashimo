-- Creating the database
CREATE DATABASE IF NOT EXISTS mashimo;
USE mashimo;

-- TABLES SECTION
CREATE TABLE IF NOT EXISTS users(
  userId int(17) NOT NULL AUTO_INCREMENT,
  firstName text NOT NULL DEFAULT '',
  lastName text NOT NULL DEFAULT '',
  userName varchar(60) NOT NULL DEFAULT '',
  emailAddress varchar(60) NOT NULL DEFAULT '',
  gender text NOT NULL DEFAULT '',
  dateOfBirth date DEFAULT NULL,
  userPassword text NOT NULL DEFAULT '',
  userType varchar(20) NOT NULL DEFAULT '',
  accountStatus text NOT NULL DEFAULT '',
  accountCreated timestamp NOT NULL DEFAULT current_timestamp(),
  accountLastUpdated timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (userId),
  UNIQUE KEY Username (userName),
  UNIQUE KEY Email (emailAddress)
) ;

CREATE TABLE IF NOT EXISTS productCategories(
  productCategoryId int(17) NOT NULL AUTO_INCREMENT,
  productCategoryName varchar(50) NOT NULL DEFAULT '',
  productCategoryType text NOT NULL DEFAULT '',
  productCategoryDescription text NOT NULL DEFAULT '',
  productPicture text NOT NULL DEFAULT '',
  productCategoryAvailability text NOT NULL DEFAULT '',
  UNIQUE KEY (productCategoryName),
  PRIMARY KEY (productCategoryId)
);

CREATE TABLE IF NOT EXISTS products(
  productId int(17) NOT NULL AUTO_INCREMENT,
  productName text NOT NULL DEFAULT '',
  productCategoryName text NOT NULL DEFAULT '',
  productPicture text NOT NULL DEFAULT '',
  productPrice decimal(10,2) NOT NULL,
  discountRate int(5) NOT NULL,
  productDescription text NOT NULL DEFAULT '',
  productAltPicture1 text NOT NULL DEFAULT '',
  productAltPicture2 text NOT NULL DEFAULT '',
  productAvailability text NOT NULL DEFAULT '',
  productAdded timestamp NOT NULL DEFAULT current_timestamp(),
  UNIQUE KEY (productName),
  PRIMARY KEY (productId)
);

CREATE TABLE IF NOT EXISTS messages(
  messageId int(17) NOT NULL AUTO_INCREMENT,
  userEmail text NOT NULL DEFAULT '',
  messageSubject text NOT NULL DEFAULT '',
  messageContent text NOT NULL DEFAULT '',
  messageResponse text NOT NULL DEFAULT '',
  PRIMARY KEY (messageId)
);

-- ---------------------------------------------------------------------
-- VIEWS SECTION

-- View to select the adminstrators
CREATE VIEW administrators AS
SELECT firstName, lastName, userName, emailAddress, gender, dateOfBirth, accountStatus
FROM users
WHERE userType = 'admin';

-- View to select the clients
CREATE VIEW clients AS
SELECT firstName, lastName, userName, emailAddress, gender, dateOfBirth, accountStatus
FROM users
WHERE userType = 'user';
