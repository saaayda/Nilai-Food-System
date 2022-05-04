-- backup: mysqldump -uroot -proot ums users hotelinfo -> backup.sql(in cmd)
-- restore: 1. create database ums; 2. use ums; 3. mysql -uroot -proot ums < C:\Users\User\backup.sql(in cmd)
-- Reference: http://www.booking.com/ The hotel info from booking.com


-- create database named "UMS"
CREATE DATABASE UMS;

USE UMS;


/*
	table name: securityLevel
	table description: this table is used to define user security level.
*/
CREATE TABLE securityLevel(
SecurityLevel_ID int PRIMARY KEY auto_increment,
SecurityDescription varchar(20)
);


-- insert two security level.
insert into securityLevel values(null, 'General');
insert into securityLevel values(null, 'Admin');


/*
	table name: Users
	table description: this table is used to hold user info include user name, password, and security level.
*/
CREATE TABLE Users(
User_ID  INT PRIMARY KEY auto_increment,
User_Name varchar(50),
Pass_Word varchar(50),
SecurityLevel_ID int,
FOREIGN KEY (SecurityLevel_ID) REFERENCES securityLevel(SecurityLevel_ID)
);




/*
	table name: HotelInfo
	table description: this table is used to hold hotel info include hotel name, hotel rating, location of this hotel(country and city), and free room.
*/
CREATE TABLE RestroInfo(
RestroInfo_ID  INT PRIMARY KEY auto_increment,
Restro_Name varchar(50),
Restro_Rating float,
City varchar(50),
Area varchar(50),
delivery varchar (50)
)



-- insert some data for HotelInfo table.

-- Reference: http://www.booking.com/ The hotel info from booking.com

INSERT INTO RestroInfo
    (Restro_Name, Restro_Rating, City, Area, delivery)
VALUES
    ('Adam Western Seafood', 8.8, 'Nilai', 'Bandar Baru Nilai', 'No'),
    ('As-Salam Bistro', 9.4,'Nilai', 'Bandar Baru Nilai', 'No'),
    ('Ayunie Seafood', 9.4,'Nilai', 'Nilai Lama', 'Yes'),
    ('Maboro Steak House', 9.4, 'Nilai', 'Bandar Baru Nilai', 'No'),
    ('Pizza Encik Berahim', 8.6, 'Nilai', 'Taman Semarak', 'Yes'),
    ('Pasta Muchos', 8.7, 'Nilai', 'Bandar Baru Nilai', 'Yes'),
    ('Pilot Cafe', 8.5, 'Nilai', 'Semarak', 'No'),
    ('Sofitel Restaurant', 9.0, 'Nilai', 'Taman Cempaka', 'Yes'),    
    ('Chemburi Restaurant', 9.0, 'Nilai', 'Bandar Baru Nilai', 'Yes'),
    ('Churros Western Food', 9.4, 'Nilai', 'Nilai 7',  'No'),
    ('Pak Mat Masakan Panas', 8.9, 'Nilai', 'Nilai Impian', 'Yes'),
    ('Wazir Tomyam', 9.2, 'Nilai', 'Bandar Baru Nilai', 'No'),
    ('Mama Restaurant', 8.9, 'Nilai', 'Bandar Baru Nilai', 'No'),
    ('Bonda Restaurant', 8.6, 'Nilai', 'Bandar Baru Nilai', 'No'),
    ('Nasi Kandar Impian', 9.1, 'Nilai', 'Putra Height', 'No'),
    ('Mannu Salwa', 8.9, 'Nilai', 'Bandar Baru Nilai', 'No'),
	('Satay Willy', 8.9, 'Nilai', 'Bandar Baru Nilai', 'Yes'),
    ('Ameera Seafood', 8.8, 'Nilai', 'Bandar Baru Nilai', 'No');