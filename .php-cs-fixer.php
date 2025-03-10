<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    // Front usefull config
    'array_indentation' => true,
    'array_push' => true, // Risky when the function array_push is overridden.
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => [
        'default' => 'single_space'
    ],
    'blank_line_after_namespace' => true,
    'blank_line_after_opening_tag' => true,
    'blank_line_before_statement' => [
        'statements' => ['return']
    ],
    'control_structure_braces' => true,
    'braces_position' => [
        'functions_opening_brace' => 'same_line',
        'control_structures_opening_brace' => 'same_line',
        'anonymous_functions_opening_brace' => 'same_line',
        'classes_opening_brace' => 'same_line',
        'anonymous_classes_opening_brace' => 'same_line',
    ],
    'declare_parentheses' => true,
    'statement_indentation' => true,
    'no_multiple_statements_per_line' => true,
    'cast_spaces' => [
        'space' => 'single'
    ],
    'class_attributes_separation' => [
        'elements' => [
            'trait_import' => 'none'
        ]
    ],
    'concat_space' => [
        'spacing' => 'one'
    ],
    'constant_case' => true,
    'elseif' => true,
    'encoding' => true,
    'explicit_string_variable' => true,
    'full_opening_tag' => true,
    'heredoc_indentation' => [
        'indentation' => 'start_plus_one'
    ],
    'include' => true,
    'increment_style' => [
        'style' => 'post'
    ],
    'indentation_type' => true,
    'line_ending' => true,
    'linebreak_after_opening_tag' => true,
    'logical_operators' => true, // Risky, because you must double-check if using and/or with lower precedence was intentional.
    'lowercase_cast' => true,
    'lowercase_keywords' => true,
    'lowercase_static_reference' => true,
    'method_argument_space' => [
        'on_multiline' => 'ensure_fully_multiline',
        'keep_multiple_spaces_after_comma' => false,
        'attribute_placement' => 'same_line'
    ],
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line'
    ],
    'native_function_casing' => true,
    'no_alias_functions' => true,
    'no_alternative_syntax' => true, // Remove des endif & shit
    'no_closing_tag' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => [
        'tokens' => [
            'extra',
            'throw',
            'use',
        ]
    ],
    'no_mixed_echo_print' => [
        'use' => 'echo'
    ],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_short_bool_cast' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_after_function_name' => true,
    'no_spaces_around_offset' => true,
    'no_trailing_comma_in_singleline' => true,
    'no_trailing_whitespace' => true,
    'no_trailing_whitespace_in_comment' => true,
    'no_unneeded_control_parentheses' => true,
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'normalize_index_brace' => true,
    'not_operator_with_successor_space' => false,
    'object_operator_without_whitespace' => true,
    'short_scalar_cast' => true,
    'simple_to_complex_string_variable' => true,
    'simplified_null_return' => false,
    'single_import_per_statement' => true,
    'single_line_after_imports' => true,
    'single_line_comment_style' => [
        'comment_types' => ['hash']
    ],
    'single_quote' => true,
    'space_after_semicolon' => true,
    'spaces_inside_parentheses' => [
        'space' => 'none'
    ],
    'standardize_not_equals' => true,
    'switch_case_semicolon_to_colon' => true,
    'switch_case_space' => true,
    'ternary_operator_spaces' => true,
    'trailing_comma_in_multiline' => false,
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
];

$finder = Finder::create()
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$config = new Config();

return $config->setFinder($finder)
    ->setRules($rules)
    ->setRiskyAllowed(true)
    ->setUsingCache(true);

