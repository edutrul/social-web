<select class="filter-act">
  <option value="all" selected>Categoría</option>
  <?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
  <?php endforeach; ?>
</select>