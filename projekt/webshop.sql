drop database if exists webshop;
create database webshop default character set utf8;
use webshop;

create table proizvod(
proizvod_ID			int (6) not null primary key auto_increment,
proizvod_naziv		varchar (50) not null,
proizvod_opis		varchar (255) not null,
proizvod_cijena		decimal (18,2) not null,
proizvod_brand		varchar (50),
proizvod_garancija	int (2) default 0,
proizvod_kolicina	int (4) default 0,
dobavljac_FK		int (6) not null,
slika_FK			int (6) not null
);

create table kupac(
kupac_ID			int (6) not null primary key auto_increment,
kupac_ime			varchar (50) not null,
kupac_prezime		varchar (50) not null,
kupac_oib			char (11) not null,
kupac_lozinka		char (32) not null,
kupac_email			varchar (100) not null,
kupac_adresa		varchar (255) not null,
kupac_postanskiBroj	int (5) not null
);

create table narudzba(
narudzba_ID			int (6) not null primary key auto_increment,
narudzba_broj		varchar (20) not null,
narudzba_datum		datetime not null,
narudzba_status		varchar (15) not null,
kupac_FK			int (6) not null
);

create table dobavljac(
dobavljac_ID		int (6) not null primary key auto_increment,
dobavljac_oib		char (11) not null,
dobavljac_naziv		varchar (100) not null,
dobavljac_ziroracun	varchar (50) not null,
kupac_email			varchar (100),
kupac_adresa		varchar (255),
kupac_postanskiBroj	int (5)
);

create table kosarica(
proizvod_FK			int (6) not null,
narudzba_FK			int (6) not null,
kosarica_kolicina	int (4) not null,
kosarica_cijena		decimal (18,2) not null,
kosarica_dostava	decimal (18,2) not null,
primary key (proizvod_FK, narudzba_FK)
);

create table slika(
slika_ID			int (6) primary key auto_increment,
slika_picture		blob,
slika_caption		varchar (50)
);

alter table proizvod add foreign key (dobavljac_FK) references dobavljac(dobavljac_ID);
alter table proizvod add foreign key (slika_FK) references slika(slika_ID);

alter table narudzba add foreign key (kupac_FK) references kupac(kupac_ID);

alter table kosarica add foreign key (proizvod_FK) references proizvod(proizvod_ID);
alter table kosarica add foreign key (narudzba_FK) references narudzba(narudzba_ID);