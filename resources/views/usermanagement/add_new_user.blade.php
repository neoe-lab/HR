@extends('layouts.master')
@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>เพิ่มบุคคลกร</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">เพิ่มบุคคลกร</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <section class="section">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h5 class="card-title">Horizontal Navs</h5> --}}
                            <button class="btn btn-light-secondary me-1 mb-1" onclick="history.back()">กลับ</button>

                        </div>


                        <div class="card-body">
                            <form action="" action="">

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                {{-- start tab --}}
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="one-tab" data-bs-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">ข้อมูล</a>
                                </li>
                                {{-- ========================================== --}}
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="two-tab" data-bs-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">Profile</a>
                                </li>
                                {{-- end tab --}}

                            </ul>

                            <div class="tab-content" id="myTabContent">

                                {{-- tab 1 --}}
                                <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="home-tab">

                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                {{-- <h4 class="card-title">Horizontal Form with Icons</h4> --}}
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    {{-- <form class="form form-horizontal"> --}}
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Username</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Username" id="first-name-icon" name="username">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="col-md-4">
                                                                    <label>Email</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="email" class="form-control"
                                                                                placeholder="Email" id="first-name-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-envelope"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                                <div class="col-md-4">
                                                                    <label>Password</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="password" class="form-control"
                                                                                placeholder="Password" name="password">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-lock"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>ระดับ</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="password" class="form-control"
                                                                                placeholder="ระดับ" name="level">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-lock"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>สิทธิ์</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="password" class="form-control"
                                                                                placeholder="สิทธิ์" >
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-lock"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>กลุ่มงาน</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="password" class="form-control"
                                                                                placeholder="Password">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-lock"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>สถานะ</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="password" class="form-control"
                                                                                placeholder="Password">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-lock"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    {{-- </form> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end tab 1 --}}

                                {{-- tab 2 --}}
                                <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                {{-- <h4 class="card-title">Horizontal Form with Icons</h4> --}}
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    {{-- <form class="form form-horizontal"> --}}
                                                        <div class="form-body">
                                                            <div class="row">


                                                                <div class="col-md-1">
                                                                    <label>คำนำหน้า</label>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Name" id="first-name-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-1">
                                                                    <label>ชื่อต้น</label>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Name" id="first-name-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-1">
                                                                    <label>นามสกุล</label>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Name" id="first-name-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>






                                                                <div class="col-md-4">
                                                                    <label>ที่อยู่</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group has-icon-left">
                                                                        <div class="position-relative">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Mobile">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-phone"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    {{-- </form> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end tab 2 --}}



                                {{-- start submit --}}
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit"
                                        class="btn btn-primary me-1 mb-1">บันทึก</button>

                                </div>
                            </div>


                        </form>

                        </div>


                    </div>
                </div>
            </div>
        </section>






    </div>









@endsection
