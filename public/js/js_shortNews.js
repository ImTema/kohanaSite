function shortNews() {
    var showChar = 75;
    var ellipsestext = "...";

    $('.more').each(function() {
        var content = $(this).html();
        if(content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar-1, content.length - showChar);
            var html = c + '<span class="moreelipses">'+ellipsestext+'&nbsp;</span><span class="morecontent"><span>' + h + '</span><a href="#" class="morelink" onclick="showNews(this)">'+"&nbsp;&nbsp;показать"+'</a></span>';

            $(this).html(html);
        }
    });
}


