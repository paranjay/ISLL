<h1>Login</h1>
<?php
echo $this->Html->link('Register',array('controller' => 'users', 'action' => 'register'));
echo $this->Form->create('User');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->end('Login');
?>