<?php
include('controller/c_web.php');
$c_web= new C_web();
$active=$c_web->active();
$active=$active['active'];
?>

<?php
require('dangky/includes/config.php');

//collect values from the url
$id = trim($_GET['x']);
$active = trim($_GET['y']);

//if id is number and the active token is not empty carry on
if(is_numeric($id) && !empty($active)){

    //update users record set the active column to Yes where the memberID and active value match the ones provided in the array
    $stmt = $db->prepare("UPDATE user SET active = 'Yes' WHERE id = :id AND active = :active");
    $stmt->execute(array(
        ':id' => $id,
        ':active' => $active
    ));

    //if the row was updated redirect the user
    if($stmt->rowCount() == 1){

        //redirect to login page
        header('Location: login.php?action=active');
        exit;

    } else {
        echo "Your account could not be activated.";
    }

}
?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kích hoạt tài khoản</title>
</head>

<body>
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tbody>
            <tr>
                <td style="border-collapse:collapse;border-left:1px solid #ff6e40;border-right:1px solid #ff6e40">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td style="padding:18px 20px 20px 20px;vertical-align:middle;line-height:20px;font-family:Arial;background-color:#ff6e40;text-align:center">
                                    <span style="color:#ffffff;font-size:115%;text-transform:uppercase">Kích hoạt đăng ký
                                        tài khoản
                                    </span> </td>
                            </tr>
                            <tr>
                                <td style="padding:20px 20px 12px 20px"> <span style="font-size:13px;color:#252525;font-family:Arial,Helvetica,sans-serif">
                                        Chào <?=$active->username?>, </span> </td>
                            </tr>
                            <tr>
                                <td style="padding:4px 20px 12px 20px"> <span style="font-size:12px;color:#252525;font-family:Arial,Helvetica,sans-serif;line-height:18px">
                                        Chúng tôi đã nhận được yêu cầu mở tài khoản cho Web Game Mini với thông tin chính như sau:</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:20px 0px 12px 0px">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"
                                                    align="right"><span>Username:</span></td>
                                                <td style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"
                                                    align="left"><strong>huyla35ca</strong></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"
                                                    align="right"><span>Email:
                                                    </span></td>
                                                <td style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"
                                                    align="left"><a href="mailto:minhhuy97.ptit@gmail.com"
                                                        target="_blank">minhhuy97.ptit@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"
                                                    align="right"><span>Fullname:
                                                    </span></td>
                                                <td style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"
                                                    align="left">Nguyễn Hà Minh Huy</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"
                                                    align="right"><span>Sex:
                                                    </span></td>
                                                <td style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"
                                                    align="left">Nam</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"
                                                    align="right"><span>Birthday:
                                                    </span></td>
                                                <td style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"
                                                    align="left">21/06/1997</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:8px 10px 8px 20px;font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;border-bottom:1px solid #dcdcdc"
                                                    align="right"><span>Address:
                                                    </span></td>
                                                <td style="padding:8px 20px 8px 10px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#2525253;border-bottom:1px solid #dcdcdc"
                                                    align="left">97 Man Thiện, phường Hiệp Phú, Quận 9, TPHCM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:4px 20px 12px 20px"> <strong style="font-size:12px;color:#252525;font-family:Arial,Helvetica,sans-serif;line-height:18px">
                                        Để tiếp tục quy trình đăng ký, xin vui lòng click vào đường link dưới đây hoặc copy vào thanh địa chỉ trình duyệt web bất
                                        kỳ và nhấn Enter:</strong> </td>
                            </tr>
                            <tr>
                                <td style="padding:10px 20px 12px 20px">
                                    <div style="background:rgb(255,248,204);border:1px solid rgb(255,140,0);padding:10px;border-radius:3px 3px 0px 0px;font-size:11px;font-family:'Courier New',Courier,monospace"
                                        align="center"> <a title="Đường dẫn kích hoạt tài khoản"
                                            href='".DIR."form_active.php?x=$id&y=$activasion'
                                            style="text-decoration:none;color:#252525" target="_blank" ><a href='".DIR."form_active.php?x=$id&y=$activasion'</a></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                            <tr>
                                <td style="padding:4px 20px 12px 20px;border-left:1px solid #ff6e40;border-right:1px solid #ff6e40"><span
                                        style="font-size:12px;color:#252525;font-family:Arial,Helvetica,sans-serif">Cảm ơn bạn
                                        đã quan tâm và sử dụng dịch vụ của chúng tôi</span> </td>
                            </tr>
                            <tr>
                                <td valign="middle" style="background-color:#6e6e6e;font-size:11px;vertical-align:middle;text-align:center;padding:10px 20px 10px 20px;line-height:18px;border:1px solid #6e6e6e;font-family:Arial;color:#cccccc">
                                    Bản quyền © 2018 Web Game mini <br>Hệ thống Game mini online toàn cầu kết hợp bảo vệ người dùng hàng đầu Việt Nam </td>
                            </tr>
                            <tr>
                                <td style="font-family:Arial;padding-top:6px;font-size:11px;color:#252525;text-align:center">
                                    Hotline: 01214755005 &nbsp;&nbsp;&nbsp; Email: <a style="text-decoration:none;color:#427fed"
                                        href="mailto:NhatNV62@wru.vn" target="_blank">NhatNV62@wru.vn</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>