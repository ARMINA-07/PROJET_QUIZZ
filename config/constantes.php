<?php
    define("WEB_ROUTE" , "http://localhost:8000/");
    define("ROUTE_DIR" , str_replace('public', '',$_SERVER['DOCUMENT_ROOT']));
    define("FILE_USERS",ROUTE_DIR.'data/user.data.json');
    define("FILE_QUESTION",ROUTE_DIR.'data/question.json');
?>