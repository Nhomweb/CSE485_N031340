<?php
include('model/m_web.php');
include('model/pager.php');
class C_web{
	public function index(){
		$m_web= new M_web();
		$hot=$m_web->getHot();
		$menu=$m_web->getMenu();
		$nhieunhat=$m_web->getNhieunhat();
		$yeuthich=$m_web->getYeuthich();
		$inra=$m_web->getInra();
		$theloaiList=$m_web->getTheloaiList();
		return array('hot'=>$hot,'menu'=>$menu,'nhieunhat'=>$nhieunhat,'yeuthich'=>$yeuthich,'inra'=>$inra, 'theloaiList'=>$theloaiList);
	}
	public function loaitin(){

		if (isset($_GET['id_loai'])) {
            $id_loai = $_GET['id_loai'];	
		$m_web= new M_web();
		$danhmuctin=$m_web->getTheloai($id_loai);
		$trang_hientai=isset($_GET['page']) ? $_GET['page'] : 1;
		$limit=16;
		$total_records=count($danhmuctin);
		$total_page = ceil($total_records / $limit);
		 if ($trang_hientai > $total_page){
            $trang_hientai = $total_page;
        }
        else if ($trang_hientai < 1){
            $trang_hientai = 1;
        }
         $vitri=($trang_hientai-1)*$limit;
         $conn = mysqli_connect('localhost', 'root', '', 'mywebsite');

         $result = mysqli_query($conn, "SELECT * FROM game LIMIT $vitri, $limit");
        
		$danhmuctin=$m_web->getTheloai($id_loai,$vitri,$limit);
		$menu=$m_web->getMenu();
		$list=$m_web->getList($id_loai);
		return array('danhmuctin'=>$danhmuctin,'menu'=>$menu,'list'=>$list);
	}
}

	public function active(){
		$m_active= new M_web();
		$active=$m_active->getActive();
		return array('active'=>$active);
	}


	public function chitiet(){
		$m_web= new M_web();
		if (isset($_GET['id_games'])) {
            $id_games = $_GET['id_games'];
		$chitiet=$m_web->getChitiet($id_games);
		return array('chitiet'=>$chitiet);
}
	}
}
?>