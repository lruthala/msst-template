<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Chat Bot | Miracle</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">
    <link href="../../css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/default.css" />
    <link rel="stylesheet" type="text/css" href="../../css/component.css" />
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../images/favicon.ico">
    <link rel="stylesheet" media="all" href="css/chat1.css" />
<link rel="stylesheet" media="all" href="box.css" />
<link rel="stylesheet" media="all" href="twilight.css" />
<style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Lato:400,700);
*, *:before, *:after {box-sizing: border-box;}li{list-style:none;}
body {background: #C5DDEB;font: 14px/20px "Lato", Arial, sans-serif;padding: 40px 0;color: white;}
.container {margin: 0 auto;width: 750px;background: #444753;border-radius: 5px;}
.people-list {width: 260px;float: left;}.people-list .search {padding: 20px;}
.people-list input {border-radius: 3px;border: none;padding: 14px;color: white;background: #6A6C75;width: 90%;font-size: 14px;}
.people-list .fa-search {position: relative;left: -25px;}.people-list ul {padding: 20px;height: 760px;}
.people-list ul li {padding-bottom: 20px;}.people-list img {float: left;}.people-list .about {float: left;margin-top: 8px;}
.people-list .about {
  padding-left: 8px;
}
.people-list .status {
  color: #92959E;
}

.chat {
  width: 490px;
  float: left;
  background: #F2F5F8;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  color: #434651;
}
.chat .chat-header {
  padding: 20px;
  border-bottom: 2px solid white;
}
.chat .chat-header img {
  float: left;
}
.chat .chat-header .chat-about {
  float: left;
  padding-left: 10px;
  margin-top: 6px;
}
.chat .chat-header .chat-with {
  font-weight: bold;
  font-size: 16px;
}
.chat .chat-header .chat-num-messages {
  color: #92959E;
}
.chat .chat-header .fa-star {
  float: right;
  color: #D8DADF;
  font-size: 20px;
  margin-top: 12px;
}
.chat .chat-history {
  padding: 30px 30px 20px;
  border-bottom: 2px solid white;
  overflow-y: scroll;
  height: 575px;
}
.chat .chat-history .message-data {
  margin-bottom: 15px;
}
.chat .chat-history .message-data-time {
  color: #a8aab1;
  padding-left: 6px;
}
.chat .chat-history .message {
  color: white;
  padding: 18px 20px;
  line-height: 26px;
  font-size: 16px;
  border-radius: 7px;
  margin-bottom: 30px;
  width: 90%;
  position: relative;
}
.chat .chat-history .message:after {
  bottom: 100%;
  left: 7%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #86BB71;
  border-width: 10px;
  margin-left: -10px;
}
.chat .chat-history .my-message {
  background: #86BB71;
}
.chat .chat-history .other-message {
  background: #94C2ED;
}
.chat .chat-history .other-message:after {
  border-bottom-color: #94C2ED;
  left: 93%;
}
.chat .chat-message {
  padding: 30px;
}
.chat .chat-message textarea {
  width: 100%;
  border: none;
  padding: 10px 20px;
  font: 14px/22px "Lato", Arial, sans-serif;
  margin-bottom: 10px;
  border-radius: 5px;
  resize: none;
}
.chat .chat-message .fa-file-o, .chat .chat-message .fa-file-image-o {
  font-size: 16px;
  color: gray;
  cursor: pointer;
}
.chat .chat-message button {
  float: right;
  color: #94C2ED;
  font-size: 16px;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
  font-weight: bold;
  background: #F2F5F8;
}
.chat .chat-message button:hover {
  color: #75b1e8;
}

.online, .offline, .me {
  margin-right: 3px;
  font-size: 10px;
}

.online {
  color: #86BB71;
}

.offline {
  color: #E38968;
}

.me {
  color: #94C2ED;
}

.align-left {
  text-align: left;
}

.align-right {
  text-align: right;
}

.float-right {
  float: right;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
</style>
    <style>
        .tinted-image {
            background: /* top, transparent red */
            linear-gradient( rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), /* your image */
            url("images/code.png");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
        label {
            font-weight: 600;
        }
        
        .text-dark,
        .text-dark:hover,
        a.text-dark,
        a.text-dark:hover,
        a.text-dark:focus {
            background-color: #232527;
            color: #fff !important;
        }
        
        .emerald {
            background-color: #0d416b !important;
        }
        
        .container .left input {
            float: left;
            width: 188px;
            height: 42px;
            padding: 0 15px;
            border: 1px solid #e6e6e6;
            background-color: #eceff1;
            -moz-border-radius: 21px;
            -webkit-border-radius: 21px;
            border-radius: 21px;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
        }
        
        .container .left input:focus {
            outline: none;
        }
        
        .container .left a.search {
            display: block;
            float: left;
            width: 42px;
            height: 42px;
            margin-left: 10px;
            border: 1px solid #e6e6e6;
            background-color: #00b0ff;
            background-image: url("http://s11.postimg.org/dpuahewmn/name_type.png");
            background-repeat: no-repeat;
            background-position: top 12px left 14px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        
        .container .left .people {
            margin-left: -1px;
            border-right: 1px solid #e6e6e6;
            border-left: 1px solid #e6e6e6;
            width: -moz-calc(100% + 2px);
            width: -webkit-calc(100% + 2px);
            width: -o-calc(100% + 2px);
            width: calc(100% + 2px);
        }
        
        .container .left .people .person {
            position: relative;
            width: 100%;
            padding: 12px 10% 16px;
            cursor: pointer;
            background-color: #fff;
        }
        
        .container .left .people .person:after {
            position: absolute;
            bottom: 0;
            left: 50%;
            display: block;
            width: 80%;
            height: 1px;
            content: '';
            background-color: #e6e6e6;
            -moz-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }
        
        .container .left .people .person img {
            float: left;
            width: 40px;
            height: 40px;
            margin-right: 12px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        
        .container .left .people .person .name {
            font-size: 14px;
            line-height: 22px;
            color: #1a1a1a;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
        }
        
        .container .left .people .person .time {
            font-size: 14px;
            position: absolute;
            top: 16px;
            right: 10%;
            padding: 0 0 5px 5px;
            color: #999;
            background-color: #fff;
        }
        
        .container .left .people .person .preview {
            font-size: 14px;
            display: inline-block;
            overflow: hidden !important;
            width: 70%;
            white-space: nowrap;
            text-overflow: ellipsis;
            color: #999;
        }
        
        .container .left .people .person.active,
        .container .left .people .person:hover {
            margin-top: -1px;
            margin-left: -1px;
            padding-top: 13px;
            border: 0;
            background-color: #00b0ff;
            width: -moz-calc(100% + 2px);
            width: -webkit-calc(100% + 2px);
            width: -o-calc(100% + 2px);
            width: calc(100% + 2px);
            padding-left: -moz-calc(10% + 1px);
            padding-left: -webkit-calc(10% + 1px);
            padding-left: -o-calc(10% + 1px);
            padding-left: calc(10% + 1px);
        }
        
        .container .left .people .person.active span,
        .container .left .people .person:hover span {
            color: #fff;
            background: transparent;
        }
        
        .container .left .people .person.active:after,
        .container .left .people .person:hover:after {
            display: none;
        }
        
        .container .right {
            position: relative;
            float: left;
            width: 62.4%;
            height: 100%;
        }
        
        .container .right .top {
            width: 100%;
            height: 47px;
            padding: 15px 29px;
            background-color: #eceff1;
        }
        
        .container .right .top span {
            font-size: 15px;
            color: #999;
        }
        
        .container .right .top span .name {
            color: #1a1a1a;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
        }
        
        .container .right .chat {
            position: relative;
            display: none;
            overflow: hidden;
            padding: 0 35px 92px;
            border-width: 1px 1px 1px 0;
            border-style: solid;
            border-color: #e6e6e6;
            height: -moz-calc(100% - 48px);
            height: -webkit-calc(100% - 48px);
            height: -o-calc(100% - 48px);
            height: calc(100% - 48px);
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            -webkit-flex-direction: column;
            flex-direction: column;
        }
        
        .container .right .chat.active-chat {
            display: block;
            display: -webkit-flex;
            display: flex;
        }
        
        .container .right .chat.active-chat .bubble {
            -moz-transition-timing-function: cubic-bezier(0.4, -0.04, 1, 1);
            -o-transition-timing-function: cubic-bezier(0.4, -0.04, 1, 1);
            -webkit-transition-timing-function: cubic-bezier(0.4, -0.04, 1, 1);
            transition-timing-function: cubic-bezier(0.4, -0.04, 1, 1);
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(1) {
            -moz-animation-duration: 0.15s;
            -webkit-animation-duration: 0.15s;
            animation-duration: 0.15s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(2) {
            -moz-animation-duration: 0.3s;
            -webkit-animation-duration: 0.3s;
            animation-duration: 0.3s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(3) {
            -moz-animation-duration: 0.45s;
            -webkit-animation-duration: 0.45s;
            animation-duration: 0.45s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(4) {
            -moz-animation-duration: 0.6s;
            -webkit-animation-duration: 0.6s;
            animation-duration: 0.6s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(5) {
            -moz-animation-duration: 0.75s;
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(6) {
            -moz-animation-duration: 0.9s;
            -webkit-animation-duration: 0.9s;
            animation-duration: 0.9s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(7) {
            -moz-animation-duration: 1.05s;
            -webkit-animation-duration: 1.05s;
            animation-duration: 1.05s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(8) {
            -moz-animation-duration: 1.2s;
            -webkit-animation-duration: 1.2s;
            animation-duration: 1.2s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(9) {
            -moz-animation-duration: 1.35s;
            -webkit-animation-duration: 1.35s;
            animation-duration: 1.35s;
        }
        
        .container .right .chat.active-chat .bubble:nth-of-type(10) {
            -moz-animation-duration: 1.5s;
            -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
        }
        
        .container .right .write {
            position: absolute;
            bottom: 29px;
            left: 30px;
            height: 42px;
            padding-left: 8px;
            border: 1px solid #e6e6e6;
            background-color: #eceff1;
            width: -moz-calc(100% - 58px);
            width: -webkit-calc(100% - 58px);
            width: -o-calc(100% - 58px);
            width: calc(100% - 58px);
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        
        .container .right .write input {
            font-size: 16px;
            float: left;
            width: 347px;
            height: 40px;
            padding: 0 10px;
            color: #1a1a1a;
            border: 0;
            outline: none;
            background-color: #eceff1;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
        }
        
        .container .right .write .write-link.attach:before {
            display: inline-block;
            float: left;
            width: 20px;
            height: 42px;
            content: '';
            background-image: url("http://s1.postimg.org/s5gfy283f/attachemnt.png");
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .container .right .write .write-link.smiley:before {
            display: inline-block;
            float: left;
            width: 20px;
            height: 42px;
            content: '';
            background-image: url("http://s14.postimg.org/q2ug83h7h/smiley.png");
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .container .right .write .write-link.send:before {
            display: inline-block;
            float: left;
            width: 20px;
            height: 42px;
            margin-left: 11px;
            content: '';
            background-image: url("http://s30.postimg.org/nz9dho0pp/send.png");
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .container .right .bubble {
            font-size: 16px;
            position: relative;
            display: inline-block;
            clear: both;
            margin-bottom: 8px;
            padding: 13px 14px;
            vertical-align: top;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        
        .container .right .bubble:before {
            position: absolute;
            top: 19px;
            display: block;
            width: 8px;
            height: 6px;
            content: '\00a0';
            -moz-transform: rotate(29deg) skew(-35deg);
            -ms-transform: rotate(29deg) skew(-35deg);
            -webkit-transform: rotate(29deg) skew(-35deg);
            transform: rotate(29deg) skew(-35deg);
        }
        
        .container .right .bubble.you {
            float: left;
            color: #fff;
            margin-left: 15px;
            background-color: #00b0ff;
            -webkit-align-self: flex-start;
            align-self: flex-start;
            -moz-animation-name: slideFromLeft;
            -webkit-animation-name: slideFromLeft;
            animation-name: slideFromLeft;
        }
        
        .bubble.you:before {
            left: -3px;
            background-color: #00b0ff;
        }
        
        .bubble.me {
            float: right;
            margin-right: 15px;
            color: #1a1a1a;
            background-color: #eceff1;
            -webkit-align-self: flex-end;
            align-self: flex-end;
            -moz-animation-name: slideFromRight;
            -webkit-animation-name: slideFromRight;
            animation-name: slideFromRight;
        }
        
        .bubble.me:before {
            right: -3px;
            background-color: #eceff1;
        }
        
        .conversation-start {
            position: relative;
            width: 100%;
            margin-bottom: 27px;
            text-align: center;
        }
        
        .conversation-start span {
            font-size: 14px;
            display: inline-block;
            color: #999;
        }
        
        .conversation-start span:before,
        .container .right .conversation-start span:after {
            position: absolute;
            top: 10px;
            display: inline-block;
            width: 30%;
            height: 1px;
            content: '';
            background-color: #e6e6e6;
        }
        
        .conversation-start span:before {
            left: 0;
        }
        
        .conversation-start span:after {
            right: 0;
        }
        
        @keyframes slideFromLeft {
            0% {
                margin-left: -200px;
                filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
            }
            100% {
                margin-left: 0;
                filter: progid: DXImageTransform.Microsoft.Alpha(enabled=false);
                opacity: 1;
            }
        }
        
        @-webkit-keyframes slideFromLeft {
            0% {
                margin-left: -200px;
                filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
            }
            100% {
                margin-left: 0;
                filter: progid: DXImageTransform.Microsoft.Alpha(enabled=false);
                opacity: 1;
            }
        }
        
        @keyframes slideFromRight {
            0% {
                margin-right: -200px;
                filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
            }
            100% {
                margin-right: 0;
                filter: progid: DXImageTransform.Microsoft.Alpha(enabled=false);
                opacity: 1;
            }
        }
        
        @-webkit-keyframes slideFromRight {
            0% {
                margin-right: -200px;
                filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
            }
            100% {
                margin-right: 0;
                filter: progid: DXImageTransform.Microsoft.Alpha(enabled=false);
                opacity: 1;
            }
        }
    </style>
    <style type="text/css">
        .display-1 {
            font-size: 3rem !important;
        }
        
        .card {
            overflow: hidden;
            height: 100% !important;
        }
        
        .card-block .rotate {
            z-index: 8;
            float: right;
            height: 100% !important;
        }
        
        .card-block .rotate i {
            color: rgba(20, 20, 20, 0.15);
            position: absolute;
            left: 0;
            left: auto;
            right: -10px;
            bottom: 0;
            display: block;
            -webkit-transform: rotate(-44deg);
            -moz-transform: rotate(-44deg);
            -o-transform: rotate(-44deg);
            -ms-transform: rotate(-44deg);
            transform: rotate(-44deg);
        }
    </style>
    <style>
        .breadcrumb {
            margin: 0px !important;
        }
        
        .breadcrumb li,
        .breadcrumb li a {
            color: #FFF !important;
        }
        
        .text-dark,
        .text-dark:hover,
        a.text-dark,
        a.text-dark:hover,
        a.text-dark:focus {
            background-color: #232527;
            color: #fff;
        }
        
        .card {
            border: 0px !important;
        }
        
        .emerald {
            background-color: #0d416b !important;
            width: 100%;
        }
        
        .list-inline {
            margin-left: 0px!important;
            list-style: none;
        }
        
        #services1 {
            background-image: url('')
        }
        
        .chat {
            border: 1px solid #eeeeee;
            height: 500px;
        }
        
        .msg-left-blue {
            background-color: #00aae7;
            height: 80px;
        }
        
        .msg-left-blue:hover {
            background-color: #1ac2ff;
        }
        
        .msg-left-blue:hover ~ .msg-left-blue {
            background-color: #1ac2ff;
        }
        
        .blu2:hover ~ .blu1 {
            background-color: #1ac2ff !important;
        }
        
        .msg-left-midblue {
            background-color: #2368a0;
            height: 80px;
        }
        
        .msg-left-darkblue {
            background-color: #0d416b;
            height: 80px;
        }
        
        .msg-left-grey {
            background-color: #8c8c8c;
            height: 80px;
        }
        
        .server-msg {
            background-color: #eeeeee;
            bottom: 60px !important;
            position: absolute;
            padding: 10px 10px 0;
            left: 15px;
            background-color: #00aae7;
            color: #ffffff;
        }
        
        .user-msg {
            background-color: #eeeeee;
            bottom: 120px !important;
            position: absolute;
            right: 15px;
            padding: 10px 10px 0;
        }
        
        .user-msg:after {
            content: "";
            position: absolute;
            left: 100%;
            top: 37%;
            width: 0;
            height: 0;
            border-top: 4px solid transparent;
            border-left: 7px solid #eeeeee;
            border-bottom: 6px solid transparent;
        }
        
        .user-msg2 {
            background-color: #eeeeee;
            bottom: 70px !important;
            position: absolute;
            right: 15px;
            padding: 10px 10px 0;
        }
        
        .user-msg1:after {
            content: "";
            position: absolute;
            left: 100%;
            top: 37%;
            width: 0;
            height: 0;
            border-top: 4px solid transparent;
            border-left: 7px solid #eeeeee;
            border-bottom: 6px solid transparent;
        }
        
        .server-msg:after,
        .server-msg:before {
            right: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }
        
        .server-msg:after {
            border-color: rgba(136, 183, 213, 0);
            border-right-color: #00aae7;
            border-width: 6px;
            margin-top: -6px;
        }
        
        .server-msg:before {
            border-color: rgba(194, 225, 245, 0);
            border-right-color: #00aae7;
            border-width: 0;
            margin-top: 0;
        }
        
        .user-msg1 {
            background-color: #eeeeee;
            bottom: 10px !important;
            position: absolute;
            right: 15px;
            padding: 10px 10px 0;
        }
        
        h5 {
            color: #ffffff !important;
        }
    </style>
    <style>
    .spinner {
            width: 70px;
            text-align: center;
            position: static !important;
            bottom: 0px !important;
        }
        
        .spinner > div {
            width: 10px;
            height: 10px;
            background-color: #0d416b;
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }
        
        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }
        
        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }
        
        @-webkit-keyframes sk-bouncedelay {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0)
            }
            40% {
                -webkit-transform: scale(1.0)
            }
        }
        
        @keyframes sk-bouncedelay {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }
        
        #message1,
        #message2,
        #message3,
        #message4,
        #message5,
        #message6 {
            display: none;
        }
    
    
    
   
    
    .left-black{
        background-color:#232527 !important;
    }
    .left-black:hover{
        background-color:#8c8c8c !important;
        
    }
     .left-blue{
         background-color: #00aae7 !important;
        
    }
    .left-blue:hover{
       background-color:  rgba(0, 170, 231, 0.70) !important;
          
        
    }
     .left-blue2{
         background-color: #0d416b !important;
        
    }
    .left-blue2:hover{
         background-color: rgba(13, 65, 107, 0.70) !important;
        
    }
    .left-red{
        background-color:#ef4048 !important;
    }
    .left-red:hover{
        background-color: rgba(234, 64, 72, 0.80) !important;
    }
    </style>
</head>
<!--/head-->
<?php include '../../header.php';?>

    <body>
        <section id="services">
            <br>
            <br>
            <br>
            <div class="emerald tinted-image">
                <div class="container ">
                    <div class="row">
                        <br>
                        <br>
                        <br>
                        <div class="col-sm-6 text-left">
                            <h1 class="heavy micro">API Management Offerings</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="../">Home</a></li>
                                <li><a href="../technologies/">Technologies</a></li>
                                <li class="active">API Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </section>
        <section id="services1" class="container">
            <div class="row">
                <br>
                <div class="col-sm-12">
                    <div class="col-sm-4 chat">
                        
                        <div class="row left-blue" id="left1">

                            <div class="col-sm-4 ">
                                <img src="images/user.png" alt="user"  class="img-responsive" style="padding:12px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="heavy">Watson Bot1</h5>
                                <h6 class="heavy"><font color="#ffffff">Offline</font></h6>
                            </div>
                        </div>

                        <div class="row left-blue2" id="left2">
                            <div class="col-sm-4">
                                <img src="images/user.png" alt="user" class="img-responsive" style="padding:12px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="heavy">Watson Bot2</h5>
                                <h6 class="heavy"><font color="#ffffff">Offline</font></h6>
                            </div>
                        </div>
                        <div class="row left-black" id="left3">
                            <div class="col-sm-4">
                                <img src="images/user.png" alt="user" class="img-responsive" style="padding:12px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="heavy">Watson Bot3</h5>
                                <h6 class="heavy"><font color="#ffffff">Offline</font></h6>
                            </div>
                        </div>
                        <div class="row left-red" id="left4">
                            <div class="col-sm-4">
                                <img src="images/user.png" alt="user" class="img-responsive" style="padding:12px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="heavy">Watson Bot4</h5>
                                <h6 class="heavy"><font color="#ffffff">Offline</font></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="row container">
                                <div class="col-sm-12 ">
                                    <div style="padding:10px 10px 5px 10px; background-color:#eeeeee;">

                                        <p class="methodText">Conversation Bot UI Template</p>
                                    </div>
                                </div>
                                <div id="chat-window" style="margin-top:45%">

                                    <div class="row container right" style="float:right;margin-right:8px" id="message1">

                                        <div class="col-sm-6 bubble me">
                                            hai
                                        </div>
                                    </div>
                                    <div class="row container right" style="float:left;margin-left:8px" id="message2">

                                        <div class="col-sm-6 bubble you">
                                            hai
                                        </div>
                                    </div>
                                    <div class="row container right" style="float:right;margin-right:8px" id="message3">

                                        <div class="col-sm-6 bubble me">
                                            hai
                                        </div>
                                    </div>
                                    <div class="row container right" style="float:left;margin-left:8px" id="message4">

                                        <div class="col-sm-6 bubble you">
                                            hai
                                        </div>
                                    </div>
                                    <div class="row container right" style="float:right;margin-right:8px" id="message5">

                                        <div class="col-sm-6   bubble me">
                                            hai
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                </div>

                <link rel="stylesheet" href="../../css/box.css">

                <script src="js/query.js"></script>
                <script src="js/bootstrap.js"></script>

                <script src="js/jquery-2.2.0.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="css/index.js"></script>
                <script src="js/plugins.js"></script>

                <script src="js/app.js"></script>
                <script>
                    var flag = 0;
                    var stage=1;
                    var messages=[];
                    var messages1 = ["Hai I'm Watson Bot One", "How are you ?", "I'm Fine", "how about you ?", "Fine, Thank you ", "Nice to meet you"];
                    var messages2 = ["Hai I'm Watson Bot two", "How are you ?", "I'm Fine", "how about you ?", "Fine, Thank you ", "Nice to meet you"];
                    var messages3 = ["Hai I'm Watson Bot three", "How are you ?", "I'm Fine", "how about you ?", "Fine, Thank you ", "Nice to meet you"];
                    var messages4 = ["Hai I'm Watson Bot four", "How are you ?", "I'm Fine", "how about you ?", "Fine, Thank you ", "Nice to meet you"];
                    var timeouts = [];
                    var i = 0;

                    function getMessage() {
                  
                        return messages[i];
                        
                    }

                    function toggleFlag() {
                        if (flag == 0)
                            flag = 1;
                        else
                            flag = 0;
                    }
                    loadMessages(messages1);
                    flag=1;
                    $("#left1").click(function(){
                        
                        if(1){
                        loadMessages(messages1);
                        toggleFlag();
                        }
                        else{
                            alert("please wait")
                        }
                        
                    });
                    $("#left2").click(function(){
                         if(1){
                        $(".left-blue2").css("background-color", "red");
                        loadMessages(messages2);
                        toggleFlag();
                        
                        }
                        else{
                            alert("please wait")
                        }
                        
                       
                    });
                    $("#left3").click(function(){
                          if(1){
                        loadMessages(messages3);
                        toggleFlag();
                        }
                        else{
                            alert("please wait")
                        }
                        
                    });
                    $("#left4").click(function(){
                         if(1){
                        loadMessages(messages4);
                        toggleFlag();
                        }
                        else{
                            alert("please wait")
                        }
                        
                    });
                    
                    function loadMessages(messages_array){
                        var highestTimeoutId = setTimeout(";");
for (var i = 0 ; i < highestTimeoutId ; i++) {
    clearTimeout(i); 
}
                        flag=1;
                        $("#chat-window").html("");
                        $("#chat-window").css('margin-top','45%');
                    messages=messages_array;
                    
                    setTimeout(function() {
                  
                        var message = '<div class="row container right" style="float:left;margin-right:8px">' +
                            '<div class="col-sm-6 bubble you" id="div1">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div1').html(messages[0]);
                        }, 2000);
                    }, 1000);

                    setTimeout(function() {

                        $("#chat-window").css('margin-top', '40%')
                        var message = '<div class="row container right" style="float:right;margin-left:8px">' +
                            '<div class="col-sm-6 bubble me" id="div2">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +

                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div2').html(messages[1]);
                        }, 2000);
                        $("#chat-window").css('margin-top', '40%')
                    }, 4000);

                    setTimeout(function() {

                      
                        var message = '<div class="row container right" style="float:left;margin-right:8px">' +
                            '<div class="col-sm-6 bubble you" id="div3">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div3').html(messages[2]);
                        }, 2000);
                        $("#chat-window").css('margin-top', '30%')
                    }, 7000);

                    setTimeout(function() {

                   
                        var message = '<div class="row container right" style="float:right;margin-left:8px">' +
                            '<div class="col-sm-6 bubble me" id="div4">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div4').html(messages[3]);
                        }, 2000);
                        $("#chat-window").css('margin-top', '20%')
                    }, 10000);
                    setTimeout(function() {

                     
                        var message = '<div class="row container right" style="float:left;margin-right:8px">' +
                            '<div class="col-sm-6 bubble you" id="div5">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div5').html(messages[4]);
                        }, 2000);
                        $("#chat-window").css('margin-top', '10%')
                    }, 13000);
                    setTimeout(function() {

                        var message = '<div class="row container right" style="float:right;margin-left:8px">' +
                            '<div class="col-sm-6 bubble me" id="div6">' +
                            '<div class="spinner">' +
                            '<div class="bounce1"></div>' +
                            '<div class="bounce2"></div>' +
                            '<div class="bounce3"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#chat-window").append(message);
                        setTimeout(function() {
                            $('#div6').html(messages[5]);
                            toggleFlag();
                            if(stage==1){
                                stage=2;
                                loadMessages(messages2);
                            }
                            else if(stage==2){
                                stage=3;
                                loadMessages(messages3);
                            }
                            else if(stage==3){
                                stage=4;
                                loadMessages(messages4);
                            }
                            else if(stage==4){
                                stage=1;
                                loadMessages(messages1);
                            }
                        }, 2000);
                        $("#chat-window").css('margin-top', '0%')
                    }, 16000);
                    }
                </script>

        </section>
        <br>
        <!--/#about-us-->
        <?php include '../../footer.php';?>
    </body>

</html>