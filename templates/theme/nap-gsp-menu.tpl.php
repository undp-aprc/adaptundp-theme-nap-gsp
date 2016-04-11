<?php $menu_items = $variables['element']['menu-items']; ?>

<nav class="navbar navbar-default" id="main-menu">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="menu-item-list">
                <?php foreach($menu_items as $item): ?>
                <?php if($item['active_path']): ?>
                <li class="active">
                    <?php else: ?>
                <li>
                    <?php endif; ?>
                    <?php print(l($item['text'], $item['path'])); ?>
                </li>
                <?php endforeach; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="btn btn-default">Subscribe to newsletter</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



<!--<div id="main-menu">
    <div class="container">
        <ul id="main-menu-list">

        </ul>
    </div>
</div>-->