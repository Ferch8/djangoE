<?php

/* prestaciones/new.html.twig */
class __TwigTemplate_1340d04198caac4fa48834e5468f5864f50fece53ce003deb5caa59c5dfe6366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "prestaciones/new.html.twig", 1);
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
        $__internal_0169fa6d47395f72394faf2488b231d59652c6dbe26e2e086dad5a00c6b37542 = $this->env->getExtension("native_profiler");
        $__internal_0169fa6d47395f72394faf2488b231d59652c6dbe26e2e086dad5a00c6b37542->enter($__internal_0169fa6d47395f72394faf2488b231d59652c6dbe26e2e086dad5a00c6b37542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prestaciones/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0169fa6d47395f72394faf2488b231d59652c6dbe26e2e086dad5a00c6b37542->leave($__internal_0169fa6d47395f72394faf2488b231d59652c6dbe26e2e086dad5a00c6b37542_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eb50f4fa69f50e156fcbf7c441a5bcffdf1965bde54d26a806a343d4fb5033d = $this->env->getExtension("native_profiler");
        $__internal_5eb50f4fa69f50e156fcbf7c441a5bcffdf1965bde54d26a806a343d4fb5033d->enter($__internal_5eb50f4fa69f50e156fcbf7c441a5bcffdf1965bde54d26a806a343d4fb5033d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crear Prestacion</h1>

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
        echo $this->env->getExtension('routing')->getPath("prestaciones_index");
        echo "\">Regresar a la lista</a>
        </li>
    </ul>
";
        
        $__internal_5eb50f4fa69f50e156fcbf7c441a5bcffdf1965bde54d26a806a343d4fb5033d->leave($__internal_5eb50f4fa69f50e156fcbf7c441a5bcffdf1965bde54d26a806a343d4fb5033d_prof);

    }

    public function getTemplateName()
    {
        return "prestaciones/new.html.twig";
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
/*     <h1>Crear Prestacion</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('prestaciones_index') }}">Regresar a la lista</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
