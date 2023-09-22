<?php include('templates/main_header.php'); ?>

<div class="container ">

  <div class="row">
    <div class="col-lg-8 text-center mx-auto">
      <a class="navbar-brand" href="/">
        <img src="images/csirlogo.png" alt="CSIR Logo" style="width: 120px; height: auto;">
      </a>
      <br><br>
      <h1 class="text-white mb-3">CSIR Marketable Technologies</h1>
   

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



      </tr>
    </thead>
    <tbody>
      <?php foreach ($marketdatas as $marketdata) : ?>
        <tr>
          <td><?php echo $marketdata->Technologies; ?></td>
          <td><?php echo $marketdata->Year; ?></td>




        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>

</div>
<?php include('templates/main_footer.php'); ?>