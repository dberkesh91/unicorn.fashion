<?php

Class Categories_model extends CI_Model
{
    private $_table = 'categories';

    private function construct()
    {
        parent::_construct();
    }

    /**
     * @return array $rows
     */
    public function getAll() : array
    {
        $sql = "SELECT * FROM `" . $this->_table . "` ORDER BY priority ASC";
        $query = $this->db->query($sql);
        $rows = $query->result_array();

        return $rows;
    }
}