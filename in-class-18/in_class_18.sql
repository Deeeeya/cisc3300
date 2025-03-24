CREATE DATABASE `in_class_18`;

CREATE TABLE `users`
(
    `user_id` int(10) AUTO_INCREMENT,
    `username` varchar(5) NOT NULL,
    `addressID` varchar(11) NOT NULL,
    primary key (`user_id`)
);

CREATE TABLE `userComments`
(
    comment_id int(10) AUTO_INCREMENT,
    -- Foreign Key
    user_id int(10),
    comment_text varchar(200),
    primary key (`comment_id`)
    foreign key (user_id) references users(user_id)s
)

insert into users (username, addressID)
values ('Deeya', 1);
insert into users (username, addressID)
values ('Bob', 2);
insert into users (username, addressID)
values ('John', 3);

insert into userComments (user_id, comment_text)
values (1, 'This website looks nice');
insert into userComments (user_id, comment_text)
values (2, 'Whats up guys!');
insert into userComments (user_id, comment_text)
values (3, 'I am bored');

-- this is to return all users and comments whether they have it or not

SELECT
    users.*,
    userComments.comment_id AS commentID,
    userComments.comment_text AS commentText
FROM
    users
        LEFT JOIN
    userComments ON users.user_id = userComments.user_id;

-- this is to return all users and their comments ONLY if they have comments

SELECT
    users.*,
    userComments.comment_id AS commentID,
    userComments.comment_text AS commentText
FROM
    users
        JOIN
    userComments ON users.user_id = userComments.user_id;