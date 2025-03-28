CREATE DATABASE `hw-8`;

CREATE TABLE `notes`
(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(80) NOT NULL,
    `description` text NOT NULL,
    primary key (`id`)
);

insert into notes (title, description)
values ('Meeting Plan', 'Discuss the final project with the professor.');
insert into notes (title, description)
values ('Groceries', 'Buy lots of ice cream!');
insert into notes (title, description)
values ('Workout Routine', 'Just lift bro.');

update notes SET description = 'Create questions for the final project to ask the professor' where title = 'Meeting Plan';

delete from nootes where title = 'Workout Routine';

select title, description from notes where id IN (select id from notes);

select * from notes where id = (select MIN(id) from notes where id > (select MIN(id) from notes));

SELECT * from notes where description REGEXP '[aeiouAEIOU]';
