<p> Logged in User: <?php echo $this->Session->read('User.name')?> </p>
<div class = "col-lg-12"> <div class="table-responsive">
<table class="table table-bordered table-hover" >
	<thead><tr>
		<th>studentid</th>
		<th>studentname</th>
		<th>consent</th>
		<th>dateofconsent</th>
		<th>cohort</th>
		<th>eligibilitytestresult</th>
		<th>mstrack</th>
		<th>age</th>
		<th>sex </th>
		<th>education</th>
		<th>maritalstatus</th>
		<th>work</th>
		<th>hispanic</th>
		<th>race</th>
		<th>healthinsurance</th>
		<th>children</th>
		<th>peoplehousehold</th>
		<th>annualincome</th>
		<th>previousexperience</th>
		<th>personalevalutaion</th>
	</tr></thead>
	<?php foreach ($students as $student): ?>
	<tr>
		<td><?php echo $student['Student']['studentid']; ?></td>
		<td><?php echo $student['Student']['studentname']; ?></td>
		<td><?php echo $student['Student']['consent']; ?></td>
		<td><?php echo $student['Student']['dateofconsent']; ?></td>
		<td><?php echo $student['Student']['cohort']; ?></td>
		<td><?php echo $student['Student']['eligibilitytestresult']; ?></td>
		<td><?php echo $student['Student']['mstrack']; ?></td>
		<td><?php echo $student['Student']['age']; ?></td>
		<td><?php echo $student['Student']['sex']; ?></td>
		<td><?php echo $student['Student']['education']; ?></td>
		<td><?php echo $student['Student']['maritalstatus']; ?></td>
		<td><?php echo $student['Student']['work']; ?></td>
		<td><?php echo $student['Student']['hispanic']; ?></td>
		<td><?php echo $student['Student']['race']; ?></td>
		<td><?php echo $student['Student']['healthinsurance']; ?></td>
		<td><?php echo $student['Student']['children']; ?></td>
		<td><?php echo $student['Student']['peoplehousehold']; ?></td>
		<td><?php echo $student['Student']['annualincome']; ?></td>
		<td><?php echo $student['Student']['previousexperience']; ?></td>
		<td><?php echo $student['Student']['personalevalutaion']; ?></td>
		
		<td><?php echo $this->Html->link('edit', array('action' => 'edit', $student['Student']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($review); ?>
</table>
</div></div>