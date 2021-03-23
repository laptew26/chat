@if(Auth::check())
<div class="btn-group-vertical">
    <p>Hello {{Auth::user()->login}}</p>
    @foreach($users as $user)
        <a href="{{route('show', $user->id)}}">{{$user->login}}</a>
    @endforeach
</div>
@endif
