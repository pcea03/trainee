<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>


    <div class="large-9 medium-8 columns content">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-8 col-md-12 col-lg-4">
                <div class="profile-card py-3 card text-center">
                <?= $this->Form->postLink(['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to del//ete # {0}?', $user->id)],['class'=>'fa fa-remove']) ?>
                    <div class="card-body py-4">
                        <img class="profile-picture rounded-circle" src="https://cdna.artstation.com/p/assets/images/images/016/099/486/large/nahmeer-santiago-edcaluag.jpg?1550879823"/>
                        <h2 class="text-dark h5 font-weight-bold mt-4 mb-1">
                        <?= h($user->email) ?>
                        </h2>
                        <p class="text-muted font-weight-bold small">
                            <i class="fa fa-hashtag"></i>
                            <?= h($user->phone) ?>
                            </p>
                            <div class="text-center">
                                <button class="btn btn-sm btn-outline-success">
                                    Edit
                                </button>
                                </div>
                            <div class="">
                            <p class="text-muted font-weight-bold small">created
                            
                            <h6><?= h($user->created) ?></h6></p>
                            <p class="text-muted font-weight-bold small"><?= h($user->modified) ?></p>
                        </div>
                        <h5 class="mt-4 pt-3 h6 text-muted mb-0">Get Connected</h5>
                        <div class="d-flex social-section justify-content-center">
                            <a href=""><i class="fa fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

