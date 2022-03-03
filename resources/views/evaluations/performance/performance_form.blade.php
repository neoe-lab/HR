@extends('layouts.master')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>ฟอร์มการประเมิน</h3>
                    {{-- <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('list-person-performance') }}">ประเมินสมรรถนะ</a> </li>
                            <li class="breadcrumb-item active" aria-current="page">ฟอร์มการประเมิน
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        @php
        $level = 1;
        @endphp
        <form action=" {{ route('answer')}}" method="post">
        @csrf

        {{-- ระบุว่าใครเป็นคนประเมินเมื่อไร --}}
        <input type="hidden" name="who" value="002">
        <input type="hidden" name="me" value="006">
        <input type="hidden" name="time" value="036">
        <input type="hidden" name="type" value="01">


        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">แบบประเมินสมรรถนะ</h4>
                </div>
                <div class="card-body">
                    {{-- <p>
                        ผู้ถูกประเมิน นายชวลิต สุขสง่า
                        ระดับ K2
                        วันที่ทำการประเมิน 2022-02-24
                        ผู้ทำการประเมิน นายชวลิต สุขสง่า
                        รอบของการประเมิน 621
                        สถานะ OHEAD --}}
                    <div class="row">
                        <div class="col-md-3">
                            <h6>ผู้ถูกประเมิน</h6>
                        </div>
                        <div class="col-md-3">
                            <label> นายชวลิต สุขสง่า</label>
                        </div>
                        <div class="col-md-3">
                            <h6>ระดับ</h6>
                        </div>
                        <div class="col-md-3">
                            <label>ระดับชำนาญการ</label>
                        </div>
                        <div class="col-md-3">
                            <h6>วันที่ประเมิน</h6>
                        </div>
                        <div class="col-md-3">
                            <label>22/09/2022</label>
                        </div>
                        <div class="col-md-3">
                            <h6>ผู้ทำการประเมิน</h6>
                        </div>
                        <div class="col-md-3">
                            <label>	นายชวลิต สุขสง่า</label>
                        </div>
                        <div class="col-md-3">
                            <h6>รอบที่</h6>
                        </div>
                        <div class="col-md-3">
                            <label>2</label>
                        </div>
                    </div>
                        <hr>
                </div>
            </div>
        </section>

        {{-- ---------------------------------------------- สมถรรนะที่ 1 ------------------------------- --}}
        <section class="section">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-12">
                            <h5>สมรรถนะที่ 1 การมุ่งผลสัมฤทธิ์ (Achievement Motivation-ACH) น้ำหนัก 15%</h5>
                            <hr>
                        </div>

                        <div class="col-12">
                            <p>คำอธิบาย : ความมุ่งมั่นจะปฏิบัติราชการให้ดีหรือให้เกินมาตรฐานที่มีอยู่โดยมาตรฐานนี้อาจเป็นผลการปฏิบัติงานที่ผ่านมาของตนเองหรือเกณฑ์วัดผลสัมฤทธิ์ที่ส่วนราชการกำหนดขึ้นอีกทั้งยังหมายรวมถึง การสร้างสรรค์พัฒนาผลงานหรือกระบวนการปฏิบัติงานตามเป้าหมายที่ยากและท้าทายชนิดที่อาจไม่เคยมีผู้ใดสามารถกระทำได้มาก่อน</p>
                        </div>
                    </div>
                        {{-- ระดับที่ 1 --}}

                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 1 : แสดงความมุ่งมั่นและกระตือรือร้นที่จะปฏิบัติราชการให้ดี(แสดงความพยายามในการทำงานให้ดี)</h6>
                        </div>
                        <div class="col-md-1">
                            <p>1.1</p>
                            <input type="hidden" name="num[]" value="11">


                        </div>
                        <div class="col-md-9">
                            พยายามทำงานในหน้าที่ให้ถูกต้อง
                        </div>

                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <p>1.2</p>
                            <input type="hidden" name="num[]" value="12">

                        </div>
                        <div class="col-md-9">
                            พยายามปฏิบัติงานให้แล้วเสร็จตามกำหนดเวลา
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select" name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <p>1.3</p>
                            <input type="hidden" name="num[]" value="13">

                        </div>
                        <div class="col-md-9">
                            มานะ อดทน ขยันหมั่นเพียรในการทำงาน
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <p>1.4</p>
                            <input type="hidden" name="num[]" value="14">

                        </div>
                        <div class="col-md-9">
                            แสดงออกว่าต้องการทำงานให้ดีขึ้น
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <p>1.5</p>
                            <input type="hidden" name="num[]" value="15">

                        </div>
                        <div class="col-md-9">
                            แสดงความคิดเห็นเชิงปรับปรุงพัฒนาเมื่อเห็นสิ่งที่ก่อให้เกิดการสูญเปล่าหรือหย่อนประสิทธิภาพในงาน
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>



                    </div>
                    @if ( $level == 2)
                    {{-- ระดับที่ 2 --}}
                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 2 : แสดงสมรรถนะระดับที่ 1 และสามารถทำงานได้ผลงานตามเป้าหมายที่วางไว้</h6>
                        </div>
                        <div class="col-md-1">
                            <p>1.6</p>
                            <input type="hidden" name="num[]" value="16">

                        </div>
                        <div class="col-md-9">
                            กำหนดมาตรฐาน หรือเป้าหมายในการทำงานเพื่อให้ได้ผลงานที่ดี
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]>
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>1.7</p>
                            <input type="hidden" name="num[]" value="17">

                        </div>
                        <div class="col-md-9">
                            ติดตาม และประเมินผลงานของตน โดยเทียบเคียงกับเกณฑ์มาตรฐาน
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]>
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>1.8</p>
                            <input type="hidden" name="num[]" value="18">

                        </div>
                        <div class="col-md-9">
                            ทำงานได้ตามเป้าหมายที่ผู้บังคับบัญชากำหนด หรือเป้าหมายของหน่วยงานที่รับผิดชอบ
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]>
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>1.9</p>
                            <input type="hidden" name="num[]" value="19">

                        </div>
                        <div class="col-md-9">
                            มีความละเอียดรอบคอบ เอาใจใส่ ตรวจตราความถูกต้อง เพื่อให้ได้งานที่มีคุณภาพ
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]>
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>





                    </div>
                    @elseif ( $level == 3)
                    {{-- ระดับที่ 2 --}}
                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 2 : แสดงสมรรถนะระดับที่ 1 และสามารถทำงานได้ผลงานตามเป้าหมายที่วางไว้</h6>
                        </div>
                        <div class="col-md-1">
                            <p>1.6</p>
                            <input type="hidden" name="num[]" value="16">

                        </div>
                        <div class="col-md-9">
                            กำหนดมาตรฐาน หรือเป้าหมายในการทำงานเพื่อให้ได้ผลงานที่ดี
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>1.7</p>
                            <input type="hidden" name="num[]" value="17">
                        </div>
                        <div class="col-md-9">
                            ติดตาม และประเมินผลงานของตน โดยเทียบเคียงกับเกณฑ์มาตรฐาน
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]>
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>1.8</p>
                            <input type="hidden" name="num[]" value="18">

                        </div>
                        <div class="col-md-9">
                            ทำงานได้ตามเป้าหมายที่ผู้บังคับบัญชากำหนด หรือเป้าหมายของหน่วยงานที่รับผิดชอบ
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]>
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>1.9</p>
                            <input type="hidden" name="num[]" value="19">

                        </div>
                        <div class="col-md-9">
                            มีความละเอียดรอบคอบ เอาใจใส่ ตรวจตราความถูกต้อง เพื่อให้ได้งานที่มีคุณภาพ
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]>
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>





                    </div>

                    {{-- ระดับที่ 3 --}}
                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 3 : แสดงความมุ่งมั่นและกระตือรือร้นที่จะปฏิบัติราชการให้ดี(แสดงความพยายามในการทำงานให้ดี)</h6>
                        </div>
                        <div class="col-md-1">
                            <p>1.9</p>
                            <input type="hidden" name="num[]" value="19">

                        </div>
                        <div class="col-md-9">
                            ปรับปรุงวิธีการที่ทำให้ทำงานได้ดีขึ้น เร็วขึ้น มีคุณภาพดีขึ้น มีประสิทธิภาพมากขึ้น หรือทำให้ผู้รับบริการพึงพอใจมากขึ้น
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]>
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>1.10</p>
                            <input type="hidden" name="num[]" value="110">

                        </div>
                        <div class="col-md-9">
                            เสนอหรือทดลองวิธีการทำงานแบบใหม่ที่คาดว่าจะทำให้งานมีประสิทธิภาพมากขึ้น
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="inputGroupSelect01">คะแนน</label>
                                <select class="form-select"  name="score[]>
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>


                    </div>



                    @endif


                </div>



            </div>
        </section>
        {{-- --------------------------------------------- end สมรรถนะที่ 1---------------- --}}


        {{-- ---------------------------------------------- สมถรรนะที่ 2 -------------------------------------}}
        <section class="section">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-12">
                            <h5>สมรรถนะที่ 2 บริการที่ดี (Service Mind-SERV) น้ำหนัก 15%</h5>
                            <hr>
                        </div>

                        <div class="col-12">
                            <p>คำอธิบาย : ความตั้งใจและความพยายามของข้าราชการในการให้บริการต่อประชาชน ข้าราชการ หรือหน่วยงานอื่นๆ ที่เกี่ยวข้อง</p>
                        </div>
                    </div>
                    <div class="row">

                        {{--------------------------------------- ระดับที่ 1 -----------------------------------}}
                        <div class="col-12">
                            <h6>ระดับที่ 1 : สามารถให้บริการที่ผู้รับบริการต้องการได้ด้วยความเต็มใจ</h6>
                        </div>
                        <div class="col-md-1">
                            <p>2.1</p>
                            <input type="hidden" name="num[]" value="21">

                        </div>
                        <div class="col-md-9">
                            ให้การบริการที่เป็นมิตร สุภาพ
                        </div>

                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-1">
                            <p>2.2</p>
                            <input type="hidden" name="num[]" value="22">

                        </div>
                        <div class="col-md-9">
                            ให้ข้อมูล ข่าวสาร ที่ถูกต้อง ชัดเจนแก่ผู้รับบริการ
                        </div>



                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>2.3</p>
                            <input type="hidden" name="num[]" value="23">

                        </div>
                        <div class="col-md-9">
                            แจ้งให้ผู้รับบริการทราบความคืบหน้าในการดำเนินเรื่อง หรือขั้นตอนงานต่างๆ ที่ให้บริการอยู่
                        </div>

                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <p>2.4</p>
                            <input type="hidden" name="num[]" value="24">

                        </div>
                        <div class="col-md-9">
                            ประสานงานภายในหน่วยงานและหน่วยงานที่เกี่ยวข้อง เพื่อให้ผู้รับบริการได้รับบริการที่ต่อเนื่องและรวดเร็ว
                        </div>

                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>



                    </div>

                        {{------------------------- ระดับที่ 2 -----------------------------------}}

                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 2 : แสดงสมรรถนะระดับที่  1 และช่วยแก้ปัญหาให้แก่ผู้รับบริการ</h6>
                        </div>
                        <div class="col-md-1">
                            <p>2.5</p>
                            <input type="hidden" name="num[]" value="25">

                        </div>
                        <div class="col-md-9">
                            รับเป็นธุระ ช่วยแก้ปัญหาหรือหาแนวทางแก้ไขปัญหาที่เกิดขึ้นแก่ผู้รับบริการอย่างรวดเร็ว  ไม่บ่ายเบี่ยง ไม่แก้ตัว หรือปัดภาระ
                         </div>

                         <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <p>2.6</p>
                            <input type="hidden" name="num[]" value="26">

                        </div>
                        <div class="col-md-9">
                            ดูแลให้ผู้รับบริการได้รับความพึงพอใจ และนำข้อขัดข้องใดๆ ในการให้บริการไปพัฒนาการให้บริการให้ดียิ่งขึ้น
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    {{--------------------------------------- ระดับที่ 3 --------------------------------}}
                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 3 : แสดงสมรรถนะระดับที่ 2 และให้บริการที่เกินความคาดหวัง แม้ต้องใช้เวลาหรือความพยายามอย่างมาก</h6>
                        </div>
                        <div class="col-md-1">
                            <p>2.7</p>
                            <input type="hidden" name="num[]" value="27">

                        </div>
                        <div class="col-md-9">
                            ให้เวลาแก่ผู้รับบริการเป็นพิเศษ เพื่อช่วยแก้ปัญหาให้แก่ผู้รับบริการ
                        </div>

                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>2.8</p>
                            <input type="hidden" name="num[]" value="28">

                        </div>
                        <div class="col-md-9">
                            ให้ข้อมูล ข่าวสาร ที่เกี่ยวข้องกับงานที่กำลังให้บริการอยู่ ซึ่งเป็นประโยชน์แก่ผู้รับบริการ แม้ว่าผู้รับบริการจะไม่ได้ถามถึง หรือไม่ทราบมาก่อน
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>2.9</p>
                            <input type="hidden" name="num[]" value="29">

                        </div>
                        <div class="col-md-9">
                            นำเสนอวิธีการในการให้บริการที่ผู้รับบริการจะได้รับประโยชน์สูงสุด
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </section>
        {{------------------------------------------------ end สมรรถนะที่ 2-----------------------------}}

         {{-- ---------------------------------------------- สมถรรนะที่ 3 -------------------------------------}}
         <section class="section">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-12">
                            <h5>สมรรถนะที่ 3 : การสั่งสมความเชี่ยวชาญในงานอาชีพ (Expertise-EXP)  น้ำหนัก 15%</h5>
                            <hr>
                        </div>

                        <div class="col-12">
                            <p>คำอธิบาย : ความสนใจใฝ่รู้ สั่งสม ความรู้ความสามารถของตนในการปฏิบัติงานราชการ ด้วยการศึกษา ค้นคว้า และพัฒนาตนเองอย่างต่อเนื่อง จนสามารถประยุกต์ใช้ความรู้เชิงวิชาการและเทคโนโลยีต่างๆ เข้ากับการปฏิบัติงานให้เกิดผลสัมฤทธิ์</p>
                        </div>
                    </div>
                    <div class="row">

                        {{--------------------------------------- ระดับที่ 1 -----------------------------------}}
                        <div class="col-12">
                            <h6>ระดับที่ 1 : สามารถให้บริการที่ผู้รับบริการต้องการได้ด้วยความเต็มใจ</h6>
                        </div>
                        <div class="col-md-1">
                            <p>3.1</p>
                            <input type="hidden" name="num[]" value="31">

                        </div>
                        <div class="col-md-9">
                            ศึกษาหาความรู้ สนใจเทคโนโลยีและองค์ความรู้ใหม่ๆ ในสาขาอาชีพของตน
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>3.2</p>
                            <input type="hidden" name="num[]" value="32">

                        </div>
                        <div class="col-md-9">
                            พัฒนาความรู้ความสามารถของตนให้ดียิ่งขึ้น
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>3.3</p>
                            <input type="hidden" name="num[]" value="33">

                        </div>
                        <div class="col-md-9">
                            ติดตามเทคโนโลยีและความรู้ใหม่ๆ อยู่เสมอ ด้วยการสืบค้นข้อมูลจากแหล่งต่างๆ ที่จะเป็นประโยชน์ต่อการปฏิบัติราชการ
                        </div>

                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                        {{------------------------- ระดับที่ 2 -----------------------------------}}

                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 2 : แสดงสมรรถนะระดับที่ 1 และมีความรู้ในวิชาการและเทคโนโลยีใหม่ๆ ในสาขาอาชีพของตน</h6>
                        </div>
                        <div class="col-md-1">
                            <p>3.4</p>
                            <input type="hidden" name="num[]" value="34">

                        </div>
                        <div class="col-md-9">
                            รอบรู้ในเทคโนโลยีหรือองค์ความรู้ใหม่ๆ ในสาขาอาชีพของตน หรือที่เกี่ยวข้อง ซึ่งอาจมีผลกระทบต่อการปฏิบัติหน้าที่ราชการของตน
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>3.5</p>
                            <input type="hidden" name="num[]" value="35">

                        </div>
                        <div class="col-md-9">
                            รับรู้ถึงแนวโน้มวิทยาการที่ทันสมัย และเกี่ยวข้องกับงานตน อย่างต่อเนื่อง
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    {{--------------------------------------- ระดับที่ 3 --------------------------------}}
                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 3 : แสดงสมรรถนะระดับที่ 2 และสามารถนำความรู้ วิทยาการ หรือเทคโนโลยีใหม่ๆ มาปรับใช้กับการปฏิบัติหน้าที่ราชการ</h6>
                        </div>
                        <div class="col-md-1">
                            <p>3.6</p>
                            <input type="hidden" name="num[]" value="36">

                        </div>
                        <div class="col-md-9">
                            สามารถนำวิชาการ ความรู้ หรือเทคโนโลยีใหม่ๆ มาประยุกต์ใช้ในการปฏิบัติหน้าที่ราชการได้
                        </div>

                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>3.7</p>
                            <input type="hidden" name="num[]" value="37">

                        </div>
                        <div class="col-md-9">
                            สามารถแก้ปัญหาที่อาจเกิดจากการนำเทคโนโลยีใหม่มาใช้ในการปฏิบัติหน้าที่ราชการได้
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>



            </div>
        </section>
        {{------------------------------------------------ end สมรรถนะที่ 3-----------------------------}}

         {{-- ---------------------------------------------- สมถรรนะที่ 4 -------------------------------------}}
         <section class="section">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-12">
                            <h5>สมรรถนะที่ 4 การยึดมั่นในความถูกต้องชอบธรรมและจริยธรรม (Integrity-ING) น้ำหนัก 15%</h5>
                            <hr>
                        </div>

                        <div class="col-12">
                            <p>คำอธิบาย : การดำรงตนและประพฤติปฏิบัติอย่างถูกต้องเหมาะสมทั้งตามกฎหมาย คุณธรรม จรรยาบรรณแห่งวิชาชีพ และจรรยาบรรณข้าราชการเพื่อรักษาศักดิ์ศรีแห่งความเป็นข้าราชการ</p>
                        </div>
                    </div>
                    <div class="row">

                        {{--------------------------------------- ระดับที่ 1 -----------------------------------}}
                        <div class="col-12">
                            <h6>ระดับที่ 1 : มีความสุจริต</h6>
                        </div>
                        <div class="col-md-1">
                            <p>4.1</p>
                            <input type="hidden" name="num[]" value="41">

                        </div>
                        <div class="col-md-9">
                            ปฏิบัติหน้าที่ด้วยความสุจริต ไม่เลือกปฏิบัติ ถูกต้องตามหลักกฎหมาย และวินัยข้าราชการ
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>4.2</p>
                            <input type="hidden" name="num[]" value="42">

                        </div>
                        <div class="col-md-9">
                            แสดงความคิดเห็นตามหลักวิชาชีพอย่างสุจริต
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                        {{------------------------- ระดับที่ 2 -----------------------------------}}

                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 2 : แสดงสมรรถนะระดับที่ 1 และมีสัจจะเชื่อถือได้</h6>
                        </div>
                        <div class="col-md-1">
                            <p>4.3</p>
                            <input type="hidden" name="num[]" value="43">

                        </div>
                        <div class="col-md-9">
                            รักษาคำพูด มีสัจจะ และเชื่อถือได้
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <p>4.4</p>
                            <input type="hidden" name="num[]" value="44">

                        </div>
                        <div class="col-md-9">
                            แสดงให้ปรากฏถึงความมีจิตสำนึกในความเป็นข้าราชการ
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    {{--------------------------------------- ระดับที่ 3 --------------------------------}}
                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 3 : แสดงสมรรถนะระดับที่ 2 และยึดมั่นในหลักการ</h6>
                        </div>
                        <div class="col-md-1">
                            <p>4.5</p>
                            <input type="hidden" name="num[]" value="45">

                        </div>
                        <div class="col-md-9">
                            ยึดมั่นในหลักการ จรรยาบรรณแห่งวิชาชีพ และจรรยาข้าราชการ ไม่เบี่ยงเบนด้วยอคติหรือผลประโยชน์ กล้ารับผิด และรับผิดชอบ
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>4.6</p>
                            <input type="hidden" name="num[]" value="46">

                        </div>
                        <div class="col-md-9">
                            เสียสละความสุขส่วนตน เพื่อให้เกิดประโยชน์แก่ทางราชการ
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>



            </div>
        </section>
        {{------------------------------------------------ end สมรรถนะที่ 4 -----------------------------}}

         {{-- ---------------------------------------------- สมถรรนะที่ 5 -------------------------------------}}
         <section class="section">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-12">
                            <h5>สมรรถนะที่ 5 การทำงานเป็นทีม (Teamwork-TW)  น้ำหนัก 15%</h5>
                            <hr>
                        </div>

                        <div class="col-12">
                            <p>คำอธิบาย : ความตั้งใจที่จะทำงานร่วมกับผู้อื่น เป็นส่วนหนึ่งในทีมงาน หน่วยงาน หรือส่วนราชการ โดยผู้ปฏิบัติมีฐานะเป็นสมาชิกในทีม ไม่จำเป็นต้องมีฐานะหัวหน้าทีม รวมทั้งความสามารถในการสร้างและรักษาสัมพันธภาพกับสมาชิกในทีม</p>
                        </div>
                    </div>
                    <div class="row">

                        {{--------------------------------------- ระดับที่ 1 -----------------------------------}}
                        <div class="col-12">
                            <h6>ระดับที่ 1 : ทำหน้าที่ของตนในทีมให้สำเร็จ</h6>
                        </div>
                        <div class="col-md-1">
                            <p>5.1</p>
                            <input type="hidden" name="num[]" value="51">

                        </div>
                        <div class="col-md-9">
                            <p>สนับสนุนการตัดสินใจของทีม และทำงานในส่วนที่ตนได้รับมอบหมาย</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <p>5.2</p>
                            <input type="hidden" name="num[]" value="52">

                        </div>
                        <div class="col-md-9">
                            <p>รายงานให้สมาชิกทราบความคืบหน้าของการดำเนินงานของตนในทีม</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <p>5.3</p>
                            <input type="hidden" name="num[]" value="53">

                        </div>
                        <div class="col-md-9">
                            <p>ให้ข้อมูล ที่เป็นประโยชน์ต่อการทำงานของทีม</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                        {{------------------------- ระดับที่ 2 -----------------------------------}}

                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 2 : แสดงสมรรถนะระดับที่ 1 และให้ความร่วมมือในการทำงานกับเพื่อนร่วมงาน</h6>
                        </div>
                        <div class="col-md-1">
                            <p>5.4</p>
                            <input type="hidden" name="num[]" value="54">

                        </div>
                        <div class="col-md-9">
                            <p>สร้างสัมพันธ์  เข้ากับผู้อื่นในกลุ่มได้ดี</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>5.5</p>
                            <input type="hidden" name="num[]" value="55">

                        </div>
                        <div class="col-md-9">
                            <p>ให้ความร่วมมือกับผู้อื่นในทีมด้วยดี</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>5.6</p>
                            <input type="hidden" name="num[]" value="56">

                        </div>
                        <div class="col-md-9">
                            <p>กล่าวถึงเพื่อนร่วมงานในเชิงสร้างสรรค์ และแสดงความเชื่อมั่นในศักยภาพของเพื่อนร่วมทีม ทั้งต่อหน้าและลับหลัง</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    {{--------------------------------------- ระดับที่ 3 --------------------------------}}
                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 3 : แสดงสมรรถนะระดับที่ 2 และประสานความร่วมมือของสมาชิกในทีม</h6>
                        </div>
                        <div class="col-md-1">
                            <p>5.7</p>
                            <input type="hidden" name="num[]" value="57">

                        </div>
                        <div class="col-md-9">
                            <p>รับฟังความเห็นของสมาชิกในทีม และเต็มใจเรียนรู้จากผู้อื่น</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>5.8</p>
                            <input type="hidden" name="num[]" value="58">

                        </div>
                        <div class="col-md-9">
                            <p>ตัดสินใจหรือวางแผนงานร่วมกันในทีมจากความคิดเห็นของเพื่อนร่วมทีม</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>5.9</p>
                            <input type="hidden" name="num[]" value="59">

                        </div>
                        <div class="col-md-9">
                            <p>ประสานและส่งเสริมสัมพันธภาพอันดีในทีม เพื่อสนับสนุนการทำงานร่วมกันให้มีประสิทธิภาพยิ่งขึ้น</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>



            </div>
        </section>
        {{------------------------------------------------ end สมรรถนะที่ 5 -----------------------------}}

         {{-- ---------------------------------------------- สมถรรนะที่ 6 -------------------------------------}}
         <section class="section">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-12">
                            <h5>สมรรถนะที่ 6 ความเข้าใจข้อแตกต่างทางวัฒนธรรม (Cultural Sensitivity) น้ำหนัก 25%</h5>
                            <hr>
                        </div>

                        <div class="col-12">
                            <p>คำอธิบาย : การรับรู้ถึงข้อแตกต่างทางวัฒนธรรม และสามารถประยุกต์ความเข้าใจ เพื่อสร้างสัมพันธภาพระหว่างกันได้</p>
                        </div>
                    </div>
                    <div class="row">

                        {{--------------------------------------- ระดับที่ 1 -----------------------------------}}
                        <div class="col-12">
                            <h6>ระดับที่ 1 : เห็นคุณค่าของวัฒนธรรมไทยและให้ความสนใจวัฒนธรรมของผู้อื่น</h6>
                        </div>
                        <div class="col-md-1">
                            <p>6.1</p>
                            <input type="hidden" name="num[]" value="61">

                        </div>
                        <div class="col-md-9">
                            <p>ภาคภูมิใจในวัฒนธรรมของไทย ขณะที่เห็นคุณค่าและสนใจที่จะเรียนรู้วัฒนธรรมของผู้อื่น</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>6.2</p>
                            <input type="hidden" name="num[]" value="62">

                        </div>
                        <div class="col-md-9">
                            <p>ยอมรับความแตกต่างทางวัฒนธรรม และไม่ดูถูกวัฒนธรรมอื่นว่าด้อยกว่า</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        {{------------------------- ระดับที่ 2 -----------------------------------}}

                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 2 : แสดงสมรรถนะระดับที่ 1 และเข้าใจ รวมทั้งปรับตัวให้สอดคล้องกับวัฒนธรรมใหม่</h6>
                        </div>
                        <div class="col-md-1">
                            <p>6.3</p>
                            <input type="hidden" name="num[]" value="63">

                        </div>
                        <div class="col-md-9">
                            <p>เข้าใจมารยาท กาลเทศะ ตลอดจนธรรมเนียมปฏิบัติของวัฒนธรรมที่แตกต่าง และพยายามปรับตัวให้สอดคล้อง</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>6.4</p>
                            <input type="hidden" name="num[]" value="64">

                        </div>
                        <div class="col-md-9">
                            <p>สื่อสารด้วยวิธีการ เนื้อหา และถ้อยคำที่เหมาะสมกับวัฒนธรรมของผู้อื่น</p>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{--------------------------------------- ระดับที่ 3 --------------------------------}}
                    <div class="row">
                        <div class="col-12">
                            <h6>ระดับที่ 3 : แสดงสมรรถนะระดับที่ 2 และเข้าใจในวัฒนธรรมต่าง ๆ อย่างลึกซึ้ง รวมทั้งแสดงออกได้อย่างเหมาะสมกับสถานการณ์</h6>
                        </div>
                        <div class="col-md-1">
                            <p>6.5</p>
                            <input type="hidden" name="num[]" value="65">

                        </div>
                        <div class="col-md-9">
                            <p>เข้าใจบริบท และนัยสำคัญของวัฒนธรรมต่าง ๆ</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>6.6</p>
                            <input type="hidden" name="num[]" value="66">

                        </div>
                        <div class="col-md-9">
                            <p>เข้าใจรากฐานทางวัฒนธรรมที่แตกต่างอันจะทำให้เข้าใจวิธีคิดของผู้อื่น</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p>6.7</p>
                            <input type="hidden" name="num[]" value="67">

                        </div>
                        <div class="col-md-9">
                            <p>ไม่ตัดสินผู้อื่นจากความแตกต่างทางวัฒนธรรม แต่ต้องพยายามทำความเข้าใจ เพื่อให้สามารถทำงานร่วมกันได้</p>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm mb-2">
                                <label class="input-group-text" for="score">คะแนน</label>
                                <select class="form-select"  name ="score[]">
                                    <option selected="">เลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>
        {{------------------------------------------------ end สมรรถนะที่ 6-----------------------------}}

        {{--------------------------- สรุปผลคะแนน ก่อนบันทึก ------------------------------------  --}}
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table table">
                                <thead>
                                    <tr>
                                        <th>สมรรถนะ 1</th>
                                        <th>สมรรถนะ 2</th>
                                        <th>สมรรถนะ 3</th>
                                        <th>สมรรถนะ 4</th>
                                        <th>สมรรถนะ 5</th>
                                        <th>สมรรถนะ 6</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>22</td>
                                        <td>22</td>
                                        <td>22</td>
                                        <td>22</td>
                                        <td>22</td>
                                        <td>22</td>
                                    </tr>

                                </tbody>
                            </table>
                            <button type="button" class="btn btn-outline-success">คำนวณ</button>
                            <button type="submit" value="submit" class="btn btn-outline-primary">บันทึก</button>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="section">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('answer')}}" method="post">
                        @csrf
                  <input type="text" name="score" value="ddd" id="">
                    <button type="submit">save</button>
                    </form>
                </div>
            </div>
        </section> --}}

    </form>

    </div>













@endsection
