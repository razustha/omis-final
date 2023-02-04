<form action="{{route('superadmin.package.store')}}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{createText("name","name","Name")}}
        </div>
        <div class="col-lg-6">{{createText("price","price","Price")}}
        </div>
      
    
        <div class="col-lg-6">{{createText("duration","duration","Duration")}}
        </div>
        <div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
        </div>
        <!-- <div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
        </div> -->
        <div class="col-lg-12">{{createLabel('description','form-label col-form-label','Description')}}{{createTextArea("description","description","Description","","")}}
        </div>
         <br>
         <br>
<div class="col-lg-12 mt-4 mb-1">
    <h3>Features</h3>
</div>
<div class="col-lg-4">
 <?php 
 $count=1;
 $totalModulle = count(getModules());
 ?>   
@foreach(getModules() as $module)
    
    {{createCheck($module->moduleName,$module->moduleName,$module->moduleName,"","","")}}

    @if($count%5 == 0 && $totalModulle > 5)
    </div>
    <div class="col-lg-4">
    @endif
    <?php $count++ ?>

    @endforeach    
</div>





        <div class="col-md-12">
            <?php createButton("btn-primary btn-store","","Submit"); ?>
        </div>
    </div>
</form>
<script>
     $('.feature').select2({
        tags: true
    });
</script>