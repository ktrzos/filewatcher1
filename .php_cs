<?php
/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/?version=2.14#configurator
 * you can change this configuration by importing this file.
 */

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        '@Symfony' => true,
        '@DoctrineAnnotation' => true,
        // Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one.
        'align_multiline_comment' => true,
        // Each element of an array must be indented exactly once.
        'array_indentation' => true,
        // PHP arrays should be declared using the configured syntax.
        'array_syntax' => ['syntax' => 'short'],
        // Calling `unset` on multiple items should be done in one call.
        'combine_consecutive_unsets' => true,
        // Remove extra spaces in a nullable typehint.
        'compact_nullable_typehint' => true,
        // Concatenation should be spaced according configuration.
        'concat_space' => ['spacing' => 'one'],
        // Doctrine annotations must be indented with four spaces.
        'doctrine_annotation_indentation' => ['indent_mixed_lines' => false],
        // Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax.
        'explicit_string_variable' => true,
        // Configured annotations should be omitted from PHPDoc.
        'general_phpdoc_annotation_remove' => ['annotations' => ['author', 'testNotRequired', 'testPostponed']],
        // List (`array` destructuring) assignment should be declared using the configured syntax.
        // Requires PHP >= 7.1.
        'list_syntax' => ['syntax' => 'short'],
        // DocBlocks must start with two asterisks, multiline comments must start with a single ascterisk, after the opening slash.
        // Both must end with a single asterisk before the closing slash.
        'multiline_comment_opening_closing' => true,
        // Replace control structure alternative syntax to use braces.
        'no_alternative_syntax' => true,
        // Properties MUST not be explicitly initialized with `null`.
        'no_null_property_initialization' => true,
        // Replace short-echo `<?=` with long format `<?php echo` syntax.
        'no_short_echo_tag' => true,
        // Removes `@param` and `@return` tags that don't provide any useful information.
        'no_superfluous_phpdoc_tags' => ['allow_mixed' => true],
        // Ordering `use` statements.
        'ordered_imports' => true,
        // PHPUnit assertion method calls like `->assertSame(true, $foo)` should be written with dedicated method like `->assertTrue($foo)`.
        'php_unit_construct' => true,
        // PHPUnit assertions like `assertInternalType`, `assertFileExists`, should be used over `assertTrue`.
        'php_unit_dedicate_assert' => true,
        // PHPUnit classes MUST be used in namespaced version, eg `\PHPUnit\Framework\TestCase` instead of `\PHPUnit_Framework_TestCase`.
        'php_unit_namespaced' => true,
        // Calls to `PHPUnit\Framework\TestCase` static methods must all be of the same type, either `$this->`, `self::` or `static::`.
        'php_unit_test_case_static_method_calls' => true,
        // All items of the given phpdoc tags must be either left-aligned or (by default) aligned vertically.
        'phpdoc_align' => ['align' => 'left'],
        // `@package` and `@subpackage` annotations should be omitted from PHPDoc.
        'phpdoc_no_package' => false,
        // Annotations in PHPDoc should be ordered so that `@param` annotations come first, then `@throws` annotations, then `@return` annotations.
        'phpdoc_order' => true,
        // Annotations in PHPDoc should be grouped together so that annotations of the same type immediately follow each other, and annotations of a different type are separated by a single blank line.
        'phpdoc_separation' => false,
        // Removes extra blank lines after summary and after description in PHPDoc.
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        // `@var` and `@type` annotations must have type and name in the correct order.
        'phpdoc_var_annotation_correct_order' => true,
        // Lambdas not (indirect) referencing `$this` must be declared `static`.
        'static_lambda' => true,
        // Use `null` coalescing operator `??` where possible.
        // Requires PHP >= 7.0.
        'ternary_to_null_coalescing' => true,
        // Write conditions in Yoda style (`true`), non-Yoda style (`false`) or ignore those conditions (`null`) based on configuration.
        'yoda_style' => false,
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->in(__DIR__)
    )
;
