# WordPress Documentation Style Guide — General guidelines

Cut from `mirrors/wordpress-documentation-style-guide-consolidated.md` by
`mirrors/tools/build_style_guide_references.py`. Each page below keeps the
live URL it came from on its `**Source:**` line; the canonical text is
upstream. This file is generated — fix the mirror or the tool, not the file.

---

**Source:** https://make.wordpress.org/docs/style-guide/general-guidelines/

# General guidelines

This section provides general guidelines for writing WordPress documentation.

---

**Source:** https://make.wordpress.org/docs/style-guide/general-guidelines/accessibility/

# Accessibility

 **Highlight:** Write documentation that is accessible to everyone.

The WordPress community and the open sourceOpen Source Open Source denotes software
for which the original source code is made freely available and may be redistributed
and modified. Open Source **must be** delivered via a licensing model, see GPL.
WordPress project is committed to being as inclusive and accessible as possible.
This means ensuring users, regardless of device or ability, to be able to publish
content and maintain a website or application built with WordPress.

## General guidelines

 * Emphasize the reader rather than underlining their inconveniences.
    - Don’t refer a person with a disability as a disabled person (such as referring
      a _visually impaired person_ as _blind_ or _handicapped_).
    - Use approved terminology for people with specific disabilities; such as _Person
      with limited mobility_ (rather than a person who is _crippled_). For more
      information, see [Writing inclusive documentation](https://make.wordpress.org/docs/style-guide/general-guidelines/inclusivity/).
 * Maintain a uniform structure for your document. Emphasize important points both
   stylistically and visually.
 * Use a screen reader to test your documentation. To test a screen reader, see
   [List of screen readers](https://wikipedia.org/wiki/List_of_screen_readers).
 * Consider multi-platform accessibilityAccessibility Accessibility (commonly shortened
   to a11y) refers to the design of products, devices, services, or environments
   for people with disabilities. The concept of accessible design ensures both “
   direct access” (i.e. unassisted) and “indirect access” meaning compatibility
   with a person’s assistive technology (for example, computer screen readers). (
   https://en.wikipedia.org/wiki/Accessibility) for all types of devices and operating
   systems.
 * Document all types of input devices such as voice and gesture based devices,
   controllers, mice, and keyboards. Avoid conventional verbs like _click_, _type_,
   and _touch/swipe_ for interaction. Use inclusive verbs like _input_, _select_,
   etc.
 * Don’t use ableist language. Be inclusive and unbiased while writing about accessibility
   and disability.
 * Take a pragmatic approach to HTMLHTML HTML is an acronym for Hyper Text Markup
   Language. It is a markup language that is used in the development of web pages
   and websites. semantics. Don’t add semantics purely for the sake of semantics;
   but if there is an HTML structure that clearly matches the content, use that
   element. For example, if you have a group of links, it should most likely use
   a list element.
 * Use simple tables and tabular formats. Avoid span tags (such as `rowspan` and`
   colspan`). Tables prove to be difficult for screen readers.

## Text accessibility

 * Use concise and simple sentences.
 * Avoid camel case and all caps text; follow [capitalization](https://make.wordpress.org/docs/style-guide/language-grammar/capitalization/)
   guidelines.
 * Don’t format fonts unnecessarily. For more information, see [Text formatting](https://make.wordpress.org/docs/style-guide/formatting/text/).
 * Use proper heading hierarchy. The H1 is the main heading representing the page
   title on every page or post (article). For subsections, use a correct HTML, Markdown,
   or relevant heading structure — including the use of heading elements for page
   subsections. Heading markup should not be used for presentational purposes.
    - Use H2 through H6 to give internal structure to the page.
    - Don’t skip heading levels.
    - Don’t add extra functionality inside a heading, like links or buttons.
 * Don’t use colored or shaded backgrounds, images, or watermarks behind text. Low
   contrast hinders screen readers.
 * Avoid a screen full of continued text; rather break up your content in paragraphs
   and make use of headings, lists, bullet points, etc.
 * Define and spell out symbols, abbreviations or acronyms.
 * Don’t limit the reader to forcefully open links in a new tab. When a link opens
   in a new tab, the user may lose the ability to go back in the browser. If the
   links do open in a new tab, indicate it using text or an icon.

For more information, see [Text formatting](https://make.wordpress.org/docs/style-guide/formatting/text/).

## Media accessibility

 * Provide clear alternative descriptions for images.
    - Anything that the reader needs to know or do, must be in text as well.
    - Include `alt` and `figure` attributes/tags for images and illustrations.
    - Limit the alt text to 50 characters.
    - Use actual text rather than images of text.
 * Provide transcripts, closed-captions and descriptions for audio and video content.
 * Avoid auto-playing media. Provide controls to start, stop, and pause media.
 * Don’t use flickering or flashing elements. Using them can cause seizures and/
   or motion sickness.

For more information, see [Media](https://make.wordpress.org/docs/style-guide/formatting/media/).

## UI accessibility

 * Don’t use direction-based guidelines solely, for navigating user interfaces (
   for example, ‘_Click the **Publish** button on the right sidebarSidebar A sidebar
   in WordPress is referred to a widget-ready area used by WordPress themes to display
   information that is not a part of the main content. It is not always a vertical
   column on the side. It can be a horizontal rectangle below or above the content
   area, footer, header, or any where in the theme._‘; rather than ‘_Go to the top
   and click the button._‘).
 * Clearly state error descriptions and ways to fix them.
 * Ensure that correct terminology is used for UIUI UI is an acronym for User Interface–
   the layout of the page the user interacts with. Think ‘how are they doing that’
   and less about what they are doing. elements. Additional information about UI
   Elements.
 * Identify and inspect the regions of a page for their `aria-label`. Refer these
   UI elements by their terminology or by their `aria-label`. For more information,
   see [aria-label](https://www.w3.org/TR/WCAG20-TECHS/ARIA14.html).

For more information, see [UI elements and interaction](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/).

## Document rendering

 * Consider that your document will be used on a multitude of devices.
 * Use proper color combinations and contrast ratios, with a [minimum ratio of 4.5:1](https://webaim.org/resources/contrastchecker/).
   Certain colors and patterns may cause problems for some people.
 * Don’t rely on color solely to convey documentation.
 * Similarly, ensure that the document conveys all the information you intended
   when you view it in the following contexts:
    - Without sound
    - Using only sound
    - Without color
    - Using a keyboard
    - With screen magnification
    - Without punctuation

## Additional resources

 * [WordPress Accessibility About page](https://wordpress.org/about/accessibility/)
 * [WordPress Accessibility Team Homepage](https://make.wordpress.org/accessibility/)
 * [WordPress Accessibility Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/accessibility/)
 * [WordPress Accessibility-ready themes](https://wordpress.org/themes/tags/accessibility-ready/)
 * [WordPress Accessibility Handbook](https://make.wordpress.org/accessibility/handbook/)
 * [Development Tools for creating accessible resources](https://make.wordpress.org/accessibility/handbook/which-tools-can-i-use/useful-tools/)
 * [WordPress Core issues with “accessibility” focus](https://core.trac.wordpress.org/focus/accessibility)
 * [Web Accessibility Initiative (WAI)](https://www.w3.org/WAI/)
 * [Authoring Tool Accessibility Guidelines (ATAG) 2.0](https://www.w3.org/TR/ATAG20/)
 * [Web Content Accessibility Guidelines (WCAG) 2.0](https://www.w3.org/WAI/WCAG20/glance/)
 * [Using ARIA](https://www.w3.org/TR/using-aria/)

---

**Source:** https://make.wordpress.org/docs/style-guide/general-guidelines/document-structure/

# Document structure

 **Highlight:** Follow a defined document structure throughout your documentation.

 * Don’t write walls of text in your documentation. Follow a defined structure throughout
   your documentation.
 * Break up long pages of text into paragraphs, lists, and illustrations. Use proper
   heading hierarchy.
 * Maintain a uniform structure for your document. Emphasize important points both
   stylistically and visually.
 * Use concise and simple sentence structures. Ensure that your tone is succinct,
   natural, and friendly towards the reader.

For more information, see [Accessibility](https://make.wordpress.org/docs/style-guide/general-guidelines/accessibility/).

## Text formatting

 * Use consistent typographic formatting and font sizes for your documentation.
 * Use bold formatting for word emphasis and UIUI UI is an acronym for User Interface–
   the layout of the page the user interacts with. Think ‘how are they doing that’
   and less about what they are doing. elements. Additionally, use italics formatting
   for names, terminology, etc.
 * For more information, see [Accessibility](https://make.wordpress.org/docs/style-guide/general-guidelines/accessibility/)
   and the [Formatting](https://make.wordpress.org/docs/style-guide/formatting/)
   section.

## Encoding

 * Ensure that proper character encoding is used. The UTF-8 character encoding is
   used universally, and is the preferred form of encoding.
 * Unicode encoding is preferred because of its single character encoding, by which
   you can handle any specific character that is needed. Using Unicode throughout
   your system also removes the need to track and convert between various character
   encodings.
 * Both developers and writers should use UTF-8 character encoding to ensure uniformity
   and eliminate inaccuracies in their content.
 * For more information about character encoding, see [W3C – Character encodings for beginners](https://www.w3.org/International/questions/qa-what-is-encoding).

---

**Source:** https://make.wordpress.org/docs/style-guide/general-guidelines/external-sources/

# External sources

 **Highlight:** Write using your own words. Don’t copy content from external sources
because it might infringe copyright.

Don’t copy content from external sources because it might infringe copyright. Instead,
paraphrase and link to their content. The types of content that may be copyrighted,
include and are not limited to:

 * Text
 * Media (Images, audio, video)
 * Code
 * Logos and trademarks

**Examples**

 **Not recommended:** Extensible Markup Language-Remote Procedure Call (XML-RPC):“
XML-RPC is a remote procedure call (RPC) protocol which uses XML to encode its calls
and HTTP as a transport mechanism” (https://wikipedia.org/wiki/XML-RPC).

 **Recommended:** [Extensible Markup Language-Remote Procedure Call (XML-RPC)](https://wikipedia.org/wiki/XML-RPC)
is a remote procedure call (RPC) protocol that allows a user or developer to send
a request, formatted in XML, to an external application.

## Avoiding third-party content

Avoid copying third-party content, unless you’re sure that you or your organization
own the assets, or the rights to use those assets. However, you can reference external
third-party content by linking to it. For additional information about linking to
other sites, see [External links](https://make.wordpress.org/docs/style-guide/linking/external-links/).

Avoid copying content from these sources:

 * Third-party sources: Avoid copying from third-party sources which include but
   are not limited to documentation, websites, books, images, videos, papers, blogs,
   podcasts, and other works.
 * Reference sources: Avoid copying from dictionaries, encyclopedias, and Wikipedia.
 * Open sourceOpen Source Open Source denotes software for which the original source
   code is made freely available and may be redistributed and modified. Open Source**
   must be** delivered via a licensing model, see GPL. product documentation: Open
   source software (OSS) has different license options, which can range from no
   reuse without attribution, to complete freedom to use the material; each license
   is different and governs different aspects of a project. It’s not safe to assume
   that you can reuse this content freely. When in doubt, don’t use their content.
 * GitHubGitHub GitHub is a website that offers online implementation of git repositories
   that can easily be shared, copied and modified by other developers. Public repositories
   are free to host, private repositories require a paid subscription. GitHub introduced
   the concept of the ‘pull request’ where code changes done in branches by contributors
   can be reviewed and discussed before being merged by the repository owner. [https://github.com/](https://github.com/):
   Users have the ability to license their repository and content to change and
   distribute open source software. Each license is different and governs different
   aspects of a project. It’s not safe to assume that you can reuse this content
   freely. When in doubt, don’t use their content.

## Reusing content

You can reuse content if you or your organization are the source of that content,
or have the rights to it.

---

**Source:** https://make.wordpress.org/docs/style-guide/general-guidelines/facts-claims/

# Facts and claims

 **Highlight:** Avoid making excessive claims about WordPress’ products and services.
Don’t document or attempt to predict WordPress’ future features, products, or services.

## Avoid excessive claims

Avoid making excessive claims about WordPress’ products and services. Abide with
proven facts as frequently as possible. If you are unsure about some details, research
about it. Reach out to the respective people via the communication channels for
further clarifications.

## Avoid ambiguities

If a particular fact is not verified or proven, don’t go into ambiguities. Substantiate
facts without exception, and then include them to your document.

## Documenting future features

Don’t document or attempt to predict WordPress’ future features, products, or services
unless explicitly specified.

---

**Source:** https://make.wordpress.org/docs/style-guide/general-guidelines/style-voice-tone/

# Style, voice, and tone

    - [User documentation](https://make.wordpress.org/docs/style-guide/general-guidelines/style-voice-tone/?output_format=md#user-documentation)
    - [Developer documentation](https://make.wordpress.org/docs/style-guide/general-guidelines/style-voice-tone/?output_format=md#developer-documentation)

 **Highlight:** Write in a conversational tone that is succinct, natural, and friendly
towards the reader.

Always write your documents in simple, easy-to-understand sentences. _Voice_ and
_tone_ refer to the mood or attitude of a specific work of writing. Ensure that
your voice and tone is succinct, natural, and friendly towards the reader. Avoid
a tone that is commanding or too pushy. Try to keep the document contents straightforward
and effortless to understand.

Don’t try to be overly colloquial. On the other hand, don’t overdo a professional
tone; a formal or robotic tone is unfit as well. Try to achieve a balance between
colloquial and formal language, that is suitable for providing knowledge and information.
The document should persuade readers, rather than overwhelm them with verbiage.

Even if a conversational tone helps, don’t overplay the humor part. Keep the emphasis
on the reader; the reader should not feel out of place. WordPress is a global project,
with the majority of users being non-native English speakers. Hence, take into consideration
that your document may be translated into other languages. Ultimately, educating
and providing information to the reader is of the utmost priority.

## Try to avoid these things

 * Colloquial or idiomatic expressions.
 * Unnecessary metaphors or humor.
 * Cultural and regional references.
 * Technical jargon or slang.
 * Shortcuts, symbols, and abbreviations that could easily be spelled out.
 * Being overly pretentious or conspicuous.
 * Dictating or ordering procedures in a condescending tone. For example, _You must
   click **Publish**_ or _You need to click **Publish**_.
 * Being overly polite. For example, _Please click **Publish**_.
 * Using exclamation points unless absolutely needed.
 * Capitalizing words where it is unnecessary.
 * Excess use of the same phrases and pronouns.
 * Ableist language or figures of speech.
 * Long, complicated, and disconnected sentences.
 * Content that would insult any group or individual.
 * Assumptions on the reader’s fundamental understandings.
 * Using unorthodox conventions.
 * Heavily biased and disparaging information.

Not complying to these guidelines may result in increased document perplexity and
could impede the reader’s understanding.

## Things that are encouraged

 * If you are finding it difficult to achieve a suitable tone and structure, try
   seeking input from your counterparts.
 * Proof-reading the document for the tone and structure.
 * Overall simplicity of the document.
 * Using transition words such as _moreover, although, hence,_ and _therefore_.
 * Using [active voice](https://make.wordpress.org/docs/style-guide/language-grammar/voice/)
   whenever possible.
 * Using [contractions](https://make.wordpress.org/docs/style-guide/language-grammar/contractions/)
   such as _they’ve_ and _don’t_.
 * Brief and concise sentences.
 * Using [second person](https://make.wordpress.org/docs/style-guide/language-grammar/grammatical-person/#second-person)
   by keeping emphasis on the reader such as _you_.
 * Using conditional phrases.
 * Defining technical terms, jargon, and [abbreviations](https://make.wordpress.org/docs/style-guide/language-grammar/abbreviations/).
 * Referring proven [research and facts](https://make.wordpress.org/docs/style-guide/general-guidelines/facts-claims/).

## Tone for specific documentation types

### User documentation

Users search through documentation for an answer to a question. Maintain a friendly,
informal tone, but focus on being clear and concise in a knowledgeable manner. Get
to the point promptly. Explain technical terms, but be careful not to be condescending.
To ensure clarity, start by briefly specifying the context of the current topic.

Write user documentation considering that many users are not native English speakers.
Avoid long narrative paragraphs; keep paragraphs short and focused, with consistent
vocabulary and phrasing that is easy to understand for readers.

**Examples**

 **Not recommended:** If you peek over at the left side, you’ll see a menu called
main navigation, which is the main menu. This menu is a list of functions you as
the administrator can do from the administration screen.

 **Recommended:** On the left side of the screen is the **Main navigation menuNavigation
Menu A theme feature introduced with Version 3.0. WordPress includes an easy to
use mechanism for giving various control options to get users to click from one
place to another on a site.** listing the administrative functions you can perform.

 **Not recommended:** When you visit a website, you probably want the website to
remember some information about you so you don’t have to give it the information
again. Websites can send your browser this kind of information so they remember
you later. This information is called a cookie. I know what you’re thinking, a cookie
is something you eat, right? Well, a computer cookie is different. It’s a tiny bit
of data used by the website so that when you visit the website again, it gleans
things from the cookie like what language you speak.

 **Recommended:** A cookie is a small piece of data used to remember information
about you. When you visit a website, it sends a cookie to your browser, and your
browser stores the cookie in a small file. The next time you visit the website,
it uses that cookie to get information such as your preferred language.

### Developer documentation

In most cases, developers are often searching through documentation for an answer
to a specific technical question. Maintain a direct and precise tone while writing
developer documentation. Use the same tone you would for user documentation, but
you can assume a higher level of technical knowledge in your readers. In tutorials,
it’s helpful to specify what technical knowledge is being assumed.

For a code reference, be as direct as possible. A conversational tone is less appropriate
here.

**Examples**

 **Not recommended:** Sometimes you need to get a setting. This is easy if you use
the `get_option()` function and pass in two parameters (a parameter is a value passed
to a function). One parameter is the name and the other parameter is a default value.

 **Recommended:** To retrieve an option, use the `get_option()` function. It accepts
two parameters: the option name and a default value to return if the option does
not exist.

 **Not recommended:** Next, let’s talk about the `each` method. This method calls
a function for each element and returns an array.

 **Recommended:** The `each` method calls the provided function once for each element
in the array. It returns the original array.

---

**Source:** https://make.wordpress.org/docs/style-guide/general-guidelines/global-audience/

# Writing documentation for an international audience

 **Highlight:** Write documentation for a global audience considering translation.

WordPress is a global project, with its developer community and users spanning the
globe. Both developers and users speak a variety of languages. Approaching documentation
from a global perspective helps the understanding of readers around the globe; while
also increasing its reach.

Both developer and end-user WordPress documentation is written in US English. Just
about [half of WordPress installs](https://wordpress.org/about/stats/) are in non-
English locales. It is presumable that your documentation would be read by developers
and users whose primary language is not English. Hence, writing documentation considering
internationalization, localization, and translation is essential.

## What is internationalization, localization, and translation?

Internationalization and localization (commonly abbreviated as _i18n_ and _l10n_
respectively) are terms used to describe the effort to make WordPress (and other
such projects) available in languages other than the source, or original, language
for people from different locales, who have different dialects and local preferences.

The process of localizing software has two steps. The first step is when developers
provide a mechanism and method for the eventual translation of the product and its
interface to suit local preferences and languages for users worldwide. Its process
includes designing the product and documentation such that localization requires
minimum effort. This process is called internationalization (_i18n_). WordPress
developers have done this already, so in theory, WordPress can be used in any language.

The second step is the actual localization (_l10n_). It is the process by which
a product or service is translated and adapted to another language and culture along
with its documentation. The framework prescribed by developers of the software is
used for this purpose. Localization is done by people who are familiar with the
local language and culture. For example, the _l10n_ process involves adapting to
the laws, currency and political requirements of a specific locale (market). WordPress
has already been localized into many languages (see WordPress’ [list of teams](https://make.wordpress.org/polyglots/teams/)
for more information).

Translation is simply changing the language of the content to another language.
Translation can be done by both editors from the community as well as machine-aided
translation.

## General guidelines

 * If you write for international audiences, research, read, and learn more about
   them.
 * Don’t be specific in terms of culture and religion in your documentation.
 * Use diverse examples that would cater to an international audience. These include
   diverse and inclusive names, email addresses, locations, and professions in examples.
 * Avoid colloquialisms, popular culture references, slang, and idioms in your documentation.
   Phrases like _you got it_, _that’s sick!_, _cool_ are hard to translate and perceive
   by global audiences.
 * Avoid culturally-specific humor and references to cultural practices, traditions,
   holidays, seasons, etc.
 * Express data using the standard international conventions. Measurement units,
   character encoding, currencies, text layouts, date and time formats, phone numbers
   etc. are different all over the world. Don’t assume that everyone is familiar
   with US standards.

## Language guidelines

 * Write concise and succinct sentences, while using simple verbs and vocabulary.
   Longer sentences are difficult to translate and require higher effort.
 * If the sentence consists of more than a few commas, it usually indicates and
   complex sentence. Review the sentence and consider breaking it down to multiple
   sentences. Also, replace complex sentences and paragraphs with illustrations,
   tables, and lists.
 * Use active voice, present tense, and second person.
 * Avoid long chains of modifying words. Keep adverbs and adjectives close to their
   modifying words. Be mindful of placement of words like _only_.
 * Make abundant use of articles such as _a_, _an_, _the_ and helper words such
   as _if_, _then_, etc.
 * Avoid shortcuts, symbols, and abbreviations that could easily be spelled out.
 * Ensure overall consistency in language – particularly names, terminology, punctuation
   and capitalization.
 * Use consistent text and media formatting. See additional information on Text
   Formatting.
 * Deviate from conventional standards only when there’s a genuinely compelling
   purpose in implementing an unconventional style.

## Additional resources

 * [WordPress Polyglots Homepage](https://make.wordpress.org/polyglots/)
 * [WordPress Polyglots Handbook](https://make.wordpress.org/polyglots/handbook/)
 * [Translating WordPress Homepage](https://translate.wordpress.org/)
 * [Getting involved with WordPress translation](https://make.wordpress.org/polyglots/handbook/about/get-involved/first-steps/)

---

**Source:** https://make.wordpress.org/docs/style-guide/general-guidelines/inclusivity/

# Writing inclusive documentation

    - [Replacing established terms](https://make.wordpress.org/docs/style-guide/general-guidelines/inclusivity/?output_format=md#replacing-established-terms)
 * [Avoid ableist and profane language](https://make.wordpress.org/docs/style-guide/general-guidelines/inclusivity/?output_format=md#avoid-ableist-and-profane-language)
 * [Writing about genders](https://make.wordpress.org/docs/style-guide/general-guidelines/inclusivity/?output_format=md#writing-about-genders)
 * [Using diverse examples](https://make.wordpress.org/docs/style-guide/general-guidelines/inclusivity/?output_format=md#using-diverse-examples)
 * [Accessibility and disability](https://make.wordpress.org/docs/style-guide/general-guidelines/inclusivity/?output_format=md#accessibility-and-disability)
    - [Accessibility terminology](https://make.wordpress.org/docs/style-guide/general-guidelines/inclusivity/?output_format=md#accessibility-terminology)

 **Highlight:** Write documentation using inclusive language, word choice, and examples.

The WordPress community is welcoming and inclusive. Write WordPress documentation
considering inclusivity of people of all demographics.

## Unbiased documentation

Write documentation that is unbiased towards the reader and any kind of person in
general. While documenting particularly demanding/sensitive topics, take the time
to educate yourself thoroughly. Ensure that your document doesn’t have content that
may hurt or offend someone unintentionally.

While writing unbiased documentation:

 * Be inclusive of gender identity, race, culture, ability, age, sexual orientation,
   and socioeconomic class. Include a wide variety of professions, educational settings,
   locales, and economic settings in examples.
 * Avoid politicized content. In case political content is to be included, remain
   neutral.
 * Follow [accessibility](https://make.wordpress.org/docs/style-guide/general-guidelines/accessibility/)
   guidelines.
 * Avoid content that would insult or cause harm to people.
 * Don’t make any generalizations about people, countries, and cultures, not even
   positive or neutral generalizations.
 * Don’t write prejudiced and discriminatory content against minority communities.
 * Avoid terms related to historical events.

### Replacing established terms

Various words that are deemed to be non-inclusive are often used in documentation.
If replacing those terms causes confusion for readers, you can refer to the non-
inclusive term in parentheses in the first use, and subsequently use the inclusive
term throughout the rest of the document.

**Examples**

 **Recommended:** If `disallowed_keys` (sometimes called as `blacklist_keys`) exists
in the database, the stored value will be returned.

 **Recommended:** If `disallowed_keys` (previously known as `blacklist_keys`) exists
in the database, the stored value will be returned.

 **Recommended:** The comment blocklist (sometimes called a _blacklist_) shows blocked
and spam comments. Comments that are not on the blocklist are published.

  |  **Recommended** |  **Not Recommended** |
   |  deny list, blocklist, disallowed, unapproved |  blacklist |
 |  allowlist, allowed, approved |  whitelist |
 |  main |  master |
 |  primary/subordinate |  master/slave |
 |  site admin, website author, web developer |  webmaster |
 |  built-in, coreCore Core is the set of software required to run WordPress. The Core Development Team builds WordPress. |  native |

## Avoid ableist and profane language

Be thoughtful of word choice – particularly slang and ableist language. Don’t use
slang, violent and derogatory language such as _dumbass_ and _bitch_.

**Examples**

 **Not recommended:** GutenbergGutenberg The Gutenberg project is the new Editor
Interface for WordPress. The editor improves the process and experience of creating
new content, making writing rich content much simpler. It uses ‘blocks’ to add richness
rather than shortcodes, custom HTML etc. [https://wordpress.org/gutenberg/](https://wordpress.org/gutenberg/)
is damn useful stuff.

 **Recommended:** GutenbergGutenberg The Gutenberg project is the new Editor Interface
for WordPress. The editor improves the process and experience of creating new content,
making writing rich content much simpler. It uses ‘blocks’ to add richness rather
than shortcodes, custom HTML etc. [https://wordpress.org/gutenberg/](https://wordpress.org/gutenberg/)
is a versatile editor.

 **Not recommended:** Only morons use this APIAPI An API or Application Programming
Interface is a software intermediary that allows programs to interact with each
other and share data in limited, clearly defined ways..

 **Recommended:** Using this APIAPI An API or Application Programming Interface
is a software intermediary that allows programs to interact with each other and
share data in limited, clearly defined ways. is not advised.

## Writing about genders

Use gender-neutral language, including pronouns. When writing about a real individual,
use their preferred pronouns. Avoid gendered language such as _manpower_, _man-hours_,
_chairman_, etc. For more information, see [Pronouns and genders](https://make.wordpress.org/docs/style-guide/language-grammar/pronouns/#pronouns-and-genders)
and [they, their, them](https://make.wordpress.org/docs/style-guide/word-list/t/#they-their-them).

**Examples**

  |  **Recommended** |  **Not Recommended** |
   |  human-power, staff, personnel, workforce |  manpower |
 |  humankind, humanity, people |  man, mankind |
 |  operates, controls, utilizes |  mans |
 |  manufactured |  manmade |
 |  chairperson |  chairman |
 |  everyone, folks, people |  guys, gals, girls, boys |

Don’t use _he, him, his, she, her, or hers_ while referencing people. To write around
pronouns, you can:

 * Rewrite using the second person (_you_).
 * Rewrite the sentence to have a plural noun and pronoun.
 * Use the words _person_ or _individual_.
 * Use articles _the, an,_ or _a_ instead of a pronoun.
 * Use a plural pronoun such as _they, their_, or _them_, even if it references
   a single individual.

When writing about a person, use the pronouns that the person prefers. Only use
gendered pronouns such as _he, him, his, she, her, or hers,_ or other pronouns if
a particular individual prefers to be identified with them. It’s acceptable to use
gendered pronouns in direct quotations of people who prefer being identified with
those pronouns.

## Using diverse examples

Represent diverse perspectives and scenarios in text and media. Make use of inclusive
and a diverse range of names, ages, gender identities, locations, professions, and
cultures while depicting people.

 * Avoid making generalizations about people, religions, cultures, regions, and
   countries.
 * Avoid unintentional racial and cultural bias while writing examples.

## Accessibility and disability

 * Research the terminology that the people with disability want to be identified
   with.
 * Don’t refer to people without disabilities as _normal, fit or healthy_; terms
   that would demean people with disabilities. This includes terms that are judgmental
   and victimize people with disabilities as _abnormal_ or _sick_.

### Accessibility terminology

  |  **Recommended** |  **Not Recommended** |
   |  person with disability |  the disabled, handicapped, differently abled, challenged, abnormal |
 |  person without disability |  normal person, healthy person, able-bodied |
 |  has [disability] |  victim of, suffering from, affected by, stricken with |
 |  unable to speak, uses synthetic speech |  dumb, mute |
 |  deaf, low-hearing |  hearing-impaired |
 |  blind, low-vision |  vision-impaired, visually-challenged |
 |  cognitive or developmental disabilities |  mentally-challenged, slow-learner |
 |  person with limited mobility, person with a physical disability |  crippled, handicapped |

For more information, see [Accessibility](https://make.wordpress.org/docs/style-guide/general-guidelines/accessibility/).
