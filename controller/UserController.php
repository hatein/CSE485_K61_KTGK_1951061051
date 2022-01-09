<?php
    require_once 'model/UserModel.php';
 class UserController{
    // Điều khiển về mặt logic giữa UserModel và User View
    function index(){
        
        // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();
// Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng 
        require_once "view/uesr/index.php";
    }

    /*function add(){
        $error = '';
        //xử lý submit form
        if (isset($_POST['submit'])) {
            $db_name = $_POST['name'];
            //xử lý validate, nếu mà để trống tên sách
//            thì báo lỗi và không cho submit form
            if (empty($hovaten)) {
                $error = "Name không được để trống";
            }
            else {
                //gọi model để insert dữ liệu vào database
                $userModel = new UserModel();
                //gọi phương thức để insert dữ liệu
                //nên tạo 1 mảng tạm để lưu thông tin của
//                đối tượng dựa theo cấu trúc bảng
            $arr_users  = [
                    'name' => $hovaten
                ];
                $isInsert = $userModel->insert($arr_users);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                }
                else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=user&action=index");
                exit();
            }
        }
        //gọi view
        require_once 'view/user/add.php';
    }

    

   function delete(){
                //url trên trình dueyjet sẽ có dạng
//        ?controller=book&action=delete&id=1
        //bắt id từ trình duyêtj
        $bd_id = $_GET['bd_id'];
        if (!is_numeric($bd_id)) {
            header("Location: index.php?controller=user&action=index");
            exit();
        }

        $userModel = new UserModel();
        $isDelete = $userModel->delete($bd_id);

        if ($isDelete) {
            //chuyển hướng về trang liệt kê danh sách
            //tạo session thông báo mesage
            $_SESSION['success'] = "Xóa bản ghi #$bd_id thành công";
        }
        else {
            //báo lỗi
            $_SESSION['error'] = "Xóa bản ghi #$bd_id thất bại";
        }


        exit();
    
    }*/
}
?>