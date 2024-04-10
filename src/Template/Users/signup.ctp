<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
  <fieldset>
    <legend>User Registration</legend>
    <br>
    <div>
      <label for="InputName" class="form-label mt-4">Name</label>
      <input type="text" class="form-control" id="InputName" name="name" aria-describedby="nameHelp" placeholder="Enter name">
    </div>
    <div>
      <label for="InputPhone" class="form-label mt-4">Phone</label>
      <input type="text" class="form-control" id="InputPhone" name="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
    </div>
    <div>
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div>
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
    </div>
    <div>
      <label for="exampleInputConfirmPassword1" class="form-label mt-4">Confirm Password</label>
      <input type="text" name="confirm_password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password" autocomplete="off">
    </div>
    </fieldset>
    <?= $this->Form->button(__('Signup'), ['class' => 'btn btn-primary']) ?>
  </fieldset>
  
    <?= $this->Form->end() ?>
</div>
