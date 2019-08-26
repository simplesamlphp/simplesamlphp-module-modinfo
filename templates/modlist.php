<?php
$this->includeAtTemplateBase('includes/header.php');
?>

<table class="modules" style="width: 100%">
<tr>
<th><?php echo($this->t('{modinfo:modinfo:modlist_name}')); ?></th>
<th><?php echo($this->t('{modinfo:modinfo:modlist_status}')); ?></th>
</tr>
<?php

$i = 0;
foreach ($this->data['modules'] as $id => $info) {
    echo '<tr class="'.($i++ % 2 == 0 ? 'odd' : 'even').'">';
    echo '<td><tt>'.htmlspecialchars($id).'</tt></td>'."\n";

    if ($info['enabled']) {
        echo '<td><img src="/'.$this->data['baseurlpath'].'resources/icons/silk/accept.png" alt="'.
            htmlspecialchars($this->t('{modinfo:modinfo:modlist_enabled}')).'" /></td>'."\n";
    } else {
        echo '<td><img src="/'.$this->data['baseurlpath'].'resources/icons/silk/delete.png" alt="'.
            htmlspecialchars($this->t('{modinfo:modinfo:modlist_disabled}')).'" /></td>'."\n";
    }
    echo '</tr>'."\n";
}
?>
</table>
<?php $this->includeAtTemplateBase('includes/footer.php');
