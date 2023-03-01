<div class="" id="" style="margin-top: 60px">
    @if ($message = Session::get('success'))
      

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
            <em class="ni ni-check icon me-1"></em>   
            <strong>{{ $message }}</strong>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
    @endif


    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif


    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif


    @if ($message = Session::get('info'))
        <div class="alert alert-info alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif


    @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Please check the form below for errors
        </div>
    @endif
</div>
