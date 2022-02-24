@extends('layouts.master')
@section('content')
{{-- <div id="main"> --}}
    {{-- <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header> --}}

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>บุคคลากร</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">บุคคลกร</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('new-user') }}" class="btn btn-success">เพิ่ม</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>Usermame</th>
                                <th>ชื่อ-สกุล</th>
                                <th>กลุ่มงาน</th>
                                <th>สิทธิ์</th>
                                <th>สถานะ</th>
                                <th>OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>014</td>
                                <td>5034</td>
                                <td><a href="{{ route('profile')}}">นายยัสลัน มายุดิน</a></td>
                                <td>กลุ่มงานเภสัชกรรมชุมชน</td>
                                <td><span class="badge bg-success">USER</span></td>
                                <td>
                                    <span class="badge bg-light-danger">deactivate</span>
                                </td>
                                <td>
                                    <a href="" class="badge bg-danger">delate</a>
                                    <a href="" class="badge bg-warning">update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>










    {{-- start footer --}}
    {{-- <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 &copy; Mazer</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                        href="http://ahmadsaugi.com">A. Saugi</a></p>
            </div>
        </div>
    </footer> --}}
    {{-- end footer --}}

{{-- </div> --}}


@endsection
@section('script')
<script src="{{ URL::to('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
@endsection
