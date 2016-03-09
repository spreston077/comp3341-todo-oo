<?php
	class todoLists
	{
		protected $db = null;

		public function __construct($db){
			$this->db = $db;
		}

		public function getListItems($listid){
			$query = "SELECT * FROM list_items WHERE list_id = :listid";
			$pdo = $this->db->prepare($query);
			$pdo->bindParam(':listid', $listid);
			$pdo->execute();
			return $pdo->fetchAll();
		}

		public function addItemToList($listid, $itemName){
			$query = "INSERT INTO list_items (item_name, list_id) VALUES (:itemname, :listid)";
		    $pdo = $this->db->prepare($query);
		    $pdo->bindParam(':itemname', $itemName);
		    $pdo->bindParam(':listid', $listid);
		    $pdo->execute();

		    return $this->db->lastInsertId();
		}

		public function removeItemFromList($itemid){
			$query = "DELETE FROM list_items WHERE item_id = :itemid";
		    $pdo = $this->db->prepare($query);
		    $pdo->bindParam(':itemid', $itemid);
		    return $pdo->execute();
		}
	}
?>