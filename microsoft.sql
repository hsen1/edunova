drop database if exists microsoft;
create database microsoft;
use microsoft;

create table department (
Id			int not null primary key auto_increment,
Name		varchar (50) not null,
CompanyId	int not null
);

create table company (
Id 			int not null primary key auto_increment,
Name		varchar (50) not null
);

create table employee (
Id 			int not null primary key auto_increment,
LastName	varchar (50) not null,
FirstName	varchar (50) not null
);

create table emplyeeDetail (
Id 			int not null primary key auto_increment,
Age			int (2) not null,
Gender		char (1) not null,
Address		varchar (100) not null
);

create table department_employee (
DepartmentId	int not null,
EmployeeId		int not null,
Title			varchar (30) not null,
primary key (DepartmentId,EmployeeId)
);

alter table department add foreign key (CompanyId) references company(Id);

alter table department_employee add foreign key (DepartmentId) references department(Id);
alter table department_employee add foreign key (EmployeeId) references employee(Id);

alter table employee add foreign key (Id) references emplyeeDetail(Id);