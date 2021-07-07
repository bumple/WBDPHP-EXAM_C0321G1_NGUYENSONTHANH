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
</head>
<body>


<div class="card" style="width: 50rem;margin-left: 50px">
    <div class="card-header">
        Sửa thông tin
    </div>
    <div>
        <form method="post" action="{{route('agency.update',$agency->id)}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Mã số đại lý</label>
                <input value="{{$agency->agency_id}}" type="number" name="agency_id" class="form-control"
                       id="exampleInputEmail1" placeholder="Mã số đại lý">
                @error('agency_id')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tên đại lý</label>
                <input value="{{$agency->agency_name}}" type="text" name="agency_name" class="form-control"
                       id="exampleInputEmail1" placeholder="Tên đại lý">
                @error('agency_name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input value="{{$agency->agency_phone}}" name='agency_phone' type="number" class="form-control"
                       id="exampleInputEmail1" placeholder="Số điện thoại">
                @error('agency_phone')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input value="{{$agency->agency_email}}" type="email" name="agency_email" class="form-control"
                       id="exampleInputEmail1" placeholder="Email">
                @error('agency_email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                Địa chỉ
                <input value="{{$agency->agency_address}}" type="text" name='agency_address' class="form-control"
                       id="exampleInputEmail1" placeholder="Địa chỉ">
                @error('agency_address')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tên người quản lý</label>
                <input value="{{$agency->manager_name}}" name="manager_name" type="text" class="form-control"
                       id="exampleInputEmail1" placeholder="Tên người quản lý">
                @error('manager.name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Trạng thái hoạt động</label>
                <select class="form-control" name="status" id="exampleFormControlSelect1">
                    <option @if($agency->status == 1) selected @endif value="1">Hoạt động</option>
                    <option @if($agency->status == 0) selected @endif value="0">Không hoạt động</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>


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
</body>
</html>
