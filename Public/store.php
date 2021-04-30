<?php

$_SESSION['username']="";
    class myStore
    {
        private $server = "mysql:host=remotemysql.com;dbname=nTXgp5BXe0";
        private $user = "nTXgp5BXe0";
        private $password = "RQwfabtfeC";
        public $loggedin=2;
        private $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );

        protected $connection;

        //connections
        public function openConnection()
        {
            try {
               
                $this->connection= new PDO(
                    $this->server,
                    $this->user,
                    $this->password,
                    $this->options
                );
               
                return $this->connection;
            } catch (PDOException $error) {
                echo "Erro connection:" . $error->getMessage();
            }
        }
        public function closeConnection()
        {
            $this->$connection= null;
        }

        public function getUsers()
        {
            $connection = $this->openConnection();
            $statement = $connection->prepare("SELECT * FROM users");
            $statement->execute();
            $users = $statement->fetchAll();
            $usersCount = $statement->rowCount();

            if ($usersCount > 0) {
                return $users;
            } else {
                return 0;
            }
        }//end of get users
       
       
       
        public function login(){
        
           if(isset($_POST['submit'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $connection =$this->openConnection();
                $statement=$connection->prepare("SELECT * FROM users WHERE email=? AND password=?");
                $statement->execute([$username,$password]);
                $user= $statement->fetch();
                $total= $statement->rowCount();
                $_SESSION['username']=$user['username'];

                if($total>0){
                //    header('home.php');
                //    unset($_SESSION['errorMsg']);
                echo  $_SESSION['username'];
                
                }else{
                    $_SESSION['errorMsg']="* username or password is invalid";
                }
           }
          
        }//end of log in
        public function signup(){
            if(isset($_POST['signup'])){
                 $username=$_POST['fullname'];
                 $password=$_POST['password'];
                 $email=$_POST['email'];
                 $connection =$this->openConnection();
                 $statement=$connection->prepare("INSERT INTO  users(username,email,password) VALUES (?,?,?)");
                 $statement->execute([$username,$email,$password]);
            }
         }

         public function addtoCart(){
            if(isset($_POST['addCart'])){
                 $image=$_POST['image'];
                 $productname=$_POST['productname'];
                 $price=$_POST['price'];
                 $quantity=0;
                 $username=$_SESSION['username'];
                 $connection =$this->openConnection();
                 $statement=$connection->prepare("INSERT INTO  cart(productname,username,quantity,price,image) VALUES (?,?,?,?,?)");
                 $statement->execute([$productname,$username,$quantity,$price,$image]);
            }
         }

         public function logout(){
            if(isset($_POST['logout'])){
                
                session_destroy();
                header('login.php');
            }
         }
         
    }
    $mystore = new myStore();
    
    
?> 