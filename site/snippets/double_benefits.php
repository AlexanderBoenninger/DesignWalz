<section id="double_benefits" class="double_benefits">

  <h2 class="headline_center"><?= $page->head_benefits()->html() ?></h2>

  <div class="for_walzer space_bottom_80p">
     <ul class="">
       <?php foreach ($page->benefits_w()->toStructure() as $point): ?>
         <li class="normal_brot">
           <?= $point->benefit()->ktr() ?>
         </li>
       <?php endforeach ?>
     </ul>
  </div>
  <div class="for_host space_bottom_40p">
     <ul class="">
       <?php foreach ($page->benefits_h()->toStructure() as $point): ?>
         <li class="normal_brot">
           <?= $point->benefit()->ktr() ?>
         </li>
       <?php endforeach ?>
     </ul>
  </div>

  <div class="for_walzer space_bottom_80p">
    <div class="stack stack_1_layer white_back">
      <p class="normal_brot" src="" alt="some text"><?= $page->reminder_w()->html() ?></p>
    </div>
    <div class="stack_2_r stack_sized white_back">
      <div class="stack_2_r substacks stack_5_r white_back">
       <div class="stack_2_r substacks substack_5_r white_back">
         <div class="stack_2_r substacks substack_5_r white_back">
         </div>
       </div>
     </div>
    </div>
  </div>


  <!-- <div class="for_host space_bottom_80p">
     <p class="normal_brot"> <?= $page->page_entry_h()->ktr() ?></p>
  </div> -->

</section>
