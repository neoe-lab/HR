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
                    <h3>รอบการประเมิน</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">แผนก</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                {{-- ster hearder --}}
                <div class="card-header">
                       <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#timeForm">เพิ่มรอบการประเมิน</button>
                </div>
                {{-- end header --}}

                <div class="card-body">
                    <table class="table table-striped" id="year">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>ปี</th>
                                <th>ครั้ง</th>
                                <th>สถานะ</th>
                                <th>option</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>15</td>
                                <td>2022</td>
                                <td>1</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td> <a class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#timeForm" href="" >แก้ไข</a>

                                </td>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>




            <!-- start new time evalution Modal -->
            <div class="modal fade text-left" id="timeForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        {{-- start hearder --}}
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">กำหนดรอบการประเมิน </h4>
                            <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        {{-- end hearder --}}



                        <form action="#">


                            <div class="modal-body">
                                <label>ปี</label>
                                <div class="form-group">
                                    <input type="text" placeholder="ปี"
                                        class="form-control">
                                </div>
                                <label>ครั้งที่</label>
                                <div class="form-group">
                                    <input type="number" min="0" placeholder="ครั้งที่"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">ปิด</span>
                                </button>
                                <button type="button" class="btn btn-primary ml-1"
                                    data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">บันทึก</span>
                                </button>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
            <!--end new time evalution Modal -->






    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2022 &copy; neoe</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                        href="http://ahmadsaugi.com">ikwan</a></p>
            </div>
        </div>
    </footer>
</div>


@endsection
@section('script')
<script src="{{ URL::to('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // Simple Datatable
    let year = document.querySelector('#year');
    let dataTable = new simpleDatatables.DataTable(year);
</script>
@endsection
