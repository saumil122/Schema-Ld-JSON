# INTRODUCTION
------------

This module provides the features to add Schema Ld+JSON script for the website.
We can add any custom Schema code based on the page URL.
It may be useful for the custom routed pages that are not nodes or views.
Schema will add new (not override existing) application/ld+json section.
To add JSON Schema to nodes or views you can use an appropriate field that is provided by this module in the meta tags section.<br>
You can also fetch schema codes using REST api /schema_ldjson/schema_resource?_format=json.

# REQUIREMENTS
------------

* None

# INSTALLATION
------------

 * Install as you would normally install a contributed Drupal module.

# CONFIGURATION
-------------

1. Go to the node edit
2. Open Meta Tags section
3. Find the SCHEMA Ld+JSON fieldset
4. Use field Raw JSON
5. Go to the Configuration/Search and Schema Ld+JSON
6. Determine the additional rules for forms, views or routes that are not nodes.

# MAINTAINERS
-----------

Current maintainers:
 * Saumil Nagariya <saumil.nagariya@gmail.com> - https://github.com/saumil122

This project has been sponsored by:
 * N/A
