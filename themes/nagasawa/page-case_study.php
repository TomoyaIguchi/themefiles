<?php
/*
Template Name: 導入事例2
*/
?>
<?php get_header(); ?>

<div id="container">
    <div class="pageTit">
        <h2 class="pageTit__tit"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/case_study/tit.png" height="46" width="94" alt="導入事例 CASE STUDY"></h2>
    </div>

    <ul class="mainArea">
       
        <?php
        $custom_fields = get_field('index_keylex_open' );
        if(empty( $custom_fields ) === false){ ?>
        <li class="item">
            <div class="imgBlock imgBlock01">
                <a href="<?php echo home_url(); ?>/case_study/keylex/" style="cursor:pointer" class="link">
                    <div class="imgBlockChild">
                        <div class="imgBlock__textWrap">
                            <p class="imgBlock__text">
                                <?php echo the_field('index_keylex');?>
                            </p>
                            <span class="imgBlock__textBottom">導入事例トップページへ</span>
                        </div>
                    </div>
                </a>
            </div>
        </li><?php } ?> 
        
        <?php
        $custom_fields = get_field('index_handle_open' );
        if(empty( $custom_fields ) === false){ ?>
        <li class="item">
            <div class="imgBlock imgBlock02">
                <a href="<?php echo home_url(); ?>/case_study/handle/" class="link">
                    <div class="imgBlockChild">
                        <div class="imgBlock__textWrap">
                            <p class="imgBlock__text">
                                <?php echo the_field('index_handle');?>
                            </p>
                            <span class="imgBlock__textBottom">導入事例トップページへ</span>
                        </div>
                    </div>
                </a>
            </div>
        </li><?php } ?> 
        
        
        <?php
        $custom_fields = get_field('index_kodai_open' );
        if(empty( $custom_fields ) === false){ ?>
        <li class="item">
            <div class="imgBlock imgBlock03">
                <a href="<?php echo home_url(); ?>/case_study/kodai/" class="link">
                    <div class="imgBlockChild">
                        <div class="imgBlock__textWrap">
                            <p class="imgBlock__text">
                                <?php echo the_field('index_kodai');?>
                            </p>
                            <span class="imgBlock__textBottom">導入事例トップページへ</span>
                        </div>
                    </div>
                </a>
            </div><?php } ?> 

        </li>
    </ul>

</div><!-- /#container -->

<?php get_footer(); ?>
