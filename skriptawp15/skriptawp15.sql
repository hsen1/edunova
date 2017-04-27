drop database if exists edunovawp15;
create database edunovawp15 default character set utf8;
use edunovawp15;

create table smjer(
smjer_ID		int not null primary key auto_increment,
naziv			varchar (50) not null,
trajanje		int not null,
cijena			decimal (18,2)
);

create table osoba(
osoba_ID		int not null primary key auto_increment,
ime				varchar (50) not null,
prezime			varchar (50) not null,
oib				char (11) not null
);

create table grupa(
grupa_ID		int not null primary key auto_increment,
smjer_FK		int not null,
predavac_FK		int not null,
naziv			varchar (50) not null,
datum_pocetka	datetime,
broj_polaznika	int
);

create table predavac (
predavac_ID		int not null primary key auto_increment,
osoba_FK		int not null,
ziro_racun		varchar (50) not null
);

create table polaznik (
polaznik_ID		int not null primary key auto_increment,
osoba_FK		int not null,
broj_ugovora	varchar (50) not null
);

create	table clan (
grupa_FK		int not null,
polaznik_FK		int not null,
primary key (grupa_FK,polaznik_FK)
);

alter table clan add foreign key (grupa_FK) references grupa(grupa_ID);
alter table clan add foreign key (polaznik_FK) references polaznik(polaznik_ID);

alter table polaznik add foreign key (osoba_FK) references osoba(osoba_ID);

alter table predavac add foreign key (osoba_FK) references osoba(osoba_ID);

alter table grupa add foreign key (smjer_FK) references smjer(smjer_ID);
alter table grupa add foreign key (predavac_FK) references predavac(predavac_ID);

create unique index ix1 on osoba(oib);

#1
insert into smjer (naziv, trajanje)
values ('Web programiranje', 130);
#2
insert into smjer 
values (null, 'Java programiranje', 130, null);
#1
insert into osoba (ime, prezime, oib)
values ('Tomislav', 'Jakopec', '12345678901');
#1
insert into predavac (osoba_FK, ziro_racun)
values (1, 'HR4923600001111111111');
#1
insert into grupa (smjer_FK, predavac_FK, naziv)
values (1, 1, 'WP15');
#2
insert into grupa (smjer_FK, predavac_FK, naziv)
values (2, 1, 'JP15');
#2-16
insert into osoba (ime, prezime, oib)
values 
('Davor', 'Lučić', '00000000001'),
('Matija', 'Beyer', '00000000002'),
('Ivan', 'Novak', '00000000003'),
('Hrvoje', 'Šen', '00000000004'),
('Marko', 'Đuroković', '00000000005'),
('Berislav', 'Gašo', '00000000006'),
('Zrin', 'Crnjac', '00000000007'),
('Ivan', 'Perić', '00000000008'),
('Marko', 'Gracin', '00000000009'),
('Alen', 'Varaždinac', '00000000010'),
('Ivan', 'Sertić', '00000000011'),
('Andi', 'Bašić', '00000000012'),
('Ivica', 'Šamu', '00000000013'),
('Jurica', 'Šoštarić', '00000000014'),
('Marko', 'Budimir', '00000000015');
#1-15
insert into polaznik (osoba_FK, broj_ugovora)
values 
(2, 'U1'),
(3, 'U2'),
(4, 'U3'),
(5, 'U4'),
(6, 'U5'),
(7, 'U6'),
(8, 'U7'),
(9, 'U8'),
(10, 'U9'),
(11, 'U10'),
(12, 'U11'),
(13, 'U12'),
(14, 'U13'),
(15, 'U14'),
(16, 'U15');
#1-15
insert into clan (grupa_FK, polaznik_FK)
values (1, 1), (1, 2), (1, 3), (1, 4), (1, 5), (1, 6), (1, 7), 
(2, 8), (2, 9), (2, 10), (2, 11), (2, 12), (2, 13), (2, 14), (2, 15);