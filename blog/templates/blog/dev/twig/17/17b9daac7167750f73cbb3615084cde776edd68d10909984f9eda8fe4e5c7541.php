<?php

/* casos/new.html.twig */
class __TwigTemplate_7d76fcaec282e79f7f8ef2433db91bf9814eb9475ad6b524ad983290261d4ab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "casos/new.html.twig", 1);
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
        $__internal_77e2096dda24e2364ec0d2bc0709c7b9c420bbe71576aa6c2f55fb1dd3e9c737 = $this->env->getExtension("native_profiler");
        $__internal_77e2096dda24e2364ec0d2bc0709c7b9c420bbe71576aa6c2f55fb1dd3e9c737->enter($__internal_77e2096dda24e2364ec0d2bc0709c7b9c420bbe71576aa6c2f55fb1dd3e9c737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "casos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77e2096dda24e2364ec0d2bc0709c7b9c420bbe71576aa6c2f55fb1dd3e9c737->leave($__internal_77e2096dda24e2364ec0d2bc0709c7b9c420bbe71576aa6c2f55fb1dd3e9c737_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_072d5093d9b13ee32c71ff7dbfd8f062125744820ca6159e12f695be53f27fd1 = $this->env->getExtension("native_profiler");
        $__internal_072d5093d9b13ee32c71ff7dbfd8f062125744820ca6159e12f695be53f27fd1->enter($__internal_072d5093d9b13ee32c71ff7dbfd8f062125744820ca6159e12f695be53f27fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Casos creation</h1>

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

    ";
        // line 11
        if (((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")) != null)) {
            // line 12
            echo "        <h4> ";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo " </h4>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        echo "
    ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nocaso"]) ? $context["nocaso"] : $this->getContext($context, "nocaso")), "html", null, true);
        echo "

    ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["pruebas"]) ? $context["pruebas"] : $this->getContext($context, "pruebas")), "html", null, true);
        echo "
    ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["asignatario"]) ? $context["asignatario"] : $this->getContext($context, "asignatario")), "html", null, true);
        echo "
    ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["estado"]) ? $context["estado"] : $this->getContext($context, "estado")), "html", null, true);
        echo "
    ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["tipoasunto"]) ? $context["tipoasunto"] : $this->getContext($context, "tipoasunto")), "html", null, true);
        echo "
    ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "html", null, true);
        echo "
    ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["demandado"]) ? $context["demandado"] : $this->getContext($context, "demandado")), "html", null, true);
        echo "

    ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["est"]) ? $context["est"] : $this->getContext($context, "est")), "html", null, true);
        echo "
    ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["tribunal"]) ? $context["tribunal"] : $this->getContext($context, "tribunal")), "html", null, true);
        echo "
    ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["asesor"]) ? $context["asesor"] : $this->getContext($context, "asesor")), "html", null, true);
        echo "
    ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "html", null, true);
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("casos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_072d5093d9b13ee32c71ff7dbfd8f062125744820ca6159e12f695be53f27fd1->leave($__internal_072d5093d9b13ee32c71ff7dbfd8f062125744820ca6159e12f695be53f27fd1_prof);

    }

    public function getTemplateName()
    {
        return "casos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  115 => 28,  111 => 27,  107 => 26,  103 => 25,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  73 => 16,  69 => 15,  66 => 14,  60 => 12,  58 => 11,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Casos creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     {% if mensaje != null %}*/
/*         <h4> {{ mensaje }} </h4>*/
/*     {% endif %}*/
/* */
/*     {{ dump(data) }}*/
/*     {{nocaso}}*/
/* */
/*     {{pruebas}}*/
/*     {{asignatario}}*/
/*     {{estado}}*/
/*     {{tipoasunto}}*/
/*     {{demandante}}*/
/*     {{demandado}}*/
/* */
/*     {{est}}*/
/*     {{tribunal}}*/
/*     {{asesor}}*/
/*     {{tipo}}*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('casos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
