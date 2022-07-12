<form action="{{route('admin.post.destroy', $post->id)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit"><i class="fa fa-trash"></i></button>

</form>
