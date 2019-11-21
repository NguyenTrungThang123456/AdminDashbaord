<?php
class User_Model extends Base_Model
{
	protected $table = 'users';

	// lấy user theo email
	function get_by_email($email)
	{
		$query = "select * from `{$this->table}` where email = " . ':email' . "";
		$sth = $this->db->prepare($query);
		$sth->execute([
			':email' => $email
		]);
		$data = $sth->fetch(PDO::FETCH_ASSOC);
		$sth->closeCursor();
		return $data;
	}
	function get_by_phone($phone)
	{
		$query = "select * from `{$this->table}` where phone_number = " . ':phone_number' . "";
		$sth = $this->db->prepare($query);
		$sth->execute([
			':phone_number' => $phone
		]);
		$data = $sth->fetch(PDO::FETCH_ASSOC);
		$sth->closeCursor();
		return $data;
	}
	
}
