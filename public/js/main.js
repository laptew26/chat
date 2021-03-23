$('#send').on('click', function (event) {
    event.preventDefault();

    let message = $('#text').val();
    let recipient_id = $('#recipient_id').val();

    $.ajax({
        type: 'POST',
        url: "route('send', $user->id)",
        data: {text: message, recipient_id: recipient_id},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function () {
            $('#text').val('');
        }
    });
    return false;


})
if($('*').is('#messages')){
    let getMessages = function () {
        $.ajax({
            type: 'GET',
            url: $(location).attr('href') + "/get",
            success: function (msg) {
                $('#messages').html(msg);
            },
        });
    }

    getMessages();
    setInterval(getMessages, 5000);
}

