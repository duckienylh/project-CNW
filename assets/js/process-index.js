$(document).ready(function(){
    $('btnlogin').click(function () { 
        $userName=$('#userName').val();
        $password=$('#password').val();
        
        if($userName=='' || $password ==''){
            alert("Vui lòng nhập đầy đủ TK và MK");
        }else{
            $.ajax({
                url: "process-index.php",
                method: "post",
                data:
                {
                    btnlogin:"btnlogin",
                    userName: $userName,
                    password: $password
                },
                success : function(response){
                    if (response == "admin") {
                        window.location.href="dashboard.php";  
                    }else if(response=="teacher"){
                        window.location.href="teacher-list.php";
                    }else if(response=="student"){
                        window.location.href="student-index.php";
                    }else if(response=="wrong"){
                        alert("Mật khẩu không chính xác !");
                    }else {
                        alert("Tài khoản không tồn tại")
                    }
                }
              });
           

        }
        
    });
})