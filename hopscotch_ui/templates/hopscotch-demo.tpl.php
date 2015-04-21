<div class="hopscotch-demo-page">
  <?php backdrop_add_css(backdrop_get_path('module', 'hopscotch_ui') . '/css/demo.css'); ?>
  <?php backdrop_add_css(backdrop_get_path('module', 'hopscotch_ui') . '/css/demo-mobile.css'); ?>
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h1>Hopscotch Feature Tour Plugin</h1>
        <hr>
      </div>
    </div>

    <br><br>

    <div class="row">
      <div class="twelve columns">
        <h1>Want to start the tour manually?</h1>
        <?php print theme('hopscotch_start_link', array('tour_name' => 'manual_trigger')); ?>

        <hr>
      </div>
    </div>

    <br><br>

    <div class="row">
      <div class="six columns">
        <h2 id="numero1" class="so-awesome">Point Out Those New Features!</h2>

        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia
          quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Cras mattis consectetur purus sit amet
          fermentum.</p>
      </div>
      <div class="six columns">
        <img id="numero5" src="<?php print url(backdrop_get_path('module', 'hopscotch_ui') . '/css/images/430x200.gif'); ?>" style="width: 430px; height: 200px;">
      </div>
    </div>

    <br><br><br><br>

    <div class="row">
      <div class="twelve columns">
        <h3 id="numero3">Get the Most Out of Your App!</h3>

        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et
          magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet,
          consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      </div>
    </div>

    <br><br><br><br>

    <div class="row">
      <div class="four columns">
        <img src="<?php print url(backdrop_get_path('module', 'hopscotch_ui') . '/css/images/280x120.gif'); ?>" style="width: 430px; height: 200px;">
      </div>
      <div class="eight columns">
        <h3 id="numero2">Customize Each Stop Along the Way</h3>

        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia
          quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Cras mattis consectetur purus sit amet
          fermentum.</p>
      </div>
    </div>

    <br><br><br><br>

    <div class="row">
      <div class="six columns">
        <h4 id="numero4">Make Every Click Count</h4>

        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia
          quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Cras mattis consectetur purus sit amet
          fermentum.</p>
      </div>
      <div class="six columns">
        <img src="<?php print url(backdrop_get_path('module', 'hopscotch_ui') . '/css/images/430x200.gif'); ?>" style="width: 430px; height: 200px;">
      </div>
    </div>

    <br><br><br><br>

  </div>
</div>
