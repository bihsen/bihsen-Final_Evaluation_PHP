<?php

//MethodeOne
/*
$query = ' SELECT articles.article_id , users.firstname, users.lastname 
FROM  articles
INNER JOIN  users
ON articles.id_user = users.id
 WHERE article_id= 10';
 */

 //MethodTwo
/*
     
SELECT users.firstname as "author name", users.lastname as "author last name", articles.*
FROM users
LEFT JOIN articles ON users.id = articles.id_user where articles.id = 10

*/
