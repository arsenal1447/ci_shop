<?php
/**
 * 订单项
 *
 *
 */
class Order_item_model extends CI_Model
{

    public $order_id;

	public $product_id;

	public $product_name;

	public $quantity;

	public $price;

	public $weight;


    
	function __construct()
    {
        parent::__construct();
    }
    
	// --------------------------------------------------------------------

    /**
	 * load by id
	 *
	 *
	 */	
    function find_order_items($order_id)
	{
		if (!$order_id){
            return array();
        }

        $query = $this->db->get_where('order_item',array('order_id' => $order_id));

        $rows = array();
        foreach ($query->result_array() as $row){
            $rows[$row['id']] = $row;
        }
        return $rows;
	}

}