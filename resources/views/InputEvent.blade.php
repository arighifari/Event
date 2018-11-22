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
                            <form id="" action="" method="POST" role="form" style="display: block;">
                    <div class="form-group" > <!-- Full Name -->
                        <label for="eventname" class="control-label">Event Name</label>
                        <input type="text" class="form-control" id="eventname" name="nama_Event" placeholder="Event Name">
                    </div>

                    <div class="form-group"> <!-- Street 1 -->
                        <label for="address" class="control-label" >Address</label>
                        <textarea class="form-control" name="alamat_Event" id="address" rows="5" placeholder="Your Address"></textarea>
                    </div>

                    <div class="form-group"> <!-- City-->
                        <label for="city_id" class="control-label">City</label>
                        <input type="text" class="form-control" id="city_id" name="Kota" placeholder="City">
                    </div>

                    <div class="form-group"> <!-- State Button -->
                        <label for="kategori" class="control-label">Kategori</label>
                        <select class="form-control" id="kategori" name="Kategori">
                            <option value="birthday">Birthday Party</option>
                            <option value="wedding">Wedding Party</option>
                            <option value="school">School Event</option>
                        </select>
                    </div>

                    <div class="form-group"> <!-- Zip Code-->
                        <label for="description" class="control-label">Deskripsi</label>
                        <textarea class="form-control" name="Deskripsi" id="description" rows="5" placeholder="Description"></textarea>
                    </div>

                    <div class="form-group"> <!-- Zip Code-->
                        <label for="image" class="control-label">Gambaran Dekor</label>
                        <input type="file" name="Image" id="image">
                    </div>

                    <div class="form-group"> <!-- Submit Button -->
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
