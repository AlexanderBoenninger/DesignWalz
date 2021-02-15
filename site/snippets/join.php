<section id="join" class="join">
      <div class="container join_content content space_top_80p space_bottom_80p">
        <p class="smal_brot join_walzer"> <?= $data->walzer()->ktr() ?></p>

        <a class="button click_ani join_walzer_button" href="mailto:hello@designwalz.com&amp;subject=Join%20as%20Walzer&amp;body=Hallo.%0D%0AI%20am%20interessted%20to%20join%20the%20Design%20Walz%20as%20Walzer.">
          <div class="stack stack_1_layer yellow">
            <p class="big_brot"> <?= $data->walzer_button()->ktr() ?></p>
          </div>
          <div class="stack_2_l stack_sized click_react yellow">
          </div>
        </a>
        <p class="smal_brot join_host"> <?= $data->host()->ktr() ?></p>
        <a class="button click_ani join_host_button" href="mailto:hello@designwalz.com&amp;subject=Join%20as%20Host&amp;body=Hallo.%0D%0AWe%20are%20interessted%20in%20hosting%20a%20Walzer." >
          <div class="stack stack_1_layer yellow">
            <p class="big_brot"> <?= $data->host_button()->ktr() ?></p>
          </div>
          <div class="stack_2_r stack_sized click_react yellow">
          </div>
        </a>
      </div>

</section>
