let recipient_id = $('#recipient_id').val();

let getMessages = function () {
    $.ajax({
        type: 'GET',
        url: "/chat/" + recipient_id + "/get",
        success: function (msg) {
            $('#messages').html(msg);
        },
    });
}

$('#send').on('click', function (event) {
    event.preventDefault();

    let message = $('#text').val();

    $.ajax({
        type: 'POST',
        url: "/chat/" + recipient_id + "/send",
        data: {text: message, recipient_id: recipient_id},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function () {
            $('#text').val('');
            getMessages();
        }
    });
    return false;
})

if($('*').is('#messages')){
    getMessages();
    setInterval(getMessages, 5000);
}

