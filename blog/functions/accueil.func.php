<?php

function get_posts(){

    global $db;

    $req = $db->query("
        SELECT  posts.id,
                posts.title,
                posts.image,
                posts.date,
                posts.content,
                users.name
        FROM posts
        JOIN users
        ON posts.writer=users.name
        WHERE posted='1'
        ORDER BY date DESC
        LIMIT 0,4

    ");

    $results = array();

    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }

    return $results;

}