<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'WNC Birds'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Small Sampling of WNC Birds</h2>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
        <th>&nbsp;</th>
      </tr>


<?php
// $parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
// $bird_array = $parser->parse();
$birds = Bird::findAll();
// echo '<pre>';
// print_r($bird_array);
// echo '</pre>';
//exit();
?>



      <?php foreach($birds as $bird) { ?>

      <tr>
        <td><?php echo $bird->common_name; ?></td>
        <td><?= $bird->habitat; ?></td>
        <td><?= $bird->food; ?></td>
        <td><?= $bird->nest_placement; ?></td>
        <td><?= $bird->behavior; ?></td>
        <td><?php echo $bird->conservation(); ?></td>
        <td><?= $bird->backyard_tips; ?></td>
        <td><a href="detail.php?id="<?php echo $bird->id; ?>>View</a></td>
      </tr>
<?php } ?>
    </table>

    <?php

      // This code is from the PDO tutorial from asgn05

      // $stmt = Bird::$database->query("SELECT * FROM birds");
      // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      //   echo 'Name: ' . $row['common_name'] . '<br>';
      // }

      // $result = Bird::findAll();
      // while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      // echo "Name: " . $row['common_name'] . '<br>';
      // };
    ?>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
