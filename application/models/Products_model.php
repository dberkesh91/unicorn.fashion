<?php
Class Products_model extends CI_Model 
{
    private $_table = 'products';
    
    public function search($params = array())
    {
        $filters = isset($params['filters']) ? $params['filters'] : array();
        $priceCriteria = isset($filters['minPrice']) && isset($filters['maxPrice']) ? " AND price BETWEEN " . $filters['minPrice'] . " AND " . $filters['maxPrice']: "";
       
        $sql = "SELECT * FROM `" . $this->_table . "` WHERE published = 1" . $priceCriteria;
        $query = $this->db->query($sql);
        $rows = $query->result_array();

        return $rows;

    }
}