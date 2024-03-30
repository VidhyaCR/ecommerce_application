<h1>Welcome to abc shopping</h1>

<?php
  echo $this->Form->create('User', array('action' => 'add'));
  echo $this->form->input('username');
  echo $this->form->input('password', array('type' => 'password'));
  echo $this->form->input('password_confirm', array('type' => 'password'));
  echo $this->form->submit();
  ?>
  <br><span>Already have a account?
  <?php
  echo $this->Html->link('Login', [
    'action' => 'edit',
]);
  echo $this->form->end();
?>