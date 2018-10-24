<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{url('css/admin.css')}}">

</head>
<body>
 <div class="container-fluid">
      <div class="row row-heading">
            <div class="col-sm-4">
              <img src="{{url('icon_files/Digitallogo.svg')}}" class="digitalistic-logo">
            </div>
            <div class="col-sm-4" >
              <h1  style="color: white;font-family:Raleway;"><b>ADMIN PANEL</b></h1>
            </div>
            <div class="col-sm-4" style="padding-left: 10%;">
              <a href="{{url('admin/logout')}}"><button type="button" class="btn btn-danger">Logout</button></a>
            </div>
      </div>
      <div class="row body-section">
            <div class="container">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-font" role="tablist">
            <li class="nav-item">
              <a class="nav-link active " data-toggle="tab" href="#slider" >SLIDER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " data-toggle="tab" href="#portfolio">PORTFOLIO PDF</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " data-toggle="tab" href="#service">SERVICE ICONS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " data-toggle="tab" href="#gallery">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " data-toggle="tab" href="#team">OUR TEAM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " data-toggle="tab" href="#biograhy">BIOGRAPHY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " data-toggle="tab" href="#client">CLIENT LOGOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " data-toggle="tab" href="#official">OFFICIAL ADDRESS</a>
            </li>

          </ul>

          <!-- Tab panes -->
          <div class="tab-content">

            <div id="slider" class="container tab-pane tab-style"><br>
              <form class="" action="{{url('admin/carousel/')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-2 push-1" style="padding-bottom: 5%;text-align: center;">
                    <span class="align-middle" style="color: white;">Caption Heading</span>
                    </div>
                    <div class="col-2 push-1" style="padding-bottom: 5%;text-align: center;">
                    <span class="align-middle" style="color: white;">Caption Content</span>
                    </div>
                    <div class="col-3 push-1" style="padding-bottom: 5%;text-align: center;">
                    <span class="align-middle" style="color: white;">Slider Upload</span>
                    </div>
                    <div class="col-2 push-1" style="padding-bottom: 5%;text-align: left;">
                    <span class="align-middle" style="color: white;">Caption Color</span>
                    </div>
                    <div class="col-2 push-1" style="padding-bottom: 5%;text-align: left;">
                    <span class="align-middle" style="color: white;">Caption Alignment</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                      <div class="row">
                        <div class="col-1">
                            <span class="align-middle" style="color: white;">1.</span>
                        </div>
                        <div class="form-group col-2">
                          <textarea class="form-control" rows="1" name="caption-heading[]"></textarea>
                        </div>
                        <div class="form-group col-2">
                          <textarea class="form-control" rows="1" name="caption-description[]"></textarea>
                        </div>
                        <div class="form-group col-3">
                            <label class="custom-file">
                              <input type="file" class="custom-file-input" name="carousel[]" required>
                              <span class="custom-file-control"></span>
                            </label>
                        </div>
                        <div class="form-group col-2 ">
                          <select class="form-control" name="font[]">
                            <option value="black">Black</option>
                            <option value="white">White</option>
                          </select>
                        </div>
                        <div class="form-group col-2 ">
                          <select class="form-control" name="align[]">
                            <option value="left-align">left</option>
                            <option value="center-align">center</option>
                            <option value="right-align">right</option>
                          </select>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                      <div class="row">
                        <div class="col-1">
                            <span class="align-middle" style="color: white;">2.</span>
                        </div>
                        <div class="form-group col-2">
                          <textarea class="form-control" rows="1" name="caption-heading[]"></textarea>
                        </div>
                        <div class="form-group col-2">
                          <textarea class="form-control" rows="1" name="caption-description[]"></textarea>
                        </div>
                        <div class="form-group col-3">
                            <label class="custom-file">
                              <input type="file" class="custom-file-input" name="carousel[]" required>
                              <span class="custom-file-control"></span>
                            </label>
                        </div>
                        <div class="form-group col-2 ">
                          <select class="form-control" name="font[]">
                            <option value="black">Black</option>
                            <option value="white">White</option>
                          </select>
                        </div>
                        <div class="form-group col-2 ">
                          <select class="form-control" name="align[]">
                            <option value="left-align">left</option>
                            <option value="center-align">center</option>
                            <option value="right-align">right</option>
                          </select>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                      <div class="row">
                        <div class="col-1">
                            <span class="align-middle" style="color: white;">3.</span>
                        </div>
                        <div class="form-group col-2">
                          <textarea class="form-control" rows="1" name="caption-heading[]"></textarea>
                        </div>
                        <div class="form-group col-2">
                          <textarea class="form-control" rows="1" name="caption-description[]"></textarea>
                        </div>
                        <div class="form-group col-3">
                            <label class="custom-file">
                              <input type="file" class="custom-file-input" name="carousel[]" required>
                              <span class="custom-file-control"></span>
                            </label>
                        </div>
                        <div class="form-group col-2 ">
                          <select class="form-control" name="font[]">
                            <option value="black">Black</option>
                            <option value="white">White</option>
                          </select>
                        </div>
                        <div class="form-group col-2 ">
                          <select class="form-control" name="align[]">
                            <option value="left-align">left</option>
                            <option value="center-align">center</option>
                            <option value="right-align">right</option>
                          </select>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    <div class="row  justify-content-start">
                        <div class="form-group col-3 push-3">
                          {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary" >Submit</button>
                        </div>
                    </div>
                  </div>
                </div>

            </form>
            </div>

            <div id="portfolio" class="container tab-pane fade tab-style"><br>
              <form class="" action="{{url('admin/portfolio/')}}" method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="col-6">
                  <div class="row">
                      <div class="col-12" style="padding-bottom: 5%;">
                      <span class="align-middle" style="color: white;">Portfoli File/link</span>
                      </div>
                      <div class="form-group col-10">
                      <label class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="portfolio" required>
                        <span class="custom-file-control"></span>
                      </label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-4">
                        <div class="row  justify-content-start">
                            <div class="form-group col-2">
                                <button type="submit" class="btn btn-primary" >Submit</button>
                                {{ csrf_field() }}
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </form>
            </div>

            <div id="service" class="container tab-pane fade tab-style"><br>
              <form class="" action="{{url('admin/service/')}}" method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="col-10">
                  <div class="row">
                      <div class="col-3" style="padding-bottom: 5%;text-align: right;">
                      <span class="align-middle" style="color: white;">TITLE</span>
                      </div>
                      <div class="col-6" style="padding-bottom: 5%;text-align: center;">
                      <span class="align-middle" style="color: white;">DESCRIPTION</span>
                      </div>
                      <div class="col-3" style="padding-bottom: 5%;text-align: left;">
                      <span class="align-middle" style="color: white;">ICON</span>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-1">
                              <span class="align-middle" style="color: white;">1.</span>
                          </div>
                          <div class="form-group col-3">
                            <textarea class="form-control" rows="1" name="service-title[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                            <textarea class="form-control" rows="1" name="service-description[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                              <label class="custom-file">
                                <input type="file" class="custom-file-input" name="service-icons[]">
                                <span class="custom-file-control"></span>
                              </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-1">
                              <span class="align-middle" style="color: white;">2.</span>
                          </div>
                          <div class="form-group col-3">
                            <textarea class="form-control" rows="1" name="service-title[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                            <textarea class="form-control" rows="1" name="service-description[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                              <label class="custom-file">
                                <input type="file" class="custom-file-input" name="service-icons[]" >
                                <span class="custom-file-control"></span>
                              </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-1">
                              <span class="align-middle" style="color: white;">3.</span>
                          </div>
                          <div class="form-group col-3">
                            <textarea class="form-control" rows="1" name="service-title[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                            <textarea class="form-control" rows="1" name="service-description[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                              <label class="custom-file">
                                <input type="file" class="custom-file-input" name="service-icons[]">
                                <span class="custom-file-control"></span>
                              </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-1">
                              <span class="align-middle" style="color: white;">4.</span>
                          </div>
                          <div class="form-group col-3">
                            <textarea class="form-control" rows="1" name="service-title[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                            <textarea class="form-control" rows="1" name="service-description[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                              <label class="custom-file">
                                <input type="file" class="custom-file-input" name="service-icons[]">
                                <span class="custom-file-control"></span>
                              </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-1">
                              <span class="align-middle" style="color: white;">5.</span>
                          </div>
                          <div class="form-group col-3">
                            <textarea class="form-control" rows="1" name="service-title[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                            <textarea class="form-control" rows="1" name="service-description[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                              <label class="custom-file">
                                <input type="file" class="custom-file-input" name="service-icons[]">
                                <span class="custom-file-control"></span>
                              </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-1">
                              <span class="align-middle" style="color: white;">6.</span>
                          </div>
                          <div class="form-group col-3">
                            <textarea class="form-control" rows="1" name="service-title[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                            <textarea class="form-control" rows="1" name="service-description[]"></textarea>
                          </div>
                          <div class="form-group col-4">
                              <label class="custom-file">
                                <input type="file" class="custom-file-input" name="service-icons[]">
                                <span class="custom-file-control"></span>
                              </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                        <div class="row  justify-content-start">
                            <div class="form-group col-3 push-1">
                                <button type="submit" class="btn btn-primary" >Submit</button>
                            </div>
                        </div>
                      </div>
                  </div>

                </div>
              </div>
              {{ csrf_field() }}
            </form>
            </div>

            <div id="gallery" class="container tab-pane fade tab-style"><br>

              <div class="row">
                <div class="col-12">
                    <p style="color: white;">Upload Images</p>
                </div>
              </div>
              <form class="" action="{{url('admin/gallery/')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-3">
                      <label class="custom-file">
                        <input type="file" class="custom-file-input" name="gallery-images[]" multiple required>
                        <span class="custom-file-control"></span>
                      </label>
                  </div>
                  <div class="form-group col-4">
                      <button type="submit" class="btn btn-primary" >Save</button>
                      {{ csrf_field() }}
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-8">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Image list</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Image 1</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Image 2</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Image 3</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Image 3</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Image 3</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Image 3</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Image 3</td>
                          <td><a href="#">Delete</a></td>
                        </tr>

                      </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div id="team" class="container tab-pane fade tab-style"><br>
              <div class="row content">
                <div class="col-6">
                  <div class="">
                    <p class="fonts">Team Member List</p>

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Mustafa</td>
                          <td>CEO</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-6">
                  <form class="" action="{{url('admin/team/')}}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <p class="fonts">Name</p>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ $member['name'] }}">
                    </div>
                    <div class="form-group">
                      <p class="fonts">Position</p>
                      <input type="text" class="form-control" id="position" name="position" placeholder="Enter Position" value="{{ $member['position'] }}">
                    </div>
                    <div class="form-group">
                      <label for="Bio" class="fonts">Bio</label>
                      <textarea class="form-control" id="Bio" name="bio" rows="3">{{ $member['bio'] }}</textarea>

                    </div>
                    <div class="form-group">
                      <p class="fonts">Photos </p>
                      <label class="custom-file" for="image">
                        <input type="file" name="image" class="custom-file-input">
                        <input type="hidden" name="existingImage" value="{{ $member['photo'] }}">
                        <span class="custom-file-control"></span>
                      </label>
                    </div>
                    <label for="" class="fonts">Skills</label>
                    <div class="form-group">
                      <label for="" class="fonts">Creativity</label>
                      <input type="number" name="creativity" min="0" max="100" step="1" value="{{ $member['creativity'] }}">
                    </div>
                    <div class="form-group">
                      <label for="" class="fonts">Leadership</label>
                      <input type="number" name="leadership" min="0" max="100" step="1" value="{{ $member['leadership'] }}">
                    </div>
                    <div class="form-group">
                      <label for="" class="fonts">Skill</label>
                      <input type="number" name="skill" min="0" max="100" step="1" value="{{ $member['skill'] }}">
                    </div>
                    <div class="form-group">
                      <label for="" class="fonts">Comunication</label>
                      <input type="number" name="communication" min="0" max="100" step="1" value="{{ $member['communication'] }}">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="memberId" value="{{ $member['memberId'] }}">
                      <input type="submit" name="" value="Submit">
                      {{csrf_field()}}
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div id="biograhy" class="container tab-pane fade tab-style"><br>
              <form class="" action="{{url('admin/biography/')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <p style="color: white;">Biography</p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                      <textarea class="form-control" rows="8" name="bio"></textarea>
                    </div>
                </div>
                <div class="row justify-content-start">
                      <div class="col-12">
                        <p style="color: white;">Background Image</p>
                      </div>
                      <div class="form-group col-12">
                            <label class="custom-file">
                              <input type="file" class="custom-file-input" name="background-image">
                              <input type="hidden" name="existingBackground" value="{{ $bio['image'] }}">
                              <span class="custom-file-control"></span>
                            </label>
                      </div>
                      <div class="col-12">
                        <div class="row  justify-content-start">
                            <div class="form-group col-3">
                                <button type="submit" class="btn btn-primary" >Save</button>
                                {{ csrf_field() }}
                            </div>
                        </div>
                      </div>
                  </div>
                </form>
            </div>

            <div id="client" class="container tab-pane fade tab-style"><br>
              <div class="row">
                <div class="col-12">
                    <p style="color: white;">Upload Client logo</p>
                </div>
              </div>
              <form class="" action="{{url('admin/clients/')}}" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-3">
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" name="clients[]" multiple required>
                      <span class="custom-file-control"></span>
                    </label>
                </div>
                <div class="form-group col-4">
                    <button type="submit" class="btn btn-primary" >Save</button>
                    {{ csrf_field() }}
                </div>
              </div>
            </form>
              <div class="row">
                <div class="col-8">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Client list</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Client 1</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Client 2</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Client 3</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Client 3</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Client 3</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Client 3</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Client 3</td>
                          <td><a href="#">Delete</a></td>
                        </tr>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>


            <div id="official" class="container tab-pane fade tab-style"><br>
              <form class="" action="{{url('admin/address/')}}" method="post">
                <div class="row">
                    <div class="col-12">
                        <p style="color: white;">Official Address</p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                      <textarea class="form-control" rows="8" name="office"></textarea>
                    </div>
                </div>
                <div class="row">
                      <div class="col-12">
                        <div class="row  justify-content-start">
                            <div class="form-group col-3">
                                <button type="submit" class="btn btn-primary" >Save</button>
                                {{ csrf_field() }}
                            </div>
                        </div>
                      </div>
                  </div>
                </form>
            </div>


          </div>
      </div>
      </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script type="text/javascript">

  </script>
</body>
</html>
