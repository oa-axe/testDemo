<?
$path=dirname(dirname(__FILE__));
require_once($path.'/db/db_sql.php');
$staff_id=1;
class techingDao extends BaseDao{
    public function _anotherSelect(){
        $res = parent::query("select a.class_name from tb_class as a LEFT JOIN tb_class_details as b on a.class_id=b.class_id LEFT JOIN tb_staff as c on b.staff_id=c.staff_id WHERE c.staff_id= 1");
        return $res;
        // b.staff_id
    }
}

$s=new techingDao;
echo json_encode($s->_anotherSelect());