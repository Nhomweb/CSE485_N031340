<?php 

class pagination{
  public $_nItemOnPage; // số lượng item trong 1 page
  private $_totalItem;// tổng số item
  private $_nPageShow ; // số lượng link page hiển thị
  private $_totalPage; // tổng số page
  private $_currentPage; // page hiện tại

  public function __construct($totalItem,$currentPage = 1,$nItemOnPage = 16,$nPageShow = 3){
    $this->_totalItem   = $totalItem;
    $this->_nItemOnPage = $nItemOnPage;
    if ($nPageShow%2==0) {
      $nPageShow    = $nPageShow + 1;
    }
    $this->_nPageShow   = $nPageShow;
    $this->_currentPage = $currentPage;
    $this->_totalPage   = ceil($totalItem/$nItemOnPage);
  }
  public function get_nItemOnPage(){
    return $this->_nItemOnPage;
  }
  public function getCurrentPage(){
    return $this->_currentPage;
  }
  public function showPagination(){       
    $paginationHTML   = '';
    if($this->_totalPage > 1){
      $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if(isset($_GET['page'])){
        if((int)($_GET['page'])>=10){
          $actual_link = substr($actual_link,0,-8);
        }
        else{
          $actual_link = substr($actual_link,0,-7);
        }
      }

      // $actual_link = explode('?page=',$actual_link)[0];
      $start  = '';
      $prev   = '';
      if($this->_currentPage > 1){
        $start  = "<li><a href='$actual_link&page=1' data-Page='1'>Start</a></li>";
        $prev   = "<li><a href='$actual_link&page=".($this->_currentPage-1)."' data-Page=".($this->_currentPage-1).">«</a></li>";
      }
      $next   = '';
      $end  = '';
      if($this->_currentPage < $this->_totalPage){
        $next   = "<li><a href='$actual_link&page=".($this->_currentPage+1)."' data-Page=".($this->_currentPage-1).">»</a></li>";
        $end  = "<li><a href='$actual_link&page=".$this->_totalPage."'"."data-Page=$this->_totalPage".">End</a></li>";
      }

      if($this->_nPageShow < $this->_totalPage){
        if($this->_currentPage == 1){
          $startPage  = 1;
          $endPage  = $this->_nPageShow;
        }else if($this->_currentPage == $this->_totalPage){
          $startPage    = $this->_totalPage - $this->_nPageShow + 1;
          //  cái số trang bắt đầu để hiển thị
          $endPage    = $this->_totalPage;
        }else{
          $startPage    = $this->_currentPage - ($this->_nPageShow-1)/2;
          $endPage    = $this->_currentPage + ($this->_nPageShow-1)/2;
          if($startPage < 1){
            $endPage  = $endPage + 1;
            $startPage  = 1;
          }
          if($endPage > $this->_totalPage){
            $endPage  = $this->_totalPage;
            $startPage  = $endPage - $this->_nPageShow + 1;
          }
        }

      }else{
        $startPage    = 1;
        $endPage    = $this->_totalPage;
      }
      /**************/
      $listPages = '';
      for($i = $startPage; $i <= $endPage; $i++){
        if($i == $this->_currentPage) {
          $listPages .= "<li class='active'><a href='#' data-Page=".$i.">".$i.'</a>';
        }else{
          $listPages .= "<li><a href='$actual_link&page=".$i."' data-Page=".$i.">".$i.'</a>';
        }
      }
      $paginationHTML = '<ul class="pagination">'.$start.$prev.$listPages.$next.$end.'</ul>';
    }
    return $paginationHTML;
  }
}

 ?>