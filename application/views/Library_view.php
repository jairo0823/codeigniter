<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
</head>
<body>
    <h2>Library Management System</h2>
    <h3> Book List </h3>
    <table border = "1">
        <thead> <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>PUBLISHED_YEAR</th>
            <th>STATUS</th>
    </tr> </thead>

</body>

     <?php foreach ($books as $book) { ?>
      <tr>
             <td><?= $book ['id'] ?></td>
             <td><?= $book ['Title'] ?></td>
             <td><?= $book ['Author'] ?></td>
             <td><?= $book ['Published_year'] ?></td>
             <td><?= $book ['Status'] ?></td>
   </tr>
   <?php } ?> 
   <tbody>
   </table>
</body>
</html>