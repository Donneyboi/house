$(document).ready(function () {
//showtform
//teacher form
	$('.Siginuptform').hide();
	$('.Siginupsform').hide();
	$('.sigin').hide();
	$('.showtform').on('click',function () {
		$('.Siginuptform').show();
		$('.Siginupsform').hide();

	})


      	$('.te').hide();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').hide();
     
		$('.showemail').on('click',function () {
	     $('.tf').hide();
		$('.te').show();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').hide();
	})  

		//showcountry

		$('.showcountry').on('click',function () {
		 $('.tf').hide();
		 $('.te').hide();
      	$('.tc').show();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').hide();
	}) 
				//showdeveloper

				$('.showdeveloper').on('click',function () {
		    $('.tf').hide();
		   	$('.te').hide();
      	$('.tc').hide();
      	$('.td').show();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').hide();
	}) 

								//tasks

				$('.showq').on('click',function () {
		    $('.tf').hide();
		   	$('.te').hide();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').show();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').hide();
	}) 
								//bio

				$('.showbio').on('click',function () {
		    $('.tf').hide();
		   	$('.te').hide();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').show();
      	$('.tp').hide();
      	$('.tff').hide();
	}) 
   

   								//password

				$('.showpassword').on('click',function () {
		    $('.tf').hide();
		   	$('.te').hide();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').show();
      	$('.tff').hide();
	})
				// showff


						$('.showff').on('click',function () {
		    $('.tf').hide();
		   	$('.te').hide();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').show();
	})///////



				$('.swtf').on('click',function () {
		    $('.tf').show();
		   	$('.te').hide();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').hide();
	})  

		//showcountry

				$('.ste').on('click',function () {
		    $('.tf').hide();
		   	$('.te').show();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').hide();
	}) 
				//showdeveloper

				$('.shotc').on('click',function () {
		    $('.tf').hide();
		   	$('.te').hide();
      	$('.tc').show();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').hide();
	}) 

								//tasks

				$('.swd').on('click',function () {
		    $('.tf').hide();
		   	$('.te').hide();
      	$('.tc').hide();
      	$('.td').show();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').hide();
	}) 
								//bio

				$('.shobio').on('click',function () {
		    $('.tf').hide();
		   	$('.te').hide();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').show();
      	$('.tb').hide();
      	$('.tp').hide();
      	$('.tff').hide();
	}) 
   

   								//password

				$('.shopp').on('click',function () {
		    $('.tf').hide();
		   	$('.te').hide();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').show();
      	$('.tp').hide();
      	$('.tff').hide();
	})
				// showff


		$('.shpp').on('click',function () {
		 $('.tf').hide();
		 	$('.te').hide();
      	$('.tc').hide();
      	$('.td').hide();
      	$('.tq').hide();
      	$('.tb').hide();
      	$('.tp').show();
      	$('.tff').hide();
	})
///semail start of student form 

      	$('.semail').hide();
      	$('.scountry').hide();
      	$('.sg').hide();
      	$('.tq').hide();
      	$('.sp').hide();
      	$('.sf').hide();




        $('.nextemail').on('click',function () {
       $('.sname').hide();
		 $('.semail').show();
      	$('.scountry').hide();
      	$('.sg').hide();
      	$('.sp').hide();
      	$('.sf').hide();
	})
        //nextcountry

   $('.nextcountry').on('click',function () {
        $('.sname').hide();
		  	$('.semail').hide();
      	$('.scountry').show();
      	$('.sg').hide();
      	$('.sp').hide();
      	$('.sf').hide();
	})
   //nextgender

   $('.nextgender').on('click',function () {
        $('.sname').hide();
		$('.semail').hide();
      	$('.scountry').hide();
      	$('.sg').show();
      	$('.sp').hide();
      	$('.sf').hide();
	})
   //nextpass

    $('.nextpass').on('click',function () {
        $('.sname').hide();
		$('.semail').hide();
      	$('.scountry').hide();
      	$('.sg').hide();
      	$('.sp').show();
      	$('.sf').hide();
	})
      	//nextfinish

      	  $('.nextfinish').on('click',function () {
        $('.sname').hide();
		$('.semail').hide();
      	$('.scountry').hide();
      	$('.sg').hide();
      	$('.sp').hide();
      	$('.sf').show();
	})


      	  //the back of signup

        $('.backname').on('click',function () {
       $('.sname').show();
		 $('.semail').hide();
      	$('.scountry').hide();
      	$('.sg').hide();
      	$('.sp').hide();
      	$('.sf').hide();
	})
        //backemail

   $('.backemail').on('click',function () {
        $('.sname').hide();
	 $('.semail').show();
      $('.scountry').hide();
      $('.sg').hide();
      $('.sp').hide();
      $('.sf').hide();
	})
   

   $('.backcountry').on('click',function () {
        $('.sname').hide();
		$('.semail').hide();
      	$('.scountry').show();
      	$('.sg').hide();
      	$('.sp').hide();
      	$('.sf').hide();
	})
   //backpassword

    $('.backgender').on('click',function () {
        $('.sname').hide();
		$('.semail').hide();
      	$('.scountry').hide();
      	$('.sg').show();
      	$('.sp').hide();
      	$('.sf').hide();
	})
      	//backpassword

      	  $('.backpassword').on('click',function () {
        $('.sname').hide();
		$('.semail').hide();
      	$('.scountry').hide();
      	$('.sg').hide();
      	$('.sp').show();
      	$('.sf').hide();
	})


		$('.showsform').on('click',function () {
		$('.Siginupsform').show();
		$('.Siginuptform').hide();
	}) 
	//showlogin 
		$('.showlogin').on('click',function () {
		$('.sigin').show();
	}) 

//teacher

	$('.th').on('click',function () {
		$('.thome').show();
		$('.tchat').hide();
		$('.tnotification').hide();
		$('.tuser').hide();

	}) 



		$('.ttc').on('click',function () {
		$('.thome').hide();
		$('.tchat').show();
		$('.tnotification').hide();
		$('.tuser').hide();

	})
		$('.tn').on('click',function () {
		$('.thome').hide();
		$('.tchat').hide();
		$('.tnotification').show();
		$('.tuser').hide();

	})
		$('.tu').on('click',function () {
		$('.thome').hide();
		$('.tchat').hide();
		$('.tnotification').hide();
		$('.tuser').show();

	})


	//for student
	$('.sh').on('click',function () {
		$('.shome').show();
		$('.hire').hide();
		$('.schat').hide();
		$('.snotification').hide();
		$('.suser').hide();

	}) 


	$('.shh').on('click',function () {
		$('.shome').hide();
		$('.hire').show();
		$('.schat').hide();
		$('.snotification').hide();
		$('.suser').hide();

	})
	



		$('.sc').on('click',function () {
		$('.shome').hide();
		$('.hire').hide();
		$('.schat').show();
		$('.snotification').hide();
		$('.suser').hide();

	})
		$('.sn').on('click',function () {
		$('.shome').hide();
		$('.hire').hide();
		$('.schat').hide();
		$('.snotification').show();
		$('.suser').hide();

	})
		$('.su').on('click',function () {
		$('.shome').hide();
		$('.hire').hide();
		$('.schat').hide();
		$('.snotification').hide();
		$('.suser').show();

	})

		//showdetaile

        /*$('.showdetaile').on('click',function () {
		$('.detaile').show(100);
         })
//closedetaile
         
        $('.closedetaile').on('click',function () {
		$('.detaile').hide(100);
         })*/


        //showcomment
      $('.showcomment').on('click',function () {
		$('.commment').show(100);
		
         })

      //closecomment
        $('.closecomment').on('click',function () {
		$('.commment').hide(100);
         })

        //showpost
         $('.showpost').on('click',function () {
		$('.post2').show(100);
         })

	//hidecomment
	  $('.hidepost').on('click',function () {
		$('.post2').hide(100);
		$('.thome').show();
         })
})