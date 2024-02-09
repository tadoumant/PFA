const UpdatBar1=document.querySelector(".form1 "),
    UpdatBar2=document.querySelector(".form2 "),
    UpdatBar3=document.querySelector(".form3 "),
    UpdatBar4=document.querySelector(".form4 "),

    UpdatBtn1=document.querySelector(".form1 h1"),
    UpdatBtn2=document.querySelector(".form2 h1"),
    UpdatBtn3=document.querySelector(".form3 h1"),
    UpdatBtn4=document.querySelector(".form4 h1");

    UpdatBtn1.onclick =() =>{
        UpdatBar1.classList.toggle("active");
    };
    UpdatBtn2.onclick =() =>{
        UpdatBar2.classList.toggle("active");
    };
    UpdatBtn3.onclick =() =>{
        UpdatBar3.classList.toggle("active");
    };
    UpdatBtn4.onclick =() =>{
        UpdatBar4.classList.toggle("active");
    };
