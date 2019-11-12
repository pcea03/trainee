<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-9 medium-8 columns content align-center">
    <?= $this->Form->create() ?>

    <div class="form-group">
    <?php echo $this->Form->control('email');?>
    </div>

    <div class="form-group">
    <?php echo $this->Form->control('password'); ?>
    </div>
    <?= $this->Form->button(__('login'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>

