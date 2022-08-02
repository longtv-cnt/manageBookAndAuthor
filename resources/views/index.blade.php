<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Quản lý tác giả</title>
</head>

<body>
    <div class="container">

        <div class="panel panel primary">
            <div class="panel-heading">
            </div>

        </div>
        <h2 class="text-center"> Quản lý tác giả</h2>
    </div>
    <div class="panel-body">
        <a href="{{ route('bookList') }}"><button class="btn btn-link">Quản lý sách</button></a>
        <button class="btn btn-success" onclick="window.open('{{ route('addAuthor') }}')"> Thêm tác giả</button>
        <table class="table  table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Nick name</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone number</th>
                    <th>Created at</th>
                    <th>updated at</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($authorList as $author)
                    <tr>
                        <td>{{ $index++ }}</td>

                        <td>{{ $author->nickname }}</td>
                        <td>{{ $author->fullname }}</td>
                        <td>{{ $author->email }}</td>
                        <td>{{ $author->address }}</td>
                        <td>{{ $author->phone_number }}</td>

                        <td>{{ $author->created_at }}</td>
                        <td>{{ $author->updated_at }}</td>
                        <td><a href="{{ route('edit_author', ['nickname' => $author->nickname]) }}"><button
                                    class="btn btn-warning"> Edit </button></a> </td>

                        <td><a href="{{ route('delete', ['nickname' => $author->nickname]) }}"><button
                                    class="btn btn-danger"> Delete </button> </a></td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
