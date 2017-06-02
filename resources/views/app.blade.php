
<!DOCTYPE html>
<html class="" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="admin-themes-lab">
  <meta name="author" content="themes-lab">
  <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
  <title>@yield('title')</title>
  <link href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet" type="text/css">
  <link href="/plugins/datatables/dataTables.min.css" rel="stylesheet">
  <link href="/page-builder/plugins/slider-pips/jquery-ui-slider-pips.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet"> <!-- MANDATORY -->
  <link href="/css/theme.css" rel="stylesheet"> <!-- MANDATORY -->
  <link href="/css/ui.css" rel="stylesheet"> <!-- MANDATORY -->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <![endif]-->
</head>
<script src="/plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="/plugins/jquery-cookies/jquery.cookies.js"></script> <!-- Jquery Cookies, for theme -->
<!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
<!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
<!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
<!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
<!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
<!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
<!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
<!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
<!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->
<!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
<!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->
<!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
<!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
<!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
<!-- THEME COLOR: Apply "color-default" for green color: #18A689 -->
<!-- THEME COLOR: Apply "color-default" for orange color: #B66D39 -->
<!-- THEME COLOR: Apply "color-default" for purple color: #6E62B5 -->
<!-- THEME COLOR: Apply "color-default" for blue color: #4A89DC -->
<!-- BEGIN BODY -->
<body class="fixed-topbar submenu-hover color-default theme-sltl bg-lighter">
  <section>
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar">
        <div class="logopanel">
          <h1><a href="/dashboard">&nbsp;</a></h1>
        </div>
        <div class="sidebar-inner">
          <div class="sidebar-top">
            <form action="#" method="post" class="searchform" id="search-results">
              <input type="text" class="form-control" name="keyword" placeholder="Search...">
            </form>
            <div class="userlogged clearfix">
              <i class="icon icons-faces-users-01"></i>
              <div class="user-details">
                <h4 class="">User</h4>
                <div class="dropdown user-login">
                  <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                  <i class="online"></i><span>Available</span> <i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="busy"></i><span>Busy</span></a></li>
                    <li><a href="#"><i class="turquoise"></i><span>Invisible</span></a></li>
                    <li><a href="#"><i class="away"></i><span>Away</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="menu-title">
            <span>MAIN MENU</span> 
            <div class="pull-right menu-settings">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300"> 
              <i class="icon-settings"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#" id="reorder-menu" class="reorder-menu">Reorder menu</a></li>
                <li><a href="#" id="remove-menu" class="remove-menu">Remove elements</a></li>
                <li><a href="#" id="hide-top-sidebar" class="hide-top-sidebar">Hide user &amp; search</a></li>
              </ul>
            </div>
          </div>
          <ul class="nav nav-sidebar">
            <li><a href="/home"><i class="icon-home"></i><span>Home</span></a></li>
            <li class="tm nav-parent active">
              <a href=""><i class="fa fa-car"></i><span>BBM</span> <span class="fa arrow active"></span></a>
              <ul class="children collapse">
                <li class=""><a href="/databbm">Data BBM</a></li>
                <li class=""><a href="/transaksibbm">Data Transaksi BBM</a></li>
                <li class=""><a href="/input">Input BBM</a></li>
                <li class=""><a href="/rekap">Rekap BBM</a></li>
              </ul>
            </li>
          </ul>
          <div class="sidebar-widgets"></div>
          <div class="sidebar-footer clearfix" style="">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
            <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
            <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="#" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
            <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
            <i class="icon-power"></i></a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">
          <div class="header-left">       <div class="topnav">
         <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
       </div>
</div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="user-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <img src="/images/avatars/user1.png" alt="user image">
                <span class="username">Hi, Rizal</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#"><i class="icon-logout"></i><span>Logout</span></a>
                  </li>
                </ul>
              </li>
              <!-- END USER DROPDOWN -->
            </ul>
          </div>
          <!-- header-right -->
        </div>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          <div class="custom-page" style="@media print{ overflow: hidden;}">
              <!-- Content Header (Page header) -->
              <section class="content-header">

                <ol class="breadcrumb" style="margin:0px;">
                  <li><a href="#"><i class="fa fa-automobile"></i>@yield('smallcontent-header')</a></li>
                </ol>
                <h1 style="margin-top:.3em;">
                  <b id="title"><strong>@yield('content-header')</strong></b>
                  <small class="sm-header">BBM</small>
                </h1>
              </section>

              @yield('content')
          </div>
          <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset"> <span>Copyright <span class="copyright">©</span> 2017 </span> <span>Pemrograman Berbasis Kerangka Kerja</span>. <span>All rights reserved. </span> </p>
            </div>
          </div>
    
        <!-- END PAGE CONTENT -->
        
      <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
    </section>
<div id="quickview-sidebar" class="">

      <div class="quickview-header">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#chat" data-toggle="tab">Chat</a></li>
          <li><a href="#notes" data-toggle="tab">Notes</a></li>
          <li><a href="#settings" data-toggle="tab" class="settings-tab">Settings</a></li>
        </ul>
      </div>
      <div class="quickview">
        <div class="tab-content">
          <div class="tab-pane fade active in" id="chat">
            <div class="chat-body current">
              <div class="chat-search">
                <form class="form-inverse" action="#" role="search">
                  <div class="append-icon">
                    <input type="text" class="form-control" placeholder="Search contact...">
                    <i class="icon-magnifier"></i>
                  </div>
                </form>
              </div>
              <div class="chat-groups">
                <div class="title">GROUP CHATS</div>
                <ul>
                  <li><i class="turquoise"></i> Favorites</li>
                  <li><i class="turquoise"></i> Office Work</li>
                  <li><i class="turquoise"></i> Friends</li>
                </ul>
              </div>
              <div class="chat-list">
                <div class="title">FAVORITES</div>
                <ul>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="images/avatars/avatar13.png" alt="avatar">
                    </div>
                    <div class="user-details">
                      <div class="user-name">Bobby Brown</div>
                      <div class="user-txt">On the road again...</div>
                    </div>
                    <div class="user-status">
                      <i class="online"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="images/avatars/avatar5.png" alt="avatar">
                      <div class="pull-right badge badge-danger">3</div>
                    </div>
                    <div class="user-details">
                      <div class="user-name">Alexa Johnson</div>
                      <div class="user-txt">Still at the beach</div>
                    </div>
                    <div class="user-status">
                      <i class="away"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="images/avatars/avatar10.png" alt="avatar">
                    </div>
                    <div class="user-details">
                      <div class="user-name">Bobby Brown</div>
                      <div class="user-txt">On stage...</div>
                    </div>
                    <div class="user-status">
                      <i class="busy"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="chat-list">
                <div class="title">FRIENDS</div>
                <ul>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="images/avatars/avatar7.png" alt="avatar">
                      <div class="pull-right badge badge-danger">3</div>
                    </div>
                    <div class="user-details">
                      <div class="user-name">James Miller</div>
                      <div class="user-txt">At work...</div>
                    </div>
                    <div class="user-status">
                      <i class="online"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="images/avatars/avatar11.png" alt="avatar">
                    </div>
                    <div class="user-details">
                      <div class="user-name">Fred Smith</div>
                      <div class="user-txt">Waiting for tonight</div>
                    </div>
                    <div class="user-status">
                      <i class="offline"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="images/avatars/avatar8.png" alt="avatar">
                    </div>
                    <div class="user-details">
                      <div class="user-name">Ben Addams</div>
                      <div class="user-txt">On my way to NYC</div>
                    </div>
                    <div class="user-status">
                      <i class="offline"></i>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="chat-conversation">
              <div class="conversation-header">
                <div class="user clearfix">
                  <div class="chat-back">
                    <i class="icon-action-undo"></i>
                  </div>
                  <div class="user-details">
                    <div class="user-name">James Miller</div>
                    <div class="user-txt">On the road again...</div>
                  </div>
                </div>
              </div>
              <div class="conversation-body">
                <ul>
                  <li class="img">
                    <div class="chat-detail">
                      <span class="chat-date">today, 10:38pm</span>
                      <div class="conversation-img">
                        <img src="images/avatars/avatar4.png" alt="avatar 4">
                      </div>
                      <div class="chat-bubble">
                        <span>Hi you!</span>
                      </div>
                    </div>
                  </li>
                  <li class="img">
                    <div class="chat-detail">
                      <span class="chat-date">today, 10:45pm</span>
                      <div class="conversation-img">
                        <img src="images/avatars/avatar4.png" alt="avatar 4">
                      </div>
                      <div class="chat-bubble">
                        <span>Are you there?</span>
                      </div>
                    </div>
                  </li>
                  <li class="img">
                    <div class="chat-detail">
                      <span class="chat-date">today, 10:51pm</span>
                      <div class="conversation-img">
                        <img src="images/avatars/avatar4.png" alt="avatar 4">
                      </div>
                      <div class="chat-bubble">
                        <span>Send me a message when you come back.</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="conversation-message">
                <input type="text" placeholder="Your message..." class="form-control form-white send-message">
                <div class="item-footer clearfix">
                  <div class="footer-actions">
                    <i class="icon-rounded-marker"></i>
                    <i class="icon-rounded-camera"></i>
                    <i class="icon-rounded-paperclip-oblique"></i>
                    <i class="icon-rounded-alarm-clock"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="notes">
            <div class="list-notes current withScroll mCustomScrollbar _mCS_4 mCS-autoHide mCS_no_scrollbar" style="height: auto;"><div id="mCSB_4" class="mCustomScrollBox mCS-dark-thick mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
              <div class="notes ">
                <div class="row">
                  <div class="col-md-12">
                    <div id="add-note">
                      <i class="fa fa-plus"></i>ADD A NEW NOTE
                    </div>
                  </div>
                </div>
                <div id="notes-list">
                  <div class="note-item media current fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Reset my account password</p>
                      </div>
                      <p class="note-desc hidden">Break security reasons.</p>
                      <p><small>Tuesday 6 May, 3:52 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Call John</p>
                      </div>
                      <p class="note-desc hidden">He have my laptop!</p>
                      <p><small>Thursday 8 May, 2:28 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Buy a car</p>
                      </div>
                      <p class="note-desc hidden">I'm done with the bus</p>
                      <p><small>Monday 12 May, 3:43 am</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Don't forget my notes</p>
                      </div>
                      <p class="note-desc hidden">I have to read them...</p>
                      <p><small>Wednesday 5 May, 6:15 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media current fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Reset my account password</p>
                      </div>
                      <p class="note-desc hidden">Break security reasons.</p>
                      <p><small>Tuesday 6 May, 3:52 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Call John</p>
                      </div>
                      <p class="note-desc hidden">He have my laptop!</p>
                      <p><small>Thursday 8 May, 2:28 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Buy a car</p>
                      </div>
                      <p class="note-desc hidden">I'm done with the bus</p>
                      <p><small>Monday 12 May, 3:43 am</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Don't forget my notes</p>
                      </div>
                      <p class="note-desc hidden">I have to read them...</p>
                      <p><small>Wednesday 5 May, 6:15 pm</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-dark-thick mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
            <div class="detail-note note-hidden-sm">
              <div class="note-header clearfix">
                <div class="note-back">
                  <i class="icon-action-undo"></i>
                </div>
                <div class="note-edit">Edit Note</div>
                <div class="note-subtitle">title on first line</div>
              </div>
              <div id="note-detail">
                <div class="note-write">
                  <textarea class="form-control" placeholder="Type your note here"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="settings">
            <div class="settings">
              <div class="title">ACCOUNT SETTINGS</div>
              <div class="setting">
                <span> Show Personal Statut</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
                <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
              </div>
              <div class="setting">
                <span> Show my Picture</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
                <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
              </div>
              <div class="setting">
                <span> Show my Location</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
                <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
              </div>
              <div class="title">CHAT</div>
              <div class="setting">
                <span> Show User Image</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="setting">
                <span> Show Fullname</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="setting">
                <span> Show Location</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="setting">
                <span> Show Unread Count</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="title">STATISTICS</div>
              <div class="settings-chart">
                <div class="progress visible">
                  <progress class="progress-bar-primary stat1" value="82" max="100" style="width: 82%;"></progress>
                  <div class="progress-info">
                    <span class="progress-name">Stat 1</span>
                    <span class="progress-value" style="opacity: 1;">82%</span>
                  </div>
                </div>
              </div>
              <div class="settings-chart">
                <div class="progress visible">
                  <progress class="progress-bar-primary stat1" value="43" max="100" style="width: 43%;"></progress>
                  <div class="progress-info">
                    <span class="progress-name">Stat 2</span>
                    <span class="progress-value" style="opacity: 1;">43%</span>
                  </div>
                </div>
              </div>
              <div class="m-t-30" style="width:100%">
                <canvas id="setting-chart" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<div id="morphsearch" class="morphsearch">

      <form class="morphsearch-form">
        <input class="morphsearch-input" type="search" placeholder="Search...">
        <button class="morphsearch-submit" type="submit">Search</button>
      </form>
      <div class="morphsearch-content withScroll mCustomScrollbar _mCS_5 mCS-autoHide" style="height: auto;"><div id="mCSB_5" class="mCustomScrollBox mCS-dark-thick mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_5_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
        <div class="dummy-column user-column">
          <h2>Users</h2>
          <a class="dummy-media-object" href="#">
            <img src="images/avatars/avatar1_big.png" alt="Avatar 1" class="mCS_img_loaded">
            <h3>John Smith</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/avatars/avatar2_big.png" alt="Avatar 2" class="mCS_img_loaded">
            <h3>Bod Dylan</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/avatars/avatar3_big.png" alt="Avatar 3" class="mCS_img_loaded">
            <h3>Jenny Finlan</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/avatars/avatar4_big.png" alt="Avatar 4" class="mCS_img_loaded">
            <h3>Harold Fox</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/avatars/avatar5_big.png" alt="Avatar 5" class="mCS_img_loaded">
            <h3>Martin Hendrix</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/avatars/avatar6_big.png" alt="Avatar 6" class="mCS_img_loaded">
            <h3>Paul Ferguson</h3>
          </a>
        </div>
        <div class="dummy-column">
          <h2>Articles</h2>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/1.jpg" alt="1" class="mCS_img_loaded">
            <h3>How to change webdesign?</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/2.jpg" alt="2" class="mCS_img_loaded">
            <h3>News From the sky</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/3.jpg" alt="3" class="mCS_img_loaded">
            <h3>Where is the cat?</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/4.jpg" alt="4" class="mCS_img_loaded">
            <h3>Just another funny story</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/5.jpg" alt="5" class="mCS_img_loaded">
            <h3>How many water we drink every day?</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/6.jpg" alt="6" class="mCS_img_loaded">
            <h3>Drag and drop tutorials</h3>
          </a>
        </div>
        <div class="dummy-column">
          <h2>Recent</h2>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/7.jpg" alt="7" class="mCS_img_loaded">
            <h3>Design Inspiration</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/8.jpg" alt="8" class="mCS_img_loaded">
            <h3>Animals drawing</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/9.jpg" alt="9" class="mCS_img_loaded">
            <h3>Cup of tea please</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/10.jpg" alt="10" class="mCS_img_loaded">
            <h3>New application arrive</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/11.jpg" alt="11" class="mCS_img_loaded">
            <h3>Notification prettify</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="images/gallery/12.jpg" alt="12" class="mCS_img_loaded">
            <h3>My article is the last recent</h3>
          </a>
        </div>
      </div><div id="mCSB_5_scrollbar_vertical" class="mCSB_scrollTools mCSB_5_scrollbar mCS-dark-thick mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_5_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 506px; max-height: 496.125px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
      <!-- /morphsearch-content -->
      <span class="morphsearch-close"></span>
    </div>
<!-- Preloader -->
<div class="loader-overlay">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<script src="/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/plugins/gsap/main-gsap.min.js"></script> <!-- HTML Animations -->
<script src="/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
<script src="/plugins/bootbox/bootbox.min.js"></script>
<script src="/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
<script src="/plugins/tether/js/tether.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
<script src="/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
<script src="/plugins/switchery/switchery.min.js"></script> <!-- IOS Switch -->
<script src="/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
<script src="/plugins/retina/retina.min.js"></script>  <!-- Retina Display -->
<script src="/plugins/bootstrap/js/jasny-bootstrap.min.js"></script> <!-- File Upload and Input Masks -->
<script src="/plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
<script src="/plugins/bootstrap-tags-input/bootstrap-tagsinput.min.js"></script> <!-- Select Inputs -->
<script src="/plugins/bootstrap-loading/lada.min.js"></script> <!-- Buttons Loading State -->
<script src="/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script> <!-- Time Picker -->
<script src="/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
<script src="/plugins/colorpicker/spectrum.min.js"></script> <!-- Color Picker -->
<script src="/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- A mobile and touch friendly input spinner component for Bootstrap -->
<script src="/plugins/autosize/autosize.min.js"></script> <!-- Textarea autoresize -->
<script src="/plugins/icheck/icheck.min.js"></script> <!-- Icheck -->
<script src="/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script> <!-- Inline Edition X-editable -->
<script src="/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js"></script> <!-- File Upload and Input Masks -->
<script src="/plugins/prettify/prettify.min.js"></script> <!-- Show html code -->
<script src="/plugins/slick/slick.min.js"></script> <!-- Slider -->
<script src="/plugins/countup/countUp.min.js"></script> <!-- Animated Counter Number -->
<script src="/plugins/noty/jquery.noty.packaged.min.js"></script>  <!-- Notifications -->
<script src="/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
<script src="/plugins/charts-chartjs/Chart.min.js"></script>  <!-- ChartJS Chart -->
<script src="/plugins/bootstrap-slider/bootstrap-slider.js"></script> <!-- Bootstrap Input Slider -->
<script src="/plugins/visible/jquery.visible.min.js"></script> <!-- Visible in Viewport -->
<script src="/js/builder.js"></script>
<script src="/js/sidebar_hover.js"></script>
<script src="/js/application.js"></script> <!-- Main Application Script -->
<script src="/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
<script src="/js/widgets/notes.js"></script>
<script src="/js/quickview.js"></script> <!-- Quickview Script -->
<script src="/js/pages/search.js"></script> <!-- Search Script -->
<!-- BEGIN PAGE SCRIPTS -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
<script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="/plugins/summernote/summernote.js"></script>
<script src="/plugins/skycons/skycons.js"></script>
<script src="/plugins/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="/js/widgets/widget_weather.js"></script>
<script src="/js/widgets/todo_list.js"></script>
<script src="/page-builder/plugins/slider-pips/jquery-ui-slider-pips.min.js"></script>
<script src="/page-builder/plugins/saveas/saveAs.js"></script>
<script src="/page-builder/js/builder_page.js"></script>
<!-- END PAGE SCRIPTS -->
</body>
</html>