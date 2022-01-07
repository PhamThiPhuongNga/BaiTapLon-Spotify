<head>
    <title>Đổi mật khẩu của bạn - Spotify</title>
</head>
<?php include('../../../public/template/site/header-account.php');?>
<style>
.bl-3{
    border-left: 6px solid var(--green-color);
}</style>
            <div class="main-acc-right p-5">
                <h1 class="font-weight-bold ng-binding ff-title">Đổi mật khẩu của bạn</h1>
                <form action="">
                    <div class="form-group mb-3">
                        <label class="biNheR"for="formGroupExampleInput">Mật khẩu hiện nay</label>
                        <input type="text" class="hUAscM " id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label class="biNheR" for="formGroupExampleInput">Mật khẩu mới</label>
                        <input type="text" class="hUAscM" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label class="biNheR" for="formGroupExampleInput">Lặp lại mật khẩu mới</label>
                        <input type="text" class="hUAscM" id="formGroupExampleInput" placeholder="">
                    </div>

                    <button class="btn btn-success mt-3" type="submit">Cài đặt mật khẩu mới</button>
                </form>
            </div>


        </div>

    </main>
<?php include('../../../public/template/site/footer.php');?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>