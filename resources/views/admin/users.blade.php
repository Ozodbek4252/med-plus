<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	
<!DOCTYPE html>
<html lang="en">
  <head>
  	@include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
  	@include("admin.sidebar")

  	<div class="container-fluid page-body-wrapper">
        @include("admin.navbar");

        <div style="padding-top: 65px; position: relative; top: 60px; left: 100px">
          <div class="col-lg-12 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users table</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> # </th>
                            <!-- <th> Id </th> -->
                            <th> First name </th>
                            <th> Amount </th>
                            <th> Deadline </th>
                          </tr>
                        </thead>

                        @foreach($data as $data)
                        @if($data->name!="admin")
                        <tbody>
                          <tr>
                            <td>{{$num++}}</td>
                            <!-- <td>{{$data->id}}</td> -->
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
                          </tr>
                        </tbody>
                        @endif
                        @endforeach

                      </table>
                    </div>
                  </div>
                </div>

              </div>
        </div>
    </div>
    </div>


  	@include("admin.adminscript")
  </body>
</html>



</body>
</html>