<form action="{{route('admin.tag.destroy', $tag->id)}}" method="post">
    @csrf
    @method('delete')

    <button class="border-0 bg-transparent" type="submit"><i class="fa fa-trash text-danger"></i></button>

</form>
