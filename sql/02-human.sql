create table person
(
    id      integer not null
        constraint person_pk
            primary key autoincrement,
    name    text not null,
    height  real not null,
    weight  real not null,
    birthdate  date
);