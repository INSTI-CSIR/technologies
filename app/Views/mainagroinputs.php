<?php include('templates/main_header.php');?>

  <div class="container ">

    <div class="row">
      <div class="col-lg-8 text-center mx-auto">
        <a class="navbar-brand" href="/">
          <img src="images/csirlogo.png" alt="CSIR Logo" style="width: 120px; height: auto;">
        </a>
        <br><br>

        <h1 class="text-white mb-3">Agro Inputs</h1>
        
      </div>
    </div>
  </div>
  
</header>

        <!-- <div class="col-lg-9"> -->
          <div class="p-lg-5 p-4 bg-white">
          <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

<div class="table-responsive">
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>Shop name</th>
                    <th>Product</th>
                    <th>Phone Number</th>
                    <th>Association</th>
                    <th>Location</th>
                    <th>Product Category</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($agrodatas as $agrodata) : ?>
                      <tr>
                          <td><?= $agrodata->Shopname; ?></td>
                          <td><?= $agrodata->ProductSold; ?></td>
                          <td><?= $agrodata->PhoneNumber; ?></td>
                          <td><?= $agrodata->Association; ?></td>
                          <td><?= $agrodata->Location; ?></td>
                          <td><?= $agrodata->ProductCategory; ?></td>
                      </tr>
                  <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
    </div>

  <!-- /details page -->
  <?php include('templates/main_footer.php');?>