<section id="support" class="support">
  <div class="container support_content content space_top_80p space_bottom_80p">
    <p class="smal_brot join_walzer white_typo"> <?= $support->support_text()->ktr() ?></p>

    <a class="button click_ani join_walzer_button white_typo" href="mailto:hello@designwalz.com?subject=Support%20the%20Design%20Walz&amp;body=Hello.%0D%0AI%20would%20love%20to%20support%20you.">
      <div class="stack stack_1_layer white_border green">
        <p class="big_brot button_text"> <?= $support->support_button()->ktr() ?></p>
      </div>
      <div class="stack_2_l stack_sized hover_react white_border green">
      </div>
    </a>

    <p class="smal_brot join_host white_typo"> <?= $support->donate_text()->ktr() ?></p>
    <a class="button click_ani join_host_button white_typo" href="mailto:hello@designwalz.com?subject=Donation&amp;body=Hallo.%0D%0AWe%20are%20still%20figuring%20out%20how%20we%20can%20proceed%20Donations.%20If%20you%20contact%20us,%20we%20will%20find%20a%20quick%20solution.">
      <div class="stack stack_1_layer white_border green">
        <p class="big_brot button_text"> <?= $support->donate_button()->ktr() ?></p>
      </div>
      <div class="stack_2_r stack_sized hover_react white_border green">
      </div>
    </a>
  </div>

</section>
