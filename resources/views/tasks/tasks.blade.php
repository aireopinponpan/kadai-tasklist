<ul class="list-unstyled">
    @foreach ($tasks as $tasks)
        <li class="media mb-3">
            <img class="mr-2 rounded" src="{{ Gravatar::src($tasks->user->email, 50) }}" alt="">
            <div class="media-body">
                <div>
                    {!! link_to_route('users.show', $tasks->user->name, ['id' => $tasks->user->id]) !!} <span class="text-muted">posted at {{ $tasks->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($tasks->content)) !!}</p>
                </div>
                <div>
                    @if (Auth::id() == $tasks>user_id)
                        {!! Form::open(['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $tasks->render('pagination::bootstrap-4') }}