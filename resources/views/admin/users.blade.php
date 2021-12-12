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

        <div style="padding-top: 65px; position: relative; top: 60px;">
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
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> Phone </th>
                            <th> Email </th>
                            <th> Gender </th>
                            <th> Address </th>
                            <th> Date Of Birth </th>
                            <th> Action </th>
                            <th> Role </th>
                          </tr>
                        </thead>

                        @for ($i=0; $i<count($data); $i++)
                        @if($data[$i]->usertype!="1")
                        <tbody>
                          <tr>
                            <td>{{$num++}}</td>
                            <td>{{$data[$i]->first_name}}</td>
                            <td>{{$data[$i]->last_name}}</td>
                            <td>{{$data[$i]->phone}}</td>
                            <td>{{$data[$i]->email}}</td>
                            <td>{{$data[$i]->gender}}</td>

                            <td>{{$address[0]->state}}</td> <!-- need action -->

                            <td>{{$data[$i]->date_of_birth}}</td>
                            <td><a href="{{url('/deleteuser', $data[$i]->id)}}">Delete</a></td>
                            <td><a href="{{url('/role', $data[$i]->id)}}">Role</a></td>
                          </tr>
                        </tbody>
                        @endif
                        @endfor

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