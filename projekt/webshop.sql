drop database if exists webshop;
create database webshop default character set utf8;
use webshop;

create table proizvod(
proizvod_ID			int (6) not null primary key auto_increment,
proizvod_naziv		varchar (50) not null,
proizvod_opis		varchar (1000) not null,
proizvod_cijena		decimal (18,2) not null,
proizvod_dobSifra	varchar (30),
proizvod_brand		varchar (50),
proizvod_garancija	int (2) default 0,
proizvod_kolicina	int (4) not null default 0,
dobavljac_FK		int (6) not null,
kategorija_fk		int (6) not null
);

create table kupac(
kupac_ID			int (6) not null primary key auto_increment,
kupac_vrsta			varchar (20) not null,
kupac_ime			varchar (50) not null,
kupac_prezime		varchar (50) not null,
kupac_oib			char (11) not null,
kupac_email			varchar (100) not null,
kupac_lozinka		char (32) not null,
kupac_adresa		varchar (255) not null,
kupac_mjesto		varchar (255) not null,
kupac_postanskiBroj	int (5) not null
);

create table narudzba(
narudzba_ID			int (6) not null primary key auto_increment,
narudzba_broj		varchar (20) not null,
narudzba_datum		datetime not null,
narudzba_status		varchar (15) not null,
narudzba_napomena	varchar (200),
dostava_FK			int (6) not null,
kupac_FK			int (6) not null
);

create table dobavljac(
dobavljac_ID		int (6) not null primary key auto_increment,
dobavljac_oib		char (11) not null,
dobavljac_naziv		varchar (100) not null,
dobavljac_ziroracun	varchar (50) not null,
dobavljac_email		varchar (100),
dobavljac_adresa	varchar (255),
dobavljac_mjesto	varchar (255),
dobavljac_postanskiBroj	int (5)
);

create table kosarica(
proizvod_FK			int (6) not null,
narudzba_FK			int (6) not null,
kosarica_kolicina	int (4) not null,
kosarica_cijena		decimal (18,2) not null,
primary key (proizvod_FK, narudzba_FK)
);

create table kategorija(
kategorija_ID		int (6) primary key auto_increment,
kategorija_naziv	varchar (50) not null,
kategorija_slika	varchar (100),
kategorija_caption	varchar (50)
);

create table dostava(
dostava_ID			int (6) primary key auto_increment,
dostava_vrsta		varchar (20) not null,
dostava_cijena		decimal (18,2) not null
);

alter table proizvod add foreign key (dobavljac_FK) references dobavljac(dobavljac_ID);
alter table proizvod add foreign key (kategorija_FK) references kategorija(kategorija_ID);

alter table narudzba add foreign key (kupac_FK) references kupac(kupac_ID);
alter table narudzba add foreign key (dostava_FK) references dostava(dostava_ID);

alter table kosarica add foreign key (proizvod_FK) references proizvod(proizvod_ID);
alter table kosarica add foreign key (narudzba_FK) references narudzba(narudzba_ID);

