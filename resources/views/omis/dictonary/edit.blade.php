<form method="POST" action="update" enctype="multipart/form-data">
<?php foreach ($TableCols as $TableCol) : $TableCol=$TableCol->Field;?>
<div class="form-group"><?php createText("$TableCol", "$TableCol", "$TableCol", "form-control", "", "$TableCol")?> </div>
<?php endforeach; ?>
<?php createButton("btn-primary","","Submit"); ?>
 </form>
