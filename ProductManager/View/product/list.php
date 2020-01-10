<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<h2 style="text-align: center">Danh Sách Mặt Hàng</h2>
<div class="container">
    <div class="col-12 col-md-12">
        <tr>
            <th>
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button>
                    </form>
                </nav>
            </th>
            <th>
                <a href="?page=add">
                    <button type="button" class="btn btn-outline-success">Thêm Mặt Hàng</button>
                </a>
            </th>
        </tr>
    </div>
</div>
<div class="container">
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Hàng</th>
                <th scope="col">Loại Hàng</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $key => $product) : ?>
                <tr>
                    <th>
                        <a class="btn btn-primary" href="#" role="button">Link</a>
                    </th>
                    <td scope="row"><?php echo ++$key ?></td>
                    <td><?php echo $product->getProductName() ?></td>
                    <td><?php echo $product->getProductType() ?></td>
                    <td>
                        <a href="index.php?page=delete&id=<?php echo $product->getId() ?>">
                            <button type="button" class="btn btn-outline-primary">Chỉnh sửa</button>
                        </a>

                    </td>
                    <td>
                        <a href="index.php?page=edit&id=<?php echo $product->getId() ?>">
                            <input type="button" class="btn btn-outline-danger">Xóa</input>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>