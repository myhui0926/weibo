<form action="{{ route('statuses.store')  }}" class="mt-2" method="post">
  @include('shared._errors')
  {{ csrf_field() }}
  <div class="form-group">
    <textarea class="form-control" placeholder="聊点新鲜事" name="content" id="content" rows="3">{{ old('content') }}</textarea>
    <small id="emailHelp" class="form-text text-muted">请输入少于140个字符</small>
  </div>

  <button type="submit" class="btn btn-primary">发布</button>
</form>
