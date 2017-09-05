<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_aa0203d4258038440cf402ab52c2b57ee31539a7290fa34e6204316e295d596d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d21dd53f5fccc76c432aa013eb1e3ad59dc8c0701597ec668a2abe6406e00d37 = $this->env->getExtension("native_profiler");
        $__internal_d21dd53f5fccc76c432aa013eb1e3ad59dc8c0701597ec668a2abe6406e00d37->enter($__internal_d21dd53f5fccc76c432aa013eb1e3ad59dc8c0701597ec668a2abe6406e00d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d21dd53f5fccc76c432aa013eb1e3ad59dc8c0701597ec668a2abe6406e00d37->leave($__internal_d21dd53f5fccc76c432aa013eb1e3ad59dc8c0701597ec668a2abe6406e00d37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95a0000bf650bfa158ee7d721f808cdec804132eae1889130a85de7744e0a7a0 = $this->env->getExtension("native_profiler");
        $__internal_95a0000bf650bfa158ee7d721f808cdec804132eae1889130a85de7744e0a7a0->enter($__internal_95a0000bf650bfa158ee7d721f808cdec804132eae1889130a85de7744e0a7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_95a0000bf650bfa158ee7d721f808cdec804132eae1889130a85de7744e0a7a0->leave($__internal_95a0000bf650bfa158ee7d721f808cdec804132eae1889130a85de7744e0a7a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a07e96beee1ea0398bcae74a816b9861a39a3f4d0f0baa397ed61ce88b41bd8f = $this->env->getExtension("native_profiler");
        $__internal_a07e96beee1ea0398bcae74a816b9861a39a3f4d0f0baa397ed61ce88b41bd8f->enter($__internal_a07e96beee1ea0398bcae74a816b9861a39a3f4d0f0baa397ed61ce88b41bd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a07e96beee1ea0398bcae74a816b9861a39a3f4d0f0baa397ed61ce88b41bd8f->leave($__internal_a07e96beee1ea0398bcae74a816b9861a39a3f4d0f0baa397ed61ce88b41bd8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_86ea806eccc31fbd5217789f425b2fb17a415e7a9a90a32f6661b68c8582986e = $this->env->getExtension("native_profiler");
        $__internal_86ea806eccc31fbd5217789f425b2fb17a415e7a9a90a32f6661b68c8582986e->enter($__internal_86ea806eccc31fbd5217789f425b2fb17a415e7a9a90a32f6661b68c8582986e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_86ea806eccc31fbd5217789f425b2fb17a415e7a9a90a32f6661b68c8582986e->leave($__internal_86ea806eccc31fbd5217789f425b2fb17a415e7a9a90a32f6661b68c8582986e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
