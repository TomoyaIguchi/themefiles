<?php get_header(); ?>

<div id="container">

  <div class="pageTit">
    <h2 class="pageTit__tit" style="font-size: 20px;font-weight: bold;">お探しのページが見つかりません</h2>
  </div>

  <div class="mainArea">
    
    <p class="para mb20 ac">
        大変申し訳ありませんが、該当ページがございません。<br>
        トップページへ自動的にジャンプします。
    </p>

    <p class="para mb20 ac">
        ※自動的にジャンプしない場合は、<a href="/">こちら</a>をクリックして下さい。
    </p>

    <p class="para mb20 ac">
        このページをブックマーク登録されていた方は、<br>
        お手数ですがブックマークの変更をお願いいたします。
    </p>    

  </div><!-- /.mainArea -->
  
</div><!-- /#container -->

<script>

(function(){


    setTimeout(function(){

        location.href = '/';

    },3000);


})();
    
</script>

<?php get_footer(); ?>