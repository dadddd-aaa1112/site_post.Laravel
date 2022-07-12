<form action="{{route('admin.user.destroy', $user->id)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">
        <i class="text-danger fa fa-trash"></i>
    </button>

</form>
