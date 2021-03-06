@charset "UTF-8";
/* CSS Document */

/**
* Custom CSS by Forumthemes.com
*/

/************************************************************************/
*{ -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }

#forums *, #wgo *, #forumbits * {
	-moz-border-radius: 0 !important;
	-webkit-border-radius: 0 !important;
}
.wgo_block {
	margin:0;
}
#fb_headerbox {
	padding-right:5px;
}
.cvb_facebook {
padding-top:2px;
}
.navbar {
	-moz-border-radius-bottomleft: 0 !important;
	-moz-border-radius-bottomright: 0 !important;
	-webkit-border-bottom-left-radius: 0 !important;
	-webkit-border-bottom-right-radius: 0 !important;
}
.announcements {
	margin-top:10px;
}
.highlight {
	background-image:none;
}
.navlinksBox {
	text-align: center;
	color: #5d5d5d;
	font-size: 11px;
        font-weight:700;
        margin-top: 8px;
        margin-bottom: 0;
        width:100%;
        clear:both;
}
.navlinksBoxWrap {
	padding: 10px 0;
}
.bodyWrap {
	background:#fff;
	margin:0 2px;	
}
.body_wrapper {
	padding:10px 0;
	margin:0;
}
.above_body {
	padding:0;
	margin:0;
}
.threadbit .sticky, .threadbit .nonthread, .threadbit .nonsticky, .threadbit .deleted, .threadbit .discussionrow, .threadbit .ignored {
	border-top:0;
}
.popupbody li > a,
.popupbody li > label {
	padding:8px 10px;
}
.formsubmit label {
	color:#3E3E3E;
}
body {
	text-align:left;
}
#memberlist #searchstats {color:#fff;}
.footer {
margin:0;
padding:0;
}

/* Misc Resets
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
img {
	border:0;
}
.verticalAlign {
	vertical-align:middle;
}
.clearfix:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
.clearfix {
	display: inline-block;
}
html[xmlns] .clearfix {
	display: block;
}
* html .clearfix {
	height: 1%;
}
.lastPostIMG {
	position:relative;
	top:2px;
}

/* Page Wrapper
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
body {
	width:auto;
	min-width:990px;
	max-width:auto;
	margin: 0;
	text-align:left;
}
#pageWrapper {

}
.skinWrap, .footerWrap {
	margin:0px 50px 0px 50px;
	width:auto;
	padding:0;
}
.cvb_facebook {
	position:absolute;
	top:17px;
	right:20px;
	z-index:3000;
}

/* Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.above_body {
	background:none;

}
.doc_header {
	background:url(images/styles/HighlightGreen/style/headerBG_left.png) no-repeat top left;
	height:222px;
	position:relative;
}
#headerMain {
	height:222px;
}
#logo {
	position:absolute;
	top:0;
	left:0;
}
#loginBox {
	position:absolute;
	top:130px;
	left:15px;
}
.topWelcome {

	padding:0 0 13px 15px;

	color:#8a93a2;
	font-size:15px;
	font-weight:400;
}
.topWelcome strong {
	color:#fff;
}
.topWelcome a:link, .topWelcome a:visited {
	color:#ffe88b;
}
.topWelcome a:hover {
	color:#fff;
}
.memberBox {
	background:url(images/styles/HighlightGreen/style/memberBoxBG.gif) repeat-x top left;
	height:44px;
	line-height:44px;
}
.memberBoxLeft {
	background:url(images/styles/HighlightGreen/style/memberBoxLeft.gif) no-repeat top left;
	height:44px;
}
.memberBoxRight {
	background:url(images/styles/HighlightGreen/style/memberBoxRight.gif) no-repeat top right;
	height:44px;
	padding:0 10px;
}
.memberBox .toplinks ul.isuser .popupbody li {
	color:#3a3a3a;
}
.memberBox ul {
	list-style:none;
	padding:0;
	margin:0;
}
.memberBox li {
	float:left;
	margin:0;	
	padding:0 3px;	
}
.loginBoxInput {
	background:url(images/styles/HighlightGreen/style/loginBoxInput.gif) no-repeat top left;
	width:129px;
	height:28px;
}
.loginInput {
	background:transparent;
	border:0;
	color: #8e9fb3;
	font-size:12px;
	width:119px; 
	padding:0 5px;
	height:28px;
	line-height:28px;
}
.rememberMe {color:#959595;}
.memberBox .rememberMe {}
.memberBox .rememberMe input {
	vertical-align: baseline;
}
.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}
.inputPad .loginBoxInput {
	margin-top:8px;
}
.inputPad {
	padding:0 4px;	
}
.submitPad input {
	margin:8px 0 0 0;
	padding:0;
}
.loginTxt {
	padding-left:5px;
	color:#fff;
	font-weight:700;
}
.loginLeft {
float:left;
}
.searchBox {
	background:url(images/styles/HighlightGreen/style/searchBox.gif) no-repeat top left;
	width:250px;
	height:109px;
	position:absolute;
	top:116px;
	right:21px;
	padding:0 15px;
}
.searchBox h3 {
	background:url(images/styles/HighlightGreen/style/iconSearchBox.gif) no-repeat left;
	padding-left:28px;
	margin:0;
	font-size:15px;
	font-weight:400;
	color:#f7f7f7;
	height:44px;
	line-height:44px;
	text-align:left
}
.searchBoxInput {
	background: url(images/styles/HighlightGreen/style/searchInput.gif) no-repeat top left;
	width:197px;
	height:30px;
	float:left;
}
.searchinput {
	border:0;
	background:transparent;
	color: #959595;
	width:187px; 
	height:30px;
	line-height:30px;
	font-size:12px;
	margin:0;
	padding:0 5px;
}
.searchButton {
	float:right;
}
.searchBox .searchBox_advanced_search {
	position:absolute;
	top:83px;
	right:15px;
}
.searchBox .searchBox_advanced_search a:link, .searchBox .searchBox_advanced_search a:visited {
	color:#e1d59c;
	color:#e1d59c;
	font-weight:700;
	font-size:12px;
}
.searchBox .searchBox_advanced_search a:hover {
	color:#fff;
}

/* Content
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#contentBody {
	background:#dfe5e9;
}
#contentMain {
	background:#fff url(images/styles/HighlightGreen/style/contentBottomBG.gif) repeat-x bottom left;
	margin-bottom:30px;
}
.contentWrap {
	background:url(images/styles/HighlightGreen/style/contentTopBG.gif) repeat-x top left;
}
.contentLeft {
	background:url(images/styles/HighlightGreen/style/contentLeft.gif) repeat-y top left;
}
.contentRight {
	background:url(images/styles/HighlightGreen/style/contentRight.gif) repeat-y top right;
}
.contentTL {
	background:url(images/styles/HighlightGreen/style/contentTL.gif) no-repeat top left;
}
.contentTR {
	background:url(images/styles/HighlightGreen/style/contentTR.gif) no-repeat top right;
}
.contentBL {
	background:url(images/styles/HighlightGreen/style/contentBL.gif) no-repeat bottom left;
}
.contentBR {
	background:url(images/styles/HighlightGreen/style/contentBR.gif) no-repeat bottom right;
}
.contentBody {
	padding:9px 12px 13px 12px;
}

/* Footer Main
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#footerMain {
	background:#181c20 url(images/styles/HighlightGreen/style/footerBG.gif) repeat-x top left;
	padding-top:32px;
	clear:both;
}
.footerWrap {
	background:url(images/styles/HighlightGreen/style/footerWrapBG.gif) no-repeat top right;
	position:relative;
}
#footerLogo {
	position:absolute;
	top:0;
	right:23px;
}
.copyright {
	line-height:18px;
	font-weight:400;
	color:#d1d7db;

	padding:17px 0 17px 15px;

text-align:left;
}
.copyright a:link, .copyright a:visited {
	color:#ffdb43;
	font-weight:700;

}
.copyright a:hover {
	color:rgb(255, 255, 255);
}

/* Footer Navigation
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#footerNav {
	font-size:14px;
	line-height:54px;
	font-weight:700;
	padding:0;
	float:left;
}
.footerNavBox {
	background:url(images/styles/HighlightGreen/style/footerNavBox.gif) repeat-x top left;
	height:54px;
}
.footerNavLeft {
	background:url(images/styles/HighlightGreen/style/footerNavLeft.gif) no-repeat top left;
	height:54px;
}
.footerNavRight {
	background:url(images/styles/HighlightGreen/style/footerNavRight.gif) no-repeat top right;
	height:54px;
}
#footerNav ul {
	list-style:none;
	padding:0;
	margin:0;
}
#footerNav li {
	background:url(images/styles/HighlightGreen/style/footerNavSplit.gif) no-repeat top right;
	float:left;
	padding:0 20px;	
}
#footerNav .nobg {
	background:none;
}
#footerNav a:link, #footerNav a:visited {
	color:#fdfeff;
}
#footerNav a:hover {
	color:#ffdb43;
}

/* Navbar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#navigation {
	height:72px;

	padding:0 4px 0 299px

}
.navbar {
	background: url(images/styles/HighlightGreen/style/navBG.gif) repeat-x left top;
	position:relative;
	height:72px;
	font:   12px arial, helvetica, sans-serif;
	color:#fff;
	width:100%;
	padding:0;
	margin:0;
}
.navLeft {
	background:url(images/styles/HighlightGreen/style/navLeft_left.gif) no-repeat top left;
	height:72px;
}
.navRight {
	background:url(images/styles/HighlightGreen/style/navRight_left.gif) no-repeat top right;
	height:72px;
	padding:0 12px;
}
#navtabs li.selected ul.floatcontainer {
	margin-top:3px;
}
#navtabs li.selected ul.floatcontainer a:link, #navtabs li.selected ul.floatcontainer a:visited {
	line-height:27px;
	height:27px;
}
.navbar a { color:#fff; }
.navbar a:hover { color:#ffdb43; }

.navtabs ul li:first-child {

}
.navtabs {
	padding-left:0;
}
.navtabs ul {
	position:absolute;
	top:58px;
	left:0px;
	width:100%;
/* This is to fix RTL menu issue under Opera */
        direction:ltr;
}
.navtabs li {
	float:left;
	padding-right:2px;
	background:url(images/styles/HighlightGreen/style/navSplit.gif) no-repeat top right;
}
.navtabs li li {
	background:none;
}

.navtabs ul li {
	border-right: 0;
	position: relative;
}
.navtabs li a {
	height:58px;
	line-height:58px;
}
.navtabs li a.navtab {
	display:block;
	min-width:60px;
	width:auto !important;
	width:60px;
	_min-width:75px;
	_width:auto !important;
	_width:75px;
	text-align:center;
	color:#fff;
	font:  bold 14px arial, helvetica, sans-serif;
	text-decoration:none;
	line-height:58px;
	height:58px;
	padding:0 10px;
}
.navtabs li a.navtab:hover {
	background:#191d22 url(images/styles/HighlightGreen/style/navBG.gif) repeat center top;
	color:#ffdb43;
}
.navtabs li.selected {
	color:#ffdb43;
	height:58px;
}
.navtabs li.selected a.navtab {
	color:#ffdb43;
	position:relative;
	top:-px;
	padding-top:px;
	z-index:10;
}
.navtabs li.selected li a,
.navbar_advanced_search li a {
	text-decoration:none;
	font:   12px arial, helvetica, sans-serif;
	line-height:27px;
}
.navtabs li.selected li {
	padding:0 5px;
}
.navtabs li.selected li li {
	padding:0 2px;
}
.navtabs li.selected li a {
	color:#fff;
	font-weight:400;
	padding:2px 5px;
}

.navbar_advanced_search li {
	height:27px;
	display:block;
	clear:both;
}

.navbar_advanced_search li a {
	color:#fff;
}

.navbar_advanced_search li a:hover {
	color:#ffdb43;
	text-decoration:none;
}

.navtabs li.selected li a:hover {
	color:#ffde00;
	text-decoration:none;
}

.navtabs li.selected .popupbody li > a {
	padding:0pxpx 10px;
	text-indent: 0;
	color: ;
}

.navtabs li.selected li a.popupctrl {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;	
	border:solid px transparent;
	_border: none;
	background:transparent url(images/styles/HighlightGreen/misc/arrow.png) no-repeat right center;
	padding-right:15px;
        _background-image:url('images/styles/HighlightGreen/misc/arrow.gif');
	color:#fff;
}

.navtabs li.selected li:hover a.popupctrl.active,
.navtabs li.selected li a.popupctrl.active,
.navtabs li.selected li a:hover.popupctrl {
	color:#fff;
}

/* Breadcrumb
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.breadcrumb {
	background: url(images/styles/HighlightGreen/style/bcBG.gif) repeat-x left top;
	padding:5px 8px 10px 8px;
	color:#484e58;
	font-weight:700;
	font-size:14px;
	border-bottom:1px solid #e1e2e3;
	margin-bottom:10px;
}
.breadcrumb .navbit > a, .breadcrumb .lastnavbit span {
	border:1px solid transparent;
}
.breadcrumb .navbit a:link, .breadcrumb .navbit a:visited {
	font-weight:700;
}
.breadcrumb .navbit a:hover {
	background:#48861e;
	color:#fff;
	border:1px solid transparent;
}

/* tcat Bars (Title Bars for Forum Home, Forum Display & Postbit)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.tcatBar {
	background: url(images/tcatbg.png) repeat-x left bottom;
	float: left;
	width: 100%;
	color: #22272e;
	height:51px;
	clear:both;
	margin-top: 8px;
	border:0;
	position:relative;
}
.tcatLeft {
	background: url(images/tcatleft.png) no-repeat left bottom;
	height:51px;
        padding: 0px 0px 0px 60px;
}
.tcatRight {
	background: url(images/tcatright.png) no-repeat right bottom;
	height:51px;
}
.tcatBar .forumtitle {
	font-weight:700;

}
.tcatBar .tcatDesc {
	font-size:12px;
	font-weight:400;
}
.tcatBar h2 {
	padding-left:16px;
	font:   bold 15px arial, helvetica, sans-serif;
	line-height:51px;
	float:left;
}
.tcatBar a:link, .tcatBar a:visited {
	color:#22272e;
}
.tcatBar a:hover {

}
.tcatBar .tcatCollapse {
	position:absolute;
	top:13px;
	right:10px;
}
/* tcat Thread List Controls - Forumdisplay */
.tcat_threadlist_controls {
	float:right;
	padding-right:8px;
}
.forumdisplaypopups, #forumdisplaypopups {
	clear:both;
}
.tcat_threadlist_controls h6 {
	height:51px;
	line-height:51px;
	padding:0;
	display:block;
	font-size:10pt;
}
.forumdisplaypopups a.popupctrl, .forumdisplaypopups.popupgroup .popupmenu a.popupctrl,
.postlist_popups h6 a.popupctrl, .postlist_popups.popupgroup .popupmenu h6 a.popupctrl {
	background:none;
	display:block;
	_display:51px;
	height:51px;
	line-height:51px;
	font-family:arial, helvetica, sans-serif;
	font-weight:bold;
	font-size:12px;
	font-weight:700;
	color:#22272e;
	padding:0 10px;
	border: 0;
	float: left;
	clear: right;
}
.forumdisplaypopups a:hover.popupctrl, .forumdisplaypopups.popupgroup .popupmenu a:hover.popupctrl,
.postlist_popups h6 a:hover.popupctrl, .postlist_popups.popupgroup .popupmenu h6 a:hover.popupctrl {
	border: 0;
	color:#22272e;
	text-decoration:underline;
}
#postlist_popups a, .postlist_popups a {
	color: #22272e;
	_border: none;
}
#postlist_popups a:hover, .postlist_popups a:hover {
	color: #22272e;
	text-decoration:underline;
}
#postlist_popups .popupmenu:hover a.popupctrl, #postlist_popups .popupmenu:hover .popupctrl a.popupctrl.active, .postlist_popups .popupmenu:hover a.popupctrl, .postlist_popups .popupmenu:hover .popupctrl a.popupctrl.active {
	border: 0;
}

#postlist_popups ul li {
	color: #3E3E3E;
}
#postlist_popups ul li a, .postlist_popups ul li a {
	color: #3E3E3E;
	_border: none;
}

#postlist_popups ul li a:hover, .postlist_popups ul li a:hover {
	color: #3E3E3E;
	text-decoration:underline;
}

#forumdisplaypopups ul a, .forumdisplaypopups ul a {
	color:#3E3E3E;
}

/* Thead Bars (Forum Home, Forum Display & Postbit)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.thead_bar .theadrow {
	background:#f3f5f6 url(images/styles/HighlightGreen/style/theadBG.gif) repeat-x left top;
	display:block;
	width: 100%;
	float: left;
	position:relative;
	font:  normal 12px arial, helvetica, sans-serif;
	border:1px solid #dfe5e9;
	border-bottom:1px solid #d0d5d9;
	border-top:1px solid #b6b8bb;
	color:#6a6e78;
	line-height:22px;
}
.thead_bar .padding {
	padding-left:12px;
}
.thead_bar .forumhead span.forumlastpost {
	width: 23%;
}
.thead_bar .theadrow .forumdata  {
	float: left;
}
.thead_bar {
	float: left;
	position:relative;
	width: 100%;
	display:block;
}
.thead_bar .forumhead .forumtitle {
	width: 76%;
}
.thead_bar .foruminfo {
	width: 53%;
	min-width: 30%;
	float: left;
	clear: right;
}
.thead_bar .foruminfo .forumdata {
	padding: 0;
	width: 100%;
	_width: 99%;
}
.thead_bar .forumstats, .thead_bar .forumstats_2 {
	display: block;
	float: left;
	clear: right;
	width: 16%;
	margin-right: 2%;
}
.thead_bar .foruminfo .forumdata .datacontainer {
	float: left;
	width: 86%;
	padding:0;
	padding-left: 62px;
}
.thead_bar .forumactionlinks {
	width: 5%;
	display:block;
	float:left;
	clear:right;
}
.thead_bar .forumactionlink {
	display:block;
	width:18px;
	overflow:hidden;
	float: right;
	clear: left;
	background:transparent none no-repeat;
	position: relative;
}
.thead_bar .forumstats li, .thead_bar .forumstats_2 li{
	font-size: 12pxpx;
	text-align: right;
	padding-right: 20px;
	display:block;
}
.thead_bar .forumlastpost {
	display:block;
	float: left;
	clear: right;
}
.thead_bar .theadrow .forumlastpost {
	width: 22%;
}
.forumbitBody {
	padding-right:2px;
	z-index:1;
	clear:both;
}
#post {
	z-index:1;
}
.threadlist {
	margin-top:0;
}
#threadlist .threadlisthead {
	background:#f3f5f6 url(images/styles/HighlightGreen/style/theadBG.gif) repeat-x left top;
	display:block;
	width: 100%;
	float: left;
	position:relative;
	border:1px solid #dfe5e9;
	border-bottom:1px solid #d0d5d9;
	border-top:1px solid #b6b8bb;
	color:#6a6e78;
	padding:4px 0px 4px 0px;
	font:  normal 12px arial, helvetica, sans-serif;
	margin: 0;
}
#threadlist .threadlisthead a, #threadlist .threadlisthead a:hover {
	color:#6a6e78;
}
.postbit .posthead, .postbitlegacy .posthead, .eventbit .eventhead {
	background:#f3f5f6 url(images/styles/HighlightGreen/style/theadBG.gif) repeat-x left top;
	clear:both;
	display:block;
	float: left;
	width: 100%;
	color:#6a6e78;
	margin: -1px -1px 0;
	font:  normal 12px arial, helvetica, sans-serif;
	padding:4px 0px 4px 0px;
	border:1px solid #dfe5e9;
	border-bottom:1px solid #d0d5d9;
	border-top:1px solid #b6b8bb;
}
#posts .posthead a:link, #posts .posthead a:visited {
	color:#6a6e78;
}
#posts .posthead a:hover {
	color:#6a6e78;
}
#posts .posthead .time, #posts .nodecontrols {
	color:#6a6e78;
}

/* Postbit CSS (Center Userinfo, Userinfo boxed stats wrap)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#postlist .userinfo {
	padding-top:10px;
}
.username_container {
	padding:2px 0;
	text-align:center;
}
.username_container .username strong {
	font:  normal 16pt arial, helvetica, sans-serif;
}
.usertitle, .rank {
	text-align:center;
}
.usercenter {
	padding-top:5px;
	text-align:center;
}
.post_field {
	background:#fff none   ;
	color:#414141;
	border:1px solid #b9c4cd;
	padding:3px 3px 3px 10px;
	margin-top: 2px;
	text-align:left;
}
.post_field strong {
	color:#587c1d;
}
.post_field dt {
	color:#587c1d;
	font-weight:700;
}
.postbit, .postbitlegacy, .eventbit {
	margin-bottom: 0;
}
.bbcode_container .bbcode_quote_container {
	background:none;
}

.forum_info_block, .forum_info_form {
	background:none;
}
.postfoot {
	border-top: 1px solid #d0d5d9;
}
.postfootWrap {
	border-right: 1px solid #d0d5d9;
}
#thread_info a.collapse {
	position: absolute;
	top: 9px;
}

/*************************************************/
/* TOP MEMBER BAR*/
.toplinks .notifications a.popupctrl {	
       -webkit-border-radius: 5px;
-moz-border-radius: 5px;
       border-radius: 5px;
       color:#fff;
}

.toplinks .notifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl.active, .toplinks ul.isuser li a:hover {
	-moz-border-radius: 5px !important;
	-webkit-border-radius: 5px !important;
}
.memberBox #toplinks {
	padding-top:9px;
}
#toplinks, .toplinks {
	text-align:left;
	line-height:20px;
}

/* Bottom Bar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.bottomBar {
	background:#5d9e2a none   ;
	height:2px;
	font-size:0;
	clear:both;
}

/* CMS & Blog CSS
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
h1.header, h2.header { 
	text-transform:capitalize; 
}

/* Forum Home
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.forumrow .forumtitle a:link, .forumrow .forumtitle a:visited {
	color:#23272e;
	font:   14px arial, helvetica, sans-serif;
}
.forumrow .forumtitle a:hover{
	color:#48861e;
}
.forumrow .lastposttitle a:link, .forumrow .lastposttitle a:visited {
	color:#48861e;
	font-weight:700;
}
.forumrow .lastposttitle a:hover{
	color:#23272e;
}
#forums .lastpostby a.username {
	color:#23272e;
}
#forums .lastpostby a.username:hover {
	color:#48861e;
}
.forumdescription {
	color:;
}
#notices .restore {
	background:#ffefb6 none   ;
	border:1px solid #ebd27b;
	color:#3c3a22;
	line-height:16px;
	padding:8px 10px 8px 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

/* Advanced Search
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#searchtypeswitcher {
	border-bottom:4px solid #2c343d;
}
#searchtypeswitcher li a {
	background-color:#525960;
	color:#FFF;
}

#searchtypeswitcher li.selected a {
	background-color:#2c343d;
}

#searchtypeswitcher li a:hover {
	background-color:#2c343d;
}

/* vBulletin Groups
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
li.sgicon .maincol, #sidebar li.sgicon .maincol,#thumbnails li {
	background: #fff none   ;
}
#sidebar li.sgicon .maincol .textcontrol {
	color: #424242;
}
#content .grouplist .blockrow > li, #content .grouplist .blockrow > ol, #content .grouplist .blockrow > div {
	background: #edf0f4 none   ;
	border: 1px solid #d0d5d9;
}
#pictures .blockbody .blockrow, #group_discussion_inlinemod_form .blockbody .blockrow {
	border: 1px solid #d0d5d9;
}
.toolsmenu {
	background: #eef5e6 url(images/misc/blog/top-highlight.png) repeat-x left top;
	_background-image: none;
	border: 1px solid #c4d5b4;
}
.toolsmenu div {
	border-top:none;
	color: #424242;
}
.toolsmenu h1 a {
	color: #424242;
}
.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .nopopupgroup li a {
	color: #424242;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover .popupctrl a.popupctrl.active {
	color: #424242;
}
dl.blogbit, tr.blogbit,
dl.blogcatbit, tr.blogcatbit {
	background: #fff none   ;
}