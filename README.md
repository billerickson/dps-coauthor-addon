# Display Posts Shortcode, Co-Authors Plus Addon

If you have both [Display Posts Shortcode](https://wordpress.org/plugins/display-posts-shortcode/) and [Co-Authors Plus](https://wordpress.org/plugins/co-authors-plus/) installed, use the following shortcode to display a list of posts and the authors associated with each post:

`[display-posts include_author="true"]`

This can be used in conjunction with any other query arguments for Display Posts Shortcode ([full list here](https://github.com/billerickson/display-posts-shortcode/wiki#arguments)).

### Customization

The following parameters can be added to the shortcode to customize the output of the author list

* `coauthor_function` - Change which Co-Author Plus function is used. Default: coauthor. Available Options:  
  * `coauthor` - Outputs the co-authors display names, without links to their posts  
  * `coauthors_posts_links` - Outputs the co-authors display names, with links to their posts.  
  * `coauthors_links` - Outputs the co-authors display names, with links to their websites  
* `coauthor_between` - Delimiter that should appear between the co-authors. Default: ,  
* `coauthor_between_last` - Delimiter that should appear between the last two co-authors. Default: and  
* `coauthor_before` - What should appear before the presentation of co-authors. Default: by 
* `coauthor_after` - What should appear after the presentation of co-authors. Default: (empty)

### Installation

[Download the plugin here](https://github.com/billerickson/dps-coauthor-addon/archive/master.zip), then upload it to your website. Plugins > Add New, then click "Upload Plugin" at the top of the page.