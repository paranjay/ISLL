<p>Logged in User: <?php echo $this->Session->read('User.name'); ?></p>
<?php
echo "<p>" . $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout')) . "</p>" ;
//echo "<p>" . $this->Html->link('View All Anxiety Scores',array('controller' => 'AnxietyTests', 'action' => 'viewall')) . "</p>" ;

?>
<center><h1> Add Student </h1>
<?php
if(isset($debug))
{
	print_r($debug);
}
?></center>
<?php
echo $this->Form->create('Student');
echo $this->Form->input('studentid', array('class' => 'form-control'));
echo $this->Form->input('studentname', array('class' => 'form-control'));
echo "<div class=\"checkbox\">" . $this->Form->checkbox('consent', array('hiddenField' => false,'class' => 'form-control'));
echo $this->Form->label('consent') . "</div>";
echo $this->Form->input('dateofconsent', array('class' => 'form-control'));
echo $this->Form->input('cohort', array('class' => 'form-control'));
echo "<div class=\"checkbox\">" . $this->Form->checkbox('eligibilitytestresult', array('hiddenField' => false, 'class' => 'form-control'));
echo $this->Form->label('Eligibility Test Result') . "</div>";
echo $this->Form->input('mstrack', array(
    'options' => array('ANP'=>'ANP', 'FNP' => 'FNP'),
    'empty' => '(choose one)','class' => 'form-control'
));
echo $this->Form->input('age', array('class' => 'form-control'));
echo $this->Form->input('sex', array(
    'options' => array('Male' =>'Male', 'Female' => 'Female'),
    'empty' => '(choose one)','class' => 'form-control'
));
echo $this->Form->input('education', array(
    'options' => array('BS in Nursing' => 'BS in Nursing', 
    'BS  or BA in field other than Nursing' => 'BS  or BA in field other than Nursing',
    'MS or MA' => 'MS or MA'),
    'empty' => '(choose one)','class' => 'form-control'
));
echo $this->Form->input('maritalstatus', array(
    'options' => array('Single' => 'Single', 
    'Married/living with someone else' => 'Married/living with someone else',
    'Divorced/Widowed' => 'Divorced/Widowed'),
    'empty' => '(choose one)','class' => 'form-control'
));
echo $this->Form->input('work', array(
    'options' => array('Yes, full-time' => 'Yes, full-time',
    					'Yes, part-time' => 'Yes, part-time', 
    					'No' => 'No'),
    'empty' => '(choose one)','class' => 'form-control'
));
echo $this->Form->input('hispanic', array(
    'options' => array('Yes' => 'Yes', 'No' => 'No'),
    'empty' => '(choose one)','class' => 'form-control'
));
echo $this->Form->input('race', array(
    'options' => array('African American/Black' => 'African American/Black', 
    					'Caucasian/White' => 'Caucasian/White', 
    					'Asian' => 'Asian'),
    'empty' => '(choose one)','class' => 'form-control'
));
echo $this->Form->input('healthinsurance', array(
    'options' => array('Yes' => 'Yes', 'No' => 'No'),
    'empty' => '(choose one)','class' => 'form-control'
));
echo $this->Form->input('children', array('class' => 'form-control'));
echo $this->Form->input('peoplehousehold', array('class' => 'form-control'));

echo $this->Form->input('annualincome', array(
    'options' => array('$10,000-20,000' => '$10,000-20,000', 
    					'$21,000-40,000' => '$21,000-40,000', 
    					'$41,000-50,000' => '$41,000-50,000 ',
    					'more than $50,000' => 'more than $50,000'),
    'empty' => '(choose one)','class' => 'form-control'
));
?>
<div class="input">
<label>Indicate any previous experience with the Spanish language</label>
<?php
echo "<div class=\"checkbox\">" . $this->Form->checkbox('previousexperience1', array('hiddenField' => false, 'class' => 'form-control'));
echo $this->Form->label('I studied Spanish in high school') . "</div>";
echo "<div class=\"checkbox\">" . $this->Form->checkbox('previousexperience2', array('hiddenField' => false, 'class' => 'form-control'));
echo $this->Form->label('I studied Spanish in college as an undergraduate') . "</div>";
echo "<div class=\"checkbox\">" . $this->Form->checkbox('previousexperience3', array('hiddenField' => false, 'class' => 'form-control'));
echo $this->Form->label('I lived in a Spanish speaking country') . "</div>";
echo "<div class=\"checkbox\">" . $this->Form->checkbox('previousexperience4', array('hiddenField' => false, 'class' => 'form-control'));
echo $this->Form->label('I attended school in a Spanish country') . "</div>";
echo "<div class=\"checkbox\">" . $this->Form->checkbox('previousexperience5', array('hiddenField' => false, 'class' => 'form-control'));
echo $this->Form->label('I spoke Spanish in the home with my immediate family') . "</div>";
echo "<div class=\"checkbox\">" . $this->Form->checkbox('previousexperience6', array('hiddenField' => false, 'class' => 'form-control'));
echo $this->Form->label('I spoke Spanish in the home with my extended family') . "</div>";
echo "</div>";
echo $this->Form->input('personalevalutaion', array(
	'options' => array('Very Little fluency' => 'Very Little fluency', 
						'Some Fluency' => 'Some Fluency', 
						'Completely Bilingual/Fluent' => 'Completely Bilingual/Fluent'),
    'empty' => '(choose one)','class' => 'form-control'
));
echo $this->Form->end('Add Student');
?>