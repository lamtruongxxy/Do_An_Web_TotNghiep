<form action="{{ route('binh-luan.delete') }}" method="POST" class="form-delete">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $data->id }}">
    <a href="{{ route('binh-luan.edit', ['id' => $data->id]) }}" class="btn btn-info waves-effect waves-light"><i
            class="fe-eye"></i></a>
    <button type="submit" class="btn btn-danger waves-effect waves-light delete-binhluan" @if ($data->trang_thai
        === 1) {{ 'disabled'}}@endif><i class="far fa-trash-alt"></i></a>
</form>
