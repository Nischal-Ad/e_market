     <!-- Start Products Details Area -->
        <div class="products-details-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="products-details-image">
                            <a href="<?php the_post_thumbnail_url('thumbnail'); ?>" class="popup-image">
                                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image" style="width: 100%;">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="products-details-desc">
                            <h3><?php the_title();  ?></h3>
                            <div class="products-review d-flex align-items-center">
                                <div class="rating">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                 </div>
                                <!-- <a href="#" class="rating-count">(3 reviews)</a> -->
                            </div> 
                                                        <div class="price text-danger">
                               NRS <?php the_field('price');  ?>
                            </div>
                            <p><? the_excerpt(); ?></p>
                            <div class="products-meta">
                                <span>In Stock: <span class="sku"><?php the_field('stock');  ?></span></span>
                                <span>Availability: <span class="in-stock"><? 
                                if( get_field('stock') >=1 ){
                                    echo 'In Stock';
                                }
                                    else {
                                        echo 'Out Of Stock';
                                    }
                                
                                 ?></span></span>
                             
                                <span>Categories: <a href="#"><? echo get_the_category_list( ', ' ); ?></a></span>
                            </div>
                            <!-- <div class="products-add-to-cart">
                                <div class="quantities">
                                    <span class="sub-title">Qty:</span>
                                    <div class="input-counter">
                                        <span class="minus-btn"><i class="ri-subtract-line"></i></span>
                                        <input type="text" value="1">
                                        <span class="plus-btn"><i class="ri-add-line"></i></span>
                                    </div>
                                </div> -->
                                <button type="submit" class="default-btn">Add to Cart <i class="ri-arrow-right-line"></i></button>
                            </div>
                            <!-- <ul class="social-share">
                                <li><span>Share:</span></li>
                                <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                <li><a href="#" target="_blank"><i class="ri-instagram-line"></i></a></li>
                            </ul> -->
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="products-details-tabs">
                            <div class="single-tabs-box">
                                <h2><span>Description</span></h2>
                                <div class="inner-box">
                                    <h3>Overview</h3>
                                    <p><? the_content(); ?></p>
                                </div>
                            </div>

                            <div class="single-tabs-box">
                                <h2><span>Additional Information</span></h2>
                                <div class="inner-box">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Material</td>
                                                    <td><?php the_field('material');  ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Brand</td>
                                                    <td><?php the_field('brand');  ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Model_No</td>
                                                    <td><?php the_field('model_no');  ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="single-tabs-box">
                                <h2><span>Reviews</span></h2>
                                <div class="inner-box">
                                    <div class="products-review-comments">
                                        <div class="user-review">
                                            <img src="assets/img/user/user1.jpg" alt="image">
                                            <div class="review-rating">
                                                <div class="review-stars">
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                </div>
                                            </div>
                                            <span class="d-block sub-comment">James Anderson</span>
                                            <p>Very well built theme, couldn't be happier with it. Can't wait for future updates to see what else they add in.</p>
                                        </div>
                                        <div class="user-review">
                                            <img src="assets/img/user/user2.jpg" alt="image">
                                            <div class="review-rating">
                                                <div class="review-stars">
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </div>
                                            </div>
                                            <span class="d-block sub-comment">Sarah Taylor</span>
                                            <p>Was really easy to implement and they quickly answer my additional questions!</p>
                                        </div>
                                        <div class="user-review">
                                            <img src="assets/img/user/user3.jpg" alt="image">
                                            <div class="review-rating">
                                                <div class="review-stars">
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                </div>
                                            </div>
                                            <span class="d-block sub-comment">David Warner</span>
                                            <p>Stunning design, very dedicated crew who welcome new ideas suggested by customers, nice support.</p>
                                        </div>
                                        <div class="user-review">
                                            <img src="assets/img/user/user4.jpg" alt="image">
                                            <div class="review-rating">
                                                <div class="review-stars">
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill checked"></i>
                                                    <i class="ri-star-fill"></i>
                                                </div>
                                            </div>
                                            <span class="d-block sub-comment">King Kong</span>
                                            <p>Stunning design, very dedicated crew who welcome new ideas suggested by customers, nice support.</p>
                                        </div>
                                    </div>
                                    <div class="review-form-wrapper">
                                        <h3>Add a review</h3>
                                        <p class="comment-notes">Your email address will not be published. Required fields are marked <span>*</span></p>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                                                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                                                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                                                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Name *">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email *">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <textarea placeholder="Your review" class="form-control" cols="30" rows="6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <p class="comment-form-cookies-consent">
                                                        <input type="checkbox" id="test1">
                                                        <label for="test1">Save my name, email, and website in this browser for the next time I comment.</label>
                                                    </p>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <button type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Products Details Area -->

        <!-- Start Related Products Area -->
        <div class="products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
                   <div class="row justify-content-center">
                <?
$args = array(  
        'post_type' => 'products',
         'nopaging' => false,
        'post_status' => 'publish',
        'posts_per_page' => 3, 
        'post__not_in' => array( $post->ID ),
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
             
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="single-products-box" style="border-radius: 3px; min-height: 420px; max-height: 420px;">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="<?php the_permalink();  ?>" class="d-block"><img style="width: 100%; padding:2px;" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image"></a>
                                <ul class="buttons-list">
                                    <li>
                                        <a href="cart.html">
                                            <i class="ri-shopping-cart-2-line"></i>
                                            <span class="tooltip-label">Add to Cart</span>
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView-<? echo $post_id = $post->ID;?>">
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
  <!-- end QuickView Modal Area -->

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

                   

                    
                </div>

                             <?php
    

                     endwhile;
                //  wp_reset_postdata();
             
    ?>
    </div>?
        
        <!-- End Related Products Area -->