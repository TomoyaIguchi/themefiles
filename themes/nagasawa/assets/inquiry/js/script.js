// ===================================================================
// ファイルアップロード　カスタマイズ
// ===================================================================
$(function(){

  var $file = $("#file"),
      $input = $(".table__tr_productImg .mainArea__input_text");

  // click
  $(".file__mask").click(function(){
    $file.trigger('click');
  });
  // change
  $file.change(function(){
    $input.val($file.val());
  });

});

// ===================================================================
// form error
// ===================================================================

$(function(){

    var $send = $('.btnArea__inquiry-wrap').find('img'),
        $tr = $('.table__tr'),
        $td = $('.mainArea__input_text'),
        $name_company = $tr.filter(':nth-child(1)').find('.error'),
        $name = $tr.filter(':nth-child(2)').find('.error'),
        $name_frigana = $tr.filter(':nth-child(3)').find('.error'),
        $name_team = $tr.filter(':nth-child(4)').find('.error'),
        $tel = $tr.filter(':nth-child(9)').find('.error'),
        $mail = $tr.filter(':nth-child(11)').find('.error'),

        name_company,
        name,
        name_frigana,
        name_team,
        tel,
        mail,

        isInput01,isInput02,isInput03,isInput04,isInput05,isInput06,
        isFrigana,
        isMail,
        isTel;

    function setStyle() {

        $('.error').addClass('is-none');

    }

    function getVal() {

        name_company = $tr.filter(':nth-child(1)').find('input').val();
        name = $tr.filter(':nth-child(2)').find('input').val();
        name_frigana = $tr.filter(':nth-child(3)').find('input').val();
        name_team = $tr.filter(':nth-child(4)').find('input').val();
        tel = $tr.filter(':nth-child(9)').find('input').val();
        mail = $tr.filter(':nth-child(11)').find('input').val();

    }

    function validate() {

        getVal();
        inputCheck();

        isFrigana = furiganaCheck();
        isMail = mailCheck();
        isTel = telCheck();

        show_error();

    }

    function inputCheck() {

        if (name_company == '') isInput01 = true
        else isInput01 = false;
        if (name == '') isInput02 = true
        else isInput02 = false;
        if (name_frigana == '') isInput03 = true
        else isInput03 = false;
        if (name_team == '') isInput04 = true
        else isInput04 = false;
        if (tel == '') isInput05 = true
        else isInput05 = false;
        if (mail == '') isInput06 = true
        else isInput06 = false;

    }
    function furiganaCheck() {
       if( name_frigana.match( /^[ァ-ン]+$/ ) ) return true;
       else return false;
    }
    function mailCheck() {
       if( mail.match( /^([a-zA-Z0-9])+([a-zA-Z0-9¥._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9¥._-]+)+$/ ) ) return true;
       else return false;
    }
    function telCheck() {
       if( tel.match( /^[0-9]+$/ ) ) return true;
       else return false;

    }

    function show_error() {

        if (isInput01) $name_company.removeClass('is-none');
        if (isInput02) $name.removeClass('is-none');
        if (isInput03 || !isFrigana) $name_frigana.removeClass('is-none');
        if (isInput04) $name_team.removeClass('is-none');
        if (isInput05 || !isTel) $tel.removeClass('is-none');
        if (isInput06 || !isMail) $mail.removeClass('is-none');

    }

    function hide_error() {

        $(this).next().addClass('is-none');        

    }

    function setEvents() {

      // ready
      setStyle();

      // click
      $send.on('click',validate);

      // forcus
      $td.on('focus',hide_error);

    }

    setEvents();

})
