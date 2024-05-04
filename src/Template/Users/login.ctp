<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->assign('title', 'Demo Shopping');
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav> -->
<head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
<!-- <style>
      .container{
        border:2px solid blue;
        text-align:center;
        
        height:500px;
        width:400px;
    }
    body{
        padding:70px;
    }
    h1{
        margin:auto;
    }
    .row{
        height:90px;
        width:396px;
        background-color:paleturquoise;
    }
    </style> -->
</head>
<div class="container login__container my-5">
        <div class="row login__row">
            <div class="col-md-6 d-flex">
                <img class="login__imagek align-self-center" src="https://www.freevector.com/uploads/vector/preview/28488/Businessman_Happy_Accepting_News.jpg"
                    width="100%" alt="" />
            </div>
            <div class="col-md-5 d-flex">
                <div class="align-self-center card login__card shadow-sm w-100">
                    <div class="card-body">
                    <?= $this->Form->create() ?>
                            <h2 class="text-muted text-center">Welcome!!</h2>

                            <div class="my-5">
                                <h5 class="text-center">
                                    Login
                                </h5>
                            </div>

                            <div class="">
                                <div class="form-group">
                                    <?= $this->Form->control('email',['class'=>'form-control form-control-lg']); ?>
                                </div>
                                <div class="form-group">
                                <?= $this->Form->control('password',['class'=>'form-control form-control-lg']); ?>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control"
                                        id="customCheckDisabled1" />
                                    <label class="custom-control-label" for="customCheckDisabled1">Remember me</label>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->button(__('Login'),['class'=>'btn btn-primary btn-lg btn-block my-3']) ?>
                                    <div class="d-flex justify-content-between">
                                        <?= $this->Html->link('Password forgotten?', ['controller'=>'users','action'=>'forgot_password']) ?>
                                        <span> <?= $this->Html->link('Create account',['controller'=>'users', 'action'=>'signup']) ?>
                                        </span>
                                    </div>
                                    <div class="dropdown-divider my-4"></div>
                                    
                                </div>
                            </div>
                            
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
