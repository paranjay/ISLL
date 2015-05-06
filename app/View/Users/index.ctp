<?php

echo "<p>" . $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout')) . "</p>" ;

echo $this->Form->create('Patient');
echo $this->Form->input('patientId');
echo $this->Form->end('View Patient');

echo $this->Form->create('Student');
echo $this->Form->input('studentId');
echo $this->Form->end('View Student');


?>