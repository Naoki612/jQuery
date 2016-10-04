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
              url: 'http://160.16.198.26/quick.json', 
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
            



    //     .done(function(json){ 
    //         console.debug(json);
    //         var len = json.length; 
    //         for(var i=0; i < len; i++){ 
    //           $("#data").append(json[i].id + ' ' + json[i].text + '<br>'); 
    //         } 
    //       });
    // }

        // function hyou() { 
        //     $.getJSON("data.json", function(json){ 
        //         for (var i = 0; i < json.all.length; i ++) { 
        //             var seito = json.all[i]; 
        //             $("#data") 
        //             .append(seito.id + " : " + seito.text) 
        //             .append("<br>"); 
        //         } 
        //     }); 
        // } 

        // jQuery.ajax({ 
        //   type: 'get', 
        //   url: 'http://localhost:3000/', 
        //   dataType: 'json', 
        //   success: function(json) { 
        //     for (var i = 0; i < json.all.length; i ++) { 
        //         var seito = json.all[i]; 
        //         $("#data") 
        //         .append(seito.id + " : " + seito.text) 
        //         .append("<br>"); 
        //     } 
        //  } 
        // }); 

        </script> 
    </head> 
    <body> 
        <input type="button" onClick="hyou()" value="表の表示"> 
        <input type="button" onClick="hyou2()" value="表の表示"> 
        <div id="data"></div> 
    </body> 
</html>