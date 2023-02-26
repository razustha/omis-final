<form action="{{route('inventory.purchaseorder.update',[$data->purchaseorder_id])}}" id="updateCustomForm">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createDate("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","Reference Number",'',$data->referenceNumber)}}
</div><div class="col-lg-6">{{createText("telePhone","telePhone","Telephone",'',$data->telePhone)}}
</div><div class="col-lg-6">{{createText("venderName","venderName","Vendor Name",'',$data->venderName)}}
</div><div class="col-lg-6">{{createText("contractorPAN","contractorPAN","Contractor PAN",'',$data->contractorPAN)}}
</div><div class="col-lg-6">{{createText("address","address","Address",'',$data->address)}}
</div><div class="col-lg-6">{{createText("projectCode","projectCode","Project Code",'',$data->projectCode)}}
</div><div class="col-lg-6">{{createText("fundingSource","fundingSource","Funding Source",'',$data->fundingSource)}}
</div><div class="col-lg-4">{{createText("unit","unit","Unit",'',$data->unit)}}
</div><div class="col-lg-4">{{createText("totalUnit","totalUnit","Total Unit",'',$data->totalUnit)}}
</div><div class="col-lg-4">{{createText("unitRate","unitRate","Unit Rate",'',$data->unitRate)}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount",'',$data->amount)}}
</div><div class="col-lg-6">{{createText("totalAmount","totalAmount","Total Amount",'',$data->totalAmount)}}
</div><div class="col-lg-4">{{createText("adminName","adminName","Admin Name",'',$data->adminName)}}
</div><div class="col-lg-4">{{createText("adminDesignation","adminDesignation","Admin Designation",'',$data->adminDesignation)}}
</div><div class="col-lg-4">{{createDate("adminDate","adminDate","Admin Date",'',$data->adminDate)}}
</div><div class="col-lg-4">{{createText("operationalName","operationalName","Operational Name",'',$data->operationalName)}}
</div><div class="col-lg-4">{{createText("operationalDesignation","operationalDesignation","Operational Designation",'',$data->operationalDesignation)}}
</div><div class="col-lg-4">{{createDate("operationalDate","operationalDate","Operational Date",'',$data->operationalDate)}}
</div><div class="col-lg-4">{{createText("vendorName","vendorName","Vendor Name",'',$data->vendorName)}}
</div><div class="col-lg-4">{{createText("vendorDesignation","vendor Designation","Vendor Designation",'',$data->vendorDesignation)}}
</div><div class="col-lg-4">{{createDate("vendorDate","vendorDate","Vendor Date",'',$data->vendorDate)}}
</div><div class="col-lg-6">{{createText("specialRequest","specialRequest","Special Request",'',$data->specialRequest)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('goodsDescription','form-label col-form-label','Description')}}{{createTextArea("goodsDescription","goodsDescription","GoodsDescription",'',$data->goodsDescription)}}

</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks","",$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary btn-update","","Update"); ?>
</div> </form>