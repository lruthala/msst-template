{"filter":false,"title":"survey-form-duplicate.2.php","tooltip":"/experiment/survey-form-duplicate.2.php","undoManager":{"mark":38,"position":38,"stack":[[{"start":{"row":456,"column":0},"end":{"row":493,"column":9},"action":"remove","lines":["       \t<script>","var clicks = 0;","$('.try').click(function() {","    ","    if (clicks == 0){","          $('#chat_window_1').animate({\"margin-right\": '-12'});","       $('.textual').html(\"<span class='fa fa-fw fa-times chati'></span>\");","  $(this).animate({","    width: \"40px\",","    backgroundColor: \"#333\"","  },300); ","   $(\".try\").css(\"background-color\", \"#333\");","   clicks++;","        ","    } else if(clicks == 1){","        $('#chat_window_1').animate({\"margin-right\": '-1600'});","        $('.textual').html('<span class=\"fa fa-commenting fa-1x\"></span><strong style=\"font-family:Lato, sans-serif !important;\">&nbsp;Ask MIRA!</strong><span class=\"badge badge-notify\">3</span>');","         $(this).animate({","    width: \"130px\",","    backgroundColor: \"#000000\"","  },300);","   $(\".try\").css(\"background-color\", \"#ef4048\");","  clicks--;","  ","    }","});","","$('.btnsub').click(function() {","        $(\"#chat-container\").hide('slow');","         $(\"#pannel-out\").show('slow');","         $(\"#pannel-chat\").show('slow');","    });","    ","function ra(){","    $(\"#notice\").hide('slow');","}","","</script>"],"id":2578}],[{"start":{"row":298,"column":0},"end":{"row":435,"column":10},"action":"remove","lines":["         <section class=\"chat-box\">","        <div class=\"container \">","            <div  class=\"row chat-window col-xs-5 col-md-3 rude\" id=\"chat_window_1\" style=\"margin-right:-1600px; margin-top:-75px;\" >","                <div class=\"col-xs-12 col-md-12\">","        \t        <div class=\"panel panel-default\">","                        <div class=\"panel-heading top-bar\">","                            <div class=\"col-md-12 col-xs-12\">","                                <img class=\"img-responsive chat-image\" src=\"Mira.svg\" alt=\"mira\" style=\"height:35px;margin-left:-16px;\"/>","                                   <center> <h3 class=\"panel-title\"><strong>Say Hi to Mira!</strong></h3></center>","                            </div>","                        </div>","                    <div class=\"panel-body msg_container_base\">","                         <div class=\"chat-container\" id=\"chat-container\">","                            <form class=\"form-horizontal\" role=\"form\"><br>","\t                           <div class=\"form-group\">","\t\t                           <div class=\"col-sm-12\">","\t                                  <input type=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Name\" >","\t\t                           </div>","\t                           </div>","\t                           <div class=\"form-group\">","\t\t                            <div class=\"col-sm-12\">","\t                                    <input type=\"text\" class=\"form-control\" placeholder=\"Email Id\">","\t\t                            </div>","\t                           </div>","\t                           <div class=\"form-group\">","\t\t                           <div class=\"col-sm-12\">","\t                                   <input type=\"text\" class=\"form-control\" placeholder=\"Designation\">","\t\t                           </div>","\t                           </div>","\t                           <div class=\"form-group\">","\t\t\t                       <div class=\"col-sm-12\">","\t                                   <input type=\"text\" class=\"form-control\" placeholder=\"Organisation\">","\t\t                           </div>","\t                           </div><br>","\t    \t                   <div class=\"form-group\">","\t                               <div class=\"col-sm-12\">","\t                                   <button onclick=\"ra(); return false;\" class=\"col-sm-12 btn btn-success btnsub\" id=\"play\">Submit</button>","\t                               </div>","\t                           </div>","\t                    </form>","                    </div>","                    <div class=\"pannel-out\" id=\"pannel-out\">","                        <style>","                            .pannel-out{display:none;}","                            .pannel-chat{display:none;}","                            .left-time{float:left;margin-left: 4em;width:75%!important;}","                            .left-time h5{font-size:9px!important;}","                            .time{width:75%!important;}","                            .time h5{font-size:9px!important;}","                            .chatbox{padding-bottom:0px!important;}","                        </style>","                        <div class=\"msg_container base_sent\">","                            <div class=\"\">","                                <div class=\"messages msg_sent\">","                                    <p>Hey Mira! how are you doing ? </p>","                                </div>","                            </div>","                            <div class=\"col-md-2 col-xs-2 avatar time\">","                              <h5> Yesterday! 6:23 PM</h5>","                            </div>","                        </div>","                        <div class=\"msg_container base_sent\">","                            <div class=\"\">","                                <div class=\"messages msg_sent\">","                                    <p>How can you help us ?  </p>","                                </div>","                            </div>","                            <div class=\"col-md-2 col-xs-2 avatar time\">","                              <h5>Yesterday! 6:23 PM</h5>","                            </div>","                        </div>","                        <div class=\"row msg_container base_receive\">","                            <div class=\"col-md-2 col-xs-2 avatar\">","                                <img src=\"Mira.svg\" class=\"img-responsive chat-image \" style=\"margin-left:-4px;\">","                            </div>","                            <div class=\"\">","                                <div class=\"messages msg_receive\">","                                    <p>Yeah I'm fine how about you.</p>","                                </div>","                            </div>","                            <div class=\"col-md-2 col-xs-2 avatar left-time\">","                                <h5 >Yesterday! 6:23 PM</h5>","                            </div>","                        </div>","                        <div class=\"row msg_container base_receive\">","                            <div class=\"col-md-2 col-xs-2 avatar\">","                                <img src=\"Mira.svg\" class=\"img-responsive chat-image\" style=\"margin-left:-4px;\">","                            </div>","                            <div class=\"msg\">","                                <div class=\"messages msg_receive\">","                                     <p>I'm Miracle's innovation research associate a bot that helps to explore our new technologies </p>","                                </div>","                            </div>","                            <div class=\"col-md-2 col-xs-2 avatar left-time\">","                              <h5>Today! 6:23 PM</h5>","                            </div>","                        </div>","                        <div class=\"msg_container base_sent\">","                            <div class=\"\">","                                <div class=\"messages msg_sent\">","                                    <p>Ohh! thats really interesting ! </p>","                                </div>","                            </div>","                             <div class=\"col-md-2 col-xs-2 avatar time\">","                                 <h5>Today! 6:23 PM</h5>","                            </div>","                        </div>","                        <div class=\"row msg_container base_receive\">","                             <div class=\"col-md-2 col-xs-2 avatar\">","                                <img src=\"Mira.svg\" class=\"img-responsive chat-image \" style=\"margin-left:-4px;\">","                            </div>","                            <div class=\"\">","                                <div class=\"messages msg_receive\">","                                    <p>Let me know how can I help you ?</p>","                                </div>","                            </div>","                             <div class=\"col-md-2 col-xs-2 avatar left-time\">","                                <h5>Just Now</h5>","                            </div>","                        </div>","                    </div>","                </div>","                <div class=\"panel-footer pannel-chat\" id=\"pannel-chat\">","                    <div class=\"input-group\">","                        <textarea class=\"write-message\"  id=\"cin\" cols=\"1\" rows=\"1\" placeholder=\"Chat with MIRA\"></textarea>","                            <span class=\"input-group-btn\">","                                <i class=\"icon send fa fa-paper-plane-o clickable \" style=\"margin-top: -4px;\" aria-hidden=\"true\"></i>","                            </span>","                    </div>","                </div>","    \t\t</div>","        </div>","    </div>","        <div onclick=\"viewSomething()\" class=\"try\">","          <span class=\"textual\"><span><i class=\"fa fa-commenting fa-1x\" aria-hidden=\"true\"></i></span><strong>  Ask MIRA! </strong>","        </div>","    </div>","</section>"],"id":2579}],[{"start":{"row":315,"column":97},"end":{"row":315,"column":100},"action":"insert","lines":["-->"],"id":2580},{"start":{"row":315,"column":0},"end":{"row":315,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":316,"column":96},"end":{"row":316,"column":99},"action":"insert","lines":["-->"]},{"start":{"row":316,"column":0},"end":{"row":316,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":317,"column":91},"end":{"row":317,"column":94},"action":"insert","lines":["-->"]},{"start":{"row":317,"column":0},"end":{"row":317,"column":4},"action":"insert","lines":["<!--"]},{"start":{"row":318,"column":88},"end":{"row":318,"column":91},"action":"insert","lines":["-->"]},{"start":{"row":318,"column":0},"end":{"row":318,"column":4},"action":"insert","lines":["<!--"]}],[{"start":{"row":8,"column":24},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":2581},{"start":{"row":9,"column":0},"end":{"row":9,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":65},"action":"insert","lines":["  <link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">"],"id":2582}],[{"start":{"row":12,"column":74},"end":{"row":12,"column":77},"action":"insert","lines":["-->"],"id":2586},{"start":{"row":12,"column":9},"end":{"row":12,"column":13},"action":"insert","lines":["<!--"]}],[{"start":{"row":13,"column":75},"end":{"row":13,"column":78},"action":"insert","lines":["-->"],"id":2587},{"start":{"row":13,"column":8},"end":{"row":13,"column":12},"action":"insert","lines":["<!--"]}],[{"start":{"row":14,"column":57},"end":{"row":14,"column":60},"action":"insert","lines":["-->"],"id":2588},{"start":{"row":14,"column":8},"end":{"row":14,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":15,"column":50},"end":{"row":15,"column":53},"action":"insert","lines":["-->"]},{"start":{"row":15,"column":8},"end":{"row":15,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":16,"column":81},"end":{"row":16,"column":84},"action":"insert","lines":["-->"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":17,"column":70},"end":{"row":17,"column":73},"action":"insert","lines":["-->"]},{"start":{"row":17,"column":8},"end":{"row":17,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":18,"column":99},"end":{"row":18,"column":102},"action":"insert","lines":["-->"]},{"start":{"row":18,"column":8},"end":{"row":18,"column":12},"action":"insert","lines":["<!--"]}],[{"start":{"row":19,"column":66},"end":{"row":19,"column":69},"action":"insert","lines":["-->"],"id":2589},{"start":{"row":19,"column":8},"end":{"row":19,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":20,"column":72},"end":{"row":20,"column":75},"action":"insert","lines":["-->"]},{"start":{"row":20,"column":8},"end":{"row":20,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":21,"column":65},"end":{"row":21,"column":68},"action":"insert","lines":["-->"]},{"start":{"row":21,"column":8},"end":{"row":21,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":22,"column":108},"end":{"row":22,"column":111},"action":"insert","lines":["-->"]},{"start":{"row":22,"column":8},"end":{"row":22,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":23,"column":63},"end":{"row":23,"column":66},"action":"insert","lines":["-->"]},{"start":{"row":23,"column":8},"end":{"row":23,"column":12},"action":"insert","lines":["<!--"]}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "],"id":2590},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "]},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "]},{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "]},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"insert","lines":["    "]},{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"insert","lines":["    "]},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"insert","lines":["    "]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"insert","lines":["    "]},{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "]},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "]},{"start":{"row":70,"column":0},"end":{"row":70,"column":4},"action":"insert","lines":["    "]},{"start":{"row":71,"column":0},"end":{"row":71,"column":4},"action":"insert","lines":["    "]},{"start":{"row":72,"column":0},"end":{"row":72,"column":4},"action":"insert","lines":["    "]},{"start":{"row":73,"column":0},"end":{"row":73,"column":4},"action":"insert","lines":["    "]},{"start":{"row":74,"column":0},"end":{"row":74,"column":4},"action":"insert","lines":["    "]},{"start":{"row":75,"column":0},"end":{"row":75,"column":4},"action":"insert","lines":["    "]},{"start":{"row":76,"column":0},"end":{"row":76,"column":4},"action":"insert","lines":["    "]},{"start":{"row":77,"column":0},"end":{"row":77,"column":4},"action":"insert","lines":["    "]},{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"insert","lines":["    "]},{"start":{"row":79,"column":0},"end":{"row":79,"column":4},"action":"insert","lines":["    "]},{"start":{"row":80,"column":0},"end":{"row":80,"column":4},"action":"insert","lines":["    "]},{"start":{"row":81,"column":0},"end":{"row":81,"column":4},"action":"insert","lines":["    "]},{"start":{"row":82,"column":0},"end":{"row":82,"column":4},"action":"insert","lines":["    "]},{"start":{"row":83,"column":0},"end":{"row":83,"column":4},"action":"insert","lines":["    "]},{"start":{"row":84,"column":0},"end":{"row":84,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "],"id":2591},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "]},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "]},{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "]},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"insert","lines":["    "]},{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"insert","lines":["    "]},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"insert","lines":["    "]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"insert","lines":["    "]},{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "]},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "]},{"start":{"row":70,"column":0},"end":{"row":70,"column":4},"action":"insert","lines":["    "]},{"start":{"row":71,"column":0},"end":{"row":71,"column":4},"action":"insert","lines":["    "]},{"start":{"row":72,"column":0},"end":{"row":72,"column":4},"action":"insert","lines":["    "]},{"start":{"row":73,"column":0},"end":{"row":73,"column":4},"action":"insert","lines":["    "]},{"start":{"row":74,"column":0},"end":{"row":74,"column":4},"action":"insert","lines":["    "]},{"start":{"row":75,"column":0},"end":{"row":75,"column":4},"action":"insert","lines":["    "]},{"start":{"row":76,"column":0},"end":{"row":76,"column":4},"action":"insert","lines":["    "]},{"start":{"row":77,"column":0},"end":{"row":77,"column":4},"action":"insert","lines":["    "]},{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"insert","lines":["    "]},{"start":{"row":79,"column":0},"end":{"row":79,"column":4},"action":"insert","lines":["    "]},{"start":{"row":80,"column":0},"end":{"row":80,"column":4},"action":"insert","lines":["    "]},{"start":{"row":81,"column":0},"end":{"row":81,"column":4},"action":"insert","lines":["    "]},{"start":{"row":82,"column":0},"end":{"row":82,"column":4},"action":"insert","lines":["    "]},{"start":{"row":83,"column":0},"end":{"row":83,"column":4},"action":"insert","lines":["    "]},{"start":{"row":84,"column":0},"end":{"row":84,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "],"id":2592},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "]},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "]},{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "]},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"insert","lines":["    "]},{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"insert","lines":["    "]},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"insert","lines":["    "]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"insert","lines":["    "]},{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "]},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "]},{"start":{"row":70,"column":0},"end":{"row":70,"column":4},"action":"insert","lines":["    "]},{"start":{"row":71,"column":0},"end":{"row":71,"column":4},"action":"insert","lines":["    "]},{"start":{"row":72,"column":0},"end":{"row":72,"column":4},"action":"insert","lines":["    "]},{"start":{"row":73,"column":0},"end":{"row":73,"column":4},"action":"insert","lines":["    "]},{"start":{"row":74,"column":0},"end":{"row":74,"column":4},"action":"insert","lines":["    "]},{"start":{"row":75,"column":0},"end":{"row":75,"column":4},"action":"insert","lines":["    "]},{"start":{"row":76,"column":0},"end":{"row":76,"column":4},"action":"insert","lines":["    "]},{"start":{"row":77,"column":0},"end":{"row":77,"column":4},"action":"insert","lines":["    "]},{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"insert","lines":["    "]},{"start":{"row":79,"column":0},"end":{"row":79,"column":4},"action":"insert","lines":["    "]},{"start":{"row":80,"column":0},"end":{"row":80,"column":4},"action":"insert","lines":["    "]},{"start":{"row":81,"column":0},"end":{"row":81,"column":4},"action":"insert","lines":["    "]},{"start":{"row":82,"column":0},"end":{"row":82,"column":4},"action":"insert","lines":["    "]},{"start":{"row":83,"column":0},"end":{"row":83,"column":4},"action":"insert","lines":["    "]},{"start":{"row":84,"column":0},"end":{"row":84,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"remove","lines":[" "],"id":2593}],[{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"remove","lines":[" "],"id":2594}],[{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"remove","lines":[" "],"id":2595}],[{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"remove","lines":[" "],"id":2596}],[{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"remove","lines":[" "],"id":2597}],[{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"remove","lines":[" "],"id":2598}],[{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"remove","lines":[" "],"id":2599}],[{"start":{"row":27,"column":10},"end":{"row":27,"column":11},"action":"remove","lines":[" "],"id":2600}],[{"start":{"row":27,"column":9},"end":{"row":27,"column":10},"action":"remove","lines":[" "],"id":2601}],[{"start":{"row":27,"column":8},"end":{"row":27,"column":9},"action":"remove","lines":[" "],"id":2602}],[{"start":{"row":85,"column":0},"end":{"row":85,"column":4},"action":"insert","lines":["    "],"id":2603}],[{"start":{"row":85,"column":4},"end":{"row":85,"column":8},"action":"insert","lines":["    "],"id":2604}],[{"start":{"row":299,"column":0},"end":{"row":299,"column":33},"action":"insert","lines":["<?php include '../headerm.php';?>"],"id":2605}],[{"start":{"row":299,"column":18},"end":{"row":299,"column":25},"action":"remove","lines":["headerm"],"id":2606}],[{"start":{"row":299,"column":18},"end":{"row":299,"column":19},"action":"insert","lines":["c"],"id":2607}],[{"start":{"row":299,"column":19},"end":{"row":299,"column":20},"action":"insert","lines":["h"],"id":2608}],[{"start":{"row":299,"column":20},"end":{"row":299,"column":21},"action":"insert","lines":["a"],"id":2609}],[{"start":{"row":299,"column":21},"end":{"row":299,"column":22},"action":"insert","lines":["t"],"id":2610}],[{"start":{"row":299,"column":22},"end":{"row":299,"column":23},"action":"insert","lines":["u"],"id":2611}],[{"start":{"row":299,"column":23},"end":{"row":299,"column":24},"action":"insert","lines":["i"],"id":2612}],[{"start":{"row":299,"column":24},"end":{"row":299,"column":25},"action":"insert","lines":["-"],"id":2613}],[{"start":{"row":299,"column":25},"end":{"row":299,"column":26},"action":"insert","lines":["6"],"id":2614}],[{"start":{"row":299,"column":26},"end":{"row":299,"column":27},"action":"insert","lines":["."],"id":2615}],[{"start":{"row":299,"column":27},"end":{"row":299,"column":28},"action":"insert","lines":["1"],"id":2616}],[{"start":{"row":299,"column":28},"end":{"row":299,"column":29},"action":"insert","lines":["0"],"id":2617}],[{"start":{"row":299,"column":18},"end":{"row":299,"column":45},"action":"insert","lines":["/experiment/chatui-6.10.php"],"id":2618}],[{"start":{"row":299,"column":0},"end":{"row":299,"column":64},"action":"remove","lines":["<?php include '..//experiment/chatui-6.10.phpchatui-6.10.php';?>"],"id":2622}]]},"ace":{"folds":[],"scrolltop":2318.5,"scrollleft":0,"selection":{"start":{"row":292,"column":29},"end":{"row":292,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":15,"state":"start","mode":"ace/mode/php"}},"timestamp":1516298214860,"hash":"0a6bddab170ac71c6477127a56e5be375fa1570e"}