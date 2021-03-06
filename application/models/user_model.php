<?php

class User_model extends CI_Model {
    private $table = 'user';
    
    function create($clientRecord){
        $this->db->insert($this->table, $clientRecord);
    }
    
    function read($condition=null){
        $this->db->select('*');
        $this->db->from($this->table);
        
        if(isset($condition))
            $this->db->where($condition);
        
        $query = $this->db->get();
        
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
        
    }
    
    function update($newRecord, $user_id){
        $this->db->where('user_id', $user_id);
        $this->db->update($this->table,$newRecord);
    }
    
    function del($where_array){
        $this->db->delete($this->table,$where_array);
    }
    
    function getLastRecordID(){
        $this->db->select_max('user_id');
        $query = $this->db->get($this->table,1);
        
        return $query->row_array();
    }
}
?>