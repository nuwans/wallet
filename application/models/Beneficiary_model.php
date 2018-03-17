<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Beneficiary_model extends CI_Model {

    /**
     * @vars
     */
    private $_db;

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();

        // define primary table
        $this->_db = 'beneficiaries';
    }
	
	function get_all($limit = 0, $offset = 0, $filters = array(), $sort = 'last_name', $dir = 'ASC')
    {
        $sql = "
            SELECT SQL_CALC_FOUND_ROWS *
            FROM {$this->_db}
						WHERE id > '0'
        ";

        if ( ! empty($filters))
        {
            foreach ($filters as $key=>$value)
            {
                $value = $this->db->escape('%' . $value . '%');
                $sql .= " AND {$key} LIKE {$value}";
            }
        }

        $sql .= " ORDER BY {$sort} {$dir}";

        if ($limit)
        {
            $sql .= " LIMIT {$offset}, {$limit}";
        }

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0)
        {
            $results['results'] = $query->result_array();
        }
        else
        {
            $results['results'] = NULL;
        }

        $sql = "SELECT FOUND_ROWS() AS total";
        $query = $this->db->query($sql);
        $results['total'] = $query->row()->total;

        return $results;
    }
	
	function get_active($limit = 0, $offset = 0, $filters = array(), $sort = 'dir', $dir = 'ASC')
    {
        $sql = "
            SELECT SQL_CALC_FOUND_ROWS *
            FROM {$this->_db}
						WHERE status = '1'
        ";

        if ( ! empty($filters))
        {
            foreach ($filters as $key=>$value)
            {
                $value = $this->db->escape('%' . $value . '%');
                $sql .= " AND {$key} LIKE {$value}";
            }
        }

        $sql .= " ORDER BY {$sort} {$dir}";

        if ($limit)
        {
            $sql .= " LIMIT {$offset}, {$limit}";
        }

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0)
        {
            $results['results'] = $query->result_array();
        }
        else
        {
            $results['results'] = NULL;
        }

        $sql = "SELECT FOUND_ROWS() AS total";
        $query = $this->db->query($sql);
        $results['total'] = $query->row()->total;

        return $results;
    }
	
	function get_moderation($limit = 0, $offset = 0, $filters = array(), $sort = 'dir', $dir = 'ASC')
    {
        $sql = "
            SELECT SQL_CALC_FOUND_ROWS *
            FROM {$this->_db}
						WHERE status = '2'
        ";

        if ( ! empty($filters))
        {
            foreach ($filters as $key=>$value)
            {
                $value = $this->db->escape('%' . $value . '%');
                $sql .= " AND {$key} LIKE {$value}";
            }
        }

        $sql .= " ORDER BY {$sort} {$dir}";

        if ($limit)
        {
            $sql .= " LIMIT {$offset}, {$limit}";
        }

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0)
        {
            $results['results'] = $query->result_array();
        }
        else
        {
            $results['results'] = NULL;
        }

        $sql = "SELECT FOUND_ROWS() AS total";
        $query = $this->db->query($sql);
        $results['total'] = $query->row()->total;

        return $results;
    }
	
	function get_disapproved($limit = 0, $offset = 0, $filters = array(), $sort = 'dir', $dir = 'ASC')
    {
        $sql = "
            SELECT SQL_CALC_FOUND_ROWS *
            FROM {$this->_db}
						WHERE status = '3'
        ";

        if ( ! empty($filters))
        {
            foreach ($filters as $key=>$value)
            {
                $value = $this->db->escape('%' . $value . '%');
                $sql .= " AND {$key} LIKE {$value}";
            }
        }

        $sql .= " ORDER BY {$sort} {$dir}";

        if ($limit)
        {
            $sql .= " LIMIT {$offset}, {$limit}";
        }

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0)
        {
            $results['results'] = $query->result_array();
        }
        else
        {
            $results['results'] = NULL;
        }

        $sql = "SELECT FOUND_ROWS() AS total";
        $query = $this->db->query($sql);
        $results['total'] = $query->row()->total;

        return $results;
    }
	
	function get_list_beneficiaries($limit = 0, $offset = 0, $filters = array(), $sort = 'dir', $dir = 'ASC', $user = NULL)
    {
        $sql = "
            SELECT SQL_CALC_FOUND_ROWS *
            FROM {$this->_db}
						WHERE user = '{$user}'
        ";

        if ( ! empty($filters))
        {
            foreach ($filters as $key=>$value)
            {
                $value = $this->db->escape('%' . $value . '%');
                $sql .= " AND {$key} LIKE {$value}";
            }
        }

        $sql .= " ORDER BY {$sort} {$dir}";

        if ($limit)
        {
            $sql .= " LIMIT {$offset}, {$limit}";
        }

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0)
        {
            $results['results'] = $query->result_array();
        }
        else
        {
            $results['results'] = NULL;
        }

        $sql = "SELECT FOUND_ROWS() AS total";
        $query = $this->db->query($sql);
        $results['total'] = $query->row()->total;

        return $results;
    }
	
	function get_detail_beneficiaries($id = NULL, $username = NULL)
    {
        if ($id)
        {
            $sql = "
                SELECT *
                FROM {$this->_db}
								WHERE id = " . $this->db->escape($id) . " AND user = " . $this->db->escape($username) . "
            ";

            $query = $this->db->query($sql);

            if ($query->num_rows())
            {
                return $query->row_array();
            }
        }

        return FALSE;
    }	
    
    /* get beeficiary  details   */
	function get_user_beneficiary($id = NULL)
    {
        if ($id)
        {
            $sql = "
                SELECT *
                FROM {$this->_db}
                WHERE id = " . $this->db->escape($id) . "
            ";

            $query = $this->db->query($sql);

            if ($query->num_rows())
            {
                return $query->row_array();
            }
        }

        return FALSE;
    }
    /* update beneficiaries  wallet */
    function update_wallet_transfer($username, $data) {
		$this->db->where("id", $username)->update("beneficiaries", $data);
	}
	
	function get_user_merchant_user($user = NULL)
    {
        if ($user)
        {
            $sql = "
                SELECT *
                FROM {$this->_db}
                WHERE user = " . $this->db->escape($user) . "
            ";

            $query = $this->db->query($sql);

            if ($query->num_rows())
            {
                return $query->row_array();
            }
        }

        return FALSE;
    }
	
	function add_benificiary($data) 
		{
			$this->db->insert("beneficiaries", $data);
			return $this->db->insert_id();
		}
    
        /* Get all  benificiaries  added  by user */
	function get_my_beneficiaries($id = NULL)
    {
        if ($id)
        {
            $sql = "
                SELECT *
                FROM {$this->_db}
                WHERE user = " . $this->db->escape($id) . "
            ";

            $query = $this->db->query($sql);

            if ($query->num_rows()>0)
            {    
                return $query->result_array();
            }
        }

        return FALSE;
    }
	
	/**
     * Edit beneficiary
     *
     * @param  array $data
     * @return boolean
     */
    function edit_benificiary($data = array())
    {
        if ($data)
        {
            $sql = "
                UPDATE {$this->_db}
                SET
										first_name = " . $this->db->escape($data['first_name']) . ",
										last_name = " . $this->db->escape($data['last_name']) . ",
										email = " . $this->db->escape($data['email']) . ",
										address1 = " . $this->db->escape($data['address1']) . ",
										address2 = " . $this->db->escape($data['address2']) . ",
										city = " . $this->db->escape($data['city']) . ",
										state = " . $this->db->escape($data['state']) . ",
										phone = " . $this->db->escape($data['phone']) . ",
										account_number = " . $this->db->escape($data['account_number']) . ",
										bank_code = " . $this->db->escape($data['bank_code']) . "
                WHERE id = " . $this->db->escape($data['id']) . "
            ";

            $this->db->query($sql);

            if ($this->db->affected_rows())
            {
                return TRUE;
            }
        }

        return FALSE;
    }

    /**
     * Delete beneficiary
     *
     * @param  array $data
     * @return boolean
     */
    function delete_benificiary($data = array())
    {
        if ($data)
        {
            $sql = "
                DELETE FROM {$this->_db}
				WHERE id = " . $this->db->escape($data['id']) ." 
                AND   user=". $this->db->escape($data['username']) ."
            ";
            $query =$this->db->query($sql);

            if ($query)
            {
                return TRUE;
            } else{
                return FALSE;
            }
        }

        return FALSE;
    }

     /**
     * Check to see if a benificiary  exists
     *
     * @param  string $username
     * @return boolean
     */
    function benificiary_exists($username,$added_by)
    {
        $sql = "
            SELECT id
            FROM {$this->_db}
            WHERE id = " . $this->db->escape($username) . "
            AND user=". $this->db->escape($added_by) ."
            LIMIT 1
        ";

        $query = $this->db->query($sql);

        if ($query->num_rows())
        {
            return TRUE;
        }

        return FALSE;
    }


     /**
     * Edit an existing beneficiary by admin
     *
     * @param  array $data
     * @return boolean
     */
    function edit_user($data = array())
    {
        if ($data)
        {
            $sql = "
                UPDATE {$this->_db}
                SET
                    user = " . $this->db->escape($data['user']) . ",
            ";

            $sql .= "
                    first_name = " . $this->db->escape($data['first_name']) . ",
                    last_name = " . $this->db->escape($data['last_name']) . ",
                    email = " . $this->db->escape($data['email']) . ",
					phone = " . $this->db->escape($data['phone']) . ",
					address1 = " . $this->db->escape($data['address1']) . ",
					address2 = " . $this->db->escape($data['address2']) . ",
					city = " . $this->db->escape($data['city']) . ",
					state = " . $this->db->escape($data['state']) . ",
					account_number = " . $this->db->escape($data['account_number']) . ",
					bank_code = " . $this->db->escape($data['bank_code']) . ",
                    debit_base = " . $this->db->escape($data['debit_base']) . ",
                    debit_extra1 = " . $this->db->escape($data['debit_extra1']) . ",
                    debit_extra2 = " . $this->db->escape($data['debit_extra2']) . ",
                    debit_extra3 = " . $this->db->escape($data['debit_extra3']) . ",
                    debit_extra4 = " . $this->db->escape($data['debit_extra4']) . ",
                    debit_extra5 = " . $this->db->escape($data['debit_extra5']) . "
                WHERE id = " . $this->db->escape($data['id']) . "
            ";

            $this->db->query($sql);

            if ($this->db->affected_rows())
            {
                return TRUE;
            }
        }

        return FALSE;
    }



    
    /* get  all transactions */

    function get_log_transactions_in($username) 
	{
		return $this->db->where("receiver", $username)->order_by('id', 'DESC')->limit(10)->get("transactions");
	}
	
	/**
     * Update status
     *
     * @param  array $data
     * @return boolean
     */
	function update_merchant($id, $data) {
		$this->db->where("ID", $id)->update("merchants", $data);
	}
	
}