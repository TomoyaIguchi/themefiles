$(function(){

    var addressList = [
        '埼玉県比企郡嵐山町花見台11-3',
        '東京都板橋区成増1-31-10',
        '東大阪市西堤本通東1-1-1'
    ]
    var $objectList = [
        $('#map01').get(0),
        $('#map02').get(0),
        $('#map03').get(0)
    ]

    // Blockを表現するコンストラクタ
    var googleMap = function(address,　$object) {

      this.target = $object;

      this.map;
      this.geo;
      this.address = address;

      this.self = this;

      this._init();
    };

    // メソッド追加
    googleMap.prototype = {

      _init: function(e) {

        var self = this;

        // Google Mapで利用する初期設定用の変数
        var latlng = new google.maps.LatLng(36, 138);
        var opts = {
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          center: latlng,
          scrollwheel: false,
          draggable: false,
        };

        this.map = new google.maps.Map(this.target, opts);
        this.geo = new google.maps.Geocoder();

        var req = {
          address: this.address
        };

        this.geo.geocode(req, function(result, status){

            // setGoogleMap

            if (status != google.maps.GeocoderStatus.OK) {
              alert(status);
              return;
            }
            var latlng = result[0].geometry.location;

            self.map.setCenter(latlng);

            //マーカーを設定する
            var markerOption = {
                position: latlng,
                map: self.map,
                draggable: false
            };
            var marker = new google.maps.Marker(markerOption);


        });

      }

    }


    new googleMap(addressList[0],$objectList[0]);
    new googleMap(addressList[1],$objectList[1]);
    new googleMap(addressList[2],$objectList[2]);
    


});