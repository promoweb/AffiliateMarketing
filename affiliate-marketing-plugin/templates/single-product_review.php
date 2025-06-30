<?php
/**
 * The template for displaying single Product Review posts.
 *
 * @package    Affiliate_Marketing_Plugin
 * @subpackage Affiliate_Marketing_Plugin/templates
 * @author     Your Name <email@example.com>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class( 'product-review' ); ?>>
            <header class="entry-header">
                <div class="product-header">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="product-image">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <div class="product-review-content">
                    <?php the_content(); ?>
                </div>

                <?php
                // Custom fields for product specs, rating, etc. can be displayed here.
                $rating = get_post_meta( get_the_ID(), '_product_rating', true );
                if ( $rating ) : ?>
                    <div class="product-rating">
                        <h3><?php _e( 'Rating', 'affiliate-marketing-plugin' ); ?></h3>
                        <div class="rating-value"><?php echo esc_html( $rating ); ?>/5</div>
                    </div>
                <?php endif; ?>

                <?php
                $pros = get_post_meta( get_the_ID(), '_product_pros', true );
                $cons = get_post_meta( get_the_ID(), '_product_cons', true );
                if ( $pros || $cons ) : ?>
                    <div class="product-pros-cons">
                        <h3><?php _e( 'Pros & Cons', 'affiliate-marketing-plugin' ); ?></h3>
                        <?php if ( $pros ) : ?>
                            <div class="pros">
                                <h4><?php _e( 'Pros', 'affiliate-marketing-plugin' ); ?></h4>
                                <?php echo wpautop( esc_html( $pros ) ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( $cons ) : ?>
                            <div class="cons">
                                <h4><?php _e( 'Cons', 'affiliate-marketing-plugin' ); ?></h4>
                                <?php echo wpautop( esc_html( $cons ) ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="product-affiliate-links">
                    <h3><?php _e( 'Related Products', 'affiliate-marketing-plugin' ); ?></h3>
                    <?php
                    // Placeholder for affiliate products list.
                    // This will be populated dynamically based on API integration or manual input.
                    $affiliate_products = get_post_meta( get_the_ID(), '_affiliate_products', true );
                    if ( $affiliate_products && is_array( $affiliate_products ) ) :
                        echo '<div class="affiliate-products-grid">';
                        foreach ( $affiliate_products as $product ) :
                            ?>
                            <div class="affiliate-product">
                                <?php if ( ! empty( $product['image'] ) ) : ?>
                                    <div class="product-image">
                                        <img src="<?php echo esc_url( $product['image'] ); ?>" alt="<?php echo esc_attr( $product['title'] ); ?>" />
                                    </div>
                                <?php endif; ?>
                                <h4 class="product-title"><?php echo esc_html( $product['title'] ); ?></h4>
                                <?php if ( ! empty( $product['price'] ) ) : ?>
                                    <div class="product-price"><?php echo esc_html( $product['price'] ); ?></div>
                                <?php endif; ?>
                                <?php if ( ! empty( $product['link'] ) ) : ?>
                                    <a href="<?php echo esc_url( $product['link'] ); ?>" class="product-link" target="_blank" rel="noopener noreferrer"><?php _e( 'Buy Now', 'affiliate-marketing-plugin' ); ?></a>
                                <?php endif; ?>
                            </div>
                            <?php
                        endforeach;
                        echo '</div>';
                    else :
                        echo '<p>' . __( 'No related products available at the moment.', 'affiliate-marketing-plugin' ) . '</p>';
                    endif;
                    ?>
                </div><!-- .product-affiliate-links -->
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php
                // Display comments if enabled.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </footer><!-- .entry-footer -->
        </article><!-- #post-<?php the_ID(); ?> -->

        <?php
        // End the loop.
        endwhile;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
