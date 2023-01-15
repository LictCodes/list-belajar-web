<?php  

class PrettyDisplay 
{	private $data = [];
	function addData(Produk $prdk )
	{

		$this -> data[] = $prdk;
	}
	function display(){
		?>
		<style type="text/css">
			table, th, td {
  				border: 1px solid;
			}
			th , td {
				padding: 10px;
			} 
		</style>
		<table>
			<tr>
				<th>information</th>
				<th>___________</th>
			</tr>
				
		<?php
		foreach ($this -> data as $d)  { ?>
			<tr>
				<td><?= $d -> display() ?><td>
				<!-- <td></td> -->
			</tr>
		<?php }
		?>
		
		</table>
		<?php
	}
}

?>