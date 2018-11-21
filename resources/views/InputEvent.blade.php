@extends('navbar')
@section('navbar')

    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body style="background: url(../images/2.jpg)no-repeat; background-size: 180%">
<div class="container" style="padding-top: 130px">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h3> Event </h3>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="" action="{{route('form.store')}}" method="POST" role="form" style="display: block;" enctype="multipart/form-data" required>
                                {{csrf_field()}}
                                @foreach($users as $key => $users)
                                <div class="form-group" >
                                    <input type="hidden" class="form-control" id="eventname" name="user_id" placeholder="Event Name" value="{{$users->id}}">
                                </div>
                                @endforeach
                                <div class="form-group" >
                                    <label for="eventname" class="control-label">Nama Event</label>
                                    <input type="text" class="form-control" id="eventname" name="nama_Event" placeholder="Event Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="control-label" >Alamat Event</label>
                                    <textarea class="form-control" name="alamat_Event" id="address" rows="5" placeholder="Address" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="city_id" class="control-label">Kota</label>
                                    <input type="text" class="form-control" id="city_id" name="Kota" placeholder="City" required>
                                </div>

                                <div class="form-group">
                                    <label for="kategori" class="control-label">Kategori</label>
                                    <select class="form-control" id="kategori" name="Kategori" required>
                                        <option value="birthday">Birthday Party</option>
                                        <option value="wedding">Wedding Party</option>
                                        <option value="school">School Event</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="control-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi_Event" id="description" rows="5" placeholder="Description" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="harga" class="control-label">Harga Event</label>
                                    <input class="form-control" type="number" name="harga_Event" id="harga" required>
                                </div>

                                <div class="form-group">
                                    <label for="jadwal" class="control-label">Jadwal Event</label>
                                    <input class="form-control" type="date" name="jadwal_Event" id="jadwal">
                                </div>

                                <div class="form-group">
                                    <label for="image" class="control-label">Gambaran Dekor</label>
                                    <input type="file" name="Gambar" id="image">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


@endsection
