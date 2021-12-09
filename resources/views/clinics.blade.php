<!DOCTYPE html>
<html>

<head>

  @include('homecss')

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="">
    </div>

    @include('homeheader')
  </div>

  <!-- doctor section -->

  <section style=" background-color: #fff; color: #000;" class="doctor_section layout_padding">
    <div class="container">
      <div style="position: relative; top: -50px; color: #000;"  class="heading_container heading_center">
        <h2>
          Our Clinics
        </h2>
        <p class="col-md-10 mx-auto px-0">
          Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit, quisquam aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe quas fugit, beatae id quisquam.
        </p>
      </div>

      <div class="clinics-search-div">
        
        <form method="get" action="{{url('/searchclinics')}}" class="clinics-search-form">
          <input class="search-input" type="search" placeholder="Search clinics..." name="clinics-search">
          <button class="clinics-search-button" type="submit">Search</button>
        </form>



        <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> # </th>
                            <!-- <th> Id </th> -->
                            <th> First name </th>
                            <th> Amount </th>
                          </tr>
                        </thead>

                       
                       @if($num)
                        @foreach($data as $data)
                        @if($data->name!='admin')
                        <tbody>
                          <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td><a href="{{url('/deleteuser')}}">Delete</a></td>
                          </tr>
                        </tbody>
                        @endif
                        @endforeach
                       @endif

                      </table>


      </div>


    </div>
  </section>

  <!-- end doctor section -->

  
  @include('homefooter')

  @include('homescript')
</body>

</html>