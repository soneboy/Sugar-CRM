
<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class RelatedExtension{

    function extendRelatedContact($bean, $event, $arguments){
        $contactsId = $bean->contacts->tempBeans;
        foreach($contactsId as $key => $value){
            $value->last_name= $value->last_name . '(this is related)';
            $bean->db->query(
                    "UPDATE contacts SET last_name='{$value->last_name}' WHERE id='{$key}'"
                );
        }
    }
}