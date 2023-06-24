/* Funktion zur Prüfung ob JS(diese JS-File) geladen wurde
--> Ändern der Klasse "no-js" in "js" im <html >-Tag
*/

function jsLoaded(){
    const htmlTag = document.querySelector('html')
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add ('js')

}


(function ($) {

    $(document).ready(function () {

        $('#nav-main .menu-item-has-children > a').each(function (index, element) {

            var id = $(this).parent().attr('id') + '-toggle';

            $(this).after('<input type="checkbox" id="' + id + '"><label for="' + id + '" class="menu-toggle"><em area-hidden="true"></em><span class="screen-reader-text">open</span></label>');

        });

        $('#nav-main .current-menu-ancestor input[type="checkbox"], #nav-main .current-menu-parent input[type="checkbox"]').attr("checked", "checked");

    });

})(jQuery);



/*Pfeil beim Header um nach unten zu Scrollen wenn geklickt wird
  */

 function scrollDown(){
    const scrollDown = document.querySelector('#page-header #scroll')
    if(scrollDown) {
    if (window.scrollY > 250 ) {
      scrollDown.style.opacity = "0";
    } else {
      scrollDown.style.opacity = "1";
    }}
  }

const myTags = [
    'HTML', 'CSS','JavaScript', 'Phyton', 'SCSS', 'JQery', 'Django', 'PHP', 'NodeJs',
    'ReactJs'
];
 var tagCloud = TagCloud(' .seo-content', myTags,{

     radius:200,
     maxSpeed: 'fast',

     direction:135,
     keep:true,
 });


/*To Top Button Ausblenden ab ca. 250px */
function toTopButton (){
    const toTopButton = document.getElementById('totop')
    if ( window.scrollY > 250 ) {
        toTopButton.classList.add('show')
    } else {
        toTopButton.classList.remove ('show')
    }
    
}


function elementsInViewport() {

    //Finde alle Elemente mit der folgenden Klasse ("animated")
    let elements = document.querySelectorAll('.animate') //bei KLassen immer eine Schleife hinzufügen
    //Festlegen einer Klasse, die bei "inViewport" den Elementen hinzugefügt wird
    let animated = 'animated'

    // ** - Viewport (Browserfenster)

    // Abfrage der Fenster Top-Position
    let windowTopPosition = window.scrollY

    //Abfrage der Fenster-Höhe
    let windowHeight = window.innerHeight || document.documentElement.clientHeight

    //Berechnen der Fenster Bottom-Position
    let windowsBottomPosition = windowTopPosition + windowHeight

   //console.log('TopPos:' + windowTopPosition + '; Height: ' + windowHeight + ';BottomPos:' + windowHeight)

    for  (let i = 0; i < elements.length; i++) {

        //Abfrage Element Top-Position (in Relation zum document)
        let elementTopPosition = elements[i].getBoundingClientRect().top + windowTopPosition
        //Abfrage Element Bottom-Position
        let elementBottomPosition = elements[i].getBoundingClientRect().bottom + windowTopPosition

            if( ( windowsBottomPosition > elementTopPosition) && 
            (windowTopPosition < elementBottomPosition)){
            elements [i].classList.add(animated)
            } else {
                //elements[i].classList.remove(animated)
            }
        
      //console.log( elements[i].getBoundingClientRect())
    }
} 


function addAnimateClass (){
    let elements = document.querySelectorAll ('h1,h2,p,.post,.project,.column,.blog-wrapper,.blog-content6')
    for (let i = 0; i < elements.length; i++) {
     elements[i].classList.add('animate')
    }
}

document.addEventListener('DOMContentLoaded', function() {

    jsLoaded()
    toTopButton()
    addAnimateClass()
    elementsInViewport()
    scrollDown()
  

    document.getElementById('totop').addEventListener('click',function(){
        document.body.scrollTop = 0
        document.documentElement.scrollTop = 0
    })
    const scrollDownn = document.querySelector('#page-header #scroll')
    if(scrollDownn){
    document.getElementById('scroll').addEventListener('click',function(){
        document.body.scrollTop = 700
        document.documentElement.scrollTop = 700
    })}

}, false ) 




document.addEventListener('scroll', function(){
    toTopButton()
    elementsInViewport()
    scrollDown()
 

})


window.addEventListener ('resize', function(){
    elementsInViewport()
})


