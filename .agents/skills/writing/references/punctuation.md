# WordPress Documentation Style Guide — Punctuation

Cut from `mirrors/wordpress-documentation-style-guide-consolidated.md` by
`mirrors/tools/build_style_guide_references.py`. Each page below keeps the
live URL it came from on its `**Source:**` line; the canonical text is
upstream. This file is generated — fix the mirror or the tool, not the file.

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/

# Punctuation

This section provides punctuation guidelines for writing WordPress documentation.

## A note on rendered output

The recommendations in this section apply to **source text** — what authors type
into editors, code, and documentation files. They are intended to keep source consistent,
accessible, and easy to edit.

Note that WordPress coreCore Core is the set of software required to run WordPress.
The Core Development Team builds WordPress. automatically transforms certain punctuation
characters in rendered post content via the [`wptexturize()`](https://developer.wordpress.org/reference/functions/wptexturize/)
function. This filterFilter Filters are one of the two types of Hooks [https://codex.wordpress.org/Plugin_API/Hooks](https://codex.wordpress.org/Plugin_API/Hooks).
They provide a way for functions to modify data of other functions. They are the
counterpart to Actions. Unlike Actions, filters are meant to work in an isolated
manner, and should never have side effects such as affecting global variables and
output. is applied by default to post titles, content, excerpts, and comments, and
converts straight punctuation to typographic equivalents:

 * Straight apostrophes (`'`) become typographic apostrophes (`’`)
 * Straight quotation marks (`"`, `'`) become curly quotation marks (`“`, `”`, `‘`,`’`)
 * Double hyphens (`--`) become em dashes (`—`)
 * Three periods (`...`) become ellipses (`…`)

This means readers will see typographically correct punctuation in most user-facing
content even when authors write straight characters in the source. Authors should
follow the recommendations in this section regardless — `wptexturize()` handles
the rendered output.

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/apostrophes/

# Apostrophes

 **Highlight:** Use straight apostrophes.

Use straight apostrophes, the same character as a single quotation mark (‘). It
is completely fine to use straight apostrophes in code snippets.

## Apostrophes in contractions

Use an apostrophe to indicate the letters omitted in contractions.

**Examples**

 * _I’m – I am_.
 * _they’ve – they have_.
 * _don’t – do not_.

For more information, see [Contractions](https://make.wordpress.org/docs/style-guide/language-grammar/contractions/).

## Apostrophes in plurals

Don’t use apostrophes to form plurals of nouns and abbreviations.

**Examples**

 **Not recommended:** _page’s, FAQ’s_

 **Recommended:** _pages, FAQs_

To pluralize a number, add an _-s_ at the end without any apostrophe.

**Examples**

 **Recommended:** The 2000s

 **Recommended:** Type five 7s.

Don’t add an apostrophe and _s_ in abbreviations of measurements to indicate plurality.
For example, _50 mi_ or _10 mm_; not _50 mis, 50 mi’s, 10 mms_, or _10 mm’s_.

Avoid pluralizing symbols, signs, and individual letters by adding an apostrophe
and an _s_ at the end.

**Examples**

 **Not recommended:** Invalid characters include x’s, $’s, @’s, and #’s.

 **Recommended:** Invalid characters include the letter _x_ and the symbols $, @,
and #.

For more information, see [Plurals](https://make.wordpress.org/docs/style-guide/language-grammar/plurals/).

## Apostrophes in possessives

Use an apostrophe to form the possessive case of nouns. To form the possessive case
of a singular noun, add an apostrophe and an _s_, even if the noun ends with an _-
s, -x,_ or _-z_. For plurals ending with an _-s_, add an apostrophe only.

**Examples**

 * John’s software
 * Buzz’s laptop
 * application’s password
 * bus’s architecture
 * class’s description
 * CSSCSS CSS is an acronym for cascading style sheets. This is what controls the
   design or look and feel of a site.’s file
 * OEMs’ products
 * business’ earnings
 * classes’ declaration
 * Jones’ programs

**Exception:** If a proper noun ends with an _s_, you can either use an apostrophe
and _s_ or just an apostrophe.
 **Exception:** The possessive of _it_ is _its_ and
doesn’t have an apostrophe. Be wary of common mistakes such as confusing _you’re_(
a contraction for _you are_) with _your_, and _its_ with _it’s_ (a contraction for
_it is_).

Don’t use an apostrophe with possessive pronouns.

**Examples**

 **Not recommended:** The website is your’s.

 **Recommended:** The website is yours.

Add an apostrophe and _s_ to the end of a company, product, or brand name. In general,
avoid forming possessives of company, product or brand names, regardless of who
owns the name.

For more information, see [Possessives](https://make.wordpress.org/docs/style-guide/language-grammar/possessives/#company-product-and-brand-name-possessives).

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/colons/

# Colons

 **Highlight:** Use colons to initiate closely-related content that follows.

## Colons in introductory phrases

Include a colon at the end of a phrase or sentence that list. The text preceding
the colon must distinctly stand alone as a complete sentence.

**Examples**

 **Not recommended:** The settings are:

 * Site title
 * Tagline
 * WordPress Address (URLURL A specific web address of a website or web page on
   the Internet, such as a website’s URL www.wordpress.org)

 **Recommended:** The settings that can be changed are as follows:

 * Site title
 * Tagline
 * WordPress Address (URLURL A specific web address of a website or web page on
   the Internet, such as a website’s URL www.wordpress.org)

 For more information, see [Lists](https://make.wordpress.org/docs/style-guide/formatting/lists/).

## Colons in titles and headings

When you use a colon in a title or heading, capitalize the word following it.

**Examples**

 **Not recommended:** Getting started with WordPress hooksHooks In WordPress theme
and development, hooks are functions that can be applied to an action or a Filter
in WordPress. Actions are functions performed when a certain event occurs in WordPress.
Filters allow you to modify certain functions. Arguments used to hook both filters
and actions look the same.: introduction

 **Recommended:** Getting started with WordPress hooksHooks In WordPress theme and
development, hooks are functions that can be applied to an action or a Filter in
WordPress. Actions are functions performed when a certain event occurs in WordPress.
Filters allow you to modify certain functions. Arguments used to hook both filters
and actions look the same.: Introduction

 **Not recommended:** Recommended settings for benchmarking: new updates this month

 **Recommended:** Recommended settings for benchmarking: New updates this month

## Colons within sentences

In general, when you use a colon in a sentence, lowercase the following word. For
more information, see [Capitalization](https://make.wordpress.org/docs/style-guide/language-grammar/capitalization/).

**Examples**

 **Recommended:** Things that are encouraged: overall simplicity of the document;
brief and concise sentences; and using conditional phrases.

 **Recommended:** You have three options: copy the file, move it or delete it.

**Exceptions**

 * Capitalize the word after the colon if it is a proper noun.
    **Example**
 *  **Recommended:** You can install WordPress on one of the following operating
   systems: Windows, macOS, or Linux.
 * Capitalize the word after the colon if it is a quote.
    **Example**
 *  **Recommended:** What does it mean if I see a message saying: “Error Code 345.
   Do you want to continue?”

## Bold text preceding colon

If non-italic text preceding a colon is bold, then make the colon bold too.

## Code text preceding colon

Don’t include a colon in text preceding code, code back-ticks (`\``), or a `<code
>` tag unless it is part of the code.

For more information about code formatting, see [Code examples](https://make.wordpress.org/docs/style-guide/developer-content/code-examples/)
and [Code in text](https://make.wordpress.org/docs/style-guide/developer-content/code-in-text/).

## Additional Resources

 * [Colons instead of dashes in lists](https://make.wordpress.org/docs/style-guide/punctuation/dashes/#colons-instead-of-dashes-in-lists)
 * [Code examples](https://make.wordpress.org/docs/style-guide/developer-content/code-examples/)
 * [Code in text](https://make.wordpress.org/docs/style-guide/developer-content/code-in-text/)
 * [Lists](https://make.wordpress.org/docs/style-guide/formatting/lists/)

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/commas/

# Commas

 **Highlight:** Use commas to separate items in a series, and to separate certain
kinds of clauses. Use serial commas.

## Oxford/Serial commas

Use the Oxford comma before the conjunction in a series of three or more items.

**Examples**

 **Not recommended:** Ensure that your tone is succinct, natural and friendly towards
the reader.

 **Recommended:** Ensure that your tone is succinct, natural, and friendly towards
the reader.

## Commas following an introductory phrase

Use a comma after an introductory word or phrase.

**Examples**

 **Not recommended:** Ultimately this simplifies the reader’s comprehension.

 **Recommended:** Ultimately, this simplifies the reader’s comprehension.

## Commas separating two independent clauses

Use a comma to join two independent clauses which are separated by a conjunction
such as _and, or, nor, but, for, so, yet._ Insert the comma after the first clause,
that is before the conjunction. Don’t insert a comma if both the clauses are very
short. Likewise, consider rewriting the sentence if it is long and complex.

**Examples**

 **Not recommended:** Copy the file, and continue.

 **Recommended:** Copy the file and continue.

 **Not recommended:** Either download a theme suiting your needs or use one from
the preinstalled themes.

 **Recommended:** Either download a theme suiting your needs, or use one that is
preinstalled.

 **Note:** Don’t use a comma to join independent clauses when you don’t use a conjunction.
Use a [semicolon](https://make.wordpress.org/docs/style-guide/punctuation/semicolons/#semicolons-between-two-independent-clauses)
instead.

**Examples**

 **Not recommended:** Copy the file, then continue.

 **Recommended:** Copy the file; then continue.

## Commas separating independent from dependent clauses

When an independent and dependent clause are separated by a coordinating conjunction,
insert a comma _only if_ the sentence could be misunderstood without one.

**Examples**

 **Not recommended:** Pages can be password protected and can only be modified by
administrators.

 **Recommended:** Pages can be password protected, and can only be modified by administrators.

 **Not recommended:** Permalinks are permanent URLs, and their structure can be
changed.

 **Recommended:** Permalinks are permanent URLs and their structure can be changed.

## Commas separating two or more adjectives in series

Use a comma to separate two or more adjectives that precede a noun that is being
described. Only insert a comma if the meaning of the adjectives doesn’t change by
separating the adjectives with _and_ or reversing the order of them.

**Examples**

 **Recommended:** GutenbergGutenberg The Gutenberg project is the new Editor Interface
for WordPress. The editor improves the process and experience of creating new content,
making writing rich content much simpler. It uses ‘blocks’ to add richness rather
than shortcodes, custom HTML etc. [https://wordpress.org/gutenberg/](https://wordpress.org/gutenberg/)
is a new, intuitive blockBlock Block is the abstract term used to describe units
of markup that, composed together, form the content or layout of a webpage using
the WordPress editor. The idea combines concepts of what in the past may have achieved
with shortcodes, custom HTML, and embed discovery into a single consistent API and
user experience.-editor.

 **Not recommended:** This is an enhanced, mobile UIUI UI is an acronym for User
Interface – the layout of the page the user interacts with. Think ‘how are they
doing that’ and less about what they are doing..

 **Recommended:** This is an enhanced mobile UIUI UI is an acronym for User Interface–
the layout of the page the user interacts with. Think ‘how are they doing that’
and less about what they are doing..

Rewrite sentences for a conversational style and tone if possible.

**Examples**

 **Sometimes okay:** Write accessible, inclusive documentation.

 **Recommended:** Write documentation that is accessible and inclusive of all readers.

## Commas and other clauses

Generally, it is beneficial to use commas for setting off specific kinds of clauses
for better comprehension.

 * Use a comma before the word _which_ at the beginning of a nonrestrictive clause.
   For more information, see [Relative pronouns](https://make.wordpress.org/docs/style-guide/language-grammar/pronouns/#relative-pronouns).
 * Put a semicolon, period, or a dash before a conjunctive adverb such as _therefore,
   hence, besides, however_, and insert a comma after the adverb.
 * Don’t use a comma before the causal conjunction _because_ unless it is being
   used at the start of a nonrestrictive clause.

**Examples**

 **Not recommended:** Click the button which has a dropdown menu.

 **Recommended:** Click the button, which has a dropdown menu.

 **Not recommended:** Input the data in the field otherwise the program won’t work.

 **Recommended:** Input the data in the field; otherwise, the program won’t work.

 **Not recommended:** The command won’t function, because it has been deprecated.

 **Recommended:** The command won’t function because it has been deprecated.

## Commas and numbers

Use a comma to separate the year when writing a complete date. Don’t insert a comma
between the month and year when a specific date isn’t mentioned.

**Examples**

 **Not recommended:** This article was updated in September, 2020 by the author.

 **Recommended:** This article was updated in September 2020 by the author.

 **Not recommended:** This article was updated on September 13 2020 by the author.

 **Recommended:** This article was updated on September 13, 2020, by the author.

For more information about punctuating numbers, see [Numbers](https://make.wordpress.org/docs/style-guide/formatting/numbers/#commas-and-decimal-points-in-numbers).

## Commas with verbs in a compound predicate

Don’t insert a comma between verbs in a compound predicate. A compound predicate
is when two or more verbs pertain to a single subject.
 In general, rewrite a compound
predicate in two sentences, or add a subject for the second verb.

**Examples**

 **Not recommended:** The application parses the data, and displays it in the terminal.

 **Recommended:** The application parses the data. Then it displays the data in
the terminal.

 **Recommended:** The application parses the data, and then it displays the data
in the terminal.

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/dashes/

# Dashes

    - [Typing em dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/?output_format=md#typing-em-dashes)
 * [En dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/?output_format=md#en-dashes)
    - [Typing en dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/?output_format=md#typing-en-dashes)
 * [Colons instead of dashes in lists](https://make.wordpress.org/docs/style-guide/punctuation/dashes/?output_format=md#colons-instead-of-dashes-in-lists)
 * [Additional resources](https://make.wordpress.org/docs/style-guide/punctuation/dashes/?output_format=md#additional-resources)

 **Highlight:** Use an em dash, to set off a break in the flow of a sentence. Use
an en dash to indicate a range of numbers, the minus sign, or negative numbers.

## Em dashes

Use an em dash (—) also known as a long dash, to set off a break in the flow of
a sentence. Em dashes are also used to provide emphasis for parenthetical phrases
more than parentheses themselves. Don’t add spaces before and after the em dash.
Don’t capitalize the first word after an em dash unless the word is a proper noun.

Use one em dash on each side of the phrase that is to be embedded.

**Examples**

 **Not recommended:** You can edit your theme — including the appearance, colors,
and design — in the `styles.css` file.

 **Recommended:** You can edit your theme—including the appearance, colors, and
design—in the `styles.css` file.

You can also use one em dash to initiate a phrase at the end of a sentence.

**Example**

 **Recommended:** If you’re stuck on a particular step, visit the FAQs page—it has
a comprehensive list of common errors, problems, and their solutions.

Don’t use an em dash as a bullet in a list. For more information, see [Lists](https://make.wordpress.org/docs/style-guide/formatting/lists/).
Avoid using an em dash to indicate empty or unoccupied elements such as text fields,
cells, and other values.

### Typing em dashes

**HTMLHTML HTML is an acronym for Hyper Text Markup Language. It is a markup language
that is used in the development of web pages and websites.**
 `&mdash;`

**macOS**
 Press Option+Shift+hyphen.

**Linux desktop environment**
 Enable the Compose key. (Instructions for doing that
vary depending on your Linux distribution.) After the Compose key is enabled, you
can create an em dash by typing the Compose key followed by three hyphens.

Alternatively, press Control+Shift+U, then let go of those keys, then type 2014,
then press either the Return key or the Ctrl/Shift keys.

Note: These Linux options don’t work if you’re signed in to the Linux command line
from a remote system using ssh or the like; you have to be in a Linux desktop environment.

**Windows**
 Turn num lock on, then hold down the left Alt key and type 0151 on
the numeric keypad.

## En dashes

En dashes (–) are generally used to indicate a range of numbers, the minus sign,
or negative numbers. Although you can use en dashes for these purposes, you can
also use hyphens or the word _to_ for numerical ranges.

Use an en dash indicate a range of numbers such as values or dates. Don’t add spaces
before and after the en dash.

**Examples**

 **Not recommended:** The program was under active development from 2012 – 2017.

 **Recommended:** The program was under active development from 2012–2017.

 **Recommended:** Select a range from 10–60 px as the width of the button.

Use an en dash to indicate negative numbers and the minus sign. While writing an
equation with a minus sign, insert a space before and after the minus sign (en dash).
Contrarily, while writing a negative sign (en dash), don’t insert a space after
it but do insert one before the sign.

**Examples**

 **Not recommended:** Enter the CAPTCHA: 20–6=14.

 **Recommended:** Enter the CAPTCHA: 20 – 6 = 14.

 **Not recommended:** The value of the variable must be– 3.

 **Recommended:** The value of the variable must be –3.

For more information, see [Ranges of numbers](https://make.wordpress.org/docs/style-guide/formatting/numbers/#ranges-of-numbers),
[Range of numbers with units](https://make.wordpress.org/docs/style-guide/formatting/units-of-measurement/#ranges-of-numbers-with-units),
and [Numbers and fractions](https://make.wordpress.org/docs/style-guide/punctuation/hyphens/#numbers-and-fractions).

Don’t use an en dash as a bullet in a list. For more information, see [Lists](https://make.wordpress.org/docs/style-guide/formatting/lists/).
Avoid using an en dash to indicate empty or unoccupied elements such as text fields,
cells, and other values.

Don’t use an en dash to indicate a range of times. Use the word _to_ instead of
the en dash. Use an en dash with no surrounding spaces for a schedule or listing.

**Examples**

 **Recommended:** The server was down from 3:00 AM to 5:00 AM.

 **Recommended:** The meeting is scheduled from 15:00–16:00 UTC.

In contrast, for date ranges consisting of two dates and times, use an en dash with
spaces surrounding the dash.

**Examples**

 **Recommended:** 7:30 AM–9:15 AM 05/11/2020 (time range on a single day)

 **Recommended:** 7:30 AM 04/11/2020 – 9:15 AM 05/11/2020 (date and time range)

 For more information, refer [Dates and times](https://make.wordpress.org/docs/style-guide/formatting/dates-times/).

### Typing en dashes

**HTML**
 `&ndash;`

**macOS**
 Press Option+hyphen.

**Linux desktop environment**
 Enable the Compose key. (Instructions for doing that
vary depending on your Linux distribution.) After the Compose key is enabled, you
can create an em dash by typing the Compose key followed by two hyphens.

Alternatively, press Control+Shift+U, then let go of those keys, then type 2013,
then press either the Return key or the Ctrl/Shift keys.

Note: These Linux options don’t work if you’re signed in to the Linux command line
from a remote system using ssh or the like; you have to be in a Linux desktop environment.

**Windows**
 Turn num lock on, then hold down the left Alt key and type 0150 on
the numeric keypad.

## Colons instead of dashes in lists

Sometimes writers use em dashes, en dashes, or hyphens surrounded by spaces in lists
to separate a title or heading with its description. Ideally, use [colons](https://make.wordpress.org/docs/style-guide/punctuation/colons/)
or [description lists](https://make.wordpress.org/docs/style-guide/formatting/lists/#description-list)
for separating them.

**Examples**

 **Not recommended:** Getting started with WordPress hooksHooks In WordPress theme
and development, hooks are functions that can be applied to an action or a Filter
in WordPress. Actions are functions performed when a certain event occurs in WordPress.
Filters allow you to modify certain functions. Arguments used to hook both filters
and actions look the same. – Introduction

 **Recommended:** Getting started with WordPress hooksHooks In WordPress theme and
development, hooks are functions that can be applied to an action or a Filter in
WordPress. Actions are functions performed when a certain event occurs in WordPress.
Filters allow you to modify certain functions. Arguments used to hook both filters
and actions look the same.: Introduction

 **Not recommended:** You can install WordPress on one of the following operating
systems – Windows, macOS, or Linux.

 **Recommended:** You can install WordPress on one of the following operating systems:
Windows, macOS, or Linux.

## Additional resources

 * [Hyphens](https://make.wordpress.org/docs/style-guide/punctuation/hyphens/)

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/ellipses/

# Ellipses

    - [Punctuation and spacing](https://make.wordpress.org/docs/style-guide/punctuation/ellipses/?output_format=md#punctuation-and-spacing)
    - [In text](https://make.wordpress.org/docs/style-guide/punctuation/ellipses/?output_format=md#in-text)
    - [In a user interface](https://make.wordpress.org/docs/style-guide/punctuation/ellipses/?output_format=md#in-a-user-interface)
    - [In illustrations](https://make.wordpress.org/docs/style-guide/punctuation/ellipses/?output_format=md#in-illustrations)
 * [Suspension points](https://make.wordpress.org/docs/style-guide/punctuation/ellipses/?output_format=md#suspension-points)

 **Highlight:** In general, avoid using ellipses.

An _ellipsis_ (plural: _ellipses_) is a set of three contiguous dots that are used
to indicate omission of part of a sentence, phrase, paragraph, or content. For documentation
purposes, use three periods as the dots in an ellipse, unless you use an ellipsis
character. An ellipsis is also used in informal writing to connote a subsiding,
hesitating, or fading expression. The word ellipsis originates from the Greek word
meaning “omission”.

## Using ellipses

### Punctuation and spacing

Use three contiguous periods in a row while writing an ellipsis. Avoid using the
ellipsis character and make use of periods in general. Insert one space before and
after the ellipsis unless a punctuation mark immediately follows the ellipsis; in
this case, don’t insert a space after the ellipsis.

**Examples**

 **Not recommended:** You need to wait for the post to save…and then publish the
post.

 **Recommended:** You need to wait for the post to save … and then publish the post.

### In text

Don’t use ellipses in your documentation. If you have to use ellipses in your documentation,
rewrite your content excluding all unnecessary information while including the necessary
information. Using ellipses in quoted text is acceptable, unless they appear at
the beginning or the end of the text.

**Examples**

 **Not recommended:** The WordPress Documentation handbook states “The Codex is
a community-created repository for WordPress ….”

 **Not recommended:** The WordPress Documentation handbook states: ” … and only
a WordPress.orgWordPress.org The community site where WordPress code is created
and shared by the users. This is where you can download the source code for WordPress
core, plugins and themes as well as the central location for community conversations
and organization. [https://wordpress.org/](https://wordpress.org/) user account
is required to create a page.”

 **Recommended:** The WordPress Documentation handbook states “The Codex is a community-
created repository for WordPress, … And only a WordPress.orgWordPress.org The community
site where WordPress code is created and shared by the users. This is where you
can download the source code for WordPress core, plugins and themes as well as the
central location for community conversations and organization. [https://wordpress.org/](https://wordpress.org/)
user account is required to create a page.”

#### Ending a sentence with an ellipsis

When a sentence ends with an ellipsis, insert a period right after the three dots
of the ellipsis, without any intervening space. This applies for ellipses both in
quoted and unquoted text.

**Examples**

 **Not recommended:** The WordPress Documentation handbook states “The Codex is
a community-created repository for WordPress …”.

 **Not recommended:** The Codex is a community-created repository for WordPress ….

 **Recommended:** The Codex is a community-created repository for WordPress ….

### In a user interface

Only use ellipses in user interfaces if it is absolutely needed to indicate a pause
in conversational UI messages. For example, the text in a UI message might read “
_Searching the database …_“.
 When UI elements have text with ellipses in them,
exclude them from the documentation describing that UI element, unless it could
cause confusion. For example, if the text in the user interface reads “_Publish …_“,
document the text as “click **Publish**“.

### In illustrations

If required, you can use ellipses in multiple-part callouts, such as in images,
illustrations, screenshots, and graphics. Insert a space before the ellipsis at
the end of a phrase that continues later; and insert an ellipsis followed by a space
at the beginning of a phrase that’s continued from a previous phrase. If the callout
ends with additional punctuation, such as a period or comma, insert a space between
the punctuation mark and the ellipsis.

**Example**

 **Recommended:**

Read the instructions in the figure …

[_image_]

… and proceed to the next step.

## Suspension points

When ellipses are used to connote hesitation, a pause, or an unfinished thought,
they are known as suspension points. Generally, suspension points indicate an informal,
spoken language tone. Avoid using suspension points in your documentation.

**Example**

 **Not recommended:** The package installation might not run … but we’ll see.

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/exclamation-points/

# Exclamation points

 **Highlight:** Only use exclamation points unless absolutely needed, except in
code examples.

Use exclamation points in documentation unless absolutely needed. Use exclamation
points sparingly except in code examples.
 Rather than using exclamation points
to express important content, you can use [notices](https://make.wordpress.org/docs/style-guide/formatting/notices/)
such as _**Warning**, **Note**,_ or _**Caution**_.

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/hyphens/

# Hyphens

 **Highlight:** Hyphenate words only when needed for clarity.

## Predicate adjectives

Don’t hyphenate a predicate adjective unless specifically mentioned in the [Word list and usage dictionary](https://make.wordpress.org/docs/style-guide/word-list/)
or otherwise. An adjective predicate is an adjective that modifies the subject of
the sentence. The adjective and the subject are connected by a linking verb.

**Examples**

 **Not recommended:** The image needs to be high-resolution.

 **Recommended:** The image needs to be high resolution.

 **Not recommended:** The document is up-to-date.

 **Recommended:** The document is up to date.

## Compound modifiers

Use hyphenated compound modifiers before a noun. A compound modifier (also known
as a noun modifier) precede and modify the noun as a unit. Only hyphenate two or
more words that precede and modify the noun as a unit of it doesn’t result in undue
confusion. Don’t hyphenate a compound modifier when you use it after a noun.

**Examples**

 **Not recommended:** Don’t use the recently deprecated tool.

 **Recommended:** Don’t use the recently-deprecated tool.

 **Not recommended:** The high capacity website hosting is impressive.

 **Recommended:** The high-capacity website hosting is impressive.

Hyphenate two or more words that precede and modify the noun:

 * If one of the words is a past or present participle (a verb ending in _-ing_
   or _-ed_ being used as an adjective or noun).
    - For example, _well-formatted text, mind-stimulating blog_, or _left-aligned
      paragraph_.
 * If the compound modifier is a number or a single letter with a noun or participle.
    - For example, _three-pronged approach, Cartesian x-axis_, or _4-sided quadrilateral_.

In compound words that precede and modify a noun as a unit, don’t hyphenate:

 * The word _very_ when it precedes another modifier.
    - For example, _very high capacity_ or _very fast storage_.
 * Adverbs ending in _-ly_ when they precede another modifier. Don’t hyphenate adverbs
   unless absolutely needed for clarity. If you’re doubtful of a particular word
   being an adverb, first refer the [Word list and usage dictionary](https://make.wordpress.org/docs/style-guide/word-list/);
   if it’s not covered there, refer the [American Heritage Dictionary](https://ahdictionary.com/)
   and [Merriam-Webster](https://www.merriam-webster.com/).
    - For example, _highly intensive processing_ or _readily available source code_.

## Compound words

When two or more words are joined to form a new word, it is called a compound word.
Hyphenate compound nouns when one of the words is abbreviated.

**Examples**

 * e-learning
 * e-commerce

To determine if a particular word can be hyphenated or not, refer the [Word list and usage dictionary](https://make.wordpress.org/docs/style-guide/word-list/).
If you’re doubtful of a particular word, and if it’s not covered in the [Word list and usage dictionary](https://make.wordpress.org/docs/style-guide/word-list/),
refer the [American Heritage Dictionary](https://ahdictionary.com/) and [Merriam-Webster](https://www.merriam-webster.com/).

## Numbers and fractions

Hyphenate compound numerals and fractions.

**Examples**

 * Jump to the thirty-second page in the user manual.
 * Split the columns into one-thirds using the column blockBlock Block is the abstract
   term used to describe units of markup that, composed together, form the content
   or layout of a webpage using the WordPress editor. The idea combines concepts
   of what in the past may have achieved with shortcodes, custom HTML, and embed
   discovery into a single consistent API and user experience..

[En dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/#en-dashes)(–)
are generally used to indicate a range of numbers, the minus sign, or negative numbers.
Although you can use en dashes for these purposes, you can also use hyphens or the
word _to_ for numerical ranges. Use an en dash indicate a range of numbers such
as values or dates. Don’t add spaces before and after the en dash or the hyphen.
Use an en dash instead of a hyphen in a compound adjective when the compound adjective
includes an open compound.

For more information, see [En dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/#en-dashes),
[Range of numbers](https://make.wordpress.org/docs/style-guide/formatting/numbers/#range-of-numbers),
and [Range of numbers with units](https://make.wordpress.org/docs/style-guide/formatting/units-of-measurement/#ranges-of-numbers-with-units).

## Prefixes and suffixes

Avoid creating new words by adding [prefixes or suffixes](https://make.wordpress.org/docs/style-guide/language-grammar/prefixes-suffixes/)
to existing words. Rewrite the word to avoid creating a new word, so as to prevent
any confusion.

Don’t hyphenate a word that has a prefix or suffix, in the following situations:

 * After these prefixes: _auto-, co-, cyber-, exa-, giga-, kilo-, mega-, micro-,
   non-, pre-, re-, sub-, tera-, un-_ unless excluding it could cause confusion.

Hyphenate a word that has a prefix or suffix, in the following situations:

 * When not hyphenating results in a confusing word; for example, _non-native, re-
   count, re-mark_.
 * When a number or a capital letter follows the prefix; for example, _non-English,
   pre-2000_.
 * When the prefix is _self-_; for example, _self-diagnosis, self-exclusion_.
 * When the prefix is followed by a word that is already hyphenated.
 * When the prefix ends in a vowel, and the word it precedes starts with the same
   vowel; for example, _co-operate, anti-immune, re-establish_. [review]
 * When the prefix is followed by a compound word that contains a space. In this
   case, the space is replaced with a hyphen; for example, _world wide web_ but
   _pre-world-wide-web media_.

For more information, see [Prefixes and suffixes](https://make.wordpress.org/docs/style-guide/language-grammar/prefixes-suffixes/).

## Space around hyphens

Don’t insert a space on either side of a hyphen, except when using a suspended hyphen,
in which case insert a space after (but not before) the hyphen.

## Suspended hyphens

Don’t use suspended compound modifiers that have a common base. You can either spell
out the entire phrase, or leave a space after hyphen and leave out the base. Don’t
form suspended compound modifiers from one-word adjectives.

**Examples**

 **Not recommended:** You can use either left, right, or center-aligned text formatting.

 **Recommended:** You can use either left-aligned, right-aligned, or center-aligned
text formatting.

 **Recommended:** You can use either left-, right-, or center-aligned text formatting.

## Capitalization in hyphenated compound words

Capitalize any part of a hyphenated compound word even if it isn’t capitalized without
a hyphen.

**Examples**

 **Not recommended:** well-formatted text is a vital element to enhance readability.

 **Recommended:** Well-formatted text is a vital element to enhance readability.

## Additional resources

Don’t use hyphens and dashes interchangeably. For more information, see [Dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/).

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/parentheses/

# Parentheses

 **Highlight:** Use parentheses sparingly.

Avoid using parentheses in standard sentences unless absolutely needed. Readers
tend to overlook content inside parentheses, so avoid enclosing important information
in them. Consider rephrasing your sentences even for lesser important information
as well. You can use [em dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/#em-dashes),
[commas](https://make.wordpress.org/docs/style-guide/punctuation/commas/), [semicolons](https://make.wordpress.org/docs/style-guide/punctuation/semicolons/),
or [periods](https://make.wordpress.org/docs/style-guide/punctuation/periods/) to
provide emphasis for parenthetical phrases.

## General dos and don’ts for parentheses

 * When referring to a sign or symbol, introduce its spelled out version and then
   the sign or symbol in parentheses.
    **Examples**
 *  **Recommended:** Use an em dash (—) also known as a long dash, to set off a
   break in the flow of a sentence.
 *  **Recommended:** End the tag with a greater than (>) symbol.
 * If parentheses are introduced inside a sentence, then don’t capitalize the first
   word even if the enclosed sentence is a complete sentence. Capitalize the first
   word of the sentence enclosed in parentheses if it is a proper noun.
    **Examples**
 *  **Not recommended:** Emphasize on the task to be accomplished (The task that
   you’re writing about), rather than how the user should interact with the UIUI
   UI is an acronym for User Interface – the layout of the page the user interacts
   with. Think ‘how are they doing that’ and less about what they are doing. element.
 *  **Recommended:** Emphasize on the task to be accomplished (the task that you’re
   writing about), rather than how the user should interact with the UIUI UI is
   an acronym for User Interface – the layout of the page the user interacts with.
   Think ‘how are they doing that’ and less about what they are doing. element.
 * Don’t use parentheses within parentheses for text. Rephrase the sentence if necessary.
 * Use brackets to set off information already within parentheses.
 * If a complete, independent sentence is enclosed within parentheses, include the
   period or comma inside the parentheses.
 * Place colons and semicolons outside parentheses.
 * Place question marks and exclamation points inside the parentheses only when
   they’re part of the parenthetical phrase.
 * Be watchful of misplaced, unopened, or unclosed parentheses.

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/periods/

# Periods

    - [Bulleted and numbered lists](https://make.wordpress.org/docs/style-guide/punctuation/periods/?output_format=md#bulleted-and-numbered-lists)
    - [Description lists](https://make.wordpress.org/docs/style-guide/punctuation/periods/?output_format=md#description-lists)
 * [Periods with URLs](https://make.wordpress.org/docs/style-guide/punctuation/periods/?output_format=md#periods-with-urls)
 * [Periods with parentheses](https://make.wordpress.org/docs/style-guide/punctuation/periods/?output_format=md#periods-with-parentheses)
 * [Periods with quotation marks](https://make.wordpress.org/docs/style-guide/punctuation/periods/?output_format=md#periods-with-quotation-marks)
 * [Periods with abbreviations](https://make.wordpress.org/docs/style-guide/punctuation/periods/?output_format=md#periods-with-abbreviations)
 * [Periods with numbers](https://make.wordpress.org/docs/style-guide/punctuation/periods/?output_format=md#periods-with-numbers)
 * [Periods with headings](https://make.wordpress.org/docs/style-guide/punctuation/periods/?output_format=md#periods-with-headings)
 * [Periods with captions](https://make.wordpress.org/docs/style-guide/punctuation/periods/?output_format=md#periods-with-captions)

 **Highlight:** End all independent sentences with a period, and insert one space
after the period.

End all independent sentences with a period, and insert one space after the period.
If the sentence or phrase ends with punctuation other than a period, such as a question
mark or exclamation point, don’t use a period.

## Periods with lists

Ending a list item with a period depends on several factors including the kind of
list the item appears in.

For more information, see [Lists](https://make.wordpress.org/docs/style-guide/formatting/lists/).

### Bulleted and numbered lists

In general, use a period at the end of each item in bulleted and numbered lists.

**Exceptions:** Single-word items, items entirely in code font, and items with no
verbs.

For more information, see [Capitalization and punctuation in lists](https://make.wordpress.org/docs/style-guide/formatting/lists/#capitalization-and-punctuation).

### Description lists

Don’t insert a period at the end of a term, and insert a period at the end of a
description.

## Periods with URLs

Ending a URLURL A specific web address of a website or web page on the Internet,
such as a website’s URL www.wordpress.org or file path immediately with a period
may confuse readers and even alter the URL.

If the period isn’t part of the URL, you can differentiate it by highlighting it
different than normal text. In most browsers, a link is highlighted blue by default,
which helps to differentiate it from the period. When you put a period after a URL,
don’t leave any space between the last character of the URL and the period.

To indicate that the period ending a sentence is not a part of the URL, you can
rewrite the sentence so that the URL isn’t at the end. Another alternative is to
exclude the period by putting the URL on a separate line other than the text.

**Examples**

 **Not recommended:** For more information on accessibility, refer https://wordpress.
org/about/accessibility/.

 **Not recommended:** For more information on accessibility, refer https://wordpress.
org/about/accessibility/ .

 **Recommended:** For more information on accessibilityAccessibility Accessibility(
commonly shortened to a11y) refers to the design of products, devices, services,
or environments for people with disabilities. The concept of accessible design ensures
both “direct access” (i.e. unassisted) and “indirect access” meaning compatibility
with a person’s assistive technology (for example, computer screen readers). (https://
en.wikipedia.org/wiki/Accessibility), refer:

> [Accessibility](https://wordpress.org/about/accessibility/)

 **Recommended:** For more information on accessibility, refer https://wordpress.
org/about/accessibility/ and related resources.

## Periods with parentheses

If the last part of a sentence ends within parentheses, insert the period after
the closing parenthesis. If a complete, independent sentence is enclosed within
parentheses, include the period inside the parentheses.

**Examples**

 **Recommended:** You can categorize your post with multiple tags (the default tag
is uncategorized).

 **Recommended:** Making changes to the code while running the server could cause
errors in your databases. (Specifically, it can cause corrupted tables or duplicate
values.)

## Periods with quotation marks

If a sentence or phrase ends with content inside quotation marks, place the period
inside the quotation marks, even if it doesn’t belong in the quoted content. If
the sentence or phrase inside the quotation marks ends with punctuation other than
a period, such as a question mark or exclamation point, don’t use a period.

**Examples**

 **Recommended:** The developer said, “This APIAPI An API or Application Programming
Interface is a software intermediary that allows programs to interact with each
other and share data in limited, clearly defined ways. is the newest version.”

 **Recommended:** Regarding regular updates, the user asked, “When can we expect
a version update?”

For more information, see [Quotation marks](https://make.wordpress.org/docs/style-guide/punctuation/quotation-marks/#quotation-marks-with-commas-and-periods).

## Periods with abbreviations

Use periods at the end of shortened words. Don’t use periods with acronyms and initialisms.
Similarly, don’t use periods with commons words that are abbreviations such as _app_
or _demo_.

For more information, see [Abbreviations](https://make.wordpress.org/docs/style-guide/language-grammar/abbreviations/#periods).

## Periods with numbers

Use a period to represent a decimal point.

For more information, see [Numbers](https://make.wordpress.org/docs/style-guide/formatting/numbers/#commas-and-decimal-points-in-numbers).

## Periods with headings

Don’t end headings, subheadings, or titles with periods.

For more information, see [Headings and titles](https://make.wordpress.org/docs/style-guide/formatting/headings/#formatting-headings).

## Periods with captions

In general, avoid using periods with captions.

For more information, see [Text associated with images](https://make.wordpress.org/docs/style-guide/formatting/media/#text-associated-with-images).

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/question-marks/

# Question marks

 **Highlight:** Use question marks sparingly.

Use questions sparingly. Documentation is supposed to provide the readers with information
rather than asking questions.

You can ask questions from the reader’s point of view. Also, it is acceptable to
use questions in quoted text from user interface elements, FAQs, or reader questions.

**Examples**

 **Not recommended:** Did you forget your password?

 **Recommended:** If you forgot your password, follow these steps.

 **Recommended:** What does it mean if I see a message saying: “Error Code 345.
Do you want to continue?”

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/quotation-marks/

# Quotation marks

 **Highlight:** Use straight double quotation marks.

## Quotation marks with commas and periods

Place commas and periods inside quotation marks; in the American (US) English style.

**Examples**

 **British English:** Further research is published on the homepage under the dropdown
titled “Recent Findings”.

 **American (US) English:** Further research is published on the homepage under
the dropdown titled “Recent Findings.”

If punctuation is part of the quoted material, include it inside the quotation marks.

**Examples**

 **Recommended:** What does it mean if I see a message saying: “Error Code 345.
Do you want to continue?”

 **Recommended:** Learn how one of the biggest nuisances online – “spam comments,”
are filtered out on blogs.

When you put a specific string, term, or phrase in quotation marks, put any punctuation
outside the quotation marks. Don’t add or remove anything from the string or term.
Altering it may cause unforeseen issues or difficulties.

**Examples**

 **Not recommended:** If you change the input field titled “password,” the file
needs to be updated.

 **Better:** If you change the input field titled “password”, the file needs to
be updated.

 **Recommended:** If you change the input field titled `password`, the file needs
to be updated.

## Straight and curly quotation marks

The direction of curly quotation marks (“ ”) and apostrophes are often confused
while writing documentation. If you use straight quotation marks (” “) the trouble
of tracking and writing the starting and closing curly quotation marks is eliminated.
Code specifically needs straight quotation marks for its syntax, in addition to
user input fields. Furthermore, not all software environments use curly quotation
marks.

Hence, in general, use straight quotation marks (” “).

**Examples**

 **Not recommended:** What does it mean if I see a message saying: “Error Code 345.
Do you want to continue?”

 **Recommended:** What does it mean if I see a message saying: “Error Code 345.
Do you want to continue?”

## Single quotation marks

Use single quotation marks only in the following cases:

 * In code, where single quotation marks are used.
 * When you have to nest a quotation inside quotation marks.

While nesting a quotation inside another quotation, use the American (US) English
style, which is to use double quotation marks for the outer quotation, and single
quotation marks for the inner one.

**Examples**

 **British English:** He said, ‘My colleague asked, “What does this error mean?”
as he hurriedly tried to fix it.’

 **American (US) English:** He said, “My colleague asked, ‘What does this error
mean?’ as he hurriedly tried to fix it.”

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/semicolons/

# Semicolons

 **Highlight:** Use semicolons to separate independent clauses.

Generally, sentences with semicolons are complicated and are often difficult to
comprehend for readers. Try to simplify sentences containing semicolons by rephrasing,
splitting, or itemizing them. In general, use semicolons judiciously.

## Semicolons between two independent clauses

Use a semicolon between two closely associated independent clauses that aren’t joined
by a conjunction, where a comma or period isn’t quite pertinent.

**Examples**

 **Recommended:** Upload the file; then click **Continue**.

 **Recommended:** There are multiple different blockBlock Block is the abstract
term used to describe units of markup that, composed together, form the content
or layout of a webpage using the WordPress editor. The idea combines concepts of
what in the past may have achieved with shortcodes, custom HTML, and embed discovery
into a single consistent API and user experience. types that are available; a list
of blocks can be found [here](https://wordpress.org/support/article/blocks/).

## Semicolons before an independent clause

Use a semicolon before an independent clause that is set off with phrases such as
_for example, that is, in particular_, or _to illustrate_.

**Examples**

 **Recommended:** The preview shows how the page will look on the front end; that
is, the final published website.

 **Recommended:** Making changes to the code while running the server could cause
errors in your databases; specifically, corrupted tables or duplicate values.

## Semicolons before a conjunctive adverb

Insert a semicolon before conjunctive adverbs that join two independent clauses.
Examples of commonly used conjunctive adverbs include _accordingly, additionally,
also, besides, consequently, finally, furthermore, hence, however, indeed, in fact,
likewise, similarly, therefore_, and _thus_.

**Examples**

 **Recommended:** You can drag and drop the blockBlock Block is the abstract term
used to describe units of markup that, composed together, form the content or layout
of a webpage using the WordPress editor. The idea combines concepts of what in the
past may have achieved with shortcodes, custom HTML, and embed discovery into a
single consistent API and user experience. if you select it; similarly, you can
also use the **Move Up** and **Move Down** buttons to move the block.

 **Recommended:** After you re-run the application, the page gets updated; however,
you’ll need to refresh the page in the browser too.

## Semicolons between contrasting statements

Use a semicolon between two contrasting statements that aren’t joined by a conjunction.

**Example**

 **Recommended:** You don’t need top specs to run WordPress locally; a simple configuration
would be totally adequate.

## Semicolons in a series

When you have separate items in a series that contain their own punctuation such
as commas or periods, use semicolons to separate out the complex series. You can
also segregate the series into a list.

**Examples**

 **Recommended:**

Here’s the quick version of the instructions for those who are already comfortable
with performing such installations: download and unzip the WordPress package if
you haven’t already; create a database for WordPress on your web server, as well
as a MySQLMySQL MySQL is a relational database management system. A database is
a structured collection of data where content, configuration and other options are
stored. [https://www.mysql.com](https://www.mysql.com/) (or MariaDB) user who has
all privileges for accessing and modifying it; (optional) find and rename `wp-config-
sample.php` to `wp-config.php`, then edit the file and add your database information;
upload the WordPress files to the desired location on your web server; run the WordPress
installation script by accessing the URLURL A specific web address of a website
or web page on the Internet, such as a website’s URL www.wordpress.org in a web
browser.

 **Recommended:**

Here’s the quick version of the instructions for those who are already comfortable
with performing such installations:

 * Download and unzip the WordPress package if you haven’t already.
 * Create a database for WordPress on your web server, as well as a MySQLMySQL MySQL
   is a relational database management system. A database is a structured collection
   of data where content, configuration and other options are stored. [https://www.mysql.com](https://www.mysql.com/)(
   or MariaDB) user who has all privileges for accessing and modifying it.
 * (Optional) Find and rename `wp-config-sample.php` to `wp-config.php`, then edit
   the file and add your database information.
 * Upload the WordPress files to the desired location on your web server.
 * Run the WordPress installation script by accessing the URLURL A specific web
   address of a website or web page on the Internet, such as a website’s URL www.
   wordpress.org in a web browser.

---

**Source:** https://make.wordpress.org/docs/style-guide/punctuation/slashes/

# Slashes

 **Highlight:** Avoid using slashes except in code examples, file paths, and URLs.

In general, try to avoid slashes in your documentation, except in code examples,
file paths, and URLs.

## Slashes with combinations

Use a slash to indicate a combination. Capitalize the second word if the first word
in the combination is capitalized.

**Examples**

 **Recommended:** Toggle the on/off switch on the dashboard.

 **Recommended:** Toggle the On/Off switch on the dashboard.

 **Recommended:** The UIUI UI is an acronym for User Interface – the layout of the
page the user interacts with. Think ‘how are they doing that’ and less about what
they are doing./UXUX UX is an acronym for User Experience – the way the user uses
the UI. Think ‘what they are doing’ and less about how they do it. for the pluginPlugin
A plugin is a piece of software containing a group of functions that can be added
to a WordPress website. They can extend functionality or add new features to your
WordPress websites. WordPress plugins are written in the PHP programming language
and integrate seamlessly with WordPress. These can be free in the WordPress.org
Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. was recently updated.

 **Recommended:** The website can be developed with HTMLHTML HTML is an acronym
for Hyper Text Markup Language. It is a markup language that is used in the development
of web pages and websites./CSSCSS CSS is an acronym for cascading style sheets.
This is what controls the design or look and feel of a site. as well.

## Slashes with alternatives

Don’t use slashes to separate alternatives. Don’t substitute a slash for the words
_and_ or _or_.

**Examples**

 **Not recommended:** You can install the pluginPlugin A plugin is a piece of software
containing a group of functions that can be added to a WordPress website. They can
extend functionality or add new features to your WordPress websites. WordPress plugins
are written in the PHP programming language and integrate seamlessly with WordPress.
These can be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. by uploading/searching in the directory.

 **Recommended:** You can install the pluginPlugin A plugin is a piece of software
containing a group of functions that can be added to a WordPress website. They can
extend functionality or add new features to your WordPress websites. WordPress plugins
are written in the PHP programming language and integrate seamlessly with WordPress.
These can be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. by uploading it, or searching it
in the directory.

 **Not recommended:** The user must have administrator/editor access to publish
the post.

 **Recommended:** The user must have administrator or editor access to publish the
post.

 **Recommended:** The user must have administrator and editor access to publish
the post.

 **Not recommended:** Repeat the process 2/3 times until you get a favorable result.

 **Recommended:** Repeat the process 2 or 3 times until you get a favorable result.

 **Recommended:** Repeat the process 2 to 3 times until you get a favorable result.

## Slashes with URLs

Use slashes in URLs, local, and internet addresses. Use two slashes after the protocol
name.

**Examples**

 **Recommended:** Navigate to http://localhost/wordpress to start the WordPress
install.

 **Recommended:** Visit https://make.wordpress.org/docs/style-guide/ for additional
information.

 **Recommended:** The uploaded file can be found on ftp://example.com/uploads.

## Slashes with file paths and names

Use forward slashes in computer, server, folder, and file names and paths. For Microsoft
Windows file paths and names, use backslashes.

**Examples**

 **Recommended:** Download the zip file, and extract it into the web directory for
your WAMP (Windows) installation: `C:\wamp\www`.

 **Recommended:** Open the WordPress configuration file: `/var/www/wordpress/wp-
config.php`.

## Slashes with fractions and mathematical equations

Don’t use slashes with fractions, as they may be difficult to comprehend. Using
slashes with fractions could be misunderstood as alternatives or combinations.

**Examples**

 **Not recommended:** 3/4

 **Recommended:** ¾

 **Recommended:** 0.75

 **Recommended:** 75%

Be cautious while using slashes between the numerator and denominator in mathematical
equations.

**Examples**

 **Sometimes okay:** x/2 = 4

 **Sometimes okay:** (x+2)/8 = 2/3

## Slashes with abbreviations

Don’t use abbreviations utilizing slashes. Instead, spell the abbreviation out.

**Examples**

 **Not recommended:** _b/c, w/o, w/, c/o, a/c_

 **Recommended:** because, without, with, care of, account

## Slashes with dates

Don’t use date formats with slashes.

For more information, see [Dates and times](https://make.wordpress.org/docs/style-guide/formatting/dates-times/#things-to-avoid-while-expressing-dates).
