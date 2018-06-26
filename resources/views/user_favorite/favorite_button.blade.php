@if (Auth::user()->is_favoriting($user->id))
     {!! Form::open(['route' =>['user.executeunfavorite',$user->id], 'method' => 'delete']) !!}
         {!! Form::submit('Unfavorite',['class' => 'btn btn-success btn-xs']) !!}
     {!! Form::close() !!}
   @else
     {!! Form::open(['route' => ['user.executefavorite',$user->id]]) !!}
         {!! Form::submit('Favorite',['class' => 'btn btn-default btn-xs']) !!}
     {!! Form::close() !!}
@endif
