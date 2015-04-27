<?php  
  session_start();//session starts here  
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Pongsakorn Sonto">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title></title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sisyphus.min.js"></script>
    <script src="js/ctrl.js"></script>
    <!-- Docs page layout -->
    <div class="bs-docs-header" id="content">
      <div class="container">
        <h1>แบบสอบถาม</h1>
        <p>Atwise Consulting Co., Ltd.</p>
      </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">สถานบริการสาธารณสุขด้านการดูแลผู้ที่มีปัญหาการดื่มสุรา</h4> 
        </div>
        <div class="panel-body">
          <form method="post" action="A8-interview-hospital.php" class="form" id="form" name="form">
          <h4>ส่วนที่ 1 ข้อมูลทั่วไปเกี่ยวกับหน่วยงานตอบแบบสอบถาม</h4>
          <!-- 1 -->
          <div class="form-group">
            <label for="x1_open">1. ชื่อหน่วยบริการ</label>
            <input type="text" class="form-control" name="x1_open" id="x1_open" placeholder="ชื่อหน่วยงาน">
          </div>
          <!-- 2 -->
          <div class="form-group">
            <label for="x2">2. ประเภทสถานบริการ</label>
            <div class="row">
              <div class="col-xs-4">
                <input type="radio" class="checkbox" name="x2" value="1"/> 1. โรงพยาบาลศูนย์ (รพศ.)
                 <label class="radio-inline" for="x2_1"></label>
                <input type="text" class="form-control" id="x2_1_open" name="x2_size" placeholder="ขนาด (เตียง)" disabled/>
              </div>
              <div class="col-xs-4">
                <input type="radio" class="checkbox" name="x2" value="2"/> 2. โรงพยาบาลทั่วไป (รพท.)
                <label class="radio-inline" for="x2_2"></label>
                <input type="text" class="form-control" id="x2_2_open" name="x2_size" placeholder="ขนาด (เตียง)" disabled/>
              </div>
              <div class="col-xs-4">
                <input type="radio" class="checkbox" name="x2" value="3"/> 3. โรงพยาบาลชุมชนขนาดใหญ่
                <label class="radio-inline" for="x2_3"></label>
                <input type="text" class="form-control" id="x2_3_open" name="x2_size" placeholder="ขนาด (เตียง)" disabled/>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <input type="radio" class="checkbox" name="x2" value="4"/> 4. โรงพยาบาลชุมชนขนาดกลาง
                <label class="radio-inline" for="x2_4"></label>
                <input type="text" class="form-control" id="x2_4_open" name="x2_size" placeholder="ขนาด (เตียง)" disabled/>
              </div>
              <div class="col-xs-4">
                <input type="radio" class="checkbox" name="x2" value="5"/> 5. โรงพยาบาลชุมชนขนาดเล็ก
                <label class="radio-inline" for="x2_5"></label>
                <input type="text" class="form-control" id="x2_5_open" name="x2_size" placeholder="ขนาด (เตียง)" disabled/>
              </div>
              <div class="col-xs-4">
                <input type="radio" class="checkbox" name="x2" value="6"/> 6. อื่นๆ ระบุ
                <label class="radio-inline" for="x2_6"></label>
                <input type="text" class="form-control" id="x2_6_open" name="x2_size" disabled/>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-8">
                <label for="x2_add">ที่อยู่</label>
                <input type="text" class="form-control" name="x2_add" id="x2_add" placeholder="ที่อยู่ ตำบล อำเภอ จังหวัด">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <label for="x2_tel">โทรศัพท์</label>
                <input type="text" class="form-control" name="x2_tel" id="x2_tel" placeholder="โทรศัพท์">
              </div>
              <div class="col-xs-4">
                <label for="x2_mail">อีเมล</label>
                <input type="text" class="form-control" name="x2_mail" id="x2_mail" placeholder="อีเมล">
              </div>
            </div>
          </div>
           <!-- 3 -->
          <div class="form-group">
            <label for="x3_name">3. ชื่อ ผู้ตอบแบบสอบถาม</label>
            <input type="text" class="form-control" name="x3_name" id="x3_name" placeholder="ชื่อ-สกุล">
          </div>
          <br/>
          <h4>ส่วนที่ 2 ระบบบริการและบุคลากรสุขภาพ</h4>
          <!-- 4 -->
          <div class="form-group">
            <label>4. หน่วยงานของท่านมีบุคลากรเฉพาะทางด้านสุขภาพจิตเวช หรือด้านการดูแลผู้ปัญหาการดื่มสุราหรือไม่</label>
            <div>
              <input type="radio" name="x4" id="x4.1" value="1"/> 1. ไม่มี
              <label class="radio-inline"></label>
            </div>
            <div>
              <input type="radio" class="showHide" name="x4" id="x4.2" value="2"/> 2. มี
              <label class="radio-inline"></label>
              <div class="reveal-if-active">
                <div class="row">
                  <div class="col-xs-4">
                    2.1 แพทย์เฉพาะทางด้านสุขภาพจิตเวช
                    <input type="text" class="form-control" id="x4_21_number" name="x4_21_number" placeholder="จำนวน (คน)"/>
                  </div>
                  <div class="col-xs-4">
                    2.2 พยาบาลเฉพาะทางด้านสุขภาพจิตเวช
                    <input type="text" class="form-control" id="x4_22_number" name="x4_22_number" placeholder="จำนวน (คน)"/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    2.3 อื่นๆ ระบุ<input type="text" class="form-control" id="x4_23_open" name="x4_23_open" placeholder="ระบุ"/>
                    จำนวน<input type="text" class="form-control" id="x4_23_number" name="x4_23_number" placeholder="จำนวน (คน)"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 5 -->
          <div class="form-group">
            <label>5. องค์กรปกครองส่วนท้องถิ่น มีการจัดการปัญหาการบริโภคเครื่องดื่มแอลกอฮอล์ หรือไม่</label>
            <div>
              <input type="radio" name="x5" id="x5.1" value="1"/> 1. ไม่มีบริการ
              <label class="radio-inline"></label>
            </div>
            <div>
              <input type="radio" name="x5" id="x5.2" value="2"/> 2. มีบริการในคลินิกทั่วไป
              <label class="radio-inline"></label>
            </div>
            <div>
              <input type="radio" name="x5" id="x5.3" value="3"/> 3. ไม่มีบริการในคลินิกเฉพาะ
              <label class="radio-inline"></label>
            </div>
            <div>
              <input type="radio" class="showHide" name="x5" id="x5.4" value="4"/> 4. มีบริการคลินิกเฉพาะ ระบุบริการเฉพาะ
              <label class="radio-inline"></label>
              <div class="reveal-if-active">(เลือกได้มากกว่า 1 ข้อ)<br/>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="checkbox" name="x5_41" id="x5_41" value="1"/> 4.1 คลินิกจิตเวช
                    <label class="checkbox-inline" for="x5_41"></label>
                  </div>
                  <div class="col-xs-2">
                    <input type="checkbox" name="x5_42" id="x5_42" value="1"/> 4.2 คลินิกสุรา
                    <label class="checkbox-inline" for="x5_42"></label>
                  </div>
                  <div class="col-xs-2">
                    <input type="checkbox" name="x5_43" id="x5_43" value="1"/> 4.3 คลินิกสารเสพติด
                    <label class="checkbox-inline" for="x5_43"></label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="checkbox" name="x5_44" id="x5_44" value="1"/> 4.4 กลุ่มบำบัด
                    <label class="checkbox-inline" for="x5_44"></label>
                  </div>
                  <div class="col-xs-2">
                    <input type="checkbox" name="x5_45" id="x5_45" value="1"/> 4.5 การให้คำปรึกษา
                    <label class="checkbox-inline" for="x5_45"></label>
                  </div>
                  <div class="col-xs-2">
                    <input type="checkbox" name="x5_46" id="x5_46" value="1"/> 4.6 การเยี่ยมบ้าน
                    <label class="checkbox-inline" for="x5_46"></label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="checkbox" name="x5_47" id="x5_47" value="1" onchange="document.getElementById('x5_47_open').disabled=!this.checked;"/> 4.7 อื่นๆ โปรดระบุ
                    <label class="checkbox-inline" for="x5_47"></label>
                    <input type="text" class="form-control" id="x5_47_open" name="x5_47_open" disabled/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 6 -->
          <div class="form-group">
            <label>6. หน่วยงานมีการกำหนดหน้าที่ความรับผิดชอบด้านการดูแลรักษาผู้มีปัญหาการดื่มสุราสำหรับบุคลากรในหน่วยงานหรือไม่</label>
            <div>
              <input type="radio" name="x6" id="x6.2" value="1"/> 1. ไม่มีการกำหนดหน้าที่ความรับผิดชอบเฉพาะ
              <label class="radio-inline"></label>
            </div>
            <div>
              <input type="radio" class="showHide" name="x6" id="x6.1" value="2"/> 2. มีการกำหนดหน้าที่ความรับผิดชอบเฉพาะในด้านใดบ้าง
              <label class="radio-inline"></label>
              <div class="reveal-if-active">(เลือกได้มากกว่า 1 ข้อ)<br/>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="checkbox" name="x6_21" id="x6_21" value="1"/> 2.1 การคัดกรองและบำบัดระยะสั้น
                  <label class="checkbox-inline" for="x6_21"></label>
                  </div>
                  <div class="col-xs-3">
                    <input type="checkbox" name="x6_22" id="x6_22" value="1"/> 2.2 การบำบัดรักษาภาวะถอนพิษสุรา
                    <label class="checkbox-inline" for="x6_22"></label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="checkbox" name="x6_23" id="x6_23" value="1"/> 2.3 การบำบัดรักษาและฟื้นฟูสภาพ
                    <label class="checkbox-inline" for="x6_23"></label>
                  </div>
                  <div class="col-xs-3">
                    <input type="checkbox" name="x6_24" id="x6_24" value="1"/> 2.4 การดูแลระยะยาวหลังการรักษา
                    <label class="checkbox-inline" for="x6_24"></label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="checkbox" name="x6_25" id="x6_25" value="1" onchange="document.getElementById('x6_25_open').disabled=!this.checked;"/> 2.5 อื่นๆ โปรดระบุ
                    <label class="checkbox-inline" for="x6_25"></label>
                    <input type="text" class="form-control" id="x6_25_open" name="x6_25_open" disabled/>
                  </div>
                </div>           
              </div>
            </div>
          </div>
          <!-- 7 -->
          <div class="form-group">
            <label>7. หน่วยงานมีบุคลากรที่เคยผ่านการอบรมการดูแลผู้มีปัญหาการดื่มสุราหรือไม่่</label>
            <div>
              <input type="radio" name="x7" id="x7.2" value="1"/> 1. ไม่มี
              <label class="radio-inline"></label>
            </div>
            <div>
              <input type="radio" class="showHide" name="x7" id="x7.1" value="2"/> 2. มี ในหลักสูตรใดบ้าง
              <label class="radio-inline"></label>
              <div class="reveal-if-active">(เลือกได้มากกว่า 1 ข้อ)<br/>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="checkbox" name="x7_21" id="x7_21" value="1"/> 2.1 การคัดกรองและบำบัดระยะสั้น
                  <label class="checkbox-inline" for="x7_21"></label>
                  </div>
                  <div class="col-xs-3">
                    <input type="checkbox" name="x7_22" id="x7_22" value="1"/> 2.2 การบำบัดรักษาภาวะถอนพิษสุรา
                    <label class="checkbox-inline" for="x7_22"></label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="checkbox" name="x7_23" id="x7_23" value="1"/> 2.3 การบำบัดรักษาและฟื้นฟูสภาพ
                    <label class="checkbox-inline" for="x7_23"></label>
                  </div>
                  <div class="col-xs-3">
                    <input type="checkbox" name="x7_24" id="x7_24" value="1"/> 2.4 การดูแลระยะยาวหลังการรักษา
                    <label class="checkbox-inline" for="x7_24"></label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="checkbox" name="x7_25" id="x7_25" value="1" onchange="document.getElementById('x7_25_open').disabled=!this.checked;"/> 2.5 อื่นๆ โปรดระบุ
                    <label class="checkbox-inline" for="x7_25"></label>
                    <input type="text" class="form-control" id="x7_25_open" name="x7_25_open" disabled/>
                  </div>
                </div>           
              </div>
            </div>
          </div>
          <!-- 8 -->
          <div class="form-group">
            <label>8. หน่วยบริการมีห้องตรวจเฉพาะสำหรับผู้มีปัญหาการดื่มสุราหรือไม่</label>
            <div>
              <input type="radio" name="x8" id="x8.1" value="1"/> 1. ไม่มี
              <label class="radio-inline"></label>
            </div>
            <div>
              <input type="radio" name="x8" id="x8.2" value="2"/> 2. มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 9 -->
          <div class="form-group">
            <label>9. ขณะนี้หน่วยงานมีผู้รับผิดชอบเฉพาะการดูแลผู้มีปัญหาการดื่มสุราหรือไม่</label>
            <div class="row">
              <div class="col-xs-5">
                <input type="radio" name="x9" id="x9.1" value="1"/> 1. ไม่มี
                <label class="radio-inline"></label>
              </div>
            </div> 
            <div class="row">
              <div class="col-xs-5">
                <input type="radio" name="x9" id="x9.2" value="2" onchange="document.getElementById('x9_number').disabled=!this.checked;"/> 2. มี
                <label class="radio-inline"></label>
                <input type="text" class="form-control" id="x9_number" name="x9_number" disabled/>
              </div>
            </div>
          </div>
          <!-- 10 -->
          <div class="form-group">
            <label>10. หน่วยงานมีระบบส่งต่อผู้มีปัญหาการดื่มสุราหรือไม่</label>
            <div class="row">
              <div class="col-xs-5">
                <input type="radio" name="x10" id="x10.1" value="1"/> 1. ไม่มี
                <label class="radio-inline"></label>
              </div>
            </div> 
            <div class="row">
              <div class="col-xs-5">
                <input type="radio" name="x10" id="x10.2" value="2" onchange="document.getElementById('x10_open').disabled=!this.checked;"/> 2. มี โปรดระบุ
                <label class="radio-inline"></label>
                <input type="text" class="form-control" id="x10_open" name="x10_open" disabled/>
              </div>
            </div>
          </div>
          <!-- 11 -->
          <div class="form-group">
            <label>11. หน่วยงานมีองค์กรหรือหน่วยงานที่สนับสนุนหรือเป็นภาคเครือข่ายการดำเนินงานผู้มีปัญหาการดื่มสุราหรือไม่</label>
            <div class="row">
              <div class="col-xs-5">
                <input type="radio" name="x11" id="x11.1" value="1"/> 1. ไม่มี
                <label class="radio-inline"></label>
              </div>
            </div> 
            <div class="row">
              <div class="col-xs-5">
                <input type="radio" name="x11" id="x11.2" value="2" onchange="document.getElementById('x11_open').disabled=!this.checked;"/> 2. มี โปรดระบุ
                <label class="radio-inline"></label>
                <input type="text" class="form-control" id="x11_open" name="x11_open" disabled/>
              </div>
            </div>
          </div>
          <!-- 12 -->
          <div class="form-group">
            <label>12. ปัญหา/อุปสรรค</label>
            <div class="row">
              <div class="col-xs-5">
                <textarea class="form-control" rows="2" id="x12_open" name="x12_open"></textarea>
              </div>
            </div>
          </div>
          <!-- 13 -->
          <div class="form-group">
            <label>13. ข้อเสนอแนะ</label>
            <div class="row">
              <div class="col-xs-5">
                <textarea class="form-control" rows="2" id="x13_open" name="x13_open"></textarea>
              </div>
            </div>
          </div>
          <!-- End -->
          <div class="form-group">
            <div class="col-md-12" align="right">
              <button type="submit" class="btn btn-success">Sent</button> 
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <?php
        print_r($_POST);
      ?>
    </div>
  </body>
</html>