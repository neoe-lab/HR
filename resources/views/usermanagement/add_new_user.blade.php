@extends('layouts.master')
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

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

                                    <div class="card">
                                        {{-- <div class="hearder">
                                         <h4 class="card-title">Multiple Column</h4>
                                        </div> --}}
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12 justify-content-center">
                                                        <div class="form-group">
                                                            <label for="username">Username</label>
                                                            <input type="text" id="first-name-column" class="form-control"
                                                                placeholder="username" name="username">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12 justify-content-center">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Password</label>
                                                            <input type="password" id="password" class="form-control"
                                                                placeholder="password" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12 justify-content-center">
                                                        <div class="form-group">
                                                            <label for="pname">คำนำหน้า</label>
                                                            <input type="text" id="first-name-column" class="form-control"
                                                                placeholder="คำนำหน้า" name="pname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-12 justify-content-center">
                                                        <div class="form-group">
                                                            <label for="first-name-column">ชื่อต้น</label>
                                                            <input type="text" id="first" class="form-control"
                                                                placeholder="ชื่อต้น" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-12 justify-content-center">
                                                        <div class="form-group">
                                                            <label for="first-name-column">นามสกุล</label>
                                                            <input type="text" id="lname" class="form-control"
                                                                placeholder="นามสกุล" name="lname">

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end tab 1 --}}

                                {{-- tab 2 --}}
                                <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="col-md-5 col-12 justify-content-center">
                                        <div class="form-group">
                                            <label for="test">นามสกุล</label>
                                            <input type="text" id="test" class="form-control"
                                                placeholder="นามสกุล" name="test">

                                        </div>
                                    </div>
                                    <span>tab 2</span>
                                </div>
                                {{-- end tab 2 --}}



                                {{-- start submit --}}
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit"
                                        class="btn btn-primary me-1 mb-1">บันทึก</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>


                        </form>

                        </div>


                    </div>
                </div>
            </div>
        </section>






    </div>


</div>






@endsection
