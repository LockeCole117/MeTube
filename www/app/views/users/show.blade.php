@section('content')
<div id = "profile-links">
    <a href = "{{route('uploaded', array('id' => $user->getID(), 'page' => 1))}}">
      <span class = "">UPLOADED</span></a> | 
    <a href = "{{route('downloaded', array('id' => $user->getID(), 'page' => 1))}}">
      <span class = "">DOWNLOADED</span></a> | 
    <a href = "{{route('viewed', array('id' => $user->getID(), 'page' => 1))}}">
      <span class = "">VIEWED</span></a> | 
    <a href = "{{route('favorited', array('id' => $user->getID(), 'page' => 1))}}">
      <span class = "">FAVORITED</span></a>
  </div>
  <br>
  <div class = "mt-sidebar-block">
    <div class = "mt-block-title">{{$user->channel_name}}</div>
      <div class = "mt-sidebar-block-body">
        Content
      </div>
  </div>
  <br>
  <center>

    @if(Auth::check())
      @if(Subscription::isUserSubscribedToThisUser(Auth::user()->getAuthIdentifier(), $user->getID()))
        <a href = "{{route('unsubscribe_from_user', array('id' => $user->getID()))}}" class = "button">UNSUBSCRIBE</a>
      @else
        <a href = "{{route('subscribe_to_user', array('id' => $user->getID()))}}" class = "button">SUBSCRIBE</a>
      @endif
    @endif
  </center>
</div>

@stop