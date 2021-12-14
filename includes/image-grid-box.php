<div class="box shadow" itemscope itemprop="associateMedia" itemtype="http://schema.org/ImageObject">
    <figure>
        <a itemprop="url" href="<?= $post['slug_url'] ?>" target="_blank" style="text-decoration:none; display: inline-block; background: url(images/loading.gif); background-repeat: no-repeat; background-size:15%; background-position: center center; ">
            <img itemprop="thumbnail" class="lazy" alt="<?= $post['post_title'] ?>" title="<?= $post['post_title'] ?>" src="<?= $location ?>/thumbnail/<?= $post['thumbnail'] ?>" data-src="<?= $location ?>/thumbnail/<?= $post['thumbnail'] ?>" />
        </a>
        <figcaption itemprop="caption description" class="px-1 px-sm-3 mb-0 description">
            <?= $post['post_title'] ?>
        </figcaption>
    </figure>
    <footer class="d-flex justify-content-between px-1 px-sm-3">
        <?php
        $pngname=get_basename($post['thumbnail']).'.png';
        $info = getimagesize("png/$pngname"); ?>
        <div class=" "> <span class="d-none d-sm-inline">size: </span>  <span><?= $info[0] ?>x<?= $info[1] ?>px</span></div>
        <?php $file_size = filesize("png/$pngname"); ?>
        <div class=" text-align-end"><span class=" d-none d-sm-inline">filesize: </span>  <span> <?= toConvert($file_size) ?></span></div>
    </footer>
    <meta name="description" itemprop="keywords" content="<?= $post['post_desc'] ?>">
    <meta name="keywords" itemprop="keywords" content="<?= $post['tags'] ?>">
</div>