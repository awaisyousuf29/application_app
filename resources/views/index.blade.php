<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabbed Layout with DataTables</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
</head>
<body>

<div class="container mt-5">
    <ul class="nav nav-tabs" id="myTabs">
        <li class="nav-item">
            <a class="nav-link active" id="design-tab" data-toggle="tab" href="#design">Application Designer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="text-tab" data-toggle="tab" href="#text">Applications (Content Edit only)</a>
        </li>
    </ul>

    <div class="tab-content mt-2">
        <div class="tab-pane fade show active" id="design">
           @if (session('success'))
               <div class="alert alert-success">
             {{ session('success') }}
               </div>

           @endif
           @if (session('error'))
               <div class="alert alert-danger">
                   {{ session('error') }}
               </div>

           @endif

            <h2>Application Designer</h2>
            <!-- DataTable for Application Design -->
            <table id="designTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($applications as $app)
                <tr>
                    <td>{{ $app->id }}</td>
                    <td>{{ $app->name }}</td>
                    <td><a class="btn btn-primary" href="{{ route('edit', ['id' => $app->id,'for' => 'design'])}}">Edit</a></td>

                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="text">
            <h2>Applications (Content Edit only)</h2>

            <table id="textTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $app)
                    <tr>
                        <td>{{ $app->id }}</td>
                    <td>{{ $app->name }}</td>
                    <td><a class="btn btn-primary" href="{{ route('edit', ['id' => $app->id,'for' => 'text'])}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function () {
        // Initialize DataTable for Application Design
        $('#designTable').DataTable({
            // Your DataTable configurations for Application Design
        });

        // Initialize DataTable for Application Text
        $('#textTable').DataTable({
            // Your DataTable configurations for Application Text
        });
    });
</script>

</body>
</html>
