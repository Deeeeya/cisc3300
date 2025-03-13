CREATE DATABASE `cisc3300`;

CREATE TABLE `fruits`
(
    `id`  int(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `price` int(100) NOT NULL,
    `listID` int(11) NOT NULL,
    primary key (`id`)
);

insert into fruits (name, price, listID)
values ('Bananas', 2, 1);

insert into fruits (name, price,listID)
values ('Apples', 5, 2);

insert into fruits (name, price, listID)
values ('Oranges', 4, 3);

insert into fruits (name, price, listID)
values ('Grapes', 1, 4);

select * from fruits;
