<?php include('include/connect_db.php');

$output= array();
//$sql = "SELECT * FROM ebooks_list ";
$sql = "SELECT * FROM ebooks_list where category='การ์ตูน' ORDER BY id DESC";

$totalQuery = mysqli_query($link,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$ebooks = mysqli_fetch_all($totalQuery, MYSQLI_ASSOC);

//print_r($ebooks[1]['id']);

print_r($ebooks);


/*
$columns = array(
	0 => 'id',
	1 => 'image',
	2 => 'author',
	3 => 'title',
	4 => 'subjects',
	5 => 'book',
	6 => 'published_date',
	7 => 'publisher',
	8 => 'page_count',
    10 => 'page_count',

);


print_r($columns);
/*

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['image'];
	$sub_array[] = $row['author'];
	$sub_array[] = $row['title'];
	$sub_array[] = $row['subjects'];
	$sub_array[] = $row['book'];
	$sub_array[] = $row['published_date'];
	$sub_array[] = $row['publisher'];
	$sub_array[] = $row['page_count'];	
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" ><i class="fas fa-pencil-alt"></i> เเก้ไข</a>  <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" ><i class="fas fa-trash-alt"></i> ลบ</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
*/