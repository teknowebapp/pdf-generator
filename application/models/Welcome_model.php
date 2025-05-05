<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
    function get_course()
    {
        return $this->db->query("SELECT lessons.id, lessons.code, lessons.name lesson, lessons.periode, users.name student FROM lessons JOIN users ON lessons.student = users.id ORDER BY lessons.id DESC")->result();
    }

    function get_print_course($student, $periode)
    {
        return $this->db->query("SELECT lessons.id, lessons.code, lessons.name lesson, lessons.periode, users.name student FROM lessons JOIN users ON lessons.student = users.id WHERE lessons.student = '$student' AND lessons.periode = '$periode' ORDER BY lessons.id DESC");
    }
}
