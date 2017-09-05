<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1b5e18e55a132bf2d8285fe3cf0d1b4e349c2070b2ed88cf98ce4d92aca9c208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4961a6733d6e2e6a1f8936b903c94bfb26f77e5076c846232124d90df950997 = $this->env->getExtension("native_profiler");
        $__internal_a4961a6733d6e2e6a1f8936b903c94bfb26f77e5076c846232124d90df950997->enter($__internal_a4961a6733d6e2e6a1f8936b903c94bfb26f77e5076c846232124d90df950997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4961a6733d6e2e6a1f8936b903c94bfb26f77e5076c846232124d90df950997->leave($__internal_a4961a6733d6e2e6a1f8936b903c94bfb26f77e5076c846232124d90df950997_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1aa505dd794ce5974dff93b64a8c849e2bba1c63a8af95eacac8fd7db0534da7 = $this->env->getExtension("native_profiler");
        $__internal_1aa505dd794ce5974dff93b64a8c849e2bba1c63a8af95eacac8fd7db0534da7->enter($__internal_1aa505dd794ce5974dff93b64a8c849e2bba1c63a8af95eacac8fd7db0534da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1aa505dd794ce5974dff93b64a8c849e2bba1c63a8af95eacac8fd7db0534da7->leave($__internal_1aa505dd794ce5974dff93b64a8c849e2bba1c63a8af95eacac8fd7db0534da7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e94aa8eee95c82344f7b834bdebb9ce1cb1d4cfed41081a6df886b3c835add90 = $this->env->getExtension("native_profiler");
        $__internal_e94aa8eee95c82344f7b834bdebb9ce1cb1d4cfed41081a6df886b3c835add90->enter($__internal_e94aa8eee95c82344f7b834bdebb9ce1cb1d4cfed41081a6df886b3c835add90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e94aa8eee95c82344f7b834bdebb9ce1cb1d4cfed41081a6df886b3c835add90->leave($__internal_e94aa8eee95c82344f7b834bdebb9ce1cb1d4cfed41081a6df886b3c835add90_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7503a5a00734796ed4576b3f256d91305e4a6264c3b6f0a4dd85761f998c9710 = $this->env->getExtension("native_profiler");
        $__internal_7503a5a00734796ed4576b3f256d91305e4a6264c3b6f0a4dd85761f998c9710->enter($__internal_7503a5a00734796ed4576b3f256d91305e4a6264c3b6f0a4dd85761f998c9710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7503a5a00734796ed4576b3f256d91305e4a6264c3b6f0a4dd85761f998c9710->leave($__internal_7503a5a00734796ed4576b3f256d91305e4a6264c3b6f0a4dd85761f998c9710_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
