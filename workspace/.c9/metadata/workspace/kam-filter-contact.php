{"filter":false,"title":"kam-filter-contact.php","tooltip":"/kam-filter-contact.php","undoManager":{"mark":85,"position":85,"stack":[[{"start":{"row":31,"column":8},"end":{"row":34,"column":103},"action":"remove","lines":["<link href=\"images/ico/apple-touch-icon-144-precomposed.png\" rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\">","        <link href=\"images/ico/apple-touch-icon-114-precomposed.png\" rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\">","        <link href=\"images/ico/apple-touch-icon-72-precomposed.png\" rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\">","        <link href=\"images/ico/apple-touch-icon-57-precomposed.png\" rel=\"apple-touch-icon-precomposed\">"],"id":118}],[{"start":{"row":31,"column":8},"end":{"row":38,"column":85},"action":"insert","lines":["<!-- Latest compiled and minified CSS -->","<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\">","","<!-- Optional theme -->","<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css\">","","<!-- Latest compiled and minified JavaScript -->","<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>"],"id":119}],[{"start":{"row":38,"column":85},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":120}],[{"start":{"row":39,"column":0},"end":{"row":39,"column":39},"action":"insert","lines":["http://code.jquery.com/jquery-1.11.1.js"],"id":121}],[{"start":{"row":39,"column":0},"end":{"row":39,"column":1},"action":"insert","lines":["<"],"id":122}],[{"start":{"row":39,"column":1},"end":{"row":39,"column":2},"action":"insert","lines":["s"],"id":123}],[{"start":{"row":39,"column":2},"end":{"row":39,"column":3},"action":"insert","lines":["c"],"id":124}],[{"start":{"row":39,"column":3},"end":{"row":39,"column":4},"action":"insert","lines":["r"],"id":125}],[{"start":{"row":39,"column":4},"end":{"row":39,"column":5},"action":"insert","lines":["i"],"id":126}],[{"start":{"row":39,"column":5},"end":{"row":39,"column":6},"action":"insert","lines":["p"],"id":127}],[{"start":{"row":39,"column":6},"end":{"row":39,"column":7},"action":"insert","lines":["t"],"id":128}],[{"start":{"row":39,"column":7},"end":{"row":39,"column":8},"action":"insert","lines":[" "],"id":129}],[{"start":{"row":39,"column":8},"end":{"row":39,"column":9},"action":"insert","lines":["s"],"id":130}],[{"start":{"row":39,"column":9},"end":{"row":39,"column":10},"action":"insert","lines":["r"],"id":131}],[{"start":{"row":39,"column":10},"end":{"row":39,"column":11},"action":"insert","lines":["c"],"id":132}],[{"start":{"row":39,"column":11},"end":{"row":39,"column":12},"action":"insert","lines":["="],"id":133}],[{"start":{"row":39,"column":12},"end":{"row":39,"column":13},"action":"insert","lines":["\""],"id":134}],[{"start":{"row":39,"column":52},"end":{"row":39,"column":53},"action":"insert","lines":["\""],"id":135}],[{"start":{"row":39,"column":53},"end":{"row":39,"column":63},"action":"insert","lines":["></script>"],"id":136}],[{"start":{"row":39,"column":63},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":137}],[{"start":{"row":40,"column":0},"end":{"row":41,"column":44},"action":"insert","lines":["http://code.jquery.com/jquery-1.11.1.min.js","http://code.jquery.com/jquery-1.11.1.min.map"],"id":138}],[{"start":{"row":40,"column":0},"end":{"row":41,"column":44},"action":"remove","lines":["http://code.jquery.com/jquery-1.11.1.min.js","http://code.jquery.com/jquery-1.11.1.min.map"],"id":286}],[{"start":{"row":136,"column":17},"end":{"row":137,"column":0},"action":"insert","lines":["",""],"id":288},{"start":{"row":137,"column":0},"end":{"row":137,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":137,"column":8},"end":{"row":170,"column":12},"action":"insert","lines":["<script> "," ","(function ($) {","  jQuery.expr[':'].Contains = function(a,i,m){","      return (a.textContent || a.innerText || \"\").toUpperCase().indexOf(m[3].toUpperCase())>=0;","  };","  ","  function listFilter(header, list) {","    var form = $(\"<form>\").attr({\"class\":\"filterform\",\"action\":\"#\"}),","        input = $(\"<input>\").attr({\"class\":\"filterinput\",\"type\":\"text\"});","    $(form).append(input).appendTo(header);"," ","    $(input)","      .change( function () {","        var filter = $(this).val();","        if(filter) {","          $(list).find(\".movieTitle:not(:Contains(\" + filter + \"))\").parent().slideUp();","          $(list).find(\".movieTitle:Contains(\" + filter + \")\").parent().slideDown();","        } else {","          $(list).find(\".entry\").slideDown();","        }","        return false;","      })","    .keyup( function () {","        $(this).change();","    });","  }"," ","  $(function () {","    listFilter($(\"#header\"), $(\"#list\"));","  });","}(jQuery));"," ","  </script> "],"id":289}],[{"start":{"row":73,"column":41},"end":{"row":73,"column":42},"action":"insert","lines":[" "],"id":290}],[{"start":{"row":73,"column":42},"end":{"row":73,"column":43},"action":"insert","lines":["i"],"id":291}],[{"start":{"row":73,"column":43},"end":{"row":73,"column":44},"action":"insert","lines":["d"],"id":292}],[{"start":{"row":73,"column":44},"end":{"row":73,"column":45},"action":"insert","lines":["="],"id":293}],[{"start":{"row":73,"column":45},"end":{"row":73,"column":47},"action":"insert","lines":["\"\""],"id":294}],[{"start":{"row":73,"column":46},"end":{"row":73,"column":47},"action":"insert","lines":["l"],"id":295}],[{"start":{"row":73,"column":47},"end":{"row":73,"column":48},"action":"insert","lines":["i"],"id":296}],[{"start":{"row":73,"column":48},"end":{"row":73,"column":49},"action":"insert","lines":["s"],"id":297}],[{"start":{"row":73,"column":49},"end":{"row":73,"column":50},"action":"insert","lines":["t"],"id":298}],[{"start":{"row":69,"column":17},"end":{"row":69,"column":18},"action":"insert","lines":[" "],"id":299}],[{"start":{"row":69,"column":18},"end":{"row":69,"column":19},"action":"insert","lines":["i"],"id":300}],[{"start":{"row":69,"column":19},"end":{"row":69,"column":20},"action":"insert","lines":["d"],"id":301}],[{"start":{"row":69,"column":20},"end":{"row":69,"column":21},"action":"insert","lines":["="],"id":302}],[{"start":{"row":69,"column":21},"end":{"row":69,"column":23},"action":"insert","lines":["\"\""],"id":303}],[{"start":{"row":69,"column":22},"end":{"row":69,"column":23},"action":"insert","lines":["h"],"id":304}],[{"start":{"row":69,"column":23},"end":{"row":69,"column":24},"action":"insert","lines":["e"],"id":305}],[{"start":{"row":69,"column":24},"end":{"row":69,"column":25},"action":"insert","lines":["a"],"id":306}],[{"start":{"row":69,"column":25},"end":{"row":69,"column":26},"action":"insert","lines":["d"],"id":307}],[{"start":{"row":69,"column":26},"end":{"row":69,"column":27},"action":"insert","lines":["e"],"id":308}],[{"start":{"row":69,"column":27},"end":{"row":69,"column":28},"action":"insert","lines":["r"],"id":309}],[{"start":{"row":80,"column":23},"end":{"row":80,"column":24},"action":"insert","lines":["c"],"id":310}],[{"start":{"row":80,"column":24},"end":{"row":80,"column":25},"action":"insert","lines":[" "],"id":311}],[{"start":{"row":80,"column":24},"end":{"row":80,"column":25},"action":"remove","lines":[" "],"id":312}],[{"start":{"row":80,"column":23},"end":{"row":80,"column":24},"action":"remove","lines":["c"],"id":313}],[{"start":{"row":80,"column":23},"end":{"row":80,"column":24},"action":"insert","lines":[" "],"id":314}],[{"start":{"row":80,"column":24},"end":{"row":80,"column":25},"action":"insert","lines":["c"],"id":315}],[{"start":{"row":80,"column":25},"end":{"row":80,"column":26},"action":"insert","lines":["l"],"id":316}],[{"start":{"row":80,"column":26},"end":{"row":80,"column":27},"action":"insert","lines":["a"],"id":317}],[{"start":{"row":80,"column":27},"end":{"row":80,"column":28},"action":"insert","lines":["s"],"id":318}],[{"start":{"row":80,"column":28},"end":{"row":80,"column":29},"action":"insert","lines":["s"],"id":319}],[{"start":{"row":80,"column":29},"end":{"row":80,"column":30},"action":"insert","lines":["="],"id":320}],[{"start":{"row":80,"column":30},"end":{"row":80,"column":32},"action":"insert","lines":["\"\""],"id":321}],[{"start":{"row":80,"column":31},"end":{"row":80,"column":32},"action":"insert","lines":["m"],"id":322}],[{"start":{"row":80,"column":32},"end":{"row":80,"column":33},"action":"insert","lines":["o"],"id":323}],[{"start":{"row":80,"column":33},"end":{"row":80,"column":34},"action":"insert","lines":["v"],"id":324}],[{"start":{"row":80,"column":34},"end":{"row":80,"column":35},"action":"insert","lines":["i"],"id":325}],[{"start":{"row":80,"column":35},"end":{"row":80,"column":36},"action":"insert","lines":["e"],"id":326}],[{"start":{"row":80,"column":31},"end":{"row":80,"column":36},"action":"remove","lines":["movie"],"id":327},{"start":{"row":80,"column":31},"end":{"row":80,"column":41},"action":"insert","lines":["movieTitle"]}],[{"start":{"row":92,"column":23},"end":{"row":92,"column":24},"action":"insert","lines":[" "],"id":328}],[{"start":{"row":92,"column":24},"end":{"row":92,"column":42},"action":"insert","lines":["class=\"movieTitle\""],"id":329}],[{"start":{"row":104,"column":23},"end":{"row":104,"column":24},"action":"insert","lines":[" "],"id":330}],[{"start":{"row":104,"column":24},"end":{"row":104,"column":42},"action":"insert","lines":["class=\"movieTitle\""],"id":331}],[{"start":{"row":116,"column":23},"end":{"row":116,"column":24},"action":"insert","lines":[" "],"id":332}],[{"start":{"row":116,"column":24},"end":{"row":116,"column":42},"action":"insert","lines":["class=\"movieTitle\""],"id":333}],[{"start":{"row":67,"column":8},"end":{"row":125,"column":18},"action":"remove","lines":["<section class=\"container\" id=\"error\">","         <div class=\"row container\">","             \t<h2 id=\"header\">Filtered List</h2>","        <div class=\"col-lg-12\">","            <input type=\"search\" class=\"form-control\" id=\"input-search\" placeholder=\"Search Attendees...\" >","        </div>","        <div class=\"searchable-container\" id=\"list\">","            <div class=\"items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix\">","               <div class=\"info-block block-info clearfix\">","                    <div class=\"square-box pull-left\">","                        <span class=\"glyphicon glyphicon-user glyphicon-lg\"></span>","                    </div>","                    <h5>Company Name</h5>","                    <h4 class=\"movieTitle\">Name: Tyreese Burn</h4>","                    <p>Title: Manager</p>","                    <span>Phone: 555-555-5555</span>","                    <span>Email: sample@company.com</span>","                </div>","            </div>","            <div class=\"items col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix\">","               <div class=\"info-block block-info clearfix\">","                    <div class=\"square-box pull-left\">","                        <span class=\"glyphicon glyphicon-user glyphicon-lg\"></span>","                    </div>","                    <h5>Company Name</h5>","                    <h4 class=\"movieTitle\">Name: Brenda Tree</h4>","                    <p>Title: Manager</p>","                    <span>Phone: 555-555-5555</span>","                    <span>Email: sample@company.com</span>","                </div>","            </div>","            <div class=\"items col-xs-12 col-sm-12 col-md-6 col-lg-6\">","               <div class=\"info-block block-info clearfix\">","                    <div class=\"square-box pull-left\">","                        <span class=\"glyphicon glyphicon-user glyphicon-lg\"></span>","                    </div>","                    <h5>Company Name</h5>","                    <h4 class=\"movieTitle\">Name: Glenn Pho shizzle</h4>","                    <p>Title: Manager</p>","                    <span>Phone: 555-555-5555</span>","                    <span>Email: sample@company.com</span>","                </div>","            </div>","            <div class=\"items col-xs-12 col-sm-12 col-md-6 col-lg-6\">","               <div class=\"info-block block-info clearfix\">","                    <div class=\"square-box pull-left\">","                        <span class=\"glyphicon glyphicon-user glyphicon-lg\"></span>","                    </div>","                    <h5>Company Name</h5>","                    <h4 class=\"movieTitle\">Name: Brian Hoyies</h4>","                    <p>Title: Manager</p>","                    <span>Phone: 555-555-5555</span>","                    <span>Email: sample@company.com</span>","                </div>","            </div>","        </div>","\t</div>","       ","        </section>"],"id":334},{"start":{"row":67,"column":8},"end":{"row":131,"column":18},"action":"insert","lines":["<section class=\"container\" id=\"error\">","         <div class=\"row container\">","             \t<h2 id=\"header\">Filtered List</h2>","        ","        <div class=\"searchable-container\" id=\"list\">","            <div class=\"items col-xs-6 col-sm-6 col-md-6 col-lg-6 clearfix\">","               <div class=\"info-block block-info row\">","                    <div class=\"square-box pull-left col-xs-6 col-sm-6 \">","                        <span class=\"glyphicon glyphicon-user glyphicon-lg\"></span>","                    </div>","\t\t\t<div class=\"col-xs-6 col-sm-6 \">","                    <h5>Company Name</h5>","                    <h4 class=\"movieTitle\">Name: Tyreese Burn</h4>","                    <p>Title: Manager</p>","                    <span>Phone: 555-555-5555</span>","                    <span>Email: sample@company.com</span>","\t\t\t</div>","                </div>","\t\t</div>","            <div class=\"items col-xs-6 col-sm-6 col-md-6 col-lg-6 clearfix\">","               <div class=\"info-block block-info row\">","                    <div class=\"square-box pull-left col-xs-6 col-sm-6 \">","                        <span class=\"glyphicon glyphicon-user glyphicon-lg\"></span>","                    </div>","\t\t\t<div class=\"col-xs-6 col-sm-6 \">","                    <h5>Company Name</h5>","                    <h4 class=\"movieTitle\">Name: Brenda Tree</h4>","                    <p>Title: Manager</p>","                    <span>Phone: 555-555-5555</span>","                    <span>Email: sample@company.com</span>","\t\t\t</div>","                </div>","            </div>","            <div class=\"items col-xs-6 col-sm-6 col-md-6 col-lg-6\">","               <div class=\"info-block block-info row\">","                    <div class=\"square-box pull-left col-xs-6 col-sm-6 \">","                        <span class=\"glyphicon glyphicon-user glyphicon-lg\"></span>","                    </div>","\t\t\t<div class=\"col-xs-6 col-sm-6 \">","                    <h5>Company Name</h5>","                    <h4 class=\"movieTitle\">Name: Glenn Pho shizzle</h4>","                    <p>Title: Manager</p>","                    <span>Phone: 555-555-5555</span>","                    <span>Email: sample@company.com</span>","\t\t\t</div>","                </div>","            </div>","            <div class=\"items col-xs-6 col-sm-6 col-md-6 col-lg-6\">","               <div class=\"info-block block-info row\">","                    <div class=\"square-box pull-left col-xs-6 col-sm-6 \">","                        <span class=\"glyphicon glyphicon-user glyphicon-lg\"></span>","                    </div>","\t\t\t<div class=\"col-xs-6 col-sm-6 \">","                    <h5>Company Name</h5>","                    <h4 class=\"movieTitle\">Name: Brian Hoyies</h4>","                    <p>Title: Manager</p>","                    <span>Phone: 555-555-5555</span>","                    <span>Email: sample@company.com</span>","\t\t\t</div>","                </div>","            </div>","        </div>","\t</div>","       ","        </section>"]}],[{"start":{"row":87,"column":52},"end":{"row":87,"column":53},"action":"insert","lines":[" "],"id":335}],[{"start":{"row":87,"column":53},"end":{"row":87,"column":61},"action":"insert","lines":["clearfix"],"id":336}],[{"start":{"row":101,"column":52},"end":{"row":101,"column":53},"action":"insert","lines":[" "],"id":337}],[{"start":{"row":101,"column":53},"end":{"row":101,"column":61},"action":"insert","lines":["clearfix"],"id":338}],[{"start":{"row":115,"column":52},"end":{"row":115,"column":53},"action":"insert","lines":[" "],"id":339}],[{"start":{"row":115,"column":53},"end":{"row":115,"column":61},"action":"insert","lines":["clearfix"],"id":340}],[{"start":{"row":73,"column":52},"end":{"row":73,"column":53},"action":"insert","lines":[" "],"id":341}],[{"start":{"row":73,"column":53},"end":{"row":73,"column":61},"action":"insert","lines":["clearfix"],"id":342}],[{"start":{"row":74,"column":70},"end":{"row":74,"column":71},"action":"insert","lines":[" "],"id":344}],[{"start":{"row":74,"column":71},"end":{"row":74,"column":88},"action":"insert","lines":["col-md-6 col-lg-6"],"id":345}],[{"start":{"row":77,"column":33},"end":{"row":77,"column":50},"action":"insert","lines":["col-md-6 col-lg-6"],"id":346}],[{"start":{"row":88,"column":71},"end":{"row":88,"column":88},"action":"insert","lines":["col-md-6 col-lg-6"],"id":347}],[{"start":{"row":91,"column":33},"end":{"row":91,"column":50},"action":"insert","lines":["col-md-6 col-lg-6"],"id":348}],[{"start":{"row":102,"column":71},"end":{"row":102,"column":88},"action":"insert","lines":["col-md-6 col-lg-6"],"id":349}],[{"start":{"row":105,"column":33},"end":{"row":105,"column":50},"action":"insert","lines":["col-md-6 col-lg-6"],"id":350}],[{"start":{"row":116,"column":71},"end":{"row":116,"column":88},"action":"insert","lines":["col-md-6 col-lg-6"],"id":351}],[{"start":{"row":119,"column":33},"end":{"row":119,"column":50},"action":"insert","lines":["col-md-6 col-lg-6"],"id":352}]]},"ace":{"folds":[],"scrolltop":1930,"scrollleft":0,"selection":{"start":{"row":119,"column":50},"end":{"row":119,"column":50},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":102,"state":"start","mode":"ace/mode/php"}},"timestamp":1464188217847,"hash":"b0b74297c7a3da7a04226d180930f9d73a829b4d"}