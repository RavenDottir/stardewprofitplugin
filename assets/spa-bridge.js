(function(){
function emit(panel){
 document.dispatchEvent(new CustomEvent('spa:panel-visible',{detail:{panel:panel}}));
}
function check(){
 document.querySelectorAll('.content.active').forEach(emit);
}
const obs=new MutationObserver(m=>{
 m.forEach(r=>{
  if(r.type==='attributes' && r.attributeName==='class'){
    if(r.target.classList.contains('content') && r.target.classList.contains('active')){
        emit(r.target);
    }
  }
 });
});
document.querySelectorAll('.content').forEach(el=>obs.observe(el,{attributes:true}));
window.addEventListener('load',check);
})();