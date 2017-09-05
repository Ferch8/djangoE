<?php

/* personas/new.html.twig */
class __TwigTemplate_0c81b05bd1b2b6d133bc5e1f7ece7a0637a59aace695ab9e3390b21cc945950d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "personas/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_602e51a31de36d77ede10a77509853959ca3924e5de037caf7fdf6a87eb79fe9 = $this->env->getExtension("native_profiler");
        $__internal_602e51a31de36d77ede10a77509853959ca3924e5de037caf7fdf6a87eb79fe9->enter($__internal_602e51a31de36d77ede10a77509853959ca3924e5de037caf7fdf6a87eb79fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_602e51a31de36d77ede10a77509853959ca3924e5de037caf7fdf6a87eb79fe9->leave($__internal_602e51a31de36d77ede10a77509853959ca3924e5de037caf7fdf6a87eb79fe9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f468c5834a9f016a6b2e57f96d338aa8ed3234abdbb7f20726ba4da5b708c839 = $this->env->getExtension("native_profiler");
        $__internal_f468c5834a9f016a6b2e57f96d338aa8ed3234abdbb7f20726ba4da5b708c839->enter($__internal_f468c5834a9f016a6b2e57f96d338aa8ed3234abdbb7f20726ba4da5b708c839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Personas creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("personas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f468c5834a9f016a6b2e57f96d338aa8ed3234abdbb7f20726ba4da5b708c839->leave($__internal_f468c5834a9f016a6b2e57f96d338aa8ed3234abdbb7f20726ba4da5b708c839_prof);

    }

    public function getTemplateName()
    {
        return "personas/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Personas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('personas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
