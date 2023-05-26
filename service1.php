<?php include("head.html")
?>
<head>
<style>
table,th,td,tr{
border-collaps:collaps;
}
th
{
font-size:24px;
background-color:#33FF00;
}
td
{
font-size:18px;
text-align:center;
}
tr:nth-child(odd)
{
background-color:#CC99FF;
}
tr:nth-child(even)
{
background-color: #99FF00;
}
th:hover
{
color:#FF3366;
}
td:hover
{
color:#FF3366;
background-color:#00FFFF;
}
</style>
</head>
<body>
<div class="service">

<table border="2px" height="500px" width="1000px">

<tr>
<th>S.No</th>
<th colspan="2">NAME</th>
<th>DEPT</th>
</tr>


<tr>
<td>1</td>
<td>A</td>
<td>B</td>
<td>bsc</td>
</tr>

<tr>
<td>2</td>
<td>B</td>
<td>B</td>
<td>IT</td>
</tr>

<tr>
<td>3</td>
<td>C</td>
<td>A3</td>
<td>ece</td>
</tr>
</table>
</div>
</body>
<?php include("footer.html")
?>
