<?php
/**
 * Created by PhpStorm.
 * User: troyanym
 * Date: 12.04.2017
 * Time: 19:47
 */

class Land_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getBlocks($type="content") {
        $this->db->select('b.*');
        $this->db->from('land_blocks b');
        $this->db->join('land_block_type', 'b.id_block_type = land_block_type.id');
        $this->db->where('land_block_type.name', $type);
        $query = $this->db->get();

        return $query->result();
    }

    public function getBlockById($block_id) {
        $this->db->select('*');
        $this->db->from('land_blocks');
        $this->db->where('id', $block_id);
        $query = $this->db->get();

        return $query->row();
    }
}