@foreach($messages as $message)
    <div class="card" style="max-width: 100%">
        <div class="card-header">
            @if(Auth::user()->login == $message->sender->login)
                <h5>Вы</h5>
            @else
                <h5>{{$message->sender->login}}</h5>
            @endif
        </div>
        <div class="card-body">
            <p class="card-text">{{$message->text}}</p>
        </div>
        <div class="card-footer">
            <span class="float-end">{{$message->created_at}}</span>
        </div>
    </div>
    <br>
@endforeach
