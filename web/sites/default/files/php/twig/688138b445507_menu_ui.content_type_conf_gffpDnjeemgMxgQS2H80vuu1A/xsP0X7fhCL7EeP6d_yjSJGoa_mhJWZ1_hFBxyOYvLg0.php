<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @help_topics/menu_ui.content_type_configuration.html.twig */
class __TwigTemplate_391d937a3756add4acf3eb98cc38f6da extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        $context["content_types_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Content types", []);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["content_types_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["content_types_text"] ?? null), "entity.node_type.collection"));
        // line 10
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 11
        yield t("For an existing content type, configure the available menus that will be shown as options on content editing screens; links to content items of this type can be added to these menus during editing.", []);
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; @content_types_link.", ["@content_types_link" => ($context["content_types_link"] ?? null), ]);
        yield "</li>
  <li>";
        // line 15
        yield t("Locate the content type you want to configure, and click <em>Edit</em> in the <em>Operations</em> list.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("Under <em>Menu settings</em>, check the menus that you want to be available when editing a content item of this type.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("Optionally, select the <em>Default parent item</em>, to put links to content items under a default location in the menu structure.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("Click <em>Save</em>.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/menu_ui.content_type_configuration.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  60 => 12,  56 => 11,  51 => 10,  49 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/menu_ui.content_type_configuration.html.twig", "/var/www/html/drupal_11/web/core/modules/menu_ui/help_topics/menu_ui.content_type_configuration.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "trans" => 8];
        static $filters = ["escape" => 14];
        static $functions = ["render_var" => 9, "help_route_link" => 9];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
