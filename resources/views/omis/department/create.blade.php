@extends('omis.partials.layouts')
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-content-body">
                    
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Add Department</h2>
                            </div>                 
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <form method="POST" action="store" enctype="multipart/form-data" class="row gy-3 mt-2">
                                    <div class="form-group col-md-6">
                                    {{createText("department_name","department_name","Department Name")}}
                                    </div>

                                    <div class="form-group col-md-6">
                                        {{createText("department_name","department_name","Parent Department")}}
                                        </div>
                                    <div class="form-control-wrap col-md-12">
                                    <?php createButton("btn-primary", "", "Submit"); ?>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection