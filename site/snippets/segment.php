<section id="<?= $data->artist_Id() ?>" class="segment">

  <div class="full_grid ">
    <div class="artist_trailer_container ">

    <video id="" class="vid" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
   <source src="<?= $data->trailer() ?>.webm" type="video/webm">
   <source src="<?= $data->trailer() ?>.mp4" type="video/mp4">
   <source src="<?= $data->trailer() ?>.ogv" type="video/ogg ogv">
Video not supported </video>
      <!-- <div class="artist_trailer"  style="background-image: url(<?= $data->img()->html() ?>);" >
    </div> -->
  </div>
  <div class="controler play space_buttom_20p">
    <svg width="52px" height="58px" viewBox="0 0 52 58" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>play</title>
        <g id="PAGE" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Custom-Preset-3-Copy-10" transform="translate(-27.000000, -827.000000)" stroke="#000000" stroke-width="5">
                <polygon id="Triangle-Copy-14" transform="translate(51.517330, 856.220883) rotate(-270.000000) translate(-51.517330, -856.220883) " points="51.5173299 834.703553 75.5661104 877.738213 27.4685494 877.738213"></polygon>
            </g>
        </g>
    </svg>
  </div>
  <div class="controler controler_skip space_buttom_20p">
    <a class="backward"href="#">
      <svg width="73px" height="43px" viewBox="0 0 73 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>Group 2</title>
          <g id="PAGE" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Custom-Preset-3-Copy-10" transform="translate(-1300.000000, -1750.000000)" stroke="#000000" stroke-width="5">
                  <g id="Group-2" transform="translate(1305.046564, 1754.115457)">
                      <polygon id="Triangle-Copy-11" transform="translate(49.772835, 17.188703) rotate(-90.000000) translate(-49.772835, -17.188703) " points="49.7728349 2 66.7484447 32.3774069 32.7972252 32.3774069"></polygon>
                      <polygon id="Triangle-Copy-12" transform="translate(15.975610, 17.188703) rotate(-90.000000) translate(-15.975610, -17.188703) " points="15.9756098 2 32.9512195 32.3774069 -1 32.3774069"></polygon>
                  </g>
              </g>
          </g>
      </svg>
    </a>
    <a class="forward" href="#">
    <svg width="73px" height="43px" viewBox="0 0 73 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>Group</title>
        <g id="PAGE" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Custom-Preset-3-Copy-10" transform="translate(-623.000000, -842.000000)" stroke="#000000" stroke-width="5">
                <g id="Group" transform="translate(625.125778, 846.105351)">
                    <polygon id="Triangle-Copy-16" transform="translate(15.975610, 17.188703) rotate(-270.000000) translate(-15.975610, -17.188703) " points="15.9756098 2 32.9512195 32.3774069 -1 32.3774069"></polygon>
                    <polygon id="Triangle-Copy-19" transform="translate(49.772835, 17.188703) rotate(-270.000000) translate(-49.772835, -17.188703) " points="49.7728349 2 66.7484447 32.3774069 32.7972252 32.3774069"></polygon>
                </g>
            </g>
        </g>
    </svg>
    </a>
  </div>
  <div class="artist">
    <h2 class="space_buttom_10p center"><?= $data->name()->ktr() ?></h2>
    <div class="segment_button_row space_buttom_20p">
      <?php if($data->contact()->isNotEmpty()): ?>
        <button type="button" name="button">
          <?= $data->contact()->ktr() ?>
        </button>
      <?php endif ?>
      <?php if($data->website()->isNotEmpty()): ?>
        <button type="button" name="button">
          <?= $data->website()->ktr() ?>
        </button>
      <?php endif ?>
   </div>
  </div>
</div>
</section>
