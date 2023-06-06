<?php
function alertAdmin($text, $type = 'primary')
{
    $_SESSION['alertAdmin'][] = [
        'text' => $text, 
        'type' => $type,
    ];
}