jQuery(document).ready(function($){

    jQuery('.social-share').click(function(e){
        var social = $(this).data('share');
        var url = encodeURIComponent(window.location.href);
        var width = 545;
        var height = 433;
        var leftPosition, topPosition;
        //Allow for borders.
        leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
        //Allow for title and status bars.
        topPosition = (window.screen.height / 2) - ((height / 2) + 50);
        var settings = "height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,directories=no";

        switch ( social ) {
            case 'facebook' :
                console.log('facebook');
                window.open('http://www.facebook.com/sharer.php?u=' + url,'mypopuptitle', settings);
                break;
            case 'twitter' :
                window.open('https://twitter.com/share?url=' + url /*+ '&via=twitterdev&hashtags=bryaaaaaan&text=custom%20share%20text'*/,'mypopuptitle', settings)
                break;
            case 'linkedin' :
                window.open('http://www.linkedin.com/shareArticle?url=' + url,'mypopuptitle', settings)
                break;
            case 'reddit' :
                window.open('http://reddit.com/submit?url=' + url,'mypopuptitle', settings)
                break;
            case 'google-plus' :
                window.open('https://plus.google.com/share?url=' + url,'mypopuptitle', settings)
                break;
            case 'pinterest' :
                window.open('http://pinterest.com/pin/create/link/?url='+url+'&media='+$(this).data('image')+'&description='+$(this).data('title'),'mypopuptitle', settings)
                break;
        }

        e.preventDefault()
    });

    $('.sidebar-overlay').on('click touchstart',function() {
      $('.sidebar,.sidebar-container').removeClass('active');
      $('body').removeClass('sidebar-active');
    });

    $("select").addClass("form-control");

});
