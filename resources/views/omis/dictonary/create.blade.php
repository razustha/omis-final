@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container-fluid">
                <div class="nk-content-inner"><form method="POST" action="store" enctype="multipart/form-data">
{{createText("dictonary_id","dictonary_id","Dictonary Id")}}
{{createText("nepaliWord","nepaliWord","NepaliWord")}}
{{createText("englishWord","englishWord","EnglishWord")}}
{{createText("created_by","created_by","Created By")}}
{{createText("created_on","created_on","Created On")}}
{{createText("remarks","remarks","Remarks")}}
{{createText("status","status","Status")}}
{{createText("created_at","created_at","Created At")}}
{{createText("updated_at","updated_at","Updated At")}}
<?php createButton("btn-primary","","Submit"); ?>
 </form></div></div></div>
@endsection