<div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Edit City</h5><button type="button" class="btn-close"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-simplebar>
        <div class="card h-100">
            <div class="card-body">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("country_id","country_id","Country Id",'',$data->country_id)}}
</div><div class="col-lg-6">{{createText("state_id","state_id","State Id",'',$data->state_id)}}
</div><div class="col-lg-6">{{createText("district_id","district_id","District Id",'',$data->district_id)}}
</div><div class="col-lg-6">{{createText("cityName","cityName","CityName",'',$data->cityName)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form> </div>
        </div>
    </div>