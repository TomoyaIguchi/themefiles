  <nav>
    <div class="header__nav">
      <ul class="header__nav_block">
<?php if (is_page('products') && (is_parent_slug() == 'products')): ?>
        <li class="item cp"><a href="<?php echo home_url(); ?>/products/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hNavProductCurrent_on.png" width="158" alt="製品一覧"></a></li>
<?php else: ?>
        <li class="item cp"><a href="<?php echo home_url(); ?>/products/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hNavProduct_off.png" width="158" alt="製品一覧"></a></li>
<?php endif; ?>
<?php if (is_page('support') && (is_parent_slug() == 'support')): ?>
        <li class="item cp"><a href="<?php echo home_url(); ?>/support/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hNavSupportCurrent_on.png" width="158" alt="サポート"></a></li>
<?php else: ?>
        <li class="item cp"><a href="<?php echo home_url(); ?>/support/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hNavSupport_off.png" width="158" alt="サポート"></a></li>
<?php endif; ?>
        <li class="item cp"><a href="<?php echo home_url(); ?>/case_study/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hNavCase_off.png" width="158" alt="導入事例"></a></li>
        <li class="item cp"><a href="<?php echo home_url(); ?>/company/info/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hNavCompany_off.png" width="158" alt="会社概要"></a></li>
        <li class="item cp"><a href="<?php echo home_url(); ?>/recruit/new_graduates/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hNavRecruit_off.png" width="158" alt="採用情報"></a></li>
        <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hNavToCompany_off.png" width="159" alt="法人の皆様へ"></li>
      </ul>
      <div class="header__nav_block_bar"></div>
    </div>
    <div class="header__subNav">
      <div class="header__subNav_wrap">
      <ul class="header__subNav_block product">
        <li class="item cp"><a href="<?php echo home_url(); ?>/products/keylex/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavKeylex_off.png" height="39" width="92" alt="キーレックス"></a></li>
        <li class="item cp"><a href="<?php echo home_url(); ?>/products/handle/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavHundle_off.png" height="39" width="120" alt="レバーハンドル"></a></li>
        <li class="item cp"><a href="<?php echo home_url(); ?>/products/kodai/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavAncient_off.png" height="39" width="120" alt="古代・古代NEO"></a></li>
      </ul>
      <ul class="header__subNav_block support">
        <li class="item cp"><a href="<?php echo home_url(); ?>/support/faq/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavQa_off.png" height="39" width="108" alt="よくあるご質問"></a></li>
        <li class="item cp"><a href="<?php echo home_url(); ?>/support/trouble/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavTro_off.png" height="39" width="108" alt="困ったときは"></a></li>
        <li class="item cp"><a href="<?php echo home_url(); ?>/support/info/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavStop_off.png" height="39" width="147" alt="廃番品・取替商品情報"></a></li>
      </ul>
<!--導入事例一覧-->
      <ul class="header__subNav_block casestudy">
          <?php $page = get_page_by_path ( 'case_study' );
          $fields = get_post_custom($page->ID); ?>
          <?php $custom_fields = ($fields["index_keylex_open"][0]);
          if(( $custom_fields ) ){ ?>
          <li class="item cp"><a href="<?php echo home_url(); ?>/case_study/keylex/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavKeylex_off.png" height="39" width="92" alt="キーレックス"></a></li><?php } ?> 
         
          <?php $custom_fields = ($fields["index_handle_open"][0]);
          if(( $custom_fields ) ){ ?>
          <li class="item cp"><a href="<?php echo home_url(); ?>/case_study/handle/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavHundle_off.png" height="39" width="120" alt="レバーハンドル"></a></li><?php } ?> 
          
          <?php $custom_fields = ($fields["index_kodai_open"][0]);
          if(( $custom_fields ) ){ ?>
          <li class="item cp"><a href="<?php echo home_url(); ?>/case_study/kodai/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavAncient_off.png" height="39" width="120" alt="古代・古代NEO"></a></li><?php } ?>
      </ul>
      
      <ul class="header__subNav_block company">
        <li class="item cp"><a href="<?php echo home_url(); ?>/company/info/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavCompany_off.png" height="39" width="69" alt="会社情報"></a></li>
        <li class="item cp"><a href="<?php echo home_url(); ?>/company/business/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavBusiness_off.png" height="39" width="84" alt="事業内容"></a></li>
        <li class="item cp"><a href="<?php echo home_url(); ?>/company/csr/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavCsr_off.png" height="39" width="97" alt="社会貢献"></a></li>
      </ul>
      <ul class="header__subNav_block recruit">
        <li class="item cp"><a href="<?php echo home_url(); ?>/recruit/new_graduates/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavNew_off.png" height="39" width="102" alt="新卒採用情報"></a></li>
        <li class="item cp"><a href="<?php echo home_url(); ?>/recruit/mid_career/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavMid_off.png" height="39" width="121" alt="中途採用情報"></a></li>
        <li class="item cp"><a href="<?php echo home_url(); ?>/recruit/parttime/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/img/common/hSubNavPart_off.png" height="39" width="113" alt="パート採用情報"></a></li>
      </ul>
      </div>
    </div>
   <!-- <ul></ul> -->
  </nav>