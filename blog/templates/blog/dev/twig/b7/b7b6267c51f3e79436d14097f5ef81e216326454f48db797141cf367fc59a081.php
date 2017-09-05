<?php

/* bufetes/new.html.twig */
class __TwigTemplate_babe9967af2f9e3453b12301e4d5b36de62e2cb3fe63e23fbe3ad7564ec58e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bufetes/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_366b47438baad8c6eddb00e78eae776d81f28acfb800f77d5e866406785ae327 = $this->env->getExtension("native_profiler");
        $__internal_366b47438baad8c6eddb00e78eae776d81f28acfb800f77d5e866406785ae327->enter($__internal_366b47438baad8c6eddb00e78eae776d81f28acfb800f77d5e866406785ae327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bufetes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366b47438baad8c6eddb00e78eae776d81f28acfb800f77d5e866406785ae327->leave($__internal_366b47438baad8c6eddb00e78eae776d81f28acfb800f77d5e866406785ae327_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ba03c980675f4ef7eacd4649f363aebc5ead4f724cf3e65a99d8ea35c302fda = $this->env->getExtension("native_profiler");
        $__internal_2ba03c980675f4ef7eacd4649f363aebc5ead4f724cf3e65a99d8ea35c302fda->enter($__internal_2ba03c980675f4ef7eacd4649f363aebc5ead4f724cf3e65a99d8ea35c302fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crear Bufete</h1>

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
        echo $this->env->getExtension('routing')->getPath("bufetes_index");
        echo "\">Regresar a la Lista</a>
        </li>
    </ul>
";
        
        $__internal_2ba03c980675f4ef7eacd4649f363aebc5ead4f724cf3e65a99d8ea35c302fda->leave($__internal_2ba03c980675f4ef7eacd4649f363aebc5ead4f724cf3e65a99d8ea35c302fda_prof);

    }

    public function getTemplateName()
    {
        return "bufetes/new.html.twig";
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
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Crear Bufete</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('bufetes_index') }}">Regresar a la Lista</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
