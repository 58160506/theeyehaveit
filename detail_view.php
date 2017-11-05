<h3>Product detail</h3>
<table class="table table-striped">
<?php
$row = $query->row();
echo "<tr>
<td>Product Code</td><td>$row->product_code</td>
</tr>
<tr>
<td>Product Name</td><td>$row->product_name</td>
</tr>
<tr><td>Decsceription</td><td>$row->description</td>
</tr>
</tr>
<tr><td>Standard Cost</td><td>$row->standard_cost</td>
</tr>
</tr>
<tr><td>Minimum reorder</td><td>$row->minimum_reoder_quntity</td>
</tr>
</tr>
<tr><td>Category</td><td>$row->category</td>
</tr>"

?>
</table>