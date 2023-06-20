<?php 
  require "functions.php";
  $contact = getContact(1);
  extract($contact);
?>
<!DOCTYPE html>
<html lang="en">
<?php require "head.php"; ?>
<body>
  <main id="app" class="container my-5 bg-white">
    <div class="row justify-content-center">
      <div class="col-8 p-5">
        <?php require "header.php"; ?>
        <section class="row">
          <div class="col-8">
            <h1 class="display-4 mb-3">Update Contact</h1>
            <form method="post" class="bg-light p-4 border border-1">
              <input type="hidden" name="action" value="update">
              <input type="hidden" name="id" value="<?php echo $id ?? ''; ?>">
              <?php require "inputs.php"; ?>
              <button type="submit" class="btn btn-primary">Update Contact</button>
            </form>
          </div>
        </section>
        <section class="row mt-5">
          <div class="col-8 d-flex justify-content-center">
            <form method="post">
              <input type="hidden" name="action" value="delete">
              <input type="hidden" name="id" value="<?php echo $id ?? ''; ?>">
              <button type="submit" class="btn btn-outline-danger">Delete Contact</button>
            </form>
          </div>
        </section>
      </div>
    </div>
  </main>
</body>
</html>