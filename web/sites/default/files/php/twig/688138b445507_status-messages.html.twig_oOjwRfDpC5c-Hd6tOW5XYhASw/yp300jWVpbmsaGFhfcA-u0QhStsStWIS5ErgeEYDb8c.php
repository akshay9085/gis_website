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

/* core/themes/claro/templates/misc/status-messages.html.twig */
class __TwigTemplate_9ce1e48555889b09b0fb5f24e310402a extends Template
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
        // line 25
        yield "<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages-list__wrapper\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 28
            yield "      ";
            // line 29
            $context["classes"] = ["messages-list__item", "messages", ("messages--" .             // line 32
$context["type"])];
            // line 35
            yield "      ";
            // line 36
            $context["is_message_with_title"] = (($_v0 = ($context["status_headings"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 36));
            // line 38
            yield "      ";
            // line 39
            $context["is_message_with_icon"] = CoreExtension::inFilter($context["type"], ["error", "status", "warning"]);
            // line 41
            yield "
      <div role=\"contentinfo\" aria-labelledby=\"";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = ($context["title_ids"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["title_ids"] ?? null), $context["type"], [], "array", false, false, true, 42)), "html", null, true);
            yield "\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 42), "role", "aria-label"), "html", null, true);
            yield ">
        ";
            // line 43
            if (($context["type"] == "error")) {
                // line 44
                yield "          <div role=\"alert\">
        ";
            }
            // line 46
            yield "          ";
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 47
                yield "            <div class=\"messages__header\">
              ";
                // line 48
                if ((($tmp = ($context["is_message_with_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                <h2 id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v2 = ($context["title_ids"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["title_ids"] ?? null), $context["type"], [], "array", false, false, true, 49)), "html", null, true);
                    yield "\" class=\"messages__title\">
                  ";
                    // line 50
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v3 = ($context["status_headings"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 50)), "html", null, true);
                    yield "
                </h2>
              ";
                }
                // line 53
                yield "            </div>
          ";
            }
            // line 55
            yield "          <div class=\"messages__content\">
            ";
            // line 56
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) > 1)) {
                // line 57
                yield "              <ul class=\"messages__list\">
                ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 59
                    yield "                  <li class=\"messages__item\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["message"], "html", null, true);
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                yield "              </ul>
            ";
            } else {
                // line 63
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["messages"]), "html", null, true);
                yield "
            ";
            }
            // line 65
            yield "          </div>
        ";
            // line 66
            if (($context["type"] == "error")) {
                // line 67
                yield "          </div>
        ";
            }
            // line 69
            yield "      </div>
      ";
            // line 71
            yield "      ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 71);
            // line 72
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "title_ids", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/misc/status-messages.html.twig";
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
        return array (  155 => 73,  149 => 72,  146 => 71,  143 => 69,  139 => 67,  137 => 66,  134 => 65,  128 => 63,  124 => 61,  115 => 59,  111 => 58,  108 => 57,  106 => 56,  103 => 55,  99 => 53,  93 => 50,  88 => 49,  86 => 48,  83 => 47,  80 => 46,  76 => 44,  74 => 43,  68 => 42,  65 => 41,  63 => 39,  61 => 38,  59 => 36,  57 => 35,  55 => 32,  54 => 29,  52 => 28,  48 => 27,  44 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/misc/status-messages.html.twig", "/var/www/html/drupal_11/web/core/themes/claro/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 27, "set" => 29, "if" => 43];
        static $filters = ["escape" => 42, "without" => 42, "length" => 56, "first" => 63];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
