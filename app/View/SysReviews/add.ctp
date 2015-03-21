<h1>Add New Review</h1>
<?php
echo $this->Form->create('SysReview');
echo $this->Form->input('authorYear');
echo $this->Form->input('studyDesign');
echo $this->Form->input('description');
echo $this->Form->input('primaryDisease');
echo $this->Form->input('coMorbidities');
echo $this->Form->input('dependentVariables');
echo $this->Form->input('ConceptualTheoreticalFramework');
echo $this->Form->input('interventionDescription');
echo $this->Form->input('results');
echo $this->Form->input('limitationsOfStudy');
echo $this->Form->input('strengthsOfStudy');
echo $this->Form->input('comments');
echo $this->Form->end('Register');
?>