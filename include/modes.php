  <div class="panel panel-default">
  <!-- Standard-Panel-Inhalt -->
  <div class="panel-heading">Enabled Modes</div>
  <!-- Tabelle -->
  <table class="table">
    <tr>
    <?php showMode("DMR", $mmdvmconfigs);?>
    <?php showMode("DMR Network", $mmdvmconfigs);?>
    <?php showMode("D-Star", $mmdvmconfigs);?>
    <?php showMode("D-Star Network", $mmdvmconfigs);?>
    <?php showMode("System Fusion", $mmdvmconfigs);?>
    <?php showMode("System Fusion Network", $mmdvmconfigs);?>
    </tr>
  </table>
</div>
