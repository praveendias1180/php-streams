<?php

if(isset($_POST['name'])){
    echo 'Name is: ' . htmlspecialchars($_POST['name']);
} else {
    echo 'Bad Request';
}