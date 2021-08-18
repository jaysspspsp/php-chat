<?php
    require 'top.inc.php';
    if(isset($_GET['to'])){
        $by = $_GET['by'];
        $to = $_GET['to'];
        $sql = mysqli_query($con,"SELECT * FROM `user` WHERE `id` = '$to'");
        $res = mysqli_fetch_array($sql);
        $chat = get_chat($by,$to);

    }
?>



<div class="main main-visible" data-mobile-height="">

    <!-- Chat -->
    <div id="chat-2" class="chat dropzone-form-js" data-dz-url="some.php">

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
                                <div class="avatar avatar-sm avatar-online d-none d-lg-inline-block mr-5">
                                    <img src="assets/images/avatars/10.jpg" class="avatar-img" alt="">
                                </div>

                                <div class="media-body align-self-center text-truncate">
                                    <h6 class="text-truncate mb-n1"><?php echo $res['fname'].' '.$res['lname']; ?></h6>
                                    <span class="badge badge-dot badge-success d-inline-block d-xl-none mr-1"></span>
                                    <small class="text-muted">Online</small>
                                </div>
                            </div>
                        </div>

                        <!-- Chat toolbar -->
                        <div class="col-3 col-xl-6 text-right">
                            <ul class="nav justify-content-end">
                                <li class="nav-item list-inline-item d-none d-xl-block mr-3">
                                    <a class="nav-link text-muted px-3" data-toggle="collapse"
                                        data-target="#chat-2-search" href="#" title="Search this chat">
                                        <i class="material-icons" style="font-size: 25px;">search</i>
                                    </a>
                                </li>

                                <li class="nav-item list-inline-item d-none d-xl-block mr-0">
                                    <a class="nav-link text-muted px-3" href="#" data-chat-sidebar-toggle="#chat-2-info"
                                        title="Details">
                                        <i class="material-icons" style="font-size:25px">more_vert</i>
                                    </a>
                                </li>

                                <!-- Mobile nav -->
                                <li class="nav-item list-inline-item d-block d-xl-none">
                                    <div class="dropdown">
                                        <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons" style="font-size:25px">more_vert</i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item d-flex align-items-center" data-toggle="collapse"
                                                data-target="#chat-2-search" href="#">
                                                Search
                                            </a>

                                            <a class="dropdown-item d-flex align-items-center" href="#"
                                                data-chat-sidebar-toggle="#chat-2-info">
                                                Chat Info
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
            <div class="collapse border-bottom px-lg-8" id="chat-2-search">
                <div class="container-xxl py-4 py-lg-6">

                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Search this chat"
                            aria-label="Search this chat">

                        <div class="input-group-append">
                            <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Chat: Search -->
























            <!-- Chat: Content-->
            <div class="chat-content px-lg-8">
                <div class="container-xxl py-6 py-lg-10 " id="box">




                    <?php
                        echo $chat;
                    ?>






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

                    
                        <div class="form-row align-items-center">
                            <div class="col">
                                <div class="input-group">

                                    <!-- Textarea -->
                                    <textarea id="chatinput" class="form-control bg-transparent border-0"
                                        placeholder="Type your message..." rows="1" data-emoji-input=""
                                        data-autosize="true"></textarea>

                                    <!-- Emoji button -->
                                    <div class="input-group-append">
                                        <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0"
                                            type="button" data-emoji-btn="">
                                            <img src="assets/images/smile.svg" data-inject-svg="" alt="">
                                        </button>
                                    </div>

                                    <!-- Upload button -->
                                    <div class="input-group-append">
                                        <button id="chat-upload-btn-2"
                                            class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0 dropzone-button-js"
                                            type="button">
                                            <img src="assets/images/paperclip.svg" data-inject-svg="" alt="">
                                        </button>
                                    </div>

                                </div>

                            </div>

                            <!-- Submit button -->
                            <div class="col-auto">
                                <button class="btn btn-ico btn-primary rounded-circle" id="chatbutton" onclick="submit()">
                                    <i class="material-icons" style="font-size:20px;">send</i>
                                </button>
                            </div>

                        </div>

                   

                </div>
            </div>
            <!-- Chat: Footer -->
        </div>
        <!-- Chat: body -->

        <!-- Chat Details -->
        <div id="chat-2-info" class="chat-sidebar">
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
                                <h6 class="mb-n2">Anna Bridges</h6>
                                <small class="text-muted">Chat Details</small>
                            </li>

                            <!-- Dropdown -->
                            <li class="nav-item list-inline-item">
                                <div class="dropdown">
                                    <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
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
                            <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="">
                        </div>
                        <h5>Anna Bridges</h5>
                        <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML, CSS, and
                            JS.</p>
                    </div>

                    <!-- Navs -->
                    <div class="nav nav-tabs nav-justified bg-light rounded-0" role="tablist">
                        <a class="nav-item nav-link active" href="#chat-2-user-details" data-toggle="tab"
                            aria-selected="true" role="tab">Details</a>
                        <a class="nav-item nav-link" href="#chat-2-user-files" data-toggle="tab" role="tab">Files</a>
                    </div>
                    <!-- Navs -->

                    <div class="tab-content" role="tablist">
                        <!-- Details -->
                        <div id="chat-2-user-details" class="tab-pane fade show active" role="tabpanel">
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
                        <!-- Details -->

                        <!-- Files -->
                        <div id="chat-2-user-files" class="tab-pane fade" role="tabpanel">
                            <ul class="list-group list-group-flush list-group-no-border-first">
                                <!-- File -->
                                <li class="list-group-item py-6">
                                    <div class="media">

                                        <div class="icon-shape bg-primary text-white mr-5">
                                            <i class="fe-paperclip"></i>
                                        </div>

                                        <div class="media-body align-self-center overflow-hidden">
                                            <h6 class="text-truncate mb-0">
                                                <a href="#" class="text-reset"
                                                    title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
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
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Download <span class="ml-auto fe-download"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Share <span class="ml-auto fe-share-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
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
                                            <i class="fe-paperclip"></i>
                                        </div>

                                        <div class="media-body align-self-center overflow-hidden">
                                            <h6 class="text-truncate mb-0">
                                                <a href="#" class="text-reset"
                                                    title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
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
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Download <span class="ml-auto fe-download"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Share <span class="ml-auto fe-share-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
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
                                            <i class="fe-paperclip"></i>
                                        </div>

                                        <div class="media-body align-self-center overflow-hidden">
                                            <h6 class="text-truncate mb-0">
                                                <a href="#" class="text-reset"
                                                    title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
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
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Download <span class="ml-auto fe-download"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Share <span class="ml-auto fe-share-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
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
                                            <i class="fe-paperclip"></i>
                                        </div>

                                        <div class="media-body align-self-center overflow-hidden">
                                            <h6 class="text-truncate mb-0">
                                                <a href="#" class="text-reset"
                                                    title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
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
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Download <span class="ml-auto fe-download"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Share <span class="ml-auto fe-share-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
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
                                            <i class="fe-paperclip"></i>
                                        </div>

                                        <div class="media-body align-self-center overflow-hidden">
                                            <h6 class="text-truncate mb-0">
                                                <a href="#" class="text-reset"
                                                    title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
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
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Download <span class="ml-auto fe-download"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Share <span class="ml-auto fe-share-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
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

    </div>
    <!-- Chat -->

</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<script>
    function  submit(){
        if(jQuery('#chatinput').val() != ""){
            var message = jQuery('#chatinput').val();
        jQuery.ajax({
            url: 'message.php',
            type: 'post',
            data: 'id=<?php echo $by; ?>&to=<?php echo $to; ?>&text=' + message,
            success: function (result) {
    
                console.log(result);
                
            }
    
        });
        jQuery('#chatinput').val("");
        }
        
        
        
    }
putmessages(<?php echo $by; ?>, <?php echo $to; ?>, '#box', <?php echo chat_rows($by,$to); ?>);
</script>



<?php
    require 'footer.inc.php';
?>