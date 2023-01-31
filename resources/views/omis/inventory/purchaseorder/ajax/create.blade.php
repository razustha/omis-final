<form action="{{route('inventory.purchaseorder.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","Reference Number")}}
</div><div class="col-lg-6">{{createText("telePhone","telePhone","Telephone")}}
</div><div class="col-lg-6">{{createText("venderName","venderName","Vender Name")}}
</div><div class="col-lg-6">{{createText("contractorPAN","contractorPAN","Contractor PAN")}}
</div><div class="col-lg-6">{{createText("address","address","Address")}}
</div><div class="col-lg-6">{{createText("projectCode","projectCode","Project Code")}}
</div><div class="col-lg-6">{{createText("fundingSource","fundingSource","Funding Source")}}
</div><div class="col-lg-4">{{createText("unit","unit","Unit")}}
</div><div class="col-lg-4">{{createText("totalUnit","totalUnit","Total Unit")}}
</div><div class="col-lg-4">{{createText("unitRate","unitRate","Unit Rate")}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount")}}
</div><div class="col-lg-6">{{createText("totalAmount","totalAmount","Total Amount")}}
</div><div class="col-lg-4">{{createText("adminName","adminName","Admin Name")}}
</div><div class="col-lg-4">{{createText("adminDesignation","adminDesignation","Admin Designation")}}
</div><div class="col-lg-4">{{createDate("adminDate","adminDate","Admin Date")}}
</div><div class="col-lg-4">{{createText("operationalName","operationalName","Operational Name")}}
</div><div class="col-lg-4">{{createText("operationalDesignation","operationalDesignation","Operational Designation")}}
</div><div class="col-lg-4">{{createDate("operationalDate","operationalDate","Operational Date")}}
</div><div class="col-lg-4">{{createText("vendorName","vendorName","Vendor Name")}}
</div><div class="col-lg-4">{{createText("vendorDesignation","vendorDesignation","Vendor Designation")}}
</div><div class="col-lg-4">{{createDate("vendorDate","vendorDate","Vendor Date")}}
</div><div class="col-lg-6">{{createText("specialRequest","specialRequest","Special Request")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createLabel('goodsDescription','form-label col-form-label','Description')}}{{createTextArea("goodsDescription","goodsDescription","Goods Description","","")}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks","",'')}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>