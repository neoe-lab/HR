{{-- @extends('layouts.master') --}}
{{-- @section('sidebar') --}}
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    {{-- <a href="index.html"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a> --}}
                    <a href="{{ route('home')}}"><p>HR</p></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">เมนู</li>

                <li class="sidebar-item active ">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>หน้าแรก</span>
                    </a>
                </li>
                <li class="sidebar-title">
                    <span>Name : <span class="fw-bolder">นายนิอิมรอน ดอเลาะ</span></span>
                    <hr>
                    <span>Role Name :</span>
                    <span class="badge bg-info">User Narmal</span>
                </li>

                <li class="sidebar-item">
                    <a href="{{ URL::to('usermanagement') }}" class='sidebar-link'>
                        <i class="bi bi-pen-fill"></i>
                        <span>จัดการข้อมูลบุคลากร</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>กำหนดรอบการประเมิน</span>
                    </a>
                </li>


                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>ติดตามผลการประเมิน</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#">การประเมินสมรรถนะ</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">การประเมินสัมพันธภาพ</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>สรุปคะแนน</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#">การประเมินสมรรถนะ</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">การประเมินสัมพันธภาพ</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">ตั้งค่าระบบ</li>



                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>จัดการ</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('department') }}">แผนก</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">สิทธิ์</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  ">
                    <a href="table.html" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>ออกจากระบบ</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
{{-- @endsection --}}
