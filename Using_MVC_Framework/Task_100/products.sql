create table test.products
(
    id       int auto_increment
        primary key,
    name     varchar(200) not null,
    price    float        not null,
    quantity int          not null,
    category varchar(200) not null
);
