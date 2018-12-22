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
    if (isset($_POST['key'])) {
    $key = $_POST['key'];
    $game=$m_web->search($key);
	return array('game'=>$game);
	}
	}

    public function dangnhap(){
    	$m_web= new M_web();
    	$user=$m_web->dangnhap($username,$password);
    	if ($user == true) {
    		$_SESSION['username']=$user->name;
    		$_SESSION['id']=$user->id;
    		header('location:index.php');
            if (isset($_SESSION['user_error'])) {
            	unset($_SESSION['user_error']);
            }
            if (isset($_SESSION['chua_dang_nhap'])) {
            	unset($_SESSION['chua_dang_nhap']);

    	}
    	else{
    		$_SESSION['user_error']='Sai thong tin dang nhap';
    		header('location:login.php');
    	}
    }
    return array('user'=>$user);

}
    public function themBinhluan($id,$id_game,$noidung){
		$m_web=new M_web();
		$binhluan=$m_web->addComment($id,$id_game,$noidung);
		header('location'.$_SERVER['HTTP_REFERER']);
		return array('binhluan'=>$binhluan);
	}

}
?>