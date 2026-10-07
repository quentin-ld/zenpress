# WordPress Documentation Style Guide — Developer content

Cut from `mirrors/wordpress-documentation-style-guide-consolidated.md` by
`mirrors/tools/build_style_guide_references.py`. Each page below keeps the
live URL it came from on its `**Source:**` line; the canonical text is
upstream. This file is generated — fix the mirror or the tool, not the file.

---

**Source:** https://make.wordpress.org/docs/style-guide/developer-content/

# Developer content

This section provides developer content guidelines for writing WordPress documentation.

---

**Source:** https://make.wordpress.org/docs/style-guide/developer-content/code-examples/

# Code examples

 **Highlight:** Use code blocks, preformatted text, and code fences to write code
examples.

In documentation, mark a blockBlock Block is the abstract term used to describe
units of markup that, composed together, form the content or layout of a webpage
using the WordPress editor. The idea combines concepts of what in the past may have
achieved with shortcodes, custom HTML, and embed discovery into a single consistent
API and user experience. of code such as a lengthy command or a code example to
distinguish it from standard text. To express code examples in HTMLHTML HTML is
an acronym for Hyper Text Markup Language. It is a markup language that is used
in the development of web pages and websites., use the `<pre>` element. In Markdown,
use a code fence (`\`\`\``).

This page explains how to format code examples in documentation. For more information
about other code-related documentation, see [Code in text](https://make.wordpress.org/docs/style-guide/developer-content/code-in-text/),
[Placeholders](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/),
and [Command-line syntax](https://make.wordpress.org/docs/style-guide/developer-content/command-line-syntax/).

For more information about adding code blocks in the GutenbergGutenberg The Gutenberg
project is the new Editor Interface for WordPress. The editor improves the process
and experience of creating new content, making writing rich content much simpler.
It uses ‘blocks’ to add richness rather than shortcodes, custom HTML etc. [https://wordpress.org/gutenberg/](https://wordpress.org/gutenberg/)
block editor, see [Code block](https://wordpress.org/support/article/code-block/)
and [Preformatted block](https://wordpress.org/support/article/preformatted-block/).

## General guidelines for code examples

 * Use spaces to indent code. Don’t use tabs unless specified.
 * Follow the indentation standards in the relevant [coding standards guide](https://make.wordpress.org/docs/style-guide/developer-content/coding-standards/).
 * Wrap lines after 80 characters.
 * Mark code blocks as preformatted text. In HTML, use a `<pre>` element; in Markdown,
   indent every line of the code block by four spaces.

For more information see [Coding standards](https://make.wordpress.org/docs/style-guide/developer-content/coding-standards/).

**Example**

 **Recommended:**

    ```notranslate
    <br />
    &lt;pre class=&quot;example&quot;&gt;<br />
    function longSentence() {<br />
      alert(&#039;This example of a sentence is very long and wraps onto a second<br />
        line.&#039;);<br />
    }<br />
    &lt;/pre&gt;<br />
    ```

This preformatted code example renders a code blockBlock Block is the abstract term
used to describe units of markup that, composed together, form the content or layout
of a webpage using the WordPress editor. The idea combines concepts of what in the
past may have achieved with shortcodes, custom HTML, and embed discovery into a
single consistent API and user experience. with syntax highlighting as follows:

    ```notranslate
    <br />
    function longSentence() {<br />
      alert(&#039;This example of a sentence is very long and wraps onto a second<br />
        line.&#039;);<br />
    }<br />
    ```

## Introductory sentences

In most cases, introduce a code example with an introductory sentence that initiates
the example that follows. If the heading of the content explains what the code example
is about, and no additional context is required, then don’t include an introductory
statement. You can introduce a code example with an imperative statement.

The introductory sentence can end with a colon or a period. Use a period if the
introductory content is extended, and a colon if the introductory statement is shorter
and immediately precedes the code example. The text preceding the colon must distinctly
stand alone as a complete sentence. That is, don’t introduce a code example with
a partial statement.

**Examples**

 **Not recommended (ending with a colon):** The following code example shows how
to use the `post` method. For information on other methods, refer the [Code reference](https://developer.wordpress.org/reference/methods/):[
Code example]

 **Recommended (ending with a period):** The following code example shows how to
use the `post` method. For information on other methods, refer the [Code reference](https://developer.wordpress.org/reference/methods/).[
Code example]

 **Recommended:** The following code example shows how to use the `post` method:[
Code example] For information on other methods, see the [Code reference](https://developer.wordpress.org/reference/methods/).

---

**Source:** https://make.wordpress.org/docs/style-guide/developer-content/code-in-text/

# Code in text

 **Highlight:** Insert code-related content in monospace code font.

In text content, use monospace code font to highlight and distinguish code content
from standard text. To express code font in HTMLHTML HTML is an acronym for Hyper
Text Markup Language. It is a markup language that is used in the development of
web pages and websites., use the `<code>` element. In Markdown, use backticks (`\``)
for code font.

This page explains how to format code in standard text sentences. For more information
about other code-related documentation, see [Code examples](https://make.wordpress.org/docs/style-guide/developer-content/code-examples/),
[Placeholders](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/),
and [Command-line syntax](https://make.wordpress.org/docs/style-guide/developer-content/command-line-syntax/).

## Items to put in code font

Use monospace code font while expressing the following items, which include but
are not limited to:

 * Attribute names and values.
 * Class names.
 * Command-line utility names.
 * Data types.
 * Defined (constant) values for an element or attribute.
 * [DNS record types](https://wikipedia.org/wiki/List_of_DNS_record_types).
 * Enum (enumerator) names.
 * Environment variable names.
 * Element names in XML and HTML. Place angle brackets (`<>`) around the element
   name; you may have to escape the angle brackets to make them appear in the document.
 * [Filenames](https://make.wordpress.org/docs/style-guide/formatting/filenames/),
   [filename extensions](https://make.wordpress.org/docs/style-guide/formatting/filenames/#referring-to-file-types),
   and paths.
 * Folders and directories.
 * HTTPHTTP HTTP is an acronym for Hyper Text Transfer Protocol. HTTP is the underlying
   protocol used by the World Wide Web and this protocol defines how messages are
   formatted and transmitted, and what actions Web servers and browsers should take
   in response to various commands. verbs, status codes, and content-type values.
 * Language keywords.
 * Method and function names.
 * Namespace aliases.
 * [Placeholder variables](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/#placeholder-variables).
 * Query parameter names and values.
 * Text input.
 * [UI elements](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/)
   that implement previously entered text input. For example, if the user was instructed
   to enter a name for a UIUI UI is an acronym for User Interface – the layout of
   the page the user interacts with. Think ‘how are they doing that’ and less about
   what they are doing. element as `post-name`, then when you tell them to click
   the element, use code font and bold: _Click **`post-name`**_.

For more information, see [Code text preceding colon](https://make.wordpress.org/docs/style-guide/punctuation/colons/#code-text-preceding-colon).

## Items to put in regular (non-code) font

Use standard font while expressing the following items, which include but are not
limited to:

 * Email addresses.
 * Names of products, services, and organizations. However, when a product name
   is also a command-line utility name, code font can be used.
 * URLs. For more information, see [Link text](https://make.wordpress.org/docs/style-guide/linking/link-text/).

## Method names

When you refer to a method name in text, omit the class name except where including
it would prevent ambiguity. Insert empty parentheses at the end of the method name
to indicate that it’s a method.

**Examples**

 **Not recommended:** To delete a file or directory, call the `WP_Filesystem_ftpsockets::
delete()` method.

 **Recommended:** To delete a file or directory, call the `delete()` method.

## Commands

To mark a blockBlock Block is the abstract term used to describe units of markup
that, composed together, form the content or layout of a webpage using the WordPress
editor. The idea combines concepts of what in the past may have achieved with shortcodes,
custom HTML, and embed discovery into a single consistent API and user experience.
of code such as a lengthy command or a code example, use the following formatting:

 * In HTML, use the `<pre>` element.
 * In Markdown, use a code fence (`\`\`\``).

Formatting a command with multiple elements:

 * When a line exceeds 100 characters, you can safely add a line break before some
   characters, such as a single hyphen, double hyphen, underscore, or quotation
   marks. After the first line, indent each line by four spaces to vertically align
   each line that follows a line break.
 * If you split a command line with a line break, each line except the last line
   must end with the command-continuation character. Commands that don’t have the
   command-continuation character don’t work. Command-continuation characters are:
    - Linux or shell: A backslash preceded with a space (`\`)
       * Windows: A caret preceded with a space (`^`)
 * Use placeholder text with [placeholder variables](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/#placeholder-variables).
 * Write a descriptive list of the placeholder variables used in the command line
   succeeding the command line. For more information, see [Describing placeholders](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/#describing-placeholders).

## Keywords

Avoid using technical keywords as verbs or nouns. If you have to, don’t change the
word form of the keywords; don’t make plurals from keywords, change tense, or convert
them to possessive form. It’s acceptable to use lowercase, plain text _string_ in
a general discussion of the `STRING` data type.

**Examples**

 **Not recommended:** `Decompress` the encoded body.

 **Recommended:** Decompress the encoded body by using a `decompress` request.

 **Not recommended:** Retrieve information by `get`ting the data.

 **Recommended:** To retrieve the data, send a `get` request.

 **Not recommended:** Before `patch()`ing, make sure your request is `post()`ed.

 **Recommended:** Send a `post()` request before calling a `patch()` request.

## HTTP status codes

Use the following formatting and phrasing to refer to a single HTTP status code:
an HTTP `500 Internal server error` status code.

Insert the HTTP status code number and name in code font. Specifically use _status
code_ rather than _error code_ or _response code_. If _HTTP_ is implied from context,
it is acceptable to exclude it.

Use the following formatting to refer a range of HTTP status codes: an HTTP `2xx`
or `300` status code.

Insert the HTTP status code number in code font even if you’re excluding the code
name. Use _`N`xx_ where `N` is a digit, to indicate _anything in the `N`00 to `N`
99 range_.

Use the following formatting to specify an exact range of HTTP status codes: an
HTTP status code in the `200`–`299` range.

Insert the HTTP status code number in code font.

## Coding standards

For more information about coding standards for WordPress, see [Coding standards](https://make.wordpress.org/docs/style-guide/developer-content/coding-standards/).

---

**Source:** https://make.wordpress.org/docs/style-guide/developer-content/coding-standards/

# Coding standards

 **Highlight:** Follow WordPress coding standardsWordPress Coding Standards The
Accessibility, PHP, JavaScript, CSS, HTML, etc. coding standards as published in
the WordPress [Coding Standards Handbook](https://developer.wordpress.org/coding-standards/).
May also refer to [The collection of PHP_CodeSniffer rules](https://github.com/WordPress/WordPress-Coding-Standards/)(
sniffs) used to format and validate PHP code developed for WordPress according to
the PHP coding standards..

WordPress is a global project with thousands of contributors. It’s important that
the best practices are followed so that the codebase is consistent and readable,
and changes are easy to find and read, whether the code is five days old or five
years old. WordPress coding standards are a series of best practices to help keep
WordPress code clean and well documented.

The purpose of WordPress coding standards is to create a baseline for collaboration
and review within various aspects of the WordPress open source project and community,
from core code to themes to plugins.

The coding standard guides for WordPress are available in the [WordPress coding standards handbook](https://developer.wordpress.org/coding-standards/):

 * [Accessibility coding standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/accessibility/)
 * [CSS coding standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/)
 * [HTML coding standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/html/)
 * [JavaScript coding standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/)
 * [PHP coding standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/)
 * [Inline documentation standards](https://developer.wordpress.org/coding-standards/inline-documentation-standards/)
    - [PHP documentation standards](https://developer.wordpress.org/coding-standards/inline-documentation-standards/php/)
       * [JavaScript documentation standards](https://developer.wordpress.org/coding-standards/inline-documentation-standards/javascript/)
 * [Markdown style guide](https://developer.wordpress.org/coding-standards/styleguide/)

---

**Source:** https://make.wordpress.org/docs/style-guide/developer-content/command-line-syntax/

# Command-line syntax

 **Highlight:** Follow proper command-line syntax and formatting.

This page explains how to format commands and their arguments in documentation.
For more information about other code-related documentation, see [Code in text](https://make.wordpress.org/docs/style-guide/developer-content/code-in-text/),
[Placeholders](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/),
and [Code examples](https://make.wordpress.org/docs/style-guide/developer-content/code-examples/).

## Command prompt

When you have to show multiple lines of command-line input, initiate each line with
the dollar (`$`) command prompt symbol.

Don’t show the current directory path before the prompt, even if part of the instruction
includes creating or changing directories. This is because the directory structure
might be different for the user. However, if the general context of the command-
line interface changes—such as from the local machine to a remote machine—then add
an additional prompt indicator for the new context.

**Examples**

 **Recommended:**

    ```notranslate
    <br />
    $ wp theme activate twentytwentyone<br />
    ```

The output is the following:

    ```notranslate
    <br />
    Success: Switched to &#039;Twenty Twenty-One&#039; theme.<br />
    ```

 **Recommended:**

    ```notranslate
    <br />
    $ pwd<br />
    /srv/www/wordpress-develop.dev<br />
    $ cat wp-cli.yml<br />
    path: src/<br />
    ```

For single-line commands, the command prompt, that is the dollar symbol (`$`) is
optional. However, if you have to show both multi-line and single-line commands,
use the command prompt symbol for overall consistency.

Use separate code blocks for command-line instructions that include both input and
output lines.

**Example**

 **Recommended:**

    ```notranslate
    <br />
    $ wp cap list &#039;editor&#039; | xargs wp cap add &#039;author&#039;<br />
    ```

The output is the following:

    ```notranslate
    <br />
    Success: Added 24 capabilities to &#039;author&#039; role.<br />
    ```

## Required commands and arguments

When writing commands and arguments that are required, use code font without brackets,
braces, or parentheses.

**Examples**

 **Recommended:**

    ```notranslate
    <br />
    $ wp post list &#8211;post_type=&#039;page&#039; &#8211;format=ids<br />
    ```

 **Recommended:**

    ```notranslate
    <br />
    $ wp core check-update<br />
    ```

 In these examples, all words and arguments are required.

For more information, see [Anatomy of a command](https://make.wordpress.org/cli/handbook/guides/commands-cookbook/#anatomy-of-a-command).

## Optional arguments

When writing arguments that are optional, enclose the arguments in square brackets.
If there is more than one optional argument, enclose each item in its individual
set of square brackets.

**Example**

 **Recommended:**

    ```notranslate
    <br />
    $ wp plugin install https://wordpress.org/plugins/gutenberg/ [&#8211;force] [&#8211;activate]<br />
    ```

 In this example, `install` is required, but `[--force]` and `[--activate]` are
optional arguments.

## Mutually exclusive arguments

When writing commands where the use has to choose one item, enclose the items in
angle brackets (`<>`; also known as _inequality signs_). Sometimes the mutually
exclusive choices are also enclosed in braces (also known as _curly braces_). Use
vertical bars (also knows as _pipes_) to separate the items. You can have more than
two mutually exclusive items that are separated from each other by pipes.

**Example**

 **Recommended:**

    ```notranslate
    <br />
    $ wp plugin install &lt;plugin|zip|url&gt;<br />
    ```

 In this example, `install` is required, and `<plugin|zip|url>` is the accepted
positional argument. In fact, `wp plugin install` accepts the same positional argument(
the slug, ZIP, or URLURL A specific web address of a website or web page on the
Internet, such as a website’s URL www.wordpress.org of a pluginPlugin A plugin is
a piece of software containing a group of functions that can be added to a WordPress
website. They can extend functionality or add new features to your WordPress websites.
WordPress plugins are written in the PHP programming language and integrate seamlessly
with WordPress. These can be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. to install). The `plugin`, `zip`,
and `url` choices are mutually exclusive, but one of the argument must be specified.

## Multiple value arguments

Use an ellipsis (`...`) to indicate that the user can specify multiple values for
the argument.

**Examples**

 **Recommended:**

    ```notranslate
    <br />
    $ wp media import [&#8211;post_id=&lt;post_id&gt;&#8230;]<br />
    ```

 In this example, the ellipsis indicates that the user can specify multiple instances
of the optional argument `[--post_id=<post_id>]`.

 **Recommended:**

    ```notranslate
    <br />
    $ wp plugin install &lt;plugin|zip|url&gt;&#8230;<br />
    ```

 In this example, the ellipsis indicates that the user can specify multiple plugins,
zip files or URLs.

## Command output

You don’t have to show an output for every command. Only add the output if it is
useful; for example, if the user needs to copy a value or needs to verify a value
from the output.

If you do show have to show an output, use an introductory phrase to separate the
command from the output.

**Examples**

 **Recommended:**

    ```notranslate
    <br />
    $ wp theme status twentytwentyone<br />
    ```

The output is the following:

    ```notranslate
    <br />
    Theme twentytwentyone details:<br />
         Name: Twenty Twenty-One<br />
         Status: Active<br />
         Version: 1.1<br />
         Author: WordPress.org<br />
    ```

 **Recommended:**

    ```notranslate
    <br />
    $ wp server &#8211;host=localhost.localdomain &#8211;port=80<br />
    ```

The output is similar to the following:

    ```notranslate
    <br />
    PHP 5.6.9 Development Server started at Fri Jan 22 11:32:56 2021<br />
    Listening on http://localhost1.localdomain1:80<br />
    Document root is /<br />
    Press Ctrl-C to quit.<br />
    ```

For more information about explaining placeholders in output, see [Placeholders in output](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/#placeholders-in-output).

## Additional resources

 * [WP-CLI Handbook](https://make.wordpress.org/cli/handbook/)
 * [WP-CLI Commands](https://developer.wordpress.org/cli/commands/)

---

**Source:** https://make.wordpress.org/docs/style-guide/developer-content/placeholders/

# Placeholders

    - [Placeholder variables in inline text](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/?output_format=md#placeholder-variables-in-inline-text)
    - [Placeholder variables in code blocks](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/?output_format=md#placeholder-variables-in-code-blocks)
    - [Placeholder variable text](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/?output_format=md#placeholder-variable-text)
 * [Describing placeholders](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/?output_format=md#describing-placeholders)
 * [Single placeholder](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/?output_format=md#single-placeholder)
 * [Multiple placeholders](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/?output_format=md#multiple-placeholders)
 * [Placeholders in output](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/?output_format=md#placeholders-in-output)

 **Highlight:** Enclose placeholders in a `<var>` element and use uppercase characters
with underscore delimiters.

Placeholders in code and commands represent values that the user must input or replace.
Placeholders in outputs can also represent values that differ. Generally, placeholders
have a descriptive name and a value.

For example, _`POST\_ID`_ represents a post ID in a code example, command, and example
output. In example output, _`VERSION`_ represents the version of a pluginPlugin
A plugin is a piece of software containing a group of functions that can be added
to a WordPress website. They can extend functionality or add new features to your
WordPress websites. WordPress plugins are written in the PHP programming language
and integrate seamlessly with WordPress. These can be free in the WordPress.org
Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party., theme, or software; the reader
is not expected to set this to a specific value.

This page explains how to format placeholder variables in commands and code examples.
For more information about other code-related documentation, see [Code in text](https://make.wordpress.org/docs/style-guide/developer-content/code-in-text/),
[Code examples](https://make.wordpress.org/docs/style-guide/developer-content/code-examples/),
and [Command-line syntax](https://make.wordpress.org/docs/style-guide/developer-content/command-line-syntax/).

## Placeholder variables

### Placeholder variables in inline text

When placeholder variables appear in a sentence, use the following formatting:

 * In HTMLHTML HTML is an acronym for Hyper Text Markup Language. It is a markup
   language that is used in the development of web pages and websites., enclose
   inline placeholders in `<code><var>` elements.

 `html
 <code>PLACEHOLDER_VARIABLE</code>

 * In Markdown, enclose inline placeholders in backticks (`\``) and use an asterisk(`*`)
   before the first and second backtick.

 `markdown
 *\`PLACEHOLDER_VARIABLE\`*

### Placeholder variables in code blocks

When placeholder variables are in a blockBlock Block is the abstract term used to
describe units of markup that, composed together, form the content or layout of
a webpage using the WordPress editor. The idea combines concepts of what in the
past may have achieved with shortcodes, custom HTML, and embed discovery into a
single consistent API and user experience. of code, use the following formatting:

{% codetabs %}
 {% HTML %}

Enclose the code block in a `<pre>` element and tag placeholders with `<var>` elements.

    ```notranslate
    &lt;pre class=&quot;prototype&quot;&gt;
    &lt;img
      src=&quot;&lt;var&gt;IMAGE_PATH&lt;/var&gt;&quot;
      alt=&quot;&lt;var&gt;ALT_TEXT&lt;/var&gt;&quot;
    /&gt;
    &lt;/pre&gt;
    ```

{% Markdown %}

Enclose the code block in a code fence. You cannot apply text formatting or highlighting
such as bold or italic inside a code fence.

 “`
 *PLACEHOLDER_VARIABLE* “`

{% end %}

### Placeholder variable text

For text in placeholder variables, use uppercase characters with underscore delimiters.
If using uppercase characters with underscore delimiters, or capitalizing lowercase
characters with already uppercase characters seems inconsistent, then it is acceptable
to use another convention; but be consistent with that convention.

**Examples**

{% codetabs %}
 {% HTML %}

 **Not recommended:**
 – `https://developer.wordpress.org/<var>API-name</var>` –`
https://developer.wordpress.org/<var>API_name</var>` – `https://developer.wordpress.
org/<var>API name</var>` – `https://developer.wordpress.org/<var>api_name</var>`–`
https://developer.wordpress.org/<var>api-name</var>` – `https://developer.wordpress.
org/<var>apiName</var>`

 **Recommended:**
 – `https://developers.google.com/<var>API_NAME</var>` – `https://
developers.google.com/<var>POST_TITLE</var>`

 {% Markdown %}

 **Not recommended:**
 – `https://developer.wordpress.org/*API-name*\` -https://
developer.wordpress.org/*API name*-https://developer.wordpress.org/*API_name*\` –
https://developer.wordpress.org/*api_name*\` -https://developer.wordpress.org/*api-
name*\` – `https://developer.wordpress.org/*apiName*`

 **Recommended:**
 – `https://developers.google.com/*API_NAME*\` -https://developers.
google.com/*POST_TITLE*`

 {% end %}

Don’t use possessive pronouns in placeholder variables.

**Examples**
 {% codetabs %} {% HTML %}

 **Not recommended:**
 – `https://developer.wordpress.org/<var>MY_API_NAME</var>`–`
https://developer.wordpress.org/<var>YOUR_API_NAME</var>`

{% Markdown %}

 **Not recommended:**
 – `https://developer.wordpress.org/*MY_API_NAME*\` -https://
developer.wordpress.org/*YOUR_API_NAME*`

 {% end %}

For more information about placeholder text in commands, see [Optional arguments](https://make.wordpress.org/docs/style-guide/developer-content/command-line-syntax/#optional-arguments),
[Mutually exclusive arguments](https://make.wordpress.org/docs/style-guide/developer-content/command-line-syntax/#mutually-exclusive-arguments),
and [Multiple value arguments](https://make.wordpress.org/docs/style-guide/developer-content/command-line-syntax/#multiple-value-arguments).

## Describing placeholders

When you use a placeholder in code examples, commands, or other text, include an
explanation for what the placeholder represents. Write an explanation for the first
time you use the placeholder; if there are multiple placeholders or steps after
the first use of that placeholder, you can explain the placeholder again.

Use the following order to describe placeholders:
 – Describe what the user is doing.–
Write the code example, command, or other text. – Explain the placeholder. – Explain
the code example, command, or other text in more detail if required. – Show any
output if required. – Explain any output if required.

**Example**

 **Recommended:**

    ```notranslate
    <br />
    &lt;pre class=&quot;prototype&quot;&gt;<br />
    &lt;img<br />
      src=&quot;&lt;var&gt;IMAGE_PATH&lt;/var&gt;&quot;<br />
      alt=&quot;The WordPress mascot Wapuu.&quot;<br />
    /&gt;<br />
    &lt;/pre&gt;</p>
    <p>&lt;p&gt;Replace the following:&lt;/p&gt;</p>
    <p>&lt;ul&gt;<br />
      &lt;li&gt;&lt;code&gt;<var>IMAGE_PATH</var>&lt;/code&gt;: the directory path of the image asset.&lt;/li&gt;<br />
    &lt;/ul&gt;<br />
    ```

## Single placeholder

When writing a single placeholder, replace `PLACEHOLDER` with _a description of
what the placeholder represents._

**Example**

 **Recommended:**
 To delete an existing post, enter the following command:

    ```
    $ wp post delete POST_ID
    ```

Replace `POST_ID` with the ID of the post that you want to delete.

## Multiple placeholders

When there are two or more placeholders in code examples, commands, or other text,
use the following formatting:
 – Write a descriptive list of all the placeholder
variables used in the respective code example, command, or other text, after the
code content. – Explain what each placeholder variable represents. – Introduce the
placeholder description list with _Replace the following:_ – List all the placeholder
variables in the order in which they appear in the code example, command, or other
text. – Provide a description for each placeholder variable. – TagTag Tag is one
of the pre-defined taxonomies in WordPress. Users can add tags to their WordPress
posts along with categories. However, while a category may cover a broad range of
topics, tags are smaller in scope and focused to specific topics. Think of them
as keywords used for topics discussed in a particular post. each placeholder with`
<code><var>` elements, followed by a colon and lowercase letter as follows: `html
<li><code>PLACEHOLDER</code>: description</li>

**Example**

 **Recommended:**
 To edit an existing post, enter the following command:

    ```
    $ wp post edit POST_ID --path=PATH --skip-themes[=THEMES]
    ```

Replace the following:
 – `POST_ID`: the ID of the post that you want to edit. –`
PATH`: the path to the WordPress files. – `THEMES`: skip loading all themes, or
a comma-separated list of themes.

## Placeholders in output

When you specify placeholders in output examples, use the following formatting:
–
Write a descriptive list of all the placeholder variables used in the output, after
the output example. – Introduce the placeholder description list with _In this output:_–
List all the placeholder variables in the order in which they appear in the output
example. – Provide a description for each placeholder variable. – Tag each placeholder
with `<code><var>` elements, followed by a colon and lowercase letter as follows:`
html <li><code>PLACEHOLDER</code>: description</li>

For more information, see [Command output](https://make.wordpress.org/docs/style-guide/developer-content/command-line-syntax/#command-output).

**Example**

 **Recommended:**
 The output is similar to the following:

    ```
    {
        "name": "SITE_NAME",
        "description": "SITE_DESCRIPTION",
        "routes": { ... },
        "authentication": {
            "oauth1": {
                "request": "OAUTH_REQUEST_URL",
                "authorize": "OAUTH_AUTHORIZE_URL",
                "access": "http://example.com/oauth/access",
                "version": "0.1"
            }
        }
    }
    ```

In this output:

 * `SITE_NAME`: the name of the site.
 * `SITE_DESCRIPTION`: the description of the site.
 * `OAUTH_REQUEST_URL`: the OAuth requesting URLURL A specific web address of a
   website or web page on the Internet, such as a website’s URL www.wordpress.org.
 * `OAUTH_AUTHORIZE_URL`: the OAuth authorizing URL.

---

**Source:** https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/

# UI elements and interaction

    - [Window, page, dialog, and view](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#window-page-dialog-and-view)
    - [Button and icon](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#button-and-icon)
    - [Menu bar](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#menu-bar)
    - [Toolbar](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#toolbar)
    - [Tab](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#tab)
    - [Text box](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#text-box)
    - [Dropdown list, combo box, and spin box](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#dropdown-list-combo-box-and-spin-box)
    - [Expander](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#expander)
    - [Checkbox](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#checkbox)
    - [Radio button](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#radio-button)
    - [Toggle button](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#toggle-button)
 * [Interaction verbs](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#interaction-verbs)
    - [Click](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#click)
    - [Select](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#select)
    - [Select and hold](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#select-and-hold)
    - [Enter, type](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#enter-type)
    - [Go to](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#go-to)
    - [Tap](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#tap)
    - [Press](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#press)
    - [Choose](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#choose)
    - [Clear](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#clear)
    - [Hold, hold the pointer over](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#hold-hold-the-pointer-over)
    - [Switch, turn on, turn off, enable](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#switch-turn-on-turn-off-enable)
    - [Move, drag](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#move-drag)
    - [Open](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#open)
    - [Close](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#close)
    - [Zoom](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#zoom)

 **Highlight:** Emphasize on the task to be accomplished, rather than how the user
should interact with the UIUI UI is an acronym for User Interface – the layout of
the page the user interacts with. Think ‘how are they doing that’ and less about
what they are doing. element. Format UI element names in bold, and use appropriate
nouns and verbs to describe how to interact with them.

## Emphasize the task

When writing about interactions involving the user interface (UI), emphasize on
the task to be accomplished, rather than how the user should interact with the UI
element. By avoiding reference to UI elements, you help the reader understand the
purpose of an instruction and avoid confusion due to additional external elements.

However, be watchful of the context and the reader demographic and how that influences
your documentation; sometimes the objective of a procedure is to guide readers through
elements on a page.

**Examples**

 **Not recommended:** Click the PUBLISH button.

 **Not recommended:** Click the _Publish_ button.

 **Not recommended:** Click the “Publish” button.

 **Recommended:** Click **Publish**.

 **Recommended** (consider context): Publish the post.

 **Not recommended:** Click the arrow indicator to open the **Time zone** options
section.

 **Recommended:** To open the **Time zone** options section, click the dropdown
arrow.

 **Recommended** (consider context): Open the **Time zone** options section.

## Formatting UI element names

When referring to a UI element by name, format the name in bold using the `<b>`
element in HTML or `**` in Markdown. UI element names include those of buttons,
windows, menus, dialogs, or any other element in the page or console that has a
visible name. Don’t use code font for UI element names, unless it is an element
that [requires code font](https://make.wordpress.org/docs/style-guide/developer-content/code-in-text/);
in which case use both code font and bold text formatting. Capitalize UI element
names as per document context, but if the element names are inconsistent, use sentence-
case capitalization.

Don’t apply bold formatting to an official feature name or product name, except
when it directly refers to an element in the page that uses the name (such as a
window title or button name).

**Examples**

 **Not recommended:** In the Appearance section, select “Themes” and then click
the “Add New” button.

 **Recommended:** In the **Appearance** section, select the **Themes** option and
then click **Add New**.

 **Not recommended:** Click **DOWNLOAD**.

 **Recommended:** Click  **Download**.

## Pressing and typing keyboard keys

To express a key or a combination of keys on a keyboard to be pressed by the user,
use the `<kbd>` element. To refer to a keyboard shortcut, use either _keyboard shortcut_
or _key combination._ To refer to the action of pressing a key or combination, use
the verb _press_. To refer to the action of inputting a key or combination, use
the verbs _type, enter_, or _input_.

**Examples**

 **Recommended:** `Press <kbd>Control+K</kbd>`.

 The text renders as follows:

 **Recommended:** Press Control+K.

If you’re using non-HTML markup, use monospace text formatting, which is how `<kbd
>` renders. In Markdown, enclose the key name in backticks (`\``).

To express a key that the user has to type to enter that key’s value as text input,
use the `<code>` element instead of the `<kbd>` element. For more information, see
[Code font](https://make.wordpress.org/docs/style-guide/formatting/text/#text-highlighting).

To refer to a keyboard key, use the key’s name. If the key’s name is ambiguous,
use the form _the `KEY\_NAME` key._

**Examples**

 **Recommended:** Press Esc.

 **Recommended:** Press the Esc key.

Don’t abbreviate the names of modifier keys such as Control, Shift, Command, and
Option. Spell out the complete key names and don’t use their symbols. To refer to
a key combination that uses a modifier key, use the form _`MODIFIER\_KEY`+`KEY\_NAME`._

**Examples**

 **Not recommended:** Press Ctrl+T.

 **Recommended:** Press Control+T.

 **Not recommended:** Press ⌘+T.

 **Recommended:** Press Command+T.

In most cases, to accommodate both Windows and Mac users, insert the Mac shortcut
in parentheses after the Windows shortcut.

**Examples**

 **Not recommended:** To redo, press Ctrl+Y (⌘+Y).

 **Recommended:** To redo, press Control+Y (or Command+Y on Mac).

To refer to a key or combination that uses the Shift key, use the form _`MODIFIER\
_KEY`+Shift+`KEY\_NAME`._

**Examples**

 **Recommended:** Press Control+Shift+T.

 **Recommended:** Press Alt+Shift+R.

In general, use uppercase capitalization for character keys.

Spell out the names of characters that could be ambiguous or confusing in a keyboard
shortcut, such as comma, hyphen, period, and plus.

**Examples**

 **Not recommended:** Press Control++.

 **Recommended:** Press Control+Plus.

## Terminology and usage

There can be multiple elements in a user interface. [Emphasize the task](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/?output_format=md#emphasize-the-task)
and focus on the feature and functionality of the UI element, rather than focusing
on the UI element itself.

**Examples**

 **Recommended:** Go to **Plugins > Installed Plugins**.

 **Recommended:** In the **Plugins** section, select **Installed Plugins**.

Following are the terminology and word usage when referring to UI elements:

### Window, page, dialog, and view

A _window_ is the complete application window in a desktop environment. A window
can also refer to adaptive application elements that can be opened and closed. To
refer to a window, use the form _the `LABEL\_NAME` window._

**Examples**

 **Not recommended:** On the **Publish** page, click **Save**.

 **Recommended:** In the **Publish** window, click **Save**.

Generally, a _page_ is the shortened version of the word _webpage_. To refer to
a page, use the form _the `LABEL\_NAME` page._

**Examples**

 **Not recommended:** On the Dashboard, go to the **Updates** window.

 **Recommended:** On the Dashboard, go to the **Updates** page.

A _dialog_ is a small window that appears in front of the window, but is separate
from the main application window. To refer to a dialog, use the form _the `LABEL\
_NAME` dialog._

**Examples**

 **Not recommended:** In the **Choose Image** pop-up window, click **Upload**.

 **Recommended:** In the **Choose Image** dialog, click **Upload**.

A _view_ or a _pane_ is a smaller section that is part of the application window.
Generally, a view is adjacent to other UI elements and regions, and cannot be hidden,
whereas a window is separate and can be hidden. To refer to a view, use the form
_the `LABEL\_NAME` view._

**Example**

 **Recommended:** In the **Appearance** view, click **Typography**.

When referring to windows, dialogs, and views, use the preposition _in_. Use _on_
when referring to a page.

**Examples**

 **Recommended:** In the **Customize** window, click **Edit**.

 **Recommended:** On the **Users** page, click **Add New**.

 **Recommended:** In the **Delete WidgetWidget A WordPress Widget is a small block
that performs a specific function. You can add these widgets in sidebars also known
as widget-ready areas on your web page. WordPress widgets were originally created
to provide a simple and easy-to-use way of giving design and structure control of
the WordPress theme to the user.** dialog, click **Delete**.

 **Recommended:** In the **Custom Menus** view, click **Primary Menu**.

### Button and icon

A _button_ is a UI element that performs or initiates a specified action when clicked
or tapped. To refer to a button, use the form _the `LABEL\_NAME` button._

**Examples**

 **Not recommended:** Click the “Publish” button.

 **Recommended:** Click **Publish**.

An _icon_ is a image, sign, or symbol that depicts a function. An icon can also
be a component of a button. To refer to a button with an icon, use the form _the`
BUTTON\_ICON` `LABEL\_NAME` button._ If you are unsure of the name of the icon,
inspect the element to use the `aria-label` attribute. For more information, see
[Using an aria-label](https://www.w3.org/TR/WCAG20-TECHS/ARIA14.html).

**Examples**

 **Not recommended:** Click the  icon.

 **Recommended:** Click  **Search**.

If a UI element name ends with an [ellipsis](https://make.wordpress.org/docs/style-guide/punctuation/ellipses/)(…),
exclude the ellipsis.

**Examples**

 **Not recommended:** Click **Read more…**.

 **Recommended:** Click **Read more**.

In general, avoid using directional language such as _above, top, below, left-hand
side, lower-right side_ in instructions to locate UI elements or other content.
Directional language proves to be difficult for accessibility or for localization.
If a particular UI element or other content is difficult to convey, include a screenshot
or illustration.

**Examples**

 **Not recommended:** On the upper-right part of the page, click the button with
the checkmark.

 **Recommended:** Click **✓ Publish**.

### Menu bar

A _menu bar_ is a set of menus that is at the top of a desktop application window,
such as **File**, **Edit**, or **View**. Each menu has a set of submenus or commands.
To refer to a menu, use the form _the `LABEL\_NAME` menu._ To refer to an item in
the menu, use the form _the `LABEL\_NAME` command._

When combining multiple small actions into a single sequential step use angle brackets(
>) to make simple sentences. If you use angle brackets, use the following guidelines:

 * Insert spaces around each angle bracket, with the space before the bracket being
   a nonbreaking space (`&nbsp;`).
 * Don’t use bold text formatting for each individual menu name. Instead, enclose
   the entire sequential step in a single bold element; for example, in HTML use`
   <b>Settings > Media</b>` and in Markdown, use `**Settings > Media**`.
 * Enclose the angle bracket with a `<span>` tag and add an `aria-label` attribute
   with _and then_ text (`<span aria-label="and then">></span>`). Otherwise, some
   screen readers may skip over brackets or read `>` as _greater than_.

For more information, see [Instructions with multiple actions](https://make.wordpress.org/docs/style-guide/formatting/procedures/#instructions-with-multiple-actions).

**Examples**

 **Recommended (HTMLHTML HTML is an acronym for Hyper Text Markup Language. It is
a markup language that is used in the development of web pages and websites.):**
Select `<b>Edit&nbsp;<span aria-label="and then">></span> Text&nbsp;<span aria-label
="and then">></span> Encoding</b>`.

 **Recommended (Markdown):** Select `**Edit&nbsp;<span aria-label="and then">></
span> Text <span aria-label="and then">></span> Encoding**`.

This renders as: Select **Edit > Text > Encoding**.
 A screen reader interprets
this as _Select Edit and then Text and then Encoding_.

Use this format only for combining multiple small actions into a single sequential
step; for example, _In the **Settings** menu click **Media**_. Use this format only
for menu items; don’t use it to express a combination of different UI elements.

**Examples**

 **Not recommended:** Select **Edit** > **Appearance** > **Themes** > **+** > **
Activate**.

 **Recommended:** Select **Edit > Appearance**, and select **Themes**. Click on **
Add New** and click **Activate**.

### Toolbar

A _toolbar_ is a set of buttons for the most frequently used user features. To refer
to a toolbar, use the form _the `LABEL\_NAME` toolbar._

**Example**

 **Recommended:** In the **Admin** toolbar, click **Profile**.

### Tab

A _tab_ is a navigation element that looks like a file tab. To refer to a tab, use
the form _the `LABEL\_NAME` tab._

**Example**

 **Recommended:** Select **Settings > Preferences**, and then click the **Edit**
tab.

### Text box

A _text box_ or a _text field_ is a box that the user can input or type in. To refer
to a text box, use the form _the `LABEL\_NAME` box_. Use code formatting for the
text that the user inputs using the `<code>` element in HTML, backticks (`\``) in
Markdown, or a monospace font in other markup.

**Examples**

 **Recommended:** In the **Link** box, enter your sitemap link.

 **Recommended:** In the **Mail server** box, enter the port as `110`.

 **Recommended:** In the **Alt text** box, enter a brief image description without
exceeding 100 characters.

### Dropdown list, combo box, and spin box

A _dropdown list_ or a _list box_ is a UI element that provides a list of items
for the user to choose from. To refer to a dropdown list, use the form _the `LABEL\
_NAME` dropdown list_ or _the `LABEL\_NAME` box_ depending upon the context.

**Example**

 **Recommended:** In the **Default page** dropdown list, select **Homepage**.

A _combo box_ is a combination of a text box and a dropdown list. To refer to a
list box, use the form _the `LABEL\_NAME` box_. To refer to the action of inputting
a value into a combo box, use the verbs _enter, type_, or _select_.

**Example**

 **Recommended:** In the **Post** box, type or select the post type you want to
use.

A _spin box_ is a UI element that lets the user choose a value — a numerical value
in most cases — by clicking arrows or by typing. To refer to a spin box, use the
form _the `LABEL\_NAME` box_. To refer to the action of entering a value into a
spin box, use the verb _enter_.

**Example**

 **Recommended:** In the **Font Size** box, enter a font size.

### Expander

An _expander arrow_ is a UI element that is used to expand or collapse a section
of navigation or content. Avoid referring to expander arrows in documentation. If
you have to refer to them, use the terms _expander arrow_ and _expandable section_.

**Example**

 **Recommended:** To expand the **Advanced options** section, click the expander
arrow.

### Checkbox

A _checkbox_ is a box that indicates whether a particular value is selected or not.
To refer to a checkbox, use the form _the `LABEL\_NAME` checkbox._ Be cautious while
using the verb _check_, which can be ambiguous. Use _select_ instead.

**Examples**

 **Recommended:** Select the **Search engine visibility** checkbox.

 **Recommended:** Clear the **Crop thumbnail** checkbox.

### Radio button

A _radio button_ is a button used to choose one item from a group of mutually exclusive
options. A radio button is used when only one item can be chosen from the list.
To refer to a radio button, use the radio button’s label, or refer to the group
of buttons by its label.

**Examples**

 **Recommended:** Click **Your latest posts**.

 **Recommended:** Select your preferred **Post visibility**.

### Toggle button

A _toggle button_ is a UI element that switches back and forth between on and off
options or states. To refer to a toggle button, either use _toggle_ as a noun or
action verb.

**Examples**

 **Recommended:** To deactivate, click the **PluginPlugin A plugin is a piece of
software containing a group of functions that can be added to a WordPress website.
They can extend functionality or add new features to your WordPress websites. WordPress
plugins are written in the PHP programming language and integrate seamlessly with
WordPress. These can be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party.** toggle.

 **Recommended:** You can toggle **Fixed background** in the **BlockBlock Block
is the abstract term used to describe units of markup that, composed together, form
the content or layout of a webpage using the WordPress editor. The idea combines
concepts of what in the past may have achieved with shortcodes, custom HTML, and
embed discovery into a single consistent API and user experience. Settings** sidebarSidebar
A sidebar in WordPress is referred to a widget-ready area used by WordPress themes
to display information that is not a part of the main content. It is not always
a vertical column on the side. It can be a horizontal rectangle below or above the
content area, footer, header, or any where in the theme..

## Interaction verbs

For more information about interactive words to describe UI, see the [Word list and usage dictionary](https://make.wordpress.org/docs/style-guide/word-list/).

To describe interactions with UI elements, use the following verbs:

### Click

When the environment is presumably a desktop with a mouse, use _click_ for most
targets such as buttons, links, list items, and radio buttons.

**Examples**

 **Not recommended:** Click on **Save**.

 **Recommended:** Click **Save**.

Hyphenate _left-click_, _right-click_, and _double-click_.

When a click or tap action reveals a collapsed list, use the phrase _click to expand_
or _expand_.

It’s acceptable to write _click in_ when referring to a region that needs focus (
for example, _click in the window_), but not when referring to a control or a link.

### Select

Use _select_ when referring to the action of the user selecting targets such as
menu commands, checkboxes, items, and dropdown lists. Select can be use interchangeably
instead of _click_ or _check_ in describing checkboxes and dropdown lists.

**Examples**

 **Recommended:** In the **Appearance** section, select the **Themes** option and
then click **Add New**.

 **Recommended:** Select **Edit > Text > Encoding**.

 **Recommended:** In the **Plugins** section, select **Installed Plugins**.

### Select and hold

Use _select and hold_ when referring to the action of the user selecting and holding
a UI element. It’s acceptable to use _right-click_ with _select and hold_ when the
instruction isn’t specific to touch devices.

**Examples**

 **Recommended:** To pick multiple images, select and hold an image and choose the
required images.

 **Recommended:** On Windows devices, select and hold (or right-click) to open the
context menu.

### Enter, type

Use _enter_ and _type_ when referring to the action of the user entering text, or
inserting a value.

Don’t use _input_ as a verb.

**Examples**

 **Recommended:** In the **Post** box, type or select the post type you want to
use.

 **Recommended:** In the **Link** box, enter your sitemap link.

### Go to

Use _go to_ when referring to the action of opening a menu, going to a website,
webpage, a tab, or another place in the UI.

**Example**

 **Recommended:** Go to **Plugins > Installed Plugins**.

### Tap

When the environment is presumably a touch device, use _tap_ for most targets such
as buttons, links, list items, and radio buttons.

**Example**

 **Recommended:** Tap **Save**.

### Press

Use _press_ when referring to a key or a key combination that performs or initiates
a specified action when activated.

**Example**

 **Recommended:** To redo, press Control+Y (or Command+Y on Mac).

### Choose

Use _choose_ when referring to the action of the user making a choice from multiple
options, a list of items, or numerical values.

**Example**

 **Recommended:** In the **Font Size** box, choose a font size.

### Clear

Use _clear_ when referring to the action of clearing a selection, usually from a
checkbox.

**Example**

 **Recommended:** Clear the **Crop thumbnail** checkbox.

### Hold, hold the pointer over

When the environment is presumably a touch device, use _hold_ and _hold the pointer
over_ in a desktop environment, when referring to the action of the user holding
or hovering the pointer over a UI element, but not clicking the element. This action
involves waiting for the UI element to react. To refer to the action of pointing
the mouse pointer use _point to_. This action doesn’t imply a length of time waiting
for the UI element to react to user action.

Don’t use _hover, hover the pointer over_, or _mouse over_.

**Example**

 **Recommended:** On the **Admin** toolbar, hold the pointer over **New**.

### Switch, turn on, turn off, enable

Use _switch, turn on, turn off_, and _enable_ when referring to the action of turning
a switch or toggle key on or off.

**Examples**

 **Sometimes okay:** To turn on **Fixed background** follow these steps:

 **Recommended:** You can toggle **Fixed background** in the **BlockBlock Block
is the abstract term used to describe units of markup that, composed together, form
the content or layout of a webpage using the WordPress editor. The idea combines
concepts of what in the past may have achieved with shortcodes, custom HTML, and
embed discovery into a single consistent API and user experience. Settings** sidebarSidebar
A sidebar in WordPress is referred to a widget-ready area used by WordPress themes
to display information that is not a part of the main content. It is not always
a vertical column on the side. It can be a horizontal rectangle below or above the
content area, footer, header, or any where in the theme..

 **Recommended:** To enable full width, select the **Site Width** toggle button.

 **Recommended:** To switch between fixed width and full width, use the **Site Width**
toggle button.

Don’t use _enable_ or _allow_ to express an ability to do something. Use _lets you_
instead.

**Examples**

 **Not recommended:** The `get` request enables you to retrieve the data.

 **Not recommended:** The `get` request allows you to retrieve the data.

 **Recommended:** The `get` request lets you retrieve the data.

### Move, drag

Use _move_ and _drag_ when referring to the action of moving or dragging a UI element
from one place in the UI to the other. In most cases, _move_ and _drag_ are used
for tiles, files, and folders. It is acceptable to use _move_ or _move through_
to describe moving around UI such as a window or page.

**Examples**

 **Recommended:** Drag to upload items in the **Media Uploader**.

 **Recommended:** Move the file to the **Shared** folder.

### Open

Use _open_ when referring to the action of opening targets such as apps, programs,
files, folders, tabs and websites. Don’t use _open_ for menus and commands.

**Example**

 **Recommended:** Open **Settings**.

### Close

Use _close_ when referring to the action of closing targets such as apps, programs,
files, folders, notifications, dialogs, tabs, and websites.

**Example**

 **Recommended:** Close the **Options** tab.

 **Recommended:** After uploading the image, close the **Choose Image** dialog.

### Zoom

Use _zoom, zoom in_, and _zoom out_ a when referring to the action of changing the
magnification of a screen, window, or a page.

**Example**

 **Recommended:** Zoom in to see more details in the figure.
