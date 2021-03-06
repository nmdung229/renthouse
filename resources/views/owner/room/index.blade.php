@extends('owner.layouts.main')
@section('content')

    <section class="content-header">
        <h1>
            Danh Sách Phòng Trọ <a href="{{route('owner.room.create')}}" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Thêm Phòng Trọ</a>
        </h1>
    </section>
    @if (session('msg'))
        <div class="pad margin no-print">
            <div class="alert alert-success alert-dismissible" style="" id="thongbao">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Thông báo !</h4>
                {{ session('msg') }}
            </div>
        </div>
    @endif
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-tools">
                            <form action="{{ route('owner.searchTitleOwner', ['role' => 'owner']) }}" method="get" id="form-searchRoom">
                                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                    <input type="text" name="key_title" class="form-control pull-right"
                                           placeholder="Search">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Tên Tiêu Đề</th>
                                <th>Loại Phòng</th>
                                <th>Địa Chỉ</th>
                                <th>Giá Phòng</th>
                                <th>Hình ảnh</th>
                                <th>Hiển thị</th>
                                <th>Lượt xem</th>
                                <th>Trạng thái</th>

                                <th class="text-center">Hành động</th>
                            </tr>
                            </tbody>
                            @foreach($data as $key => $item)
                                <tr class="item-{{ $item->id }}"> <!-- Thêm Class Cho Dòng -->
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ \App\Room_type::findOrFail($item->roomType_id)->name  }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{  number_format($item->price,0,",",".") }} Đ</td>
                                    <td>
                                        <img src="{{ $item->image }}" width="50" height="50">
                                    </td>
                                    <td>{{ ($item->is_active==1) ? 'Có' : 'Không' }}</td>
                                    <td>{{ $item->views }}</td>
                                    <td><?php if($item->approval_id == null) { echo "Chưa được duyệt"; } else { echo "Đã được duyệt"; } ?></td>
                                    <td class="text-center">
                                        <a href="{{route('owner.room.show', ['id'=> $item->id ])}}" class="btn btn-default">Xem</a>
                                        <!-- Thêm sự kiện onlick cho nút xóa -->
                                        <a href="javascript:void(0)" class="btn btn-danger" onclick="destroyRoom({{ $item->id }})" >Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
