function jsLoaded(){const htmlTag=document.querySelector('html')
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')}
function scrollDown(){const scrollDown=document.querySelector('#page-header #scroll')
    if(scrollDown){if(window.scrollY>250){scrollDown.style.opacity="0"}else{scrollDown.style.opacity="1"}}}
function toTopButton(){const toTopButton=document.getElementById('totop')
    if(window.scrollY>250){toTopButton.classList.add('show')}else{toTopButton.classList.remove('show')}}
function elementsInViewport(){let elements=document.querySelectorAll('.animate')
    let animated='animated'
    let windowTopPosition=window.scrollY
    let windowHeight=window.innerHeight||document.documentElement.clientHeight
    let windowsBottomPosition=windowTopPosition+windowHeight
    for(let i=0;i<elements.length;i++){let elementTopPosition=elements[i].getBoundingClientRect().top+windowTopPosition
        let elementBottomPosition=elements[i].getBoundingClientRect().bottom+windowTopPosition
        if((windowsBottomPosition>elementTopPosition)&&(windowTopPosition<elementBottomPosition)){elements[i].classList.add(animated)}else{}}}
function addAnimateClass(){let elements=document.querySelectorAll('h1,h2,p,.post,.seo,.about,.span,.project,.allProjects,.projects,.column,.blog-wrapper,.blog-content6')
    for(let i=0;i<elements.length;i++){elements[i].classList.add('animate')}}
document.addEventListener('DOMContentLoaded',function(){jsLoaded()
    toTopButton()
    addAnimateClass()
    elementsInViewport()
    scrollDown()
    document.getElementById('totop').addEventListener('click',function(){document.body.scrollTop=0
        document.documentElement.scrollTop=0})
    const scrollDownn=document.querySelector('#page-header #scroll')
    if(scrollDownn){document.getElementById('scroll').addEventListener('click',function(){document.body.scrollTop=700
        document.documentElement.scrollTop=700})}},!1)
document.addEventListener('scroll',function(){toTopButton()
    elementsInViewport()
    scrollDown()})
window.addEventListener('resize',function(){elementsInViewport()})