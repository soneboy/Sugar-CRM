<?php

array_push($job_strings, 'custom_job');

function custom_job()
{
    global $GLOBALS;
    $GLOBALS['log'] = LoggerManager::getLogger();
    $GLOBALS['log']->fatal('I\'m a ScheduledTask');

    return true;
}
?>