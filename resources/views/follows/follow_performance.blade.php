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
                    <h3>ติดตามผลการประเมินสมรรถนะ</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ติดตามผลการประเมิน</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <section class="section">
            <div class="card">
                {{-- ster hearder --}}
                <div class="card-header">
                    <div class="row"></div>
                </div>
                {{-- end header --}}

                <div class="card-body">
                    <table class="table table-hover" id="year">
                        <thead>
                            <tr>
                                <th rowspan="2">UID</th>
                                <th class="text-center" rowspan="2">ชื่อ-นามสกุล</th>
                                <th class="text-center" rowspan="2">แผนก</th>
                                <th class="text-center" colspan="5">สถานะการประเมิน</th>
                                <th class="text-center" rowspan="2">หมายเหตุ</th>
                            </tr>
                            <tr>
                                <th class="text-center">ตนเอง</th>
                                <th class="text-center">เพื่อน1</th>
                                <th class="text-center">เพื่อน2</th>
                                <th class="text-center">เพื่อน3</th>
                                <th class="text-center">หัวหน้า</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>065</td>
                                <td>นายอิควรรณ หะยีดือราเฮง</td>
                                <td>แผนกไอที</td>
                                <td class="text-center"><i class="bi bi-check-circle text-success"></i></td>
                                <td class="text-center"><i class="bi bi-x-circle text-danger"></i></td>
                                <td class="text-center"><i class="bi bi-x-circle text-danger"></i></td>
                                <td class="text-center"><i class="bi bi-x-circle text-danger"></i></td>
                                <td class="text-center"><i class="bi bi-x-circle text-danger"></i></td>
                                <td class="text-center text-danger">ยังไม่ครบ</td>
                            </tr>
                            <tr>
                                <td>005</td>
                                <td>นายอิควรรณ หะยีดือราเฮง</td>
                                <td>แผนกไอที</td>
                                <td class="text-center"><i class="bi bi-check-circle text-success"></i></td>
                                <td class="text-center"><i class="bi bi-check-circle text-success"></i></td>
                                <td class="text-center"><i class="bi bi-check-circle text-success"></i></td>
                                <td class="text-center"><i class="bi bi-check-circle text-success"></i></td>
                                <td class="text-center"><i class="bi bi-check-circle text-success"></i></td>
                                <td class="text-center text-success">ครบแล้ว</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>








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
