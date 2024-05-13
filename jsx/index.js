
//index page header file code start's here........!



$(document).ready(()=>{
    
  $("#signup").click(()=>{
    setTimeout(()=>{
        $("#signup").html=""
        window.location.href="signup.php"
    })
  })
  $("#login").click(()=>{
    setTimeout(()=>{
        $("#login").html=""
        window.location.href="login.php"
    })
    })
    $("#home").click(()=>{
        setTimeout(()=>{
            $("#home").html=""
            window.location.href="index.php"
        })
        })
})





//index page header file code end here....!


//----------signup page code starts here------

function Password(){
    var p1=document.getElementById('input2').value;
    var p2=document.getElementById('input3').value;
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


//-------signup page code end's here----------


//---------Code For Nav Bar In Header--------



document.addEventListener('DOMContentLoaded', function() {
    var toggleButton = document.querySelector('.header_btn1');
    var menuContent = document.querySelector('.menu-content');

    toggleButton.addEventListener('click', function() {
        if (menuContent.style.display === 'block') {
            menuContent.style.display = 'none';
        } else {
            menuContent.style.display = 'block';
        }
        menuContent.classList.header_btn1('show'); // Toggle the 'show' class
    });
});


//-------------Code For Nav Bar End's Here---------

//-------------Code For Profile Page-----------


$(document).ready(()=>{
$("#edit").click(()=>{
    setTimeout(()=>{
        $("#edit").html=""
        window.location.href="login.php"
    })
    })
    $("#lout").click(()=>{
      var result=  confirm('Are You Sure Want To Logging Out?');
      if (result==1){

        setTimeout(()=>{
            $("#lout").html=""
            window.location.href="logout.php"
        })
      }
        })
        $("#vote").click(()=>{
            setTimeout(()=>{
                $("#vote").html=""
                window.location.href="vote.php"
            })
            })
            $("#nominate").click(()=>{
                setTimeout(()=>{
                    $("#nominate").html=""
                    window.location.href="nomination.php"
                })
                })
                $("#profile_edit").click(()=>{
                    setTimeout(()=>{
                        $("#profile_edit").html=""
                        window.location.href="profiledit.php"
                    })
                    })
                    $("#Deact").click(()=>{
                        var result=  confirm('Are You Sure Want To Delete Account?');
                        if (result==1){
                  
                          setTimeout(()=>{
                              $("#Deact").html=""
                              window.location.href="deactivate.php"
                          })
                        }
                          })
})

//---------------------Code For Profile Page End---------------

//---------------------Code For Voting Poll--------------------



document.addEventListener('DOMContentLoaded', function() {
    var stdcm = document.querySelector('#sc');
    var scm = document.querySelector('.student_chairman');
    var wicm = document.querySelector('#wc');
    var wcm = document.querySelector('.wise_chairman');
    var sec = document.querySelector('#sec');
    var secra = document.querySelector('.secratory');
    var tre = document.querySelector('#tre');
    var treas = document.querySelector('.treasurer');
    var start = document.getElementById('v_start');
    var sc_next = document.getElementById('sc_nxt');
    var wc_next = document.getElementById('wc_nxt');
    var sec_next = document.getElementById('sec_nxt');
    var tre_next = document.getElementById('tre_nxt');
    var feed = document.querySelector('.Feed');

    
    start.addEventListener('click', function() {
        start.style.display = 'none';
        if (scm.style.display == 'none') {
            scm.style.display = 'none';
        } else {
            scm.style.display = 'block';
        }
    });


    sc_next.addEventListener('click', function() {
        if (document.querySelector('input[name="S-C"]:checked')) {
            stdcm.style.backgroundColor = 'lightgreen';
        }
        else{
            stdcm.style.backgroundColor = 'red';
        }
        scm.style.display = 'none';
        if (wcm.style.display == 'none') {
            wcm.style.display = 'none';
        } else {
            wcm.style.display = 'block';
        }
        
        stdcm.style.color = 'black';
        stdcm.style.transition = '.30s';
        
    });

    wc_next.addEventListener('click', function() {
        if (document.querySelector('input[name="W-C"]:checked')) {
            wicm.style.backgroundColor = 'lightgreen';
        }
        else{
            wicm.style.backgroundColor = 'red';
        }
        wcm.style.display = 'none';
        if (secra.style.display == 'none') {
            secra.style.display = 'none';
        } else {
            secra.style.display = 'block';
        }
        
        wicm.style.transition = '.30s';
    });

    sec_next.addEventListener('click', function() {
        if (document.querySelector('input[name="Sec"]:checked')) {
            sec.style.backgroundColor = 'lightgreen';
        }
        else{
            sec.style.backgroundColor = 'red';
        }
        secra.style.display = 'none';
        if (treas.style.display == 'none') {
            treas.style.display = 'none';
        } else {
            treas.style.display = 'block';
        }
        
        sec.style.transition = '.30s';
    });
    
    tre_next.addEventListener('click', function() {
        if (document.querySelector('input[name="Tre"]:checked')) {
            tre.style.backgroundColor = 'lightgreen';
        }
        else{
            tre.style.backgroundColor = 'red';
        }
        secra.style.display = 'none';
        treas.style.display = 'none';
        if (feed.style.display == 'none') {
            feed.style.display = 'none';
        } else {
            feed.style.display = 'block';
        }
        
        tre.style.transition = '.30s';
    });
});


$(document).ready(()=>{
    $("#backhome").click(()=>{
        setTimeout(()=>{
            $("#backhome").html=""
            window.location.href="index.php"
        })
        })
    })

//-------------------------Code For Voting Poll Is End Here--------------
