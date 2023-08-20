// Heading animation
var typed= new Typed(".text",{
    strings:["Front End Developer","UI/UX Designer"],
    typeSpeed:60,
    backSpeed:50,
    loop:true
})

// Progress bar animation
const filled=document.querySelector(".progress-bar")
function update(){
    filled.style.width=`${((window.scrollY)/(document.body.scrollHeight-window.innerHeight)*100)}%`
    requestAnimationFrame(update);
}
update()

// CONTACT POP UP
const submitbtn=document.getElementById("submit-btn")

submitbtn.addEventListener("click",()=>{
    var form=document.getElementById("form")
    var popmessage=document.getElementById("pop-message")
    var Emessage=document.getElementById("email-message")

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var comment = document.getElementById("comment").value;

    const emailpattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

    if(name==="" || email===""|| comment===""){
        popmessage.textContent="please fill out all fields"
        return
    }

    if(!emailpattern.test(email.value)){
      alert("Please enter a valid email address")
        return;
    }

    setTimeout(()=>{
        form.reset();
        popmessage.textContent="Submitted successfully!"
    },1000)
} )


