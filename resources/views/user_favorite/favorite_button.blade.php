@if (Auth::user()->is_favoriting($post->id))
     {!! Form::open(['route' =>['user.executeunfavorite',$post->id], 'method' => 'delete']) !!}
         {!! Form::submit('Unfavorite',['class' => 'btn btn-success btn-xs']) !!}
     {!! Form::close() !!}
   @else
     {!! Form::open(['route' => ['user.executefavorite',$post->id]]) !!}
         {!! Form::submit('Favorite',['class' => 'btn btn-default btn-xs']) !!}
     {!! Form::close() !!}
@endif
