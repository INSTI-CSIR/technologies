<?php include('templates/main_header.php');?>

  <div class="container ">

    <div class="row">
      <div class="col-lg-8 text-center mx-auto">
        <a class="navbar-brand" href="/">
          <img src="images/csirlogo.png" alt="CSIR Logo" style="width: 120px; height: auto;">
        </a>
        <br><br>

        <h1 class="text-white mb-3">CSIR Crop Varieties</h1>
        
      </div>
    </div>
  </div>
  
</header>


    <div class="p-lg-5 p-4 bg-white">

          <script>
              $(document).ready(function () {
                  $('#example').DataTable({
                      responsive: true // Enable DataTables responsive feature
                  });
              });
          </script>

          <div class="table-responsive">
              <table id="example" class="display" style="width:100%">
                  <thead>
                      <tr>
                          <th>Technology</th>
                          <th>Categories</th>
                          <th>Year</th>
                          <th>Attributes</th>
                          <th>Seedcolor</th>
                          <th>Maturity_in_days</th>
                          <th>Potential_yield</th>
                          <th>Applicability</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($cropdatas as $cropdata) : ?>
                      <tr>
                          <td><?= $cropdata->Technology; ?></td>
                          <td><?= $cropdata->Categories; ?></td>
                          <td><?= $cropdata->Year; ?></td>
                          <td><?= $cropdata->Attributes; ?></td>
                          <td><?= $cropdata->Seedcolour; ?></td>
                          <td><?= $cropdata->Maturity_in_days; ?></td>
                          <td><?= $cropdata->Potential_yield_ton_per_ha; ?></td>
                          <td><?= $cropdata->Applicability; ?></td>
                      </tr>
                  <?php endforeach; ?>
                  </tbody>
              </table>
          </div>


    </div>

    <?php include('templates/main_footer.php');?>