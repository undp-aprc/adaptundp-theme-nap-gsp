<?php

?>
<div class="col-md-4 equal-height">
    <a href="/node/<?php print($node->nid); ?>">
        <div class="content-box photo-box caption-right">
            <div class="row">
                <div class="col-sm-6">
                    <?php print(render($content['field_photo']))?>
                </div>
                <div class="col-sm-6">
                    <h2><?php print($variables['title']); ?></h2>
                    <p><?php print(render($content['body'])); ?></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </a>
</div>