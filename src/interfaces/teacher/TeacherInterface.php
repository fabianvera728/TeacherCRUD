<?php

namespace TeacherInterface;
/**
 * undocumented class
 *
 * @package default
 * @author yourname
 */
interface TeacherInterface
{

  public function getTeachers();
  
  public function getTeacher($id);

  public function deleteTeacher($id);

  public function editTeacher($teacher);

  public function addTeacher($teacher);

}

?>
