<?php
$feed = $api->getFeed();
$posts = $feed->medias;

// var_dump($posts);

?>


<div class="block block-ig-feed">
  <div data-aos="fade-up" data-aos-delay="200">
    <div class="feed-wrap">
      <h2>Follow us on Instagram</h2>
      <div class="slider" id="ig-feed">
      <?php
      foreach ($posts as $post) {
        if($post->height == "1080"){
          $imgUrl = $post->displaySrc;
        }else{
          $imgUrl = $post->thumbnailSrc;
          var_dump($post);
        }
      ?>
        <div class="post">
          <a href="<?= $post->link; ?>" target=_blank><img src="<?= $imgUrl; ?>"></a>
        </div>
      <?php
      }
      ?>
      </div>
    </div>
  </div>
</div>
