$( document ).ready(function() {
    if($( "#cm" ).length  < 1){
        var html = "<span id='comment-hi'>Коментариев нет. Будте первыми ;)</span>"
        $("#c-blck-inner").prepend(html)
    }
    
});

$(function() {
    $('form').submit(function(e) {
        e.preventDefault()
        var $form           = $(this)
        var date            = new Date()
        var currentDateTime = date.getHours() + ':' + date.getMinutes()
        var name            = $('#name').val()
        var comment         = $('#comment').val()
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'), 
            data: {name: name, comment: comment, time: currentDateTime}
        }).done(function(data) {
            console.log("#"+data + " sended at: " + currentDateTime)
            clearFormFields()
            addNewCommentToPage(data)
        }).fail(function() {
            alert("Ошибка отправки комментария!")
        });
        
    });
});

function clearFormFields(){
    $('form').each(function(){
        this.reset()
    });
}

function addNewCommentToPage(id){
    $.get('../php/get_item.php?id='+id, function(data) {
        if($( "#cm" ).length  < 1){
            $( "#comment-hi" ).remove();
        }
        $("#c-blck-inner").prepend(data)
        $("#cm").className = 'comment';
        
    });
}