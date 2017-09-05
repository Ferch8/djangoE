<?php

/* departamentos/index.html.twig */
class __TwigTemplate_86c7e29508bf1f7c188207e32c9ee3b35c94c02d5b1283d862fd55b39e1df850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "departamentos/index.html.twig", 1);
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
        $__internal_28cd620b446ea1acedd0f32b1b56ffbc461b46a668994b4d9b11b5445bb70329 = $this->env->getExtension("native_profiler");
        $__internal_28cd620b446ea1acedd0f32b1b56ffbc461b46a668994b4d9b11b5445bb70329->enter($__internal_28cd620b446ea1acedd0f32b1b56ffbc461b46a668994b4d9b11b5445bb70329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "departamentos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28cd620b446ea1acedd0f32b1b56ffbc461b46a668994b4d9b11b5445bb70329->leave($__internal_28cd620b446ea1acedd0f32b1b56ffbc461b46a668994b4d9b11b5445bb70329_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e8432cc6a9f8ac66ae80fa83d1b5fbaa1366b4e75b4eceb4bea37d4001dc188 = $this->env->getExtension("native_profiler");
        $__internal_4e8432cc6a9f8ac66ae80fa83d1b5fbaa1366b4e75b4eceb4bea37d4001dc188->enter($__internal_4e8432cc6a9f8ac66ae80fa83d1b5fbaa1366b4e75b4eceb4bea37d4001dc188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Listado de departamentos</h1>

    <table>
        <thead>
          <tr>
              <th>Id departamento</th>
              <th>Codigo Postal departamento</th>
              <th>Departamento</th>
              <th>Pais</th>
              <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departamentos"]) ? $context["departamentos"] : $this->getContext($context, "departamentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["departamento"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamentos_show", array("id" => $this->getAttribute($context["departamento"], "idDepartamento", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "idDepartamento", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "postalDepartamento", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "departamento", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["departamento"], "idPais", array()), "pais", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamentos_show", array("id" => $this->getAttribute($context["departamento"], "idDepartamento", array()))), "html", null, true);
            echo "\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamentos_edit", array("id" => $this->getAttribute($context["departamento"], "idDepartamento", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("departamentos_new");
        echo "\">Crear Nuevo departamento</a>
        </li>
    </ul>
";
        
        $__internal_4e8432cc6a9f8ac66ae80fa83d1b5fbaa1366b4e75b4eceb4bea37d4001dc188->leave($__internal_4e8432cc6a9f8ac66ae80fa83d1b5fbaa1366b4e75b4eceb4bea37d4001dc188_prof);

    }

    public function getTemplateName()
    {
        return "departamentos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Listado de departamentos</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*           <tr>*/
/*               <th>Id departamento</th>*/
/*               <th>Codigo Postal departamento</th>*/
/*               <th>Departamento</th>*/
/*               <th>Pais</th>*/
/*               <th>Opciones</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for departamento in departamentos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('departamentos_show', { 'id': departamento.idDepartamento }) }}">{{ departamento.idDepartamento }}</a></td>*/
/*                 <td>{{ departamento.postalDepartamento }}</td>*/
/*                 <td>{{ departamento.departamento }}</td>*/
/*                 <td>{{ departamento.idPais.pais }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('departamentos_show', { 'id': departamento.idDepartamento }) }}">Mostrar</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('departamentos_edit', { 'id': departamento.idDepartamento }) }}">Editar</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('departamentos_new') }}">Crear Nuevo departamento</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
