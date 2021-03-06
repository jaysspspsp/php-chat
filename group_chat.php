<?php
    require 'top.inc.php';
?>

<div class="main main-visible" data-mobile-height="">

<!-- Chat -->
<div id="chat-1" class="chat dropzone-form-js" data-dz-url="some.php">

    <!-- Chat: body -->
    <div class="chat-body">

        <!-- Chat: Header -->
        <div class="chat-header border-bottom py-4 py-lg-6 px-lg-8">
            <div class="container-xxl">

                <div class="row align-items-center">

                    <!-- Close chat(mobile) -->
                    <div class="col-3 d-xl-none">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="text-muted px-0" href="#" data-chat="open">
                                <i class="material-icons" style="font-size:25px">chevron_left</i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Chat photo -->
                    <div class="col-6 col-xl-6">
                        <div class="media text-center text-xl-left">
                            <div class="avatar avatar-sm d-none d-xl-inline-block mr-5">
                                <img src="assets/images/avatars/11.jpg" class="avatar-img" alt="">
                            </div>

                            <div class="media-body align-self-center text-truncate">
                                <h6 class="text-truncate mb-n1">Bootstrap Themes</h6>
                                <small class="text-muted">35 members</small>
                                <small class="text-muted mx-2"> • </small>
                                <small class="text-muted">HTML, CSS, and Javascript Help</small>
                            </div>
                        </div>
                    </div>

                    <!-- Chat toolbar -->
                    <div class="col-3 col-xl-6 text-right">
                        <ul class="nav justify-content-end">
                            <li class="nav-item list-inline-item d-none d-xl-block mr-5">
                                <a class="nav-link text-muted px-3" data-toggle="collapse" data-target="#chat-1-search" href="#" title="Search this chat">
                                    <i class="material-icons" style="font-size: 25px;">search</i>
                                </a>
                            </li>

                            <li class="nav-item list-inline-item d-none d-xl-block mr-3">
                                <a class="nav-link text-muted px-3" href="#" data-chat-sidebar-toggle="#chat-1-members" title="Add People">
                                    <i class="material-icons" style="font-size:25px">person_add</i>
                                </a>
                            </li>

                            <li class="nav-item list-inline-item d-none d-xl-block mr-0">
                                <a class="nav-link text-muted px-3" href="#" data-chat-sidebar-toggle="#chat-1-info" title="Details">
                                    <i class="material-icons" style="font-size:25px">more_vert</i>
                                </a>
                            </li>














                            <!-- Mobile nav -->
                            <li class="nav-item list-inline-item d-block d-xl-none">
                                <div class="dropdown">
                                    <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons" style="font-size:25px">more_vert</i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" data-toggle="collapse" data-target="#chat-1-search" href="#">
                                            Search 
                                        </a>

                                        <a class="dropdown-item d-flex align-items-center" href="#" data-chat-sidebar-toggle="#chat-1-info">
                                            Chat Info 
                                        </a>

                                        <a class="dropdown-item d-flex align-items-center" href="#" data-chat-sidebar-toggle="#chat-1-members">
                                            Add Members 
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- Mobile nav -->
                        </ul>
                    </div>

                </div><!-- .row -->

            </div>
        </div>
        <!-- Chat: Header -->

        <!-- Chat: Search -->
        <div class="collapse border-bottom px-lg-8" id="chat-1-search">
            <div class="container-xxl py-4 py-lg-6">

                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Search this chat" aria-label="Search this chat">

                    <div class="input-group-append">
                        <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                            <i class="material-icons" style="font-size: 30px;">search</i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Chat: Search -->

        <!-- Chat: Content-->
        <div class="chat-content px-lg-8">
            <div class="container-xxl py-6 py-lg-10">

                <!-- Message -->
                <div class="message">
                    <!-- Avatar -->
                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-1-user-profile">
                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="">
                    </a>

                    <!-- Message: body -->
                    <div class="message-body">

                        <!-- Message: row -->
                        <div class="message-row">
                            <div class="d-flex align-items-center">

                                <!-- Message: content -->
                                <div class="message-content bg-light">
                                    <h6 class="mb-2">William Wright</h6>
                                    <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>

                                    <div class="mt-1">
                                        <small class="opacity-65">8 mins ago</small>
                                    </div>
                                </div>
                                <!-- Message: content -->

                                <!-- Message: dropdown -->
                                <div class="dropdown">
                                    <a class="text-muted opacity-60 ml-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Edit  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Share  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Delete  
                                        </a>
                                    </div>
                                </div>
                                <!-- Message: dropdown -->

                            </div>
                        </div>
                        <!-- Message: row -->

                    </div>
                    <!-- Message: Body -->
                </div>
                <!-- Message -->

                <!-- Message -->
                <div class="message message-right">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                        <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
                    </div>

                    <!-- Message: body -->
                    <div class="message-body">

                        <!-- Message: row -->
                        <div class="message-row">
                            <div class="d-flex align-items-center justify-content-end">

                                <!-- Message: dropdown -->
                                <div class="dropdown">
                                    <a class="text-muted opacity-60 mr-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Edit  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Share  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Delete  
                                        </a>
                                    </div>
                                </div>
                                <!-- Message: dropdown -->

                                <!-- Message: content -->
                                <div class="message-content bg-primary text-white">
                                    <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>

                                    <div class="mt-1">
                                        <small class="opacity-65">8 mins ago</small>
                                    </div>
                                </div>
                                <!-- Message: content -->

                            </div>
                        </div>
                        <!-- Message: row -->

                        <!-- Message: row -->
                        <div class="message-row">
                            <div class="d-flex align-items-center justify-content-end">

                                <!-- Message: dropdown -->
                                <div class="dropdown">
                                    <a class="text-muted opacity-60 mr-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Edit  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Share  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Delete  
                                        </a>
                                    </div>
                                </div>
                                <!-- Message: dropdown -->

                                <!-- Message: content -->
                                <div class="message-content bg-primary text-white">
                                    <div class="media">
                                        <a href="#" class="icon-shape mr-5">
                                            <i class="material-icons">attachment</i>
                                        </a>
                                        <div class="media-body overflow-hidden flex-fill">
                                            <a href="#" class="d-block text-truncate font-medium text-reset">bootstrap.min.js</a>
                                            <ul class="list-inline small mb-0">
                                                <li class="list-inline-item">
                                                    <span class="t">79.2 KB</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="text-uppercase">js</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Message: content -->

                            </div>
                        </div>
                        <!-- Message: row -->

                    </div>
                    <!-- Message: body -->
                </div>
                <!-- Message -->

                <!-- Divider -->
                <div class="message-divider my-9 mx-lg-5">
                    <div class="row align-items-center">

                        <div class="col">
                            <hr>
                        </div>

                        <div class="col-auto">
                            <small class="text-muted">Today</small>
                        </div>

                        <div class="col">
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- Divider -->

                <!-- Message -->
                <div class="message">
                    <!-- Avatar -->
                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-1-user-profile">
                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="">
                    </a>

                    <!-- Message: body -->
                    <div class="message-body">

                        <!-- Message: row -->
                        <div class="message-row">
                            <div class="d-flex align-items-center">

                                <!-- Message: content -->
                                <div class="message-content bg-light w-100">
                                    <h6 class="mb-2">William Wright shared 3 photos:</h6>
                                    <div class="form-row py-3">
                                        <div class="col">
                                            <img class="img-fluid rounded" src="https://themes.2the.me/Boomerang/1.2/assets/images/team/1.jpg" data-action="zoom" alt="">
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid rounded" src="https://themes.2the.me/Boomerang/1.2/assets/images/team/2.jpg" data-action="zoom" alt="">
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid rounded" src="https://themes.2the.me/Boomerang/1.2/assets/images/team/3.jpg" data-action="zoom" alt="">
                                        </div>
                                    </div>

                                    
                                    <div class="mt-1">
                                        <small class="opacity-65">8 mins ago</small>
                                    </div>
                                </div>
                                <!-- Message: content -->

                                <!-- Message: dropdown -->
                                <div class="dropdown">
                                    <a class="text-muted opacity-60 ml-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Edit  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Share  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Delete  
                                        </a>
                                    </div>
                                </div>
                                <!-- Message: dropdown -->

                            </div>
                        </div>
                        <!-- Message: row -->

                        <!-- Message: row -->
                        <div class="message-row">
                            <div class="d-flex align-items-center">

                                <!-- Message: content -->
                                <div class="message-content bg-light">
                                    <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>

                                    <div class="mt-1">
                                        <small class="opacity-65">8 mins ago</small>
                                    </div>
                                </div>
                                <!-- Message: content -->

                                <!-- Message: dropdown -->
                                <div class="dropdown">
                                    <a class="text-muted opacity-60 ml-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Edit  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Share  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Delete  
                                        </a>
                                    </div>
                                </div>
                                <!-- Message: dropdown -->

                            </div>
                        </div>
                        <!-- Message: row -->

                    </div>
                    <!-- Message: body -->
                </div>
                <!-- Message -->

                <!-- Message -->
                <div class="message message-right">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                        <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
                    </div>

                    <!-- Message: body -->
                    <div class="message-body">

                        <!-- Message: row -->
                        <div class="message-row">
                            <div class="d-flex align-items-center justify-content-end">

                                <!-- Message: dropdown -->
                                <div class="dropdown">
                                    <a class="text-muted opacity-60 mr-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Edit  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Share  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Delete  
                                        </a>
                                    </div>
                                </div>
                                <!-- Message: dropdown -->

                                <!-- Message: content -->
                                <div class="message-content bg-primary text-white">
                                    <div>I'm going to meet a friend of mine at the department store. Yeah, I have to buy some presents for my parents.</div>

                                    <div class="mt-1">
                                        <small class="opacity-65">8 mins ago</small>
                                    </div>
                                </div>
                                <!-- Message: content -->

                            </div>
                        </div>
                        <!-- Message: row -->

                    </div>
                    <!-- Message: body -->
                </div>
                <!-- Message -->

                <!-- Message -->
                <div class="message">
                    <!-- Avatar -->
                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-1-user-profile">
                        <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="">
                    </a>

                    <!-- Message: body -->
                    <div class="message-body">

                        <!-- Message: row -->
                        <div class="message-row">
                            <div class="d-flex align-items-center">

                                <!-- Message: content -->
                                <div class="message-content bg-light">
                                    <h6 class="mb-2">Matthew Wiggins</h6>
                                    <div>I'm going to meet a friend of mine at the department store. Yeah, I have to buy some presents for my parents.</div>

                                    <div class="mt-1">
                                        <small class="opacity-65">8 mins ago</small>
                                    </div>
                                </div>
                                <!-- Message: content -->

                                <!-- Message: dropdown -->
                                <div class="dropdown">
                                    <a class="text-muted opacity-60 ml-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Edit  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Share  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Delete  
                                        </a>
                                    </div>
                                </div>
                                <!-- Message: dropdown -->

                            </div>
                        </div>
                        <!-- Message: row -->

                    </div>
                    <!-- Message: body -->
                </div>
                <!-- Message -->

                <!-- Message -->
                <div class="message message-right">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                        <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
                    </div>

                    <!-- Message: body -->
                    <div class="message-body">

                        <!-- Message: row -->
                        <div class="message-row">
                            <div class="d-flex align-items-center justify-content-end">

                                <!-- Message: dropdown -->
                                <div class="dropdown">
                                    <a class="text-muted opacity-60 mr-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Edit  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Share  
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Delete  
                                        </a>
                                    </div>
                                </div>
                                <!-- Message: dropdown -->

                                <!-- Message: content -->
                                <div class="message-content bg-primary text-white">
                                    <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>

                                    <div class="mt-1">
                                        <small class="opacity-65">8 mins ago</small>
                                    </div>
                                </div>
                                <!-- Message: content -->

                            </div>
                        </div>
                        <!-- Message: row -->

                    </div>
                    <!-- Message: body -->
                </div>
                <!-- Message -->

                <!-- Message: Typing -->
                <div class="message">
                    <!-- Avatar -->
                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-1-user-profile">
                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="">
                    </a>

                    <!-- Message: body -->
                    <div class="message-body">

                        <!-- Message: row -->
                        <div class="message-row">
                            <div class="d-flex align-items-center">

                                <!-- Message: content -->
                                <div class="message-content bg-light">
                                    <div>William is typing<span class="typing-dots"><span>.</span><span>.</span><span>.</span></span></div>
                                </div>
                                <!-- Message: content -->

                            </div>
                        </div>
                        <!-- Message: row -->

                    </div>
                    <!-- Message: body -->
                </div>
                <!-- Message: Typing -->

            </div>

            <!-- Scroll to end -->
            <div class="end-of-chat"></div>
        </div>
        <!-- Chat: Content -->

        <!-- Chat: DropzoneJS container -->
        <div class="chat-files hide-scrollbar px-lg-8">
            <div class="container-xxl">
                <div class="dropzone-previews-js form-row py-4"></div>
            </div>
        </div>
        <!-- Chat: DropzoneJS container -->

        <!-- Chat: Footer -->
        <div class="chat-footer border-top py-4 py-lg-6 px-lg-8">
            <div class="container-xxl">

                <form id="chat-id-1-form" action="assets/php/upload.php" data-emoji-form="">
                    <div class="form-row align-items-center">
                        <div class="col">
                            <div class="input-group">

                                <!-- Textarea -->
                                <textarea id="chat-id-1-input" class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea>

                                <!-- Emoji button -->
                                <div class="input-group-append">
                                    <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0" type="button" data-emoji-btn="">
                                        <i class="material-icons" style="font-size:25px">mood</i>
                                    </button>
                                </div>

                                <!-- Upload button -->
                                <div class="input-group-append">
                                    <button id="chat-upload-btn-1" class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0 dropzone-button-js" type="button">
                                        <i class="material-icons" style="font-size:25px">attachment</i>
                                    </button>
                                </div>

                            </div>

                        </div>

                        <!-- Submit button -->
                        <div class="col-auto">
                            <button class="btn btn-ico btn-primary rounded-circle" type="submit">
                                <!-- <span class="fe-send"></span> -->
                                <!-- <img src="assets/images/send.png" alt=""> -->
                                <i class="material-icons">send</i>

                            </button>
                        </div>

                    </div>

                </form>

            </div>
        </div>
        <!-- Chat: Footer -->
    </div>
    <!-- Chat: body -->

    <!-- Chat Details -->
    <div id="chat-1-info" class="chat-sidebar">
        <div class="d-flex h-100 flex-column">

            <!-- Header -->
            <div class="border-bottom py-4 py-lg-6">
                <div class="container-fluid">

                    <ul class="nav justify-content-between align-items-center">
                        <!-- Close sidebar -->
                        <li class="nav-item list-inline-item">
                            <a class="nav-link text-muted px-0" href="#" data-chat-sidebar-close="">
                                <i class="material-icons" style="font-size:25px">chevron_left</i>
                            </a>
                        </li>

                        <!-- Title(mobile) -->
                        <li class="text-center d-block d-lg-none">
                            <h6 class="mb-n2">Bootstrap Themes</h6>
                            <small class="text-muted">Chat Details</small>
                        </li>

                        <!-- Dropdown -->
                        <li class="nav-item list-inline-item">
                            <div class="dropdown">
                                <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons" style="font-size:25px">av_timer</i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Mute
                                        
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Delete
                                        
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- Header -->

            <!-- Body -->
            <div class="hide-scrollbar flex-fill">

                <div class="border-bottom text-center py-9 px-10">
                    <!-- Photo -->
                    <div class="avatar avatar-xl mx-5 mb-5">
                        <img class="avatar-img" src="assets/images/avatars/11.jpg" alt="">
                    </div>
                    <h5>Bootstrap Themes</h5>
                    <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML, CSS, and JS.</p>
                </div>

                <!-- Navs -->
                <ul class="nav nav-tabs nav-justified bg-light rounded-0" role="tablist">
                    <li class="nav-item">
                        <a href="#chat-id-1-members" class="nav-link active" data-toggle="tab" role="tab" aria-selected="true">Members</a>
                    </li>
                    <li class="nav-item">
                        <a href="#chat-id-1-files" class="nav-link" data-toggle="tab" role="tab">Files</a>
                    </li>
                </ul>
                <!-- Navs -->

                <div class="tab-content">
                    <!-- Members -->
                    <div id="chat-id-1-members" class="tab-pane fade show active">
                        <ul class="list-group list-group-flush list-group-no-border-first">
                            <!-- Member -->
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">

                                    
                                    <div class="avatar avatar-sm avatar-online mr-5">
                                        <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                    </div>
                                    
                                    
                                    <div class="media-body">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-reset">Anna Bridges</a>
                                        </h6>
                                        <small class="text-muted">Online</small>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Promote <span class="ml-auto fe-trending-up"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Restrict <span class="ml-auto fe-trending-down"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete <span class="ml-auto fe-user-x"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- Member -->
<!-- Member -->
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">

                                    
                                    <div class="avatar avatar-sm avatar-online mr-5">
                                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                    </div>
                                    
                                    
                                    <div class="media-body">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-reset">Simon Hensley</a>
                                        </h6>
                                        <small class="text-muted">Online</small>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Promote <span class="ml-auto fe-trending-up"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Restrict <span class="ml-auto fe-trending-down"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete <span class="ml-auto fe-user-x"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- Member -->
<!-- Member -->
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">

                                    
                                    
                                    <div class="avatar avatar-sm mr-5">
                                        <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                    </div>
                                    
                                    <div class="media-body">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-reset">William Wright</a>
                                        </h6>
                                        <small class="text-muted">last seen 7 hours ago</small>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Promote <span class="ml-auto fe-trending-up"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Restrict <span class="ml-auto fe-trending-down"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete <span class="ml-auto fe-user-x"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- Member -->
<!-- Member -->
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">

                                    
                                    
                                    <div class="avatar avatar-sm mr-5">
                                        <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                    </div>
                                    
                                    <div class="media-body">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-reset">Leslie Sutton</a>
                                        </h6>
                                        <small class="text-muted">last seen 6 days ago</small>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Promote <span class="ml-auto fe-trending-up"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Restrict <span class="ml-auto fe-trending-down"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete <span class="ml-auto fe-user-x"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- Member -->
<!-- Member -->
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">

                                    
                                    
                                    <div class="avatar avatar-sm mr-5">
                                        <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                    </div>
                                    
                                    <div class="media-body">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-reset">Matthew Wiggins</a>
                                        </h6>
                                        <small class="text-muted">last seen 2 days ago</small>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Promote <span class="ml-auto fe-trending-up"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Restrict <span class="ml-auto fe-trending-down"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete <span class="ml-auto fe-user-x"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- Member -->
<!-- Member -->
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">

                                    
                                    
                                    <div class="avatar avatar-sm mr-5">
                                        <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="Thomas Walker">
                                    </div>
                                    
                                    <div class="media-body">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-reset">Thomas Walker</a>
                                        </h6>
                                        <small class="text-muted">last seen 10 minutes ago</small>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Promote <span class="ml-auto fe-trending-up"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Restrict <span class="ml-auto fe-trending-down"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete <span class="ml-auto fe-user-x"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- Member -->
<!-- Member -->
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">

                                    
                                    
                                    <div class="avatar avatar-sm mr-5">
                                        <img class="avatar-img" src="assets/images/avatars/2.jpg" alt="Zane Mayes">
                                    </div>
                                    
                                    <div class="media-body">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-reset">Zane Mayes</a>
                                        </h6>
                                        <small class="text-muted">last seen 6 days ago</small>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Promote <span class="ml-auto fe-trending-up"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Restrict <span class="ml-auto fe-trending-down"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete <span class="ml-auto fe-user-x"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- Member -->
<!-- Member -->
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">

                                    
                                    
                                    <div class="avatar avatar-sm mr-5">
                                        <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                    </div>
                                    
                                    <div class="media-body">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-reset">Brian Dawson</a>
                                        </h6>
                                        <small class="text-muted">last seen 2 days ago</small>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Promote <span class="ml-auto fe-trending-up"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Restrict <span class="ml-auto fe-trending-down"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete <span class="ml-auto fe-user-x"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- Member -->
<!-- Member -->
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">

                                    
                                    
                                    <div class="avatar avatar-sm mr-5">
                                        <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                    </div>
                                    
                                    <div class="media-body">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-reset">William Greer</a>
                                        </h6>
                                        <small class="text-muted">last seen 10 minutes ago</small>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Promote <span class="ml-auto fe-trending-up"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Restrict <span class="ml-auto fe-trending-down"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete <span class="ml-auto fe-user-x"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- Member -->

                        </ul>
                    </div>
                    <!-- Members -->

                    <!-- Files -->
                    <div id="chat-id-1-files" class="tab-pane fade">
                        <ul class="list-group list-group-flush list-group-no-border-first">
                            <!-- File -->
                            <li class="list-group-item py-6">
                                <div class="media">

                                    <div class="icon-shape bg-primary text-white mr-5">
                                        <i class="material-icons">attachment</i>
                                    </div>

                                    <div class="media-body align-self-center overflow-hidden">
                                        <h6 class="text-truncate mb-0">
                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                        </h6>

                                        <ul class="list-inline small mb-0">
                                            <li class="list-inline-item">
                                                <span class="text-muted">79.2 KB</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-muted text-uppercase">txt</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Download <span class="ml-auto fe-download"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Share  
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete  
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- File -->

<!-- File -->
                            <li class="list-group-item py-6">
                                <div class="media">

                                    <div class="icon-shape bg-primary text-white mr-5">
                                        <i class="material-icons">attachment</i>
                                    </div>

                                    <div class="media-body align-self-center overflow-hidden">
                                        <h6 class="text-truncate mb-0">
                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                        </h6>

                                        <ul class="list-inline small mb-0">
                                            <li class="list-inline-item">
                                                <span class="text-muted">79.2 KB</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-muted text-uppercase">psd</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Download <span class="ml-auto fe-download"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Share  
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete  
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- File -->

<!-- File -->
                            <li class="list-group-item py-6">
                                <div class="media">

                                    <div class="icon-shape bg-primary text-white mr-5">
                                        <i class="material-icons">attachment</i>
                                    </div>

                                    <div class="media-body align-self-center overflow-hidden">
                                        <h6 class="text-truncate mb-0">
                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                        </h6>

                                        <ul class="list-inline small mb-0">
                                            <li class="list-inline-item">
                                                <span class="text-muted">79.2 KB</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-muted text-uppercase">pdf</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Download <span class="ml-auto fe-download"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Share  
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete  
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- File -->

<!-- File -->
                            <li class="list-group-item py-6">
                                <div class="media">

                                    <div class="icon-shape bg-primary text-white mr-5">
                                        <i class="material-icons">attachment</i>
                                    </div>

                                    <div class="media-body align-self-center overflow-hidden">
                                        <h6 class="text-truncate mb-0">
                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                        </h6>

                                        <ul class="list-inline small mb-0">
                                            <li class="list-inline-item">
                                                <span class="text-muted">79.2 KB</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-muted text-uppercase">txt</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Download <span class="ml-auto fe-download"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Share  
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete  
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- File -->

<!-- File -->
                            <li class="list-group-item py-6">
                                <div class="media">

                                    <div class="icon-shape bg-primary text-white mr-5">
                                        <i class="material-icons">attachment</i>
                                    </div>

                                    <div class="media-body align-self-center overflow-hidden">
                                        <h6 class="text-truncate mb-0">
                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                        </h6>

                                        <ul class="list-inline small mb-0">
                                            <li class="list-inline-item">
                                                <span class="text-muted">79.2 KB</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-muted text-uppercase">pdf</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="align-self-center ml-5">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Download <span class="ml-auto fe-download"></span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Share  
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Delete  
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- File -->


                        </ul>
                    </div>
                    <!-- Files -->
                </div>
            </div>
            <!-- Body -->

        </div>
    </div>
    <!-- Chat Details -->

    <!-- New members -->
    <div id="chat-1-members" class="chat-sidebar">
        <div class="d-flex h-100 flex-column">

            <!-- Header -->
            <div class="border-bottom py-4 py-lg-6">
                <div class="container-fluid">

                    <ul class="nav justify-content-between align-items-center">
                        <!-- Close sidebar -->
                        <li class="nav-item">
                            <a class="nav-link text-muted px-0" href="#" data-chat-sidebar-close="">
                            <i class="material-icons" style="font-size:25px">chevron_left</i>
                            </a>
                        </li>

                        <!-- Title(mobile) -->
                        <li class="text-center d-block d-lg-none">
                            <h6 class="mb-n2">Bootstrap Themes</h6>
                            <small class="text-muted">Add Members</small>
                        </li>

                        <!-- Dropdown -->
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-md fe-sliders"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Mute
                                        
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Delete
                                        
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- Header -->

            <!-- Body -->
            <div class="hide-scrollbar flex-fill">
                <!-- Search -->
                <div class="border-bottom py-7">
                    <div class="container-fluid">

                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Search for users..." aria-label="Search users...">
                                <div class="input-group-append">
                                    <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                        <i class="material-icons">search</i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- Search -->

                <!-- Members -->
                <form action="#">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item py-4">
                            <small class="text-uppercase">A</small>
                        </li>

                        <!-- Member -->
                        <li class="list-group-item py-6">
                            <div class="media align-items-center">

                                
                                <div class="avatar avatar-sm avatar-online mr-5">
                                    <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                </div>
                                
                                
                                <div class="media-body">
                                    <h6 class="mb-0">Anna Bridges</h6>
                                    <small class="text-muted">Online</small>
                                </div>

                                <div class="align-self-center ml-auto">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="id-add-user-chat-1-user-1" type="checkbox">
                                        <label class="custom-control-label" for="id-add-user-chat-1-user-1"></label>
                                    </div>
                                </div>

                            </div>

                            <!-- Label -->
                            <label class="stretched-label" for="id-add-user-chat-1-user-1"></label>
                        </li>
                        <!-- Member -->


                        <li class="list-group-item py-4">
                            <small class="text-uppercase">B</small>
                        </li>

                        <!-- Member -->
                        <li class="list-group-item py-6">
                            <div class="media align-items-center">

                                
                                
                                <div class="avatar avatar-sm mr-5">
                                    <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                </div>
                                
                                <div class="media-body">
                                    <h6 class="mb-0">Brian Dawson</h6>
                                    <small class="text-muted">last seen 2 hours ago</small>
                                </div>

                                <div class="align-self-center ml-auto">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="id-add-user-chat-1-user-2" type="checkbox">
                                        <label class="custom-control-label" for="id-add-user-chat-1-user-2"></label>
                                    </div>
                                </div>

                            </div>

                            <!-- Label -->
                            <label class="stretched-label" for="id-add-user-chat-1-user-2"></label>
                        </li>
                        <!-- Member -->


                        <li class="list-group-item py-4">
                            <small class="text-uppercase">L</small>
                        </li>

                        <!-- Member -->
                        <li class="list-group-item py-6">
                            <div class="media align-items-center">

                                
                                
                                <div class="avatar avatar-sm mr-5">
                                    <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                </div>
                                
                                <div class="media-body">
                                    <h6 class="mb-0">Leslie Sutton</h6>
                                    <small class="text-muted">last seen 3 days ago</small>
                                </div>

                                <div class="align-self-center ml-auto">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="id-add-user-chat-1-user-3" type="checkbox">
                                        <label class="custom-control-label" for="id-add-user-chat-1-user-3"></label>
                                    </div>
                                </div>

                            </div>

                            <!-- Label -->
                            <label class="stretched-label" for="id-add-user-chat-1-user-3"></label>
                        </li>
                        <!-- Member -->


                        <li class="list-group-item py-4">
                            <small class="text-uppercase">M</small>
                        </li>

                        <!-- Member -->
                        <li class="list-group-item py-6">
                            <div class="media align-items-center">

                                
                                
                                <div class="avatar avatar-sm mr-5">
                                    <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                </div>
                                
                                <div class="media-body">
                                    <h6 class="mb-0">Matthew Wiggins</h6>
                                    <small class="text-muted">last seen 3 days ago</small>
                                </div>

                                <div class="align-self-center ml-auto">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="id-add-user-chat-1-user-4" type="checkbox">
                                        <label class="custom-control-label" for="id-add-user-chat-1-user-4"></label>
                                    </div>
                                </div>

                            </div>

                            <!-- Label -->
                            <label class="stretched-label" for="id-add-user-chat-1-user-4"></label>
                        </li>
                        <!-- Member -->


                        <li class="list-group-item py-4">
                            <small class="text-uppercase">S</small>
                        </li>

                        <!-- Member -->
                        <li class="list-group-item py-6">
                            <div class="media align-items-center">

                                
                                
                                <div class="avatar avatar-sm mr-5">
                                    <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                </div>
                                
                                <div class="media-body">
                                    <h6 class="mb-0">Simon Hensley</h6>
                                    <small class="text-muted">last seen 3 days ago</small>
                                </div>

                                <div class="align-self-center ml-auto">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="id-add-user-chat-1-user-5" type="checkbox">
                                        <label class="custom-control-label" for="id-add-user-chat-1-user-5"></label>
                                    </div>
                                </div>

                            </div>

                            <!-- Label -->
                            <label class="stretched-label" for="id-add-user-chat-1-user-5"></label>
                        </li>
                        <!-- Member -->


                        <li class="list-group-item py-4">
                            <small class="text-uppercase">W</small>
                        </li>

                        <!-- Member -->
                        <li class="list-group-item py-6">
                            <div class="media align-items-center">

                                
                                
                                <div class="avatar avatar-sm mr-5">
                                    <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                </div>
                                
                                <div class="media-body">
                                    <h6 class="mb-0">William Wright</h6>
                                    <small class="text-muted">last seen 3 days ago</small>
                                </div>

                                <div class="align-self-center ml-auto">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="id-add-user-chat-1-user-6" type="checkbox">
                                        <label class="custom-control-label" for="id-add-user-chat-1-user-6"></label>
                                    </div>
                                </div>

                            </div>

                            <!-- Label -->
                            <label class="stretched-label" for="id-add-user-chat-1-user-6"></label>
                        </li>
                        <!-- Member -->
<!-- Member -->
                        <li class="list-group-item py-6">
                            <div class="media align-items-center">

                                
                                
                                <div class="avatar avatar-sm mr-5">
                                    <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                </div>
                                
                                <div class="media-body">
                                    <h6 class="mb-0">William Greer</h6>
                                    <small class="text-muted">last seen 10 minutes ago</small>
                                </div>

                                <div class="align-self-center ml-auto">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="id-add-user-chat-1-user-7" type="checkbox">
                                        <label class="custom-control-label" for="id-add-user-chat-1-user-7"></label>
                                    </div>
                                </div>

                            </div>

                            <!-- Label -->
                            <label class="stretched-label" for="id-add-user-chat-1-user-7"></label>
                        </li>
                        <!-- Member -->


                        <li class="list-group-item py-4">
                            <small class="text-uppercase">Z</small>
                        </li>

                        <!-- Member -->
                        <li class="list-group-item py-6">
                            <div class="media align-items-center">

                                
                                
                                <div class="avatar avatar-sm mr-5">
                                    <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Zane Mayes">
                                </div>
                                
                                <div class="media-body">
                                    <h6 class="mb-0">Zane Mayes</h6>
                                    <small class="text-muted">last seen 3 days ago</small>
                                </div>

                                <div class="align-self-center ml-auto">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="id-add-user-chat-1-user-8" type="checkbox">
                                        <label class="custom-control-label" for="id-add-user-chat-1-user-8"></label>
                                    </div>
                                </div>

                            </div>

                            <!-- Label -->
                            <label class="stretched-label" for="id-add-user-chat-1-user-8"></label>
                        </li>
                        <!-- Member -->

                    </ul>
                </form>
                <!-- Members -->
            </div>
            <!-- Body -->

            <!-- Button -->
            <div class="border-top py-7">
                <div class="container-fluid">
                    <button class="btn btn-lg btn-block btn-primary d-flex align-items-center" type="submit">
                        Add members
                        <span class="fe-user-plus ml-auto"></span>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <!-- New members -->

    <!-- User's details -->
    <div id="chat-1-user-profile" class="chat-sidebar">
        <div class="d-flex h-100 flex-column">

            <!-- Header -->
            <div class="border-bottom py-4 py-lg-6">
                <div class="container-fluid">

                    <ul class="nav justify-content-between align-items-center">
                        <!-- Close sidebar -->
                        <li class="nav-item list-inline-item">
                            <a class="nav-link text-muted px-0" href="#" data-chat-sidebar-close="">
                            <i class="material-icons" style="font-size:25px">chevron_left</i>
                            </a>
                        </li>

                        <!-- Title(mobile) -->
                        <li class="text-center d-block d-lg-none">
                            <h6 class="mb-n2">William Wright</h6>
                            <small class="text-muted">User Details</small>
                        </li>

                        <!-- Dropdown -->
                        <li class="nav-item list-inline-item">
                            <div class="dropdown">
                                <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-md fe-sliders"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Mute
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Delete 
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- Header -->

            <!-- Body -->
            <div class="hide-scrollbar flex-fill">

                <div class="border-bottom text-center py-9 px-10">
                    <!-- Photo -->
                    <div class="avatar avatar-xl mx-5 mb-5">
                        <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="">
                        <div class="badge badge-sm badge-pill badge-primary badge-border-basic badge-top-right">
                            <span class="text-uppercase">Pro</span>
                        </div>
                    </div>
                    <h5>William Wright</h5>
                    <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML, CSS, and JS.</p>
                </div>

                <ul class="list-group list-group-flush mb-8">
                    <li class="list-group-item py-6">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="small text-muted mb-0">Country</p>
                                <p>Warsaw, Poland</p>
                            </div>
                            <i class="text-muted icon-sm fe-globe"></i>
                        </div>
                    </li>

                    <li class="list-group-item py-6">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="small text-muted mb-0">Phone</p>
                                <p>+39 02 87 21 43 19</p>
                            </div>
                            <i class="text-muted icon-sm fe-mic"></i>
                        </div>
                    </li>

                    <li class="list-group-item py-6">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="small text-muted mb-0">Email</p>
                                <p>anna@gmail.com</p>
                            </div>
                            <i class="text-muted icon-sm fe-mail"></i>
                        </div>
                    </li>

                    <li class="list-group-item py-6">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="small text-muted mb-0">Time</p>
                                <p>10:03 am</p>
                            </div>
                            <i class="text-muted icon-sm fe-clock"></i>
                        </div>
                    </li>
                </ul>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-6">
                        <a href="#" class="media text-muted">
                            <div class="media-body align-self-center">
                                Twitter
                            </div>
                            <i class="icon-sm fe-twitter"></i>
                        </a>
                    </li>

                    <li class="list-group-item py-6">
                        <a href="#" class="media text-muted">
                            <div class="media-body align-self-center">
                            Facebook
                            </div>
                            <i class="icon-sm fe-facebook"></i>
                        </a>
                    </li>

                    <li class="list-group-item py-6">
                        <a href="#" class="media text-muted">
                            <div class="media-body align-self-center">
                                Github
                            </div>
                            <i class="icon-sm fe-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Body -->

            <!-- Button -->
            <div class="border-top py-7">
                <div class="container-fluid">
                    <button class="btn btn-lg btn-block btn-primary d-flex align-items-center" type="submit">
                        Add friend
                        <span class="fe-user-plus ml-auto"></span>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <!-- User's details -->

</div>
<!-- Chat -->

</div>


<?php
    require 'footer.inc.php';
?>