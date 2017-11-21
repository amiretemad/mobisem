# mobisem

announcement Table
``` Mysql

create table ilan
(
	id int auto_increment primary key,
	description text not null,
	product_id int not null,
	stock_count int not null,
	user_id int not null,
	create_date datetime not null,
	expire_date datetime not null
);
create index product_id on ilan (product_id);
create index user_id on ilan (user_id);

```

Products Table
``` Mysql

create table products
(
	id int auto_increment primary key,
	name varchar(63) not null,
	description text null,
	price decimal(15,2) not null,
	constraint name unique (name)
);

```

Products Inventory (increasing and decreasing products)
``` Mysql

create table products_inventory
(
	id int auto_increment primary key,
	product_id int not null,
	product_count int not null,
	action int default '-1' not null,
	create_date datetime not null,
	user_id int not null
);

```

Users Table
``` Mysql

create table users
(
	id int auto_increment primary key,
	email_address varchar(254) not null,
	password char(128) not null,
	constraint email_address unique (email_address)
);

```

password is : 123456
``` sql

INSERT INTO users (email_address, password) VALUES ('test@test.com', '$2y$10$NBUPiBWFXY8tVzZCYqPb.Ou88HOMppD/8y2.HDDwaASD.n9rsmQLC');

```