<?php

?>
<div class="col-md-4">
    <a href="/node/<?php print($node->nid); ?>">
        <div class="content-box photo-box caption-right equal-height active">
            <div class="content-first">
                <?php print(render($content['field_photo']))?>
            </div>
            <div class="content-second">
                <h2><?php print($variables['title']); ?></h2>
                <p><?php print(render($content['body'])); ?></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </a>
</div>