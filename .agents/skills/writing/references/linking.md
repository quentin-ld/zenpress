# WordPress Documentation Style Guide — Linking

Cut from `mirrors/wordpress-documentation-style-guide-consolidated.md` by
`mirrors/tools/build_style_guide_references.py`. Each page below keeps the
live URL it came from on its `**Source:**` line; the canonical text is
upstream. This file is generated — fix the mirror or the tool, not the file.

---

**Source:** https://make.wordpress.org/docs/style-guide/linking/

# Linking

This section provides linking guidelines for writing WordPress documentation.

---

**Source:** https://make.wordpress.org/docs/style-guide/linking/cross-references/

# Cross-references

    - [Links to sections in the same page](https://make.wordpress.org/docs/style-guide/linking/cross-references/?output_format=md#links-to-sections-in-the-same-page)
    - [Links to pages on the same server](https://make.wordpress.org/docs/style-guide/linking/cross-references/?output_format=md#links-to-pages-on-the-same-server)
    - [Links to pages on a different domain or server](https://make.wordpress.org/docs/style-guide/linking/cross-references/?output_format=md#links-to-pages-on-a-different-domain-or-server)

 **Highlight:** Use cross-references to guide readers to related information.

Cross-references guide the reader to information related to the content. For additional
information about internal and external references, see [Link text](https://make.wordpress.org/docs/style-guide/linking/link-text/)
and [Capitalization in titles and headings](https://make.wordpress.org/docs/style-guide/language-grammar/capitalization/#capitalization-in-titles-and-headings).

## References to other documents

Write relevant and meaningful link text.

**Examples**

 **Not recommended:** Click [here](https://wordpress.org/news/).

 **Not recommended:** See [documentation](https://wordpress.org/support/).

 **Recommended:** For the latest release announcements, see [News and Announcements](https://wordpress.org/news/).

If the link text doesn’t clearly specify as to why you’re referring the reader to
related information, then provide explanatory information. Make the explanation
specific, but don’t repeat the information text.

**Examples**

 **Not recommended:** For more information, see [WP-CLI Commands](https://developer.wordpress.org/cli/commands/).

 **Recommended:** For more information about all the available commands, see [WP-CLI Commands](https://developer.wordpress.org/cli/commands/).

If the link downloads a file, explicitly mention it, and the type of file being
downloaded.

**Example**

 **Recommended:** Get started with the installation process by [downloading the latest WordPress ZIP file](https://wordpress.org/latest.zip).

Don’t include multiple links to the same document or article within a page. However,
you can add a secondary link, if you’re linking to a particular section of the document
or if the page you’re linking from is long. It is also acceptable to use a secondary
link if there are multiple entry points to the document you’re linking from.

## Cross-references within generated reference documents

In generated reference documents, while linking from one reference topic to another,
use the standard linking syntax rather than hard-coding links within the reference,
so that the links will change appropriately when the reference docs change.

## Writing cross-references

While writing descriptions for what the cross-references link to, use _about_ instead
of _on_.

**Examples**

 **Not recommended:** For more information on procedural steps that provide instructions
to achieve a particular task, see [Procedures and instructions](https://make.wordpress.org/docs/style-guide/formatting/procedures/).

 **Recommended:** For more information about procedural steps that provide instructions
to achieve a particular task, see [Procedures and instructions](https://make.wordpress.org/docs/style-guide/formatting/procedures/).

## Formatting cross-references

 * Don’t enclose cross-references that are links in quotation marks.
 * In case the cross-reference isn’t a link, use italics or quotation marks as appropriate.
    - Use italics for cross-references that are titles of full-length works such
      as a movie, book, or paper that are unlinked.
       **Example**
    -  **Recommended:** For more information, see the _American Heritage Dictionary_.
    - Use quotation marks for cross-references that are short works such as a blog
      post or a TV episode, and document sections.
       **Example**
    -  **Recommended:** For more information, see “Compound modifiers”.

### Links to sections in the same page

When you’re linking to another section in the same page, mention that the link guides
you to a different section on the same page.

**Example**

 **Recommended:** In this document, see [References to other documents](https://make.wordpress.org/docs/style-guide/linking/cross-references/?output_format=md#).

### Links to pages on the same server

When you’re linking to another page on the same server, use root-relative URLs starting
with `/`, even if you’re linking to a page in the same directory as the page you’re
linking from.

### Links to pages on a different domain or server

 * When you’re linking to pages on a different domain or server, use absolute URLs.
   Start the URLURL A specific web address of a website or web page on the Internet,
   such as a website’s URL www.wordpress.org with `https` if the server you’re linking
   to supports HTTPSHTTPS HTTPS is an acronym for Hyper Text Transfer Protocol Secure.
   HTTPS is the secure version of HTTP, the protocol over which data is sent between
   your browser and the website that you are connected to. The ‘S’ at the end of
   HTTPS stands for ‘Secure’. It means all communications between your browser and
   the website are encrypted. This is especially helpful for protecting sensitive
   data like banking information.. If the server doesn’t support HTTPS, start the
   URL with `http`.
 * Don’t force links to open in a new tab or window. Let the reader decide how to
   open links. If the link needs to open in a new tab or window, notify the reader
   that the link will open in a new tab or window.
    **Example**
 *  **Recommended:** For more information, see the [American Heritage Dictionary (opens in a new tab)](https://ahdictionary.com/).
 * Use an external link icon to indicate that the link goes to a different domain
   or server. Examples of internal links are, a link from _make.wordpress.orgWordPress.
   org The community site where WordPress code is created and shared by the users.
   This is where you can download the source code for WordPress core, plugins and
   themes as well as the central location for community conversations and organization.
   [https://wordpress.org/](https://wordpress.org/)_ to _developer.wordpress.org_
   or a link from _wordpress.org/news_ to the _make.wordpress.org/docs_ subdomain.
   A link from _developer.wordpress.org_ to _github.com/WordPress_ is an example
   of an external link.
    **Example**
 *  **Recommended:** For more information, see the [Gutenberg project repository](https://github.com/WordPress/gutenberg).

---

**Source:** https://make.wordpress.org/docs/style-guide/linking/external-links/

# External links

 **Highlight:** It’s OK to link to external sites for more information.

WordPress documentation is undoubtedly reliant on third-party standards, software,
platforms and technologies. Moreover, third-party documentation may become obsolete
after upgrades and updates, so there is always the possibility of WordPress documentation
potentially referencing obsolete content. Hence, in order to provide abundant references
and guidance, it is preferable to link to external sites and sources instead of
quoting or rewriting existing documentation.

Although in some cases, including brief information can save the readers a trip
to an external site.

**Example**

 **Recommended:** To create multiple paragraphs, use the `<p>` element rather than
using the `<br>` element. For more information on which uses of `<br>` are correct
and which ones aren’t, see the [HTML specification for `<br>`](https://html.spec.whatwg.org/multipage/semantics.html#the-br-element).

Ensure that the sites you link to are of high standard and quality.

If the URLURL A specific web address of a website or web page on the Internet, such
as a website’s URL www.wordpress.org has a locale indicator, remove it and then
test the link. For example, in a Wikipedia link, change the following:

    ```notranslate
    https://en.wikipedia.org/wiki/XML-RPC
    ```

to this:

    ```notranslate
    https://wikipedia.org/wiki/XML-RPC
    ```

Don’t force links to open in a new tab or window. Let the reader decide how to open
links. If the link needs to open in a new tab or window, notify the reader that
the link will open in a new tab or window.

**Example**

 **Recommended:** For more information, see the [American Heritage Dictionary (opens in a new tab)](https://ahdictionary.com/).

Use an external link icon to indicate that the link goes to a different domain or
server. For more information, see Links to pages on a different domain or server.

---

**Source:** https://make.wordpress.org/docs/style-guide/linking/heading-targets/

# Headings as link targets

 **Highlight:** Use heading anchors.

Heading anchors are useful for document sections that are frequently linked to.
To make headings into link targets, add an anchor. To avoid breaking existing heading
links in published content, create an anchor that uses the same ID string as the
published page. You can also create a custom anchor for a heading; for example,
you can create a short anchor for a long heading. A custom anchor decreases the
possibility of breaking existing links if the heading text changes.

## Adding an anchor

 **Note:** For content published on wordpress.orgWordPress.org The community site
where WordPress code is created and shared by the users. This is where you can download
the source code for WordPress core, plugins and themes as well as the central location
for community conversations and organization. [https://wordpress.org/](https://wordpress.org/),
WordPress may automatically create a link target for headings by default. For more
information about creating heading anchors on WordPress, see [Page jumps](https://wordpress.org/support/article/page-jumps/).

{% codetabs %}
 {% HTML %} To add an anchor to a heading in HTML, do the following:

 * Add a `<section>` element with an `id` attribute. Don’t use `<a name>`.
 * Use lowercase for `id` values.
 * Insert hyphens between words.

**Examples**

 **Not recommended:**

    ```notranslate
    <br />
    &lt;h2&gt;&lt;a name=&quot;Determining_Plugin_And_Content_Directories&quot;&gt;Determining plugin and content directories&lt;/a&gt;&lt;/h2&gt;<br />
    ```

 **Not recommended:**

[code lang=htmlHTML HTML is an acronym for Hyper Text Markup Language. It is a markup
language that is used in the development of web pages and websites.]
 <a name="Determining_Plugin_And_Content_Directories"
></a> <h2>Determining pluginPlugin A plugin is a piece of software containing a
group of functions that can be added to a WordPress website. They can extend functionality
or add new features to your WordPress websites. WordPress plugins are written in
the PHP programming language and integrate seamlessly with WordPress. These can
be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. and content directories</h2> “`

 **Acceptable:**
 “`htmlHTML HTML is an acronym for Hyper Text Markup Language.
It is a markup language that is used in the development of web pages and websites.
<h2 id="determining-pluginPlugin A plugin is a piece of software containing a group
of functions that can be added to a WordPress website. They can extend functionality
or add new features to your WordPress websites. WordPress plugins are written in
the PHP programming language and integrate seamlessly with WordPress. These can
be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party.-and-content-directories">Determining
plugin and content directories</h2> [/code]

 **Recommended:**

    ```notranslate
    <br />
    &lt;section id=&quot;determining-plugin-and-content-directories&quot;&gt;<br />
    &lt;h2&gt;Determining plugin and content directories&lt;/h2&gt;<br />
    &#8230;<br />
    &lt;/section&gt;<br />
    ```

 {% Markdown %} To add an anchor to a heading in Markdown, do the following: –
Add `{:#ID_OF_ANCHOR}` after the heading, to the end of the line that the heading
is on. Replace `ID_OF_ANCHOR` with the ID for this heading. – Use lowercase for `
id` values. – Insert hyphens between words.

**Examples**

 **Not recommended:**

 ## Determining pluginPlugin A plugin is a piece of software containing a group
of functions that can be added to a WordPress website. They can extend functionality
or add new features to your WordPress websites. WordPress plugins are written in
the PHP programming language and integrate seamlessly with WordPress. These can
be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. and content directories {: id="ID_OF_ANCHOR"}

 **Not recommended:** (Note single quotation marks)

 ## Determining pluginPlugin A plugin is a piece of software containing a group
of functions that can be added to a WordPress website. They can extend functionality
or add new features to your WordPress websites. WordPress plugins are written in
the PHP programming language and integrate seamlessly with WordPress. These can
be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. and content directories {: id='ID_OF_ANCHOR'}

 **Not recommended:**

 ## Determining pluginPlugin A plugin is a piece of software containing a group
of functions that can be added to a WordPress website. They can extend functionality
or add new features to your WordPress websites. WordPress plugins are written in
the PHP programming language and integrate seamlessly with WordPress. These can
be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. and content directories {:#ID_OF_ANCHOR}

 **Acceptable:**

 ## Determining pluginPlugin A plugin is a piece of software containing a group
of functions that can be added to a WordPress website. They can extend functionality
or add new features to your WordPress websites. WordPress plugins are written in
the PHP programming language and integrate seamlessly with WordPress. These can
be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. and content directories {: id="determining-
directories" }

 **Recommended:**

 ## Determining pluginPlugin A plugin is a piece of software containing a group
of functions that can be added to a WordPress website. They can extend functionality
or add new features to your WordPress websites. WordPress plugins are written in
the PHP programming language and integrate seamlessly with WordPress. These can
be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. and content directories {:#determining-
plugin-and-content-directories}

 **Recommended:**

 ## Determining pluginPlugin A plugin is a piece of software containing a group
of functions that can be added to a WordPress website. They can extend functionality
or add new features to your WordPress websites. WordPress plugins are written in
the PHP programming language and integrate seamlessly with WordPress. These can
be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. and content directories {:#determining-
plugin-content-directories}

 {% end %}

## Changing an anchor

 **Note:** For content published on wordpress.orgWordPress.org The community site
where WordPress code is created and shared by the users. This is where you can download
the source code for WordPress core, plugins and themes as well as the central location
for community conversations and organization. [https://wordpress.org/](https://wordpress.org/),
WordPress may automatically create a link target for headings by default. For more
information about creating heading anchors on WordPress, see [Page jumps](https://wordpress.org/support/article/page-jumps/).

To change an anchor, you need to create a custom anchor that uses the older ID string.
A custom anchor decreases the possibility of breaking existing links if the heading
text changes. You can find the ID string by inspecting the heading.

{% codetabs %}
 {% HTML %}

If you change a heading from _Custom template files_ to _Custom post type template
files_, then add a custom anchor that uses the older ID string and formatting.

**Example**

 **Recommended:**

    ```notranslate
    <br />
    &lt;section id=&quot;custom_template_files&quot;&gt;<br />
    &lt;h2&gt;Custom post type template files&lt;/h2&gt;<br />
    &#8230;<br />
    &lt;/section&gt;<br />
    ```

 {% Markdown %}

If you change a heading from _Custom template files_ to _Custom post type template
files_, then add a custom anchor that uses the older ID string and formatting.

**Example**

 **Recommended:**

 ## Custom post typeCustom Post Type WordPress can hold and display many different
types of content. A single item of such a content is generally called a post, although
post is also a specific post type. Custom Post Types gives your site the ability
to have templated posts, to simplify the concept. template files {:#custom_template_files}

 {% end %}

---

**Source:** https://make.wordpress.org/docs/style-guide/linking/image-links/

# Image links

 **Highlight:** Use root-relative URLs for image links.

When you’re including an image that is served from the same domain as your document
or page, use a root-relative URLURL A specific web address of a website or web page
on the Internet, such as a website’s URL www.wordpress.org starting with `/`. Use
this root-relative URL format (starting from the site root), even if you’re linking
to a page in the same directory as the page you’re linking from.

{% codetabs %}
 {% HTMLHTML HTML is an acronym for Hyper Text Markup Language. It
is a markup language that is used in the development of web pages and websites. %}
Insert the URL in the `src` attribute of the `<img>` element:

    ```notranslate
    &lt;img
      src=&quot;/assets/images/wapuu.png&quot;
      alt=&quot;The WordPress mascot Wapuu.&quot;
    /&gt;
    ```

{% Markdown %}
 Insert the URL in parentheses after the image’s alt text:

![The WordPress mascot Wapuu.](/assets/images/wapuu.png)

{% end %}

---

**Source:** https://make.wordpress.org/docs/style-guide/linking/link-text/

# Link text

 **Highlight:** Write detailed and expressive link text that provides context.

Write detailed and expressive link text that describes where the reader will be
guided to, and what the reader will see after following the link. Links, by themselves,
should be coherent without the surrounding text.
 Links can be of two forms:

 * The exact text of the title, heading, or subheading you’re linking to. For more
   information about capitalizing such references, see [Capitalization in references to titles and headings](https://make.wordpress.org/docs/style-guide/language-grammar/capitalization/#capitalization-in-references-to-titles-and-headings).
 * A description of the linked document or page, with standard text capitalization.

For more information about link text, see [Cross-references](https://make.wordpress.org/docs/style-guide/linking/cross-references/).

## General guidelines for link text

 * You can rewrite or rephrase a sentence to include a phrase to get well-articulated
   and clear link text.
 * Don’t use a URLURL A specific web address of a website or web page on the Internet,
   such as a website’s URL www.wordpress.org as link text. Instead, use the page
   title or a description of the page.
 * Don’t use the phrase _click here_ or _this document_. It impedes scannability
   and accessibilityAccessibility Accessibility (commonly shortened to a11y) refers
   to the design of products, devices, services, or environments for people with
   disabilities. The concept of accessible design ensures both “direct access” (
   i.e. unassisted) and “indirect access” meaning compatibility with a person’s
   assistive technology (for example, computer screen readers). (https://en.wikipedia.
   org/wiki/Accessibility).
 * Don’t force links to open in a new tab or window. Let the reader decide how to
   open links. If the link needs to open in a new tab or window, notify the reader
   that the link will open in a new tab or window. For more information, see [Links to pages on a different domain or server](https://make.wordpress.org/docs/style-guide/linking/cross-references/#links-to-pages-on-a-different-domain-or-server).
 * Use an external link icon to indicate that the link goes to a different domain
   or server. For more information, see [Links to pages on a different domain or server](https://make.wordpress.org/docs/style-guide/linking/cross-references/#links-to-pages-on-a-different-domain-or-server).
 * If the link downloads a file, explicitly mention it, and the type of file being
   downloaded.
 * If you’re referencing a link with an abbreviation, include both the spelled-out
   term or phrase and the abbreviation in the link text. For example, link to [WordPress Command Line Interface (WP-CLI)](https://make.wordpress.org/cli/),
   not [WordPress Command Line Interface](https://make.wordpress.org/cli/) (WP-CLIWP-
   CLI WP-CLI is the Command Line Interface for WordPress, used to do administrative
   and development tasks in a programmatic way. The project page is [http://wp-cli.org/](http://wp-cli.org/)
   [https://make.wordpress.org/cli/](https://make.wordpress.org/cli/)).

**Examples**

 **Not Recommended (HTMLHTML HTML is an acronym for Hyper Text Markup Language.
It is a markup language that is used in the development of web pages and websites.):**
Click `<a href="">here</a>`.

 **Not Recommended (HTMLHTML HTML is an acronym for Hyper Text Markup Language.
It is a markup language that is used in the development of web pages and websites.):**
Want more? Go to `<a href="">this page!</a>`.

 **Recommended (HTMLHTML HTML is an acronym for Hyper Text Markup Language. It is
a markup language that is used in the development of web pages and websites.):**
For more information, see `<a href="">Word choice</a>`.

 **Not Recommended (Markdown):** Click `[here]()`.

 **Not Recommended (Markdown):** Want more? Go to `[this page!]()`.

 **Recommended (Markdown):** For more information, see `[Word choice]()`.

 **Not Recommended (HTMLHTML HTML is an acronym for Hyper Text Markup Language.
It is a markup language that is used in the development of web pages and websites.):**
See trademark policy at `<a href="https://wordpressfoundation.org/trademark-policy/"
>https://wordpressfoundation.org/trademark-policy/</a>`.

 **Recommended (HTMLHTML HTML is an acronym for Hyper Text Markup Language. It is
a markup language that is used in the development of web pages and websites.):**
For more information about WordPress trademarks, see the `<a href="https://wordpressfoundation.
org/trademark-policy/">Trademark Policy for WordPress</a>`.

 **Not Recommended (Markdown):** See trademark policy at `[https://wordpressfoundation.
org/trademark-policy/](https://wordpressfoundation.org/trademark-policy/)`.

 **Recommended (Markdown):** For additional information about WordPress trademarks,
see the `[Trademark Policy for WordPress](https://wordpressfoundation.org/trademark-
policy/)`.

## Punctuation with links

If you have punctuation immediately before or after a link, insert the punctuation
outside the link tags where possible. For example, don’t include sentence ending
punctuation such as a period inside link text.

**Examples**

 **Not Recommended (HTMLHTML HTML is an acronym for Hyper Text Markup Language.
It is a markup language that is used in the development of web pages and websites.):**
For the latest release announcements, see `<a href="https://wordpress.org/news/"
>News and Announcements.</a>`

 **Recommended (HTMLHTML HTML is an acronym for Hyper Text Markup Language. It is
a markup language that is used in the development of web pages and websites.):**
For the latest release announcements, see `<a href="https://wordpress.org/news/"
>News and Announcements</a>`.

 **Not Recommended (Markdown):** For the latest release announcements, see `[News
and Announcements.](https://wordpress.org/news/)`

 **Recommended (Markdown):** For the latest release announcements, see `[News and
Announcements](https://wordpress.org/news/)`.
