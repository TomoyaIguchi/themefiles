//--------------------------------------------------
//
//  namespace
//
//--------------------------------------------------
/**
 * @namespace browserCheck
 */

// ===================================================================
// デバイス判定
// ===================================================================

var device = (function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
        return 'sp';
    }else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
        return 'tab';
    }else{
        return 'other';
    }
})();

// ===================================================================
// OS判定
// ===================================================================

var os = (function(){
  var os,pf;
  var pf = navigator.platform;
  
  function _judge() {
    if (pf.indexOf('Win') != -1) {
      os = 'win';
    }
    else if (pf.match(/Mac|PPC/)) {
      os = 'mac';
    }
    else if (pf.match(/Linux/)) {
      os = 'Linux';
    }
    else if (pf.match(/^.*\s([A-Za-z]+BSD)/)) {
      os = RegExp.$1;
    }
    else if (pf.match(/SunOS/)) {
      os = 'Solaris';
    }
    else {
      os = 'N/A';
    }
  }
    
  // 初期化を実行する
  _judge();
  
  // 公開APIを返す
  return os;
}());

// ===================================================================
// ブラウザ・バージョン判定
// ===================================================================

var browser = (function(){
  var userAgent  = window.navigator.userAgent.toLowerCase(),
      appVersion = window.navigator.appVersion.toLowerCase(),
      browser    = 'unknown',
      _ie = false,
      _ios        = '',
      _ios_ver    = '';
  
  function _judge() {

    if (userAgent.indexOf('msie') != -1) {
        _ie = true;
      browser = 'ie';
      if (appVersion.indexOf('msie 6.') != -1) {
        browser = 'ie6';
      } else if (appVersion.indexOf('msie 7.') != -1) {
        browser = 'ie7';
      } else if (appVersion.indexOf('msie 8.') != -1) {
        browser = 'ie8';
      } else if (appVersion.indexOf('msie 9.') != -1) {
        browser = 'ie9';
      } else if (appVersion.indexOf('msie 10.') != -1) {
        browser = 'ie10';
      }
    } else if (userAgent.indexOf('chrome') != -1) {
      browser = 'chrome';
    } else if (userAgent.indexOf('iphone') != -1) {
      browser = 'iphone';
      var _ios = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
      // _ios_ver = [parseInt(ios[1], 10), parseInt(ios[2], 10), parseInt(ios[3] || 0, 10)];
    } else if (userAgent.indexOf('ipad') != -1) {
      browser = 'ipad';
    } else if (userAgent.indexOf('ipod') != -1) {
      browser = 'ipod';
    } else if (userAgent.indexOf('safari') != -1) {
      browser = 'safari';
    } else if (userAgent.indexOf('gecko') != -1) {
      browser = 'firefox';
    } else if (userAgent.indexOf('opera') != -1) {
      browser = 'opera';
    } else if (userAgent.indexOf('android') != -1) {
      browser = 'android';
    } else if (userAgent.indexOf('mobile') != -1) {
      browser = 'mobile';
    };


    if(userAgent.match(/msie/) || userAgent.match(/trident/)){
        if (userAgent.match(/(msie\s|rv:)([\d\.]+)/)[2] == 11.0) browser = 'ie11';
        _ie = true;
    }    

  }
    
  // 初期化を実行する
  _judge();
  
  // 公開APIを返す
  return {
    ie: _ie,
    type: browser,
    ios: _ios,
    ios_ver: _ios_ver
  }

}());

// ===================================================================
//sp版safari判定
// ===================================================================

// var ua = window.navigator.userAgent;
// var browser;

// if ( ua.indexOf( "Intel Mac" ) !== -1 ) {
//     browser = "Chrome-PC";
// } else if ( ua.indexOf( "CriOS" ) !== -1 ) {
//     browser = "Chrome";
// } else if ( ua.indexOf( "Lunascape" ) !== -1 ) {
//     browser = "Lunascape";
// } else if ( ua.indexOf( "Mercury" ) !== -1 ) {
//     browser = "Mercury";
// } else if ( ua.indexOf( "Version" ) !== -1 && ua.indexOf( "Safari" ) !== -1 ) {
//     browser = "Safari";
//     if ( ! ua.match( /iPhone|iPod|iPad/ ) ) {
//         browser += "-PC";
//     } else if ( window.navigator.platform.indexOf( "Simulator" ) !== -1 ) {
//     browser += "-Simulator";
//     }
// } else {
//     browser = "Other";
// }

// var engine;
// if ( "undefined" !== typeof window.execScript ) {
//     engine = "Trident";
// } else if ( "undefined" !== typeof window.Components ) {
//     engine = "Gecko";
// } else if ( "undefined" !== typeof window.defaultstatus ) {
//     engine = "Webkit";
// } else if ( "undefined" !== typeof window.opera ) {
//     engine = "Presto";
// }


// var device = 'SP';
// if ( typeof window.navigator.standalone === "undefined" ) {
//     device = "PC";
// }

// var iosSafariCheck = false;
// if(device == 'SP' && browser == 'Safari' && engine == 'Webkit') iosSafariCheck = true;