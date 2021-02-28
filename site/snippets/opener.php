<section id="opener" class="opener">

  <div class="trailer_container half_grid_l">
    <div class="trailer"  style="background-image: url(<?= $data->img()->html() ?>);" >
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
    <div class="controler forward_opener space_buttom_20p">
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
    </div>
  </div>
<div class="about_container">
  <div class="about_section half_grid_r">
     <p class="about big-brot"><?= $data->about()->ktr() ?></p>
     <div class="about_button_row">
        <button type="button" name="button">
          <?= $data->contact()->ktr() ?>
        </button>
        <button type="button" name="button">
          <p class="small–brot_20">share</p>
        </button>
     </div>
     <div class="pfeil space_buttom_20p">
       <svg width="69px" height="117px" viewBox="0 0 69 117" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
           <title>Group 5 Copy</title>
           <defs>
               <filter id="filter-1">
                   <feColorMatrix in="SourceGraphic" type="matrix" values="0 0 0 0 0.000000 0 0 0 0 0.000000 0 0 0 0 0.000000 0 0 0 1.000000 0"></feColorMatrix>
               </filter>
               <polygon id="path-2" points="0.273856068 0.490384416 45.9245393 0.490384416 45.9245393 66.6237972 0.273856068 66.6237972"></polygon>
           </defs>
           <g id="PAGE" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
               <g id="Group-5-Copy" transform="translate(-1407.000000, -714.000000)" filter="url(#filter-1)">
                   <g transform="translate(1441.720030, 772.287030) rotate(-270.000000) translate(-1441.720030, -772.287030) translate(1383.720030, 738.287030)">
                       <polygon id="Fill-1" fill="#000000" points="0 36.3223011 108.00465 36.3223011 108.00465 31.3611292 0 31.3611292"></polygon>
                       <g id="Group-4" transform="translate(69.722903, 0.284082)">
                           <mask id="mask-3" fill="white">
                               <use xlink:href="#path-2"></use>
                           </mask>
                           <g id="Clip-3"></g>
                           <path d="M29.4769065,33.5534497 C14.5399367,29.52579 0.441965733,19.6235884 0.273856068,0.490074536 L5.47673401,0.490074536 C6.31573294,18.9519245 23.6023646,31.5392325 45.9245393,31.0364529 L45.9245393,36.0781935 C23.6023646,35.5746392 6.31573294,48.1619472 5.47673401,66.6237972 L0.273856068,66.6237972 C0.441965733,47.491058 14.5399367,37.5888564 29.4769065,33.5611967 L29.4769065,33.5534497 Z" id="Fill-2" fill="#000000" mask="url(#mask-3)"></path>
                       </g>
                   </g>
               </g>
           </g>
       </svg>
     </div>
  </div>
</div>
</section>
