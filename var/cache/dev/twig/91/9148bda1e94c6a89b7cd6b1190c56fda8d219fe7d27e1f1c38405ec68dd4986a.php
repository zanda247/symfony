<?php

/* @WebProfiler/Collector/cache.html.twig */
class __TwigTemplate_3c5469fd053755e100c1a38172383b0da547a12ffbf7d988f867250dbd0a7e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/cache.html.twig", 1);
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
        $__internal_a5922fa67aed083e9c336f764480ae2ee871158d3c3034279377090badb16c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5922fa67aed083e9c336f764480ae2ee871158d3c3034279377090badb16c2a->enter($__internal_a5922fa67aed083e9c336f764480ae2ee871158d3c3034279377090badb16c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $__internal_863304c8f841d3c5dff28c76a9a97ffb1c2f063d1e4f48f8d6186cba58d9635e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863304c8f841d3c5dff28c76a9a97ffb1c2f063d1e4f48f8d6186cba58d9635e->enter($__internal_863304c8f841d3c5dff28c76a9a97ffb1c2f063d1e4f48f8d6186cba58d9635e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5922fa67aed083e9c336f764480ae2ee871158d3c3034279377090badb16c2a->leave($__internal_a5922fa67aed083e9c336f764480ae2ee871158d3c3034279377090badb16c2a_prof);

        
        $__internal_863304c8f841d3c5dff28c76a9a97ffb1c2f063d1e4f48f8d6186cba58d9635e->leave($__internal_863304c8f841d3c5dff28c76a9a97ffb1c2f063d1e4f48f8d6186cba58d9635e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_321292cbce68730ded65cf6d112d80088de9a8c6114711ac4f98cfd3699dbad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321292cbce68730ded65cf6d112d80088de9a8c6114711ac4f98cfd3699dbad0->enter($__internal_321292cbce68730ded65cf6d112d80088de9a8c6114711ac4f98cfd3699dbad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1ed6caaaf16a0c8c292c2cb25db1ec37f43ef5c3f4e0c0854ade6e86cf418dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed6caaaf16a0c8c292c2cb25db1ec37f43ef5c3f4e0c0854ade6e86cf418dd6->enter($__internal_1ed6caaaf16a0c8c292c2cb25db1ec37f43ef5c3f4e0c0854ade6e86cf418dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/cache.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start();
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
            // line 21
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "hits", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "reads", array()), "html", null, true);
            if ( !(null === $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "hit_read_ratio", array()))) {
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "hit_read_ratio", array()), "html", null, true);
                echo "%)";
            }
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "writes", array()), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
        ";
            // line 33
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
            echo "
    ";
        }
        
        $__internal_1ed6caaaf16a0c8c292c2cb25db1ec37f43ef5c3f4e0c0854ade6e86cf418dd6->leave($__internal_1ed6caaaf16a0c8c292c2cb25db1ec37f43ef5c3f4e0c0854ade6e86cf418dd6_prof);

        
        $__internal_321292cbce68730ded65cf6d112d80088de9a8c6114711ac4f98cfd3699dbad0->leave($__internal_321292cbce68730ded65cf6d112d80088de9a8c6114711ac4f98cfd3699dbad0_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dccf389ab7eb035d5d2de71079c305f54f914fafda459dbca822b44c582fab72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dccf389ab7eb035d5d2de71079c305f54f914fafda459dbca822b44c582fab72->enter($__internal_dccf389ab7eb035d5d2de71079c305f54f914fafda459dbca822b44c582fab72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d199aad323630588f89bddf81195f2dfd0b617409f87c58a8104402ddd7ce59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d199aad323630588f89bddf81195f2dfd0b617409f87c58a8104402ddd7ce59->enter($__internal_6d199aad323630588f89bddf81195f2dfd0b617409f87c58a8104402ddd7ce59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "    <span class=\"label ";
        echo ((($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()) == 0)) ? ("disabled") : (""));
        echo "\">
    <span class=\"icon\">
        ";
        // line 40
        echo twig_include($this->env, $context, "@WebProfiler/Icon/cache.svg");
        echo "
    </span>
    <strong>Cache</strong>
</span>
";
        
        $__internal_6d199aad323630588f89bddf81195f2dfd0b617409f87c58a8104402ddd7ce59->leave($__internal_6d199aad323630588f89bddf81195f2dfd0b617409f87c58a8104402ddd7ce59_prof);

        
        $__internal_dccf389ab7eb035d5d2de71079c305f54f914fafda459dbca822b44c582fab72->leave($__internal_dccf389ab7eb035d5d2de71079c305f54f914fafda459dbca822b44c582fab72_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_827a07f26991c17fe575a7882f94e085a2f480acca4c7760fd4857bf7ffd9cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827a07f26991c17fe575a7882f94e085a2f480acca4c7760fd4857bf7ffd9cda->enter($__internal_827a07f26991c17fe575a7882f94e085a2f480acca4c7760fd4857bf7ffd9cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_793fd719383abeaa1023eec3617108fa3aeeb534a5be437fc653f73e41679cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793fd719383abeaa1023eec3617108fa3aeeb534a5be437fc653f73e41679cd6->enter($__internal_793fd719383abeaa1023eec3617108fa3aeeb534a5be437fc653f73e41679cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Cache</h2>

    ";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()) == 0)) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No cache calls were made.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total calls</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 60
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "reads", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total reads</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "writes", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total writes</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "deletes", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total deletes</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "hits", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "misses", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">
                    ";
            // line 87
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array())))) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array())) : (0)), "html", null, true);
            echo " <span class=\"unit\">%</span>
                </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()));
            foreach ($context['_seq'] as $context["name"] => $context["calls"]) {
                // line 96
                echo "                <div class=\"tab ";
                echo (((twig_length_filter($this->env, $context["calls"]) == 0)) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 97
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statistics", array()), $context["name"], array(), "array"), "calls", array()), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        ";
                // line 100
                if ((twig_length_filter($this->env, $context["calls"]) == 0)) {
                    // line 101
                    echo "                            <div class=\"empty\">
                                <p>No calls were made for ";
                    // line 102
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " pool.</p>
                            </div>
                        ";
                } else {
                    // line 105
                    echo "                            <h4>Metrics</h4>
                            <div class=\"metrics\">
                                ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statistics", array()), $context["name"], array(), "array"));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 108
                        echo "                                    <div class=\"metric\">
                                        <span class=\"value\">
                                            ";
                        // line 110
                        if (($context["key"] == "time")) {
                            // line 111
                            echo "                                                ";
                            echo twig_escape_filter($this->env, sprintf("%0.2f", (1000 * $this->getAttribute($context["value"], "value", array()))), "html", null, true);
                            echo " <span class=\"unit\">ms</span>
                                            ";
                        } elseif ((                        // line 112
$context["key"] == "hit_read_ratio")) {
                            // line 113
                            echo "                                                ";
                            echo twig_escape_filter($this->env, ((($this->getAttribute($context["value"], "value", array(), "any", true, true) &&  !(null === $this->getAttribute($context["value"], "value", array())))) ? ($this->getAttribute($context["value"], "value", array())) : (0)), "html", null, true);
                            echo " <span class=\"unit\">%</span>
                                            ";
                        } else {
                            // line 115
                            echo "                                                ";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "
                                            ";
                        }
                        // line 117
                        echo "                                        </span>
                                        <span class=\"label\">";
                        // line 118
                        echo twig_escape_filter($this->env, ((($context["key"] == "hit_read_ratio")) ? ("Hits/reads") : (twig_capitalize_string_filter($this->env, $context["key"]))), "html", null, true);
                        echo "</span>
                                    </div>
                                    ";
                        // line 120
                        if ((($context["key"] == "time") || ($context["key"] == "deletes"))) {
                            // line 121
                            echo "                                        <div class=\"metric-divider\"></div>
                                    ";
                        }
                        // line 123
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "                            </div>

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["calls"]);
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                        // line 138
                        echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                        // line 139
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "</td>
                                        <td class=\"nowrap\">";
                        // line 140
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (($this->getAttribute($context["call"], "end", array()) - $this->getAttribute($context["call"], "start", array())) * 1000)), "html", null, true);
                        echo " ms</td>
                                        <td class=\"nowrap\">";
                        // line 141
                        echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "name", array()), "html", null, true);
                        echo "()</td>
                                        <td>";
                        // line 142
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($context["call"], "value", array()), "result", array()), 2));
                        echo "</td>
                                    </tr>
                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 148
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['calls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "        </div>
    ";
        }
        
        $__internal_793fd719383abeaa1023eec3617108fa3aeeb534a5be437fc653f73e41679cd6->leave($__internal_793fd719383abeaa1023eec3617108fa3aeeb534a5be437fc653f73e41679cd6_prof);

        
        $__internal_827a07f26991c17fe575a7882f94e085a2f480acca4c7760fd4857bf7ffd9cda->leave($__internal_827a07f26991c17fe575a7882f94e085a2f480acca4c7760fd4857bf7ffd9cda_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 151,  400 => 148,  395 => 145,  378 => 142,  374 => 141,  370 => 140,  366 => 139,  363 => 138,  346 => 137,  331 => 124,  325 => 123,  321 => 121,  319 => 120,  314 => 118,  311 => 117,  305 => 115,  299 => 113,  297 => 112,  292 => 111,  290 => 110,  286 => 108,  282 => 107,  278 => 105,  272 => 102,  269 => 101,  267 => 100,  259 => 97,  254 => 96,  250 => 95,  239 => 87,  231 => 82,  224 => 78,  216 => 73,  209 => 69,  202 => 65,  194 => 60,  187 => 56,  183 => 54,  177 => 50,  175 => 49,  171 => 47,  162 => 46,  147 => 40,  141 => 38,  132 => 37,  119 => 33,  116 => 32,  110 => 29,  96 => 25,  89 => 21,  82 => 17,  78 => 15,  75 => 14,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.totals.calls > 0 %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/cache.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.totals.calls }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.totals.time * 1000) }}</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        {% endset %}
        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>{{ collector.totals.calls }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ '%0.2f'|format(collector.totals.time * 1000) }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>{{ collector.totals.hits }} / {{ collector.totals.reads }}{% if collector.totals.hit_read_ratio is not null %} ({{ collector.totals.hit_read_ratio }}%){% endif %}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>{{ collector.totals.writes }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.totals.calls == 0 ? 'disabled' }}\">
    <span class=\"icon\">
        {{ include('@WebProfiler/Icon/cache.svg') }}
    </span>
    <strong>Cache</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Cache</h2>

    {% if collector.totals.calls == 0 %}
        <div class=\"empty\">
            <p>No cache calls were made.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.calls }}</span>
                <span class=\"label\">Total calls</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.totals.time * 1000) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.reads }}</span>
                <span class=\"label\">Total reads</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.writes }}</span>
                <span class=\"label\">Total writes</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.deletes }}</span>
                <span class=\"label\">Total deletes</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.hits }}</span>
                <span class=\"label\">Total hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.misses }}</span>
                <span class=\"label\">Total misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">
                    {{ collector.totals.hit_read_ratio ?? 0 }} <span class=\"unit\">%</span>
                </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            {% for name, calls in collector.calls %}
                <div class=\"tab {{ calls|length == 0 ? 'disabled' }}\">
                    <h3 class=\"tab-title\">{{ name }} <span class=\"badge\">{{ collector.statistics[name].calls }}</span></h3>

                    <div class=\"tab-content\">
                        {% if calls|length == 0 %}
                            <div class=\"empty\">
                                <p>No calls were made for {{ name }} pool.</p>
                            </div>
                        {% else %}
                            <h4>Metrics</h4>
                            <div class=\"metrics\">
                                {% for key, value in collector.statistics[name] %}
                                    <div class=\"metric\">
                                        <span class=\"value\">
                                            {% if key == 'time' %}
                                                {{ '%0.2f'|format(1000 * value.value) }} <span class=\"unit\">ms</span>
                                            {% elseif key == 'hit_read_ratio' %}
                                                {{ value.value ?? 0 }} <span class=\"unit\">%</span>
                                            {% else %}
                                                {{ value }}
                                            {% endif %}
                                        </span>
                                        <span class=\"label\">{{ key == 'hit_read_ratio' ? 'Hits/reads' : key|capitalize }}</span>
                                    </div>
                                    {% if key == 'time' or key == 'deletes' %}
                                        <div class=\"metric-divider\"></div>
                                    {% endif %}
                                {% endfor %}
                            </div>

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for call in calls %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"nowrap\">{{ '%0.2f'|format((call.end - call.start) * 1000) }} ms</td>
                                        <td class=\"nowrap\">{{ call.name }}()</td>
                                        <td>{{ profiler_dump(call.value.result, maxDepth=2) }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/cache.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/MyAPI_Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/cache.html.twig");
    }
}
