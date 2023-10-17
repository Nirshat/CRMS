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

        <!-- general form elements -->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">{{$data->fname.'′s Profile'}}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/profile/{{$data->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" value="{{$data->fname}}" required>
                    @error('fname')
                    <span style="color:red">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" value="{{$data->lname}}" required>
                    @error('lname')
                    <span style="color:red">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter Age" value="{{$data->age}}" required>
                    @error('age')
                    <span style="color:red">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="custom-select rounded-0" id="gender" name="gender" required>
                      <option disabled selected hidden>Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    @error('gender')
                    <span style="color:red">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{$data->email}}" required>
                    @error('email')
                    <span style="color:red">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update Record</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delCstmr">Delete Record</button>
            </div>
            </form>
        </div>
        <!-- /.card -->

        @include('components.deleteModal')
      
    </div>

<x-footer/>{{-- content footer --}}


@include('partials.below')
{{--

    Including the following...
    </BODY>
    </HTML>
    
--}}