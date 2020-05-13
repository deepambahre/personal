
/******* these values are editable ******/

   thumbnail='images/baby/thumb/6small.png';
   fullImage='images/baby/6.png';

 /*  thumbnail1='images/smart_thumb.png';
   fullImage1='images/smart.png';*/

/***************************************/

   dv0=document.createElement('div');
   dv0.setAttribute('id','lens');
   
   thb=document.createElement('img');
   thb.setAttribute('id','lens_image');
   thb.setAttribute('src',thumbnail);
  /* thb.setAttribute('src',thumbnail1);*/
   dv0.appendChild(thb);

   dv1=document.createElement('div');
   dv1.setAttribute('id','screen');

   fimg=document.createElement('img');
   fimg.setAttribute('id','section_image');
   fimg.setAttribute('src',fullImage);
  /* fimg.setAttribute('src',fullImage1);*/

function init(){

   obj0=document.getElementById('thumb_container');
   obj0.appendChild(dv0);
   obj0.appendChild(dv1);
   obj1=document.getElementById('screen');
   obj2=document.getElementById('thumb');
   obj3=document.getElementById('lens');
   obj4=document.getElementById('lens_image');
   obj5=document.getElementById('image_container');
   obj5.appendChild(fimg);

if(window.addEventListener){
   obj1.addEventListener('mousemove',curPos, false);
 }
else {
if(window.attachEvent){
   obj1.attachEvent('onmousemove',curPos);
  }
 }

obj1.onmouseover=function(){

   obj3.style.display='block';
   obj5.style.display='block';

if(obj2.filters) {
   obj2.style.filter='alpha(opacity=30)';
 }
else{
   obj2.style.opacity=0.3;
  }
 }

obj1.onmouseout=function(){

   obj3.style.display='none';
   obj5.style.display='none';

if(obj2.filters) {
   obj2.style.filter='alpha(opacity=100)';
 }
else{
   obj2.style.opacity=1.0;
  }
 }
}

function curPos(event) {

   obj6=document.getElementById('section_image');  

if(obj0.currentStyle) {    
    bdr=parseFloat(obj0.currentStyle.borderWidth);
 }
else{
    compStyle=getComputedStyle(obj0,'');
    bdr=parseFloat(compStyle.getPropertyValue('border-left-width'));
  }

   l=event.clientX
   t=event.clientY;

   w=l-obj0.offsetLeft-bdr;
   h=t-obj0.offsetTop-bdr;

   w1=obj0.offsetWidth-bdr*2;
   h1=obj0.offsetHeight-bdr*2;

   w3=obj3.offsetWidth;
   h3=obj3.offsetHeight;

   x1=obj0.offsetWidth;
   x2=obj6.offsetWidth;

   ratio=x2/x1;

if(h<h1-h3){
   obj3.style.top=h+'px';
   obj4.style.marginTop=-h+'px';
   obj6.style.marginTop=-ratio*h+'px';
 }

if(w<w1-w3){
   obj3.style.left=w+'px';
   obj4.style.marginLeft=-w+'px';
   obj6.style.marginLeft=-ratio*w+'px';
  }

if(h>(h1-h3)){
   obj3.style.top=h1-h3+'px';
   obj4.style.marginTop=h3-h1+'px';
   obj6.style.marginTop=ratio*(h3-h1)+'px';
 }

if(w>(w1-w3)){
   obj3.style.left=w1-w3+'px';
   obj4.style.marginLeft=w3-w1+'px';
   obj6.style.marginLeft=ratio*(w3-w1)+'px';
  }
 }

if(window.addEventListener){
   window.addEventListener('load',init,false);
 }
else { 
if(window.attachEvent){
   window.attachEvent('onload',init);
  }
 }