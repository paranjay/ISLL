<?php
class User extends AppModel
{
	public $validate = array(
        'name' => array(
            	'rule' => 'notEmpty'
            	),
        'email' => array(
            	'rule' => 'notEmpty'
            	),
        'password' => array(
            	'rule' => 'notEmpty'
            	),
        
    );
}
?>