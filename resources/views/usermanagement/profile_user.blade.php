@extends('layouts.master')
@section('content')

    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3></h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ข้อมูลส่วนตัว</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">ข้อมูลส่วนตัว</h4>
                        </div>


                        <div class="card-content">


                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <div class="avatar avatar-xl">
                                                <img src="assets/images/faces/1.jpg" alt="Face 1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <p>00523</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>ชื่อ-นามสกุล</label>
                                            <p>นายยัสลัน มายุดิน</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>แผนก/กลุ่มงาน</label>
                                            <p>	กลุ่มงานเภสัชกรรมชุมชน</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>ที่อยู่</label>
                                            <p>55/1 หมู่ที่ 1 ตำบล สะเตงนอก อำเภอ เมือง จังหวัด ยะลา 95000</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>เบอร์ติดต่อ</label>
                                            <p>089-4665215</p>

                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">ระดับ</label>
                                            <p>ระดับชำนาญการ</p>
                                        </div>
                                    </div>


                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="button" onclick="history.back()" class="btn btn-primary me-1 mb-1">กลับ</button>
                                        <button class="btn btn-light-secondary me-1 mb-1">แก้ไข</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->
    </div>





@endsection
