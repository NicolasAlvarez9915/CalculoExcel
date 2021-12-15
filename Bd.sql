use chociebd;

create table chocie (
	id bigint primary key auto_increment, 
    chocieName varchar(50),
    numberVotes integer,
    numberVotesWrite integer,
    seats decimal,
    distributorFigure decimal,
    created_at datetime not null,
	updated_at datetime not null,
	deleted_at datetime null
);

create table politicParty (
	id bigint primary key auto_increment, 
    nameShort varchar(20),
    nameParty varchar(100),
    numberVotes integer,
    threshold integer,
    seatsObtained integer,
    seats decimal,
    porcentageVotes decimal,
    numberVotesLost integer,
    thresholdDistance decimal,
    chocie_id bigint,
    calculationData integer,
	created_at datetime not null,
	updated_at datetime not null,
	deleted_at datetime null
);
alter table politicParty add constraint chocie_ifblk_1 FOREIGN key (chocie_id) REFERENCES chocie (id);

create table calculationData (
	id bigint primary key auto_increment, 
    valueData decimal,
    politicParty_id bigint,
	created_at datetime not null,
	updated_at datetime not null,
	deleted_at datetime null
);
alter table calculationData add constraint politicParty_ifblk_1 foreign key (politicParty_id) references politicParty (id);