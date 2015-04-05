<?php

echo "<p>" . $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout')) . "</p>" ;
echo "<p>" . $this->Html->link('Systematics Reviews',array('controller' => 'sys_reviews', 'action' => 'viewall')) . "</p>" ;
echo "<p>" . $this->Html->link('Add a Patient',array('controller' => 'patients', 'action' => 'add')) . "</p>" ;
echo "<p>" . $this->Html->link('Add a Student',array('controller' => 'students', 'action' => 'add')) . "</p>" ;

echo $this->Form->create('Patient');
echo $this->Form->input('patientId');
echo $this->Form->end('View Patient');

echo $this->Form->create('Student');
echo $this->Form->input('studentId');
echo $this->Form->end('View Student');


?>