<?php include('templates/main_header.php'); ?>

<div class="container ">

  <div class="row">
    <div class="col-lg-8 text-center mx-auto">
      <a class="navbar-brand" href="/">
        <img src="images/csirlogo.png" alt="CSIR Logo" style="width: 120px; height: auto;">
      </a>

      <h1 class="text-white mb-3">CSIR Other Technologies</h1>

    </div>
  </div>
</div>

</header>

<div class="p-lg-5 p-4 bg-white">


  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>


  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>Technology</th>
        <th>Year</th>
        <th>Attributes</th>
        <th>Applicability</th>
        <th>Uses</th>
        <th>Contact</th>
        <th>Telephone</th>


      </tr>
    </thead>
    <tbody>
      <?php foreach ($otherdatas as $otherdata) : ?>
        <tr>
          <td><?php echo $otherdata->Technology; ?></td>
          <td><?php echo $otherdata->Year; ?></td>
          <td><?php echo $otherdata->Attributes; ?></td>
          <td><?php echo $otherdata->Applicability; ?></td>
          <td><?php echo $otherdata->Uses; ?></td>
          <td><?php echo $otherdata->Contact; ?></td>
          <td><?php echo $otherdata->Telephone; ?></td>



        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</div>
<?php include('templates/main_footer.php'); ?>