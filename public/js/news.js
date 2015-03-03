function delDiv(obj){
    console.log("gonna delete");
    $(obj).prev().remove();
    $(obj).remove();
}

$(document).ready(shortNews());

$("input[name='add']").click(function(){
    var showChar = 75;
    var ellipsestext = "...";
    var news=document.getElementById('new-news');
    var content=news.value;//$('#new-news').html();
    while(content.indexOf("\n")!=-1)
        content=content.replace("\n", "<br>");
    var t = content.length;
    if(t > showChar) {
        var c = content.substr(0, showChar);
        var h = content.substr(showChar-1, t - showChar);
        var html = c + '<span class="moreelipses">'+ellipsestext+'&nbsp;</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink" onclick="showNews(this);return false;">'+"&nbsp;&nbsp;показать"+'</a></span>';
        $(".news-list").append("<div class='one-news'>"+"<div class='comment more'>"+html+"</div>"+"<input type='button' class='clear' value='Удалить' onclick='delDiv(this)'>"+"</div>");
    } else {
        $(".news-list").append("<div class='one-news'><div class='comment more'>"+$("#new-news").val()+"</div><input type='button' class='clear' value='Удалить' onclick='delDiv(this)'></div>");
    }
    news.value=null;
});

function showNews(obj){
    if($(obj).hasClass("less")) {
        $(obj).removeClass("less");
        $(obj).html("показать");
    } else {
        $(obj).addClass("less");
        $(obj).html("скрыть");
    }
    $(obj).parent().prev().toggle();
    $(obj).prev().toggle();
    return false;
}
