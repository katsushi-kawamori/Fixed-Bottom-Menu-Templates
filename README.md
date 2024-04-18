# Fixed Bottom Menu Templates

This template is for the [WordPress](https://wordpress.org/) plugin [Fixed Bottom Menu](https://wordpress.org/plugins/fixed-bottom-menu/).
Anyone can pull request your own template.

Once approved, it will be included in [Fixed Bottom Menu](https://wordpress.org/plugins/fixed-bottom-menu/), users will be able to select your template, and you will become a contributor to [Fixed Bottom Menu](https://wordpress.org/plugins/fixed-bottom-menu/).

# Features
* You can freely customize the display of your fixed menu via templates.
* Customization is similar to customizing a WordPress theme template.
* You can use the code included here to create template and CSS files and apply them using the three filters below.
```
/** ==================================================
 * Filter for template file of html.
 *
 */
add_filter(
	'fixed_bottom_menu_generate_template_html_file',
	function () {
		$wp_uploads = wp_upload_dir();
		$upload_dir = wp_normalize_path( $wp_uploads['basedir'] );
		$upload_dir = untrailingslashit( $upload_dir );
		return $upload_dir . '/tmp/fixedbottommenu-template-html.php';
	},
	10,
	1
);

/** ==================================================
 * Filter for template file of css.
 *
 */
add_filter(
	'fixed_bottom_menu_generate_template_css_file',
	function () {
		$wp_uploads = wp_upload_dir();
		$upload_dir = wp_normalize_path( $wp_uploads['basedir'] );
		$upload_dir = untrailingslashit( $upload_dir );
		return $upload_dir . '/tmp/fixedbottommenu-template-css.php';
	},
	10,
	1
);

/** ==================================================
 * Filter for CSS file.
 *
 */
add_filter(
	'fixed_bottom_menu_css_url',
	function () {
		$wp_uploads = wp_upload_dir();
		$upload_url = $wp_uploads['baseurl'];
		if ( is_ssl() ) {
			$upload_url = str_replace( 'http:', 'https:', $upload_url );
		}
		$upload_url = untrailingslashit( $upload_url );
		return $upload_url . '/tmp/fixedbottommenu.css';
	},
	10,
	1
```

# Requirement

* WordPress Version 5.0 or higher
* Fixed Bottom Menu Version 2.00 or higher

# Naming rule

* (php/html/css) One file for each is required.

Template Name:
English notation

File name:
fixedbottommenu-template-html-(template slug name). (php/html)
fixedbottommenu-template-css-(template slug name). (php/css)

# Usage

## Hook
| tag | Parameter1 | Parameter2 | Meaning |
| --- | --- | --- | --- |
| `fbm_icon_display` | Column Number (Int) | Icon type (String) | Display of icon, URL links, and text |

## Variable
| Variable name | Type | Meaning | Filter |
| --- | --- | --- | --- |
| `$columns` | Int | number of culumns. |  |
| `$icon_type` | String | Icon type |  |
| `$text_class` | String | Class name for text(`fixed-bottom-menu-text`) |  |
| `$fontsize_num` | Float | Font Sizes numeric | fbm_fontsize_num |
| `$fontsize_unit` | String | Font Sizes unit | fbm_fontsize_unit |
| `$fontsize` | String | Font Sizes | fbm_fontsize |
| `$height` | String | Menu Height | fbm_height |
| `$height_a` | String | Line Height | fbm_height_a |
| `$padding_top_a` | String | Padding Top | fbm_padding_top_a |
| `$footer_class` | String | Footer class | fbm_footer_class |
| `$backcolor` | String | Background color | fbm_backcolor |
| `$color` | String | Text color | fbm_color |
| `$overcolor` | String | Overlay Color | fbm_overcolor |
| `$minwidth` | Int | Max Width | fbm_minwidth |
| `$zindex` | Int | Stacking order | fbm_zindex |

# Author

* [Katsushi Kawamori](https://profiles.wordpress.org/katsushi-kawamori/)

# License

"Fixed Bottom Menu Templates" is under [GPLv2 or later](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html).

Enjoy making templates!

Thank you!
