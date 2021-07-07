<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laravel 8 Toastr Notification Example - websolutionstuff.com</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="">
        <img src="https://media-exp1.licdn.com/dms/image/C510BAQEdjKl11NB6-g/company-logo_200_200/0/1519959194921?e=2159024400&v=beta&t=DDGPgnMddsArR4oUVxPcRnCXjIm7LqkMtAWlBkTmL1Y" width="30" height="30" class="d-inline-block align-top" alt="">
        CodeGym
    </a>
</nav>

<div class="row">
    <div class="col-8">
        <a href="{{route('agency.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Thêm
            mới</a>
    </div>
    <div class="col-4">
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline" method="get" action="{{route('agency.search')}}">
                @csrf
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Tên đại lý" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>
</div>
<h2>Danh sách đại lý phân phối</h2>
<hr>
<table class="table">
    <thead style="background-color: #85f7c3">
    <tr style="text-align: center">
        <th scope="col">Mã đại lý</th>
        <th scope="col">Tên dại lý</th>
        <th scope="col">Điện thoại</th>
        <th scope="col">Email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Tên người quản lý</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Chức năng</th>
    </tr>
    </thead>
    <tbody style="text-align: center">
    @if(count($agencies)>0)
        @foreach($agencies as $agency)
            <tr>
                <th scope="row">{{$agency->agency_id}}</th>
                <td>{{$agency->agency_name}}</td>
                <td>{{$agency->agency_phone}}</td>
                <td>{{$agency->agency_email}}</td>
                <td>{{$agency->agency_address}}</td>
                <td>{{$agency->manager_name}}</td>
                <td>
                    @if($agency->status == 1)
                        Hoạt động
                        @else
                        Không hoạt động
                    @endif
                </td>

                <td>
                    <a class="btn btn-warning" href="{{route('agency.edit',$agency->id)}}">Sửa</a>
                    <a onclick="return confirm('Are you Sure?')" class="btn btn-danger"
                       href="{{route('agency.delete',$agency->id)}}" role="button">Xoá</a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>
</body>
</html>
