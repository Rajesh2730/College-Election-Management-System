//----------------Code For Admin Side Nav Bar-----------------
$(document).ready(()=>{
    $("#lout").click(()=>{
        var result=  confirm('Are You Sure Want To Logging Out?');
        if (result==1){
  
          setTimeout(()=>{
              $("#lout").html=""
              window.location.href="logout.php"
          })
        }
          })
})

document.addEventListener('DOMContentLoaded', function() {
    var sup = document.querySelector('#signup');
    var signup = document.querySelector('.signup');
    var logout = document.querySelector('#lout');

    sup.style.backgroundColor = "#007bff";
    sup.style.color = "white";
    logout.addEventListener('onmouseover', function() {
        sup.style.backgroundColor = "#007bff";
        sup.style.color = "white";
});


});


//----------------------Code For Signup Categorey-------------------

function password(){
    var p1=document.getElementById('pass').value;
    var p2=document.getElementById('cpass').value;
    var lab=document.getElementById('msg');
    if(p1!=p2)
    {
        document.getElementById("msg").innerHTML="<b>Password Does not Match</b>";
        lab.style.color = 'red';
        lab.style.backgroundColor = 'white';
        lab.style.borderRadius = '3px';
    }
    else
    {
        document.getElementById("msg").innerHTML="<b>Password Match</b>";
        lab.style.color = 'green';
        lab.style.backgroundColor = 'white';
        lab.style.borderRadius = '3px';
    }
    setTimeout(() => {
        document.getElementById("msg").innerText="";
    }, 3000);

}