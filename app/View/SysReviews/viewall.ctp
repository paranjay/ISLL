<?php

?>
<h1>Systematic Reviews by <?php echo $this->Session->read('User.name')?></h1>

<?php 
echo $this->Html->link('Add New Review',array('controller' => 'sys_reviews', 'action' => 'add'));
echo "<br />";
echo $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout'));
?>
<table>
	<tr>
		<th>Author, Year</th>
		<th>Country, City</th>
		<th>Study Design (Retrospective Chart Review, Secondary Analysis, Randomized Control Trial, Observational, Longitudinal, Cross sectional)</th>
		<th>Sample description (Sample Size, Race, Age, Gender, Education, Occupation)</th>
		<th>Primary Disease</th>
		<th>Co-Morbidities</th>
		<th>Dependent Variables</th>
		<th>Conceptual/Theoretical Framework</th>
		<th>Intervention Description  (if applicable)</th>
		<th>Results (Descriptive and Intervention) </th>
		<th>Limitations of study (your limitations should be marked with an asterisk)</th>
		<th>Strengths of Study </th>
		<th>Comments (note the so what factor)</th>
		<th>initials</th>
		
	</tr>
	<?php foreach ($sysreviews as $review): ?>
	<tr>
		<td><?php echo $review['SysReview']['authorYear']; ?></td>
		<td><?php echo $review['SysReview']['countryCity']; ?></td>
		<td><?php echo $review['SysReview']['studyDesign']; ?></td>
		<td><?php echo $review['SysReview']['description']; ?></td>
		<td><?php echo $review['SysReview']['primaryDisease']; ?></td>
		<td><?php echo $review['SysReview']['coMorbidities']; ?></td>
		<td><?php echo $review['SysReview']['dependentVariables']; ?></td>
		<td><?php echo $review['SysReview']['ConceptualTheoreticalFramework']; ?></td>
		<td><?php echo $review['SysReview']['interventionDescription']; ?></td>
		<td><?php echo $review['SysReview']['results']; ?></td>
		<td><?php echo $review['SysReview']['limitationsOfStudy']; ?></td>
		<td><?php echo $review['SysReview']['strengthsOfStudy']; ?></td>
		<td><?php echo $review['SysReview']['comments']; ?></td>
		<td><?php echo $review['SysReview']['initials']; ?></td>
		<td><?php echo $this->Html->link('edit', array('action' => 'edit', $review['SysReview']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($review); ?>
</table>
