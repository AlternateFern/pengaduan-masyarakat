<?php
class crud extends database
{
	
	
	public function showData()
	{
		$sql ="SELECT * FROM masyarakat";
		$stmt=$this->koneksi->prepare($sql);
		$stmt->execute();
		return $stmt;
	}
	public function insertData($nik, $nama)
	{
		try
		{
			$sql="INSERT INTO masyarakat(nik, nama) VALUES (:nik, :nama)";
			$stmt=$this->koneksi->prepare($sql);
				$stmt->bindParam(":nik",$nik);
				$stmt->bindParam(":nama", $nama);
				$stmt->execute();
				return true;
		}
		catch(PDOException $e)
		{
				echo $e->getMessage();
				return false;
				
			
		}
	}
	public function detailData($data)
	{
		# GET DATA
		try
		{
			$sql ="SELECT id, nik, nama FROM masyarakat WHERE id=:id";
			$stmt=$this->koneksi->prepare($sql);
			$stmt->bindParam(":id",$data);
			$stmt->execute();
			$stmt->bindColumn(1, $this->id);
			$stmt->bindColumn(2, $this->nik);
			$stmt->bindColumn(3, $this->nama);
			$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount()==1):
				return true;
			else:
				return false;
			endif;

			
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			
		}
	}
	public function detailData_duatest($data)
	{
		# Sample GET DATA by ID
		try
		{
			$sql ="SELECT id, nik, nama FROM masyarakat WHERE id=:id";
			$stmt=$this->koneksi->prepare($sql);
			$stmt->execute(array(":id"=>$data));
			$this->row=$stmt->fetch(PDO::FETCH_ASSOC);
			return $this->row;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public function updateData($nik, $name, $data)
	{
		try
		{
			$sql="UPDATE masyarakat SET nik=:nik, nama=:nama WHERE id=:id";
			$stmt=$this->koneksi->prepare($sql);
			$stmt->bindParam(":nik",$nik);
			$stmt->bindParam(":nama",$nama);
			$stmt->bindParam(":id",$data);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}
	public function delete ($data)
	{
		try{
			$sql="DELETE FROM masyarakat WHERE id=:id";
			$stmt=$this->koneksi->prepare($sql);
			$stmt->execute(array("id"=>$data));
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}
}
?>