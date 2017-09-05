<?php

/* trabajos/new.html.twig */
class __TwigTemplate_261d2466bd6bc4166f45453d287b9a9c3fc7d073825e9bc18a403415971e2bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "trabajos/new.html.twig", 1);
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
        $__internal_2d94d9d505265008862bc2cfca483839f8bdfb214bafa6d27ea477921d3d1ad0 = $this->env->getExtension("native_profiler");
        $__internal_2d94d9d505265008862bc2cfca483839f8bdfb214bafa6d27ea477921d3d1ad0->enter($__internal_2d94d9d505265008862bc2cfca483839f8bdfb214bafa6d27ea477921d3d1ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trabajos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d94d9d505265008862bc2cfca483839f8bdfb214bafa6d27ea477921d3d1ad0->leave($__internal_2d94d9d505265008862bc2cfca483839f8bdfb214bafa6d27ea477921d3d1ad0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c960726ff6c9677414211a45d2c07d59fcdf4bb2b2be7d765b20b15607d8a423 = $this->env->getExtension("native_profiler");
        $__internal_c960726ff6c9677414211a45d2c07d59fcdf4bb2b2be7d765b20b15607d8a423->enter($__internal_c960726ff6c9677414211a45d2c07d59fcdf4bb2b2be7d765b20b15607d8a423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crear Nuevo Trabajo</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Crear\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("trabajos_index");
        echo "\">Regresar al Listado</a>
        </li>
    </ul>
";
        
        $__internal_c960726ff6c9677414211a45d2c07d59fcdf4bb2b2be7d765b20b15607d8a423->leave($__internal_c960726ff6c9677414211a45d2c07d59fcdf4bb2b2be7d765b20b15607d8a423_prof);

    }

    public function getTemplateName()
    {
        return "trabajos/new.html.twig";
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
/*     <h1>Crear Nuevo Trabajo</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Crear" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('trabajos_index') }}">Regresar al Listado</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
