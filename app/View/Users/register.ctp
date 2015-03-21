<h1>Register</h1>
<?php
echo $this->Html->link('Login',array('controller' => 'users', 'action' => 'login'));
echo $this->Form->create('User');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->end('Register');
?>