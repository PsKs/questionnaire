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
          <h4 class="panel-title">การรับรู้กระบวนการสร้างการมีส่วนรวมในการควบคุม และจัดการปัญหาการบริโภคเครื่องดื่มแอลกอฮอล์  รวมถึงการพัฒนาสื่อสาธารณะ ระดับจังหวัด</h4> 
        </div>
        <div class="panel-body">
          <form method="post" action="index.php" class="cmxform" id="A1" name="A1">
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
            <label>3. จังหวัดมีการจัดการปัญหาการบริโภคเครื่องดื่มแอลกอฮอล์ หรือไม่</label>
            <div>
              <input type="radio" class="showHide" name="x3" id="x3.1" value="1"/> 1. มี
              <label class="radio-inline"></label>
              <div class="reveal-if-active">(ตอบได้มากกว่า 1 ข้อ)<br/>
                <input type="checkbox" name="x3_1" id="x3_1" value="1"/> 1.1 คำสั่ง/ประกาศ
                <label class="checkbox-inline" for="x3_1"></label>
                <input type="checkbox" name="x3_2" id="x3_2" value="1"/> 1.2 ผู้นำของจังหวัด เป็นแบบอย่างในการไม่ดื่มแอลกอฮอล์
                <label class="checkbox-inline" for="x3_2"></label>
                <input type="checkbox" name="x3_3" id="x3_3" value="1"/> 1.3 การจัดกิจกรรม รณรงค์ต่อต้านแอลกอฮอล์
                <label class="checkbox-inline" for="x3_3"></label>
                <input type="checkbox" name="x3_4" id="x3_4" value="1"/> 1.4 การประชาสัมพันธ รณรงค์เพื่อแสดงให้เห็นถึงผลกระทบจากการดื่มเครื่องดื่มแอลกอฮอล์
                <label class="checkbox-inline" for="x3_4"></label>
                <input type="checkbox" name="x3_5" id="x3_5" value="1" onchange="document.getElementById('x3_5_open').disabled=!this.checked;"/> 1.5 อื่นๆ ระบุ
                <label class="checkbox-inline" for="x3_5"></label>
                <input type="text" class="form-control" id="x3_5_open" name="x3_5_open" disabled/>
              </div>
            </div>
            <div>
              <input type="radio" name="x3" id="x3.2" value="2"> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 4 -->
          <div class="form-group">
            <label>4. จังหวัดมีกระบวนการสร้างการมีส่วนร่วมในการควบคุมและลดปัญหาจากเครื่องดื่มแอลกอฮอล์ หรือไม่</label>
            <div>
              <input type="radio" class="showHide" name="x4" id="x4.1" value="1"/> 1. มี โดยวิธีใด
              <label class="radio-inline"></label>
              <div class="reveal-if-active">(ตอบได้มากกว่า 1 ข้อ)<br/>
                <input type="checkbox" name="x4_1" id="x4_1" value="1"/> 1.1 ให้เป็นวาระหนึ่งของการประชุมจังหวัด
                <label class="checkbox-inline" for="x4_1"></label>
                <input type="checkbox" name="x4_2" id="x4_2" value="1"/> 1.2 จัดกิจกรรม/ประชาสัมพันธ์ การรณรงค์การควบคุมเครื่องดื่มแอลกอฮอล์
                <label class="checkbox-inline" for="x4_2"></label>
                <input type="checkbox" name="x4_3" id="x4_3" value="1"/> 1.3 ดำเนินการตามแผนยุทธศาสตร์นโยบายแอลกอฮอล์ระดับชาติ มีการตั้งคณะกรรมการระดับพื้นที่ในการออกตรวจ หรือตรวจจับ
                <label class="checkbox-inline" for="x4_3"></label>
                <input type="checkbox" name="x4_4" id="x4_4" value="1"/> 1.4 พัฒนาตัวชี้วัดการมีส่วนร่วม เช่น จำนวนภาคีเครือข่าย ผลการดำเนินการควบคุมปัญหาที่เกิดจากเครื่องดื่มแอลกอฮอล์ภายในจังหวัด
                <label class="checkbox-inline" for="x4_4"></label>
                <input type="checkbox" name="x4_5" id="x4_5" value="1" onchange="document.getElementById('x4_5_open').disabled=!this.checked;"/> 1.5 อื่นๆ ระบุ
                <label class="checkbox-inline" for="x4_5"></label>
                <input type="text" class="form-control" id="x4_5_open" name="x4_5_open" disabled/>
              </div>
            </div>
            <div>
              <input type="radio" name="x4" id="x4.2" value="2"/> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 5 -->
          <div class="form-group">
            <label>5. การปกป้องสังคมให้ปลอดจากผลกระทบของเครื่องดื่มแอลกอฮอล์ หน่วยงานของท่านได้มีการกำหนดนโยบายการตัดสินใจเรื่องนี้ไว้หรือไม่</label>
            <div>
              <input type="radio" class="showHide" name="x5" id="x5.1" value="1"/> 1. มี
              <label class="radio-inline"></label>
              <div class="reveal-if-active">(ตอบได้มากกว่า 1 ข้อ)<br/>
                <input type="checkbox" name="x5_1" id="x5_1" value="1"/> 1.1 อาศัยคำสั่ง/ประกาศ จากจังหวัด
                <label class="checkbox-inline" for="x5_1"></label>
                <input type="checkbox" name="x5_2" id="x5_2" value="1"/> 1.2 อาศัยคำสั่ง/ประกาศ จากหน่วยงานต้นสังกัด
                <label class="checkbox-inline" for="x5_2"></label>
                <input type="checkbox" name="x5_3" id="x5_3" value="1"/> 1.3 อาศัยอำนาจหน้าที่ของการเป็นคณะกรรมการควบคุมเครื่องดื่มแอลกอฮอล์จังหวัด
                <label class="checkbox-inline" for="x5_3"></label>
                <input type="checkbox" name="x5_4" id="x5_4" value="1" onchange="document.getElementById('x5_4_open').disabled=!this.checked;"/> 1.4 อื่นๆ ระบุ
                <label class="checkbox-inline" for="x5_4"></label>
                <input type="text" class="form-control" id="x5_4_open" name="x5_4_open" disabled/>
              </div>
            </div>
            <div>
              <input type="radio" name="x5" id="x5.2" value="2"/> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 6 -->
          <div class="form-group">
            <label>6. หน่วยงานของท่าน มีกระบวนการพัฒนาการสื่อสารสาธารณะ เพื่อสนับสนุนการดำเนินงานควบคุมเครื่องดื่มแอลกอฮอล์ หรือไม่</label>
            <div>
              <input type="radio" class="showHide" name="x6" id="x6.1" value="1"/> 1. มี
              <label class="radio-inline"></label>
              <div class="reveal-if-active">ความสำเร็จอยู่ในระดับ<br/>
                <input type="checkbox" name="x6_1" id="x6_1" value="1" onclick="if(this.checked) {document.A1.x6_2.checked=false; document.A1.x6_3.checked=false;}"/> 1.1 มาก
                <label for="x6_1"></label>
                <input type="checkbox" name="x6_2" id="x6_2" value="1" onclick="if(this.checked) {document.A1.x6_1.checked=false; document.A1.x6_3.checked=false;}"/> 1.2 ปานกลาง
                <label for="x6_2"></label>
                <input type="checkbox" name="x6_3" id="x6_3" value="1" onclick="if(this.checked) {document.A1.x6_1.checked=false; document.A1.x6_2.checked=false;}"/> 1.3 น้อย
                <label for="x6_3"></label>
              </div>
            </div>
            <div>
              <input type="radio" name="x6" id="x6.2" value="2"/> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 7 -->
          <div class="form-group">
            <label>7. หน่วยงานของท่าน มีการสื่อสารสาธารณะไปยังประชาชน หรือหน่วยงานที่เกี่ยวข้อง ในเรื่องผลกระทบของเครื่องดื่มแอลกอฮอล์ โดยวิธีการใด (ตอบได้มากกว่า 1 ข้อ)</label>
            <div>
              <input type="checkbox" name="x7_1" id="x7_1" value="1"/> 1. นำเสนอผ่านเวทีวิชาการทั้งที่เป็นทางการและไม่เป็นทางการ
              <label class="checkbox-inline" for="x7_1"></label><br/>
              <input type="checkbox" name="x7_2" id="x7_2" value="1"/> 2. การจัดประชุมและหารือถึงปัญหา
              <label class="checkbox-inline" for="x7_2"></label><br/>
              <input type="checkbox" name="x7_3" id="x7_3" value="1"/> 3. การจัดกิจกรรมรณรงค์ประชาสัมพันธ์
              <label class="checkbox-inline" for="x7_3"></label><br/>
              <input type="checkbox" name="x7_4" id="x7_4" value="1"/> 4. รายงานความรู้จากการวิจัย
              <label class="checkbox-inline" for="x7_4"></label><br/>
              <input type="checkbox" class="showHide" name="x7_5" id="x7_5" value="1"/> 5. รับรู้ผ่านช่องทางสื่อ (ตอบได้มากกว่า 1 ข้อ)
              <label class="checkbox-inline" for="x7_5"></label><br/>
              <div class="reveal-if-active">
                <input type="checkbox" name="x7_5_1" id="x7_5_1" value="1"/> 5.1 หนังสือพิมพ์
                <label class="checkbox-inline" for="x7_1"></label>
                <input type="checkbox" name="x7_5_2" id="x7_5_2" value="1"/> 5.2 เว็บไซต์
                <label class="checkbox-inline" for="x7_5_2"></label>
                <input type="checkbox" name="x7_5_3" id="x7_5_3" value="1"/> 5.3 โทรทัศน์
                <label class="checkbox-inline" for="x7_5_3"></label>
                <input type="checkbox" name="x7_5_4" id="x7_5_4" value="1"/> 5.4 วิทยุ
                <label class="checkbox-inline" for="x7_5_4"></label>
                <input type="checkbox" name="x7_5_5" id="x7_5_5" value="1"/> 5.5 นิตยสาร
                <label class="checkbox-inline" for="x7_5_5"></label>
                <input type="checkbox" name="x7_5_6" id="x7_5_6" value="1"/> 5.6 ป้ายประกาศ/ใบปลิว/แผ่นพับ
                <label class="checkbox-inline" for="x7_5_6"></label>
                <input type="checkbox" name="x7_5_7" id="x7_5_7" value="1"  onchange="document.getElementById('x7_5_7_open').disabled=!this.checked;"/> 5.7  อื่นๆ ระบุ
                <label class="checkbox-inline" for="x7_5_7"></label>
                <input type="text" class="form-control" id="x7_5_7_open" name="x7_5_7_open" disabled/>
              </div>
            </div>
          </div>
          <!-- 8 -->
          <div class="form-group">
            <label>8. ในระยะเวลา 1 ปี ที่ผ่านมา บุคลากรของหน่วยงานท่าน ได้รับการพัฒนาศักยภาพด้านการจัดการปัญหาจากการบริโภคเครื่องดื่มแอลกอฮอล์ หรือไม่</label>
            <div>
              <input type="radio" class="showHide" name="x8" id="x8.1" value="1"/> 1. ได้รับ พัฒนาศักยภาพด้าน
              <label class="radio-inline"></label>
              <div class="reveal-if-active">(ตอบได้มากกว่า 1 ข้อ)<br/>
                <input type="checkbox" name="x8_1" id="x8_1" value="1"/> 1.1 ด้านกฎหมายควบคุมเครื่องดื่มแอลกอฮอล์
                <label class="checkbox-inline" for="x8_1"></label>
                <input type="checkbox" name="x8_2" id="x8_2" value="1"/> 1.2 ด้านแกนนำเยาวชน
                <label class="checkbox-inline" for="x8_2"></label>
                <input type="checkbox" name="x8_3" id="x8_3" value="1"/> 1.3 ด้านการปฏิบัติงาน
                <label class="checkbox-inline" for="x8_3"></label>
                <input type="checkbox" name="x8_4" id="x8_4" value="1"/> 1.4 ด้านการผลิตสื่อโฆษณา
                <label class="checkbox-inline" for="x8_4"></label>
                <input type="checkbox" name="x8_5" id="x8_5" value="1"/> 1.5 พัฒนาศักยภาพเครือข่ายการดำเนินงาน
                <label class="checkbox-inline" for="x8_5"></label>
                <input type="checkbox" name="x8_6" id="x8_6" value="1" onchange="document.getElementById('x8_6_open').disabled=!this.checked;"/> 1.6 อื่นๆ ระบุ
                <label class="checkbox-inline" for="x8_6"></label>
                <input type="text" class="form-control" id="x8_6_open" name="x8_6_open" disabled/>
              </div>
            </div>
            <div>
              <input type="radio" name="x8" id="x8.2" value="2"/> 2. ไม่ได้รับ
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 9 -->
          <div class="form-group">
            <label>9. หน่วยงานของท่าน ได้มีการนำข้อมูลที่รายงานผ่านระบบสารสนเทศไปใช้ประโยชน์ติดตามผลการดำเนินงานควบคุมเครื่องดื่มแอลกอฮอล์ หรือไม่</label>
            <div>
              <input type="radio" class="showHide" name="x9" id="x9.1" value="1"/> 1. มี ใช้ประโยชน์ด้าน
              <label class="radio-inline"></label>
              <div class="reveal-if-active">(ตอบได้มากกว่า 1 ข้อ)<br/>
                <input type="checkbox" name="x9_1" id="x9_1" value="1"/> 1.1 สืบหา สืบค้น
                <label class="checkbox-inline" for="x9_1"></label>
                <input type="checkbox" name="x9_2" id="x9_2" value="1"/> 1.2 วางแผนการดำเนินงาน ครั้งต่อไป
                <label class="checkbox-inline" for="x9_2"></label>
                <input type="checkbox" name="x9_3" id="x9_3" value="1"/> 1.3 ตรวจจับ จับกุม
                <label class="checkbox-inline" for="x9_3"></label>
                <input type="checkbox" name="x9_4" id="x9_4" value="1"/> 1.4 ขึ้นเงินรางวัล
                <label class="checkbox-inline" for="x9_4"></label>
                <input type="checkbox" name="x9_5" id="x9_5" value="1" onchange="document.getElementById('x9_5_open').disabled=!this.checked;"/> 1.5 อื่นๆ ระบุ
                <label class="checkbox-inline" for="x9_5"></label>
                <input type="text" class="form-control" id="x9_5_open" name="x9_5_open" disabled/>
              </div>
            </div>
            <div>
              <input type="radio" name="x9" id="x9.2" value="2"/> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 10 -->
          <div class="form-group">
            <label>10. จังหวัดของท่านมีการมอบรางวัลต้นแบบการไม่ดื่มเครื่องดื่มแอลกอฮอล์ที่ได้รับการยกย่องเชิดชู หรือไม่</label>
            <div>
              <input type="radio" class="showHide" name="x10" id="x10.1" value="1"/> 1.  มี ในด้าน
              <label class="radio-inline"></label>
              <div class="reveal-if-active">
                <div class="row">
                  <div class="col-xs-3">
                    <input type="checkbox" name="x10_1" id="x10_1" value="1" onchange="document.getElementById('x10_1_open').disabled=!this.checked;"/> 1.1 บุคคลต้นแบบ
                    <label class="checkbox-inline" for="x10_1"></label>
                    <input type="text" class="form-control" id="x10_1_open" name="x10_1_open" placeholder="จำนวน (คน)" disabled/>
                  </div>
                  <div class="col-xs-3">
                    <input type="checkbox" name="x10_2" id="x10_2" value="1" onchange="document.getElementById('x10_2_open').disabled=!this.checked;"/> 1.2 ครอบครัวต้นแบบ
                    <label class="checkbox-inline" for="x10_2"></label>
                    <input type="text" class="form-control" id="x10_2_open" name="x10_2_open" placeholder="จำนวน (ครอบครัว)" disabled/>
                  </div>
                  <div class="col-xs-3">
                    <input type="checkbox" name="x10_3" id="x10_3" value="1" onchange="document.getElementById('x10_3_open').disabled=!this.checked;"/> 1.3 ชุมชนต้นแบบ
                    <label class="checkbox-inline" for="x10_3"></label>
                    <input type="text" class="form-control" id="x10_3_open" name="x10_3_open" placeholder="จำนวน (ชุมชน)" disabled/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="checkbox" name="x10_4" id="x10_4" value="1" onchange="document.getElementById('x10_4_open').disabled=!this.checked;"/> 1.4 สถาบันการศึกษาต้นแบบ
                    <label class="checkbox-inline" for="x10_4"></label>
                    <input type="text" class="form-control" id="x10_4_open" name="x10_4_open" placeholder="จำนวน (สถาบัน)" disabled/>
                  </div>
                  <div class="col-xs-3">
                    <input type="checkbox" name="x10_5" id="x10_5" value="1" onchange="document.getElementById('x10_5_open').disabled=!this.checked;"/> 1.5 อื่นๆ ระบุ
                    <label class="checkbox-inline" for="x10_5"></label>
                    <input type="text" class="form-control" id="x10_5_open" name="x10_5_open" disabled/>
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
              <input type="radio" name="x10" id="x10.2" value="2"/> 2. ไม่มี
              <label class="radio-inline"></label>
            </div>
          </div>
          <!-- 11 -->
          <div class="form-group">
            <label>11. ปัญหา/อุปสรรค</label>
            <div>
              <textarea class="form-control" rows="2" id="x11_open" name="x11_open" style="width: 40%;"></textarea>
            </div>
          </div>
          <!-- 12 -->
          <div class="form-group">
            <label>12. ข้อเสนอแนะ</label>
            <div>
              <textarea class="form-control" rows="2" id="x12_open" name="x12_open" style="width: 40%;"></textarea>
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