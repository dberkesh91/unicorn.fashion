<?php
Class Products_model extends CI_Model 
{
    private $_table = 'products';
    
    public function search($params = array())
    {
        $filters = isset($params['filters']) ? $params['filters'] : array();
        $priceCriteria = isset($filters['minPrice']) && isset($filters['maxPrice']) ? " AND price BETWEEN " . $filters['minPrice'] . " AND " . $filters['maxPrice']: "";
       
        /**
         * TODO: Fix this to send parameterized query.
         */
        $sql = "SELECT * FROM `" . $this->_table . "` WHERE published = 1" . $priceCriteria;
        $query = $this->db->query($sql);
        $rows = $query->result_array();

        return $rows;

    }

    /**
     * @param int $productId
     * @return array $return
     */
    public function getOneById($productId) : array
    {
        $return = array();
        $sql = "SELECT * FROM `" . $this->_table . "` WHERE id = ? AND published = 1";
        $query = $this->db->query($sql, array($productId));
        $rows = $query->result_array();
        
        $return = $rows[0];
       
        return $return;
    }
}