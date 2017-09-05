<?php

/* tribunales/new.html.twig */
class __TwigTemplate_9f2662193c7d563b2dba0479c4c1acc88e2f7742d89245daafe142ba34571f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tribunales/new.html.twig", 1);
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
        $__internal_019c2cbd831cef816baa5a4a196daea80f77714e2cd4f6f2678e6ccabf50e245 = $this->env->getExtension("native_profiler");
        $__internal_019c2cbd831cef816baa5a4a196daea80f77714e2cd4f6f2678e6ccabf50e245->enter($__internal_019c2cbd831cef816baa5a4a196daea80f77714e2cd4f6f2678e6ccabf50e245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tribunales/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_019c2cbd831cef816baa5a4a196daea80f77714e2cd4f6f2678e6ccabf50e245->leave($__internal_019c2cbd831cef816baa5a4a196daea80f77714e2cd4f6f2678e6ccabf50e245_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8deb00e23b96c615639b32b52fb95656b70d54af1f8eda63df8129414f4de3dd = $this->env->getExtension("native_profiler");
        $__internal_8deb00e23b96c615639b32b52fb95656b70d54af1f8eda63df8129414f4de3dd->enter($__internal_8deb00e23b96c615639b32b52fb95656b70d54af1f8eda63df8129414f4de3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crear Tribunal</h1>

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
        echo $this->env->getExtension('routing')->getPath("tribunales_index");
        echo "\">Regresar a la lista</a>
        </li>
    </ul>
";
        
        $__internal_8deb00e23b96c615639b32b52fb95656b70d54af1f8eda63df8129414f4de3dd->leave($__internal_8deb00e23b96c615639b32b52fb95656b70d54af1f8eda63df8129414f4de3dd_prof);

    }

    public function getTemplateName()
    {
        return "tribunales/new.html.twig";
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
/*     <h1>Crear Tribunal</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tribunales_index') }}">Regresar a la lista</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
