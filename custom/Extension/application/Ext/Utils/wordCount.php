<?php

function wordCount($word)
{
    return is_string($word) ? str_word_count($word) : 0;
}