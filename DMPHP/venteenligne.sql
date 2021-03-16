create database venteenligne;

	use venteenligne;

	create table clients 
		(
			nclient int not null auto_increment,
				Primary key(nclient),
				civ varchar(10),
				nom varchar(25),
				prenom varchar(30),
				telephone int(11),
				mail varchar(15),
				adresse varchar(30),
				ville varchar(14),
		);