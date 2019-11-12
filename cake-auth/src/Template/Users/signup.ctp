<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <fieldset>
        <legend><?= __('Sign Up') ?></legend>
    </fieldset>


    <?= $this->Form->create($user) ?>
  <div class="form-group">
    <?php echo $this->Form->control(('email'),['class'=>'form-control','placeholder'=>'Email']); ?>
  </div>
  <div class="form-group">
    <?php echo $this->Form->control(('password'),['class'=>'form-control','placeholder'=>'Password']); ?>
  </div>
    <div>
    <?php echo $this->Form->control(('phone'),['class'=>'form-control','placeholder'=>'Phone Number']);?>
    </div>

  <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
  <?= $this->Form->end() ?>


</div>
