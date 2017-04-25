/* BASE
============================================================================= */
@import url(http://fonts.googleapis.com/css?family=Offside);

html                            { overflow-y:scroll; }
body                            { margin-top:40px; }

/* HEADER
============================================================================= */
#header                         { margin-bottom:50px; }

    /* logo */
    #logo                       { color:#FFF; font-family:'Offside'; font-size:80px; margin-bottom:50px; margin-top:50px; }
    #logo span                  { display:inline-block; }

/* MAIN NAV
============================================================================= */
#main-nav                       { margin-bottom:30px; }

/* SIDEBAR
============================================================================= */
#sidebar                        {  }

#sidebar-nav                    {  }
#sidebar-nav ul                 { list-style:none; padding-left:0; }
#sidebar-nav li                 {  }
#sidebar-nav a                  { background:#428bca; color:#FFF; display:block; margin-bottom:10px; padding:20px; text-transform:uppercase;
    border-radius:2px; -moz-border-radius:2px; -webkit-border-radius:2px;
}
    #sidebar-nav a:hover        { background:#3276b1; text-decoration:none; }

/* CONTENT
============================================================================= */
#content                        { background:#FFF; min-height:400px; padding:20px;
    border-radius:2px; -moz-border-radius:2px; -webkit-border-radius:2px;
}
#content img                    { border-radius:2px; -moz-border-radius:2px; -webkit-border-radius:2px; }

/* ANIMATIONS
============================================================================= */

    /* logo */
    .dd                         { animation-delay:0.2s; -moz-animation-delay:0.2s; -webkit-animation-delay:0.2s; }
    .da                         { animation-delay:0.8s; -moz-animation-delay:0.8s; -webkit-animation-delay:0.8s; }
    .dn                         { animation-delay:0.6s; -moz-animation-delay:0.6s; -webkit-animation-delay:0.6s; }
    .dg                         { animation-delay:1s; -moz-animation-delay:1s; -webkit-animation-delay:1s; }
    .de                         { animation-delay:0.4s; -moz-animation-delay:0.4s; -webkit-animation-delay:0.4s; }
    .dr                         { animation-delay:1.2s; -moz-animation-delay:1.2s; -webkit-animation-delay:1.2s; }

    .zz                         { animation-delay:1.4s; -moz-animation-delay:1.4s; -webkit-animation-delay:1.4s; }
    .zo                         { animation-delay:0.4s; -moz-animation-delay:0.4s; -webkit-animation-delay:0.4s; }
    .zn                         { animation-delay:0.6s; -moz-animation-delay:0.6s; -webkit-animation-delay:0.6s; }
    .ze                         { animation-delay:0.5s; -moz-animation-delay:0.5s; -webkit-animation-delay:0.5s; }

    /* sidebar */
    #side-home                  { animation-delay:0.2s; -moz-animation-delay:0.2s; -webkit-animation-delay:0.2s; }
    #side-about                 { animation-delay:0.6s; -moz-animation-delay:0.6s; -webkit-animation-delay:0.6s; }
    #side-work                  { animation-delay:0.8s; -moz-animation-delay:0.8s; -webkit-animation-delay:0.8s; }
    #side-contact               { animation-delay:0.3s; -moz-animation-delay:0.3s; -webkit-animation-delay:0.3s; }

    /* content */
    #content                    { animation-delay:1.5s; -moz-animation-delay:1.5s; -webkit-animation-delay:1.5s; }
        #content img            { animation-delay:1.7s; -moz-animation-delay:1.7s; -webkit-animation-delay:1.7s; }
