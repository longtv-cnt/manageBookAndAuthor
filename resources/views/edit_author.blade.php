<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cập nhật tác giả</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('styles.css')}}">
  </head>
  <body>
   <h2 class="text-center"> Sửa tác giả</h2>
<form method="POST" action="{{route('post_edit_author',['nickname'=>$author->nickname])}}">
<div class="form-group">
    @csrf
  <label for="">Điền nick name</label>
  <input type="text"
    class="form-control" name="nickname"  placeholder=" nick name" value="{{$author->nickname}}" readonly>

</div>
<div class="form-group">
    <label for="">Tên đầy đủ</label>
    <input type="text"
      class="form-control" name="fullname"  placeholder="Điền tên đầy đủ"  value="{{$author->fullname}}">

  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email"
      class="form-control" name="email"  placeholder="Điền email"  value="{{$author->email}}">

  </div>
  <div class="form-group">
    <label for="">Địa chỉ</label>
    <input type="text"
      class="form-control" name="address"  placeholder="Chỗ ở hiện tại" value="{{$author->address}}">

  </div>

  <div class="form-group">
    <label for="">Di động</label>
    <input type="text"
      class="form-control" name="phone_number"  placeholder="Điên số di động" value="{{$author->phone_number}}">

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</html>
