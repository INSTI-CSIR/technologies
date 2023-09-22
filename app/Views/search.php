<?php include('templates/main_header.php'); ?>

<div class="container ">

  <div class="row">
    <div class="col-lg-8 text-center mx-auto">
    <h1 class="text-white mb-3">Search Results</h1>
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


  <?php if (isset($searchResults) && !empty($searchResults)) : ?>

    <table id="example" class="display" style="width:100%">
      <thead>
        <tr>
          <th>Technology</th>
          <th>Year</th>
          <th>Attributes</th>
          <th>Contact</th>
          <th>Telephone</th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($searchResults as $result) : ?>
          <tr>
            <td><?php echo $result->Technology; ?></td>
            <td><?php echo $result->Year; ?></td>
            <td><?php echo $result->Attributes; ?></td>
            <td><?php echo $result->Contact; ?></td>
            <td><?php echo $result->Telephone; ?></td>


          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  <?php else : ?>
    <p>Sorry, no results found.</p>
  <?php endif; ?>