<?php
/**
 * 执行 insert into ... on duplicate update 操作
 *
 * @param  string     $table       表名
 * @param  array      $data        要操作的数据
 * @param  array|null $data_update 重复时要更新的数据，取值 null 时则同 $data
 * @return bool
 */
class test
{
    public function insert_duplicate_update($table, $data, $data_update = null)
    {
        if (!$data) {
            return false;
        }

        $set = $this->implode($data);
        if ($data_update === null) {
            $update_str = $set;
        } else {
            $update_str = $this->implode($data_update);
        }

        $sql = "INSERT INTO {$table} SET {$set} ON DUPLICATE KEY UPDATE {$update_str}";

        return $this->query($sql);
    }

    public function implode($array, $glue = ',')
    {
        $sql = $comma = '';
        $glue = ' ' . trim($glue) . ' ';
        foreach ($array as $k => $v) {
            $sql .= $comma . $k . "='" . $v . "'";
            $comma = $glue;
        }
        return $sql;
    }

    public function implode1($array)
    {
        foreach ($array as $k => $v) {
            $array[$k]="{$k}='{$v}'";
        }
        return implode(',',$array);;
    }
}

$a=['line_id'=>3,'content'=>'bbbb'];
$b=new test();
echo $b->implode1($a);