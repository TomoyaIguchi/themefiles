<?php
/*
Template Name:導入事例紹介
*/
?>
<?php get_header(); ?>

<div id="container">
   



    <?php
    // 現在表示しているページの投稿IDから投稿情報を取得
    $page = get_post( get_the_ID() );
    // 投稿のスラッグを取得
    $slug = $page->post_name;
    ?>
    <?php if (have_posts()): while (have_posts()): the_post();?>
    <?php 
    $bgPattern = get_field('case_background');
    $bgPattern_url = $bgPattern['url'];
    ?>

<!--ページタイトル画像-->
    <div class="pageTit">
        <h2 class="pageTit__tit"><?php      $main = get_field('case_study_img');
            $main_img = $main["url"];?>
            <img src="<?php echo $main_img ?>">
            </h2>
    </div>
    
    <!--導入事例紹介文-->
    <div class="mainArea">
        <p class="para"><?php echo the_field('case_study_explain');?></p>

        <!--カテゴリの始まり-->
        <?php   if(have_rows('case')): ?><!--1-->
        <?php   while(have_rows('case')): the_row(); ?> <!--2-->
        <div class="caseStudy">
            <!--カテゴリの背景↑-->
            <?php      $image = get_sub_field('case_main_img');
            $url = $image['url']; ?>
            <div class="caseStudy__mainImg" style="background:url(<?php echo $bgPattern_url; ?>)"><img src="<?php echo $url; ?>" ></div>
            <!--メイン画像 ↑-->
            <div class="caseStudy__textWrap">

                <?php       $product = get_sub_field('case_product'); ?>
                <?php           if(have_rows('case_product')): ?> <!--3-->
                <?php           while(have_rows('case_product')): the_row(); ?> <!--4--> 
                <?php               $num = get_sub_field('case_product_number'); ?>
                <h3 class="caseStudy__tit"><?php echo $num;?></h3>
                <!--製品番号↑-->
                <?php               $explain = get_sub_field('case_product_explain'); ?>
                <p class="caseStudy__text"><?php echo $explain;?></p>
            <!--製品説明↑-->
                <?php               if(have_rows('case_product_images')): ?>
                <?php                   $length = 0 ?>
                <?php                   while(have_rows('case_product_images')){
                                            the_row();
                                            $length++;
                                        }
                ?>
                <?php if($length > 5) { ?>
                <div class="caseStudy__imgList slider">
                    <div class="slider__inner">
                <?php } else { ?>
                <div class="caseStudy__imgList">
                <?php } ?>
                    <ul class="caseStudy__imgList_wrap">
                        <?php               while(have_rows('case_product_images')): the_row(); ?> <!--6-->
                        <?php                    $imgs = get_sub_field('case_product_img');
                        $img = $imgs['url']; ?>
                        <li class="item"><img src="<?php echo $imgs['sizes']['case_thumb']; ?>" data-big="<?php echo $imgs['url']; ?>" alt="" height="174" width="174"><span class="over"></span></li>
                        <!--画像集↑-->
                        <?php                    endwhile; ?> <!--/6-->
                    </ul>
                    <?php                        endif; ?> <!--/5-->
                </div>
                 <?php if($length > 5) : ?>
                <div class="btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/news/news_detail/arrow-left.png" height="35" width="35" alt="" class="left op">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/news/news_detail/arrow-right.png" height="35" width="35" alt="" class="right op">
                 <?php if($length > 5) { ?>
                    </div>
                 </div>
                 <?php } else { ?>
                 </div>
                 <?php } ?>
                 
                 <?php endif; ?>
                <?php           endwhile; ?> <!--/4-->
                <?php       endif; ?>   <!--/3-->
                </div></div>
        <?php   endwhile; ?>  <!--/2-->
        <?php endif; ?>  <!--/1-->

        <div class="modalBg is-none">  
            <div class="modalBox">
                <div class="imgWrap">
                    <img src="" alt="" class="modalImg">
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/close.png" height="24" width="24" alt="" class="close">
            </div>
            <!--
<div class="spinner__wrap is-none">
<img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/top/loading.gif" width="40px" height="auto">
</div>
-->
        </div>        
</div>


    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

</div><!-- /#container -->

<?php get_footer(); ?>
