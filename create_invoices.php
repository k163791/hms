<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>HMS - Landing Page</title>
</head>
<?php
    include "includes/navigation.php";
?>
<body>
    <div class="jumbotron">
        <h1>Create Invoice</h1>
        <h2>Hospital Management System</h2>
    </div>

    <section class="invoice" style="padding:20px;">
      <form class="shadow-lg" action="index.html" method="post" style="padding:30px;">
        <div class="row">
          <div class="col-md-3">
            <h3>Invoice # 1</h3>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="btn-group">
            <a href="#" class="btn btn-primary" style="margin:5px;">
              <i class="fa fa-newspaper-o"></i>
              Invoices
            </a>
            <a href="#" class="btn btn-primary" style="margin:5px;">
              <i class="fa fa-truck"></i>
              Whole Sale
            </a>
          </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
              <label for="Search">
                <i class="fa fa-barcode"></i>
                Search
              </label>
              <input
                type="search"
                name=""
                value=""
                placeholder="Search"
                class="form-control"
                >
                <small>Search through product name(e.g.Flagyl)</small>
            </div>
            <div class="col">
              <label for="addAccount">
                <i class="fa fa-truck"></i>
                Add Account
              </label>
              <select class="form-control" name="">
                <option value="">Select Account</option>
                <option value="medixDemo">Name : Medix Demo</option>
              </select>
              <small>Make sure to select right customer whom your are suppling, to maintian accounts.</small>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <table class="table table-bordered table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Weight</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Discount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Panadol</td>
                    <td>20 kg</td>
                    <td>30.00</td>
                    <td>
                      <input type="number" name="" value="1">
                    </td>
                    <td>
                      <input type="number" name="" value="0">
                    </td>
                    <td style="cursor:pointer;">
                      <i style="color:skyblue;" class="fa fa-trash margin"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
          <hr>
          <div class="col-md-6">
            <div class="row total-grid-values">
              <div class="col-md-4 col-sm-12 col-xs-12">
                  Gross Total :
                  <input type="number" name="" value="" class="form-control">
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                  Tax Total :
                  <input type="number" name="" value="" class="form-control">
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                  Discount :
                  <input type="number" name="" value="" class="form-control">
              </div>
            </div>
            <hr>
            <div class="row total-grid-values" style="padding:10px;">
                <div class="col-md-4">
                  Total Amount :  103.00
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                  Bill Paid (VND) :
                  <input type="number" name="" value="100.3" class="form-control">
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                  Cash Recieved :
                  <input type="number" name="" value="0" class="form-control">
                </div>
            </div>
            <hr>
            <div class="btn-group">
              <a href="#" class="btn btn-primary" style="margin:5px;">
                <i class="fa fa-newspaper-o"></i>
                New Invoice
              </a>
              <a href="#" class="btn btn-warning" style="margin:5px;">
                <i class="fa fa-mail-reply"></i>
                Return Items
              </a>
              <a href="#" class="btn btn-danger" style="margin:5px;">
                <i class="fa fa-print"></i>
                Save & Print
              </a>
            </div>
          </div>
        </div>
        <hr>
      </form>
    </section>
    <?php include "includes/footer.php"; ?>
</body>

</html>
