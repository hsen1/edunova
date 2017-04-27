drop database if exists wordpress;
create database wordpress;
use wordpress;

create table wp_posts (
ID 					bigint (20) not null primary key auto_increment,
post_author			bigint (20) not null,
post_date			datetime not null,
post_date_gmt		datetime not null,
post_content		longtext not null,
post_title			text not null,
post_excerpt 		text not null,
post_status			varchar (20) not null,
comment_status		varchar (20) not null,
ping_status			varchar (20) not null,
post_password		varchar (20) not null,
post_name			varchar (200) not null,
to_ping				text not null,
pinged				text not null,
post_modified			datetime not null,
post_modified_gmt		datetime not null,
post_content_filterd	longtext not null,
post_parent			bigint (20) not null,
guid				varchar (255) not null,
menu_order			int (11) not null,
post_type			varchar (20) not null,
post_mime_type		varchar (100) not null,
comment_count		bigint (20) not null
);

create table wp_postmeta (
meta_id				bigint (20) not null primary key auto_increment,
post_id				bigint (20) not null,
meta_key			varchar (255),
meta_value			longtext
);

create table wp_users (
ID 					bigint (20) not null primary key auto_increment,
user_login			varchar (60) not null,
user_pass			varchar (255) not null,
user_nicename		varchar (50) not null,
user_email			varchar (100) not null,
user_url			varchar (100) not null,
user_registered		datetime not null,
user_activation_key	varchar (255) not null,
user_status			int (11) not null,
display_name		varchar (250) not null
);

create table wp_usermeta (
umeta_id			bigint (20) not null primary key auto_increment,
user_id				bigint (20) not null,
meta_key			varchar (255),
meta_value			longtext
);

create table wp_comments (
comment_ID			bigint (20) not null primary key auto_increment,
comment_post_ID		bigint (20) not null,
comment_author		tinytext not null,
comment_author_email	varchar (100) not null,
comment_author_url		varchar (200) not null,
comment_author_IP		varchar (100) not null,
comment_date		datetime not null,
comment_date_gmt	datetime not null,
comment_content		text not null,
comment_karma		int (11) not null,
comment_approved	varchar (20) not null,
comment_agent		varchar (255) not null,
comment_type		varchar (20) not null,
comment_parent		bigint (20) not null,
user_id				bigint (20) not null
);

create table wp_commentmeta (
meta_id				bigint (20) not null primary key auto_increment,
comment_id			bigint (20) not null,
meta_key			varchar (255),
meta_value			longtext
);

create table wp_links (
link_id				bigint (20) not null primary key auto_increment,
link_url			varchar (255) not null,
link_name			varchar (255) not null,
link_image			varchar (255) not null,
link_target			varchar (25) not null,
link_description	varchar (255) not null,
link_visible		varchar (20) not null,
link_owner			bigint (20) not null,
link_rating			int (11) not null,
link_updated		datetime not null,
link_rel			varchar (255) not null,
link_notes			mediumtext not null,
link_rss			varchar (255) not null
);

create table wp_terms (
term_id				bigint (20) not null primary key auto_increment,
name				varchar (200) not null,
slug				varchar (200) not null,
term_group			bigint (10) not null
);

create table wp_term_relationships (
object_id 			bigint (20) not null,
term_taxonomy_id	bigint (20) not null,
term_order			int (11) not null,
primary key (term_taxonomy_id,object_id)
);

create table wp_term_taxonomy (
term_taxonomy_id	bigint (20) not null primary key auto_increment,
term_id				bigint (20) not null,
taxonomy			varchar (32) not null,
description			longtext not null,
parent				bigint (20) not null,
count				bigint (20) not null
-- primary key (term_taxonomy_id)
);

create table wp_termmeta (
meta_id				bigint (20) not null primary key auto_increment,
term_id				bigint (20) not null,
meta_key			varchar (255),
meta_value			longtext
);

create table wp_options (
option_id			bigint (20) not null primary key auto_increment,
option_name			varchar (191) not null,
option_value		longtext not null,
autoload			varchar (20) not null
);

alter table wp_commentmeta add foreign key (comment_id) references wp_comments(comment_ID);

alter table wp_comments add foreign key (user_id) references wp_users(ID);

alter table wp_usermeta add foreign key (user_id) references wp_users(ID);

alter table wp_posts add foreign key (post_author) references wp_users(ID);

alter table wp_postmeta add foreign key (post_id) references wp_posts(ID);

alter table wp_term_relationships add foreign key (object_id) references wp_posts(ID);

alter table wp_terms add foreign key (term_id) references wp_termmeta(meta_id);

alter table wp_term_taxonomy add foreign key (term_id) references wp_terms(term_id);
alter table wp_term_taxonomy add foreign key (term_taxonomy_id) references wp_term_relationships(term_taxonomy_id);