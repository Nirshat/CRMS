@include('partials.above')
{{--

    Including the following...
    <DOCTYPE>
    <HTML>
    <HEAD>
    <BODY>
    
--}}


<x-navbar/>
<x-sidebar/>
@include('components.header') {{-- content header --}}


    <div class="main-content">

        <style>
            .card-body{
                border:1px solid #ddd;
                margin:auto
            }

            @media only screen and (min-width:900px){
                .card-body{
                    width:70%;
                }
            }
        </style>

        <div class="card-body">
            {{-- <x-msg/> --}}
            <p class="login-box-msg">Manage your Credentials</p>
      
            <form action="/acc" method="post">
              @method('PUT')
              @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Full Name" name="name" required value="{{$user->name}}">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              @error('name')
              <span style="color:red">{{$message}}</span>
              <hr>
              @enderror

              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email" required value="{{$user->email}}">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              @error('email')
              <span style="color:red">{{$message}}</span>
              <hr>
              @enderror

              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Old Password" name="oldpassword" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              @error('oldpassword')
              <span style="color:red">{{$message}}</span>
              <hr>
              @enderror

              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="New Password" name="password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              @error('password')
              <span style="color:red">{{$message}}</span>
              <hr>
              @enderror

              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Confirm New Password" name="password_confirmation" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              @error('password_confirmation')
              <span style="color:red">{{$message}}</span>
              <hr>
              @enderror

              <div class="row">
                <!-- <div class="col-auto">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos magni facilis quod.</p>
                </div> -->
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-success btn-block">Update</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
            {{-- <hr> --}}
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
        
      
    </div>

<x-footer/>{{-- content footer --}}


@include('partials.below')
{{--

    Including the following...
    </BODY>
    </HTML>
    
--}}