@extends('front-end.template.master')
@section('content-page')
    <article id="form-header">
        <h1 class="text-header text-center">ĐO MẬT ĐỘ CANXI</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('frontend/assets/img/img-slide.jpg') }}" alt="First slide" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('frontend/assets/img/img-slide.jpg') }}" alt="Second slide" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('frontend/assets/img/img-slide.jpg') }}" alt="Third slide" />
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <div id="btn-register">
                <div class="btn-register m-auto btn-1">
                    <button class="btn btn-danger w-100 px-4 py-2">
                        <a href="#form-register" class="text-white">Đăng ký ngay</a>
                    </button>
                </div>
                <h1 class="title-header">DOPPELHERZ VIETNAM</h1>
            </div>
        </div>
    </article>
    <main id="main">
        <article id="form-register" class="m-auto">
            <div class="container form">
                <div class="card card-register">
                    <div class="card-body">
                        <form action="{{ route('predictResult') }}" method="POST">
                            @csrf
                            <div class="text-center">
                                <h1 class="title-register">Đăng ký tại đây</h1>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Họ và tên</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Nhập họ và tên" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Năm sinh</label>
                                        <input type="date" class="form-control" name="dob" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Số điện thoại</label>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">(+84)</span>
                                            <input type="text" class="form-control" placeholder="Nhập số điện thoại"
                                                name="phone" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <input type="hidden" id="selectedGender" name="sex" />
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Giới tính</label>
                                        <div class="form-select">
                                            <div class="form-action gender-button" data-gender="1">
                                                Nam
                                            </div>
                                            <div class="form-action gender-button" data-gender="2">
                                                Nữ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <input type="hidden" id="inputFoot" name="leg" />
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Bàn chân</label>
                                        <div class="form-select">
                                            <div class="form-action foot-button" data-foot="1">
                                                Phải
                                            </div>
                                            <div class="form-action foot-button" data-foot="2">
                                                Trái
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Dân tộc</label>
                                        <select class="custom-select">
                                            <option selected value="1">Kinh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">BQI</label>
                                        <input type="text" class="form-control" name="bqi"
                                            placeholder="Nhập chỉ số BQI" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Cân nặng</label>
                                                <div class="d-flex align-items-center">
                                                    <input type="text" class="form-control" placeholder="Cân nặng"
                                                        name="weight" />
                                                    <span class="ml-2">kg</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Chiều cao</label>
                                                <div class="d-flex align-items-center">
                                                    <input type="text" class="form-control" placeholder="Chiều cao"
                                                        name="height" />
                                                    <span class="ml-2">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">T-Score</label>
                                                <input type="text" class="form-control" placeholder="T-Score"
                                                    name="t-score" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Z-Score</label>
                                                <input type="text" class="form-control" placeholder="Z-Score"
                                                    name="z-score" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="btn-register">
                                        <button class="btn btn-danger w-100 btn-calc">
                                            <span class="text-btn"> Tính toán </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection
