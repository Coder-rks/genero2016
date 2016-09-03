var $window = jQuery (window);

$(document).ready(function(){

    //Preloader
    setTimeout(function(){
        $('.start_btn').removeClass('start_btn_hide').addClass('start_btn_show');
    }, 1000);

    $( ".start_btn" ).click(function() {
        $(".preloader").removeClass("preloader_show").addClass("preloader_hide");
    });



    if($( window ).width() < 1000){

    }else{



        var songs = [
    'gwiazdorgotowypl', 'christfadein', 'pernoelgotowy', 'befanagotowy', 'dziadmrozgotowy', 'lopakogotowy', 'krampusgotowy'
    ]
    var track = 0;
    var audioType = '.mp3'
    var audioPlayer = document.createElement('audio');
    var musicPlayer = document.createElement('audio');

    musicPlayer.setAttribute('src', 'sounds/mjuzikgotowy.mp3');
    musicPlayer.load();
    musicPlayer.volume=0.3;
    musicPlayer.loop=true;
    musicPlayer.play();

    $('.start_btn').on('click', function(){
        audioPlayer.pause();
        if(track < songs.length - 1){
            track++;
            audioPlayer.setAttribute('src', 'sounds/' + songs[track] + audioType);
            audioPlayer.load();
            audioPlayer.volume=0.4;
            audioPlayer.play();
        }
        else {
            track = 0;
            audioPlayer.setAttribute('src', 'sounds/' + songs[track] + audioType);
            audioPlayer.load();
            audioPlayer.volume=0.4;
            audioPlayer.play();
        }
    })

    $('#gotop').on('click', function(){
        audioPlayer.pause();
        if(track > 0 && track < songs.length){
            track--;
            audioPlayer.setAttribute('src', 'sounds/' + songs[track] + audioType);
            audioPlayer.load();
            audioPlayer.play();
        }
        else {
            track = 6;
            audioPlayer.setAttribute('src', 'sounds/' + songs[track] + audioType);
            audioPlayer.load();
            audioPlayer.play();
        }
    })

    $('#gobottom').on('click', function(){
        audioPlayer.pause();
        if(track < songs.length - 1){
            track++;
            audioPlayer.setAttribute('src', 'sounds/' + songs[track] + audioType);
            audioPlayer.load();
            audioPlayer.play();
        }
        else {
            track = 0;
            audioPlayer.setAttribute('src', 'sounds/' + songs[track] + audioType);
            audioPlayer.load();
            audioPlayer.play();
        }
    })
    }

    // Sounds
    


    // Next santa button    
    $( "#gobottom" ).click(function() {
        if($(".santas_container").attr("whichsanta") == "first"){
            $(".santas_container").removeClass("santafirst").addClass("santasecond");
            $(".bio_section").removeClass("bio_sec_first").addClass("bio_sec_second");
            $(".nav_sec").removeClass("nav_sec_first").addClass("nav_sec_second");
            $(".bodybgmain").removeClass("bodybg_first").addClass("bodybg_second");
            $(".santas_container").attr("whichsanta","second");
            $(".whichsantainput").attr("value","2");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/gwiazdorgotowypl.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "second"){
            $(".santas_container").removeClass("santasecond").addClass("santathird");
            $(".bio_section").removeClass("bio_sec_second").addClass("bio_sec_third");
            $(".nav_sec").removeClass("nav_sec_second").addClass("nav_sec_third");
            $(".bodybgmain").removeClass("bodybg_second").addClass("bodybg_third");
            $(".santas_container").attr("whichsanta","third");
            $(".whichsantainput").attr("value","3");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/gwiazdorgotowypl.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "third"){
            $(".santas_container").removeClass("santathird").addClass("santafourth");
            $(".bio_section").removeClass("bio_sec_third").addClass("bio_sec_fourth");
            $(".nav_sec").removeClass("nav_sec_third").addClass("nav_sec_fourth");
            $(".bodybgmain").removeClass("bodybg_third").addClass("bodybg_fourth");
            $(".santas_container").attr("whichsanta","fourth");
            $(".whichsantainput").attr("value","4");
           // $(".next_santa").attr("onclick","playSound(this, 'sounds/gwiazdorgotowypl.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "fourth"){
            $(".santas_container").removeClass("santafourth").addClass("santafifth");
            $(".bio_section").removeClass("bio_sec_fourth").addClass("bio_sec_fifth");
            $(".nav_sec").removeClass("nav_sec_fourth").addClass("nav_sec_fifth");
            $(".bodybgmain").removeClass("bodybg_fourth").addClass("bodybg_fifth");
            $(".santas_container").attr("whichsanta","fifth");
            $(".whichsantainput").attr("value","5");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/gwiazdorgotowypl.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "fifth"){
            $(".santas_container").removeClass("santafifth").addClass("santasixth");
            $(".bio_section").removeClass("bio_sec_fifth").addClass("bio_sec_sixth");
            $(".nav_sec").removeClass("nav_sec_fifth").addClass("nav_sec_sixth");
            $(".bodybgmain").removeClass("bodybg_fifth").addClass("bodybg_sixth");
            $(".santas_container").attr("whichsanta","sixth");
            $(".whichsantainput").attr("value","6");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/gwiazdorgotowypl.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "sixth"){
            $(".santas_container").removeClass("santasixth").addClass("santaseventh");
            $(".bio_section").removeClass("bio_sec_sixth").addClass("bio_sec_seventh");
            $(".nav_sec").removeClass("nav_sec_sixth").addClass("nav_sec_seventh");
            $(".bodybgmain").removeClass("bodybg_sixth").addClass("bodybg_seventh");
            $(".santas_container").attr("whichsanta","seventh");
            $(".whichsantainput").attr("value","7");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/gwiazdorgotowypl.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "seventh"){
            $(".santas_container").removeClass("santaseventh").addClass("santaeighth");
            $(".bio_section").removeClass("bio_sec_seventh").addClass("bio_sec_eighth");
            $(".nav_sec").removeClass("nav_sec_seventh").addClass("nav_sec_eighth");
            $(".bodybgmain").removeClass("bodybg_seventh").addClass("bodybg_eighth");
            $(".santas_container").attr("whichsanta","eighth");
            $(".whichsantainput").attr("value","8");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/gwiazdorgotowypl.mp3');");
         
          

        };

        //alert( "Animation complete." );
    });

    // Prev santa button
    $( "#gotop" ).click(function() {
        // if($(".santas_container").attr("whichsanta") == "first"){
        //     $(".santas_container").removeClass("santafirst").addClass("santaeighth");
        //     $(".bio_section").removeClass("bio_sec_first").addClass("bio_sec_eighth");
        //     $(".nav_sec").removeClass("nav_sec_first").addClass("nav_sec_eighth");
        //     $(".bodybgmain").removeClass("bodybg_first").addClass("bodybg_eighth");
        //     $(".santas_container").attr("whichsanta","eighth");
        //     $(".whichsantainput").attr("value","8");
        //     //$(".next_santa").attr("onclick","playSound(this, 'sounds/gwiazdorgotowypl.mp3');");
        // }
        if($(".santas_container").attr("whichsanta") == "second"){
            $(".santas_container").removeClass("santasecond").addClass("santafirst");
            $(".bio_section").removeClass("bio_sec_second").addClass("bio_sec_first");
            $(".nav_sec").removeClass("nav_sec_second").addClass("nav_sec_first");
            $(".bodybgmain").removeClass("bodybg_second").addClass("bodybg_first");
            $(".santas_container").attr("whichsanta","first");
            $(".whichsantainput").attr("value","1");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/christfadein.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "third"){
            $(".santas_container").removeClass("santathird").addClass("santasecond");
            $(".bio_section").removeClass("bio_sec_third").addClass("bio_sec_second");
            $(".nav_sec").removeClass("nav_sec_third").addClass("nav_sec_second");
            $(".bodybgmain").removeClass("bodybg_third").addClass("bodybg_second");
            $(".santas_container").attr("whichsanta","second");
            $(".whichsantainput").attr("value","2");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/dziadmrozgotowy.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "fourth"){
            $(".santas_container").removeClass("santafourth").addClass("santathird");
            $(".bio_section").removeClass("bio_sec_fourth").addClass("bio_sec_third");
            $(".nav_sec").removeClass("nav_sec_fourth").addClass("nav_sec_third");
            $(".bodybgmain").removeClass("bodybg_fourth").addClass("bodybg_third");
            $(".santas_container").attr("whichsanta","third");
            $(".whichsantainput").attr("value","3");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/krampusgotowy.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "fifth"){
            $(".santas_container").removeClass("santafifth").addClass("santafourth");
            $(".bio_section").removeClass("bio_sec_fifth").addClass("bio_sec_fourth");
            $(".nav_sec").removeClass("nav_sec_fifth").addClass("nav_sec_fourth");
            $(".bodybgmain").removeClass("bodybg_fifth").addClass("bodybg_fourth");
            $(".santas_container").attr("whichsanta","fourth");
            $(".whichsantainput").attr("value","4");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/christfadein.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "sixth"){
            $(".santas_container").removeClass("santasixth").addClass("santafifth");
            $(".bio_section").removeClass("bio_sec_sixth").addClass("bio_sec_fifth");
            $(".nav_sec").removeClass("nav_sec_sixth").addClass("nav_sec_fifth");
            $(".bodybgmain").removeClass("bodybg_sixth").addClass("bodybg_fifth");
            $(".santas_container").attr("whichsanta","fifth");
            $(".whichsantainput").attr("value","5");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/dziadmrozgotowy.mp3');");
        }
        else if($(".santas_container").attr("whichsanta") == "seventh"){
            $(".santas_container").removeClass("santaseventh").addClass("santasixth");
            $(".bio_section").removeClass("bio_sec_seventh").addClass("bio_sec_sixth");
            $(".nav_sec").removeClass("nav_sec_seventh").addClass("nav_sec_sixth");
            $(".bodybgmain").removeClass("bodybg_seventh").addClass("bodybg_sixth");
            $(".santas_container").attr("whichsanta","sixth");
            $(".whichsantainput").attr("value","6");
            //$(".next_santa").attr("onclick","playSound(this, 'sounds/krampusgotowy.mp3');");
        }   
        else if($(".santas_container").attr("whichsanta") == "eighth"){
            $(".santas_container").removeClass("santaeighth").addClass("santaseventh");
            $(".bio_section").removeClass("bio_sec_eighth").addClass("bio_sec_seventh");
            $(".nav_sec").removeClass("nav_sec_eighth").addClass("nav_sec_seventh");
            $(".bodybgmain").removeClass("bodybg_eighth").addClass("bodybg_seventh");
            $(".santas_container").attr("whichsanta","seventh");
            $(".whichsantainput").attr("value","7");
        };
        //alert( "Animation complete." );
    });

    // Wish panel slider
    // $( ".hire_btn" ).click(function() {
    //     $(".wish_container").removeClass("wish_container_closed").addClass("wish_container_opened");
    //     $(".container").removeClass("wish_off").addClass("wish_on");
    //     //alert( "Animation complete." );
    // });

    // $( ".closebtn_cont" ).click(function() {
    //     $(".wish_container").removeClass("wish_container_opened").addClass("wish_container_closed");
    //     $(".container").removeClass("wish_on").addClass("wish_off");
    //     $(".wish_form").removeClass("wish_form_off").addClass("wish_form_on");
    //     $(".wish_link").removeClass("wish_link_on").addClass("wish_link_off");
    //     //alert( "Animation complete." );
    // });

    // Send wishes

    // $('form').submit(function(e){
    //     e.preventDefault(); //zatrzyma przeładowanie strony
    //     var data = $(this).serialize();
    //     var action = $(this).attr('action');
    //     $.post(action,data).done(function(resp){
    //         $(".wish_form").removeClass("wish_form_on").addClass("wish_form_off");
    //         $(".wish_link").removeClass("wish_link_off").addClass("wish_link_on");
    //         $('input[name=link_input]').val(resp);
    //         $('div.fb-share-button').attr('data-href',resp);
    //         try{
    //             FB.XFBML.parse(); 
    //         }catch(ex){}
    //     });

    //     return false;
    // });

    // Copy Button

    var client = new ZeroClipboard($("#copy-clipboard"));

    client.on( 'ready', function(event) {
        // console.log( 'movie is loaded' );

        client.on( 'aftercopy', function(event) {
            $( ".copied" ).removeClass("copied_off").addClass("copied_on" );
            setTimeout(function () {      
                $( ".copied" ).removeClass("copied_on").addClass("copied_off" );
            }, 100);
        } );
      } );

});