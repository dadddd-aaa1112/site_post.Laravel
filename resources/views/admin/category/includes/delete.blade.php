<form action="{{route('admin.category.destroy', $category->id)}}"
      method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="border-0 bg-transparent"><i class="fa fa-trash text-danger"
                                                             role="button"></i>
    </button>
</form>
