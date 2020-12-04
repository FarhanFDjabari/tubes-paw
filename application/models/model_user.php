<?php

class Model_User extends CI_Model
{
    private $tablename = 'tb_user';

    // Get All
    public function getAll()
    {
        return $this->db->get($this->tablename)->result();
    }

    // Find
    public function find($id)
    {
        $result = $this->db->where('id', $id)->limit(1)->get($this->tablename);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    // Find by Condition
    public function findByCondition($condition)
    {
        $result = $this->db->where($condition);
        $result->get($this->tablename);
        return $result;
    }

    // Store new data
    public function store($newData)
    {
        $this->db->insert($this->tablename, $newData);
    }

    // Update
    public function update($id, $newData)
    {
        $this->db->where('id', $id);
        $this->db->update($this->tablename, $newData);
    }

    // Delete
    public function destroy($id)
    {
        // Delete the user
        $this->db->where('id', $id);
        $this->db->delete($this->tablename);
        // Delete the item owned by that user
        $this->db->where('user_id', $id);
        if ($this->db->affected_rows()) {
            $this->db->delete('tb_barang');
        }
    }
}
