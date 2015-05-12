<?php
namespace BethelFI\Model;

 
use Zend\Db\TableGateway\TableGateway;
use Zend\Config\Config;
use \BethelFI\Model\AttendanceTable as AttendanceTable;
 
class Attendance
{
    private $_attendanceTable;

    public function __construct()
    {
        $config = new Config(include 'config/autoload/local.php');
        $tableGateway = new TableGateway("attendance", $config->get("adapter"));
        $attendanceTable = new AttendanceTable($tableGateway);
        $this->_attendanceTable = $attendanceTable;
    }

    public function takeAttendance($array)
    {
        print_r($array);
    }
}

 ?>