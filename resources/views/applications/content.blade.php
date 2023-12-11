<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application content Editor</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

</head>
<body>

<div class="container mt-5">


    <div class="tab-content mt-2">
        <h4>Application Content Editor</h4>
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



    <div class="row border rounded ">
       <div class="col-md-12">
        <form>
            <div class="form-group">

              <label  class="mt-3 h5 text-center">{{ $application->name }}</label>

            </div>


              <div class="form-group ">
                <label for="exampleFormControlTextarea1">Body</label>
                <textarea class="form-control border rounded border-success bg-dark text-white" name="body"  rows="38">{{ $application->body }}</textarea>
              </div>



          </form>
       </div>
    </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>



</body>
</html>
