<div class="section footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <ul>
              <li><a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/twitter.png"></a></li>
              <li><a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/instagramm.png"></a></li>
              <li><a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/facebook.png"></a></li>
              <li><a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/google+.png"></a></li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span>© Freelancer - Designed by Wojtek Kwiatkowski</span></div>
        </div>
      </div>
    </div>
    <div class="hidden"></div>
    <!--if lt IE 9
    script(src='libs/html5shiv/es5-shim.min.js')
    script(src='libs/html5shiv/html5shiv.min.js')
    script(src='libs/html5shiv/html5shiv-printshiv.min.js')
    script(src='libs/respond/respond.min.js')
    -->
    <script>
      function loadCSS(hf) {
        var ms=document.createElement("link");ms.rel="stylesheet";
        ms.href=hf;document.getElementsByTagName("head")[0].appendChild(ms);
      }
      //loadCSS("libs/animate/animate.css");                                    //Load Libs CSS: Animate CSS
      loadCSS("<?php echo esc_url( get_template_directory_uri() ); ?>/css/header.min.css");                                            //Header Styles (compress & paste to header after release)
      loadCSS("<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.min.css");                                              //User Styles: Main
      loadCSS("<?php echo esc_url( get_template_directory_uri() ); ?>/css/media.min.css");                                             //User Styles: Media
      loadCSS("<?php echo esc_url( get_template_directory_uri() ); ?>/css/core.min.css"); 	 		                                        //User Styles: Core
      loadCSS("<?php echo esc_url( get_template_directory_uri() ); ?>/css/fonts.min.css"); 				                                    //User Styles: Fonts
      loadCSS("<?php echo esc_url( get_template_directory_uri() ); ?>/css/bower_components/normalize-css/normalize.css");              //User Styles: Normalize
    </script>
    <script>
      var scr = {"scripts":[
        {"src" : "<?php echo esc_url( get_template_directory_uri() ); ?>/libs/bower_components/jquery/dist/jquery.min.js", "async" : false},
        {"src" : "<?php echo esc_url( get_template_directory_uri() ); ?>/js/app.js", "async" : false},
        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>
    <?php wp_footer();?>
  </body>
</html>