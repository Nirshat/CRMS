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

        <div class="above-tb">
            <div class="addNewHolder">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCustomer">
                    Add New +
                </button>
            </div>
            <x-addModal/>


            <div id="dtButtonsHolder"></div>
        </div>

        <div class="table-responsive">
            <table id="example" class="display" style="width:100%">

                <tfoot class="selectsHolder">
                    <tr>
                    <th></th>
                    <th></th>
                    <th></th>

                    </tr>
                </tfoot>

                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($customers as $c)
                    <tr>
                        <td> {{$c->fname.' '.$c->lname}} </td>
                        <td> {{$c->age}} </td>
                        <td> {{$c->gender}} </td>
                        <td> {{$c->email}} </td>
                        <td> {{$c->created_at}} </td>
                        <td> {{$c->updated_at}} </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  modify
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="/profile{{$c->id}}">View</a>
                                  <form action="/destroy/{{$c->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="dropdown-item" type="submit" onclick="confirmAction()">Delete</button>
                                  </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      
    </div>

<x-footer/>{{-- content footer --}}


@include('partials.below')
{{--

    Including the following...
    </BODY>
    </HTML>
    
--}}