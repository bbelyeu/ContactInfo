create table contact_types (
    id tinyint unsigned not null auto_increment primary key,
    name varchar(30) not null,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
) engine=innodb default charset=utf8;
