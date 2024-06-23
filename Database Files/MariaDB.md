show databases;

create database dbms_project;

USE dbms_project;

SELECT * FROM information_schema.tables

DROP DATABASE dbms_project;

create table student(
    student_id int primary key auto_increment,
    student_name varchar(50),
    student_email varchar(50),
    student_phone varchar(10),
    student_address varchar(100)
);

