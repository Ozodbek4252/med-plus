<!DOCTYPE html>
<html>

<head>
  <base href="/public">
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

            <div style="margin-bottom: 80px" class="card">
              <div class="card-body">
                <h4 class="card-title">Clinic</h4>
                </p>


                <form method="post" action="{{ url('/addrole', $data->id) }}">
                  @csrf

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Name</label>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Clinic Name" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="phone">Phone</label>
                      <input name="phone" type="text" class="form-control" id="phone" placeholder="+998 98 765 43 21" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address (optional)</label>
                    <input name="street" type="text" class="form-control" id="inputAddress" placeholder="Ko'cha">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Address 2 (optional)</label>
                    <input name="apartment" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input name="city" type="text" placeholder="Shahar / Tuman" class="form-control" id="inputCity" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <select name="state" id="inputState" class="form-control" required="">
                        <option>Choose...</option>
                        <option value="Toshkent">Toshkent</option>
                        <option value="Farg'ona">Farg'ona</option>
                        <option value="Andijon">Andijon</option>
                        <option value="Namangan">Namangan</option>
                        <option value="Sirdaryo">Sirdaryo</option>
                        <option value="Samarqand">Samarqand</option>
                        <option value="Jizzax">Jizzax</option>
                        <option value="Buxoro">Buxoro</option>
                        <option value="Navoiy">Navoiy</option>
                        <option value="Qashqadaryo">Qashqadaryo</option>
                        <option value="Surxondaryo">Surxondaryo</option>
                        <option value="Xorazm">Xorazm</option>
                        <option value="Qoraqolpog'iston">Qoraqolpog'iston</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip (optional)</label>
                      <input name="zip" type="text" class="form-control" id="inputZip">
                    </div>
                  </div>

                  <label for="inputState">Ish kunlari</label>
                  <table class="table table-dark">
                        <tbody>

                          <tr>
                            <td style="padding-top: 0; padding-bottom: 0;" class="form-group col-md-6">
                              <div class="form-check">
                                <input name="mon" value="check" class="form-check-input moncheck" type="checkbox" id="moncheck">
                                <label style="-webkit-touch-callout: none; -webkit-user-select: none;-khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;" class="form-check-label" for="moncheck">
                                  Monday
                                </label>
                              </div>
                            </td>

                            <td class="form-group col-md-6">
                                <div class="form-row">
                                  <div style="padding-right: 10px;">
                                    <input name="monstart" type="time" class="monday" disabled>
                                  </div>
                                  <div>
                                    <input name="monend" type="time" class="monday" disabled>
                                  </div>
                                </div>
                            </td>
                          </tr>


                          <tr>
                            <td style="padding-top: 0; padding-bottom: 0;" class="form-group col-md-6">
                              <div class="form-check">
                                <input name="tue" value="check" class="form-check-input tuecheck" type="checkbox" id="tuecheck">
                                <label style="-webkit-touch-callout: none;-webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none;  user-select: none;" class="form-check-label" for="tuecheck">
                                  Tuesday
                                </label>
                              </div>
                            </td>
                            <td class="form-group col-md-6">
                                <div class="form-row">
                                  <div style="padding-right: 10px;">
                                    <input name="tuestart" type="time" class="tuesday" disabled>
                                  </div>
                                  <div>
                                    <input name="tueend" type="time" class="tuesday" disabled>
                                  </div>
                                </div>
                            </td>
                          </tr>


                          <tr>
                            <td style="padding-top: 0; padding-bottom: 0;" class="form-group col-md-6">
                              <div class="form-check">
                                <input name="wed" value="check" class="form-check-input wedcheck" type="checkbox" id="wedcheck">
                                <label style="-webkit-touch-callout: none;-webkit-user-select: none; -khtml-user-select:none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="wedcheck">
                                  Wednesday
                                </label>
                              </div>
                            </td>

                            <td class="form-group col-md-6">
                                <div class="form-row">
                                  <div style="padding-right: 10px;">
                                    <input name="wedstart" type="time" class="wednesday" disabled>
                                  </div>
                                  <div>
                                    <input name="wedend" type="time" class="wednesday" disabled>
                                  </div>
                                </div>
                            </td>
                          </tr>


                          <tr>
                            <td style="padding-top: 0; padding-bottom: 0;" class="form-group col-md-6">
                              <div class="form-check">
                                <input name="thu" value="check" class="form-check-input thucheck" type="checkbox" id="thucheck">
                                <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="thucheck">
                                  Thursday
                                </label>
                              </div>
                            </td>
                            <td class="form-group col-md-6">
                                <div class="form-row">
                                  <div style="padding-right: 10px;">
                                    <input name="thustart" type="time" class="thursday" disabled>
                                  </div>
                                  <div>
                                    <input name="thuend" type="time" class="thursday" disabled>
                                  </div>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-top: 0; padding-bottom: 0;" class="form-group col-md-6">
                              <div class="form-check">
                                <input name="fri" value="check" class="form-check-input fricheck" type="checkbox" id="fricheck">
                                <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="fricheck">
                                  Friday
                                </label>
                              </div>
                            </td>
                            <td class="form-group col-md-6">
                                <div class="form-row">
                                  <div style="padding-right: 10px;">
                                    <input name="fristart" type="time" class="friday" disabled>
                                  </div>
                                  <div>
                                    <input name="friend" type="time" class="friday" disabled>
                                  </div>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-top: 0; padding-bottom: 0;" class="form-group col-md-6">
                              <div class="form-check">
                                <input name="sat" value="check" class="form-check-input satcheck" type="checkbox" id="satcheck">
                                <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="satcheck">
                                  Saturday
                                </label>
                              </div>
                            </td>
                            <td class="form-group col-md-6">
                                <div class="form-row">
                                  <div style="padding-right: 10px;">
                                    <input name="satstart" type="time" class="saturday" disabled>
                                  </div>
                                  <div>
                                    <input name="satend" type="time" class="saturday" disabled>
                                  </div>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-top: 0; padding-bottom: 0;" class="form-group col-md-6">
                              <div class="form-check">
                                <input name="sun" value="check" class="form-check-input suncheck" type="checkbox" id="suncheck">
                                <label style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" class="form-check-label" for="suncheck">
                                  Sunday
                                </label>
                              </div>
                            </td>
                            <td class="form-group col-md-6">
                                <div class="form-row">
                                  <div style="padding-right: 10px;">
                                    <input name="sunstart" type="time" class="sunday" disabled>
                                  </div>
                                  <div>
                                    <input name="sunend" type="time" class="sunday" disabled>
                                  </div>
                                </div>
                            </td>
                          </tr>
                        </tbody>
                  </table>

                  <label style="margin-top: 20px;" for="inputState">Links</label>
                  <div class="form-row">
                    <div style="margin: 0;" class="form-group col-md-6" >
                      <label class="link-label" for="link-email">Email</label>
                      <input id="link-email" class="links-input" style="width: 100%" type="text" name="email" placeholder="Enter your email address...">
                      <label class="link-label" for="link-tg">Telegram</label>
                      <input id="link-tg" class="links-input" style="width: 100%" type="text" name="tg" placeholder="Paste telegram link...">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="link-label" for="link-fb">Facebook</label>
                      <input id="link-fb" class="links-input" style="width: 100%" type="text" name="fb" placeholder="Paste facebook link...">
                      <label class="link-label" for="link-insta">Instagram</label>
                      <input id="link-insta" class="links-input" style="width: 100%" type="text" name="insta" placeholder="Paste instagram link...">
                    </div>
                  </div>

                  <div>
                    <label for="logo">Logo</label>
                    <input name="logo" style="display: block;" type="file" id="logo" name="logo">
                  </div>

                  <div>
                    Map
                  </div>

                  <!-- <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div> -->
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </form>


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