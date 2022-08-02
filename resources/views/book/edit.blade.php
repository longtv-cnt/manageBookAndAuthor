<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sửa thông tin sách </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('styles.css')}}">
  </head>
  <body>
   <h2 class="text-center"> Sửa thông tin sách</h2>
<form method="POST" action="{{route('post_edit_book',['id'=>$book->id])}}">
<div class="form-group">
    @csrf
  <label for="">Tiêu đề</label>
  <input type="text"
    class="form-control" name="title"  placeholder=" tiêu đề sách" value="{{$book->title}}">

</div>
<div class="form-group">
    <label for="">Nội dung chính</label>
    <textarea
      class="form-control" name="content"  placeholder="Nội dung chính" value="">{{$book->content}}</textarea>

  </div>
  <div class="form-group">
    <label for="">Giá tiền</label>
    <input type="number"
      class="form-control" name="price"  placeholder="" value="{{$book->price}}">

  </div>
  <div class="form-group">
    <label for="">Nhà xuất bản</label>
    <input type="text"
      class="form-control" name="publisher"  placeholder="" value="{{$book->publisher}}">

  </div>

  <div class="form-group">
    <label for="">Nick name</label>
    <select
      class="form-control" name="nickname"  placeholder="" value="{{$book->nickname}}">
      @foreach($authorList as $author )
        <option value="{{$author-> nickname}}">   {{$author-> nickname}}  </option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</html>
