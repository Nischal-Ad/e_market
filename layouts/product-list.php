         <!-- Start Products Area -->
        <!-- <div class="products-area ptb-100"> -->
            <div class="container" style="margin-top: 20px">
                <!-- <div class="enry-grid-sorting row align-items-center"> -->
                    <!-- <div class="col-lg-6 col-md-6 result-count"> -->
                    <!-- </div> -->

                    <!-- sorting 
                    <div class="col-lg-6 col-md-6 ordering">
                        <div class="select-box">
                            <label>Sort By:</label>
                            <select>
                                <option>Default</option>
                                <option>Popularity</option>
                                <option>Latest</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select>
                        </div>
                    </div> -->
          

                <div class="row justify-content-center">

<!-- loop started  -->
<?
$current = get_query_var('page') ? get_query_var('page') : 1;

$args = array(  
        'post_type' => 'products',
         'nopaging' => false,
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'paged' => $current,
        // 'post_parent' => $menu_id,
        //    'post__not_in' => array( $post->ID ),
        //    'nopaging' => false,
        // 'orderby’ => 'title', 
        // 'order’ => 'ASC', 
    );

$loop = new WP_Query( $args ); 
    while ( $loop->have_posts() ) : $loop->the_post(); 
?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        <div class="single-products-box" style="border-radius: 3px; min-height: 420px; max-height: 420px;">
                            <div class="image">
                                <a href="<?php the_permalink();  ?>" class="d-block"><img style="width: 100%; padding:2px;" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image"></a>
                                <ul class="buttons-list">
                                    <li>
                                        <a href="http://localhost/e-market/cart/">
                                            <i class="ri-shopping-cart-2-line"></i>
                                            <span class="tooltip-label">Add to Cart</span>
                                        </a>
                                    </li>
            
                                    <li>
      <?
        //  $post = $post->ID;
    // $id = 66;
//   echo $id;
// global $post;
// $post = get_the_ID();
// echo $post;
// $a = 66;
// $post_id = get_the_ID();
// $post_id = $post->ID;
//    $post =  get_post($id); 

  ?>
                                        <a data-bs-toggle="modal" data-bs-target="#productsQuickView-<? echo $post_id = $post->ID;?>">
                                           <i class="ri-search-2-line"></i>
                                            <span class="tooltip-label">Quick View</span>
                                                
                                        </a> 
                                    </li>
                                </ul>
                                <!-- End QuickView Modal Area -->
                     <div class="modal fade productsQuickView" id="productsQuickView-<? echo $post_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="products-image">
                                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image" style="width: 100%;">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="products-content">
                                <h3><a href="<?php the_permalink();  ?>"><?php the_title();  ?></a></h3>
                                <div class="price text-danger">NRS <?php the_field('price');  ?></div>
                                <p><? the_excerpt(); ?></p>
                                <div class="products-add-to-cart">
                                    <button type="submit" class="default-btn">Add to Cart <i class="ri-arrow-right-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- Start QuickView Modal Area -->
                            </div>
                            <div class="content">
                                <p style="min-height: 50px; max-height: 50px;"><a href="<?php the_permalink();  ?>"> <?php echo wp_trim_words( get_the_title(), 7, NULL );  ?></a></p>
                      
                               <div class="products-review align-items-center">
                                <div class="rating">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                              
                            </div>

                                <div class="price">
                                    <span style="color: red" class="new-price">NRS <?php the_field('price');?></span>
                                </div>
                            </div>
                        </div>
                    </div>  

  
                 
             
             <?php
    

                     endwhile;
                //  wp_reset_postdata();
             
    ?>
    
                    </div>
                </div>

   
 
<?

// $post = get_post();
//   $id = $post->ID;
//   echo $id;
// $post = $loop;
//    $post =  get_post(66); 
//    echo $post;
//    $content = apply_filters( 'the_content', get_the_content(66) );
// $loop = new WP_Query( array( 'products' => 66 ) );
// $content = $post -> post_content;
// echo apply_filters('the_content',$content);
   ?>
     

<!-- pagination  -->

 <div class="col-lg-12 col-md-12 col-sm-6">
                        <div class="pagination-area text-center">
                            <!-- <span class="page-numbers current">	</span> -->
                            <!-- <a class="page-numbers"> -->
<?php
    $totalpage = $loop-> max_num_pages;
                echo paginate_links(array(
                    'total' => $totalpage,
                    'current' => $current,
                    'container_class' => 'page-numbers',
                    'show_all' => true,
                    'prev_next' => false,
                    // 'base' => '%_%',
                    // 'format' => '?current=%#%',
                    // 'add_fragment'       => '',
                    // 'before_page_number' => '',
                    // 'add_args'           => false,
                    // 'after_page_number'  => '',
        //                  'add_args' => '',
        //                   'prev_text' => __('&lt;'),
        // 'next_text' => __('&gt;'),
                    //   'format'  => '?current=%#%',
                    // 'before_page_number' => false,
                    // 'after_page_number' => false,
                    // 'type' => 'none',
                ))

    // next_posts_link('next page', $loop->max_num_pages);
?>
                            <a href="" class="page-numbers"></a>
                <!-- </a> -->
                         <!--    <a href="products.html" class="page-numbers">4</a>
                            <a href="products.html" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a> -->
                        </div>
                    </div>


<!-- pagination code  -->
    <?php
    // $totalpage = $loop-> max_num_pages;
    //             echo paginate_links(array(
    //                 'total' => $totalpage,
    //                 'current' => $current,
    //                 // 'type' => 'list',
    //                 'show_all' => true,
    //             ))

    // next_posts_link('next page', $loop->max_num_pages);
?>	

        <!-- End Products Area -->

      

               
                  






