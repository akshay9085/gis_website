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

/* @help_topics/contextual.overview.html.twig */
class __TwigTemplate_ada90af7080c91e66e0b3d34eb98dc4a extends Template
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
        // line 7
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 8
        yield t("Use contextual links to access administrative tasks without navigating the administrative menu.", []);
        yield "</p>
<h2>";
        // line 9
        yield t("What are contextual links?", []);
        yield "</h2>
<p>";
        // line 10
        yield t("<em>Contextual links</em> give users with the <em>Use contextual links</em> permission quick access to administrative tasks related to areas of non-administrative pages. For example, if a page on your site displays a block, the block would have a contextual link that would allow users with permission to configure the block. If the block contains a menu or a view, it would also have a contextual link for editing the menu links or the view. Clicking a contextual link takes you to the related administrative page directly, without needing to navigate through the administrative menu system.", []);
        yield "</p>
<h2>";
        // line 11
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 13
        yield t("Make sure that the core Contextual Links module is installed, and that you have a role with the <em>Use contextual links</em> permission. Optionally, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).", []);
        yield "</li>
  <li>";
        // line 14
        yield t("Visit a non-administrative page on your site, such as the home page.", []);
        yield "</li>
  <li>";
        // line 15
        yield t("Locate a block or another area on the page that you want to edit or configure.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("Make the contextual links button visible by hovering your mouse over that area in the page. In most themes, this button looks like a pencil and is placed in the upper right corner of the page area (upper left for right-to-left languages), and hovering will also temporarily outline the affected area. Alternatively, click the contextual links toggle button on the right end of the toolbar (left end for right-to-left languages), which will make all contextual link buttons on the page visible until it is clicked again.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("While the contextual links button for the area of interest is visible, click the button to display the list of links for that area. Click a link in the list to visit the corresponding administrative page.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("Complete your administrative task and save your settings, or cancel the action. You should be returned to the page you started from.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/contextual.overview.html.twig";
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
        return array (  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/contextual.overview.html.twig", "/var/www/html/drupal_11/web/core/modules/contextual/help_topics/contextual.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 7];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
                [],
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
