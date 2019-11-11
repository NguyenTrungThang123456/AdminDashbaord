drop database if exists vtcs;
create database if not exists vtcs ;

use vtcs;

-- drop table user;
-- drop table comment;
-- drop table customer;
-- drop table partner;
-- drop table shipper;
-- drop table product;
-- drop table size;
-- drop table category;
-- drop table brand;

create table if not exists user(
	user_id int(6) primary key not null auto_increment,
    user_name varchar(60) not null,
    password varchar(60) not null,
    phone_number varchar(11) unique not null,
    address varchar(100) not null,
    email varchar(100) unique not null,
    user_level varchar(10) not null
);

create table if not exists customer(
	customer_id int(6) primary key not null auto_increment,
    customer_name varchar(60) not null,
    date_of_birth datetime not null,
    address varchar(100) not null,
    phone_number varchar(10) unique not null,
    email varchar(100) unique not null,
    registration_date datetime not null,
    user_level varchar(10) not null
);

create table if not exists partner(
	partner_id int(6) primary key not null auto_increment,
    partner_name varchar(60) not null,
    address varchar(100) not null,
    phone_number varchar(10) unique not null,
    email varchar(100) unique not null,
    area varchar(40)
);

create table if not exists shipper(
	shipper_id int(6) primary key not null auto_increment,
    partner_id int(6) not null,
    shipper_name varchar(60) not null,
    phone_number varchar(10) unique not null,
    address varchar(100) not null,
    email varchar(60) unique not null,
    foreign key (partner_id) references partner(partner_id)
);

create table if not exists brand(
	brand_id int(6) primary key not null auto_increment,
	brand_name varchar(60)
);

create table if not exists category(
	category_id int(6) primary key not null auto_increment,
    brand_id int(6) not null,
    category_name varchar(60) not null,
    foreign key (brand_id) references brand(brand_id)
);

create table if not exists comment(
	comment_id int(6) primary key not null auto_increment,
    customer_id int(6) not null,
    product_id int(6) not null,
    comment_day datetime not null,
    comment varchar(255),
    foreign key (customer_id) references customer(customer_id)
);

create table if not exists product(
	product_id int(6) primary key not null auto_increment,
    comment_id int(6),
    category_id int(6) not null,
    product_name varchar(60) not null,
    product_price double,
    product_image varchar(255) not null,
    quantity int(2),
    foreign key (category_id) references category(category_id)
);

create table if not exists size(
	size_id int(6) primary key not null auto_increment,
    size_name varchar(10)
);

create table if not exists product_size(
	product_id int(6) not null,
    size_id int(6) not null,
    quantity_stock int(2) not null,
    primary key(product_id,size_id),
    foreign key (product_id) references product(product_id),
    foreign key (size_id) references size(size_id)
);

create table if not exists orders(
	order_id int(6) primary key not null auto_increment,
    shipper_id int(6) not null,
    customer_id int(6) not null,
    order_date datetime not null,
    foreign key (shipper_id) references shipper(shipper_id),
    foreign key (customer_id) references customer(customer_id)
);

create table if not exists order_detail(
	order_id int(6) not null,
    product_id int(6) not null,
    quantity int(6),
    primary key(order_id,product_id),
    foreign key (order_id) references orders(order_id),
    foreign key (product_id) references product(product_id)
);

ALTER TABLE user AUTO_INCREMENT = 1000;
ALTER TABLE customer AUTO_INCREMENT = 1000;
ALTER TABLE partner AUTO_INCREMENT = 100;
ALTER TABLE shipper AUTO_INCREMENT = 100;
ALTER TABLE orders AUTO_INCREMENT = 10000;
ALTER TABLE product AUTO_INCREMENT = 100;
ALTER TABLE size AUTO_INCREMENT = 1;
ALTER TABLE category AUTO_INCREMENT = 1;
ALTER TABLE brand AUTO_INCREMENT = 1;
ALTER TABLE comment AUTO_INCREMENT = 1;

insert into user (user_name, password, phone_number, address, email, user_level)
values ('admin', '321321', '0356969828','HN','admin@administrator.com','admin');
insert into customer (customer_name, date_of_birth, phone_number, address, email,  registration_date, user_level)
values ('Nam', '1998/02/04', '0356969821','HN','nam@cutomer.com','2019/11/01','customer'),
		('Thang', '1998/02/04', '0356969822','HN','thang@cutomer.com','2019/11/01','customer'),
        ('Tuan', '1998/02/04', '0356969823','HN','tuan@cutomer.com','2019/11/01','customer'),
        ('Quang', '1998/02/04', '0356969824','HN','quang@cutomer.com','2019/11/01','customer');
insert into partner (partner_name, phone_number, address, email, area)
values ('GHN', '0356969825', 'HN','ghn@partner.com','suburb'),
		('GHTK', '0356969826', 'HN','ghtk@partner.com','urban');
insert into shipper (partner_id, shipper_name, phone_number, address, email)
values ('100', 'Quang', '0356969827','HN','quang@shipper.com'),
 		('101', 'Tuan', '0356969829','HN','tuan@shipper.com');
-- insert into orders (shipper_id, partner_id,order_date)
-- values ('?', '?', '?','?','?','?');
insert into brand (brand_name)
values ('Adam');
insert into category (brand_id, category_name)
values ('1','VEST');
insert into product (category_id, product_name, product_price, product_image, quantity)
values ( '1', 'Áo VEST Cổ Sam (NEW)', 2200000,'AO VEST XANH CO SAM (NEW).jpg','1'),
		( '1', 'Áo VEST Đen Thường (NEW)',2200000,'AO VEST DEN THUONG (NEW).jpg','1'),
        ( '1', 'Áo VEST DVVMM',2400000,'AO VEST DVVMM.jpg','1'),
		( '1', 'Áo VEST Kẻ Ô Xanh Sẫm',2800000,'AO VEST KE O XANH SAM.jpg','1'),
        ( '1', 'Áo VEST Kẻ Ô Xanh Sáng',2800000,'AO VEST KE O XANH SANG.jpg','1'),
        ( '1', 'Áo VEST Kẻ Xanh Ô Đỏ',2800000,'AO VEST KE XANH O DO.png','1'),
        ( '1', 'Áo VEST LH26 Nâu',2400000,'AO VEST LH26 NAU.jpg','1'),
        ( '1', 'Áo VEST Nâu 2HK',2600000,'AO VEST NAU 2HK.png','1'),
        ( '1', 'Áo VEST Nâu',2400000,'AO VEST NAU.jpg','1'),
        ( '1', 'Áo VEST Trắng 2 Khuy',2400000,'AO VEST TRANG 2 KHUY.jpg','1'),
        ( '1', 'Áo VEST Xanh Bò Tối',2400000,'AO VEST XANH BO TOI.PNG','1'),
        ( '1', 'Áo VEST Xanh Đen Nhũ',2550000,'AO VEST DEN NHU.PNG','1'),
        ( '1', 'Áo VEST Xanh Nhũ Đỏ',2550000,'AO VEST XANH NHU DO.jpg','1'),
        ( '1', 'Áo VEST Xanh Rêu 2HK',2600000,'AO VEST XANH REU 2HK.png','1'),
        ( '1', 'Áo VEST Xanh Rêu',2400000,'AO VEST XANH REU.jpg','1'),
        ( '1', 'Áo VEST Xanh',2550000,'AO VEST ANH.jpg','1');
insert into size (size_name)
values ('48'), ('50'), ('52'), ('54'), ('56');
-- insert into product_size (product_id, size_id, quantity_stock)
-- values ('?','1','5'), ('?','1','8'), ('?','1','4'), ('?','1','9'),
-- 		('?','1','6'), ('?','1','10'), ('?','1','3'), ('?','1','11'),
--         ('?','1','7'), ('?','1','12'), ('?','1','1'), ('?','1','14'),
--         ('?','1','2'), ('?','1','15'), ('?','1','13'), ('?','1','16');
