{"changed":false,"filter":false,"title":"contact-indx.2.php","tooltip":"/contact/contact-indx.2.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":155,"column":2},"end":{"row":231,"column":8},"action":"remove","lines":["<div class=\"row\">","    ","    <div class=\"col-sm-4\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"1\" class=\"form-control\" required=\"required\" placeholder=\"First Name\" id=\"firstname\" name=\"firstname\" tabindex=\"1\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"4\" class=\"form-control\" required=\"required\" placeholder=\"Organization\" id=\"organization\" name=\"organization\" tabindex=\"4\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","    <div class=\"col-sm-4\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"2\" class=\"form-control\" required=\"required\" placeholder=\"Last Name\" id=\"lastname\" name=\"lastname\" tabindex=\"2\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"5\" class=\"form-control\" required=\"required\" placeholder=\"Designation\" id=\"designation\" name=\"designation\" tabindex=\"5\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","    <div class=\"col-sm-4\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"3\" class=\"form-control\" required=\"required\" placeholder=\"Email\" id=\"email\" name=\"email\" tabindex=\"3\" onchange=\"return checkEmail(this);fieldLengthValidator(this);\">","        ","      </div>","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"6\" class=\"form-control\" required=\"required\" onkeypress=\"return isNumberKey(event)\" placeholder=\"Work Phone\" id=\"phone\" name=\"phone\" tabindex=\"6\" onchange=\"return formatPhone(this);\" onblur=\"return validatenumber(this)\">","        ","      </div>","    </div>","  </div>","  <div class=\"row\">","    ","    <div class=\"col-sm-3\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"7\" class=\"form-control\" required=\"required\" placeholder=\"City\" id=\"city\" name=\"city\" tabindex=\"7\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","    <div class=\"col-sm-3\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"8\" class=\"form-control\" required=\"required\" placeholder=\"State\" name=\"state\" id=\"state\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","    <div class=\"col-sm-3\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"9\" class=\"form-control\" required=\"required\" placeholder=\"Country\" id=\"country\" name=\"country\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","    <div class=\"col-sm-3\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"10\" class=\"form-control\" required=\"required\" onkeypress=\"return isNumberKey(event)\" placeholder=\"Zip Code\" id=\"zip\" name=\"zip\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","  </div>"],"id":155,"ignore":true}],[{"start":{"row":131,"column":12},"end":{"row":139,"column":18},"action":"remove","lines":["<div class=\"row\">","              ","              <div class=\"col-sm-12\">","                ","                <h3 class=\"heavy\">","                    Contact Form","                  </h3>","              </div>","            </div>"],"id":156,"ignore":true}],[{"start":{"row":152,"column":6},"end":{"row":157,"column":12},"action":"remove","lines":["<div class=\"form-group\">","        ","        <textarea class=\"form-control\" tabindex=\"11\" placeholder=\"What kind of services are you looking for?\" rows=\"3\" id=\"description\" name=\"description\" value=\"\" onchange=\"fieldLengthValidator(this);\">","        </textarea>","        ","      </div>"],"id":157,"ignore":true}],[{"start":{"row":152,"column":6},"end":{"row":157,"column":12},"action":"insert","lines":["<div class=\"form-group\">","        ","        <textarea class=\"form-control\" tabindex=\"11\" placeholder=\"What kind of services are you looking for?\" rows=\"3\" id=\"description\" name=\"description\" value=\"\" onchange=\"fieldLengthValidator(this);\">","        </textarea>","        ","      </div>"],"id":158,"ignore":true}],[{"start":{"row":131,"column":12},"end":{"row":139,"column":18},"action":"insert","lines":["<div class=\"row\">","              ","              <div class=\"col-sm-12\">","                ","                <h3 class=\"heavy\">","                    Contact Form","                  </h3>","              </div>","            </div>"],"id":159,"ignore":true},{"start":{"row":155,"column":2},"end":{"row":231,"column":8},"action":"insert","lines":["<div class=\"row\">","    ","    <div class=\"col-sm-4\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"1\" class=\"form-control\" required=\"required\" placeholder=\"First Name\" id=\"firstname\" name=\"firstname\" tabindex=\"1\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"4\" class=\"form-control\" required=\"required\" placeholder=\"Organization\" id=\"organization\" name=\"organization\" tabindex=\"4\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","    <div class=\"col-sm-4\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"2\" class=\"form-control\" required=\"required\" placeholder=\"Last Name\" id=\"lastname\" name=\"lastname\" tabindex=\"2\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"5\" class=\"form-control\" required=\"required\" placeholder=\"Designation\" id=\"designation\" name=\"designation\" tabindex=\"5\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","    <div class=\"col-sm-4\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"3\" class=\"form-control\" required=\"required\" placeholder=\"Email\" id=\"email\" name=\"email\" tabindex=\"3\" onchange=\"return checkEmail(this);fieldLengthValidator(this);\">","        ","      </div>","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"6\" class=\"form-control\" required=\"required\" onkeypress=\"return isNumberKey(event)\" placeholder=\"Work Phone\" id=\"phone\" name=\"phone\" tabindex=\"6\" onchange=\"return formatPhone(this);\" onblur=\"return validatenumber(this)\">","        ","      </div>","    </div>","  </div>","  <div class=\"row\">","    ","    <div class=\"col-sm-3\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"7\" class=\"form-control\" required=\"required\" placeholder=\"City\" id=\"city\" name=\"city\" tabindex=\"7\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","    <div class=\"col-sm-3\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"8\" class=\"form-control\" required=\"required\" placeholder=\"State\" name=\"state\" id=\"state\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","    <div class=\"col-sm-3\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"9\" class=\"form-control\" required=\"required\" placeholder=\"Country\" id=\"country\" name=\"country\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","    <div class=\"col-sm-3\">","      ","      <div class=\"form-group\">","        ","        <input type=\"text\" tabindex=\"10\" class=\"form-control\" required=\"required\" onkeypress=\"return isNumberKey(event)\" placeholder=\"Zip Code\" id=\"zip\" name=\"zip\" onchange=\"fieldLengthValidator(this);\">","        ","      </div>","    </div>","  </div>"]}]]},"ace":{"folds":[],"scrolltop":2838.4335403442383,"scrollleft":0,"selection":{"start":{"row":271,"column":22},"end":{"row":271,"column":22},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":189,"state":"start","mode":"ace/mode/php"}},"timestamp":1473972952608}