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
                            <th> Name </th>
                            <th> Owner </th>
                            <th> Phone </th>
                            <th> Address </th>
                            <th> Links </th>
                            <th> Work Days </th>
                            <th> Likes </th>
                            <th> Metro </th>
                            <th> Location </th>
                            <th> Logo </th>
                            <th> Action </th>
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
                            @foreach($users as $user)
                              @if($data[$i]->id == intval($user->user_id))
                                <td>{{$user->city}}, {{$user->state}}</td>

                              @endif
                            @endforeach
                            @if($data[$i]->address==null)
                                <td></td>
                            @endif
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