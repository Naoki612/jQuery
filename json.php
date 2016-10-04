<html>
    <head>
        <script
            src="http://code.jquery.com/jquery-1.x-git.js"
            type="text/javascript"
        ></script>

        <script type="text/javascript">
        function hyou() {
            $.ajax({
              type: 'GET',
              url: 'http://URLURL.json',
              dataType: 'jsonp',
              crossDomain: true, //これを書かないとエラーに引っかかる
              xhrFields: { withCredentials:false }, //Access-Control-Allow-Origin: * にしているホストに
              jsonpCallback: 'hoge',
                                      //対して withCredentials は指定できないため、falseに。でも明示的に宣言しないとエラー。
            }).done(function(json){
                    console.debug(json);
                    var len = json.length;
                    for(var i=0; i < len; i++){
                      $("#data").append(json[i].id + ' ' + json[i].text + '<br>');
                    }
                  });
            }
        </script>
    </head>
    <body>
        <input type="button" onClick="hyou()" value="表の表示">
        <div id="data"></div>
    </body>
</html>
