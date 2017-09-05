<?php

/* estudiantes/new.html.twig */
class __TwigTemplate_175ea6efd79666900ea7387483eaa212aa8d6b3c107d80d5e07aa1beeae8f5ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estudiantes/new.html.twig", 1);
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
        $__internal_8fa5b18a2080964363f90f5a468af558f20893d0e3ea03d2fc275d3a73e4c2ad = $this->env->getExtension("native_profiler");
        $__internal_8fa5b18a2080964363f90f5a468af558f20893d0e3ea03d2fc275d3a73e4c2ad->enter($__internal_8fa5b18a2080964363f90f5a468af558f20893d0e3ea03d2fc275d3a73e4c2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa5b18a2080964363f90f5a468af558f20893d0e3ea03d2fc275d3a73e4c2ad->leave($__internal_8fa5b18a2080964363f90f5a468af558f20893d0e3ea03d2fc275d3a73e4c2ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65d6ce37c7342afa48d1fc79bf3c23523600f399206fe4740ef632369ea7fbe2 = $this->env->getExtension("native_profiler");
        $__internal_65d6ce37c7342afa48d1fc79bf3c23523600f399206fe4740ef632369ea7fbe2->enter($__internal_65d6ce37c7342afa48d1fc79bf3c23523600f399206fe4740ef632369ea7fbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_65d6ce37c7342afa48d1fc79bf3c23523600f399206fe4740ef632369ea7fbe2->leave($__internal_65d6ce37c7342afa48d1fc79bf3c23523600f399206fe4740ef632369ea7fbe2_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/new.html.twig";
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
/*     <h1>Estudiantes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
