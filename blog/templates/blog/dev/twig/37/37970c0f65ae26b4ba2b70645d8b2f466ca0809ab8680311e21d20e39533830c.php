<?php

/* estadosciviles/new.html.twig */
class __TwigTemplate_7b7feb72b4e78babacd8964f98e874d4f1f21f5cad6bb79616f7a59c0592097d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "estadosciviles/new.html.twig", 1);
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
        $__internal_e8015df6775a26cfcc275520eb0cc59e8e80de19d30bfe264822fd1b35626ae3 = $this->env->getExtension("native_profiler");
        $__internal_e8015df6775a26cfcc275520eb0cc59e8e80de19d30bfe264822fd1b35626ae3->enter($__internal_e8015df6775a26cfcc275520eb0cc59e8e80de19d30bfe264822fd1b35626ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estadosciviles/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8015df6775a26cfcc275520eb0cc59e8e80de19d30bfe264822fd1b35626ae3->leave($__internal_e8015df6775a26cfcc275520eb0cc59e8e80de19d30bfe264822fd1b35626ae3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_196964a6a1231f3d0738f2467b72741677c2cb53830abd246c087b039c2a2dbf = $this->env->getExtension("native_profiler");
        $__internal_196964a6a1231f3d0738f2467b72741677c2cb53830abd246c087b039c2a2dbf->enter($__internal_196964a6a1231f3d0738f2467b72741677c2cb53830abd246c087b039c2a2dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <h1>Crear Estados civiles</h1>

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
        echo $this->env->getExtension('routing')->getPath("estadosciviles_index");
        echo "\">Regresar al Listado</a>
        </li>
    </ul>
";
        
        $__internal_196964a6a1231f3d0738f2467b72741677c2cb53830abd246c087b039c2a2dbf->leave($__internal_196964a6a1231f3d0738f2467b72741677c2cb53830abd246c087b039c2a2dbf_prof);

    }

    public function getTemplateName()
    {
        return "estadosciviles/new.html.twig";
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
/*       <h1>Crear Estados civiles</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Crear" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estadosciviles_index') }}">Regresar al Listado</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
