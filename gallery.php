<?php
    $videos = get_field('videos');

    if($videos) {
      echo '<div class="videos">';

        foreach($videos as $video) { ?>

          <div class="single-video">
            <?php $videoDetails = get_video($video['video_url']); ?>
            <a class="fancy-video" href="<?php echo $videoDetails['video']; ?>" style="background-image:url('<?php echo $videoDetails['image']; ?>');">
            </a>
            <?php echo $video['title']; ?>
          </div>
      <?php
        } // end foreach $video

      echo '</div>'; // end .videos
    } // end if $videos
  ?>
