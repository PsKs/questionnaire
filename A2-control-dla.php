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
    <style type="text/css">
      .reveal-if-active {
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        -webkit-transform: scale(0.8);
            -ms-transform: scale(0.8);
                transform: scale(0.8);
        -webkit-transition: 0.5s;
                transition: 0.5s;
      }
      .reveal-if-active label {
        display: block;
        margin: 0 0 3px 0;
      }
      .reveal-if-active input[type=text] {
        width: 100%;
      }
      input[type="radio"].showHide:checked ~ .reveal-if-active, input[type="checkbox"].showHide:checked ~ .reveal-if-active {
        opacity: 1;
        max-height: 400px;
        padding: 5px 0px 10px 20px;
        -webkit-transform: scale(1);
            -ms-transform: scale(1);
                transform: scale(1);
        overflow: visible;
      }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <script type="text/javascript">
    
  </script>
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sisyphus.min.js"></script>
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
          <h4 class="panel-title"><p>การรับรู้กระบวนการสร้างการมีส่วนรวมในการควบคุม และจัดการปัญหาการบริโภคเครื่องดื่มแอลกอฮอล์</p><p>รวมถึงการพัฒนาสื่อสาธารณะ ระดับองค์กรปกครองส่วนท้องถิ่น</p></h4> 
        </div>
        <div class="panel-body">
          <form method="post" action="A2-control-dla.php" class="cmxform" id="A1" name="A1">
          <h4>ส่วนที่ 1 ข้อมูลทั่วไปเกี่ยวกับหน่วยงานตอบแบบสอบถาม</h4>
          <!-- 1 -->
          <div class="form-group">
            <label for="x1_open">1. สังกัดหน่วยงาน</label>
            <input type="text" class="form-control" name="x1_open" id="x1_open" placeholder="ชื่อหน่วยงาน">
          </div>
          <!-- 2 -->
          <div class="form-group">
            <label for="x2_open">2. ชื่อกลุ่มงาน หน่วยงาน</label>
            <input type="text" class="form-control" name="x2_open" id="x2_open" placeholder="ชื่อกลุ่มงาน">
          </div><br/>
          <h4>ส่วนที่ 2 การดำเนินการด้านการควบคุมเครื่องดื่มแอลกอฮอล์</h4>
          <!-- 3 -->
          <div class="form-group">
            <label>3. องค์กรปกครองส่วนท้องถิ่น มีระบบการควบคุมการออกใบอนุญาตจำหน่ายเครื่องดื่มแอลกอฮอล์ในพื้นที่ หรือไม่</label>
            <div>
              <input type="radio" name="x3" id="x3.1" value="1"/> 1. มี
              <label class="radio-inline"></label>
            </div>
            <div>
              <input type="radio" name="x3" id="x3.2" value="2"> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 4 -->
          <div class="form-group">
            <label>4. องค์กรปกครองส่วนท้องถิ่น มีอำนาจในการจัดเก็บค่าธรรมเนียมใบอนุญาตจำหน่ายเครื่องดื่มแอลกอฮอล์ในพื้นที่ หรือไม่</label>
            <div>
              <input type="radio" name="x4" id="x4.1" value="1"/> 1. มี โดยวิธีใด
              <label class="radio-inline"></label>
            </div>
            <div>
              <input type="radio" name="x4" id="x4.2" value="2"/> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 5 -->
          <div class="form-group">
            <label>5. องค์กรปกครองส่วนท้องถิ่น มีการจัดการปัญหาการบริโภคเครื่องดื่มแอลกอฮอล์ หรือไม่</label>
            <div>
              <input type="radio" class="showHide" name="x5" id="x5.1" value="1"/> 1. มี
              <label class="radio-inline"></label>
              <div class="reveal-if-active">(ตอบได้มากกว่า 1 ข้อ)<br/>
                <input type="checkbox" name="x5_1" id="x5_1" value="1"/> 1.1 คำสั่ง/ประกาศ
                <label class="checkbox-inline" for="x5_1"></label>
                <input type="checkbox" name="x5_2" id="x5_2" value="1"/> 1.2 ผู้นำของท้องถิ่น เป็นแบบอย่างในการไม่ดื่มแอลกอฮอล์
                <label class="checkbox-inline" for="x5_2"></label>
                <input type="checkbox" name="x5_3" id="x5_3" value="1"/> 1.3 การจัดกิจกรรม รณรงค์ต่อต้านแอลกอฮอล์
                <label class="checkbox-inline" for="x5_3"></label>
                <input type="checkbox" name="x5_4" id="x5_4" value="1"/> 1.4 การประชาสัมพันธ์ รณรงค์เพื่อแสดงให้เห็นถึงผลกระทบจากการดื่มเครื่องดื่มแอลกอฮอล์
                <label class="checkbox-inline" for="x5_4"></label>
                <input type="checkbox" name="x5_5" id="x5_5" value="1" onchange="document.getElementById('x5_5_open').disabled=!this.checked;"/> 1.5 อื่นๆ ระบุ
                <label class="checkbox-inline" for="x5_5"></label>
                <input type="text" class="form-control" id="x5_5_open" name="x5_5_open" disabled/>
              </div>
            </div>
            <div>
              <input type="radio" name="x5" id="x5.2" value="2"/> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 6 -->
          <div class="form-group">
            <label>6. นอกเหนือจากการแต่งตั้งคณะกรรมการควบคุมเครื่องดื่มแอลกอฮอล์จังหวัด โดยอาศัยพระราชบัญญัติควบคุมเครื่องดื่มแอลกอฮอล์  พ.ศ. 2551 แล้ว ในระดับท้องถิ่น มีการแต่งตั้งคณะกรรมการควบคุมเครื่องดื่มแอลกอฮอล์ย่อยหรือไม่</label>
            <div>
              <input type="radio" class="showHide" name="x6" id="x6.1" value="1"/> 1. มี
              <label class="radio-inline"></label>
              <div class="reveal-if-active">(ตอบได้มากกว่า 1 ข้อ)<br/>
                <input type="checkbox" name="x6_1" id="x6_1" value="1"/> 1.1 คำสั่งแต่งตั้งคณะกรรมการควบคุมเครื่องดื่มแอลกอฮอล์ระดับอำเภอ
                <label class="checkbox-inline" for="x6_1"></label>
                <input type="checkbox" name="x6_2" id="x6_2" value="1"/> 1.2 คำสั่งแต่งตั้งชุดเฉพาะกิจตรวจเตือน ตรวจจับ/พนักงานเจ้าหน้าที่เฉพาะกิจเพื่อปฏิบัติการออกตรวจสอบ กวดขัน/นิเทศติดตามการดำเนินงานเฝ้าระวังและบังคับใช้กฎหมาย
                <label class="checkbox-inline" for="x6_2"></label>
                <input type="checkbox" name="x6_3" id="x6_3" value="1" onchange="document.getElementById('x6_3_open').disabled=!this.checked;"/> 1.3 อื่นๆ ระบุ
                <label class="checkbox-inline" for="x6_3"></label>
                <input type="text" class="form-control" id="x6_3_open" name="x6_3_open" disabled/>
              </div>
            </div>
            <div>
              <input type="radio" name="x6" id="x6.2" value="2"/> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 7 -->
          <div class="form-group">
            <label>7. ในปีงบประมาณที่ผ่านมา องค์กรปกครองท้องถิ่นมีการบรรจุแผนงาน โครงการ เกี่ยวกับการจัดการปัญหาแอลกอฮอล์ในแผนงบประมาณของหน่วยงานหรือไม่</label>
            <div>
              <input type="radio" name="x7" id="x7.1" value="1"/> 1. มี
              <label class="radio-inline"></label>
            </div>
            <div>
              <input type="radio" name="x7" id="x7.2" value="2"/> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 8 -->
          <div class="form-group">
            <label>8. อปท. ของท่านมีการมอบรางวัลต้นแบบการไม่ดื่มเครื่องดื่มแอลกอฮอล์ที่ได้รับการยกย่องเชิดชู หรือไม่</label>
            <div>
              <input type="radio" class="showHide" name="x8" id="x8.1" value="1"/> 1.  มี ในด้าน
              <label class="radio-inline"></label>
              <div class="reveal-if-active">
                <div class="row">
                  <div class="col-xs-3">
                    <input type="checkbox" name="x8_1" id="x8_1" value="1" onchange="document.getElementById('x8_1_open').disabled=!this.checked;"/> 1.1 บุคคลต้นแบบ
                    <label class="checkbox-inline" for="x8_1"></label>
                    <input type="text" class="form-control" id="x8_1_open" name="x8_1_open" placeholder="จำนวน (คน)" disabled/>
                  </div>
                  <div class="col-xs-3">
                    <input type="checkbox" name="x8_2" id="x8_2" value="1" onchange="document.getElementById('x8_2_open').disabled=!this.checked;"/> 1.2 ครอบครัวต้นแบบ
                    <label class="checkbox-inline" for="x8_2"></label>
                    <input type="text" class="form-control" id="x8_2_open" name="x8_2_open" placeholder="จำนวน (ครอบครัว)" disabled/>
                  </div>
                  <div class="col-xs-3">
                    <input type="checkbox" name="x8_3" id="x8_3" value="1" onchange="document.getElementById('x8_3_open').disabled=!this.checked;"/> 1.3 ชุมชนต้นแบบ
                    <label class="checkbox-inline" for="x8_3"></label>
                    <input type="text" class="form-control" id="x8_3_open" name="x8_3_open" placeholder="จำนวน (ชุมชน)" disabled/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="checkbox" name="x8_4" id="x8_4" value="1" onchange="document.getElementById('x8_4_open').disabled=!this.checked;"/> 1.4 สถาบันการศึกษาต้นแบบ
                    <label class="checkbox-inline" for="x8_4"></label>
                    <input type="text" class="form-control" id="x8_4_open" name="x8_4_open" placeholder="จำนวน (สถาบัน)" disabled/>
                  </div>
                  <div class="col-xs-3">
                    <input type="checkbox" name="x8_5" id="x8_5" value="1" onchange="document.getElementById('x8_5_open').disabled=!this.checked;"/> 1.5 อื่นๆ ระบุ
                    <label class="checkbox-inline" for="x8_5"></label>
                    <input type="text" class="form-control" id="x8_5_open" name="x8_5_open" disabled/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">(ขอเอกสารแนบ)</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">PDF หรือ JPEG</p>
                </div>
              </div>
            </div>
            <div>
              <input type="radio" name="x8" id="x8.2" value="2"/> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 9 -->
          <div class="form-group">
            <label>9. ปัญหา/อุปสรรค</label>
            <div>
              <textarea class="form-control" rows="2" id="x9_open" name="x9_open" style="width: 40%;"></textarea>
            </div>
          </div>
          <!-- 10 -->
          <div class="form-group">
            <label>10. ข้อเสนอแนะ</label>
            <div>
              <textarea class="form-control" rows="2" id="x10_open" name="x10_open" style="width: 40%;"></textarea>
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
    <script type="text/javascript">
      $(function() {
        $("#A1").sisyphus();
        autoRelease: true;
      });
    </script>
  </body>
</html>