create table contacts (
    id tinyint unsigned not null auto_increment primary key,
    contact_type_id tinyint unsigned not null comment 'Link to contact_types',
    info text not null default '',
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL,
    unique key contact_type_id (contact_type_id)
) engine=innodb default charset=utf8;
