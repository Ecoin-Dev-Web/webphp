$(document).ready(function(){
  /*  $(document).on('click','#getData',function(event){
        event.preventDefault()
        // https://ecoindzz.test/webphp/data.txt
         $.ajax({
            url:'data.txt',
            type: "GET",
            //data:
            success: function(rep){
           // console.log(rep);
           $(".data").text(rep)
            },
            error:function(xhr,textStatus,errorTh){
                console.log(textStatus,errorTh);
            }

         })
    })*/



         // add Category By ajax
         $('form').submit(function (event) {
            event.preventDefault()
            let cat = $('#cat').val()
            let text = $('#detail').val()
            console.log(cat,text);

           // let urls = $('form').getAttr('action')
           // let types = $('form').getAttr('method')

           // let fm = $('form').serialize()
            let fm = $('form').serializeArray()
            console.log(fm);

            $.ajax({
                url:'ok.php',
                type: 'post',
                data: fm,
                success: function(rep,x){
                   console.log(rep,x);
                   if(rep)  
                    $(".msg").text("Add Ok").show(3000)
                  //  $(".data").text(rep)
                     },
              error:function(xhr,textStatus,errorTh){
                         console.log(xhr,textStatus,errorTh);
                     }

            })
         })  // end submit event

         $(document).on('click',".delete",function (event) {
            event.preventDefault()
            let test = $(this).data('id')
            //alert(test)
            let myId = {ecoin:test}



              /**************************** */
              Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
              }).then((result) => {
                   /*******Ajax ********** */
                   if (result.isConfirmed) {
                   $.ajax({
                    url:'delete.php',
                    type: 'get',
                    data: myId,
                    success: function(rep,x){
                      if(rep) {
                                    
                    Swal.fire({
                      title: "Deleted!",
                      text: "Your file has been deleted.",
                      icon: "success"
                    });
                    let h = setTimeout(function () {
                         location.href = "listAjax.php"
                    },3000)
                 
                      }
                       
                        //console.log(rep,x);
                    else console.log("errrrrrrrrrrrrrr");
                      //  $(".data").text(rep)
                         },
                  error:function(xhr,textStatus,errorTh){
                             console.log(xhr,textStatus,errorTh);
                         }
    
                })
            }// end confirm delete
                   /***************** */

              });
            /**************************** */
      
         })
})




/****************************************************** *
Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "Deleted!",
        text: "Your file has been deleted.",
        icon: "success"
      });
    }
  });
****************************************************** */