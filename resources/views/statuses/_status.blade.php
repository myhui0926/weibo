<li class="media mb-4">
  <a href="{{ route('users.show',$user->id)  }}"><img src="{{ $user->gravatar()  }}" class="mr-3" alt="{{$user->name}}"></a>
  <div class="media-body">
    <h5 class="mt-0">{{$user->name}}<small class="ml-1 text-muted">{{ $status->created_at->diffForHumans()  }}</small></h5>
    {{ $status->content  }}
  </div>
  @can('destroy',$status)
    <form action="{{ route('statuses.destroy',$status->id) }}" method="post" onsubmit="return confirm('是否删除该条微博？')">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button class="btn btn-danger" type="submit">删除</button>
    </form>
  @endcan
</li>
