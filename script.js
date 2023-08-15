var typed= new Typed(".text",{
    strings:["Front End Developer","UI/UX Designer"],
    typeSpeed:100,
    backSpeed:80,
    loop:true
})

const filled=document.querySelector(".progress-bar")
function update(){
    filled.style.width=`${((window.scrollY)/(document.body.scrollHeight-window.innerHeight)*100)}%`
    requestAnimationFrame(update);
}
update()