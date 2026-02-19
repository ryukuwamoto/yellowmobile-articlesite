<?php get_header(); ?>

<main>
        <section class="sec_top_A">
            <div class="wrap header-post-slider">
                <div class="slider-container">
	                <ul class="slider">
                        <?php $slider_query = new WP_Query( array( 
                              'posts_per_page' => 5,
                              'tag__not_in' => array(123),
                              'post_type'      => 'post'
                              ) );
                              if ( $slider_query->have_posts() ) : 
                              while ( $slider_query->have_posts() ) : $slider_query->the_post(); 
                        ?>
	                    <li>
                            <div class="post-card">
                                <div class="card-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                        <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/no-image.png" alt="no image">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <div class="tag">
                                        <?php $categories = get_the_category();
                                                  if (!empty($categories)) :
                                                      $cat = $categories[0];
                                                      $slug = $cat->slug;
                                                      $name = $cat->name;
                                                      $parent_id = $cat->parent;
                                                      $parent_slug = '';
                                                  if ($parent_id) {
                                                      $parent_cat = get_category($parent_id);
                                                      $parent_slug = $parent_cat->slug;
                                                  }
                                                  if ($parent_slug === 'destination' || $slug === 'destination') {
                                                      $base_url = home_url('/destination/');
                                                  } elseif ($parent_slug === 'sim-card' || $slug === 'sim-card') {
                                                      $base_url = home_url('/simcard/');
                                                  } elseif ($parent_slug === 'esim' || $slug === 'esim') {
                                                      $base_url = home_url('/esim/');
                                                  } elseif ($parent_slug === 'smartphone' || $slug === 'smartphone') {
                                                      $base_url = home_url('/device/');
                                                  } else {
                                                      $base_url = esc_url(get_category_link($cat->term_id));
                                                  }
                                                  if ($parent_id && ($parent_slug !== '')) {
                                                      echo '<a href="' . $base_url . '#' . $slug . '">' . $name . '</a>';
                                                  } else {
                                                    echo '<a href="' . $base_url . '">' . $name . '</a>';
                                                  }
                                                  endif;
                                        ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>">
                                        <h3 class="card-title"><?php the_title(); ?></h3>
                                    </a>
                                    <p class="card-date">
                                        <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                                    </p>
                                </div>
                            </div>
                        </li>
	                    <?php endwhile; wp_reset_postdata(); endif; ?>
	                </ul>
                </div>
            </div>
        </section>
        <section class="sec_top_B">
            <div class="wrap pressrelease">
               <h2 class="pressrelease-title">
                <strong>プレスリリース</strong>
               </h2> 
               <ul class="pressrelease-list">
                <li class="pressrelease-item">
                    <a href="#" class="pre-click" target="_blank">
                        <div class="pre-image">
                            <img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/pb_Campaign_2025.png" alt="プレスリリースサムネイル1">
                        </div>
                        <div class="pre-date"> <p><time datetime="2025-10-01">2025年10月1日</time></p> </div>
                        <div class="pre-articletitle">
                            <p>【7/1スタート】アメリカ留学応援SIM！H2O Wireless / サクッとSIM US「留学割」で事務手数料50％OFF</p>
                        </div>
                    </a>
                </li>
                <li class="pressrelease-item">
                    <a href="#" class="pre-click" target="_blank">
                        <div class="pre-image">
                            <img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/pb_Campaign_2025.png" alt="プレスリリースサムネイル1">
                        </div>
                        <div class="pre-date"> <p><time datetime="2025-10-01">2025年10月1日</time></p> </div>
                        <div class="pre-articletitle">
                            <p>【7/1スタート】アメリカ留学応援SIM！H2O Wireless / サクッとSIM US「留学割」で事務手数料50％OFF</p>
                        </div>
                    </a>
                </li>
                <li class="pressrelease-item">
                    <a href="#" class="pre-click" target="_blank">
                        <div class="pre-image">
                            <img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/pb_Campaign_2025.png" alt="プレスリリースサムネイル1">
                        </div>
                        <div class="pre-date"> <p><time datetime="2025-10-01">2025年10月1日</time></p> </div>
                        <div class="pre-articletitle">
                            <p>【7/1スタート】アメリカ留学応援SIM！H2O Wireless / サクッとSIM US「留学割」で事務手数料50％OFF</p>
                        </div>
                    </a>
                </li>
                </ul>
            </div>
        </section>
        <section class="sec_top_C">
            <div class="wrap article-tabs sec_C-wrap">
                <ul class="category-list2">
                    <li class="item"><button class="button" id="a_btn">新着記事</button></li>
                    <li class="item"><button class="button" id="b_btn">おすすめ記事</button></li>
                    <li class="item"><button class="button" id="c_btn">おすすめ動画</button></li>
                </ul>
                <div class="screen">
                    <div class="a_screen container">
                            <ul class="list"> 
                                <?php $new_posts_args = array(
                                        'post_type'      => 'post',
                                        'posts_per_page' => 8,
                                        'tag__not_in' => array(123),
                                        'orderby'        => 'date',
                                        'order'          => 'DESC'
                                        );
                                        $new_posts_query = new WP_Query($new_posts_args);
                                        if ($new_posts_query->have_posts()) : 
                                        while ($new_posts_query->have_posts()) : $new_posts_query->the_post(); 
                                ?>
                                <li>
                                    <div class="article-thumb-wrap">
                                    <div class="card-image2">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('class' => 'thumbnail')); ?>
                                            <?php else : ?>
                                            <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>/image/no-image.png" alt="no image">
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="card-content2">
                                        <div class="tag">
                                            <?php $categories = get_the_category();
                                                  if (!empty($categories)) :
                                                      $cat = $categories[0];
                                                      $slug = $cat->slug;
                                                      $name = $cat->name;
                                                      $parent_id = $cat->parent;
                                                      $parent_slug = '';
                                                  if ($parent_id) {
                                                      $parent_cat = get_category($parent_id);
                                                      $parent_slug = $parent_cat->slug;
                                                  }
                                                  if ($parent_slug === 'destination' || $slug === 'destination') {
                                                      $base_url = home_url('/destination/');
                                                  } elseif ($parent_slug === 'sim-card' || $slug === 'sim-card') {
                                                      $base_url = home_url('/simcard/');
                                                  } elseif ($parent_slug === 'esim' || $slug === 'esim') {
                                                      $base_url = home_url('/esim/');
                                                  } elseif ($parent_slug === 'smartphone' || $slug === 'smartphone') {
                                                      $base_url = home_url('/device/');
                                                  } else {
                                                      $base_url = esc_url(get_category_link($cat->term_id));
                                                  }
                                                  if ($parent_id && ($parent_slug !== '')) {
                                                      echo '<a href="' . $base_url . '#' . $slug . '">' . $name . '</a>';
                                                  } else {
                                                    echo '<a href="' . $base_url . '">' . $name . '</a>';
                                                  }
                                                  endif;
                                            ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>">
                                            <h3 class="card-title"><?php the_title(); ?></h3>
                                        </a>
                                        <p class="card-date">
                                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                                        </p>
                                    </div>
                                </li>
                                <?php endwhile; 
                                      wp_reset_postdata();
                                      else : 
                                ?>
                                <p>新着記事はまだありません。</p>
                                <?php endif; ?>
                            </ul>
                            <div class="more">
                                <button>もっと見る</button>
                            </div>
                    </div>
                    <div class="b_screen">
                        <ul class="list">
                            <?php if (function_exists('wpp_get_mostpopular')) {
                                  wpp_get_mostpopular(array(
                                  'limit'     => 8,
                                  'range'     => 'all',
                                  'post_type' => 'post',
                                  'wpp_start' => '',
                                  'wpp_end'   => '',
                                  'thumbnail_width'  => 300, 
                                  'thumbnail_height' => 200,
                                  'post_html' => '
                                <li>
                                    <div class="card-image2-1">
                                    <div class="card-image2">
                                        <a href="{url}">{thumb}</a>
                                    </div>
                                    </div>
                                    <div class="card-content2">
                                        <div class="tag">{category}</div>
                                        <a href="{url}">
                                            <h3 class="card-title">{text_title}</h3>
                                        </a>
                                        <p class="card-date">
                                            <time>{date}</time>
                                        </p>
                                    </div>
                                </li>'
                                ));
                                } else {
                                echo '<p>人気記事を表示するにはプラグインが必要です。</p>';
                                }
                            ?>
                            </ul>
                            <div class="more">
                                <button>もっと見る</button>
                            </div>
                    </div>
                    <div class="c_screen">
                        <ul class="list">
                            <?php $video_posts_args = array(
                                        'post_type'      => 'post',
                                        'posts_per_page' => 8,
                                        'tag'            => 'movie',
                                        'orderby'        => 'date',
                                        'order'          => 'DESC'
                                        );
                                        $video_posts_query = new WP_Query($video_posts_args);
                                        if ($video_posts_query->have_posts()) : 
                                        while ($video_posts_query->have_posts()) : $video_posts_query->the_post(); 
                            ?>
                                <li>
                                    <div class="card-image2-1">
                                    <div class="card-image2">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('class' => 'thumbnail')); ?>
                                            <?php else : ?>
                                            <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>/image/no-image.png" alt="no image">
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="card-content2">
                                        <div class="tag">
                                            <?php $categories = get_the_category();
                                                  if (!empty($categories)) :
                                                  $cat = $categories[0];
                                                  $slug = $cat->slug;
                                                  $name = $cat->name;
                                                  $parent_id = $cat->parent;
                                                  $parent_slug = '';
                                                  if ($parent_id) {
                                                  $parent_cat = get_category($parent_id);
                                                  $parent_slug = $parent_cat->slug;
                                                  }
                                                  if ($parent_slug === 'destination' || $slug === 'destination') {
                                                  $base_url = home_url('/destination/');
                                                  } elseif ($parent_slug === 'sim-card' || $slug === 'sim-card') {
                                                  $base_url = home_url('/simcard/');
                                                  } elseif ($parent_slug === 'esim' || $slug === 'esim') {
                                                  $base_url = home_url('/esim/');
                                                  } elseif ($parent_slug === 'smartphone' || $slug === 'smartphone') {
                                                  $base_url = home_url('/device/');
                                                  } else {
                                                  $base_url = esc_url(get_category_link($cat->term_id));
                                                  }
                                                  if ($parent_id && ($parent_slug !== '')) {
                                                  echo '<a href="' . $base_url . '#' . $slug . '">' . $name . '</a>';
                                                  } else {
                                                  echo '<a href="' . $base_url . '">' . $name . '</a>';
                                                  }
                                                  endif;
                                            ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>">
                                            <h3 class="card-title"><?php the_title(); ?></h3>
                                        </a>
                                        <p class="card-date">
                                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                                        </p>
                                    </div>
                                </li>
                                <?php endwhile; 
                                      wp_reset_postdata();
                                      else : 
                                ?>
                                    <p>動画タグの記事はまだありません。</p>
                                <?php endif; ?>
                            </ul>
                            <div class="more">
                                <button>もっと見る</button>
                            </div>
                    </div>
                </div>
           </div> 
        </section>
    </main>

    <?php get_footer(); ?>