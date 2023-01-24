<?php
include('../nav/index.php');
$resultcheckin=$object->Readcheckin();
foreach($resultcheckin as $row)
?>
<div class="row" style="padding: 12px 12px 12px 12px;text-align: center;">
    <div class="col-md-12">
    <h4><b>ค้นหา ไม่ลงเวลาเข้างาน</b></h4>
    </div>
</div>

<div class="row">
    <div class="col-md-4" style="text-align: center;"></div>
    <div class="col-md-4">
    <div class="form-group">
    <div class="input-group mb-3">
    <span class="input-group-text">วันที่เริ่มต้น&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <input type="text" size="30" name="dates" id="dates" class="form-control" autocomplete="off" class="form-control" placeholder="คลิก" required>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-4" style="text-align: center;"></div>
</div>

<div class="row">
	<div class="col-md-12" style="text-align:center;padding: 12px 0px 0px 0px;">  
	<button type="submit" name="submit" id="submit" class="btn btn-outline-info"><img src="../../../images/search.png" width="24"> ค้นหา</button>
	</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="records_content"></div>
</div>
</div>

        <script type="text/javascript">
        $(document).ready(function()
        {
        $('#submit').click(function(){
        myAjax();
        });
        }
        );

        function myAjax()
        {
        var dates= $('#dates').val();
        var datef= $('#datef').val();
        var checkinid= $('#checkinid').val();
        $.post('check.php', {dates:dates,datef:datef},
        function(data)
        {
        $('.records_content').html(data);
        }
        );
        }

        $( function() {
        $( "#dates" ).datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        yearRange: "2022:2100",
        maxDate:0,
        /*minDate:1,*/
        monthNamesShort: [ "มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม" ]
        });
        });

        $( function() {
        $( "#datef" ).datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        yearRange: "2022:2100",
        maxDate:0,
        /*minDate:1,*/
        monthNamesShort: [ "มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม" ]
        });
        });
        </script>

<?php
include('../f.html');
?>