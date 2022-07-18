<?php get_header(); ?>
<section class="container-fluid" id="slider_baner">
   <?php if( have_rows('slider_list') ): ?>
      <div class="swiper mySwiper_banner">
         <div class="swiper-wrapper">
            <?php while( have_rows('slider_list') ) : the_row(); ?>
               <div class="swiper-slide banner_item" style="background: url(<?php echo get_sub_field('slider_item_img') ?>) center center no-repeat; background-size: cover;">
                  <div class="container">
                     <h3 class="kaushan_script"><?php echo get_sub_field('slider_list_semi_title') ?></h3>
                     <h2><?php echo get_sub_field('slider_list_title') ?></h1>
                     <a href="<?php echo get_sub_field('slider_item_link') ?>">Learn more</a>
                     <span class="d-none"><?php echo get_sub_field('slider_item_bullet_title') ?></span>
                  </div>
               </div>
            <?php endwhile; ?>
         </div>
         <div class="swiper-pagination container"></div>
      </div>
   <?php endif;?>
</section>

<section class="container-fluid d-flex justify-content-center" id="about_us">
   <div class="container">
       <div class="about_us row text-center">
           <div class="col-12">
               <h4 class="kaushan_script"><?php the_field('about_us_title') ?></h4>
               <h2 class="h2_underline"><?php the_field('about_us_semi_title') ?></h2>
               <p class="margin_p"><?php the_field('about_us_description') ?></p>
           </div>
           <?php if( have_rows('about_us_quality_list') ): ?>
            <?php $i = 0; if( $i < 3 ) {?>
               <?php while( have_rows('about_us_quality_list') ) : the_row(); ?>
                  <div class="col-12 col-md-4 d-flex justify-content-center about_us_image">
                      <a href="<?php echo get_sub_field('about_us_quality_item_link_page') ?>">
                          <img src="<?php echo get_sub_field('about_us_quality_item_img') ?>" alt="<?php echo get_sub_field('about_us_quality_item_title') ?>">
                          <div class="text_hover">
                              <img src="<?php echo get_sub_field('about_us_quality_item_icon') ?>" alt="icon">
                              <p><?php echo get_sub_field('about_us_quality_item_title') ?></p>
                          </div>
                      </a>
                  </div>
               <?php $i++; endwhile; ?>
               <?php } ?>
           <?php endif;?>
       </div>
   </div>
</section>

<section class="container-fluid counter" id="counter">
   <div class="container">
      <div class="row justify-content-between text-center align-items-center">
         <div class="counter_item">
            <h5>42</h5>
            <p>Web Design Projects</p>
         </div>
         <div class="counter_item">
            <h5>123</h5>
            <p>happy client</p>
         </div>
         <div class="counter_item">
            <h5>15</h5>
            <p>award winner</p>
         </div>
         <div class="counter_item">
            <h5>99</h5>
            <p>cup of coffee</p>
         </div>
         <div class="counter_item">
            <h5>24</h5>
            <p>members</p>
         </div>
      </div>
   </div>
</section>

<section class="container-fluid d-flex justify-content-center" id="service">
   <div class="container">
       <div class="row text-center">
           <div class="col-12 mb-5 mb-md-0">
               <h4 class="kaushan_script"><?php the_field('amazing_services_semi_title') ?></h4>
               <h2 class="h2_underline"><?php the_field('amazing_services_title') ?></h2>
           </div>
           <?php if( have_rows('amazing_services_quality_list') ): ?>
               <?php while( have_rows('amazing_services_quality_list') ) : the_row(); ?>
                  <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start text-left amazing_services_item">
                      <img src="<?php echo get_sub_field('amazing_services_item_icon_quality') ?>" alt="<?php echo get_sub_field('amazing_services_item_title_quality') ?>">
                      <div>
                         <h4><?php echo get_sub_field('amazing_services_item_title_quality') ?></h4>
                         <p class="mb-0"><?php echo get_sub_field('amazing_services_item_description') ?></p>
                      </div>
                  </div>
               <?php endwhile; ?>
           <?php endif;?>
       </div>
   </div>
</section>

<section class="container-fluid d-flex align-items-center flex-column unique_design">
   <h4 class="kaushan_script">For all devices</h4>
   <h2 class="h2_underline">unique design</h2>
   <img src="<?php echo get_template_directory_uri() ?>/image/display_bg_768x1024.png" alt="tablet">
</section>

<section class="container-fluid" id="what_we_do">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center what_we_do">
            <h4 class="kaushan_script"><?php the_field('what_we_do_semi_title') ?></h4>
            <h2 class="h2_underline"><?php the_field('what_we_do_title') ?></h2>
            <p class="margin_p"><?php the_field('what_we_do_description') ?></p>
         </div>
         <div class="col-12 col-md-6">
            <img class="img_res" src="<?php the_field('what_we_do_img') ?>" alt="<?php the_field('what_we_do_title') ?>">
         </div>
         <div class="accordion col-12 col-md-6 accordion_list" id="accordionExample">
            <?php if( have_rows('what_we_do_accordion_list') ): ?>
               <?php $i = 0; ?>
               <?php while( have_rows('what_we_do_accordion_list') ) : the_row(); ?>
                  <div class="accordion_item">
                    <div class="card_head" id="heading<?php echo $i ?>">
                        <button class="d-flex align-items-center <?php echo $i == 0 ? '' : 'collapsed' ?>" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
                           <img src="<?php echo get_sub_field('what_we_do_accordion_item_icon') ?>" alt="<?php echo get_sub_field('what_we_do_accordion_item_title') ?>">
                           <h4><?php echo get_sub_field('what_we_do_accordion_item_title') ?></h4>
                        </button>
                    </div>
                     <div id="collapse<?php echo $i ?>" class="collapse <?php echo $i == 0 ? 'show' : '' ?>" aria-labelledby="heading<?php echo $i ?>" data-parent="#accordionExample">
                      <div class="card_body">
                        <p><?php echo get_sub_field('what_we_do_accordion_item_description') ?></p>
                      </div>
                    </div>
                  </div>
                  <?php $i++; ?>
               <?php endwhile; ?>
            <?php endif;?>
         </div>
      </div>
   </div>
</section>

<section class="container-fluide chat_swiper" id="quotes">
   <div class="container">
       <div class="Swiper mySwiper1">
           <div class="swiper-wrapper">
            <?php if( have_rows('quotes_list') ): ?>
               <?php while( have_rows('quotes_list') ) : the_row(); ?>
                  <div class="swiper-slide quotes_item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="156" height="156" viewBox="0 0 156 156"><g><g><path fill="none" stroke="#95e1d3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="6" d="M3 3v0h150v150H3v0z" clip-path="url(&quot;#mnh4a&quot;)"/></g><g><path fill="#95e1d3" d="M107 83.998h-2v5c0 .206-.021.41-.06.605-.029.136-.077.263-.123.392-.02.058-.03.117-.053.17-.048.115-.115.22-.176.327-.035.06-.061.126-.1.184a3.075 3.075 0 0 1-.334.403c-.012.013-.02.029-.033.04a2.982 2.982 0 0 1-2.084.876l-.037.002a2.985 2.985 0 0 1-2.121-.878l-7.122-7.121H65a3 3 0 0 1-3-3v-30a3 3 0 0 1 3-3h42a3 3 0 0 1 3 3v30a3 3 0 0 1-3 3zm-15.485 3l6.326 6.327.008-.008A5.968 5.968 0 0 0 102 94.999v2a3 3 0 0 1-3 2.999H67.243l-8.122 8.122a2.992 2.992 0 0 1-2.121.879c-.013 0-.024-.004-.037-.004a2.994 2.994 0 0 1-2.084-.875c-.013-.013-.021-.029-.033-.041a2.928 2.928 0 0 1-.334-.404c-.039-.057-.064-.122-.1-.183-.061-.108-.128-.212-.176-.326-.023-.054-.033-.114-.053-.17-.046-.13-.094-.257-.122-.394a3.005 3.005 0 0 1-.06-.605v-6h-4.005A3 3 0 0 1 47 97V62.998a3 3 0 0 1 3-3h9v21a6 6 0 0 0 6 6z"/></g></g></svg>
                      <article>
                          <p><?php echo get_sub_field('quotes_list_description') ?></p>
                          <h4 class="kaushan_script"><?php echo get_sub_field('quotes_list_author') ?></h4>
                      </article>
                  </div>
               <?php endwhile; ?>
            <?php endif;?>
           </div>
           <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
       </div>
   </div>
</section>

<section class="container-fluid" id="team">
   <div class="container team">
      <div class="row">
         <div class="col-12 text-center team">
            <h4 class="kaushan_script">Who we are</h4>
            <h2 class="h2_underline">Meet our team</h2>
            <p class="margin_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
         </div>
         <div class="col-12 team_list row">
            <?php
                  $args = array(
                      'post_type'      => 'post_type_team',
                      'post_status'    => 'publish',
                      'posts_per_page' => 3,
                  );

                  $query = new WP_Query( $args );

                  if ( $query->have_posts() ) {
                      while ( $query->have_posts() ) {
                          $query->the_post();?>
                          <div class="col-12 col-md-4 justify-content-center team_item">
                             <div class="team_author_img">
                                 <?php echo get_the_post_thumbnail() ?>
                                    <ul class="network_hover_list">
                                       <?php if(get_field('team_facebook_author')) { ?>
                                          <li>
                                             <a href="<?php the_field('team_facebook_author') ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="26" viewBox="0 0 13 26"><g><g><path fill="#fff" d="M12.09.199V4.32s-3.038-.303-3.799.861c-.416.636-.169 2.5-.206 3.838h4.03c-.341 1.564-.585 2.624-.836 3.978H8.063v12.804H2.48V13.047H.106V9.02h2.349c.12-2.946.165-5.864 1.629-7.35C5.728-.001 7.297.199 12.089.199z"/></g></g></svg>
                                             </a>
                                          </li>
                                       <?php } ?>
                                       <?php if(get_field('team_twitter_author')) { ?>
                                          <li>
                                             <a href="<?php the_field('team_twitter_author') ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="22" viewBox="0 0 26 22"><g><g><path fill="#f38181" d="M17.513.601c2.034-.036 3.117.705 4.15 1.648.879-.076 2.02-.566 2.692-.908l.653-.357c-.384 1.037-.904 1.85-1.704 2.466-.178.136-.354.321-.577.408v.013c1.14-.011 2.08-.526 2.973-.805v.013c-.469.745-1.104 1.502-1.781 2.044l-.82.651c.015 1.207-.018 2.359-.244 3.373-1.311 5.895-4.787 9.898-10.288 11.612-1.976.615-5.168.868-7.432.306-1.122-.278-2.136-.593-3.088-1.008a12.305 12.305 0 0 1-1.486-.767L.1 19.009c.51.015 1.108.156 1.678.064.517-.084 1.023-.062 1.5-.166 1.188-.261 2.243-.606 3.151-1.137.441-.259 1.11-.56 1.423-.933-.59.01-1.125-.127-1.563-.281-1.7-.6-2.688-1.703-3.332-3.36.515.057 1.998.19 2.345-.102-.648-.036-1.271-.411-1.717-.69-1.367-.855-2.481-2.289-2.473-4.496l.538.255c.344.145.693.222 1.102.307.173.036.52.137.718.063h-.026c-.264-.307-.695-.512-.96-.843-.878-1.09-1.7-2.766-1.18-4.764a6.1 6.1 0 0 1 .564-1.367l.026.012c.102.214.33.371.474.55.448.555 1 1.054 1.563 1.494 1.918 1.5 3.645 2.422 6.42 3.104.703.174 1.516.306 2.357.307-.236-.687-.16-1.8.025-2.465.468-1.673 1.483-2.88 2.973-3.525a6.31 6.31 0 0 1 1.166-.359l.64-.076z"/></g></g></svg>
                                             </a>
                                          </li>
                                       <?php } ?>
                                       <?php if(get_field('team_pinterest_author')) { ?>
                                          <li>
                                             <a href="<?php the_field('team_pinterest_author') ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="26" viewBox="0 0 21 26"><g><g><path fill="#f38181" d="M9.05 16.854c-.208.833-.419 1.706-.637 2.56-.215.842-.405 1.696-.718 2.47-.519 1.281-1.178 2.52-2.043 3.521-.575.667-.453.4-.626.365-.132-.027-.143-.157-.17-.345-.14-1.018-.044-2.195.008-3.34.06-1.303.334-2.387.589-3.47.484-2.063.946-4.087 1.435-6.164.032-.138.12-.366.09-.445-.222-.577-.366-1.095-.429-1.7a5.41 5.41 0 0 1 .14-1.944c.276-1.058.912-1.995 1.893-2.338.624-.216 1.315-.118 1.735.132.432.259.729.667.867 1.246.148.615.039 1.35-.08 1.891-.267 1.219-.618 2.134-.937 3.31-.158.583-.337 1.182-.19 1.812.137.578.438.976.848 1.275.426.31.93.48 1.625.455 1.228-.043 2.081-.828 2.651-1.568.913-1.185 1.465-2.784 1.675-4.686.068-.614.117-1.319.07-2.014-.088-1.284-.49-2.317-1.127-3.117-.606-.762-1.466-1.37-2.512-1.71-1.037-.34-2.472-.452-3.747-.234-2.318.397-3.952 1.714-4.915 3.533a7.079 7.079 0 0 0-.837 3.41c0 1.05.26 1.865.678 2.5.133.201.328.367.458.597.185.326-.028.811-.12 1.164-.11.425-.12 1.012-.617 1.022-.206.004-.464-.146-.638-.243-1.305-.721-2.097-2.033-2.422-3.734a8.935 8.935 0 0 1 0-3.238c.19-.967.544-1.858.937-2.581a9.238 9.238 0 0 1 3.459-3.563C6.559 1.023 7.818.56 9.35.337a16.432 16.432 0 0 1 1.605-.131 9.638 9.638 0 0 1 4.326.809 8.85 8.85 0 0 1 2.98 2.146c.838.915 1.448 1.98 1.834 3.309.202.692.398 1.432.398 2.287 0 .858-.181 1.613-.308 2.368-.474 2.828-1.819 5.141-3.838 6.458a6.636 6.636 0 0 1-1.754.81c-.667.193-1.428.339-2.243.282a4.599 4.599 0 0 1-1.983-.577c-.54-.305-.994-.679-1.316-1.244z"/></g></g></svg>
                                             </a>
                                          </li>
                                       <?php } ?>
                                       <?php if(get_field('team_instagram_author')) { ?>
                                          <li>
                                             <a href="<?php the_field('team_instagram_author') ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"><g><g><path fill="#f38181" d="M22.7 25.8H3.5a3.2 3.2 0 0 1-3.2-3.2V3.4A3.2 3.2 0 0 1 3.5.2h19.2a3.2 3.2 0 0 1 3.2 3.2v19.2a3.2 3.2 0 0 1-3.2 3.2zM13.1 8.04a4.957 4.957 0 0 0-4.498 2.88h-.005l-.022.054a4.908 4.908 0 0 0-.128.322c-.02.052-.04.103-.057.155a4.998 4.998 0 0 0-.095.34c-.014.054-.03.106-.042.16a4.99 4.99 0 0 0-.061.368c-.007.05-.017.099-.023.15a4.96 4.96 0 1 0 9.861 0c-.005-.051-.015-.1-.022-.15a4.985 4.985 0 0 0-.061-.368c-.012-.054-.028-.106-.042-.16a5.004 5.004 0 0 0-.095-.34c-.017-.052-.038-.103-.057-.155a4.916 4.916 0 0 0-.128-.322l-.022-.055h-.005A4.957 4.957 0 0 0 13.1 8.04zm9.92-3.68a1.28 1.28 0 0 0-1.28-1.28h-2.56a1.28 1.28 0 0 0-1.28 1.28v2.56c0 .707.573 1.28 1.28 1.28h2.56a1.28 1.28 0 0 0 1.28-1.28zm0 6.56h-2.36a7.84 7.84 0 0 1-7.56 9.92 7.84 7.84 0 0 1-7.56-9.92H3.18v10.72c0 .707.573 1.28 1.28 1.28h17.28a1.28 1.28 0 0 0 1.28-1.28z"/></g></g></svg>
                                             </a>
                                          </li>
                                       <?php } ?>
                                    </ul>
                             </div>
                             <div class="team_author_info text-center">
                                 <h4 class="mb-0"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                                 <p class="mb-0"><?php the_field('team_employment') ?></p>
                             </div>
                           </div>
                      <?php }
                  }
                  wp_reset_postdata();
            ?>
         </div>
         <div class="col-12 text-right mt-5">
            <a class="link_page" href="<?php echo get_post_type_archive_link( 'post_type_team' ) ?>">Team...</a>
         </div>
      </div>
   </div>
</section>

<section class="container-fluide logos">
   <div class="container">
       <div class="Swiper mySwiper">
           <div class="swiper-wrapper">
               <div class="swiper-slide">
                   <img class="img_res" src="<?php echo get_template_directory_uri() ?>/image/Logo_1.png" alt="Hipster barbershop logo 1">
               </div>
               <div class="swiper-slide">
                   <img class="img_res" src="<?php echo get_template_directory_uri() ?>/image/Logo_2.png" alt="ABCD logo">
               </div>
               <div class="swiper-slide">
                   <img class="img_res" src="<?php echo get_template_directory_uri() ?>/image/Logo_3.png" alt="Design quality logo">
               </div>
               <div class="swiper-slide">
                   <img class="img_res" src="<?php echo get_template_directory_uri() ?>/image/Logo_4.png" alt="Hipster barbershop logo 2">
               </div>
               <div class="swiper-slide">
                   <img class="img_res" src="<?php echo get_template_directory_uri() ?>/image/Logo_5.png" alt="Hipster barbershop logo 3">
               </div>
               <div class="swiper-slide">
                   <img class="img_res" src="<?php echo get_template_directory_uri() ?>/image/Logo_6.png" alt="Design studio logo">
               </div>
           </div>
       </div>
   </div>
</section>

<section class="container-fluid" id="work">
   <div class="container work">
      <div class="row">
         <div class="col-12 text-center">
            <h4 class="kaushan_script">What we do</h4>
            <h2 class="h2_underline">some of our work</h2>
            <p class="margin_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
         </div>
      </div>
   </div>
   <div class="row work_list">
      <?php
         $args = array(
             'post_type'      => 'post_type_work',
             'post_status'    => 'publish',
         );
         $query = new WP_Query( $args );
         if ( $query->have_posts() ) {
             while ( $query->have_posts() ) {
                 $query->the_post(); ?>
               <div class="col-12 col-md-3 justify-content-center work_item">
                  <a class="d-block" href="<?php the_permalink() ?>">
                     <?php echo get_the_post_thumbnail() ?>
                     <div class="hover_info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><g><g><path fill="#fff" d="M30 24c0 .652-.419 1.201-1 1.408v1.683A1.496 1.496 0 1 1 27.092 29h-1.684c-.207.58-.756 1-1.408 1a1.495 1.495 0 0 1-1.408-1h-1.684c-.207.58-.756 1-1.408 1a1.495 1.495 0 0 1-1.408-1h-1.684c-.206.58-.756 1-1.408 1a1.495 1.495 0 0 1-1.408-1h-1.684c-.207.58-.756 1-1.408 1a1.495 1.495 0 0 1-1.408-1H7.408c-.206.58-.756 1-1.408 1a1.495 1.495 0 0 1-1.408-1H2.908A1.495 1.495 0 0 1 0 28.5c0-.652.419-1.202 1-1.409v-1.683c-.581-.207-1-.756-1-1.409 0-.652.419-1.201 1-1.407v-1.684C.419 20.7 0 20.15 0 19.5c0-.652.419-1.202 1-1.409v-1.683c-.581-.207-1-.756-1-1.408 0-.653.419-1.202 1-1.409v-1.684c-.581-.206-1-.755-1-1.407s.419-1.202 1-1.408V7.408C.419 7.2 0 6.652 0 5.999c0-.652.419-1.201 1-1.407V2.908A1.496 1.496 0 1 1 2.908.999h1.684C4.798.42 5.348 0 6 0c.652 0 1.202.42 1.408 1h1.684c.206-.58.756-1 1.408-1 .652 0 1.201.42 1.408 1h1.684c.206-.58.756-1 1.408-1 .652 0 1.202.42 1.408 1h1.684c.206-.58.756-1 1.408-1 .652 0 1.201.42 1.408 1h1.684c.206-.58.756-1 1.408-1 .652 0 1.201.42 1.408 1h1.684A1.495 1.495 0 0 1 30 1.5c0 .652-.419 1.202-1 1.409v1.684c.581.206 1 .755 1 1.407 0 .653-.419 1.202-1 1.409v1.684c.581.206 1 .756 1 1.408 0 .652-.419 1.201-1 1.407v1.684c.581.207 1 .756 1 1.409 0 .652-.419 1.201-1 1.408v1.683c.581.207 1 .757 1 1.409 0 .651-.419 1.201-1 1.408v1.684c.581.206 1 .755 1 1.407zM26 4H4v22h22zM13 20l7-8.5 4.5 7v6h-19l6-6zm-3-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></g></g></svg>
                        <h4><?php the_title() ?></h4>
                        <?php the_excerpt() ?>
                     </div>
                  </a>
               </div>
             <?php }
         }
         wp_reset_postdata();
      ?>
   </div>
</section>

<section class="container-fluide chat_swiper" id="quotes">
   <div class="container">
       <div class="Swiper mySwiper1">
           <div class="swiper-wrapper">
            <?php if( have_rows('quotes_with_picture_list') ): ?>
               <?php while( have_rows('quotes_with_picture_list') ) : the_row(); ?>
                  <div class="swiper-slide quotes_item">
                      <img src="<?php echo get_sub_field('quotes_with_picture_item') ?>" alt="<?php echo get_sub_field('quotes_with_picture_author_list') ?>">
                      <article>
                          <p><?php echo get_sub_field('quotes_with_picture_description_list') ?></p>
                          <h4 class="kaushan_script"><?php echo get_sub_field('quotes_with_picture_author_list') ?></h4>
                      </article>
                  </div>
               <?php endwhile; ?>
            <?php endif;?>
           </div>
           <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
       </div>
   </div>
</section>


<section class="container-fluid d-flex justify-content-center feedbacks" id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h4 class="kaushan_script"><?php the_field('review_semi_title') ?></h4>
               <h2 class="h2_underline"><?php the_field('review_title') ?></h2>
            </div>
            <div class="feedbacks_post_container col-12 row">
               <?php if( have_rows('reviews_list') ): ?>
                  <?php while( have_rows('reviews_list') ) : the_row(); ?>
                  <div class="feedbacks_post сol-12 col-md-6">
                    <img src="<?php echo get_sub_field('review_author_img') ?>" alt="<?php echo get_sub_field('reviews_author_list') ?>">
                    <div class="feedbacks_post_text">
                        <h3><?php echo get_sub_field('reviews_author_list') ?></h3>
                        <h5 class="h5_underline"><?php echo get_sub_field('review_employment_author_item') ?></h5>
                        <p><?php echo get_sub_field('review_description_author_item') ?></p>
                    </div>
                  </div>
                  <?php endwhile; ?>
               <?php endif;?>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid" id="blog">
   <div class="container blog">
      <div class="row">
         <div class="col-12 text-center">
            <h4 class="kaushan_script">Our stories</h4>
            <h2 class="h2_underline">Latest blog</h2>
         </div>
         <div class="col-12 blog_list row">
            <div class="swiper mySwiper_blog">
               <div class="swiper-wrapper">
                  <?php
                        $args = array(
                            'post_type'      => 'post_type_blog',
                            'post_status'    => 'publish',
                            'posts_per_page' => 3,
                        );
                     
                        $query = new WP_Query( $args );
                     
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>
                              <article class="swiper-slide blog_item">
                                 <a class="blog_image" href="<?php the_permalink() ?>">
                                    <?php echo get_the_post_thumbnail() ?>
                                    <time datetime="<?php the_time('j F Y в H:i'); ?>" class="blog_date">
                                       <?php the_time('j') ?>
                                       <p><?php the_time('M'); ?></p>
                                    </time>
                                 </a>
                                 <h4 class="blog_title">
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                 </h4>
                                 <?php the_excerpt() ?>
                                 <ul class="blog_views">
                                    <li>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12"><g><g><path fill="#95e1d3" d="M19.71 5.776l-.002.024-.001.013-.002.017-.003.02v.003a.753.753 0 0 1-.203.41c-.204.247-.427.479-.651.707-1.211 1.23-2.601 2.327-4.123 3.122-.973.509-2.012.919-3.09 1.116a8.967 8.967 0 0 1-3.55-.05c-2.04-.444-3.887-1.545-5.503-2.863-.75-.611-1.488-1.28-2.108-2.032-.272-.33-.272-.719 0-1.048.203-.247.426-.48.65-.708 1.212-1.23 2.602-2.326 4.124-3.122C6.22.877 7.258.466 8.337.27a8.978 8.978 0 0 1 3.55.05c2.04.444 3.887 1.546 5.503 2.863.75.611 1.488 1.28 2.108 2.033.108.11.18.255.203.409v.003c.002.006.003.014.003.02l.003.018v.012l.002.025.002.037-.001.037zM9.99 1.942a3.645 3.645 0 1 0 0 7.29 3.645 3.645 0 0 0 0-7.29zm0 5.467a1.822 1.822 0 1 1 0-3.644 1.822 1.822 0 0 1 0 3.644z"/></g></g></svg>
                                       <?php echo getPostViews(get_the_ID()); ?>
                                    </li>
                                    <li>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"><g><g><path fill="#95e1d3" d="M8.416 12.358c-.573 0-1.134-.165-1.676-.243-2.191 2.77-5.647 2.225-5.647 2.225 2.44-1.155 2.391-3.069 1.957-3.324C1.134 9.89-.018 8.176-.018 6.256c0-3.391 3.727-6.14 8.434-6.14 4.708 0 7.577 2.749 7.577 6.14 0 3.391-2.87 6.102-7.577 6.102zM4.242 4.875a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm3.75 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm3.75 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/></g></g></svg>
                                       <a href="<?php the_permalink() ?>#comments">
                                 	      <?php comments_number('0', '1', '%'); ?>
                                       </a>
                                    </li>
                                 </ul>
                              </article>
                            <?php }
                        }
                        wp_reset_postdata();
                  ?>
               </div>
               <div class="swiper-pagination"></div>
            </div>
         </div>
         <div class="col-12 text-right mt-5">
            <a class="link_page" href="<?php echo get_post_type_archive_link( 'post_type_blog' ) ?>">Blog...</a>
         </div>
      </div>
   </div>
</section>

<section class="map container-fluide">
   <a class="d-block" href="<?php the_field('link_on_map') ?>">
      <div class="container map_content">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="26" viewBox="0 0 20 26"><g><g><path fill="#f38181" d="M10 25.8S.4 15.101.4 9.8 4.698.2 10 .2s9.6 4.299 9.6 9.6c0 5.301-9.6 16-9.6 16zm0-22.4a6.4 6.4 0 1 0 0 12.8 6.4 6.4 0 0 0 0-12.8zm0 9.6a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4z"/></g></g></svg>
          <h2 class="h2_underline">Open map</h2>
      </div>
   </a>
</section>

<?php get_footer(); ?>