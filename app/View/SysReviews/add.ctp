<h1>Logged in User: <?php echo $this->Session->read('User.name'); ?></h1>
<?php
echo "<p>" . $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout')) . "</p>" ;
echo "<p>" . $this->Html->link('View All Reviews',array('controller' => 'sys_reviews', 'action' => 'viewall')) . "</p>" ;
echo $this->Form->create('SysReview');
echo $this->Form->input('authorYear', array('label' => 'Author, Year'));
echo $this->Form->input('countryCity', array('label' => 'Country, City'));
echo $this->Form->input('studyDesign', array('label' => 'Study Design (Retrospective Chart Review, Secondary Analysis, Randomized Control Trial, Observational, Longitudinal, Cross sectional)'));
echo $this->Form->input('description', array('label' => 'Sample description (Sample Size, Race, Age, Gender, Education, Occupation)'));
echo $this->Form->input('primaryDisease');
echo $this->Form->input('coMorbidities', array('label' => 'Co-Morbidities'));
echo $this->Form->input('dependentVariables');
echo $this->Form->input('ConceptualTheoreticalFramework', array('label' => 'Conceptual/Theoretical Framework'));
echo $this->Form->input('interventionDescription', array('label' => 'Intervention Description  (if appli/cable)'));
echo $this->Form->input('results', array('label' => 'Results (Descriptive and Intervention)'));
echo $this->Form->input('limitationsOfStudy', array('label' => 'Limitations of study (your limitations should be marked with an asterisk)'));
echo $this->Form->input('strengthsOfStudy');
echo $this->Form->input('comments', array('label' => 'Comments (note the so what factor)'));
echo $this->Form->input('initials');
echo $this->Form->end('Add Review');
?>