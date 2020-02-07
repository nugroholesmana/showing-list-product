<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <title>Tes Exam Alumagubi</title>
</head>
<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://www.alumagubi.com/cc-content/themes/alumagubi/asset/uploads/rgen-assets/alumagubi.png" alt="PT Alumagubi">
        </a>
    </nav>
    <div class="page-content mt-3 p-3">
        <div class="container">
            <div class="card-content">
                <div class="col-12">                
                    <h3>Product List</h3>
                </div>
                <div class="col-12">
                    <!-- Pagination -->
                    <div class="pagination">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                    <!-- End Paginatino -->
                    <table class="table table-bordered">
                        <tr>
                            <td width="40%">Product Name</td>
                            <td>Category</td>
                            <td>Price</td>
                        </tr>
                        <?php if($products){ ?>
                            <?php foreach($products as $product){ ?>
                                <tr>
                                    <td><?= $product['title'] ?></td>
                                    <td><?= $product['category_name'] ?></td>
                                    <td><?= $product['price'] ?></td>
                                </tr>
                            <?php } ?>
                        <?php }else{ ?>
                        <tr>
                            <td colspan="3">No have products.</td>
                        </tr>
                        <?php } ?>
                    </table>
                    <!-- Pagination -->
                    <div class="pagination">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="text-center">
                Copyright &copy; 2020 Created Nugroho Lesmana Putra.
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>