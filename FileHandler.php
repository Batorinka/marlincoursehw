<?php


class FileHandler {

  public function uploadFile($files, $dir, $table, $tableColumn) {

    $db = include 'database/start.php';
    foreach ($files as $file) {
      if ($file['name'] !== '') {
        $name = mt_rand(0, 100000) . $file['name'];

        copy($file['tmp_name'], $dir .'/' . $name);

        $db->create($table, [
          $tableColumn => $name
        ]);
      }
    }
  }

  public function deleteFile($id, $dir, $table, $tableColumn)
  {
    $db = include 'database/start.php';

    $name = $db->getOne($table, $id);
    $db->delete($table, $id);

    unlink($dir . '/' . $name[$tableColumn]);
  }

}
