<table class='listing'>
  <thead>
    <tr>
      <th>Title</th>
      <th>Article</th>
      <th>Date</th>
      <th>Author</th>
    </tr>
  <thead>
  <tbody>
  <?php foreach($data as $row) { ?>
    <tr>
      <td><?php echo $row['title'] ?></td>

      <td><?php echo $row['article'] ?></td>
      
      <td><?php echo date_format(date_create($row['creationDate']),"Y/m/d") ?></td>
      
      <td><?php echo $row['name'] ?></td>
    </tr>
  <?php } ?>
  <tbody>
</table>
