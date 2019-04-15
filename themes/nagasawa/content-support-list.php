<?php 
  global $row; 
  global $cnt; 
?>
<?php if($row['have_image']): ?>
  <li class="block__list" id="<?php echo $cnt; ?>">
    <ul class="block__list_inner block__list_inner_row">
      <li class="item">
        <ul>
          <li class="block__list_item"><?php echo $row['support_q'] ?></li>
          <li class="block__list_item">
            <p>
              <?php echo $row['support_a'] ?>
            </p>
          </li>
        </ul>
      </li>
      <li class="item"><img alt="購入・価格" src="<?php echo isset($row['support_img'][0]) ? $row['support_img'][0] : ""; ?>"></li>
    </ul>
  </li>
<?php else: ?>
  <li class="block__list" id="<?php echo $cnt; ?>">
    <ul class="block__list_inner">
      <li class="block__list_item"><?php echo $row['support_q'] ?></li>
      <li class="block__list_item">
        <p>
          <?php echo $row['support_a'] ?>
        </p>
      </li>
    </ul>
  </li>
<?php endif; ?>