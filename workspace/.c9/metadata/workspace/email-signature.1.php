{"changed":false,"filter":false,"title":"email-signature.1.php","tooltip":"/email-signature.1.php","value":"<!DOCTYPE html>\n<html lang=\"en\">\n  <head>\n    \n\n    <title>\n   Miracle Email Signature Standards\n    </title>\n        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n        <link href=\"css/animate.css\" rel=\"stylesheet\">\n        <link href=\"css/main.css\" rel=\"stylesheet\">\n        <link href=\"css/default.css\" rel=\"stylesheet\" type=\"text/css\">\n        <link href=\"css/component.css\" rel=\"stylesheet\" type=\"text/css\">\n        <script src=\"js/modernizr.custom.js\"></script>\n        <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">\n        <link href=\"//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">\n        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">\n        <link href=\"images/favicon.ico\" rel=\"shortcut icon\">\n   \n     <link rel=\"stylesheet\" href=\"css/signature.css\">\n    \n      <script src=\"js/custom.js\"></script>   \n      <script type=\"text/javascript\" src=\"js/Validation.js\"></script>\n   <link rel=\"stylesheet\" type=\"text/css\" href=\"css/codemirror.css\" />\n    <script type=\"text/javascript\" src=\"js/codemirror.js\"></script> \n    <script src=\"js/signtaure.js\"></script>\n    <script type=\"text/javascript\">\nfunction enableSignatureEnter(e) {\n    var keynum;\n    var keychar;\n    var numcheck;\n    \n    if(window.event) {\n        keynum = e.keyCode;\n    }\n    else if(e.which) // Netscape/Firefox/Opera\n    {\n        keynum = e.which;\n    }\n    try{\n        if(keynum==13){\n            getSignature();\n            return false;\n        }\n    }catch(e){\n        alert(\"Error\"+e);\n    }\n};\n    \n    function enableLoginEnter(e) {\n    var keynum;\n    var keychar;\n    var numcheck;\n    \n    if(window.event) {\n        keynum = e.keyCode;\n    }\n    else if(e.which) // Netscape/Firefox/Opera\n    {\n        keynum = e.which;\n    }\n    try{\n        if(keynum==13){\n            doSignatureLogin();\n            return false;\n        }\n    }catch(e){\n        alert(\"Error\"+e);\n    }\n};\n    \n    </script>\n    \n        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>\n<script>\n$(document).ready(function(){\n $(\"p1\").hide();\n    $(\"#show\").click(function(){\n       \n   \n   \n        $(\"p1\").show();\n    });\n});\n</script>\n   \n    \n  </head>\n \n<style>\n    body,p,div,table,tr,td,ul,li,textarea,span,a{font-family:'Lato',Calibri,Arial,sans-serif;}\n    .methodText, .job {\n    font-size: 16px!important;\n    text-align: justify!important;}\n</style> \n  \n  <body>\n      <?php include 'header.php';?>\n      \n      \n       <section class=\"container\" id=\"about-us\">\n           \n\n    <section class=\"container\">\n           <br>\n            <br>\n          <br><br>\n            <div class=\"row\">\n              \n                <div class=\"col-sm-6 text-left\">\n                    <h2>\n                    <strong>Miracle Email Signature Standards </strong>\n                    </h2>\n                </div>\n                <div class=\"col-sm-6 text-right\">\n                    <ul class=\"breadcrumb pull-right\">\n                        <li>\n                            <a href=\"../\">Home</a>\n                        </li>\n                        <li>\n                            <a href=\"../standards\">Standards</a>\n                        </li>\n                        \n                        <li class=\"active\">Signature\n                        </li>\n                    </ul>\n                </div>\n               \n            </div>\n    \n     <div class=\"row \">\n         <div class=\"col-sm-6\">\n             <p class=\"methodText\">\n                While new forms of collaboration such as instant messaging are becoming popular everyday, email still remains as the top form of information passing in the corporate world. At Miracle we depend heavily on our corporate communications and it is important that we uphold the Miracle brand within these emails as well. With our emails being read by partners and customers everyday it is essential that we all showcase a uniform image to them. </p>\n               <p class=\"methodText\">Our Corporate Email Standards helps us to give everybody a chance to create their own signature and integrate that with their email clients to ensure that we all have the same standard. Go ahead and get started by putting in your details in the right-hand side form and generate your signature. <strong>Check out the <a href=\"signature-document.php\" class=\"linkText\" target=\"_blank\"><strong><font color=\"#00aae7\">\"How To\"</font></strong> </a> documentation right here if you are having trouble setting up your signature!</strong></p>\n         </div>\n         \n         <div class=\"col-sm-6\">\n             <div class=\"row \">\n             <div class=\"col-sm-6\">\n         <label > Name</label>\n         <input tabindex=\"1\" class=\"form-control\" required=\"required\" placeholder=\"Full name\" id=\"firstname\" name=\"firstname\"  type=\"text\" onkeydown=\"return enableSignatureEnter(event);\" onchange=\"fieldLengthValidator(this);\">\n        <br>\n        <label > Email</label>\n         <input class=\"form-control\" required=\"required\" placeholder=\"Email\"  name=\"email\" id=\"email\"  type=\"text\"  onkeydown=\"return enableSignatureEnter(event);\">\n         <br><label > Mobile</label>\n        <input tabindex=\"5\" class=\"form-control\" required=\"required\" placeholder=\"Mobile\"  name=\"mobile\" id=\"mobile\" type=\"text\" onchange=\"return formatPhone(this);\" onblur=\"return validatenumber(this)\" onkeypress=\"return isNumberKey(event)\" onkeydown=\"return enableSignatureEnter(event);\">\n         \n          </div>\n          \n           <div class=\"col-sm-6\">\n         <label >Designation</label>\n        <input tabindex=\"2\" class=\"form-control\" required=\"required\" placeholder=\"Designation\" id=\"designation\" name=\"designation\"  type=\"text\" onkeydown=\"return enableSignatureEnter(event);\" onchange=\"fieldLengthValidator(this);\">\n        <br>\n        <label > Work Phone</label>\n         <input tabindex=\"4\" class=\"form-control\" required=\"required\" placeholder=\"Work Phone\"  name=\"workPhone\" id=\"workPhone\"  type=\"text\" onchange=\"return formatPhone(this);\" onblur=\"return validatenumber(this)\" onkeypress=\"return isNumberKey(event)\" onkeydown=\"return enableSignatureEnter(event);\"/>\n         <br><label > Location</label>\n         <select class=\"form-control\" id=\"location\" onchange=\"checkLocationType(this);\" tabindex=\"6\" onkeydown=\"return enableSignatureEnter(event);\">\n <option value=\"\">--Please Select--</option>\n  <option value=\"Atlanta\">Atlanta</option>\n  <option value=\"Bentonville\"> Bentonville</option>\n  <option value=\"Cincinnati\">Cincinnati</option>\n  <option value=\"GDC\">Miracle City</option>\n  <option value=\"HQ\">Headquarters</option>\n  <option value=\"IO\">LB Colony</option>\n  <option value=\"IH\">Miracle Heights</option>\n  \n  <option value=\"OL\">Other Locations</option>\n  </select>\n       </div>  \n             \n             </div>\n             <h3>Additional Options</h3>\n             <hr>\n             <div class=\"row\">\n             <div class=\"col-sm-6\">\n               <button  type=\"button\" id=\"show\" class=\"btn btn-info form-control col-sm-12 \">Partners</button><br>   \n             \n             <p1>\n             <label > Partners</label>\n         <select class=\"form-control\" id=\"location\" onchange=\"checkLocationType(this);\" tabindex=\"6\" onkeydown=\"return enableSignatureEnter(event);\">\n <option value=\"\">--Please Select--</option>\n  \n  <option value=\"HQ\">IBM</option>\n  <option value=\"IO\">SAP</option>\n  <option value=\"IH\">ORACLE</option>\n  <option>HP</option>\n \n  </select>\n  </p1>\n  </div>\n             <div class=\"col-sm-6\">\n                  <button  type=\"button\" class=\"btn btn-info form-control col-sm-12 \">Events</button><br>\n             </div>\n             </div>\n             <div class=\"row \">\n                  <div class=\"col-sm-12\">\n                       \n          <button  type=\"button\" class=\"btn btn-primary form-control col-sm-12 noMarginTop\" onclick=\"insertEmployeeSignatureData();\" style=\"margin-top: 5px;\" id=\"generateButton\">Generate Signature&nbsp;&nbsp;&nbsp;&nbsp;</button><br>\n       \n               </div>\n             </div>\n            \n         </div>\n            \n         <input type=\"hidden\" name=\"livingCountry\" id=\"livingCountry\" />\n        <input type=\"hidden\" name=\"empSignId\" id=\"empSignId\" value=\"0\"/>\n         <input type=\"hidden\" name=\"empSignUpdate\" id=\"empSignUpdate\" value=\"0\"/>\n     </div>\n        \n               \n        \n         </section>\n\n<div id=\"insertionLoading\" style=\"display: none\" >\n    <font color=\"red\" size=\"3px\">Loading please wait...</font></div>\n\n    <hr id=\"topHr\" style=\"display: none\"></hr>\n    <br>  \n   \n       <div class=\"row\" id=\"signatureDiv\" style=\"display: none\">\n           <section class=\"container\">\n       <div class=\"col-sm-6\" id=\"signatureDivId\">\n  </div>\n               <div class=\"col-sm-6\" >\n         \n            <div id=\"signatureView\" class=\"embed-responsive-item col-sm-12\"></div> \n  \n       </div>\n       </section>\n     </div>\n    <br>\n    \n   <div class=\"row\" id=\"signatureDiv\" style=\"\">\n           <section class=\"container\">\n       <div class=\"col-sm-6\" id=\"signatureDivId\">\n           <textarea id=\"signatureCode\" style=\"display: none;\"></textarea><div class=\"CodeMirror cm-s-default\"><div style=\"overflow: hidden; position: relative; width: 3px; height: 0px; top: 4px; left: 81.3594px;\"><textarea id=\"cmTextArea\" name=\"cmTextArea\" autocorrect=\"off\" autocapitalize=\"off\" spellcheck=\"false\" style=\"position: absolute; padding: 0px; width: 1000px; height: 1em; outline: none;\" tabindex=\"0\"></textarea></div><div class=\"CodeMirror-vscrollbar\" cm-not-content=\"true\" style=\"display: block; bottom: 15px;\"><div style=\"min-width: 1px; height: 844px;\"></div></div><div class=\"CodeMirror-hscrollbar\" cm-not-content=\"true\" style=\"display: block; right: 15px; left: 30px;\"><div style=\"height: 100%; min-height: 1px; width: 1521px;\"></div></div><div class=\"CodeMirror-scrollbar-filler\" cm-not-content=\"true\" style=\"display: block; height: 15px; width: 15px;\"></div><div class=\"CodeMirror-gutter-filler\" cm-not-content=\"true\"></div><div class=\"CodeMirror-scroll\" tabindex=\"-1\"><div class=\"CodeMirror-sizer\" style=\"margin-left: 30px; margin-bottom: -15px; border-right-width: 15px; min-height: 844px; min-width: 1521.36px; padding-right: 15px; padding-bottom: 15px;\"><div style=\"position: relative; top: 0px;\"><div class=\"CodeMirror-lines\"><div style=\"position: relative; outline: none;\"><div class=\"CodeMirror-measure\">AخA</div><div class=\"CodeMirror-measure\"><pre class=\"CodeMirror-line\"><span style=\"padding-right: 0.1px;\">                        <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">a</span> <span class=\"cm-attribute\">href</span>=<span class=\"cm-string\">\"https://www.linkedin.com/company/miracle-software-systems-inc\"</span> <span class=\"cm-attribute\">target</span>=<span class=\"cm-string\">\"blank\"</span> <span class=\"cm-attribute\">style</span>=<span class=\"cm-string\">\"color:#ef4048; text-decoration: none;\"</span><span class=\"cm-tag cm-bracket\">&gt;&lt;</span><span class=\"cm-tag\">img</span> <span class=\"cm-attribute\">src</span>=<span class=\"cm-string\">\"http://www.miraclesoft.com/images/newsletters/Linkedin1.png\"</span><span class=\"cm-tag cm-bracket\">/&gt;&lt;/</span><span class=\"cm-tag\">a</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative; z-index: 1;\"></div><div class=\"CodeMirror-cursors\" style=\"visibility: hidden;\"><div class=\"CodeMirror-cursor\" style=\"left: 51.3594px; top: 0px; height: 22px;\">&nbsp;</div></div><div class=\"CodeMirror-code\"><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">1</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\"><span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">html</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">2</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">     <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">head</span><span class=\"cm-tag cm-bracket\">&gt;&lt;/</span><span class=\"cm-tag\">head</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">3</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">              <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">body</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">4</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">        <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">table</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">5</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">            <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">tbody</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">6</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">tr</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">7</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                    <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">td</span> <span class=\"cm-attribute\">style</span>=<span class=\"cm-string\">\"font-size: 15px; font-family: Calibri;\"</span> <span class=\"cm-attribute\">valign</span>=<span class=\"cm-string\">\"top\"</span> <span class=\"cm-attribute\">align</span>=<span class=\"cm-string\">\"left\"</span><span class=\"cm-tag cm-bracket\">&gt;&lt;</span><span class=\"cm-tag\">b</span><span class=\"cm-tag cm-bracket\">&gt;</span>Shoba Lekkala<span class=\"cm-tag cm-bracket\">&lt;/</span><span class=\"cm-tag\">b</span><span class=\"cm-tag cm-bracket\">&gt;&lt;</span><span class=\"cm-tag\">br</span><span class=\"cm-tag cm-bracket\">/&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">8</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                       <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">span</span> <span class=\"cm-attribute\">style</span>=<span class=\"cm-string\">\"font-size: 14px\"</span><span class=\"cm-tag cm-bracket\">&gt;</span> Webmaster</span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">9</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                        <span class=\"cm-tag cm-bracket\">&lt;/</span><span class=\"cm-tag\">span</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">10</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                    <span class=\"cm-tag cm-bracket\">&lt;/</span><span class=\"cm-tag\">td</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">11</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                    <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">td</span> <span class=\"cm-attribute\">width</span>=<span class=\"cm-string\">\"80\"</span><span class=\"cm-tag cm-bracket\">&gt;&lt;/</span><span class=\"cm-tag\">td</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">12</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                    <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">td</span> <span class=\"cm-attribute\">align</span>=<span class=\"cm-string\">\"right\"</span><span class=\"cm-tag cm-bracket\">&gt;&lt;</span><span class=\"cm-tag\">a</span> <span class=\"cm-attribute\">href</span>=<span class=\"cm-string\">\"http://www.miraclesoft.com\"</span> <span class=\"cm-attribute\">target</span>=<span class=\"cm-string\">\"blank\"</span><span class=\"cm-tag cm-bracket\">&gt;&lt;</span><span class=\"cm-tag\">img</span> <span class=\"cm-attribute\">src</span>=<span class=\"cm-string\">\"http://www.miraclesoft.com/images/newsletters/miracle-logo-dark1.png\"</span> <span class=\"cm-attribute\">alt</span>=<span class=\"cm-string\">\"logo\"</span><span class=\"cm-tag cm-bracket\">/&gt;&lt;/</span><span class=\"cm-tag\">a</span><span class=\"cm-tag cm-bracket\">&gt;&lt;/</span><span class=\"cm-tag\">td</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">13</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">           \n           <span class=\"cm-tag cm-bracket\">&lt;/</span><span class=\"cm-tag\">tr</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">14</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">tr</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">15</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                    <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">td</span> <span class=\"cm-attribute\">colspan</span>=<span class=\"cm-string\">\"4\"</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">16</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                        <span class=\"cm-tag cm-bracket\">&lt;</span><span class=\"cm-tag\">hr</span><span class=\"cm-tag cm-bracket\">/&gt;</span></span></pre></div><div style=\"position: relative;\"><div class=\"CodeMirror-gutter-wrapper\" style=\"left: -30px;\"><div class=\"CodeMirror-linenumber CodeMirror-gutter-elt\" style=\"left: 0px; width: 21px;\">17</div></div><pre class=\" CodeMirror-line \"><span style=\"padding-right: 0.1px;\">                    <span class=\"cm-tag cm-bracket\">&lt;/</span><span class=\"cm-tag\">td</span><span class=\"cm-tag cm-bracket\">&gt;</span></span></pre></div></div></div></div></div></div><div style=\"position: absolute; height: 15px; width: 1px; top: 844px;\"></div><div class=\"CodeMirror-gutters\" style=\"height: 859px;\"><div class=\"CodeMirror-gutter CodeMirror-linenumbers\" style=\"width: 29px;\">\n       </div></div></div></div></div>\n       \n               <div class=\"col-sm-6\">\n         \n            <div id=\"signatureView\" class=\"embed-responsive-item col-sm-12\">\n        <table>\n            <tbody>\n                <tr>\n                    <td style=\"font-size: 15px; font-family: Calibri;\" valign=\"top\" align=\"left\"><b>Shoba Lekkala</b><br>\n                       <span style=\"font-size: 14px\"> Webmaster\n                        </span>\n                    </td>\n                    <td width=\"80\"></td>\n                    <td align=\"right\"><a href=\"http://www.miraclesoft.com\" target=\"blank\"><img src=\"http://www.miraclesoft.com/images/newsletters/miracle-logo-dark1.png\" alt=\"logo\"></a></td>\n                </tr>\n                <tr>\n                    <td colspan=\"4\">\n                        <hr>\n                    </td>\n                </tr>\n                <tr>\n                    <td style=\"font-size: 14px; font-family: Calibri;\" valign=\"top\" align=\"left\"><b>Phone: </b>(248)-232-7405<br>\n                        <b>Mobile: </b>(949)-176-5035<br>\n                        <b>Email: </b><a href=\"mailto:slekala@miraclesoft.com\" target=\"blank\">slekala@miraclesoft.com</a><br>\n                        <a href=\"https://www.facebook.com/miracle45625/\" target=\"blank\" style=\"color:#ef4048; text-decoration: none;\"><img src=\"http://www.miraclesoft.com/images/newsletters/facebook1.png\"></a>\n                        <a href=\"https://plus.google.com/+Team_MSS\" target=\"blank\" style=\"color:#ef4048; text-decoration: none;\"><img src=\"http://www.miraclesoft.com/images/newsletters/googleplus1.png\"></a>\n                        <a href=\"https://www.linkedin.com/company/miracle-software-systems-inc\" target=\"blank\" style=\"color:#ef4048; text-decoration: none;\"><img src=\"http://www.miraclesoft.com/images/newsletters/Linkedin1.png\"></a>\n                        <a href=\"https://www.youtube.com/c/Team_MSS\" target=\"blank\" style=\"color:#ef4048; text-decoration: none;\"><img src=\"http://www.miraclesoft.com/images/newsletters/youtube1.png\"></a>\n                        <a href=\"https://twitter.com/Team_MSS\" target=\"blank\" style=\"color:#ef4048; text-decoration: none;\"><img src=\"http://www.miraclesoft.com/images/newsletters/Twitter1.png\"></a>\n                    </td>\n                    <td width=\"80\"></td>\n                    <td style=\"font-size:14px; font-family: calibri\" valign=\"top\" align=\"right\">\n                    Miracle Heights – APAC HQ<br>\n                    Hill No. 1, IT SEZ, Chinna Rushi Konda<br>\n                    Visakhapatnam, AP - 530045, India <br>\n                    <a href=\"http://www.miraclesoft.com\" target=\"blank\">www.miraclesoft.com</a>\n                    </td>\n                </tr>\n            </tbody>\n        </table> </div> \n  \n       </div>\n       </section>\n     </div>\n   \n<br>\n   \n   <div class=\"row container\" id=\"buttonDiv\" style=\"\">\n        <div class=\"col-sm-6\"><button type=\"button\" class=\"btn btn-primary form-control\" onclick=\"updateEmployeeSignatureData();\" id=\"copyButton\">Copy Code to Clipboard</button><br><br></div>\n              <div class=\"col-sm-6\">\n                \n                      <button type=\"button\" class=\"btn btn-success form-control \" tabindex=\"8\">Signature Preview </button>\n                 \n                  </div>\n         </div>\n<section class=\"container\">\n        <div class=\"row\" id=\"italicDiv\" style=\"\">\n        <div class=\"col-sm-12\">\n             <i>Now that you have generated your signature, go over to the <a href=\"signature-document.php\" class=\"linkText\" target=\"_blank\"><strong><font color=\"#00aae7\">How To Documentation</font></strong></a> to start adding your signature to your email client!</i>\n        </div>\n    </div>\n    </section>   \n<br>\n<div id=\"faqDiv\" style=\"\">\n    <div class=\"col-sm-12\">\n                    <h5 class=\"heavy noMarginBottom\">FAQs </h5>\n                    <div class=\"row noMarginBottom\">\n                        <div class=\"col-sm-2 noMargin\">\n                            <hr>\n                        </div>\n                    </div>\n                </div>\n   <div class=\"col-sm-12\">\n                    <p class=\"methodText\">\n                        <strong>Q#1. What is the suggested font details for corporate email?</strong><br>\n                       We would highly recommend using Calibri 15 for all emails whether it be your phone (or) laptop.  <br><br>\n                        <strong>Q#2. What if I need to setup a non-HTML regular signature for my mobile device?</strong><br>\n                       We understand that for some devices HTML Signatures might be too heavy and there will be the need to setup regular test signatures, like on your mobile email client. In such cases use the format below to define your email signature. \n\n <br><br>\n                          </p><div class=\"row\">\n                             <div class=\"col-sm-4\">\n                                 \n<strong>Regards,</strong><br>\n<strong>Chanakya Lokam</strong><br>\nDirector Marketing | Innovation<br>\nMiracle Software Systems, Inc.<br>\n45625&nbsp;Grand&nbsp;River&nbsp;Avenue,&nbsp;Novi,&nbsp;MI&nbsp;-&nbsp;48374<br>\nclokam@miraclesoft.com<br>\nPhone : 1-248-233-1900<br>\nHome : 1-248-679-2661<br>\nIndia: 011-91-9704478300<br>\n\n                             </div>\n                               <div class=\"col-sm-3\">\n                                   <strong>Regards,</strong><br>\n                                   <strong>&lt; Full Name&gt;</strong><br>\n&lt;Designation&gt;<br>\nMiracle Software Systems, Inc.<br>\n&lt;Address Based on Location&gt;<br>\n&lt;Email Address&gt;<br>\nPhone : &lt;Your Work Phone&gt;<br>\nHome : &lt;Your Mobile Phone&gt;<br>\n                               </div>\n                </div><br>\n                     <strong>Q#3. Do you have \"How To\" documents for all device type?</strong><br>\n                    While our “How To” guides cover most of the email clients available such as Outlook, Thunderbird, Zimbra and more there will always be an email client that we haven’t covered. While we will actively add more clients to the documentation, please feel free to reach out to us for more information and help. <strong><font color=\"#00aae7\">Check out our documentation collection</font> <a href=\"\"><font color=\"#0d416b\">today!</font></a></strong>  <br><br>\n                     <strong>Q#4. Who should I reach out to if I have a question?</strong><br>\n                     Please feel free to contact the Marketing Team at <a href=\"mailto:marketing@miraclesoft.com\"><strong>marketing@miraclesoft.com</strong></a> (or) give us a call at <strong>248-412-0428</strong>. The Web Experience and the Content Team are in-charge of the Email Signature Standards and will be more than happy to help you out.  <p></p>\n    \n   <br><br>\n   </div>\n        </div>\n        <br>\n </section>  \n \n    <?php include 'footer.php';?> \n  </body>\n</html>\n","undoManager":{"mark":-1,"position":-1,"stack":[]},"ace":{"folds":[{"start":{"row":242,"column":76},"end":{"row":277,"column":17},"placeholder":"..."}],"scrolltop":4916,"scrollleft":0,"selection":{"start":{"row":285,"column":4},"end":{"row":285,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":279,"state":"start","mode":"ace/mode/php"}},"timestamp":1475166234469}