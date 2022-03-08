@extends('layouts.master')
@section('content')


    <div class="page-heading">

        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>ประเมินสมรรถนะ</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ประเมินสมรรถนะ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>




        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">ประเมินตนเอง</h3>
                </div>

                <div class="card-body">
                    <table class="table table-striped" id="list-person">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>ชื่อ-สกุล</th>
                                <th>กลุ่มงาน</th>
                                <th>OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>014</td>
                                <td>นายยัสลัน มายุดิน</td>
                                <td>กลุ่มงานเภสัชกรรมชุมชน</td>
                                <td>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @if ($i == 1)
                                         <span class="badge bg-light-success"> ประเมินแล้ว</span>
                                    @else
                                        <a href="{{ route('form-performance')}}" class="badge bg-danger">ยังไม่ประเมิน</a>

                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
@php
    $permision = 'head';
@endphp
@if ($permision == 'head')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">รายชื่อผู้ใต้บังคับบัญชา</h3>
             <p class="text-center">องค์กรแพทย์</p>
        </div>

        <div class="card-body">
            <table class="table table-striped" id="list-person">
                <thead>
                    <tr>
                        <th>UID</th>
                        <th>ชื่อ-สกุล</th>
                        <th>กลุ่มงาน</th>
                        <th>OPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>014</td>
                        <td>นายยัสลัน มายุดิน</td>
                        <td>กลุ่มงานเภสัชกรรมชุมชน</td>
                        <td>
                            <a href="{{ route('form-performance')}}" class="badge bg-danger">ยังไม่ประเมิน</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- @elseif ($permision == 'user') --}}
<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="text-center">
                <h3 class="text-center">รายชื่อประเมินเพื่อนร่วมงาน</h3>
                <a href="" class="btn btn-success disabled" >สุ่มเพื่อน</a>
                <a href="" class="btn btn-success disabled">บันทึก</a>
            </div>

        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>UID</th>
                        <th>ชื่อ-สกุล</th>
                        <th>กลุ่มงาน</th>
                        <th>OPTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($who as $who )

                    <tr>
                        <td>{{ $who->id }}</td>
                        <td>{{ $who->who}}</td>
                        {{-- <td>นายยัสลัน มายุดิน</td> --}}
                        <td>กลุ่มงานเภสัชกรรมชุมชน</td>
                        <td>
                            <a href="" class="badge bg-danger">ยังไม่ประเมิน</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</section>
</div>

@endif

        {{-- <section class="section">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">รายชื่อผู้ใต้บังคับบัญชา</h3>
                     <p class="text-center">องค์กรแพทย์</p>
                </div>

                <div class="card-body">
                    <table class="table table-striped" id="list-person">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>ชื่อ-สกุล</th>
                                <th>กลุ่มงาน</th>
                                <th>OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>014</td>
                                <td>นายยัสลัน มายุดิน</td>
                                <td>กลุ่มงานเภสัชกรรมชุมชน</td>
                                <td>
                                    <a href="{{ route('form-performance')}}" class="badge bg-danger">ยังไม่ประเมิน</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section> --}}










@endsection
