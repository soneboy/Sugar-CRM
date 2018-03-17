<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class NameExtension
{
    function extendName($bean, $event, $arguments)
    {
        if(!$arguments['isUpdate']){
            $bean->name = $bean->name . '(this is appended)';
            $bean->db->query(
                "UPDATE {$bean->table_name} SET last_name='{$bean->name}' WHERE id='{$bean->id}'"
            );
        }
    }
}

?>