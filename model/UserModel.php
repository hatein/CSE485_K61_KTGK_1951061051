<?php
    require_once 'config/db.php';
    class UserModel{
        private $madg;
        private $hovaten;
        private $gioitinh;
        private $namsinh;
        private $nghenghiep;
        private $ngaycapthe;
        private $ngayhethan;
        private $diachi;
        public function getAllUsers(){
            $conn = $this->connectDB();
            $sql = "SELECT * FROM docgia";
            $result = mysqli_query($conn,$sql);
            $arr_users = [];
            if(mysqli_num_rows($result) > 0){
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            }
            return $arr_users;
        }
        public function connectDB() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDB($connection = null) {
            mysqli_close($connection);
        }

    }
    ?>