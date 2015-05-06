<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ISLL: Data Management Framework</title>
    
    <?php 
    //Bootstrap core CSS -->
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('sb-admin');
	echo $this->Html->css('font-awesome.min');
    //Add custom CSS here -->
    
    //echo $this->Html->script(array('jquery-1.7.2','jquery'));
    
	?>
	
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"> <i class="fa fa-university"></i>ISLL: Data Management Framework</a>
       </div>
       <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            
            <li> <?php echo $this->Html->link('<i class="fa fa-users"></i> Systematic Reviews',
            						array('controller' => 'sys_reviews',
            							'action' => 'viewall' 
            							),
            						array('data-original-title'=>'Systematic Reviews','escape'=>false)
            						) ?> </li>
            <li> <?php echo	$this->Html->link('<i class="fa fa-share-square"></i> View ',
            						array('controller' => 'users',
            							'action' => 'index'),
            							array('data-original-title'=>'View','escape'=>false)
            						)?> </li>
			<li> <?php echo	$this->Html->link('<i class="fa fa-briefcase"></i> Add a Patient ',
            						array('controller' => 'patients',
            							'action' => 'add'),
            							array('data-original-title'=>'Add a Patient','escape'=>false)
            						)?> </li>
            <li> <?php echo $this->Html->link('<i class="fa fa-home"></i> Add a Student ',
            						array('controller' => 'students',
            							'action' => 'add'
            							),array('data-original-title'=>' Add a Student','escape'=>false)
            						) ?></li>
             </ul>
            
          </div>
          
          </nav>
          <div id="page-wrapper">
          <div class="container-fluid">
          <?php echo $this->fetch('content'); ?>
          </div>
          </div>
    	</div>
    	<?php
    	echo $this->Html->script('jquery');
    	echo $this->Html->script('bootstrap');
    	?>
         </body>
         </html>
         