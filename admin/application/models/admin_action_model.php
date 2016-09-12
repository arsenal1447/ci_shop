<?php
/**
 * 权限
 *
 *
 */
class admin_action_model extends CI_Model
{    	

	function __construct()
    {
        parent::__construct();
    }
	
    // --------------------------------------------------------------------

    /**
	 * 权限分组
	 *
	 *
	 */	
	function get_modules()
	{
        $query = $this->db->get_where('admin_action',array('parent_id' => 0));
		$rows = array();
        foreach ($query->result_array() as $row){
            $rows[$row['id']] = $row;
        }
        return $rows;
	}
    
    // --------------------------------------------------------------------

    /**
	 * 权限数据
	 *
	 *
	 */	
	function get_actions()
	{
        $query = $this->db->get_where('admin_action',array('parent_id != ' => 0));
		$rows = array();
        foreach ($query->result_array() as $row){
            $rows[$row['id']] = $row;
        }
        return $rows;
	}

}