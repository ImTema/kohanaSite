function change_text(){
    var divAroundText=document.getElementById("just-text");
    var text=document.getElementById("text");
    var textarea=document.getElementById("change-text");
    document.getElementById("change-text").style.height=divAroundText.style.height+"px";
    textarea.style.display="block";
    divAroundText.style.display="none";
    var content=text.innerHTML;
    while(content.indexOf("<br>")!=-1){
        content=content.replace("<br>", "\n");
    }
    var text2change=document.getElementById("changed-text").value;
    text2change=content;
    document.getElementById("changed-text").value=text2change;
}
function save(){
    var divAroundText=document.getElementById("just-text");
    var text=document.getElementById("text");
    var textarea=document.getElementById("change-text");
    var text2change=document.getElementById("changed-text");
    var content=text2change.value;
    while(content.indexOf("\n")!=-1)
        content=content.replace("\n", "<br>");
//        var val=$('#change-text').val();
//        var content=val.replace('/\r\n|\r|\n/g','<br>');
//        $('#text').html(content);
    text.innerHTML=content;
    textarea.style.display="none";
    divAroundText.style.display="block";
}
$(function() {
    var txt = $('#changed-text'),
        hiddenDiv = $(document.createElement('div')),
        content = null;

    txt.addClass('noscroll');
    hiddenDiv.addClass('hiddendiv');

    $('body').append(hiddenDiv);

    txt.bind('keyup', function() {

        content = txt.val();
        content = content.replace("/\r?\n/g", "<br>");
        hiddenDiv.html(content);

        txt.css('height', hiddenDiv.height());
    });
});