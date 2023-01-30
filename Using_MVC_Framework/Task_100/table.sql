create table test.pages
(
    id    int auto_increment
        primary key,
    title varchar(200) not null,
    text  text         null
);

