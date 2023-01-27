
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("date","date","Date",'',$data->date)}}
</div><div class="col-lg-6">{{createText("referenceNumber","referenceNumber","ReferenceNumber",'',$data->referenceNumber)}}
</div><div class="col-lg-6">{{createText("telePhone","telePhone","TelePhone",'',$data->telePhone)}}
</div><div class="col-lg-6">{{createText("venderName","venderName","VenderName",'',$data->venderName)}}
</div><div class="col-lg-6">{{createText("contractorPAN","contractorPAN","ContractorPAN",'',$data->contractorPAN)}}
</div><div class="col-lg-6">{{createText("address","address","Address",'',$data->address)}}
</div><div class="col-lg-6">{{createText("projectCode","projectCode","ProjectCode",'',$data->projectCode)}}
</div><div class="col-lg-6">{{createText("fundingSource","fundingSource","FundingSource",'',$data->fundingSource)}}
</div><div class="col-lg-6">{{createText("goodsDescription","goodsDescription","GoodsDescription",'',$data->goodsDescription)}}
</div><div class="col-lg-6">{{createText("unit","unit","Unit",'',$data->unit)}}
</div><div class="col-lg-6">{{createText("totalUnit","totalUnit","TotalUnit",'',$data->totalUnit)}}
</div><div class="col-lg-6">{{createText("unitRate","unitRate","UnitRate",'',$data->unitRate)}}
</div><div class="col-lg-6">{{createText("amount","amount","Amount",'',$data->amount)}}
</div><div class="col-lg-6">{{createText("totalAmount","totalAmount","TotalAmount",'',$data->totalAmount)}}
</div><div class="col-lg-6">{{createText("specialRequest","specialRequest","SpecialRequest",'',$data->specialRequest)}}
</div><div class="col-lg-6">{{createText("adminName","adminName","AdminName",'',$data->adminName)}}
</div><div class="col-lg-6">{{createText("adminDesignation","adminDesignation","AdminDesignation",'',$data->adminDesignation)}}
</div><div class="col-lg-6">{{createText("adminDate","adminDate","AdminDate",'',$data->adminDate)}}
</div><div class="col-lg-6">{{createText("operationalName","operationalName","OperationalName",'',$data->operationalName)}}
</div><div class="col-lg-6">{{createText("operationalDesignation","operationalDesignation","OperationalDesignation",'',$data->operationalDesignation)}}
</div><div class="col-lg-6">{{createText("operationalDate","operationalDate","OperationalDate",'',$data->operationalDate)}}
</div><div class="col-lg-6">{{createText("vendorName","vendorName","VendorName",'',$data->vendorName)}}
</div><div class="col-lg-6">{{createText("vendorDesignation","vendorDesignation","VendorDesignation",'',$data->vendorDesignation)}}
</div><div class="col-lg-6">{{createText("vendorDate","vendorDate","VendorDate",'',$data->vendorDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>