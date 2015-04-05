
<h1>Logged in User: <?php echo $this->Session->read('User.name'); ?></h1>
<?php
echo "<p>" . $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout')) . "</p>" ;
//echo "<p>" . $this->Html->link('View All Anxiety Scores',array('controller' => 'AnxietyTests', 'action' => 'viewall')) . "</p>" ;
?>
<center><h1> Add Patient </h1></center>
<?php
echo $this->Form->create('Patient');
echo $this->Form->input('PatientId');
echo $this->Form->input('PatientName');
echo $this->Form->checkbox('Consent', array('hiddenField' => FALSE));
echo $this->Form->label('Consent');
echo $this->Form->input('DateOfConsent');
echo $this->Form->input('Cohort');
echo $this->Form->checkbox('EligibilityTestResult', array('hiddenField' => FALSE));
echo $this->Form->label('EligibilityTestResult');
echo $this->Form->end('Add Patient');

?>