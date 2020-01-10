<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới khách hàng</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên Hàng</label>
                    <input type="text" class="form-control" name="name" placeholder="" required>
                </div>
                <div class="col-12">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Loại Hàng</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Điện Thoại</option>
                        <option value="1">Máy Tính</option>
                        <option value="2">Tivi</option>
                        <option value="3">Tủ Lạnh</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="address" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Số Lượng</label>
                    <input type="text" class="form-control" name="address" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Mô Tả</label>
                    <textarea rows="4" cols="50"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Nhập mặt hàng</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Thoát</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>