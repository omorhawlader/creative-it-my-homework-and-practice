# MYSQL DB

```php


mysql> SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| carfiue            |
| information_schema |
| mysql              |
| performance_schema |
| sys                |
| test               |
+--------------------+
6 rows in set (0.07 sec)




mysql> USE carfiue;
Database changed
mysql> SELECT DATABASE();
+------------+
| DATABASE() |
+------------+
| carfiue    |
+------------+
1 row in set (0.00 sec)


mysql> SHOW TABLES;
+-------------------+
| Tables_in_carfiue |
+-------------------+
| users             |
+-------------------+
1 row in set (0.03 sec)

mysql> DESC users;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| id       | int          | NO   | PRI | NULL    | auto_increment |
| username | varchar(200) | NO   |     | NULL    |                |
| email    | varchar(200) | NO   |     | NULL    |                |
| password | varchar(200) | NO   |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
4 rows in set (0.01 sec)

mysql> SELECT * FROM users;
Empty set (0.03 sec)

mysql> INSERT INTO users(username,email,password) VALUES('omar',
    -> 'omar.dev@gmail.com',
    -> 'omar123CIT');
Query OK, 1 row affected (0.03 sec)

mysql> SELECT * FROM users;
+----+----------+--------------------+------------+
| id | username | email              | password   |
+----+----------+--------------------+------------+
|  1 | omar     | omar.dev@gmail.com | omar123CIT |
+----+----------+--------------------+------------+
1 row in set (0.00 sec)

mysql> SELECT id FROM users WHERE email = 'omar.dev';
Empty set (0.00 sec)



mysql> SELECT username FROM users WHERE email = 'omar.dev@gmail.com';
+----------+
| username |
+----------+
| omar     |
+----------+
1 row in set (0.00 sec)

mysql> SELECT * FROM users;
+----+----------+----------------------+--------------------------------------------------------------+
| id | username | email                | password                                                     |
+----+----------+----------------------+--------------------------------------------------------------+
|  1 | omar     | omar.dev@gmail.com   | omar123CIT                                                   |
|  2 | zuvik    | cujaw@mailinator.com | $2y$10$K4YuEq2.aNriCeHM.3hRhONRPO4Kh3YbwUFJBmlBhfUcvgYgOrITC |
+----+----------+----------------------+--------------------------------------------------------------+
2 rows in set (0.00 sec



```
