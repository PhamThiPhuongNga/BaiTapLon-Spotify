
<?php include('../../../public/template/site/header-account.php');?>
<style>
.bl-2{
    border-left: 6px solid var(--green-color);
}</style>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <div class="main-acc-right p-5"style="width:75%;background-color: white;">
                <h1 class="font-weight-bold ng-binding ff-title">Chỉnh sửa hồ sơ</h1>
                <form action=""class="">
                    <div class="form-group">
                        <label class="biNheR" for="formGroupExampleInput">Email</label>
                        <input type="email" class="hUAscM" id="formGroupExampleInput" placeholder="abc@gmail.com">
                    </div>
                    <div class="form-group mt-3">
                        <label class="biNheR" for="selectSex">Giới tính</label>
                        <select id="selectSex" class=" hUAscM" name ="gender">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="form-row mt-3">
                        <label class="biNheR" for="birthday">Ngày sinh</label>
                        <input type="date" class=" hUAscM" id="birthday" name="birthday">
                    </div>
                    <div class="form-group mt-3">
                        <label class="biNheR" for="selectSex">Quốc gia hoặc khu vực</label>
                        <select id="selectSex" name="country" class="hUAscM">
                            <option value="Việt Nam">Việt Nam</option>
                        </select>
                    </div>
                    <button class="btn btn-success mt-3" type="submit">Lưu hồ sơ</button>
                </form>
            </div>
        </div>
    </main>
<?php include('../../../public/template/site/footer.php');?>
</body>

</html>