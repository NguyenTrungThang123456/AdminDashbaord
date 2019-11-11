<?php
	class User_Model extends Base_Model {
		protected $table = 'user';

		// lấy user theo username
		function get_by_username($username) {
			$query = "select * from `{$this->table}` where username = :username";
	        $sth = $this->db->prepare($query);
	        $sth->execute([
	        	':username' => $username
	        ]);
	        $data = $sth->fetch(PDO::FETCH_ASSOC);
	        $sth->closeCursor();
	        return $data;
		}

	}