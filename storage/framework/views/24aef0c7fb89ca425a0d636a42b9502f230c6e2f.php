<html>
<head>
<style>
    table{
        width:100%;
        border-collapse:collapse;
    }

    td, th{
        text-align:left;
        padding:8px;
        border:1px solid #dddddd;
    }

    tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<title>Detail</title>
</head>
<body>
<center><h1/>Data Detail User Chat</center> 
<table>
   <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
   </tr>
   <tr>
        <td><?php echo e($users->id); ?></td>
        <td><?php echo e($users->name); ?></td>
        <td><?php echo e($users->email); ?></td>
        <td><a href="#">Kick</a></td>
   </tr>
</table>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\koment\resources\views/admin/UserCity.blade.php ENDPATH**/ ?>