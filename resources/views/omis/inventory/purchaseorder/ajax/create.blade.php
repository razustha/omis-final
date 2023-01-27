<form action="{{route('inventory.purchaseorder.store')}}" id="storeCustomForm">
 @csrf 
<div class="row"><div class="col-lg-6">{{createDate("date","date","Date")}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","ReferenceNumber")}}
</div><div class="col-lg-6">{{createText("telePhone","telePhone","TelePhone")}}
</div><div class="col-lg-6">{{createText("venderName","venderName","VenderName")}}
</div><div class="col-lg-6">{{createText("contractorPAN","contractorPAN","ContractorPAN")}}
</div><div class="col-lg-6">{{createText("address","address","Address")}}
</div><div class="col-lg-6">{{createText("projectCode","projectCode","ProjectCode")}}
</div><div class="col-lg-6">{{createText("fundingSource","fundingSource","FundingSource")}}
</div><div class="col-lg-6">{{createText("goodsDescription","goodsDescription","GoodsDescription")}}
</div><div class="col-lg-6">{{createText("unit","unit","Unit")}}
</div><div class="col-lg-6">{{createText("totalUnit","totalUnit","TotalUnit")}}
</div><div class="col-lg-6">{{createText("unitRate","unitRate","UnitRate")}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount")}}
</div><div class="col-lg-6">{{createText("totalAmount","totalAmount","TotalAmount")}}
</div><div class="col-lg-4">{{createText("adminName","adminName","AdminName")}}
</div><div class="col-lg-4">{{createText("adminDesignation","adminDesignation","AdminDesignation")}}
</div><div class="col-lg-4">{{createDate("adminDate","adminDate","AdminDate")}}
</div><div class="col-lg-4">{{createText("operationalName","operationalName","OperationalName")}}
</div><div class="col-lg-4">{{createText("operationalDesignation","operationalDesignation","OperationalDesignation")}}
</div><div class="col-lg-4">{{createDate("operationalDate","operationalDate","OperationalDate")}}
</div><div class="col-lg-4">{{createText("vendorName","vendorName","VendorName")}}
</div><div class="col-lg-4">{{createText("vendorDesignation","vendorDesignation","VendorDesignation")}}
</div><div class="col-lg-4">{{createDate("vendorDate","vendorDate","VendorDate")}}
</div><div class="col-lg-6">{{createText("specialRequest","specialRequest","SpecialRequest")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks","",'')}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary btn-store","","Submit"); ?>
</div> </form>