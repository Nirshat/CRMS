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

        
      
    </div>

<x-footer/>{{-- content footer --}}


@include('partials.below')
{{--

    Including the following...
    </BODY>
    </HTML>
    
--}}