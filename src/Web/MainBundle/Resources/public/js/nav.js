var MainNav =  function(){
    this.params ={
        page: $("#MainNav"),
       carousel :  $('.carousel')
    }
};

$(function(){
    var mainNav = new MainNav();
   if(mainNav.params.page.data('page')=="main")
   {
       if(mainNav.params.page.data('bundle')=="main")
       {
           mainNav.params.carousel.carousel({
               interval: 2000
           });
       }
   }
});

