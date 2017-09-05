<?php

/* base.html.twig */
class __TwigTemplate_23f83b10f3699ebab8713ff1fadc071f20f340906b8147df362348c57c2718d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cf6c6ec47a1298ded8f513785de8ef36e35c38ba3536eca0a8262a85c2cbd61 = $this->env->getExtension("native_profiler");
        $__internal_9cf6c6ec47a1298ded8f513785de8ef36e35c38ba3536eca0a8262a85c2cbd61->enter($__internal_9cf6c6ec47a1298ded8f513785de8ef36e35c38ba3536eca0a8262a85c2cbd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9cf6c6ec47a1298ded8f513785de8ef36e35c38ba3536eca0a8262a85c2cbd61->leave($__internal_9cf6c6ec47a1298ded8f513785de8ef36e35c38ba3536eca0a8262a85c2cbd61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6cb9ccfde6301c17bc4c09ff2e83e0fdbbdbec09119f0fd8e031cf860740397 = $this->env->getExtension("native_profiler");
        $__internal_d6cb9ccfde6301c17bc4c09ff2e83e0fdbbdbec09119f0fd8e031cf860740397->enter($__internal_d6cb9ccfde6301c17bc4c09ff2e83e0fdbbdbec09119f0fd8e031cf860740397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d6cb9ccfde6301c17bc4c09ff2e83e0fdbbdbec09119f0fd8e031cf860740397->leave($__internal_d6cb9ccfde6301c17bc4c09ff2e83e0fdbbdbec09119f0fd8e031cf860740397_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_525cf5871601e351d5e19d8eb410264e3f3b8369fe5575007323bb7ce8007796 = $this->env->getExtension("native_profiler");
        $__internal_525cf5871601e351d5e19d8eb410264e3f3b8369fe5575007323bb7ce8007796->enter($__internal_525cf5871601e351d5e19d8eb410264e3f3b8369fe5575007323bb7ce8007796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_525cf5871601e351d5e19d8eb410264e3f3b8369fe5575007323bb7ce8007796->leave($__internal_525cf5871601e351d5e19d8eb410264e3f3b8369fe5575007323bb7ce8007796_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3979000ec1c25e40c9dc3941641cd8e805e2766235a92313cbb39547c740a2af = $this->env->getExtension("native_profiler");
        $__internal_3979000ec1c25e40c9dc3941641cd8e805e2766235a92313cbb39547c740a2af->enter($__internal_3979000ec1c25e40c9dc3941641cd8e805e2766235a92313cbb39547c740a2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3979000ec1c25e40c9dc3941641cd8e805e2766235a92313cbb39547c740a2af->leave($__internal_3979000ec1c25e40c9dc3941641cd8e805e2766235a92313cbb39547c740a2af_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9604106898eaf033a518484787cf58a17d66a6364916d38caeef1607d32363ba = $this->env->getExtension("native_profiler");
        $__internal_9604106898eaf033a518484787cf58a17d66a6364916d38caeef1607d32363ba->enter($__internal_9604106898eaf033a518484787cf58a17d66a6364916d38caeef1607d32363ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9604106898eaf033a518484787cf58a17d66a6364916d38caeef1607d32363ba->leave($__internal_9604106898eaf033a518484787cf58a17d66a6364916d38caeef1607d32363ba_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
