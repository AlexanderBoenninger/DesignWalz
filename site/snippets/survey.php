<section id="survey" class="survey">
      <div class="container survey_content content space_top_80p space_bottom_80p">
        <h2><?= $data->secTitle()->html() ?></h2>
        <p class="big_brot survey_text"> <?= $data->about()->ktr() ?></p>

        <a class="button click_ani join_walzer_button" href="https://docs.google.com/forms/d/e/1FAIpQLSclxYYWFqV0--KrAeWyeT9e-3Yk7pd9VJ97nT8I5PbiKxS6DA/viewform" target="_blank" >

          <div class="button_2 button_size blue_light">
            <p class="big_brot"> <?= $data->walzer_button()->ktr() ?></p>
          </div>
          <div class="button_0 button_sized click_react">
          </div>
        </a>
        <!-- <p class="smal_brot join_host"> <?= $data->host()->ktr() ?></p> -->
        <a class="button click_ani join_host_button" href="https://docs.google.com/forms/d/e/1FAIpQLSc-jFUuuqA3I1dttIBq0rL-CDzUyPZkD-vkmS_s-QBw4brdJA/viewform" target="_blank" >

            <div class="button_2 button_size blue_light">
              <p class="big_brot"> <?= $data->host_button()->ktr() ?></p>
            </div>
            <div class="button_1 button_sized click_react ">
          </div>
        </a>
      </div>

</section>
