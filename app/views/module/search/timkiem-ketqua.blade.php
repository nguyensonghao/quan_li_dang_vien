{{ HTML::style('libs/css/module/ketquatimkiem.css') }}

@extends('template/layout/main')

@section('title')
    Tìm kiếm Đảng viên
@endsection

@section('content-box')
    <div class="search-result">
    @if(isset($ds_dv) && $ds_dv != null)
        <h3 class="center title">Kết quả tìm kiếm</h3>
        <div class="information-result-search col-md-12">
            <div class="number-result-search col-md-5">
                <p>Tìm thấy {{ $number_ds_dv }} kết quả tương ứng</p>
            </div>

            <div class="action-result-search col-md-7">
                <div class="btn-group">
                    @if ($type == 0)
                    <a class="btn btn-primary btn-show-search" 
                    href="{{ Asset('timkiem') }}">
                        Tìm kiếm mới
                    </a>
                    @else
                    <a class="btn btn-primary btn-show-search" 
                    href="{{ Asset('timkiem/nangcao') }}">
                        Tìm kiếm mới
                    </a>
                    @endif
                    <a type="button" class="btn btn-custom btn-sm" 
                    href="{{ Asset('dangvien/indanhsach') }}">
                        In danh sách
                    </a>
                    <a type="button" class="btn btn-custom btn-sm"
                    href="{{ Asset('dangvien/email') }}" target="_blank">
                        Gửi email
                    </a>
                    <a type="button" class="btn btn-custom btn-sm"
                    href="{{ Asset('dangvien/insocai') }}">
                        In sổ cái
                    </button>

                    <a href="{{Asset('dangvien/xuatdulieu')}}" class="btn btn-custom btn-sm" target="_blank">
                        Xuất dữ liệu
                    </a>
                </div>
            </div>
        </div>
        <div class="table-responsive col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="bg-primary">Stt</th>
                        <th class="bg-primary">Tên đầy đủ</th>
                        <th class="bg-primary">Số hiệu chuẩn</th>
                        <th class="bg-primary">Đơn vị công tác</th>
                        <th class="bg-primary">Điện thoại</th>
                        <th class="bg-primary">Email</th>
                        <th class="bg-primary">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ds_dv as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <b>
                                <a 
                                href="{{ Asset('dangvien/thongtin').'/'. $value->sohieuchuan }}">
                                    {{ $value->ttd }}
                                </a>
                            </b>
                        </td>
                        <td>{{ $value->sohieuchuan }}</td>
                        <td>{{ $value->cqtd }}</td>
                        <td>{{ $value->tel }}</td>
                        <td>{{ $value->email }}</td>
                        <td>
                            <a href="#">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $ds_dv->links() }}
        </div>
    @endif
    </div>

    <script>
        // $(document).ready(function () {
        //     $('body').animate({scrollTop:300}, '500');
        // })
    </script>

@endsection

