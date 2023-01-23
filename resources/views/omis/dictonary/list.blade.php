@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container-fluid">
                <div class="nk-content-inner"><?php $TableCols = array_keys((array)$TableRows[0]); $Table_pk=$TableCols[0];?>
<table class="datatable-init table" data-nk-container="table-responsive table-border">
<thead>
<tr>
<?php foreach ($TableCols as $TableCol) : ?>
<th class="text-nowrap"><span class="overline-title">
<?php echo label($TableCol); ?></span></th>
<?php endforeach; ?>
<th class="text-nowrap">Action</th>
</tr>
</thead>
<tbody>

            <?php foreach ($TableRows as $TableRow) : ?>

                <tr>
<?php foreach ($TableCols as $TableCol) : ?>

                                <th class="text-nowrap"><span class="overline-title"><?php echo $TableRow->$TableCol; ?></span></th>
                       
                    <?php endforeach; ?>
                    <th class="text-nowrap"><span class="overline-title">{{BibClass::addRowActions($TableRow->$Table_pk)}}</span></th>
                       
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table></div></div></div>@endsection