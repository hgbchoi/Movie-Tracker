<?php
include_once "movies.php";
include_once "dbh.php";

class displayPosts{

  function display_movietable($movieList){
?>
<table>
<thead>
  <th>Movie Title</th>
  <th>Comments</th>
  <th>Rating</th>
  <th>Date</th>
</thead>
<tbody>
<?php
    foreach ($movieList as $movie){
?>
<tr>
<td><?php echo $movie['moviename']?></td>
<td><?php echo $movie['comments']?> </td>
<td><?php echo $movie['rating']?> </td>
<td><?php echo $movie['postdate']?> </td>
<td><a href = <?php echo "includes/processDelete.php?id=".$movie['id']?>>delete</a></td>
</tr>
<?php
  }
?>
</tbody>
</table>
<?php
  }
}
?>
