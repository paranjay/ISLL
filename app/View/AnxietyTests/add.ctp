
<h1>Logged in User: <?php echo $this->Session->read('User.name'); ?></h1>
<?php
echo "<p>" . $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout')) . "</p>" ;
//echo "<p>" . $this->Html->link('View All Anxiety Scores',array('controller' => 'AnxietyTests', 'action' => 'viewall')) . "</p>" ;
?>
<center><h1> GAD 7 </h1></center>
<p> Over the last 2 weeks, how often have you been bothered by the following problems?</p>


<?php
echo $this->Form->create('AnxietyTest');
$options = array('0' => 'Not at all', '1' => 'Several days', '2' => 'More than half the days', '3' => 'Nearly every day');
$attributes = array('legend' => FALSE);
echo '<h1>' . 'Q1. Feeling nervous, anxious or on edge' .'</h1>' . $this->Form->radio('Q1Response', $options, $attributes) . '<br />';
echo '<h1>' . 'Q2. Not being able to stop or control worrying ' .'</h1>' . $this->Form->radio('Q2Response', $options, $attributes) . '<br />';
echo '<h1>' . 'Q3. Worrying too much about different things ' .'</h1>' . $this->Form->radio('Q3Response', $options, $attributes) . '<br />';
echo '<h1>' . 'Q4. Trouble relaxing ' .'</h1>' . $this->Form->radio('Q4Response', $options, $attributes) . '<br />';
echo '<h1>' . 'Q5. Being so restless that it is hard to sit still' .'</h1>' . $this->Form->radio('Q5Response', $options, $attributes) . '<br />';
echo '<h1>' . 'Q6. Becoming easily annoyed or irritable' .'</h1>' . $this->Form->radio('Q6Response', $options, $attributes) . '<br />';
echo '<h1>' . 'Q7. Feeling afraid as if something awful might happen' .'</h1>' . $this->Form->radio('Q7Response', $options, $attributes) . '<br />';
echo $this->Form->end('Add GAD Reponse');

?>







 

 

 