<?php

echo "<p>" . $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout')) . "</p>" ;
echo "<p>" . $this->Html->link('View All Reviews',array('controller' => 'sysreviews', 'action' => 'viewall')) . "</p>" ;
echo $this->Form->create('SysReview');
echo $this->Form->input('authorYear');
echo $this->Form->input('countryCity');
echo $this->Form->input('studyDesign');
echo $this->Form->input('description');
echo $this->Form->input('primaryDisease', array('type' => 'textarea'));
echo $this->Form->input('coMorbidities');
echo $this->Form->input('dependentVariables');
echo $this->Form->input('ConceptualTheoreticalFramework');
echo $this->Form->input('interventionDescription');
echo $this->Form->input('results');
echo $this->Form->input('limitationsOfStudy');
echo $this->Form->input('strengthsOfStudy');
echo $this->Form->input('comments');
echo $this->Form->end('Update Review');

?>