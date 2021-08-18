function chats(id) {




    jQuery.ajax({
        url: 'front.php',
        type: 'post',
        async: false,
        data: 'id=' + id,
        success: function (result) {

            jQuery('#chats').append(result);

        }

    });








}





function getmessages(id, to) {

    var arr = [];


    jQuery.ajax({
        url: 'getchat.php',
        type: 'post',
        async: false,
        data: 'id=' + id + '&to=' + to,
        success: function (result) {


            arr = JSON.parse(result);
        }

    });

    return arr;
}
function putmessages(id, to, dom, rows) {
    var checkarr = -1;
    var arr = []
    
    
    var html = '';
    setInterval(function () {
        arr = getmessages(id, to);

        if (arr.length != checkarr) {



           console.log(rows)
            for(var i = 0; i<arr.length ;i++) {
                
                if(i>=rows){
                    console.log(i);
                



                    if (arr[i]['type'] == 1) {




                        html =
                            '<div class="message message-right">' +
                            '' +
                            '<div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block" >' +
                            '    <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">' +
                            '</div >' +
                            '' +
                            '' +
                            '' +
                            '<div class="message-body">' +
                            '' +
                            '' +
                            '    <div class="message-row">' +
                            '        <div class="d-flex align-items-center justify-content-end">' +
                            '' +
                            '' +
                            '            <div class="dropdown">' +
                            '                <a class="text-muted opacity-60 mr-3" href="#" data-toggle="dropdown"' +
                            '                    aria-haspopup="true" aria-expanded="false">' +
                            '                    <i class="material-icons" style="font-size:25px">more_vert</i>' +
                            '                </a>' +
                            '' +
                            '                <div class="dropdown-menu">' +
                            '                    <a class="dropdown-item d-flex align-items-center" href="#">' +
                            '                            Edit' +
                            '                </a>' +
                            '                    <a class="dropdown-item d-flex align-items-center" href="#">' +
                            '                            Share' +
                            '                </a>' +
                            '                    <a class="dropdown-item d-flex align-items-center" href="#">' +
                            '                            Delete' +
                            '                </a>' +
                            '                </div>' +
                            '            </div>' +
                            '' +
                            '' +
                            '' +
                            '            <div class="message-content bg-primary text-white">' +
                            '                <div>' + arr[i]['text'] + '</div>' +
                            '' +
                            '                <div class="mt-1">' +
                            '                    <small class="opacity-65">8 mins ago</small>' +
                            '                </div>' +
                            '            </div>' +
                            '' +
                            '' +
                            '        </div>' +
                            '    </div>' +
                            '' +
                            '' +
                            '</div>' +
                            '' +

                            '</div >';
                            jQuery(dom).append(html);


                    } else {


                        html =
                            '<!-- Message -->' +
                            '<div class="message fs">' +
                            '    <!-- Avatar -->' +
                            '    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-2-info">' +
                            '        <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="">' +
                            '    </a>' +
                            '' +
                            '    <!-- Message: body -->' +
                            '    <div class="message-body">' +
                            '' +
                            '        <!-- Message: row -->' +
                            '        <div class="message-row">' +
                            '            <div class="d-flex align-items-center">' +
                            '' +
                            '                <!-- Message: content -->' +
                            '                <div class="message-content bg-light">' +
                            '                    <div>' + arr[i]['text'] + '</div>' +
                            '' +
                            '                    <div class="mt-1">' +
                            '                        <small class="opacity-65">8 mins ago</small>' +
                            '                    </div>' +
                            '                </div>' +
                            '                <!-- Message: content -->' +
                            '' +
                            '                <!-- Message: dropdown -->' +
                            '                <div class="dropdown">' +
                            '                    <a class="text-muted opacity-60 ml-3" href="#" data-toggle="dropdown" aria-haspopup="true"' +
                            '                        aria-expanded="false">' +
                            '                        <i class="material-icons" style="font-size:25px">more_vert</i>' +
                            '                    </a>' +
                            '' +
                            '                    <div class="dropdown-menu">' +
                            '                        <a class="dropdown-item d-flex align-items-center" href="#">' +
                            '                            Edit ' +
                            '                        </a>' +
                            '                        <a class="dropdown-item d-flex align-items-center" href="#">' +
                            '                            Share' +
                            '                        </a>' +
                            '                        <a class="dropdown-item d-flex align-items-center" href="#">' +
                            '                            Delete' +
                            '                        </a>' +
                            '                    </div>' +
                            '                </div>' +
                            '                <!-- Message: dropdown -->' +
                            '' +
                            '            </div>' +
                            '        </div>' +
                            '        <!-- Message: row -->' +
                            '' +
                            '    </div>' +
                            '    <!-- Message: body -->' +
                            '</div>' +

                            '<!-- Message -->';




                            jQuery(dom).append(html);

                    }
                }
               
            }




            checkarr = arr.length;
        }

        
    }, 1000);

}






