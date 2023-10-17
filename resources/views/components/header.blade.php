  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0"><i class=" {{ $icon }} "></i> 
              @if ($content !== "")
              {{ $content }}
              @else
                  {{ 'Content Title' }}
              @endif
              {{-- Content Title --}}
            </h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <x-msg/>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->