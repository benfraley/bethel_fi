var Attendance = {
    
    /*
     * put a position on the page and save it to the db
     */
    totalAttendance: function() {
        var total = 0;
        $(".attendance").each(function(){
            total += Number($(this).val());
        });
        $(".totalAttendance").val(total);
    },
    submitAttendance: function() {
        $.post('/bethelfi/index/submitAttendance', $('#attendanceForm').serialize());
    }
}

$(document).ready(function(){
    $(".totalAttendance").attr("disabled", true);
    $(".attendance").blur(function(){
        Attendance.totalAttendance();
    });
    $("#submitAttendance").click(function(){
        Attendance.totalAttendance();
        Attendance.submitAttendance();
    });
});