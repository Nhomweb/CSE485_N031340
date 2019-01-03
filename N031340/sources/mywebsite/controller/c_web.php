<?php

include('model/m_web.php');
include('model/pager.php');
class C_web extends database{
	public function index(){
		$m_web= new M_web();
		$hot=$m_web->getHot();
		$hot1=$m_web->getHot1();
		$menu=$m_web->getMenu();
		$quangcao=$m_web->quangcao();
		$nhieunhat=$m_web->getNhieunhat();
		$yeuthich=$m_web->getYeuthich();
		$inra=$m_web->getInra();
		$theloaiList=$m_web->getTheloaiList();
		return array('hot'=>$hot,'hot1'=>$hot1,'menu'=>$menu,'nhieunhat'=>$nhieunhat,'yeuthich'=>$yeuthich,'inra'=>$inra, 'theloaiList'=>$theloaiList, 'quangcao'=>$quangcao);
	}
	public function loaitin(){

		if (isset($_GET['id_loai'])) {
			$id_loai = $_GET['id_loai'];	
			$m_web= new M_web();
			$danhmuctin=$m_web->getTheloai($id_loai);
			$trang_hientai=isset($_GET['page']) ? $_GET['page']:1;
			$pagination= new pagination(count($danhmuctin),$trang_hientai);
			$paginationHTML=$pagination->showPagination();
			$limit=$pagination->_nItemOnPage;
			$vitri=($trang_hientai-1)*$limit;
			$danhmuctin=$m_web->getTheloai($id_loai,$vitri,$limit);
			$menu=$m_web->getMenu();
			$list=$m_web->getList($id_loai);
			return array('danhmuctin'=>$danhmuctin,'menu'=>$menu,'list'=>$list,'thanh_phantrang'=>$paginationHTML);
		}
	}

	public function active(){
		$m_active= new M_web();
		$active=$m_active->getActive();
		return array('active'=>$active);
	}


	public function chitiet(){
		$m_web= new M_web();
		if (isset($_GET['theloai'])) {
		$theloai = $_GET['theloai'];
		if (isset($_GET['id_games'])) {
		$id_games = $_GET['id_games'];
		$chitiet=$m_web->getChitiet($id_games);
		$relatednews=$m_web->getRalatedNews($theloai);
		return array('chitiet'=>$chitiet,'relatednews'=>$relatednews);
		}
	}
	}

	public function timkiem(){
	$m_web= new M_web();
	if (isset($_GET['tukhoa'])){
   $key=$_GET['tukhoa'];
    $game=$m_web->search($key);
	return array('game'=>$game);
	}
}
	

}

?>