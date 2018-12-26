<?php
include('database.php');

/**
 *
 */
class M_web extends database{
	//1
	function getHot()
	{
		$sql="SELECT * FROM game where hot =0 LIMIT 6";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getHot1()
	{
		$sql="SELECT * FROM game where hot =1 LIMIT 5";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}


	//2
	function getMenu()
	{
		$sql="SELECT * FROM theloaigame tlg INNER JOIN game g ON g.id_theloai=tlg.id_theloai GROUP BY tlg.id_theloai limit 8";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	//3
	/* function getTheloai($id_loai)
	{
		$sql="SELECT * FROM game WHERE id_theloai=$id_loai limit 16";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai));
	}*/


function getTheloai($id_loai,$vitri=-1,$limit=-1)
	{
		$sql="SELECT * FROM game WHERE id_theloai=$id_loai ";
		if ($vitri>-1 && $limit>1) {
			$sql .=" limit $vitri,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai,$vitri=-1,$limit=-1));
	}


	//3
	function getTheloaiList()
	{
		$sql="SELECT * FROM theloaigame where 1=1 limit 10";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getList($id_loai)
	{
		$sql="SELECT tentheloai FROM theloaigame where id_theloai=$id_loai ";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai));
	}

	//4
	function getInra(){
		$sql="SELECT id_game FROM game g ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	//4
	function getDanhSachGame($id_theloai){
		$sql="SELECT * FROM  game g where g.id_theloai=$id_theloai limit 8";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

//5
	function getNhieunhat()
	{
		$sql="SELECT * FROM game ORDER BY luotchoi DESC LIMIT 6";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

//6
	function getYeuthich()
	{
		$sql="SELECT * FROM game ORDER BY luotyeuthich DESC LIMIT 6";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

		function getActive()
	{
		$sql="SELECT * FROM user";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getChitiet($id_games){
		$sql="SELECT * FROM game WHERE id_game=$id_games";
		$this->setQuery($sql);
		return $this->loadRow(array($id_games));
	}

	function getRalatedNews($theloai){
		$sql="SELECT * from game  where id_theloai=$theloai ORDER BY luotyeuthich DESC limit 12";
		$this->setQuery($sql);
		return $this->loadAllRows(array($theloai));

	}

	function search($key){
		$sql="SELECT * FROM game WHERE tengame like '%$key%'";
		$this->setQuery($sql);
		return $this->loadAllRows(array($key));
	}
function dangnhap($username,$password){
	$sql= "SELECT * from user WHERE username='$username' and password='$password'";
	$this->setQuery($sql);
	return $this->loadAllRows(array($username,$password));
}
function addComment($id,$id_game,$noidung){
	$sql=" INSERT INTO comment(id,id_game,noidung) VALUES (?,?,?)";
	$this->setQuery($sql);
	return $this->execute(array($id,$id_game,$noidung));
}
}
?>