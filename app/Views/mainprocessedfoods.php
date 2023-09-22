<?php include('templates/main_header.php'); ?>

<div class="container ">

  <div class="row">
    <div class="col-lg-8 text-center mx-auto">
      <a class="navbar-brand" href="/">
        <img src="images/csirlogo.png" alt="CSIR Logo" style="width: 120px; height: auto;">
      </a>

      <h1 class="text-white mb-3">CSIR Processed Foods</h1>

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
        <th>Benefits</th>
        <th>Contact</th>
        <th>Telephone</th>


      </tr>
    </thead>
    <tbody>
      <?php foreach ($processeddatas as $processeddata) : ?>
        <tr>
          <td><?php echo $processeddata->Technology; ?></td>
          <td><?php echo $processeddata->Year; ?></td>
          <td><?php echo $processeddata->Attributes; ?></td>
          <td><?php echo $processeddata->Applicability; ?></td>
          <td><?php echo $processeddata->UsesAndBenefits; ?></td>
          <td><?php echo $processeddata->Contact; ?></td>
          <td><?php echo $processeddata->Telephone; ?></td>



        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>

</div>
<?php include('templates/main_footer.php'); ?>