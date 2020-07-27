@if ($data->trang_thai === 0)
<span class="badge badge-danger">Đã hủy / Tạm xóa</span>

@elseif ($data->trang_thai === 1)
<span class="badge badge-primary">Chờ xác nhận</span>

@elseif ($data->trang_thai === 2)
<span class="badge badge-info">Đã xác nhận</span>

@else
<span class="badge badge-success">Hoàn thành</span>
@endif