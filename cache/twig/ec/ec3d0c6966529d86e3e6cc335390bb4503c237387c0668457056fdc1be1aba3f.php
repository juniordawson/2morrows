<?php

/* blog.html.twig */
class __TwigTemplate_afea790c8c2e645ebe33ed5afd4ae98443db4a16a4b03a380047b9a6927a1b41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["default_collection"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "ofType", array(0 => "item"), "method");
        // line 8
        $context["options"] = array("items" => array("@self.children" => "/"), "limit" => 5, "order" => array("by" => "date", "dir" => "desc"), "pagination" => true);
        // line 9
        $context["art_collections"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array(0 => ($context["options"] ?? null)), "method"), "ofType", array(0 => "item"), "method");
        // line 11
        $context["fold_collections"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array(0 => ($context["options"] ?? null)), "method"), "ofType", array(0 => "blog"), "method");
        // line 14
        $context["hero_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "        <header class=\"text-center content-section background-img colored-background\" style=\"background-image:url(";
        echo $this->getAttribute(($context["hero_image"] ?? null), "url", array());
        echo ")\">
            <div class=\"small-container\">
              <h1>
                    ";
        // line 20
        $context["parentTitle"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array());
        // line 21
        echo "                    ";
        if ((($context["parentTitle"] ?? null) == "Pages")) {
            // line 22
            echo "
                    ";
        } else {
            // line 24
            echo "                        <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array());
            echo "</a> / 
                    ";
        }
        // line 26
        echo "                    <a href=\"";
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</a>
                </h1>
            </div>
        </header>


        <section class=\"Xcontent-section\">
            <div class=\"medium-container padding-bottom\">

                <div class=\"pl-colpad pr-colpad\">
                    ";
        // line 36
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
                </div>

<div class=\" listing-container\">

    ";
        // line 41
        if (twig_length_filter($this->env, ($context["art_collections"] ?? null))) {
            // line 42
            echo "        <h2 class=\"ml-colpad mr-colpad bdt-1 mt-05 mb-05 pt-05\">Articles</h2>
    ";
        }
        // line 44
        echo "    
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["art_collections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 46
            echo "
        <div class=\"column-33 listing\">
            <a href=\"";
            // line 48
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"listing-img-link\">
                ";
            // line 49
            $context["listImg"] = $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array());
            // line 50
            echo "                ";
            if ((($context["listImg"] ?? null) == false)) {
                // line 51
                echo "                    <img src=\"/user/pages/images/default-img.gif\" />
                ";
            } else {
                // line 53
                echo "                    ";
                echo twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
                echo "
                ";
            }
            // line 55
            echo "            </a>

            <h3 class=\"mt-025\"><a href=\"";
            // line 57
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></h3>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "   

</div>    



";
        // line 65
        if (twig_length_filter($this->env, ($context["fold_collections"] ?? null))) {
            // line 66
            echo "
<div class=\" listing-container\">

    ";
            // line 69
            if (twig_length_filter($this->env, ($context["fold_collections"] ?? null))) {
                // line 70
                echo "        <h2 class=\"ml-colpad mr-colpad bdt-1 mt-05 mb-05 pt-05\">Collections</h2>
    ";
            }
            // line 72
            echo "    
    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fold_collections"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 74
                echo "
        <div class=\"column-33 listing\">
            <a href=\"";
                // line 76
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" class=\"listing-img-link\">
                ";
                // line 77
                $context["listImg"] = $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array());
                // line 78
                echo "                ";
                if ((($context["listImg"] ?? null) == false)) {
                    // line 79
                    echo "                    <img src=\"/user/pages/images/default-img.gif\" />
                ";
                } else {
                    // line 81
                    echo "                    ";
                    echo twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
                    echo "
                ";
                }
                // line 83
                echo "            </a>

            <h3 class=\"mt-025\"><a href=\"";
                // line 85
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a></h3>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "   

</div>   

";
        }
        // line 92
        echo "

        </section>
    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 92,  207 => 87,  196 => 85,  192 => 83,  186 => 81,  182 => 79,  179 => 78,  177 => 77,  173 => 76,  169 => 74,  165 => 73,  162 => 72,  158 => 70,  156 => 69,  151 => 66,  149 => 65,  141 => 59,  130 => 57,  126 => 55,  120 => 53,  116 => 51,  113 => 50,  111 => 49,  107 => 48,  103 => 46,  99 => 45,  96 => 44,  92 => 42,  90 => 41,  82 => 36,  66 => 26,  58 => 24,  54 => 22,  51 => 21,  49 => 20,  42 => 17,  39 => 16,  35 => 1,  33 => 14,  31 => 11,  29 => 9,  27 => 8,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"partials/base.html.twig\" %}

    {% set default_collection = page.collection.ofType('item') %}




{% set options = { items: {'@self.children': '/'}, 'limit': 5, 'order': {'by': 'date', 'dir': 'desc'}, 'pagination': true } %}
{% set art_collections = page.collection(options).ofType('item') %}

{% set fold_collections = page.collection(options).ofType('blog') %}


    {% set hero_image = page.media.images|first %}

    {% block content %}
        <header class=\"text-center content-section background-img colored-background\" style=\"background-image:url({{hero_image.url}})\">
            <div class=\"small-container\">
              <h1>
                    {% set parentTitle = page.parent.title %}
                    {% if parentTitle == \"Pages\" %}

                    {% else %}
                        <a href=\"{{page.parent.url}}\">{{page.parent.title}}</a> / 
                    {% endif %}
                    <a href=\"{{page.url}}\">{{page.title}}</a>
                </h1>
            </div>
        </header>


        <section class=\"Xcontent-section\">
            <div class=\"medium-container padding-bottom\">

                <div class=\"pl-colpad pr-colpad\">
                    {{page.content}}
                </div>

<div class=\" listing-container\">

    {% if art_collections | length %}
        <h2 class=\"ml-colpad mr-colpad bdt-1 mt-05 mb-05 pt-05\">Articles</h2>
    {% endif %}
    
    {% for p in art_collections %}

        <div class=\"column-33 listing\">
            <a href=\"{{p.url}}\" class=\"listing-img-link\">
                {% set listImg = p.media.images %}
                {% if listImg == false %}
                    <img src=\"/user/pages/images/default-img.gif\" />
                {% else %}
                    {{p.media.images|first}}
                {% endif %}
            </a>

            <h3 class=\"mt-025\"><a href=\"{{p.url}}\">{{p.title}}</a></h3>
        </div>
    {% endfor %}   

</div>    



{% if fold_collections | length %}

<div class=\" listing-container\">

    {% if fold_collections | length %}
        <h2 class=\"ml-colpad mr-colpad bdt-1 mt-05 mb-05 pt-05\">Collections</h2>
    {% endif %}
    
    {% for p in fold_collections %}

        <div class=\"column-33 listing\">
            <a href=\"{{p.url}}\" class=\"listing-img-link\">
                {% set listImg = p.media.images %}
                {% if listImg == false %}
                    <img src=\"/user/pages/images/default-img.gif\" />
                {% else %}
                    {{p.media.images|first}}
                {% endif %}
            </a>

            <h3 class=\"mt-025\"><a href=\"{{p.url}}\">{{p.title}}</a></h3>
        </div>
    {% endfor %}   

</div>   

{% endif %}


        </section>
    {% endblock %}", "blog.html.twig", "/Users/Steven/Documents/Web/WordPress-sites/grav-admin/user/themes/prime/templates/blog.html.twig");
    }
}
