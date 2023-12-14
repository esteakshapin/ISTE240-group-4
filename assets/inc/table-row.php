<tr class="<?php if ($counter % 2 != 0) {echo "alternate-color-tr";}?>">
    <?php echo "<td>" . $row['command'] . "</td>" ?>
    <td>Change ownership permissions for a file or folder</td>
    <td>chown john document.pdf<br>(Gives user john ownership of document.pdf)</td>
</tr>