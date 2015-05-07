<p>Logged in User: <?php echo $this->Session->read('User.name'); ?></p>
<center><h1> Add Student </h1>
<?php
if(isset($debug))
{
	print_r($debug);
}
?></center>
<?php
echo $this->Form->create('Student');
echo $this->Form->input('studentid', array('class' => 'form-control', 'label' => 'Student Id'));
echo $this->Form->input('studentname', array('class' => 'form-control', 'label' => 'Student Name'));
echo "<div class=\"checkbox\">" . $this->Form->checkbox('consent', array('hiddenField' => false,'class' => 'form-control'));
echo $this->Form->label('consent') . "</div>";
echo $this->Form->input('dateofconsent', array('class' => 'form-control', 'label' => 'Date of Consent'));
echo $this->Form->input('cohort', array('class' => 'form-control'));
echo "<div class=\"checkbox\">" . $this->Form->checkbox('eligibilitytestresult', array('hiddenField' => false, 'class' => 'form-control'));
echo $this->Form->label('Eligibility Test Result') . "</div>";
echo $this->Form->input('mstrack', array(
    'options' => array('ANP'=>'ANP', 'FNP' => 'FNP'),
    'empty' => '(choose one)','class' => 'form-control', 'label' => 'MS Track'
));
echo $this->Form->input('age', array('class' => 'form-control'));
echo $this->Form->input('sex', array(
    'options' => array('Male' =>'Male', 'Female' => 'Female'),
    'empty' => '(choose one)','class' => 'form-control', 'label' => 'Biological Sex'
));
echo $this->Form->input('education', array(
    'options' => array('BS in Nursing' => 'BS in Nursing', 
    'BS  or BA in field other than Nursing' => 'BS  or BA in field other than Nursing',
    'MS or MA' => 'MS or MA'),
    'empty' => '(choose one)','class' => 'form-control', 'label' => 'Education Completed'
));
echo $this->Form->input('maritalstatus', array(
    'options' => array('Single' => 'Single', 
    'Married/living with someone else' => 'Married/living with someone else',
    'Divorced/Widowed' => 'Divorced/Widowed'),
    'empty' => '(choose one)','class' => 'form-control', 'label' => 'Are You?'
));
echo $this->Form->input('work', array(
    'options' => array('Yes, full-time' => 'Yes, full-time',
    					'Yes, part-time' => 'Yes, part-time',
    					'No' => 'No'),
    'empty' => '(choose one)','class' => 'form-control', 'label' => 'Do You Work?'
));
echo $this->Form->input('hispanic', array(
    'options' => array('Yes' => 'Yes', 'No' => 'No'),
    'empty' => '(choose one)','class' => 'form-control', 'label' => 'Are you Hispanic or Latino?'
));
echo $this->Form->input('race', array(
    'options' => array('African American/Black' => 'African American/Black', 
    					'Caucasian/White' => 'Caucasian/White', 
    					'Asian' => 'Asian'),
    'empty' => '(choose one)','class' => 'form-control', 'label' => 'What is your racial background?'
));
echo $this->Form->input('healthinsurance', array(
    'options' => array('Yes' => 'Yes', 'No' => 'No'),
    'empty' => '(choose one)','class' => 'form-control', 'label' => 'Do you have health insurance?'
));
echo $this->Form->input('children', array('class' => 'form-control', 'label' => 'How many children do you have?'));
echo $this->Form->input('peoplehousehold', array('class' => 'form-control', 'label' => 'How many people live in your household including yourself, your children and any other family members?
'));

echo $this->Form->input('annualincome', array(
    'options' => array('$10,000-20,000' => '$10,000-20,000', 
    					'$21,000-40,000' => '$21,000-40,000', 
    					'$41,000-50,000' => '$41,000-50,000 ',
    					'more than $50,000' => 'more than $50,000'),
    'empty' => '(choose one)','class' => 'form-control', 'label' => 'What is your annual household income?'
));
?>
<div class="input">
<label>Indicate any previous experience with the Spanish language (Check all that apply)</label>
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
    'empty' => '(choose one)','class' => 'form-control', 'label' => 'Personal Evaluation of ability'
));
echo $this->Form->end('Add Student');
?>