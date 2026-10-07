# WordPress Documentation Style Guide — Formatting

Cut from `mirrors/wordpress-documentation-style-guide-consolidated.md` by
`mirrors/tools/build_style_guide_references.py`. Each page below keeps the
live URL it came from on its `**Source:**` line; the canonical text is
upstream. This file is generated — fix the mirror or the tool, not the file.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/

# Formatting

This section provides formatting guidelines for writing WordPress documentation.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/dates-times/

# Dates and times

    - [Time zones](https://make.wordpress.org/docs/style-guide/formatting/dates-times/?output_format=md#time-zones)
 * [Expressing dates](https://make.wordpress.org/docs/style-guide/formatting/dates-times/?output_format=md#expressing-dates)
    - [Abbreviated and partial dates](https://make.wordpress.org/docs/style-guide/formatting/dates-times/?output_format=md#abbreviated-and-partial-dates)
    - [Dates in the middle of a sentence](https://make.wordpress.org/docs/style-guide/formatting/dates-times/?output_format=md#dates-in-the-middle-of-a-sentence)
    - [Numerical dates](https://make.wordpress.org/docs/style-guide/formatting/dates-times/?output_format=md#numerical-dates)
    - [Things to avoid while expressing dates](https://make.wordpress.org/docs/style-guide/formatting/dates-times/?output_format=md#things-to-avoid-while-expressing-dates)
 * [Seasons and divisions of the year](https://make.wordpress.org/docs/style-guide/formatting/dates-times/?output_format=md#seasons-and-divisions-of-the-year)

 **Highlight:** Use the _day of week, month dd, year_ date format to express dates.
Express time in the 12-hour format and always include _AM_ and _PM_. Use Coordinated
Universal Time (UTC) and always include the time zone for real times.

In general, spell out months and days whenever possible. Use the _day of week, month
dd, year_ date format. For example, use _Sunday, August 16, 2020_. Express time
in the 12-hour format, capitalize AM and PM, and include the time zone.

Expressing dates and times in a clearly defined manner reduces confusion and improves
translation support for a [global audience](https://make.wordpress.org/docs/style-guide/general-guidelines/global-audience/).

## Expressing times

Use the following guidelines to express time:

 * Express time in the 12-hour format. Use the 24-hour format only when absolutely
   needed. If a particular UIUI UI is an acronym for User Interface – the layout
   of the page the user interacts with. Think ‘how are they doing that’ and less
   about what they are doing., statement or code example uses the 24-hour format,
   then use that format throughout the page for consistency.
 * Use numerals to express times of the day.
 * Always include _AM_ and _PM_. Insert a space between the time and _AM_ or _PM_
   and ensure that it is capitalized.

 **Example**

 **Recommended:** 4:32 PM, 12:00 PM, 7:15 AM.

 * For time ranges, use the word _to_ instead of the en dash. Use an en dash with
   no surrounding spaces for a schedule or listing.
    **Examples**
 *  **Recommended:** The server was down from 3:00 AM to 5:00 AM.
 *  **Recommended:** The meeting is scheduled from 15:00–16:00 UTC.
 *
    **Exception:** For date ranges consisting of two dates and times, use an en
   dash with spaces surrounding the dash. **Examples**
 *  **Recommended:** 7:30 AM–9:15 AM 05/11/2020 (time range on a single day)
 *  **Recommended:** 7:30 AM 04/11/2020 – 9:15 AM 05/11/2020 (date and time range)
 * It is acceptable to remove the minutes from round hours.
    **Example**
 *  **Recommended:** 4 PM.
 * Using _noon_ and _midnight_ is acceptable, but not when paired with time in the
   numeral format.
    **Example**
 *  **Not recommended:** _12:00 noon, 12:00 midnight_

### Time zones

Generally, include the time zone if your documentation influences a global audience.
Otherwise, avoid using time zones unless absolutely necessary, where excluding them
would cause confusion. You don’t need to include the time zone where the reader’s
local time is shown automatically.

Use the following guidelines to express time zones:

 * Capitalize time zones. Don’t abbreviate them unless absolutely needed.
 * Specify the spelled-out time zone region and then the UTC or GMT offset in parentheses.
   Don’t insert spaces around the hyphen (-) or plus sign (+).

 **Examples**

 **Recommended:** US Eastern Time (UTC-05:00)

 **Recommended:** Indian Standard Time (UTC+05:30)

 * If the time is the reader’s local time, indicate it accordingly.

 **Example**

 **Recommended:** The weekly team meeting will start at 7:30 PM your local time.

 * Use Coordinated Universal Time (UTC) over Greenwich Mean Time (GMT), in general.
   Don’t write _Universal Time Coordinate_ or _Universal Time Coordinated_ as alternatives
   to Coordinated Universal Time. Only use GMT unless absolutely needed.
 * For time zones without names, use the Coordinated Universal Time (UTC) offset.
   If you’re writing about a particular geographic area, specify the country or
   region if UTC is unavailable.

 **Examples**

 **Recommended:** UTC+7

 **Recommended:** Standard Time (Fiji)

 * Don’t specify _standard time_ or _daylight saving time_ unless specifically writing
   about them. When the time doesn’t change for daylight saving time, use the specific
   time zone without reference to UTC.

## Expressing dates

Spell out the names of months and days of the week. Write the full four-digit year,
rather than a two-digit abbreviation. If including the day of the week, add it before
the month and insert a comma after it. Capitalize the first letter of the days of
the week and months. Use the _day of week, month dd, year_ format.

Don’t use ordinal numbers to indicate a date.

**Examples**

 **Not recommended:** August 16th 2020

 **Recommended:** August 16, 2020

 **Recommended:** Sunday, August 16, 2020

### Abbreviated and partial dates

While indicating only the month and year in a date, don’t use a comma.

**Example**

 **Recommended:** The latest version was released in May 2020.

Don’t abbreviate the days of the week or the month unless absolutely necessary,
although abbreviating is acceptable in UI, tables, or headings where space is limited.
Abbreviate the days of the week to three-letter abbreviations like _Sun, Mon, Tue,
Wed, Thu, Fri_, and _Sat_ and the month to three-letter abbreviations such as _Jan,
May_, and _Sep_. Capitalize the first letter and don’t insert a period at the end
of the abbreviation.

If you abbreviate, do so for the entire date. Don’t combine written-our forms with
abbreviated forms in the same date.

Be consistent with your abbreviations throughout your documentation. For example,
if you abbreviate dates in UI or tables, ensure that all subsequent instances of
dates in UI or tables are abbreviated similarly.

**Examples**

 **Not recommended:** Mon, November 24, 2020

 **Recommended:** Mon, Nov 24, 2020

### Dates in the middle of a sentence

When indicating dates in the _month dd, year_ format in the middle of a sentence,
insert a comma after the year. However, if the date in the middle of the sentence
consists of only the month and year, then don’t insert a comma after the year.

**Examples**

 **Recommended:** It was only until May 4, 2020, that the latest version was released.

 **Recommended:** It was only until May 2020 that the latest version was released.

### Numerical dates

Only express dates in the numerical format unless absolutely required. When indicating
dates in a numerical date format, use the [ISO 8601 international standard](https://wikipedia.org/wiki/ISO_8601)
date format _YYYY-MM-DD_. Separate the year, month and day using hyphens.

Additionally, if you have a choice of what date to write (such as in a fictional
example), then choose a calendar day greater than 12 to differentiate it from the
month.

### Things to avoid while expressing dates

Generally, don’t express months as numerals, as the numerical date format is varied
in different parts of the world.
 For example, the date 01/02/20 is interpreted
differently in different regions:

 * In the British date format, 01/02/20 means February 1, 2020. Here, the order
   is _day, month, year_.
 * In the American date format, 01/02/20 means January 2, 2020. Here, the order
   is _month, day, year_.
 * In date formats of some other regions, 01/02/20 means 20 February, 2001. Here,
   the order is _year, month, day_.

Hence, expressing dates in the numerical format may be confusing for a global audience.
To avoid confusion, generally express dates in words.

**Examples**

 **Not recommended:** 01/02/20 or 01/02/2020

 **Not recommended:** 01.02.20 or 01.02.2020

 **Not recommended:** 01-02-20 or 01-02-2020

 **Recommended:** January 2, 2020

 **Recommended:** Thursday, January 2, 2020

## Seasons and divisions of the year

Avoid referring to seasons, as all regions around the world don’t have similar seasons
and global audiences may find it difficult to correspond them to calendar months.
For example, winter in the northern hemisphere is summer in the southern hemisphere.
Instead of seasons, use months or calendar quarters.

**Examples**

 **Not recommended:** During winter, you may encounter delays in responses due to
staff holidays.

 **Recommended:** During December, you may encounter delays in responses due to
staff holidays.

 **Not Recommended**: All major versions are released in the fall of each year.

 **Recommended:** All major versions are released in October of each year.

If you must mention a specific season, identify either the hemisphere or region,
or both. Don’t capitalize the season, except while designating the issue of a publication.
For example, _Fall 2021_.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/examples/

# Examples and scenarios

 **Highlight:** Write unbiased examples without revealing personally identifiable
information.

Providing examples in documentation helps the reader visualize concepts. Be thoughtful
while writing and coming up with fictitious examples and scenarios; sometimes they
may be unintentionally biased. As well as writing diverse and inclusive documentation,
don’t reveal personally identifiable information such as real names, addresses,
phone numbers, email addresses, or financial information. In addition to fictitious
examples and scenarios, you can also use [placeholder variables](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/#placeholder-variables)
such as `EMAIL_ADDRESS` or `PHONE_NUMBER`.

In general, write examples and scenarios with a global perspective. Some scenarios
may be improbable in some regions, and some may be different altogether. Social
customs, politics, events, holidays, sports, traditions, religion, and legal and
business practices vary worldwide. Avoid discussing technologies and standards that
aren’t adopted worldwide; don’t assume US standards are familiar to everyone. Be
thoughtful on how these fictional scenarios would be perceived by a global audience.

For more information, see [Writing inclusive documentation](https://make.wordpress.org/docs/style-guide/general-guidelines/inclusivity/)
and [Writing documentation for an international audience](https://make.wordpress.org/docs/style-guide/general-guidelines/global-audience/).

## Example domain names

While writing a generic domain name in an example, use example.com, example.org,
or example.net.

## Example email addresses

For example email addresses, use one of the domains listed in [Example domain names](https://make.wordpress.org/docs/style-guide/formatting/examples/?output_format=md#example-domain-names).

**Example**

 **Recommended:** name@example.com

## Example person names

When you need people’s names and their activities in an example, use fictional character
names from non-copyrighted material. Don’t use character names from copyrighted
content such as movies, television shows, or books. Also, don’t use real people’s
names.

If you can’t think of a fictional character name that is not copyrighted, you can
invent new names; although be thoughtful while thinking of new names. Ensure a diverse,
[inclusive](https://make.wordpress.org/docs/style-guide/general-guidelines/inclusivity/),
and [global](https://make.wordpress.org/docs/style-guide/general-guidelines/global-audience/)
demographic while writing examples with people’s names.

If another guideline specifically defines fictional person names, use those names
in your examples.

## Example organization names

When you need an organization name in an example, use _Example Organization_. If
you need multiple organization names or need to differentiate between two fictional
companies, add a description to the organization names. For example, you can use
_Example Tech Organization_ and _Example Education Organization_.

## Example phone numbers

Don’t use real phone numbers in examples.

For phone number examples according to the [North American Numbering Plan](https://make.wordpress.org/docs/style-guide/formatting/phone-numbers/#north-american-phone-numbers),
use a US number in the range (800) 555-0100 through (800) 555-0199. That range is
reserved for use in examples and in fiction.

For international phone number examples, use a US number from the same range and
include the country and area codes. For more information about phone number formatting,
see [Phone numbers](https://make.wordpress.org/docs/style-guide/formatting/phone-numbers/).

**Examples**

 **Recommended:** (800) 555-0139

 **Recommended:** +1 800 555 0139

## Example IP addresses

For IPv4 examples, use one of the [RFC 5737](https://tools.ietf.org/html/rfc5737)
addresses reserved for documentation purposes. These addresses are not used on the
internet. The use the following three reserved IPv4 addresses:

 * `192.0.2.1`
 * `198.51.100.1`
 * `203.0.113.1`

For IPv4 address ranges, use the following examples:

 * `192.0.2.0/24`
 * `198.51.100.0/24`
 * `203.0.113.0/24`

When you need an IPv6 address example, use values from the [RFC 3849](https://tools.ietf.org/html/rfc3849)
range as follows:

 * `2001:db8::`
 * `2001:db8:ffff:ffff:ffff:ffff:ffff:ffff`
 * `2001:db8:1:1:1:1:1:1`
 * `2001:db8:2:2:2:2:2:2`
 * `2001:db8:3:3:3:3:3:3`
 * `2001:db8:4:4:4:4:4:4`

For IPv6 address ranges, use the following example:

 * `2001:db8::/32`

## Example street addresses

Use different locales and regions, and avoid using real street addresses in examples.
Instead, use the following fictional street address:

1000 99th Street
 San Francisco, CA 94110 United States of America

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/filenames/

# Filenames, file formats, and types

    - [Consistent naming](https://make.wordpress.org/docs/style-guide/formatting/filenames/?output_format=md#consistent-naming)
 * [Referring to files](https://make.wordpress.org/docs/style-guide/formatting/filenames/?output_format=md#referring-to-files)
    - [Referring to filenames](https://make.wordpress.org/docs/style-guide/formatting/filenames/?output_format=md#referring-to-filenames)
    - [File interactions](https://make.wordpress.org/docs/style-guide/formatting/filenames/?output_format=md#file-interactions)
    - [Referring to file types](https://make.wordpress.org/docs/style-guide/formatting/filenames/?output_format=md#referring-to-file-types)

 **Highlight:** Use all-lowercase filenames and separate words in filenames with
hyphens.

## Naming files

Use lowercase file, folder, and directory names. In general, separate words in filenames
with hyphens, not underscores. Use standard [ASCII alphanumeric characters](https://wikipedia.org/wiki/ASCII#Character_set)
in file, folder, and directory names.

### Consistent naming

If you’re creating and naming new files where other files have a different naming
convention, see if the other files and folders can be renamed with the aforementioned
guidelines. If you cannot change existing filenames, it is acceptable to use underscores
or other naming conventions that are in use, to remain consistent with the existing
style.

For example, if the directory already has files named as `theme_1.php`, `theme_2.
php`, and `theme_3.php`, it’s acceptable to name the new file as `theme_4.php` instead
of `theme-4.php`.

**Examples**

 **Not recommended:** `newcache.php`, `newCache.php`, `new-caché.php`

 **Recommended:** `new-cache.php`

 **Sometimes okay:** `new_cache.php`

 **Not recommended:** `wpsettings1.php`, `wpSettings1.php`, `WPSettings1.php`, `
wp-settings1.php`, `wpsettings-1.php`

 **Recommended:** `wp-settings-1.php`

 **Sometimes okay:** `wp_settings_1.php`

It’s acceptable to have some inconsistency in file and folder names if it can’t
be avoided otherwise. There might be predefined design and style guidelines or undocumented
guidelines that are already in use. Sometimes, file naming can also be automated
by the product. In those cases, it’s okay to make exceptions for those files.

## Referring to files

### Referring to filenames

While referring to a file, follow these guidelines:

 * Use [code font](https://make.wordpress.org/docs/style-guide/developer-content/code-in-text/).
 * Use the exact name of the file, even if it doesn’t follow the [file naming guidelines](https://make.wordpress.org/docs/style-guide/formatting/filenames/?output_format=md#naming-files).
 * If content from the file is included in the page, follow the [code example](https://make.wordpress.org/docs/style-guide/developer-content/code-examples/)
   guidelines and precede the code sample or content with an introductory statement
   that states the filename.

**Example**

 **Recommended:** In the following `styles.css` file, set the `opacity` to 0.75:

### File interactions

While writing about file interactions, don’t use the file types as a verb.

**Examples**

 **Not recommended:** Unzip the file.

 **Not recommended:** Unzip the zip file.

 **Recommended:** Extract the zip file.

### Referring to file types

Use the formal file type instead of the file extension while referring to file types.
Many file types are expressed in uppercase, as they are acronyms or initialisms.

**Examples**

 **Not recommended:** a `.css` file

 **Recommended:** a CSSCSS CSS is an acronym for cascading style sheets. This is
what controls the design or look and feel of a site. file

 **Not recommended:** a `.py` file

 **Recommended:** a Python file

The following table lists filename extensions and the corresponding file type names
to use:

  |  **Extension** |  **File type name** |
   |  `.css` |  CSS file |
 |  `.csv` |  CSV file |
 |  `.dmg` |  DMG file |
 |  `.exe` |  executable file |
 |  `.gif` |  GIF file |
 |  `.html` |  HTML file |
 |  `.img` |  disk image file |
 |  `.jar` |  JAR file |
 |  `.java` |  Java file |
 |  `.jpg`, `.jpeg` |  JPEG file |
 |  `.js` |  JavaScript file |
 |  `.json` |  JSON file |
 |  `.md` |  Markdown file |
 |  `.mp3` |  MP3 file |
 |  `.mp4` |  MP4 file/MPEG-4 file |
 |  `.pdf` |  PDF file |
 |  `.php` |  PHP file |
 |  `.png` |  PNG file |
 |  `.ps` |  PowerShell file |
 |  `.py` |  Python file |
 |  `.rar` |  RAR file |
 |  `.sh` |  Bash file |
 |  `.sql` |  SQL file |
 |  `.svg` |  SVG file |
 |  `.tar` |  tar file |
 |  `.txt` |  text file |
 |  `.wav` |  WAV file |
 |  `.xml` |  XML file |
 |  `.yaml`, `.yml` |  YAML file |
 |  `.zip` |  zip file |

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/footnotes/

# Footnotes

## Footnotes

 **Highlight:** Avoid writing footnotes in documentation.

A footnote is an annotation provided at the end of a paragraph, chapter, or a page
with additional information related to the content.
 Rather than using a footnote,
you can use a [note](https://make.wordpress.org/docs/style-guide/formatting/notices/#cautions-warnings-notes-and-other-notices),
a [link](https://make.wordpress.org/docs/style-guide/linking/link-text/), use [parentheses](https://make.wordpress.org/docs/style-guide/punctuation/parentheses/),
or [dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/).

If there is no alternative than using a footnote, then use a symbol instead of a
number. Use the symbols: *, †, ‡, §, ‖, ¶ – preferably in that order.

**Examples**

 **Not recommended:** The image needs to be high resolution.^(1)

 **Recommended:** The image needs to be high resolution.*

*Footnote content at the end of the page.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/headings/

> **EMPTY UPSTREAM EXPORT**: WordPress.org serves this page's `?output_format=md` export with no body. The rule text is on the live page, which stays canonical: https://make.wordpress.org/docs/style-guide/formatting/headings/

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/key-terms/

# Key terms

 **Highlight:** Use italics to emphasize or introduce a particular word or phrase
in your content.

When you need to accentuate or emphasize a particular word or phrase in your content,
such as when introducing or discussing a new concept or a new word, use italics.

**Examples**

 **Not recommended:** An administrator’s tool of sorts, “phpMyAdmin” is a PHPPHP
PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source
general-purpose scripting language that is especially suited for web development
and can be embedded into HTML. [https://www.php.net/manual/en/index.php](https://www.php.net/manual/en/index.php)
script meant for giving users the ability to interact with their MySQLMySQL MySQL
is a relational database management system. A database is a structured collection
of data where content, configuration and other options are stored. [https://www.mysql.com](https://www.mysql.com/)
databases.

 **Not recommended:** An administrator’s tool of sorts, **phpMyAdmin** is a PHPPHP
PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source
general-purpose scripting language that is especially suited for web development
and can be embedded into HTML. [https://www.php.net/manual/en/index.php](https://www.php.net/manual/en/index.php)
script meant for giving users the ability to interact with their MySQLMySQL MySQL
is a relational database management system. A database is a structured collection
of data where content, configuration and other options are stored. [https://www.mysql.com](https://www.mysql.com/)
databases.

 **Recommended:** An administrator’s tool of sorts, _phpMyAdmin_ is a PHPPHP PHP(
recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source
general-purpose scripting language that is especially suited for web development
and can be embedded into HTML. [https://www.php.net/manual/en/index.php](https://www.php.net/manual/en/index.php)
script meant for giving users the ability to interact with their MySQLMySQL MySQL
is a relational database management system. A database is a structured collection
of data where content, configuration and other options are stored. [https://www.mysql.com](https://www.mysql.com/)
databases.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/lists/

# Lists

    - [Bulleted lists](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#bulleted-lists)
    - [Numbered lists](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#numbered-lists)
    - [Lettered list](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#lettered-list)
    - [Description list](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#description-list)
    - [Description lists that use run-in headings](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#description-lists-that-use-run-in-headings)
 * [Multiple paragraph list items](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#multiple-paragraph-list-items)
 * [Introductory sentences](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#introductory-sentences)
 * [Sub-steps in numbered procedures](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#sub-steps-in-numbered-procedures)
 * [Capitalization and punctuation](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#capitalization-and-punctuation)
    - [Bulleted, numbered, and lettered lists](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#bulleted-numbered-and-lettered-lists)
    - [Description lists](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#description-lists)
    - [Description lists that use run-in headings](https://make.wordpress.org/docs/style-guide/formatting/lists/?output_format=md#description-lists-that-use-run-in-headings-2)

 **Highlight:** Use numbered lists for sequences, bulleted lists for non-sequential
items, and description lists for pairs of related pieces of data.

Lists are useful to present lengthy and complex content in a clear, well-structured
format that is easy to read and scan for readers. Use a parallel syntax for all
lists and its items.

For more information about procedural steps that provide instructions to achieve
a particular task, see [Procedures and instructions](https://make.wordpress.org/docs/style-guide/formatting/procedures/).

 **Note:** Don’t use a list to express just one item; a single item isn’t really
a list. If you want to distinguish a single item from other text, use a different
type of formatting.
 For additional information about whether lists or tables are
ideal, see [Choosing between a list or a table](https://make.wordpress.org/docs/style-guide/formatting/tables/#choosing-between-a-list-or-a-table).

## Types of lists

### Bulleted lists

Use a bulleted list for items that don’t need to appear in order or sequence and
items that aren’t options.

**Example**

 **Recommended:**
 With this theme, you can do the following:

 * Customize the headerHeader The header of your site is typically the first thing
   people will experience. The masthead or header art located across the top of
   your page is part of the look and feel of your website. It can influence a visitor’s
   opinion about your content and you/ your organization’s brand. It may also look
   different on different screen sizes. and footer.
 * Modify the post format.
 * Add a custom site logo.

### Numbered lists

Use a numbered list for sequential items in order (such as a sequence of steps)
or prioritized items (such as a countdown list).

**Example**

 **Recommended:**
 To set up your development environment, follow these steps: 1.
Download and install Node Version Manager (nvm). 2. Download, install, and start
Docker Desktop following the instructions for your OS. 3. Install the WordPress
environment tool. 4. Start the environment from an existing pluginPlugin A plugin
is a piece of software containing a group of functions that can be added to a WordPress
website. They can extend functionality or add new features to your WordPress websites.
WordPress plugins are written in the PHP programming language and integrate seamlessly
with WordPress. These can be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. or theme directory, or a new working
directory. 5. Set up your code editor.

For more information about nested procedures, see [Sub-steps in numbered procedures](https://make.wordpress.org/docs/style-guide/formatting/procedures/#sub-steps-in-numbered-procedures).

### Lettered list

Use a lettered list to denote options to choose among. In many instances, a lettered
list has mutually exclusive options.

**Example**

 **Recommended:**
 Select a theme to install: A. Twenty Twenty-One B. Twenty Twenty
C. Twenty Nineteen D. Twenty Eighteen

### Description list

Use a description list for listing down items with their descriptions, definitions,
or explanations. A description list is generally used to emphasize multiple items
with their descriptions (such as a glossary).

**Example**

 **Recommended:**

**BacklinkBacklink Incoming links to a web page. Search engines view backlinks as
a reputation builder. The more quality (as determined by the search engine) incoming
backlinks a site has usually helps a site to rank better in search engine results.**

Incoming links to a web page.

**bbPressbbPress Free, open source software built on top of WordPress for easily
creating forums on sites. [https://bbpress.org](https://bbpress.org)**
 Free, open-
source software built on top of WordPress for easily creating forums on sites.

**CLICLI Command Line Interface. Terminal (Bash) in Mac, Command Prompt in Windows,
or WP-CLI for WordPress.**
 Command Line Interface. Terminal (Bash) in Mac, Command
Prompt in Windows, or WP-CLIWP-CLI WP-CLI is the Command Line Interface for WordPress,
used to do administrative and development tasks in a programmatic way. The project
page is [http://wp-cli.org/](http://wp-cli.org/) [https://make.wordpress.org/cli/](https://make.wordpress.org/cli/)
for WordPress.

**DNSDNS DNS is an acronym for Domain Name System – how you assign a human readable
address to a website’s exact numeric coded location (ie. wordpress.org uses the
actual IP address 198.143.164.252).**
 Domain Name System – how you assign a human
readable address to a website’s exact numeric coded location.

### Description lists that use run-in headings

Use a bulleted description list with run-in headings for listing down items with
their descriptions, definitions, or explanations where space is limited.

**Example**

 **Recommended:**

 * **BacklinkBacklink Incoming links to a web page. Search engines view backlinks
   as a reputation builder. The more quality (as determined by the search engine)
   incoming backlinks a site has usually helps a site to rank better in search engine
   results..** Incoming links to a web page.
 * **bbPressbbPress Free, open source software built on top of WordPress for easily
   creating forums on sites. [https://bbpress.org](https://bbpress.org).** Free,
   open-source software built on top of WordPress for easily creating forums on
   sites.
 * **CLICLI Command Line Interface. Terminal (Bash) in Mac, Command Prompt in Windows,
   or WP-CLI for WordPress..** Command Line Interface. Terminal (Bash) in Mac, Command
   Prompt in Windows, or WP-CLIWP-CLI WP-CLI is the Command Line Interface for WordPress,
   used to do administrative and development tasks in a programmatic way. The project
   page is [http://wp-cli.org/](http://wp-cli.org/) [https://make.wordpress.org/cli/](https://make.wordpress.org/cli/)
   for WordPress.
 * **DNSDNS DNS is an acronym for Domain Name System – how you assign a human readable
   address to a website’s exact numeric coded location (ie. wordpress.org uses the
   actual IP address 198.143.164.252)..** Domain Name System – how you assign a
   human readable address to a website’s exact numeric coded location.

## Multiple paragraph list items

A list item can contain more than one paragraph.

To create multiple paragraphs, use the `<p>` element rather than using the `<br>`
element. For more information on which uses of `<br>` are correct and which ones
aren’t, see the [HTML specification for `<br>`](https://html.spec.whatwg.org/multipage/semantics.html#the-br-element).

**Example**

 **Recommended:**
 To transfer files onto your site, you can do the following:

 * Use the file manager provided in your host’s control panel.
 * Use an FTPFTP FTP is an acronym for File Transfer Protocol which is a way of
   moving computer files from one computer to another via the Internet. You can
   use software, known as a FTP client, to upload files to a server for a WordPress
   website. [https://codex.wordpress.org/FTP_Clients](https://codex.wordpress.org/FTP_Clients)
   client.

 FTP or “File Transfer Protocol” has been the most widely used transfer protocol
for over thirty years.

 * Use an SFTPSFTP SFTP is an acronym for Secure File Transfer Protocol: A standard
   protocol to move computer files from one host to another over the Internet with
   enhanced security. client.

## Introductory sentences

In most cases, introduce a list with an introductory sentence that initiates the
list that follows. If the heading of the content explains what the list is about,
and no additional context is required, then don’t include an introductory statement.
You can introduce a list with an imperative statement.

The introductory sentence can end with a colon or a period. Use a period if the
introductory content is extended, and a colon if the introductory statement is shorter
and immediately precedes the list. The text preceding the colon must distinctly
stand alone as a complete sentence. That is, don’t introduce a list with a partial
statement.

For more information about punctuation and capitalization of lists, see [Capitalization and end punctuation](https://make.wordpress.org/docs/style-guide/formatting/lists/#capitalization-and-punctuation).

**Examples**

 **Not recommended:** To set up your development environment:

 **Recommended:** To set up your development environment, follow these steps:

 **Recommended:** Set up your development environment:

 **Not recommended:** The settings are:

 **Recommended:** The settings that can be changed are as follows:

## Sub-steps in numbered procedures

For more information about sub-steps in numbered procedures, see [Procedures and instructions](https://make.wordpress.org/docs/style-guide/formatting/procedures/#sub-steps-in-numbered-procedures).

## Capitalization and punctuation

### Bulleted, numbered, and lettered lists

In most contexts, capitalize each list item. End each list item with a period or
corresponding sentence-ending punctuation.

Don’t add end punctuation in the following cases:

 * If the item consists of a single word or fewer than three words.
 * If the item doesn’t include a verb.
 * If the item is entirely link text, a title, heading, subheading, or a string.
 * If the item is entirely in code font or a UI label.

 **Note:** These exceptions apply to individual list items, so it may happen that
a list might have some items with end punctuation, and some without end punctuation.
To avoid this, use a parallel syntax for all items such that all items either have
or don’t have end punctuation.

**Examples**

 **Recommended:**
 With this theme you can modify the following headerHeader The
header of your site is typically the first thing people will experience. The masthead
or header art located across the top of your page is part of the look and feel of
your website. It can influence a visitor’s opinion about your content and you/ your
organization’s brand. It may also look different on different screen sizes. values:

 * Length
 * Width
 * Color
 * Transparency and opacity
 * Font

 **Recommended:**
 With this theme, you can do the following:

 * Customize the headerHeader The header of your site is typically the first thing
   people will experience. The masthead or header art located across the top of
   your page is part of the look and feel of your website. It can influence a visitor’s
   opinion about your content and you/ your organization’s brand. It may also look
   different on different screen sizes. and footer.
 * Modify the post format.
 * Add a custom site logo.

### Description lists

In some cases, an explanation for a list item may be useful, but this can affect
the punctuation. Rather than writing the descriptions, definitions, or explanations
for a singular item, use a description list and write the descriptions for all the
items in the list. In most contexts, capitalize each list item.

Don’t end the term with a period or other end punctuation, but do end the description
with a period or relevant end punctuation.

**Examples**

 **Not recommended:**
 Word reference:

 * **BacklinkBacklink Incoming links to a web page. Search engines view backlinks
   as a reputation builder. The more quality (as determined by the search engine)
   incoming backlinks a site has usually helps a site to rank better in search engine
   results.**
 * **bbPressbbPress Free, open source software built on top of WordPress for easily
   creating forums on sites. [https://bbpress.org](https://bbpress.org)** – Free,
   open-source software built on top of WordPress for easily creating forums on
   sites.
 * **CLICLI Command Line Interface. Terminal (Bash) in Mac, Command Prompt in Windows,
   or WP-CLI for WordPress.**
 * **DNSDNS DNS is an acronym for Domain Name System – how you assign a human readable
   address to a website’s exact numeric coded location (ie. wordpress.org uses the
   actual IP address 198.143.164.252).**

 **Recommended:**
 Word reference: **BacklinkBacklink Incoming links to a web page.
Search engines view backlinks as a reputation builder. The more quality (as determined
by the search engine) incoming backlinks a site has usually helps a site to rank
better in search engine results.** Incoming links to a web page.

**bbPressbbPress Free, open source software built on top of WordPress for easily
creating forums on sites. [https://bbpress.org](https://bbpress.org)**
 Free, open-
source software built on top of WordPress for easily creating forums on sites.

**CLICLI Command Line Interface. Terminal (Bash) in Mac, Command Prompt in Windows,
or WP-CLI for WordPress.**
 Command Line Interface. Terminal (Bash) in Mac, Command
Prompt in Windows, or WP-CLIWP-CLI WP-CLI is the Command Line Interface for WordPress,
used to do administrative and development tasks in a programmatic way. The project
page is [http://wp-cli.org/](http://wp-cli.org/) [https://make.wordpress.org/cli/](https://make.wordpress.org/cli/)
for WordPress.

**DNSDNS DNS is an acronym for Domain Name System – how you assign a human readable
address to a website’s exact numeric coded location (ie. wordpress.org uses the
actual IP address 198.143.164.252).**
 Domain Name System – how you assign a human
readable address to a website’s exact numeric coded location.

### Description lists that use run-in headings

End the introductory term or phrase with a period or colon. If a description follows
a period, end the description with a period. If it follows a colon; then don’t include
a period if it’s a list of items, phrases without verbs, or a list of items.

In most contexts, capitalize each list item. For the item descriptions, write text
that follows a colon in lowercase and capitalize text that follows a period.

Don’t use a dash or hyphen to set off an item description in a description list.
For more information, see [Colons instead of dashes in lists](https://make.wordpress.org/docs/style-guide/punctuation/dashes/#colons-instead-of-dashes-in-lists).

**Examples**

 **Recommended:**
 Abbreviation glossary:

 * **APIAPI An API or Application Programming Interface is a software intermediary
   that allows programs to interact with each other and share data in limited, clearly
   defined ways.:** Application Programming Interface
 * **FTPFTP FTP is an acronym for File Transfer Protocol which is a way of moving
   computer files from one computer to another via the Internet. You can use software,
   known as a FTP client, to upload files to a server for a WordPress website. [https://codex.wordpress.org/FTP_Clients](https://codex.wordpress.org/FTP_Clients):**
   File Transfer Protocol
 * **CGI:** Common Gateway Interface
 * **URI:** Uniform Resource Identifier
 * **XML:** ExtensibleExtensible This is the ability to add additional functionality
   to the code. Plugins extend the WordPress core software. Markup Language

 **Recommended:**
 There are two ways of getting files onto your site, and once
there, changing them:

 * **By using the file manager provided in your host’s control panel.** Popular
   file managers include cPanel, DirectAdmin, Plesk and….
 * **By using an FTPFTP FTP is an acronym for File Transfer Protocol which is a
   way of moving computer files from one computer to another via the Internet. You
   can use software, known as a FTP client, to upload files to a server for a WordPress
   website. [https://codex.wordpress.org/FTP_Clients](https://codex.wordpress.org/FTP_Clients)
   or SFTPSFTP SFTP is an acronym for Secure File Transfer Protocol: A standard
   protocol to move computer files from one host to another over the Internet with
   enhanced security. client.** File Transfer Protocol has been the most widely
   used transfer protocol….

 **Recommended:**
 The user-level privileges are as follows:

 * **Can modify:** posts, pages, media, user settings
 * **Cannot modify:** password, email, username, user accounts, site settings

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/media/

# Media

    - [General guidelines for images](https://make.wordpress.org/docs/style-guide/formatting/media/?output_format=md#general-guidelines-for-images)
    - [Text associated with images](https://make.wordpress.org/docs/style-guide/formatting/media/?output_format=md#text-associated-with-images)
    - [Image formatting and layout](https://make.wordpress.org/docs/style-guide/formatting/media/?output_format=md#image-formatting-and-layout)

 **Highlight:** Use SVG or PNG files and provide alt text for images.

## Images, illustrations, and graphics

Use images only when they provide visual information that is otherwise difficult
to express with words, examples, or other methods.

### General guidelines for images

 * Don’t use images of text, examples, code snippets, or other media solely comprised
   of text.
 * Include screenshots with a full window; include the window’s title bar in the
   screenshot.
 * Maintain consistency of the operating system (OS) in screenshots – don’t use
   a Linux OS in one and macOS in the other.
 * Don’t include personally identifying information (PII) in screenshots and other
   images.
    - If there is PII in a screenshot, redact it with a solid color with 100% opacity.
      Don’t use blurs, pixelation, mosaic effects, or similar image-processing effects
      to redact PII, as these effects can be reversed to reveal the original information.
    - If you’re exporting an image to a format that can include information on separate
      layers (for example, PDF or TIFF), flatten the image on export.
 * Use drawing tools to create diagrams.
 * For diagrams (such as network flows, system architectures) use vector graphic
   formats like SVG. SVG files stay sharp when you zoom in on the image. If you
   don’t have an SVG image, use a PNG image as it provides better image quality
   than other raster image formats.
 * Don’t use image maps as they prove to be difficult for accessibilityAccessibility
   Accessibility (commonly shortened to a11y) refers to the design of products,
   devices, services, or environments for people with disabilities. The concept
   of accessible design ensures both “direct access” (i.e. unassisted) and “indirect
   access” meaning compatibility with a person’s assistive technology (for example,
   computer screen readers). (https://en.wikipedia.org/wiki/Accessibility). Image
   maps are also problematic for a responsive design implementation that adapts
   to different viewport sizes, while also being complex. Instead, write a list
   of text references following the image.

### Text associated with images

In most cases, introduce an image with an introductory sentence that initiates the
image that follows. If the heading of the content explains what the image is about,
and no additional context is required, then don’t include an introductory statement.
You can introduce an image with an imperative statement.

The introductory sentence can end with a colon or a period. Use a period if the
introductory content is extended, and a colon if the introductory statement is shorter
and immediately precedes the image. The text preceding the colon must distinctly
stand alone as a complete sentence. That is, don’t introduce an image with a partial
statement.

There are different types of text associated with images. Alt text is a concise
description of the image that can replace the image in situations when the image
isn’t visible as well as accessible documentation. For example, people using screen
readers, people using text-only browsers or people having a low-bandwidth internet
connection can benefit from alt text. Alt text should consider the context of the
image, not just its content. For more information, see [alt attribute](https://wikipedia.org/wiki/Alt_attribute).

An image caption is a short description of the image. An image description is a
textual explanation of the image which can be used to convey detailed descriptions
than image captions. Figure captions are optional. When using the [`<figcaption>` element](https://html.spec.whatwg.org/multipage/semantics.html#the-figcaption-element),
both the `<figcaption>` and `<img>` elements must be wrapped in the [`<figure>` element](https://html.spec.whatwg.org/multipage/semantics.html#the-figure-element)
to ensure that the figure caption is properly associated with the image.

**Examples**

 **Recommended (HTMLHTML HTML is an acronym for Hyper Text Markup Language. It is
a markup language that is used in the development of web pages and websites.):**

    ```notranslate
    <br />
    &lt;figure id=&quot;wapuu&quot;&gt;<br />
      &lt;img src=&quot;/assets/images/wapuu.png&quot;<br />
        width=&quot;70&quot;<br />
        alt=&quot;The WordPress mascot Wapuu.&quot;<br />
        longdesc=&quot;#description&quot;&gt;<br />
      &lt;figcaption&gt;&lt;b&gt;Image 1.&lt;/b&gt; Image of WordPress mascot Wapuu.&lt;/figcaption&gt;<br />
    &lt;/figure&gt;<br />
    &lt;div id=&quot;description&quot;&gt;<br />
    &lt;p&gt;The official WordPress mascot &#8211; the adorable cartoon creature Wapuu, was first revealed in 2011.<br />
    &lt;/p&gt;<br />
    &lt;/div&gt;<br />
    ```

 **Recommended (Markdown):**

 ![The WordPress mascot Wapuu.](/assets/images/wapuu.png){: width="70"}

**Image 1.** Image of WordPress mascot Wapuu.

The official WordPress mascot – the adorable cartoon creature Wapuu, was first revealed
in 2011.

#### Alt text

Use an [`alt` attribute](https://html.spec.whatwg.org/multipage/embedded-content.html#alt)
to provide an alternative text for an image; the value must be an appropriate replacement
for the image. Alt text is used to write accessible documentation and is used in
assistive technologies such as screen readers, text-only browsers or low-bandwidth
internet connections. The `alt` attribute helps support navigability in screen readers,
markup validation, and search engine optimization (SEO). If the image is decorative(
not informative) or it’s provided only as a visual aid for information that is already
expressed in text, then provide empty alternative text (`alt=""`) so it will be
ignored by assistive technologies.

The `alt` attribute is required when using the `<img>` element, even if it is an
empty string (`alt=""`). If you don’t use the `alt` attribute, screen readers might
read the filename instead.

As per the [HTML specification](https://html.spec.whatwg.org/dev/images.html#general-guidelines),“
the most general rule to consider when writing alternative text is the following:
the intent is that replacing every image with the text of its alt attribute not
change the meaning of the page.” So if the alternative text is redundant with surrounding
text or it’s not useful to visually impaired readers, use the empty tag.

When writing alt text, follow these guidelines:

 * Write full sentences.
 * Use punctuation in alt text. When encountered with punctuation, screen readers
   pause before continuing.
 * Don’t replace alt text with image captions.
 * Don’t include phrases such as _Image of_ or _Photo of_.
 * Write consistent alt text for repeated occurrences of images.
 * Avoid using all-caps in alt text. Some screen readers read capital letters as
   each letter individually.
 * When writing alt text, consider the context of the image in addition to the content
   of the image.
 * Whenever possible keep alt text length to 155 characters or less for better search
   engine optimization. If you exceed the 155 character limit, include a brief summary
   of the image in the `alt` attribute and also include the `longdesc` attribute
   to link to a more extensive description of the image. The `longdesc` attribute
   value should be a link, not text.

#### Captions

Captions are brief, concise summaries of an image or a figure.
 When writing image
captions, follow these guidelines:

 * Use the form, “**Figure `NUMBER`.** `DESCRIPTION`“.
 * Use punctuation in image captions.
 * In general, avoid using directional language such as _the image above, top, below,
   left-hand side, lower-right side_ in instructions to locate images or other figures.
   Directional language proves to be difficult for accessibility or for localization.
 * Don’t include the image caption in a sentence referencing the image.

#### Descriptions

A description provides a more detailed, textual explanation of information depicted
by an image. Any new information should be conveyed through text, and not introduced
through a figure or image.

The image description should not be confused with the [`longdesc` attribute](https://www.w3.org/TR/WCAG-TECHS/H45.html),
which can be used to provide a more lengthy description of the content and context
of an image than can be conveyed in the `alt` attribute’s recommended 155 character
limit.

When writing image descriptions, follow these guidelines:

 * Write image descriptions when captions are inadequate in conveying complete information.
 * Write text that is associated with the image.
 * Use punctuation in image descriptions.

#### Text in figures

In most cases, avoid embedding text containing information in images, figures, or
screenshots. Particularly, when a new concept is being introduced to the reader,
try not to include it in figures. Text in images impedes accessibility and increases
localization costs if they are localized. If you must embed text in an image, then
ensure the same information is also provided in a form that people with visual disabilities
can use, such as an [image description](https://make.wordpress.org/docs/style-guide/formatting/media/?output_format=md#descriptions).

When you must include text in figures and images, use the following guidelines:

 * Write concise text. Avoid complete sentences and punctuation when possible.
 * Use sentence-case capitalization. Follow [capitalization](https://make.wordpress.org/docs/style-guide/language-grammar/capitalization/#capitalization-and-illustrations)
   guidelines.
 * Don’t embed image descriptions or captions in the figure or image. Instead, put
   figure descriptions and captions in text following the figure.
 * Don’t create new abbreviations to condense text.
 * Use numbered callouts in figures to help you write a figure description, but
   don’t use callouts for detailed annotations.
 * Use full trademarked product names.

#### Accessibility resources

For more information about image accessibility, see the following resources:

 * [Web Content Accessibility Guidelines (WCAG)](https://www.w3.org/WAI/standards-guidelines/wcag/glance/)
 * [General text alternative guidelines from WCAG](https://www.w3.org/WAI/WCAG21/quickref/?showtechniques=111#text-alternatives)
 * [Using `alt` attributes for `img` elements](https://www.w3.org/WAI/WCAG21/Techniques/html/H37.html)
 * [Providing a long description in text near the non-text content](https://www.w3.org/WAI/WCAG21/Techniques/general/G74.html)
 * [Using `longdesc`](https://www.w3.org/WAI/WCAG21/Techniques/html/H45.html)

### Image formatting and layout

 * In most cases, use left-, or right-alignment for images unless specified otherwise.
   Don’t align images in the center.
 * Don’t override your site’s CSS or other existing styling unless required.
 * Visualize and consider how the image will look when printed out.
 * An image can take up the full width of a page.
 * In general, don’t use an image that is larger than its intended container. Resize
   the image if its dimensions exceed the container’s specifications.
 * Resize or reformat high resolution images that take up too much space.
 * Don’t link to the figure from within the same page unless it’s a very long page
   and you’re linking to it from quite far away on the page.
 * Don’t put the `<img>` inside a `<p>`.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/notices/

# Notices

 **Highlight:** Use notices to warn, alert, notify, or provide useful information
to readers.

## Cautions, warnings, notes, and other notices

To warn, alert, notify, or provide useful information to the reader that isn’t part
of the flow of text or needs to be highlighted, use one of the following notice
types:

 * **Note** or **Info**
    Use this notice type for an informational note or message
   with the `[ info ][ /info ]` (without spaces) short code.
 * **Example**
 *  **Note:** “Wide width” and “Full width” alignment need to be enabled by the
   theme of your site.
 * **Tip**
    Use this notice type to highlight tips and recommended actions with
   the `[ tip ][ /tip ]` (without spaces) short code.
 * **Example**
 *  **Tip:** You can use the slash command to insert a new blockBlock Block is the
   abstract term used to describe units of markup that, composed together, form
   the content or layout of a webpage using the WordPress editor. The idea combines
   concepts of what in the past may have achieved with shortcodes, custom HTML,
   and embed discovery into a single consistent API and user experience..
 * **Caution** or **Alert**
    Use this notice type to suggest readers to proceed
   with caution and alert them to important messages with the `[ alert ][ /alert]`(
   without spaces) short code.
 * **Example**
 *  **Caution:** Using a deprecated version may cause different outcomes.
 * **Warning**
    When something is particularly precarious use this notice type with
   the `[ warning ][ /warning ]` (without spaces) short code. A warning is generally
   stricter and more rigid than a caution.
 * **Example**
 *  **Warning:** Making changes to the code while running the server could cause
   errors in your databases; specifically, corrupted tables or duplicate values.
 * **Tutorial** or **Step**
    Use this notice type to indicate a step or procedure
   in a tutorial with the `[ tutorial ][ /tutorial ]` (without spaces) short code.
 * **Example**
 *  **Step:** Move the selected file to this folder.

Avoid grouping two or more notices together. Consider rewriting or rearranging the
content to avoid confusion.

For more information about short codes and code examples, see [Code examples](https://make.wordpress.org/docs/style-guide/developer-content/code-examples/)
and [Syntax highlighting short codes](https://plugins.trac.wordpress.org/browser/syntaxhighlighter/trunk/syntaxhighlighter.php#L173).

## Other formatting style for notices

If your website or page uses a different standardized formatting style for notices,
you can supersede the aforementioned formatting style.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/numbers/

# Numbers

 **Highlight:** Spell out whole numbers from zero through nine. Follow proper formatting
for numbers.

## Numbers as words

 * Spell out whole numbers from zero through nine, with exceptions as described
   in [Numbers as numerals](https://make.wordpress.org/docs/style-guide/formatting/numbers/?output_format=md#numbers-as-numerals).
   **
   Examples**
    - three databases
    - zero percent
    - 17 documents
    - 15,493 entries
 * Use the spelled-out number when it starts a sentence.
    **Example**
 *  **Recommended:** Twenty files were copied.
 *
    You can rewrite the sentence so that the number doesn’t start the sentence.**
   Examples**
 *  **Not recommended:** 1500 records were cleared from the old directories.
 *  **Recommended:** Freeing up some space in the old directories, almost 1500 records
   were cleared.
 * When a number is followed by another numeral, use a numeral for one and spell
   out the other.
    **Examples**
 *  **Recommended:** The folder contains three 256-bit AES encrypted files.
 *  **Recommended:** The folder contains 3 of the 256-bit AES encrypted files.
 * If one item requires a numeral, use numerals for all the other items of that
   type.
    **Example**
 *  **Recommended:** One instance of the application runs on 2 cores, one on 4 cores,
   and the third one on 6 cores.
 * Spell out indefinite, casual, ambiguous, and rounded numbers.
    **Examples**
 *  **Recommended:** Millions of users use WordPress.
 *  **Recommended:** You can choose from tens of thousands of plugins from the PluginPlugin
   A plugin is a piece of software containing a group of functions that can be added
   to a WordPress website. They can extend functionality or add new features to
   your WordPress websites. WordPress plugins are written in the PHP programming
   language and integrate seamlessly with WordPress. These can be free in the WordPress.
   org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
   or can be cost-based plugin from a third-party. Directory.
 * Spell out zero through nine and use numerals for 10 or greater for days, weeks,
   and other units of time.
    **Examples**
    - 24 hours
    - 15 days
    - four years

## Numbers as numerals

 * Use numerals for numbers 10 and greater.
    **Example**
 *  **Recommended:** There are a total of 70 users currently online.
 *
    **Exceptions:** Use numerals for the following instances in all cases, even
   when they’re less than 10:
    - Page numbers.
    - Chapter, section, volumes, part, and step numbers.
    - Rows and columns in tables and lists.
    - Technical quantities such as memory, disk space, lines of code, etc.
    - Version numbers.
    - Prices of goods and services.
    - Numbers without units.
 * Use numerals for measurements of distance, size, weight, temperature, pixels,
   length, and so on—even if the number is less than 10.
    **Examples**
    - 50 px
    - 7 miles
    - 2 feet, 2 inches
    - 39 lb
    - 55 square meters
 * Use numerals for describing [dimensions](https://make.wordpress.org/docs/style-guide/formatting/numbers/?output_format=md#dimensions).
 * When numerals less than 10 appear in the same sentence along with numbers greater
   than 9, use numerals.
    **Example**
 *  **Recommended:** Of the 22 users online, 8 have registered accounts.
 * Use numerals while referring to decimals. For decimals less than 1, put a zero
   before the decimal point.
    **Example**
 *  **Recommended:** 0.54 square miles
 * Use numerals while referring to negative numbers.
    **Example**
 *  **Recommended:** The error occurred due to the count being changed to -2.
 * If you direct the user or reader to enter a number, use numerals.
    **Examples**
 *  **Recommended:** Enter **3** as the value.
 * When you write [numbers in a range](https://make.wordpress.org/docs/style-guide/formatting/numbers/?output_format=md#ranges-of-numbers),
   use numerals.
 * While indicating the [time of day](https://make.wordpress.org/docs/style-guide/formatting/dates-times/#expressing-times),
   use numerals.
 * Use numerals for [percentages](https://make.wordpress.org/docs/style-guide/formatting/numbers/?output_format=md#percentages).
 * Use numerals for [fractions](https://make.wordpress.org/docs/style-guide/formatting/numbers/?output_format=md#fractions).

## Ordinal numbers

Write all ordinal numbers as fully-spelled words.

**Examples**

 **Not recommended:** 1st, 2nd, 3rd, 7th, 18th, 99th

 **Recommended:** First, second, third, seventh, eighteenth, ninety-ninth

## Numbers as Roman numerals

Avoid using Roman numerals. Instead use standard Arabic numerals in your documentation.

You can use Roman numerals to denote [steps or sub-steps in procedures](https://make.wordpress.org/docs/style-guide/formatting/procedures/#sub-steps-in-numbered-procedures).

## Commas and decimal points in numbers

Use commas and decimal points as per American number formatting. Use commas in numbers
having four or more digits, setting off groups of three digits left of the decimal
point. Don’t use spaces, commas, or any separators to the right of the decimal point.

Use a period to denote a decimal point.

**Examples**

 **Not recommended:** You can carry out a maximum of 1500000 transactions per month.

 **Recommended:** You can carry out a maximum of 1,500,000 transactions per month.

 **Not recommended:** The total cost may exceed $17000.

 **Not recommended:** The total cost may exceed $17 000.

 **Recommended:** The total cost may exceed $17,000.

 **Not recommended:** Your account will be credited 0.079 635 credits every two
hours.

 **Recommended:** Your account will be credited 0.079635 credits every two hours.

For decimals less than 1, put a zero before the decimal point.

**Example**

 **Recommended:** 0.54 square miles

When expressing measurements where the unit of measurement is spelled out, use the
plural form when the quantity is a decimal fraction. Use the singular form of the
unit only when the quantity is 1.

**Examples**

 * 0 inches
 * 0.77 inches
 * 1 inch
 * 70 inches

## Fractions

Express fractions as decimal numbers whenever possible, but expressing them as words
or symbols as is acceptable. Don’t use slashes with fractions, as they may be difficult
to comprehend. Using slashes with fractions could be misunderstood as alternatives
or combinations. When expressing fractions as words, use a hyphen to link the numerator
with the denominator, unless one of them is already hyphenated.

**Examples**

 **Not recommended:** 3/4

 **Recommended:** ¾

 **Recommended:** 0.75

 **Recommended:** 75%

 **Recommended:** three-fourths

 **Not recommended:** 4 1/2

 **Recommended:** 4½

 **Recommended:** 4.5

 **Recommended:** four one-halves

## Percentages

Denote percentages with the numeral and a percent sign (%) after it, without a space
between them.
 **Exception:** If the percentage starts the sentence, then spell
out both the number and the word _percent_.

**Examples**

 **Recommended:** 99 percent completed.

 **Recommended:** The progress bar is at 99%.

## Currency

Mention to the reader distinctly what country’s currency that you’re referring to.
For example, the dollar sign ($) can be mistaken for US dollars, Canadian dollars,
Australian dollars, and multiple other currencies. Use [ISO defined country or region codes](https://wikipedia.org/wiki/ISO_4217#Active_codes)
to depict international currencies, if possible.

When you’re referencing specific amounts of money, use the currency code, followed
by the amount, with no space.

**Example**

 **Recommended:** The non-profit organization was endowed with a USD1.5 million
grant.

Capitalize the country or region, but lowercase the name of currencies.

**Examples**

 * US dollar
 * Indian rupee
 * Japanese yen

For US dollars, use the dollar sign at the beginning ($) of the currency. Use a
comma to delineate the thousands place of whole currency; that is, use a comma in
amounts that have four or more digits. Use a period to delineate whole currency
and fractions of currency. Don’t use any punctuation or spaces to the right of the
decimal.

**Examples**

 **Not recommended:** You have $15.39,512 in usable credits.

 **Recommended:** You have $15.39512 in usable credits.

 **Recommended:** Monthly hosting plans start from $3.95 per website.

 **Not recommended:** The total cost may exceed $17000.

 **Not recommended:** The total cost may exceed $17 000.

 **Recommended:** The total cost may exceed $17,000.

If it’s clear which currency you’re referring to, it’s acceptable to only use the
symbol rather than the word or country code itself.

## Dimensions

Use numerals for dimensions.

Use a lowercase _x_ between the numerals in the dimensions, with no space between
the numerals and the _x_. You can also use the multiplication sign (×). Use a space
before and after the multiplication sign.

**Examples**

 **Not recommended:** 144 x 144 px

 **Recommended:** 144×144 pixels

 **Recommended:** 50-foot fiber optic cable

 **Recommended:** 3840×2160

## Exponents

Write exponents using [standard mathematical notation](https://wikipedia.org/wiki/Exponentiation)
_b^(n)_, where the base is _b_ and the exponent or power is _n_.

**Example**

 **Recommended:** 3^(4)

## Ranges of numbers

[En dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/#en-dashes)
are generally used to indicate a range of numbers, the minus sign, or negative numbers.
Although you can use en dashes for these purposes, you can also use hyphens or the
word _to_ for numerical ranges.

Use an en dash indicate a range of numbers such as values or dates. Don’t add spaces
before and after the en dash or the hyphen.

**Examples**

 **Not recommended:** The program was under active development from 2012 – 2017.

 **Recommended:** The program was under active development from 2012–2017.

 **Recommended:** Select a range from 10–60 px as the width of the button.

For more information, see [En dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/#en-dashes),
[Hyphens](https://make.wordpress.org/docs/style-guide/punctuation/hyphens/), and
[Units of measurement](https://make.wordpress.org/docs/style-guide/formatting/units-of-measurement/).

## Suspended hyphens

Use [suspended hyphens](https://make.wordpress.org/docs/style-guide/punctuation/hyphens/#suspended-hyphens)
for two or more suspended compound modifiers that start with numbers.

**Example**

 **Recommended:** You can choose from either a five-, six-, or seven-sided polygon.

## Abbreviations

In general, don’t abbreviate _thousand, million_, and _billion_ as _K, M_, and _B_
or _k, mn_ and _bn_. Spell out the word or denote the entire number. Using these
abbreviations makes it difficult to comprehend for readers and translating content.

**Examples**

 **Not recommended:** The non-profit organization was endowed with a $1.5M grant.

 **Not recommended:** The non-profit organization was endowed with a $1.5 mn grant.

 **Recommended:** The non-profit organization was endowed with a $1.5 million grant.

In some contexts, using the abbreviations may be more relevant or suited. If you
use abbreviations, follow these guidelines:

 * Don’t put a space between the number and the abbreviation.
 * Capitalize K, M, and B. [review]
 * Add a noun to indicate what the number measures and to avoid confusion between
   _kilo, or mega_ for example.
 * Use the decimal form of a number only if it saves space. For example, 3.67K uses
   the same number of characters and space as 3,670.

**Example**

 **Recommended:** The server handles 90k transactions per hour.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/obsolete-content/

> **EMPTY UPSTREAM EXPORT**: WordPress.org serves this page's `?output_format=md` export with no body. The rule text is on the live page, which stays canonical: https://make.wordpress.org/docs/style-guide/formatting/obsolete-content/

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/phone-numbers/

# Phone numbers

    - [North American phone numbers](https://make.wordpress.org/docs/style-guide/formatting/phone-numbers/?output_format=md#north-american-phone-numbers)
    - [International phone numbers](https://make.wordpress.org/docs/style-guide/formatting/phone-numbers/?output_format=md#international-phone-numbers)

 **Highlight:** Use mock phone numbers instead of real ones in examples. Follow
proper formatting for phone numbers.

## Phone numbers in examples

Use mock phone numbers instead of real ones in examples. For more information about
what phone numbers to use in examples, see [Example phone numbers](https://make.wordpress.org/docs/style-guide/formatting/examples/#example-phone-numbers).

## Writing real phone numbers

If you’re providing a real phone number to contact a real individual or organization,
use the following formats to write them.

### North American phone numbers

To format phone numbers in the USA, Canada, and other [NANP](https://wikipedia.org/wiki/North_American_Numbering_Plan)(
North American Numbering Plan) countries, enclose the area code in parentheses,
insert a space, and then hyphenate the three-digit exchange code with the four-digit
number.

**Example**

 **Recommended:** (800) 555-0139

### International phone numbers

To format phone numbers in non-NANP countries, include the country and area codes
at the beginning of the phone number. Insert a plus sign before the country code
without any space in between. The plus sign (+) stands in for a prefix known as
an _exit code_ that lets you dial out of a country. Separate the groups of numbers
with spaces.

**Example**

 **Recommended:** +91 000 555 0139

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/procedures/

# Procedures and instructions

 **Highlight:** Use procedures to provide a sequence of numbered steps or instructions
for achieving a particular task.

A procedure is a sequence of numbered steps or instructions for achieving a particular
task. Procedures can be presented in various formats such as illustrations, infographics,
videos, single-step instructions, and numbered procedures.

For more information about lists of items that aren’t part of a procedure, see [Lists](https://make.wordpress.org/docs/style-guide/formatting/lists/).

For more information about expressing UIUI UI is an acronym for User Interface –
the layout of the page the user interacts with. Think ‘how are they doing that’
and less about what they are doing. elements, see [UI elements and interaction](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/).

## Introductory sentences

In most cases, introduce a procedure with an introductory sentence that initiates
the procedure that follows. If the heading of the content explains what the procedure
is about, and no additional context is required, then don’t include an introductory
statement. You can introduce a procedure with an imperative statement.

The introductory sentence can end with a colon or a period. Use a period if the
introductory content is extended, and a colon if the introductory statement is shorter
and immediately precedes the procedure. The text preceding the colon must distinctly
stand alone as a complete sentence. That is, don’t introduce a procedure with a
partial statement.

**Examples**

 **Not recommended:** To change the settings:

 **Recommended:** To change the settings, follow these steps:

 **Recommended:** Change the settings:

 **Not recommended:** The settings are:

 **Recommended:** The settings that can be changed are as follows:

## Single-step procedures

When a procedure consists of a single step or instruction, consolidate it into the
introductory sentence.

**Examples**

 **Not recommended:** To save the modified file, follow this step:
 1. Click **Save
Changes**.

 **Not recommended:** To save the modified file, follow this step:

 * Click **Save Changes**.

 **Recommended:** To save the modified file, click **Save Changes**.

## Sub-steps in numbered procedures

In numbered procedures, label sub-steps with lowercase letters, and sub-sub-steps
with lowercase Roman numerals.

When a step has sub-steps, write the step as an [introductory statement](https://make.wordpress.org/docs/style-guide/formatting/procedures/?output_format=md#introductory-sentences)
to the sub-steps.

**Example**

 **Recommended:**
 1. To set up your development environment, follow these steps:
a. Install Node development tools as follows: i. Download and install Node Version
Manager (nvm). `sh curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.3/
install.sh | bash ii. Quit and restart the terminal. sh nvm install --lts b. Set
up your WordPress environment: i. Download, install, and start Docker Desktop following
the instructions for your OS. ii. Install the WordPress environment tool. sh nvm
install --lts iii. Start the environment from an existing pluginPlugin A plugin
is a piece of software containing a group of functions that can be added to a WordPress
website. They can extend functionality or add new features to your WordPress websites.
WordPress plugins are written in the PHP programming language and integrate seamlessly
with WordPress. These can be free in the WordPress.org Plugin Directory [https://wordpress.org/plugins/](https://wordpress.org/plugins/)
or can be cost-based plugin from a third-party. or theme directory, or a new working
directory: sh wp-env start c. Set up your code editor.

## Instructions with multiple actions

In general, use one step per action. However, you can combine multiple small actions
into a single sequential step using angle brackets (>) to make simple sentences.
Insert a nonbreaking space (`&nbsp;`) around each bracket, and enclose the entire
sequence in a single bold element. For more information, see [Menu bar](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/#menu-bar)

**Examples**

 **Recommended:** 1. Go to **Settings > Media**.

 **Recommended:** 1. Go to **Edit > Text > Encoding**.

 **Caution:** Screen readers may skip over brackets and may not read them as intended.
For example, **Settings > Media** may be read as _Settings Media_, which might confuse
readers. Analyze with an accessibilityAccessibility Accessibility (commonly shortened
to a11y) refers to the design of products, devices, services, or environments for
people with disabilities. The concept of accessible design ensures both “direct
access” (i.e. unassisted) and “indirect access” meaning compatibility with a person’s
assistive technology (for example, computer screen readers). (https://en.wikipedia.
org/wiki/Accessibility) expert before implementing this approach.

Avoid making long sequential steps. Consider rewriting them by splitting them into
sub-steps if they get complicated.

## Repetitive procedures

Write concise steps without writing repetitive instructions with bold UI elements.

**Examples**

 **Not recommended:**
 1. Click **Menu**. You will see **Settings** in the **Menu**
dropdown. 2. Under the **Settings** option, click **Media**.

 **Recommended:**
 1. Click **Menu**. 2. Under the **Settings** option that appears,
click **Media**.

Avoid repeating procedures. Instead, reference those procedures and link to them.

**Examples**

 **Recommended:** Quit and restart the terminal as you did in the previous step.

 **Also recommended:** [Quit and restart the terminal as you did in the previous step.](https://make.wordpress.org/docs/style-guide/formatting/procedures/?output_format=md#)

## General guidelines for writing procedures

 * Format procedures consistently so that readers know where to find them easily
   by scanning content.
 * In general, use headings for procedures so that readers find the exact instructions
   quickly. Write the heading such that it describes what the instructions will
   help the readers do.
    **Examples**
 *  **Recommended:** Create a new page
 *  **Recommended:** Edit your post
 * Capitalize the first word in each step and end the step with a period; except
   where the step doesn’t include end punctuation.
 * Write complete sentences with a consistent sentence structure. Use a standard
   writing style for headings and instructions in procedures.
 * Use [imperative verb forms](https://make.wordpress.org/docs/style-guide/formatting/procedures/#introductory-sentences)
   in procedures.
 * Don’t use _please_ in instructions.
 * Individually [number each step](https://make.wordpress.org/docs/style-guide/formatting/procedures/?output_format=md#sub-steps-in-numbered-procedures)
   in a procedure. It is acceptable to combine short steps that occur in the same
   place in the UI.
 * State the purpose of the actions before stating the action.
    **Examples**
 *  **Not recommended:** Click **Save Changes** to save the modified file.
 *  **Recommended:** To save the modified file, click **Save Changes**.
 * Write the instructions in the order that the reader needs to follow. State the
   location of the action before stating the action. If there are multiple sets
   of procedures with steps and sub-steps, restate the location of the action in
   the first step of the procedure.
    **Examples**
 *  **Not recommended:** Click **Settings > Media** after navigating to the task
   menu bar.
 *  **Recommended:** Navigate to the task menu bar, then click **Settings > Media**.
 * It is acceptable to not provide context such as UI element position multiple
   times within a step, if the instruction appears in the same UI where the action
   occurs.
 * If a particular step is optional in a procedure, indicate it by mentioning “Optional”
   at the beginning of the step.
    **Example**
 *  **Recommended:** Optional: If docker is not running, try to restart the service
   using:
    `sh sudo systemctl daemon-reload sudo systemctl restart docker.service
 * If you think that a specific step might confuse the reader, provide an introductory
   step. You can also include a brief phrase so that the reader follows the instruction
   at the right place.
    **Example**
 *  **Recommended:** Navigate to the menu bar and click on the **Encoding** tab.
 * When there is more than one way to achieve a particular task, give the best way
   to do so. Multiple alternative procedures can confuse readers.
 * In general, avoid using directional language such as _left, right, up, down_
   in instructions to locate UI elements or other content. People with cognitive
   impairments, as well as people using assistive technologies such as screen-reading
   software and might have difficulty interpreting directional language. Directional
   language proves to be difficult for accessibility or for localization. If a particular
   UI element or other content is difficult to convey, include a screenshot or illustration.
   **
   Examples**
 *  **Not recommended:** On the upper-right part of the page, click the button with
   the checkmark.
 *  **Recommended:** Click **✓ Publish**.
 * Don’t include keyboard shortcuts in instructions.
 * Most of the time, end procedures with a definite action or result that helps
   the reader achieve that particular task.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/tables/

# Tables

    - [When not to use tables](https://make.wordpress.org/docs/style-guide/formatting/tables/?output_format=md#when-not-to-use-tables)
 * [Multiple paragraph table cells](https://make.wordpress.org/docs/style-guide/formatting/tables/?output_format=md#multiple-paragraph-table-cells)
 * [Introductory sentences](https://make.wordpress.org/docs/style-guide/formatting/tables/?output_format=md#introductory-sentences)
 * [Capitalization and punctuation](https://make.wordpress.org/docs/style-guide/formatting/tables/?output_format=md#capitalization-and-punctuation)
 * [Table placement](https://make.wordpress.org/docs/style-guide/formatting/tables/?output_format=md#table-placement)
 * [Table captions](https://make.wordpress.org/docs/style-guide/formatting/tables/?output_format=md#table-captions)
 * [Table formatting and content](https://make.wordpress.org/docs/style-guide/formatting/tables/?output_format=md#table-formatting-and-content)
 * [Table column headings](https://make.wordpress.org/docs/style-guide/formatting/tables/?output_format=md#table-column-headings)
 * [Linking to tables](https://make.wordpress.org/docs/style-guide/formatting/tables/?output_format=md#linking-to-tables)

 **Highlight:** Use tables to present lengthy and complex pieces of data that are
related, in a well-structured format.

Tables are useful to present lengthy and complex pieces of data that are related,
in a well-structured format that is easy to read and scan for readers. Generally
a table consists of two or more rows and two or more columns in addition to the
headerHeader The header of your site is typically the first thing people will experience.
The masthead or header art located across the top of your page is part of the look
and feel of your website. It can influence a visitor’s opinion about your content
and you/ your organization’s brand. It may also look different on different screen
sizes. row.

## Choosing between a list or a table

Sometimes to represent data, it could be confusing as to what would be ideal – a
list or a table. Refer the following table to select between a list or a table:

  |  **Item type** |  **Example** |  **List or table** |
   |  Each item is a single unit. |  A procedure with instructions. |  Use a [bulleted list](https://make.wordpress.org/docs/style-guide/formatting/lists/#bulleted-lists), [numbered list](https://make.wordpress.org/docs/style-guide/formatting/lists/#numbered-lists), or [lettered list](https://make.wordpress.org/docs/style-guide/formatting/lists/#lettered-list). |
 |  Each item consists of a two related pieces of data. |  A glossary with term and description pairs. |  Use a [description list](https://make.wordpress.org/docs/style-guide/formatting/lists/#description-list). |
 |  Each item consists of three or more related pieces of data. |  A set of parameters with multiple values, data, categories, and descriptions. |  Use a table. |

### When not to use tables

 * If you only have a single row of content, a table might not be the best way to
   present it, with exceptions such as reference docs.
 * If you only have a single column in your table, convert the table to a list.
 * Don’t use a table to present a list of similar items.
 * Don’t split tables with long columns in half and present one half next to another.
 * Don’t use a table to present code examples.
 * Avoid tables in the middle of a numbered procedure.

## Multiple paragraph table cells

A table cell can contain more than one paragraph.

To create multiple paragraphs, use the `<p>` element rather than using the `<br>`
element. For more information on which uses of `<br>` are correct and which ones
aren’t, see the [HTML specification for `<br>`](https://html.spec.whatwg.org/multipage/semantics.html#the-br-element).

**Example**

  |  **Function** |  **Type** |  **Default value** |  **Description** |
   |  `anchor` |  boolean |  false |  Lets you link directly to a specific blockBlock Block is the abstract term used to describe units of markup that, composed together, form the content or layout of a webpage using the WordPress editor. The idea combines concepts of what in the past may have achieved with shortcodes, custom HTML, and embed discovery into a single consistent API and user experience. on a page. This property adds a field to define an id for the block and a button to copy the direct link. |
 |  `defaultStylePicker` |  boolean |  true |  When the style picker is shown, a dropdown is displayed so the user can select a default style for this block type. If you prefer not to show the dropdown, set this property to false. |

## Introductory sentences

In most cases, introduce a table with an introductory sentence that initiates the
table that follows. If the heading of the content explains what the table is about,
and no additional context is required, then don’t include an introductory statement.
You can introduce a table with an imperative statement.

The introductory sentence can end with a colon or a period. Use a period if the
introductory content is extended, and a colon if the introductory statement is shorter
and immediately precedes the table. The text preceding the colon must distinctly
stand alone as a complete sentence. That is, don’t introduce a table with a partial
statement.

## Capitalization and punctuation

Use sentence case capitalization for the table title and each column heading. For
text inside table cells, use sentence case capitalization; with exceptions. For
example, some values, keywords, or strings are written in lowercase.

For text inside table cells, use periods or other end punctuation only if the sentences
contain complete sentences or a combination of phrases and sentences.

## Table placement

 * When introducing a table, use a complete sentence while referring to the table’s
   position, such as _the following table_, or _the preceding table_.
 * Don’t insert a table in the middle of a sentence.
 * If your table has any references such as footnotes, insert them immediately following
   the table.

## Table captions

If your document or article contains only one table, the table doesn’t need a caption.
However, ensure that the table succeeds an [introductory statement](https://make.wordpress.org/docs/style-guide/formatting/tables/?output_format=md#introductory-sentences).

But if your document or article contains more than one table in close proximity
to each other, include a caption for each table. Write the caption in the form: “
Table _number_. _Description_“. Use sentence case capitalization and don’t insert
a period at the end.

While referring to a table, refer to it by its number. For example, _Enter the values
as shown in table 3._ Don’t capitalize _table_ unless it starts a sentence.

**Example**

 **Recommended:** Table 3. BlockBlock Block is the abstract term used to describe
units of markup that, composed together, form the content or layout of a webpage
using the WordPress editor. The idea combines concepts of what in the past may have
achieved with shortcodes, custom HTML, and embed discovery into a single consistent
API and user experience. APIAPI An API or Application Programming Interface is a
software intermediary that allows programs to interact with each other and share
data in limited, clearly defined ways. reference

For HTML tables, insert a caption using the [`<caption>` element](https://html.spec.whatwg.org/multipage/tables.html#the-caption-element)
as the first child of the `<table>` element.

**Example**

    ```notranslate
    &lt;table&gt;
      &lt;caption&gt;&lt;b&gt;Table 3.&lt;/b&gt; Block API reference&lt;/caption&gt;
      ...
    &lt;/table&gt;
    ```

## Table formatting and content

 * Arrange the rows in a logical order; if there is no logical order, arrange them
   alphabetically.
 * Don’t merge cells with each other.
 * Don’t use the `rowspan` and `colspan` attributes.
 * Don’t add any form of styling to the table element apart from the default styling
   of your site.
 * Align text in columns consistently. Don’t combine multiple alignments in a table;
   for example, don’t align text to the left for one column, and to the right for
   the other.
 * Don’t leave a cell blank or use a hyphen or dash to indicate that there’s no
   entry for that cell. Instead use _Not applicable_ or _None_.
 * Maintain a parallel syntax for all tables and its cells. For example, begin all
   descriptions within a column with a verb, or a noun.
 * Ensure that the tables are formatted considering responsive design that adapts
   to different viewport sizes.
 * If possible, balance row height by increasing the width of text-heavy columns
   and reducing the width of columns with minimal text.

## Table column headings

Use column headings in the first row of your table, also known as the header row.

 * Distinguish the header row from the rest of the text in the table. For example,
   highlight the text in the header row such as making it bolder, larger, and changing
   the background color.
 * Ensure that the header row is always visible in long tables, so that the column
   headings are visible while scrolling. Don’t use collapsible or unbound header
   rows; instead use fixed header rows. It is acceptable to occasionally repeat
   the header row in downloadable documents.
 * Use sentence case capitalization for column headings.
 * Don’t end column headings with punctuation such as a period, colon, semicolon,
   or an ellipsis.
 * Write concise headings and omit articles (_a, an, the_).
 * Don’t write partial column headings such that the sentence or phrase in the column
   heading continues from the cell text. Discontinuous content proves to be difficult
   for accessibility and for localization. Instead, write complete column headings.
 * Use table headings for the first column and the first row only. Use the [`th` element](https://www.w3.org/TR/2014/REC-html5-20141028/tabular-data.html#the-th-element).
 * Include the [`scope` attribute](https://www.w3.org/TR/WCAG20-TECHS/H63.html)
   as appropriate, for accessibility.

## Linking to tables

Avoid linking to tables whenever possible. Instead refer to them by table number,
or link to its parent heading or subheading link targets.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/text/

# Text formatting

    - [Formatting common text elements](https://make.wordpress.org/docs/style-guide/formatting/text/?output_format=md#formatting-common-text-elements)
 * [Spaces between sentences](https://make.wordpress.org/docs/style-guide/formatting/text/?output_format=md#spaces-between-sentences)

 **Highlight:** Maintain consistent type and text formatting.

Consistent text formatting and type treatment is a principal factor in great documentation
and design. The intuitive use of text formatting, color combinations, alignment,
spacing, and punctuation enables simplicity and improves readability for the reader.

Formatting text uniformly by utilizing distinct design and structures such as that
in headings, tables, lists, URLs, and code examples helps distinguish information
easily, while also making it easier for scannable and accessible documentation.

## Text highlighting

Text can be highlighted to distinguish itself from other text using the following
text-formatting conventions:

**Bold**
 Use bold formatting, `<b>` in HTMLHTML HTML is an acronym for Hyper Text
Markup Language. It is a markup language that is used in the development of web
pages and websites. or `**` in Markdown for [UI elements](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/)
and at the beginning of [notices](https://make.wordpress.org/docs/style-guide/formatting/notices/).

Although a double underscore (`__`) can be used for bold formatting in Markdown,
it can be difficult to distinguish in a text editor. Preferably, use double asterisks(`**`)
for bold formatting in Markdown.

**Italic**
 Use italic formatting, `<i>` in HTML or `_` in Markdown, when drawing
attention to a specific word or phrase, such as when defining or introducing [key terms](https://make.wordpress.org/docs/style-guide/formatting/key-terms/)
or using [words as words](https://make.wordpress.org/docs/style-guide/formatting/words-as-words/).
You can also use a single asterisk (`*`) for italic formatting in Markdown.

**Underline**
 Do not underline.

**Strikethrough**
 Do not use strikethrough.

**Code text**
 Use `<code>` in HTML or `\`` in Markdown to apply a monospace font
and other styling to [code in text](https://make.wordpress.org/docs/style-guide/developer-content/code-in-text/),
inline code, and user input.

Use `<pre>` in HTML or `\`\`\`` in Markdown for [code examples](https://make.wordpress.org/docs/style-guide/developer-content/code-examples/)
or other blocks of code.

Do not override or modify font styles inline.

**Quotation marks**
 Use [quotation marks](https://make.wordpress.org/docs/style-guide/punctuation/quotation-marks/)
in the American (US) English style.

**Capitalization**
 Use standard American (US) English [capitalization](https://make.wordpress.org/docs/style-guide/language-grammar/capitalization/)
rules. Use sentence-case capitalization in [headings, titles, and other content](https://make.wordpress.org/docs/style-guide/formatting/headings/).

**Font**
 Don’t override global styles for font type, size, or color.

## Using type

Clear, legible, as well as aesthetically pleasing typography is one of the primary
features in visually appealing content.

 * In general, use sentence-case capitalization and avoid other forms of capitalization
   such as all-uppercase, all-lowercase, or title case.
    For more information, see
   [Capitalization](https://make.wordpress.org/docs/style-guide/language-grammar/capitalization/).
 * Use left alignment for text. This ensures an even left margin with a irregular
   right margin- improving document structure.
 * Avoid center-aligned text.
 * Ensure adequate and consistent line spacing – which is the amount of vertical
   space between two lines of text in a text body. If your site’s design determines
   the line spacing, don’t change it. Don’t reduce line spacing to fit more text
   or content; rewrite or edit the text instead.

For more information, see [Capitalization](https://make.wordpress.org/docs/style-guide/language-grammar/capitalization/),
[Headings and titles](https://make.wordpress.org/docs/style-guide/formatting/headings/),
[Procedures and instructions](https://make.wordpress.org/docs/style-guide/formatting/procedures/),
[Code examples](https://make.wordpress.org/docs/style-guide/developer-content/code-examples/),
and [UI elements](https://make.wordpress.org/docs/style-guide/developer-content/ui-elements/).

### Formatting common text elements

  |  **Text element** |  **Convention** |  **Example** |
   |  Code and console output |  Use code text. See [Code in text](https://make.wordpress.org/docs/style-guide/developer-content/code-in-text/). |  `alt="The WordPress mascot Wapuu."` |
 |  Company-, product-, brand-names, and trademarks |  Title-style capitalization is generally used if there are two or more proper nouns. See [Trademarks](https://make.wordpress.org/docs/style-guide/formatting/trademarks/). |  WordPress

WordCamp CentralWordCamp Central Website for all WordCamp activities globally. [https://central.wordcamp.org](https://central.wordcamp.org) includes a list of upcoming and past camp with links to each.

 |
 |  Emphasis |  Sometimes it’s acceptable to use italic text for emphasis. |  Use the 24-hour format only when _absolutely_ needed. |
 |  Error messages |  Use sentence-style capitalization. Enclose in quotation marks when referencing error messages in text. |  Error Code 345. Do you want to continue?
 If you see the error message, “Executable not found.” quit and restart the terminal. |
 |  Filename extensions |  All lowercase. See [Filenames](https://make.wordpress.org/docs/style-guide/formatting/filenames/) |  `.css``.php` |
 |  Filenames |  All lowercase. See [Filenames](https://make.wordpress.org/docs/style-guide/formatting/filenames/). |  `new-cache.php``wp-settings-1.php` |
 |  Key terms |  Italicize the first mention of a new term. See [Key terms](https://make.wordpress.org/docs/style-guide/formatting/key-terms/). |  An administrator’s tool of sorts, _phpMyAdmin_ is a PHPPHP PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML. [https://www.php.net/manual/en/index.php](https://www.php.net/manual/en/index.php) script meant for giving users the ability to interact with their MySQLMySQL MySQL is a relational database management system. A database is a structured collection of data where content, configuration and other options are stored. [https://www.mysql.com](https://www.mysql.com/) databases. |
 |  Markup language elements (tags) |  Use bold text in code font. Capitalization varies. |  **`<link>`****`<!DOCTYPE html>`** |
 |  Mathematical constants and variables |  Use italics. |  _x/y + z = 4_ |
 |  Placeholder variables |  Use italicized code text. See [Placeholders](https://make.wordpress.org/docs/style-guide/developer-content/placeholders/). |  `EMAIL_ADDRESS``PHONE_NUMBER` |
 |  Titles of books, movies, articles, posts, papers, and other full-length works |  Use italics. See [Cross-references](https://make.wordpress.org/docs/style-guide/linking/cross-references/). |  _The GutenbergGutenberg The Gutenberg project is the new Editor Interface for WordPress. The editor improves the process and experience of creating new content, making writing rich content much simpler. It uses ‘blocks’ to add richness rather than shortcodes, custom HTML etc. [https://wordpress.org/gutenberg/](https://wordpress.org/gutenberg/) BlockBlock Block is the abstract term used to describe units of markup that, composed together, form the content or layout of a webpage using the WordPress editor. The idea combines concepts of what in the past may have achieved with shortcodes, custom HTML, and embed discovery into a single consistent API and user experience. Editor Guide__WordPress 5.6 “Simone”__Getting started with WordPress hooksHooks In WordPress theme and development, hooks are functions that can be applied to an action or a Filter in WordPress. Actions are functions performed when a certain event occurs in WordPress. Filters allow you to modify certain functions. Arguments used to hook both filters and actions look the same.: Introduction_ |
 |  UIUI UI is an acronym for User Interface – the layout of the page the user interacts with. Think ‘how are they doing that’ and less about what they are doing. elements or strings |  Use sentence-case capitalization. |  Navigate to page 4.  Copy the selected items. |
 |  URLs |  Use lowercase capitalization for complete URLs. If necessary, line-break long URLs before a slash. Don’t hyphenate.See [Link text](https://make.wordpress.org/docs/style-guide/linking/link-text/). |  wordpress.orgWordPress.org The community site where WordPress code is created and shared by the users. This is where you can download the source code for WordPress core, plugins and themes as well as the central location for community conversations and organization. [https://wordpress.org/](https://wordpress.org/) |
 |  Version variables |  Use italics for the variable. |  Version 5.6._x_ |

## Spaces between sentences

Leave only one space between sentences; that is, leave only one space between the
sentence-ending punctuation and the first character of the next sentence.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/trademarks/

# Trademarks

 **Highlight:** Follow the trademark, licensing, and citation guidelines provided
by the owners of the respective marks.

For trademark marking or attribution in documentation, follow the trademark, licensing,
and citation guidelines provided by the owners of the respective marks. Categories
include registered trademarks (®), trademarks (™), registered service marks (®),
and service marks (℠).

For additional information about WordPress trademarks, see the [Trademark Policy for WordPress](https://wordpressfoundation.org/trademark-policy/).

## Using trademarks

Always use trademarked terms as adjectives. Don’t use trademarked terms in verb
or noun forms. If a trademark is more than one word, don’t break it across multiple
lines of text; instead, use a nonbreaking space in between.

## Plural forms of trademarks

In general, avoid forming plural forms of company, product, or brand names, regardless
of who owns the name.

For more information about plural forms, see [Plurals](https://make.wordpress.org/docs/style-guide/language-grammar/plurals/).

## Possessive forms of trademarks

In general, avoid forming possessives of company, product, or brand names, regardless
of who owns the name.

For more information about possessive forms of trademarks, see [Company-, product-, and brand-name possessives](https://make.wordpress.org/docs/style-guide/language-grammar/possessives/#company-product-and-brand-name-possessives).

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/units-of-measurement/

# Units of measurement

 **Highlight:** Insert a nonbreaking space between the number and a unit of measurement.

## Spaces in units of measurement

Insert a nonbreaking space between the number and a unit for most units of measurement.
For more information about when to spell out units, see [Abbreviations](https://make.wordpress.org/docs/style-guide/language-grammar/abbreviations/#spelling-out-and-declaring-abbreviations).

**Examples**

 **Not recommended:** 16ft

 **Recommended:** 16`&nbsp;`ft

 **Recommended:** 75`&nbsp;`kg

 **Recommended:** 10`&nbsp;`GB

Don’t use a space when the unit of measure is a percentage, money, or degrees of
an angle.

**Examples**

 **Recommended:** 55%

 **Recommended:** $3000

 **Recommended:** 130°

## Ranges of numbers with units

For a range of numbers that have units, repeat the unit for each number in the range.
Units include abbreviations (such as _GB_ for _Gigabytes_) and symbols (such as
the degree symbol (°)), but not nouns like _file_.

**Examples**

 **Not recommended:** -10-33 °C

 **Recommended:** -10 °C to 33 °C

 **Not recommended:** The recommended file size is 50 – 100 MB.

 **Recommended:** The recommended file size is 50 MB to 100 MB.

For more information, see [En dashes](https://make.wordpress.org/docs/style-guide/punctuation/dashes/#en-dashes),
[Ranges of numbers](https://make.wordpress.org/docs/style-guide/formatting/numbers/#ranges-of-numbers),
and [Numbers and fractions](https://make.wordpress.org/docs/style-guide/punctuation/hyphens/#numbers-and-fractions).

## Rates

Use the word _per_ instead of the division slash (/) while indicating rates. It’s
acceptable to use the division slash where space is too limited.

Shorten _per_ to _p_ only for well-established abbreviations such as _Gbps_ for
_Gigabits per second_.

**Examples**

 **Not recommended:** The server handles 90k transactions/hour.

 **Recommended:** The server handles 90k transactions per hour.

## Currency

Mention to the reader distinctly what country’s currency that you’re referring to.
For example, the dollar sign ($) can be mistaken for US dollars, Canadian dollars,
Australian dollars, and multiple other currencies. Use [ISO defined country or region codes](https://wikipedia.org/wiki/ISO_4217#Active_codes)
to depict international currencies, if possible.

For more information, see [Currency](https://make.wordpress.org/docs/style-guide/formatting/numbers/#currency).

## Using abbreviations to denote numbers

In general, don’t abbreviate _thousand, million_, and _billion_ as _K, M_, and _B_
or _K, mn_ and _bn_. In some contexts, using the abbreviations may be more relevant
or suited. If you use abbreviations, see [Abbreviations in numbers](https://make.wordpress.org/docs/style-guide/formatting/numbers/#abbreviations)
for more information.

---

**Source:** https://make.wordpress.org/docs/style-guide/formatting/words-as-words/

# Words as words

 **Highlight:** Italicize words used as words.

While referring to a particular word or phrase as the word or phrase itself, use
italic formatting. For additional information about italics, see [Text highlighting](https://make.wordpress.org/docs/style-guide/formatting/text/#text-highlighting).

**Examples**

 **Not recommended:** Don’t substitute a **/** (slash) as a conjunction. Use the
word **or** instead.

 **Not recommended:** Don’t substitute a “/” (slash) as a conjunction. Use the word“
or” instead.

 **Not recommended:** Don’t substitute a / (slash) as a conjunction. Use the word
or instead.

 **Recommended:** Don’t substitute a _/_ (slash) as a conjunction. Use the word
_or_ instead.

While referring to letters as letters, use italics.

**Examples**

 **Not recommended:** If a proper noun ends with an **s**, you can either use an
apostrophe and **s** or just an apostrophe.

 **Not recommended:** If a proper noun ends with an “s”, you can either use an apostrophe
and “s” or just an apostrophe.

 **Not recommended:** If a proper noun ends with an s, you can either use an apostrophe
and s or just an apostrophe.

 **Recommended:** If a proper noun ends with an _s_, you can either use an apostrophe
and _s_ or just an apostrophe.

Use an apostrophe and an _s_ to form the plural, but don’t italicize the apostrophe
or the _s_.
