
$(document).ready(function () {
    
    $(function () {
        $('.top_menu a').each(function () {
            var location = window.location.href;
            var link = this.href;
            console.log(location);
            console.log(link);
            if (location == link) {
                $(this).parent().addClass('active');
            }
        });
    });
});

