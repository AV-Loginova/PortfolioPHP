<?php

$tags = ['#JavaScript', '#HTML5', '#Git', '#CSS3', '#React',
        '#HTML', '#TypeScript', '#SASS', '#Node.js', '#Bootstrap',
        '#Английский язык', '#REST', '#ReactJS', '#API',
        '#Linux', '#Адаптивная верстка', '#REST API', '#SCSS',
        '#Frontend', '#JSON API', '#SPA', '#PHP'];
$works = [
    1 => [
        'title' => 'Pixel Art',
        'gif' => 'img/PixelArt.gif'
    ],
    2 => [
        'title' => 'Tetris',
        'gif' => 'img/Tetris.gif'
    ],
    3 => [
        'title' => 'To Do List',
        'gif' => 'img/ToDo.gif'
    ],
    4 => [
        'title' => 'Simon says',
        'gif' => 'img/Simon.gif'
    ]
];
$title = 'Мой сайт';
$name = 'Алёна Логинова';
$image = 'img/photo.jpeg';
$email = 'project.loginova@gmail.com';
$phone = '+79672389938';

require('components/header.php');
require('components/about.php');
require('components/photos.php');
require('components/quotes.php');
require('components/contacts.php');
require('components/footer.php');
