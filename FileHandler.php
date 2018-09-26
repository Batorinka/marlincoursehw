<?php


class FileHandler {
  
  protected $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function uploadFile($files, $dir, $table, $tableColumn) {

    foreach ($files as $file) {
      if ($file['name'] !== '') {
        $name = mt_rand(0, 100000) . $file['name'];

        copy($file['tmp_name'], $dir . '/' . $name);

        $this->db->create($table, [
          $tableColumn => $name
        ]);
      }
    }
  }

  public function deleteFile($id, $dir, $table, $tableColumn)
  {
    
    $name = $this->db->getOne($table, $id);
    $this->db->delete($table, $id);

    unlink($dir . '/' . $name[$tableColumn]);
  }

}
