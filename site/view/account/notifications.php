<?php include('../../../public/template/site/header-account.php');?>
<style>
.bl-4{
    border-left: 6px solid var(--green-color);
}
</style>
            <div class="main-acc-right p-5">
                <h1 class="font-weight-bold ng-binding ff-title ">Cài đặt thông báo</h1>
                <form class=" needs-validation" novalidate>
                    <div class="row pt-4 space">
                        <div class="col-md-8">
                            <label  class="form-check-label ng-binding fs-4"> Cập nhật
                                    Spotify</label>
                        </div>
                        <div class="col-md-1">
                            <label class="form-check-label ng-binding fs-6" for="flexCheckDefault">
                                Email
                            </label>
                        </div>
                        <div class="col-md-1 ng-binding fs-6">
                            <label class="form-check-label" for="flexCheckDefault">
                                Đẩy
                            </label>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-9 ">
                            <label for="validationDefault01" class="form-label ">Tin tức Sản phẩm <br>
                                Hướng dẫn sử dụng, các tính năng mới và các bản cập nhật sản phẩm mới nhất trên
                                Spotify</label>
                        </div>

                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-9 ">
                            <label for="validationDefault01" class="form-label ">Tin tức và Ưu đãi Spotify <br>
                                Tin tức, khuyến mãi và các sự kiện dành cho bạn</label>
                        </div>

                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="pt-4 form-check-label ng-binding fs-4">Nhạc của bạn</div>
                    <div class="row pt-3">
                        <div class="col-md-9 ">
                            <label for="validationDefault01" class="form-label  ">Nhạc Đề xuât <br>
                                Nhạc chúng tôi thấy bạn sẽ thích</label>
                        </div>

                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-9 ">
                            <label for="validationDefault01" class="form-label ">Nhạc Mới <br>
                                Các bản nhạc mới từ các nghệ sĩ bạn theo dõi hoặc có thể thích</label>
                        </div>

                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-9 ">
                            <label for="validationDefault01" class="form-label ">Các bản cập nhật Danh sách phát <br>
                                Một danh sách phát bạn theo dõi đã được cập nhật/label>
                        </div>

                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-9 ">
                            <label for="validationDefault01" class="form-label ">Thông báo Hòa nhạc <br>
                                Thông tin cập nhật về chương trình trực tiếp và chương trình qua mạng của nghệ sĩ bạn
                                yêu thích, diễn ra trực tuyến hoặc tại các địa điểm gần bạn</label>
                        </div>

                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-9 ">
                            <label for="validationDefault01" class="form-label ">Cập nhật Nghệ sĩ <br>
                                Tìm hiểu về các nghệ sĩ bạn nghe và các nghệ sĩ chúng tôi nghĩ bạn sẽ thích</label>
                        </div>

                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <div class="col-md-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                    <div class="float-end mt-4">
                        <button class="btn btn-danger " type="submit">Hủy</button>
                        <button class="btn btn-primary " type="submit">Lưu</button>
                    </div>
                </form>
            </div>


        </div>

    </main>
<?php include('../../../public/template/site/footer.php');?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>