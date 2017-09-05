<?php

/* layout.html.twig */
class __TwigTemplate_8161d0765a5d6f5ca0029730dff756f4408fd2a8adefd0fd2c114b893db9fa79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f92bb9b6a4bbfce5104c4916dddd1091c704b74dd7caafa28ab995bd454b131 = $this->env->getExtension("native_profiler");
        $__internal_1f92bb9b6a4bbfce5104c4916dddd1091c704b74dd7caafa28ab995bd454b131->enter($__internal_1f92bb9b6a4bbfce5104c4916dddd1091c704b74dd7caafa28ab995bd454b131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\" class=\"no-js\">

<head>
<meta charset=\"utf-8\"/>
<title>Bufete | Dashboard</title>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
<meta content=\"\" name=\"description\"/>
<meta content=\"\" name=\"author\"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/pages/css/tasks.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END PAGE STYLES -->
<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- BEGIN THEME STYLES -->
<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/components.css"), "html", null, true);
        echo "\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/layout/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/layout/css/themes/darkblue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/layout/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END THEME STYLES -->
<link rel=\"shortcut icon\" href=\"favicon.ico\"/>
</head>

<body class=\"page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid\">
<!-- BEGIN HEADER -->
<div class=\"page-header -i navbar navbar-fixed-top\">
\t<!-- BEGIN HEADER INNER -->
\t<div class=\"page-header-inner\">
\t\t<!-- BEGIN LOGO -->
\t\t<div class=\"page-logo\">
\t\t\t<a href=\"index.html\">
\t\t\t<img src=\"../../assets/admin/layout/img/logo.png\" alt=\"logo\" class=\"logo-default\"/>
\t\t\t</a>
\t\t\t<div class=\"menu-toggler sidebar-toggler hide\">
\t\t\t</div>
\t\t</div>
\t\t<!-- END LOGO -->
\t\t<!-- BEGIN RESPONSIVE MENU TOGGLER -->
\t\t<a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t</a>
\t\t<!-- END RESPONSIVE MENU TOGGLER -->
\t\t<!-- BEGIN TOP NAVIGATION MENU -->
\t\t<div class=\"top-menu\">
\t\t\t<ul class=\"nav navbar-nav pull-right\">


\t\t\t\t<!-- BEGIN USER LOGIN DROPDOWN -->
\t\t\t\t<!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
\t\t\t\t<li class=\"dropdown dropdown-user\">
\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
\t\t\t\t\t<img alt=\"\" class=\"img-circle\" src=\"../../assets/admin/layout/img/avatar3_small.jpg\"/>
\t\t\t\t\t<span class=\"username username-hide-on-mobile\">
\t\t\t\t\tNick </span>
\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-default\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"extra_profile.html\">
\t\t\t\t\t\t\t<i class=\"icon-user\"></i> My Profile </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"page_calendar.html\">
\t\t\t\t\t\t\t<i class=\"icon-calendar\"></i> My Calendar </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"inbox.html\">
\t\t\t\t\t\t\t<i class=\"icon-envelope-open\"></i> My Inbox <span class=\"badge badge-danger\">
\t\t\t\t\t\t\t3 </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"page_todo.html\">
\t\t\t\t\t\t\t<i class=\"icon-rocket\"></i> My Tasks <span class=\"badge badge-success\">
\t\t\t\t\t\t\t7 </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"extra_lock.html\">
\t\t\t\t\t\t\t<i class=\"icon-lock\"></i> Lock Screen </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"login.html\">
\t\t\t\t\t\t\t<i class=\"icon-key\"></i> Log Out </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!-- END USER LOGIN DROPDOWN -->

\t\t\t</ul>
\t\t</div>
\t\t<!-- END TOP NAVIGATION MENU -->
\t</div>
\t<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class=\"clearfix\">
</div>
<!-- BEGIN CONTAINER -->
<div class=\"page-container\">
\t<!-- BEGIN SIDEBAR -->
\t<div class=\"page-sidebar-wrapper\">
\t\t<!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
\t\t<!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
\t\t<div class=\"page-sidebar navbar-collapse collapse\">
\t\t\t<!-- BEGIN SIDEBAR MENU -->

\t\t\t<ul class=\"page-sidebar-menu \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\">
\t\t\t\t<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
\t\t\t\t<li class=\"sidebar-toggler-wrapper\">
\t\t\t\t\t<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
\t\t\t\t\t<div class=\"sidebar-toggler\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- END SIDEBAR TOGGLER BUTTON -->
\t\t\t\t</li>
\t\t\t\t<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below \"sidebar-search-wrapper\" LI element -->
\t\t\t\t<li class=\"sidebar-search-wrapper\">
\t\t\t\t</li><br>
\t\t\t\t<li class=\"start active open\">
\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t<span class=\"title\">Dashboard</span>
\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t<span class=\"arrow open\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t<i class=\"icon-bar-chart\"></i>
\t\t\t\t\t\t\tDefault Dashboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index_2.html\">
\t\t\t\t\t\t\t<i class=\"icon-bulb\"></i>
\t\t\t\t\t\t\tNew Dashboard #1</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index_3.html\">
\t\t\t\t\t\t\t<i class=\"icon-graph\"></i>
\t\t\t\t\t\t\tNew Dashboard #2</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>


\t\t\t\t<li class=\"heading\">
\t\t\t\t\t<h3 class=\"uppercase\">Features</h3>
\t\t\t\t</li>

\t\t\t</ul>
\t\t\t<!-- END SIDEBAR MENU -->
\t\t</div>
\t</div>
\t<!-- END SIDEBAR -->
\t<!-- BEGIN CONTENT -->
\t<div class=\"page-content-wrapper\">
\t\t<div class=\"page-content\">
<!-- TODO CONTENT -->
\t\t\t\t\t<div class=\"portlet box red-pink\">
\t\t\t\t\t\t<div class=\"portlet-title\">
\t\t\t\t\t\t\t";
        // line 177
        $this->displayBlock('title', $context, $blocks);
        // line 180
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 181
        $this->displayBlock('body', $context, $blocks);
        // line 184
        echo "\t\t\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class=\"page-footer\">
\t<div class=\"page-footer-inner\">
\t\t 2014 &copy; Metronic by keenthemes.
\t</div>
\t<div class=\"scroll-to-top\">
\t\t<i class=\"icon-arrow-up\"></i>
\t</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/layout/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/layout/scripts/quick-sidebar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/layout/scripts/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/pages/scripts/index.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/admin/pages/scripts/tasks.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   Index.init();
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
";
        
        $__internal_1f92bb9b6a4bbfce5104c4916dddd1091c704b74dd7caafa28ab995bd454b131->leave($__internal_1f92bb9b6a4bbfce5104c4916dddd1091c704b74dd7caafa28ab995bd454b131_prof);

    }

    // line 177
    public function block_title($context, array $blocks = array())
    {
        $__internal_3495bbfe954110e8aba702c5b1815211476072d406b318bd494f95a2b154c02c = $this->env->getExtension("native_profiler");
        $__internal_3495bbfe954110e8aba702c5b1815211476072d406b318bd494f95a2b154c02c->enter($__internal_3495bbfe954110e8aba702c5b1815211476072d406b318bd494f95a2b154c02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 178
        echo "
\t\t\t\t\t\t\t";
        
        $__internal_3495bbfe954110e8aba702c5b1815211476072d406b318bd494f95a2b154c02c->leave($__internal_3495bbfe954110e8aba702c5b1815211476072d406b318bd494f95a2b154c02c_prof);

    }

    // line 181
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0be925e2f36c17642d0b5661647cc4a05edf5e52fb66338af517063f3dc94a6 = $this->env->getExtension("native_profiler");
        $__internal_c0be925e2f36c17642d0b5661647cc4a05edf5e52fb66338af517063f3dc94a6->enter($__internal_c0be925e2f36c17642d0b5661647cc4a05edf5e52fb66338af517063f3dc94a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 182
        echo "\t\t\t\t\t\t\t\tContent default
\t\t\t\t\t\t";
        
        $__internal_c0be925e2f36c17642d0b5661647cc4a05edf5e52fb66338af517063f3dc94a6->leave($__internal_c0be925e2f36c17642d0b5661647cc4a05edf5e52fb66338af517063f3dc94a6_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 182,  383 => 181,  375 => 178,  369 => 177,  339 => 222,  335 => 221,  331 => 220,  327 => 219,  323 => 218,  319 => 217,  311 => 212,  307 => 211,  303 => 210,  299 => 209,  295 => 208,  291 => 207,  287 => 206,  283 => 205,  278 => 203,  274 => 202,  254 => 184,  252 => 181,  249 => 180,  247 => 177,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  80 => 28,  75 => 26,  68 => 22,  64 => 21,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html lang="en" class="no-js">*/
/* */
/* <head>*/
/* <meta charset="utf-8"/>*/
/* <title>Bufete | Dashboard</title>*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta content="width=device-width, initial-scale=1" name="viewport"/>*/
/* <meta content="" name="description"/>*/
/* <meta content="" name="author"/>*/
/* <!-- BEGIN GLOBAL MANDATORY STYLES -->*/
/* <link  href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all')}}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>*/
/* <!-- END GLOBAL MANDATORY STYLES -->*/
/* <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->*/
/* <link href="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{asset('assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css"/>*/
/* */
/* <!-- END PAGE LEVEL PLUGIN STYLES -->*/
/* <!-- BEGIN PAGE STYLES -->*/
/* <link href="{{asset('assets/admin/pages/css/tasks.css')}}" rel="stylesheet" type="text/css"/>*/
/* <!-- END PAGE STYLES -->*/
/* <link href="{{asset('assets/style.css')}}" rel="stylesheet" type="text/css"/>*/
/* <!-- BEGIN THEME STYLES -->*/
/* <link href="{{asset('assets/global/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css"/>*/
/* <link href="{{asset('assets/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{asset('assets/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{asset('assets/admin/layout/css/themes/darkblue.css')}}" rel="stylesheet" type="text/css" id="style_color"/>*/
/* <link href="{{asset('assets/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>*/
/* <!-- END THEME STYLES -->*/
/* <link rel="shortcut icon" href="favicon.ico"/>*/
/* </head>*/
/* */
/* <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">*/
/* <!-- BEGIN HEADER -->*/
/* <div class="page-header -i navbar navbar-fixed-top">*/
/* 	<!-- BEGIN HEADER INNER -->*/
/* 	<div class="page-header-inner">*/
/* 		<!-- BEGIN LOGO -->*/
/* 		<div class="page-logo">*/
/* 			<a href="index.html">*/
/* 			<img src="../../assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>*/
/* 			</a>*/
/* 			<div class="menu-toggler sidebar-toggler hide">*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- END LOGO -->*/
/* 		<!-- BEGIN RESPONSIVE MENU TOGGLER -->*/
/* 		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 		</a>*/
/* 		<!-- END RESPONSIVE MENU TOGGLER -->*/
/* 		<!-- BEGIN TOP NAVIGATION MENU -->*/
/* 		<div class="top-menu">*/
/* 			<ul class="nav navbar-nav pull-right">*/
/* */
/* */
/* 				<!-- BEGIN USER LOGIN DROPDOWN -->*/
/* 				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->*/
/* 				<li class="dropdown dropdown-user">*/
/* 					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/
/* 					<img alt="" class="img-circle" src="../../assets/admin/layout/img/avatar3_small.jpg"/>*/
/* 					<span class="username username-hide-on-mobile">*/
/* 					Nick </span>*/
/* 					<i class="fa fa-angle-down"></i>*/
/* 					</a>*/
/* 					<ul class="dropdown-menu dropdown-menu-default">*/
/* 						<li>*/
/* 							<a href="extra_profile.html">*/
/* 							<i class="icon-user"></i> My Profile </a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="page_calendar.html">*/
/* 							<i class="icon-calendar"></i> My Calendar </a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="inbox.html">*/
/* 							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">*/
/* 							3 </span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="page_todo.html">*/
/* 							<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">*/
/* 							7 </span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="divider">*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="extra_lock.html">*/
/* 							<i class="icon-lock"></i> Lock Screen </a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="login.html">*/
/* 							<i class="icon-key"></i> Log Out </a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</li>*/
/* 				<!-- END USER LOGIN DROPDOWN -->*/
/* */
/* 			</ul>*/
/* 		</div>*/
/* 		<!-- END TOP NAVIGATION MENU -->*/
/* 	</div>*/
/* 	<!-- END HEADER INNER -->*/
/* </div>*/
/* <!-- END HEADER -->*/
/* <div class="clearfix">*/
/* </div>*/
/* <!-- BEGIN CONTAINER -->*/
/* <div class="page-container">*/
/* 	<!-- BEGIN SIDEBAR -->*/
/* 	<div class="page-sidebar-wrapper">*/
/* 		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->*/
/* 		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->*/
/* 		<div class="page-sidebar navbar-collapse collapse">*/
/* 			<!-- BEGIN SIDEBAR MENU -->*/
/* */
/* 			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">*/
/* 				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->*/
/* 				<li class="sidebar-toggler-wrapper">*/
/* 					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->*/
/* 					<div class="sidebar-toggler">*/
/* 					</div>*/
/* 					<!-- END SIDEBAR TOGGLER BUTTON -->*/
/* 				</li>*/
/* 				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->*/
/* 				<li class="sidebar-search-wrapper">*/
/* 				</li><br>*/
/* 				<li class="start active open">*/
/* 					<a href="javascript:;">*/
/* 					<i class="icon-home"></i>*/
/* 					<span class="title">Dashboard</span>*/
/* 					<span class="selected"></span>*/
/* 					<span class="arrow open"></span>*/
/* 					</a>*/
/* 					<ul class="sub-menu">*/
/* 						<li class="active">*/
/* 							<a href="index.html">*/
/* 							<i class="icon-bar-chart"></i>*/
/* 							Default Dashboard</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="index_2.html">*/
/* 							<i class="icon-bulb"></i>*/
/* 							New Dashboard #1</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="index_3.html">*/
/* 							<i class="icon-graph"></i>*/
/* 							New Dashboard #2</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</li>*/
/* */
/* */
/* 				<li class="heading">*/
/* 					<h3 class="uppercase">Features</h3>*/
/* 				</li>*/
/* */
/* 			</ul>*/
/* 			<!-- END SIDEBAR MENU -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- END SIDEBAR -->*/
/* 	<!-- BEGIN CONTENT -->*/
/* 	<div class="page-content-wrapper">*/
/* 		<div class="page-content">*/
/* <!-- TODO CONTENT -->*/
/* 					<div class="portlet box red-pink">*/
/* 						<div class="portlet-title">*/
/* 							{% block title %}*/
/* */
/* 							{% endblock %}*/
/* 						</div>*/
/* 						{% block body %}*/
/* 								Content default*/
/* 						{% endblock %}*/
/* 					</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- END CONTENT -->*/
/* </div>*/
/* <!-- END CONTAINER -->*/
/* <!-- BEGIN FOOTER -->*/
/* <div class="page-footer">*/
/* 	<div class="page-footer-inner">*/
/* 		 2014 &copy; Metronic by keenthemes.*/
/* 	</div>*/
/* 	<div class="scroll-to-top">*/
/* 		<i class="icon-arrow-up"></i>*/
/* 	</div>*/
/* </div>*/
/* <!-- END FOOTER -->*/
/* <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->*/
/* */
/* <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>*/
/* <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->*/
/* <script src="{{asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>*/
/* <!-- END CORE PLUGINS -->*/
/* */
/* <!-- END PAGE LEVEL PLUGINS -->*/
/* <!-- BEGIN PAGE LEVEL SCRIPTS -->*/
/* <script src="{{asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/admin/pages/scripts/index.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assets/admin/pages/scripts/tasks.js')}}" type="text/javascript"></script>*/
/* <!-- END PAGE LEVEL SCRIPTS -->*/
/* <script>*/
/* jQuery(document).ready(function() {*/
/*    Metronic.init(); // init metronic core componets*/
/*    Layout.init(); // init layout*/
/*    QuickSidebar.init(); // init quick sidebar*/
/* Demo.init(); // init demo features*/
/*    Index.init();*/
/*    Index.initDashboardDaterange();*/
/*    Index.initJQVMAP(); // init index page's custom scripts*/
/*    Index.initCalendar(); // init index page's custom scripts*/
/*    Index.initCharts(); // init index page's custom scripts*/
/*    Index.initChat();*/
/*    Index.initMiniCharts();*/
/*    Tasks.initDashboardWidget();*/
/* });*/
/* </script>*/
/* <!-- END JAVASCRIPTS -->*/
/* </body>*/
/* <!-- END BODY -->*/
/* </html>*/
/* */
