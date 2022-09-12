<table class='listing'>
  <thead>
    <tr>
      <th>Title</th>
      <th>Creation date</th>
      <th>Article</th>
      <th>Edit</th>
      <th>Erase</th>
    </tr>
  <thead>
  <tbody>
  <?php if(isset($data)){
    foreach($data as $row) { ?>
    <tr>
      <td><?php echo $row['title']; ?></td>

      <td><?php echo date_format(date_create($row['creationDate']),"Y/m/d"); ?></td>

      <td><?php echo $row['article']; ?></td>

      <td><a href="?module=forum&action=view&id=<?php echo $row['idForum']; ?>">Edit</a></td>

      <td><form action="?module=forum&action=delete" method="post"><input type="hidden" name="idForum" value="<?php echo $row['idForum']; ?>"><input type="submit" Value="Erase"></form></td>
    </tr>
  <?php }} ?>
  <tbody>
</table>