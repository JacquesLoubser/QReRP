<?php
echo('<a href="javascript:void(0);" onclick="fnGetSelected(oTable);"
<button class="command-button primary" >
    <i class="icon-plus on-left"></i>
    Add
    <small>Adds a client to the database</small>
</button></a>
 
<button id="edit" class="command-button info" disabled="disabled">
    <i class="icon-wrench on-right"></i>
    Edit
    <small>Edits the selected client</small>
</button>

<table id="clientTable" class="table bordered striped hovered dataTable" width="100%">
    <thead>
        <tr>
            <th>Client ID</th>
			<th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<script>

////////////////
var oTable;
$(document).ready(function() {
$("#clientTable tbody").click(function(event) {
$(oTable.fnSettings().aoData).each(function (){
$(this.nTr).removeClass("row_selected");
});
$(event.target.parentNode).addClass("row_selected");
document.getElementById("edit").disabled = false;

});

/* Init the table */
oTable = $("#clientTable").dataTable( {
"bProcessing": true,
"bServerSide": true,
"sAjaxSource": "dataTables.php"
});
} );
function fnGetSelected( oTableLocal )
{
var aTrs = oTableLocal.fnGetNodes();
for ( var i=0 ; i<aTrs.length ; i++ )
{
if ( $(aTrs[i]).hasClass("row_selected") )
{
	alert(i);
//aReturn.push( aTrs[i] );
}
}
}
</script>

');
?>