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

                <div style="margin-bottom: 150px" class="card">
                  <div style="" class="card-body">
                    <h4 class="card-title">Users table</h4>
                    </p>
                    <div style="margin-bottom: 0px; overflow-x: scroll; width: 92%; margin-bottom: 30px" class="table-responsive">
                      <table style="margin-bottom: 10px; overflow: scroll; width: 100px" class="table table-dark">

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

                        @for ($i=0; $i<count($clinic); $i++)
                        <tbody>
                          <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $clinic[$i]->name }}</td>

                            @foreach ($data as $user)
                              @if($user->id == intval($clinic[$i]->user_id))
                                <td>{{$user->first_name}} {{$user->last_name}}</td>
                              @endif
                            @endforeach

                            <td>{{ $clinic[$i]->phone }}</td>

                            @if($clinic[$i]->address==null)
                              <td></td>
                            @else
                                @foreach ($clinicAddress as $user)
                                  @if($user->id == intval($clinic[$i]->address))
                                  <td>
                                    <ul style="list-style-type: none; margin-bottom: 0; padding-left: 0">
                                      @if($user->apartment!=null)
                                        <li style="margin-bottom: 5px">{{$user->apartment}}</li>
                                      @endif

                                      @if($user->street!=null)
                                        <li style="margin-bottom: 5px">{{$user->street}}</li>
                                      @endif

                                      @if($user->city!=null)
                                        <li style="margin-bottom: 5px">{{$user->city}}</li>
                                      @endif

                                      @if($user->state!=null)
                                        <li style="margin-bottom: 5px">{{$user->state}}</li>
                                      @endif

                                      @if($user->zip!=null)
                                        <li style="margin-bottom: 5px">{{$user->zip}}</li>
                                      @endif
                                    </ul>
                                    
                                  </td>
                                @endif
                                @endforeach
                            @endif

                            @if($clinic[$i]->links==null)
                              <td></td>
                            @else
                                @foreach ($clinicLink as $user)
                                  @if($user->id == intval($clinic[$i]->links))
                                  <td>
                                    <ul style="list-style-type: none; margin-bottom: 0; padding-left: 0">
                                      @if($user->email!=null)
                                        <li style="margin-bottom: 5px"><a href="{{$user->email}}">{{$user->email}}</a></li>
                                      @endif

                                      @if($user->tg!=null)
                                        <li style="margin-bottom: 5px"><a href="{{$user->tg}}">{{$user->tg}}</a></li>
                                      @endif

                                      @if($user->fb!=null)
                                        <li style="margin-bottom: 5px"><a href="{{$user->fb}}">{{$user->fb}}</a></li>
                                      @endif

                                      @if($user->insta!=null)
                                        <li style="margin-bottom: 5px"><a href="{{$user->insta}}">{{$user->insta}}</a></li>
                                      @endif

                                    </ul>
                                    
                                  </td>
                                @endif
                                @endforeach
                            @endif

                            @if($clinic[$i]->work_days==null)
                              <td></td>
                            @else
                                @foreach ($clinicWorkDay as $user)
                                  @if($user->id == intval($clinic[$i]->work_days))
                                  <td>
                                    <ul style="list-style-type: none; margin-bottom: 0; padding-left: 0">
                                      @if($user->mon!=null)
                                        <li style="margin-bottom: 5px">Mon: {{$user->mon}}</li>
                                      @endif
                                      @if($user->tue!=null)
                                        <li style="margin-bottom: 5px">Tue: {{$user->tue}}</li>
                                      @endif
                                      @if($user->wed!=null)
                                        <li style="margin-bottom: 5px">Wed: {{$user->wed}}</li>
                                      @endif
                                      @if($user->thu!=null)
                                        <li style="margin-bottom: 5px">Thu: {{$user->thu}}</li>
                                      @endif
                                      @if($user->fri!=null)
                                        <li style="margin-bottom: 5px">Fri: {{$user->fri}}</li>
                                      @endif
                                      @if($user->sat!=null)
                                        <li style="margin-bottom: 5px">Sat: {{$user->sat}}</li>
                                      @endif
                                      @if($user->sun!=null)
                                        <li style="margin-bottom: 5px">Sun: {{$user->sun}}</li>
                                      @endif
                                    </ul>
                                  </td>
                                @endif
                                @endforeach
                            @endif




                            <td>{{ $clinic[$i]->likes }}</td>
                            <td>{{ $clinic[$i]->metro }}</td>
                            <td>{{ $clinic[$i]->location }}</td>
                            <td>{{ $clinic[$i]->metro }}</td> <!-- change to logo --> 
                            
                            <td><a href="{{url('/clinicEdit', $clinic[$i]->id)}}">Edit</a></td>
                          </tr>
                        </tbody>
                        @endfor
                      </table>
                    </div>
                      <span>{{$clinic->links()}}</span>

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