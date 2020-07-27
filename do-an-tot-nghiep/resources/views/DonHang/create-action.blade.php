<form action="#" method="POST" class="form-delete">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $data->id }}">
    <a href="#" class="btn btn-info waves-effect waves-light"><i
            class="far fa-edit"></i></a>
    <button type="submit" class="btn btn-danger waves-effect waves-light" @if ($data->trang_thai
        !=0) {{ 'disabled'}}@endif><i class="far fa-trash-alt"></i></a>
</form>
