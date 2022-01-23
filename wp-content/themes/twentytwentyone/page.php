<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="c-slide">
    <?php 
$slide1 = get_field('slide1');
$slide2 = get_field('slide2');
$introduction = get_field('introduction');
$service1 = get_field('service1');
$service2 = get_field('service2');
$service3 = get_field('service3');
// var_dump($service3);
$service4 = get_field('service4');

    ?>
    <ul class="c-slide__list">

        <?php if( $slide1 ): ?>
        <li class="c-slide__item" style="background-image: url(<?php echo esc_url( $slide1['image1']['url'] ); ?>)">
            <h2 class="c-slide__ttl"><?php echo $slide1['title1']; ?></h2>
            <p class="c-slide__txt"> <?php echo $slide1['caption1']; ?></p>
        </li>

        <?php endif; ?>
        <?php if( $slide2 ): ?>
        <li class="c-slide__item" style="background-image: url(<?php echo esc_url( $slide2['image2']['url'] ); ?>)">
            <h2 class="c-slide__ttl"><?php echo $slide2['title2']; ?></h2>
            <p class="c-slide__txt"> <?php echo $slide2['caption2']; ?></p>
        </li>

        <?php endif; ?>

    </ul>
</div>
<section class="p-main">
    <div class="l-container">
        <div class="p-main__lead">
            <?php if( $introduction ): ?>
            <h3 class="p-main__ttl"><?php echo $introduction['title']; ?></h3>
            <p class="p=main__txt"><?php echo $introduction['description']; ?></p>
            <?php endif; ?>
        </div>
        <ul class="c-list">
            <?php if( $service1 ): ?>
            <li class="c-list__item">
                <a href="<?php echo $service1['link']; ?>" class="c-list__link">
                    <span class="c-list__icon"><img src="<?php echo esc_url( $service1['icon'] ); ?>" alt=""></span>
                    <h4 class="c-list__ttl"><?php echo $service1['title']; ?></h4>
                    <p class="c-list__cnt"><?php echo $service1['caption']; ?></p>
                    <span class="c-list__btn"><?php echo $service1['link_text']; ?></span>
                </a>
            </li>
            <?php endif; ?>
            <?php if( $service2 ): ?>
            <li class="c-list__item">
                <a href="<?php echo $service2['link']; ?>" class="c-list__link">
                    <span class="c-list__icon"><img src="<?php echo esc_url( $service2['icon'] ); ?>" alt=""></span>
                    <h4 class="c-list__ttl"><?php echo $service2['title']; ?></h4>
                    <p class="c-list__cnt"><?php echo $service2['caption']; ?></p>
                    <span class="c-list__btn"><?php echo $service2['link_text']; ?></span>
                </a>
            </li>
            <?php endif; ?>
            <?php if( $service3 ): ?>
            <li class="c-list__item">
                <a href="<?php echo $service3['link']; ?>" class="c-list__link">
                    <span class="c-list__icon"><img src="<?php echo esc_url( $service3['icon'] ); ?>" alt=""></span>
                    <h4 class="c-list__ttl"><?php echo $service3['title']; ?></h4>
                    <p class="c-list__cnt"><?php echo $service3['caption']; ?></p>
                    <span class="c-list__btn"><?php echo $service3['link_text']; ?></span>
                </a>
            </li>
            <?php endif; ?>
            <?php if( $service4 ): ?>
            <li class="c-list__item">
                <a href="<?php echo $service4['link']; ?>" class="c-list__link">
                    <span class="c-list__icon"><img src="<?php echo esc_url( $service4['icon'] ); ?>" alt=""></span>
                    <h4 class="c-list__ttl"><?php echo $service4['title']; ?></h4>
                    <p class="c-list__cnt"><?php echo $service4['caption']; ?></p>
                    <span class="c-list__btn"><?php echo $service4['link_text']; ?></span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</section>
<script>
$('.c-slide__list').slick({
    dots: true,
    infinite: true,
    speed: 300,
    dots: false,
    slidesToShow: 1,
    adaptiveHeight: true,
    prevArrow: "<button type='button' class='c-btn1 c-btn1--prev'></button>",
    nextArrow: "<button type='button' class='c-btn1 c-btn1--next'></i></button>"
});
</script>
<?php
get_footer();
?>