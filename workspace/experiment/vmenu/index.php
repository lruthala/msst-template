
  <style>
     

html {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q, blockquote {
  quotes: none;
}
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}


@font-face {
  font-family: 'Genericons';
  src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/53819/genericons-regular-webfont.eot");
  src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/53819/genericons-regular-webfont.woff") format("woff"), url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/53819/genericons-regular-webfont.eot") format("truetype");
  font-weight: normal;
  font-style: normal;
}
[class*="genericon"] {
  display: inline-block;
  width: 16px;
  height: 16px;
  -webkit-font-smoothing: antialiased;
  font-size: 16px;
  line-height: 1;
  font-family: 'Genericons';
  text-decoration: inherit;
  font-weight: normal;
  font-style: normal;
  vertical-align: top;
}

/* IE7 */
[class*="genericon"] {
  *overflow: auto;
  *zoom: 1;
  *display: inline;
}

.container {
  margin: 100px auto;
}

.accordion {
  background: #5ab2ca;
  width: 75%;
  margin-left: -10px;
  margin-top:-90px;
  display: block;
  list-style-type: none;
  overflow: hidden;
  height: 200px;
  font-size: 0;
}

.tabs {
  display: inline-block;
  background-color: #6dc5dd;
  border-right: #5ab2ca 1px solid;
  width: 80px;
  height: 200px;
  overflow: hidden;
  position: relative;
  margin: 0;
  font-size: 16px;
  -moz-transition: all 0.4s ease-in-out 0.1s;
  -o-transition: all 0.4s ease-in-out 0.1s;
  -webkit-transition: all 0.4s ease-in-out;
  -webkit-transition-delay: 0.1s;
  transition: all 0.4s ease-in-out 0.1s;
}
.tabs:hover {
  width: 450px;
}
.tabs:hover .social-links a:before {
  margin-left: -100px;
}
.tabs:hover .social-links a:after {
  margin-left: -5px;
}
.tabs .paragraph {
  position: relative;
  width: 360px;
  margin-left: 80px;
  padding: 50px 0 0 10px;
  height: 287px;
  background: #fff;
}
.tabs .paragraph h1 {
  font-size: 2.5em;
  margin-bottom: 10px;
}
.tabs .paragraph p {
  font-size: 0.88em;
  line-height: 0.5em;
  padding-right: 30px;
}

.cloud-icon a:before, .cloud-icon a:after {
  content: '\f426';
}
.cloud-icon a:after {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzU0OGFiZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzI5NWI5ZSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #548abf), color-stop(100%, #295b9e));
  background-image: -moz-linear-gradient(#548abf, #295b9e);
  background-image: -webkit-linear-gradient(#548abf, #295b9e);
  background-image: linear-gradient(#548abf, #295b9e);
}

.data-icon a:before, .data-icon a:after {
  content: '\f443';
}
.data-icon a:after {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzU0OGFiZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzI5NWI5ZSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #548abf), color-stop(100%, #295b9e));
  background-image: -moz-linear-gradient(#548abf, #295b9e);
  background-image: -webkit-linear-gradient(#548abf, #295b9e);
  background-image: linear-gradient(#548abf, #295b9e);
}

.dev-icon a:before, .dev-icon a:after {
  content: '\f462';
}
.dev-icon a:after {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzU0OGFiZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzI5NWI5ZSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #548abf), color-stop(100%, #295b9e));
  background-image: -moz-linear-gradient(#548abf, #295b9e);
  background-image: -webkit-linear-gradient(#548abf, #295b9e);
  background-image: linear-gradient(#548abf, #295b9e);
}

.bigdata-icon a:before, .bigdata-icon a:after {
  content: '\f508';
}
.bigdata-icon a:after {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzU0OGFiZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzI5NWI5ZSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #548abf), color-stop(100%, #295b9e));
  background-image: -moz-linear-gradient(#548abf, #295b9e);
  background-image: -webkit-linear-gradient(#548abf, #295b9e);
  background-image: linear-gradient(#548abf, #295b9e);
}

.mobile-icon a:before, .mobile-icon a:after {
  content: '\f437';
}
.mobile-icon a:after {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzU0OGFiZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzI5NWI5ZSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #548abf), color-stop(100%, #295b9e));
  background-image: -moz-linear-gradient(#548abf, #295b9e);
  background-image: -webkit-linear-gradient(#548abf, #295b9e);
  background-image: linear-gradient(#548abf, #295b9e);
}

.portal-icon a:before, .portal-icon a:after {
  content: '\f108';
}
.portal-icon a:after {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzU0OGFiZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzI5NWI5ZSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #548abf), color-stop(100%, #295b9e));
  background-image: -moz-linear-gradient(#548abf, #295b9e);
  background-image: -webkit-linear-gradient(#548abf, #295b9e);
  background-image: linear-gradient(#548abf, #295b9e);
}

.application-icon a:before, .application-icon a:after {
  content: '\f100';
}
.application-icon a:after {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzU0OGFiZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzI5NWI5ZSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #548abf), color-stop(100%, #295b9e));
  background-image: -moz-linear-gradient(#548abf, #295b9e);
  background-image: -webkit-linear-gradient(#548abf, #295b9e);
  background-image: linear-gradient(#548abf, #295b9e);
}

.social-links {
  display: block;
}
.social-links a {
  display: block;
  text-indent: -9999px;
  font-size: 0;
  line-height: 0;
}
.social-links a:before, .social-links a:after {
  -moz-transition: all 0.4s ease-in-out 0.1s;
  -o-transition: all 0.4s ease-in-out 0.1s;
  -webkit-transition: all 0.4s ease-in-out;
  -webkit-transition-delay: 0.1s;
  transition: all 0.4s ease-in-out 0.1s;
  width: 80px;
  height: 200px;
  position: absolute;
  text-indent: 0;
  padding-top: 90px;
  padding-left: 25px;
  display: block;
  font: normal 30px Genericons;
  color: #fff;
}
.social-links a:after {
  font-size: 48px;
  padding-left: 20px;
  padding-top: 80px;
  margin-left: 85px;
}

    </style>
        

    
  <div class="container">
    <ul class="accordion">
      <li class="tabs">
        <div class="social-links cloud-icon">
          <a href="#">Cloud Service</a>
        </div>
        <div class="paragraph">
          <h1>Hybrid Cloud</h1>
          <p>Microsoft in Cloud Along with Microsoft Azure has been Successfull, </p>
        </div>
      </li>
      <li class="tabs">
        <div class="social-links mobile-icon">
          <a href="#">Mobile Services</a>
        </div>
        <div class="paragraph">
          <h1>Enterprise Mobility </h1>
          <p>Microsoft has been developing Mobile app with Microsoft Xamarian</p>
        </div>
      </li>
      <li class="tabs">
        <div class="social-links portal-icon">
           <a href="#">Portals and Collaboration</a>
        </div>
        <div class="paragraph">
          <h1>Portal and Collaboration</h1>
          <p>Office 365 and Microsoft Dynamics has been very successul and giving various advantages </p>
        </div>
      </li>
      <li class="tabs">
        <div width="430px" class="social-links dev-icon">
           <a href="#">Application Development </a>
        </div>
        <div class="paragraph">
          <h1>Application Development , Integration and Lifecycle Mangement</h1>
          <p>Office 365 and Microsoft Dynamics has been very successul and giving various advantages </p>
        </div>
      </li>
      
      
      <li class="tabs">
        <div class="social-links bigdata-icon">
           <a href="#">Big Data and Analytics</a>
        </div>
        <div class="paragraph">
          <h1>Big Data and Analytics</h1>
          <p>Office 365 and Microsoft Dynamics has been very successul and giving various advantages </p>
        </div>
      </li>
      
      <li class="tabs">
        <div class="social-links data-icon">
           <a href="#">Data Platform</a>
        </div>
        <div class="paragraph">
          <h1>Data Platform</h1>
          <p>Office 365 and Microsoft Dynamics has been very successul and giving various advantages </p>
        </div>
      </li>
      
      <li class="tabs">
        <div class="social-links application-icon">
           <a href="#">Business Applications</a>
        </div>
        <div class="paragraph">
          <h1>Business Applications</h1>
          <p>Office 365 and Microsoft Dynamics has been very successul and giving various advantages </p>
        </div>
      </li>
      
      
    </ul>
  </div>
  
  <script src="prefixfree.min-a2279db4c4c421e9795be3e1713aff75.js"></script>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../../css/main.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/component.css"/>