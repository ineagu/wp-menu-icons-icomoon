<?php
/**
 * IcoMoon
 *
 * @package Menu_Icons_Icomoon
 * @author Dzikri Aziz <kvcrvt@gmail.com>
 */


/**
 * Icon type: IcoMoon
 */
class Icon_Picker_Type_Icomoon extends Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 * @since  0.2.0
	 * @access protected
	 * @var    string
	 */
	protected $id = 'icomoon';

	/**
	 * Holds icon label
	 *
	 * @since  0.2.0
	 * @access protected
	 * @var    string
	 */
	protected $name = 'IcoMoon';

	/**
	 * Holds icon version
	 *
	 * @since  0.2.0
	 * @access protected
	 * @var    string
	 */
	protected $version = '20140611';


	/**
	 * Get stylesheet URI
	 *
	 * @since  0.2.0
	 * @return string
	 */
	public function get_stylesheet_uri() {
		return sprintf( '%s/css/icomoon.css', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
	}


	/**
	 * Get icon groups
	 *
	 * @since  0.2.0
	 * @return array
	 */
	public function get_groups() {
		$groups = array(
			array(
				'id'   => 'actions',
				'name' => __( 'Actions', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'arrows',
				'name' => __( 'Arrows', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'brands',
				'name' => __( 'Brands', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'browsers',
				'name' => __( 'Browsers', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'devices',
				'name' => __( 'Devices', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'editor',
				'name' => __( 'Editor', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'file-types',
				'name' => __( 'File Types', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'form',
				'name' => __( 'Form', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'games',
				'name' => __( 'Games', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'media-player',
				'name' => __( 'Media Player', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'misc',
				'name' => __( 'Misc.', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'places',
				'name' => __( 'Places', 'menu-icons-icomoon' ),
			),
			array(
				'id'   => 'smileys',
				'name' => __( 'Smileys', 'menu-icons-icomoon' ),
			),
		);

		/**
		 * Filter icomoon groups
		 *
		 * @since 0.1.0
		 * @param array $groups Icon groups.
		 */
		$groups = apply_filters( 'icon_picker_icomoon_groups', $groups );

		return $groups;
	}


	/**
	 * Get icon items
	 *
	 * @since  0.2.0
	 * @return array
	 */
	public function get_items() {
		$items = array(
			array(
				'group' => 'actions',
				'id'    => 'icomoon-plus',
				'name'  => __( 'Add', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-minus',
				'name'  => __( 'Remove', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-checkmark',
				'name'  => __( 'Check', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-checkmark2',
				'name'  => __( 'Check', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-checkmark-circle',
				'name'  => __( 'Check', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-close',
				'name'  => __( 'Close', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-cancel-circle',
				'name'  => __( 'Close', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-download',
				'name'  => __( 'Download', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-download2',
				'name'  => __( 'Download', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-download3',
				'name'  => __( 'Download', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-box-add',
				'name'  => __( 'Download', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-cloud-download',
				'name'  => __( 'Cloud Download', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-upload',
				'name'  => __( 'Upload', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-upload2',
				'name'  => __( 'Upload', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-upload3',
				'name'  => __( 'Upload', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-box-remove',
				'name'  => __( 'Upload', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-cloud-upload',
				'name'  => __( 'Cloud Upload', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-contract',
				'name'  => __( 'Contract', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-expand',
				'name'  => __( 'Expand', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-contract2',
				'name'  => __( 'Contract', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-expand2',
				'name'  => __( 'Expand', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-enter',
				'name'  => __( 'Enter', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-exit',
				'name'  => __( 'Exit', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-filter',
				'name'  => __( 'Filter', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-filter2',
				'name'  => __( 'Filter', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-lock',
				'name'  => __( 'Lock', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-lock2',
				'name'  => __( 'Lock', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-unlocked',
				'name'  => __( 'Unlock', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-newtab',
				'name'  => __( 'New Tab', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-blocked',
				'name'  => __( 'Block', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-reply',
				'name'  => __( 'Back', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-forward',
				'name'  => __( 'Forward', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-spam',
				'name'  => __( 'Spam', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-point-up',
				'name'  => __( 'Point Up', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-point-down',
				'name'  => __( 'Point Down', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-point-left',
				'name'  => __( 'Point Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-point-right',
				'name'  => __( 'Point Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-search',
				'name'  => __( 'Search', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-zoomin',
				'name'  => __( 'Zoom In', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-zoomout',
				'name'  => __( 'Zoom Out', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-signup',
				'name'  => __( 'Sign Up', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-thumbs-up',
				'name'  => __( 'Thumbs Up', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-thumbs-up2',
				'name'  => __( 'Thumbs Down', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icomoon-share',
				'name'  => __( 'Share', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-up',
				'name'  => __( 'Up', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-down',
				'name'  => __( 'Down', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-left',
				'name'  => __( 'Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-right',
				'name'  => __( 'Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-up-left',
				'name'  => __( 'Up Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-up-right',
				'name'  => __( 'Up Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-down-left',
				'name'  => __( 'Down Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-down-right',
				'name'  => __( 'Down Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-up2',
				'name'  => __( 'Up', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-down2',
				'name'  => __( 'Down', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-left2',
				'name'  => __( 'Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-right2',
				'name'  => __( 'Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-up-left2',
				'name'  => __( 'Up Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-up-right2',
				'name'  => __( 'Up Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-down-left2',
				'name'  => __( 'Down Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-down-right2',
				'name'  => __( 'Down Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-up3',
				'name'  => __( 'Up', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-down3',
				'name'  => __( 'Down', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-left3',
				'name'  => __( 'Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-right3',
				'name'  => __( 'Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-up-left3',
				'name'  => __( 'Up Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-up-right3',
				'name'  => __( 'Up Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-down-left3',
				'name'  => __( 'Down Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'icomoon-arrow-down-right3',
				'name'  => __( 'Down Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-android',
				'name'  => 'Android',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-apple',
				'name'  => 'Apple',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-blogger',
				'name'  => 'Blogger',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-blogger2',
				'name'  => 'Blogger',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-css3',
				'name'  => __( 'CSS 3', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-delicious',
				'name'  => 'Delicious',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-deviantart',
				'name'  => 'deviantART',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-deviantart2',
				'name'  => 'deviantART',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-dribbble',
				'name'  => 'Dribbble',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-dribbble2',
				'name'  => 'Dribbble',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-dribbble3',
				'name'  => 'Dribbble',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-facebook',
				'name'  => 'Facebook',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-facebook2',
				'name'  => 'Facebook',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-facebook3',
				'name'  => 'Facebook',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-finder',
				'name'  => __( 'Finder', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-flattr',
				'name'  => 'Flattr',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-flickr',
				'name'  => 'Flickr',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-flickr2',
				'name'  => 'Flickr',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-flickr3',
				'name'  => 'Flickr',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-flickr4',
				'name'  => 'Flickr',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-forrst',
				'name'  => 'forrst',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-forrst2',
				'name'  => 'forrst',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-foursquare',
				'name'  => 'Foursquare',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-foursquare2',
				'name'  => 'Foursquare',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-github',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-github2',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-github3',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-github4',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-github5',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-google',
				'name'  => 'Google',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-google-drive',
				'name'  => 'Google Drive',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-googleplus',
				'name'  => 'Google+',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-googleplus2',
				'name'  => 'Google+',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-googleplus3',
				'name'  => 'Google+',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-googleplus4',
				'name'  => 'Google+',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-html5',
				'name'  => __( 'HMTL 5', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-html52',
				'name'  => __( 'HMTL 5', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-IcoMoon',
				'name'  => 'IcoMoon',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-instagram',
				'name'  => 'Instagram',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-joomla',
				'name'  => 'Joomla!',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-lanyrd',
				'name'  => 'Lanyrd',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-lastfm',
				'name'  => 'Last.fm',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-lastfm2',
				'name'  => 'Last.fm',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-linkedin',
				'name'  => 'LinkedIn',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-paypal',
				'name'  => 'PayPal',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-paypal2',
				'name'  => 'PayPal',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-paypal3',
				'name'  => 'PayPal',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-picassa',
				'name'  => 'Picasa',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-picassa2',
				'name'  => 'Picasa',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-pinterest',
				'name'  => 'Pinterest',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-pinterest2',
				'name'  => 'Pinterest',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-reddit',
				'name'  => 'reddit',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-skype',
				'name'  => 'Skype',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-soundcloud',
				'name'  => 'SoundCloud',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-soundcloud2',
				'name'  => 'SoundCloud',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-stackoverflow',
				'name'  => 'Stack Overflow',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-steam',
				'name'  => 'Steam',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-steam2',
				'name'  => 'Steam',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-stumbleupon',
				'name'  => 'StumbleUpon',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-stumbleupon2',
				'name'  => 'StumbleUpon',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-tumblr',
				'name'  => 'Tumblr',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-tumblr2',
				'name'  => 'Tumblr',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-twitter',
				'name'  => 'Twitter',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-twitter2',
				'name'  => 'Twitter',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-twitter3',
				'name'  => 'Twitter',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-vimeo',
				'name'  => 'Vimeo',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-vimeo2',
				'name'  => 'Vimeo',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-vimeo3',
				'name'  => 'Vimeo',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-windows',
				'name'  => 'Windows',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-windows8',
				'name'  => 'Windows 8',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-wordpress',
				'name'  => 'WordPress',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-wordpress2',
				'name'  => 'WordPress',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-xing',
				'name'  => 'Xing',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-xing2',
				'name'  => 'Xing',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-yahoo',
				'name'  => 'Yahoo!',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-yelp',
				'name'  => 'Yelp',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-youtube',
				'name'  => 'YouTube',
			),
			array(
				'group' => 'brands',
				'id'    => 'icomoon-youtube2',
				'name'  => 'YouTube',
			),
			array(
				'group' => 'browsers',
				'id'    => 'icomoon-chrome',
				'name'  => 'Chrome',
			),
			array(
				'group' => 'browsers',
				'id'    => 'icomoon-firefox',
				'name'  => 'Firefox',
			),
			array(
				'group' => 'browsers',
				'id'    => 'icomoon-IE',
				'name'  => 'IE',
			),
			array(
				'group' => 'browsers',
				'id'    => 'icomoon-opera',
				'name'  => 'Opera',
			),
			array(
				'group' => 'browsers',
				'id'    => 'icomoon-safari',
				'name'  => 'Safari',
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-alarm',
				'name'  => __( 'Alarm', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-alarm2',
				'name'  => __( 'Alarm', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-bell',
				'name'  => __( 'Bell', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-binoculars',
				'name'  => __( 'Binoculars', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-bullhorn',
				'name'  => __( 'Bullhorn', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-camera',
				'name'  => __( 'Camera', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-camera2',
				'name'  => __( 'Camera', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-clock',
				'name'  => __( 'Clock', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-clock2',
				'name'  => __( 'Clock', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-compass',
				'name'  => __( 'Compass', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-disk',
				'name'  => __( 'Disk', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-storage',
				'name'  => __( 'HDD', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-headphones',
				'name'  => __( 'Headphones', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-keyboard',
				'name'  => __( 'Keyboard', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-laptop',
				'name'  => __( 'Laptop', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-mobile',
				'name'  => __( 'Mobile Phone', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-mobile2',
				'name'  => __( 'Mobile Phone', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-phone',
				'name'  => __( 'Phone', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-phone-hang-up',
				'name'  => __( 'Phone', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-print',
				'name'  => __( 'Printer', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-screen',
				'name'  => __( 'Screen', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-stopwatch',
				'name'  => __( 'Stopwatch', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-tablet',
				'name'  => __( 'Tablet', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'icomoon-tv',
				'name'  => __( 'TV', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-attachment',
				'name'  => __( 'Attachment', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-copy',
				'name'  => __( 'Copy', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-copy2',
				'name'  => __( 'Copy', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-copy3',
				'name'  => __( 'Copy', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-scissors',
				'name'  => __( 'Cut', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paste',
				'name'  => __( 'Paste', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paste2',
				'name'  => __( 'Paste', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paste3',
				'name'  => __( 'Paste', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-font',
				'name'  => __( 'Font', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-bold',
				'name'  => __( 'Bold', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-italic',
				'name'  => __( 'Italic', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-underline',
				'name'  => __( 'Underline', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-strikethrough',
				'name'  => __( 'Strikethrough', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-code',
				'name'  => __( 'Code', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-embed',
				'name'  => __( 'Embed', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paragraph-left',
				'name'  => __( 'Align Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paragraph-center',
				'name'  => __( 'Align Center', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paragraph-right',
				'name'  => __( 'Align Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paragraph-justify',
				'name'  => __( 'Justify', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paragraph-left2',
				'name'  => __( 'Align Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paragraph-center2',
				'name'  => __( 'Align Center', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paragraph-right2',
				'name'  => __( 'Align Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-paragraph-justify2',
				'name'  => __( 'Justify', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-undo',
				'name'  => __( 'Undo', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-redo',
				'name'  => __( 'Redo', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-undo2',
				'name'  => __( 'Undo', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-redo2',
				'name'  => __( 'Redo', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-quotes-left',
				'name'  => __( 'Left Qoutes', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-list',
				'name'  => __( 'List', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-list2',
				'name'  => __( 'List', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-numbered-list',
				'name'  => __( 'Ordered List', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-link',
				'name'  => __( 'Link', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-crop',
				'name'  => __( 'Crop', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-indent-increase',
				'name'  => __( 'Increase Indent', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-indent-decrease',
				'name'  => __( 'Decrease Indent', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-pilcrow',
				'name'  => __( 'Pilcrow', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-lefttoright',
				'name'  => __( 'Left to Right', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-righttoleft',
				'name'  => __( 'Right to Left', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-omega',
				'name'  => __( 'Omega', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-sigma',
				'name'  => __( 'Sigma', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-table',
				'name'  => __( 'Table', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-table2',
				'name'  => __( 'Table', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'icomoon-insert-template',
				'name'  => __( 'Insert Template', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file',
				'name'  => __( 'File', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file2',
				'name'  => __( 'File', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file3',
				'name'  => __( 'File', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file4',
				'name'  => __( 'File', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-film',
				'name'  => __( 'Film', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-folder',
				'name'  => __( 'Folder', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-folder-open',
				'name'  => __( 'Folder', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-image',
				'name'  => __( 'Image', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-image2',
				'name'  => __( 'Image', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-music',
				'name'  => __( 'Music', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file-pdf',
				'name'  => __( 'PDF', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-libreoffice',
				'name'  => 'Libre Office',
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file-openoffice',
				'name'  => 'Open Office',
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file-excel',
				'name'  => 'Excel',
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file-powerpoint',
				'name'  => 'Power Point',
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file-word',
				'name'  => 'Word',
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file-css',
				'name'  => __( 'CSS', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file-xml',
				'name'  => __( 'XML', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'icomoon-file-zip',
				'name'  => 'Zip',
			),
			array(
				'group' => 'form',
				'id'    => 'icomoon-checkbox-checked',
				'name'  => __( 'Checked', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'form',
				'id'    => 'icomoon-checkbox-unchecked',
				'name'  => __( 'Unchecked', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'form',
				'id'    => 'icomoon-radio-checked',
				'name'  => __( 'Checked', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'form',
				'id'    => 'icomoon-radio-unchecked',
				'name'  => __( 'Unchecked', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'games',
				'id'    => 'icomoon-dice',
				'name'  => __( 'Dice', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'games',
				'id'    => 'icomoon-pacman',
				'name'  => __( 'Pacman', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'games',
				'id'    => 'icomoon-pawn',
				'name'  => __( 'Pawn', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'games',
				'id'    => 'icomoon-spades',
				'name'  => __( 'Spades', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'games',
				'id'    => 'icomoon-diamonds',
				'name'  => __( 'Diamonds', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'games',
				'id'    => 'icomoon-clubs',
				'name'  => __( 'Clubs', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'games',
				'id'    => 'icomoon-heart',
				'name'  => __( 'Heart', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'games',
				'id'    => 'icomoon-heart2',
				'name'  => __( 'Heart', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'games',
				'id'    => 'icomoon-heart3',
				'name'  => __( 'Heart', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-first',
				'name'  => __( 'First', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-previous',
				'name'  => __( 'Previous', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-backward2',
				'name'  => __( 'Fast Backward', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-play3',
				'name'  => __( 'Play', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-pause2',
				'name'  => __( 'Pause', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-stop2',
				'name'  => __( 'Stop', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-forward3',
				'name'  => __( 'Fast Forward', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-next',
				'name'  => __( 'Next', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-last',
				'name'  => __( 'Last', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-forward2',
				'name'  => __( 'Fast Forward', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-backward',
				'name'  => __( 'Fast Backward', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-play2',
				'name'  => __( 'Play', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-pause',
				'name'  => __( 'Pause', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-stop',
				'name'  => __( 'Stop', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-play',
				'name'  => __( 'Play', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-eject',
				'name'  => __( 'Eject', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-volume-high',
				'name'  => __( 'Vol. High', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-volume-medium',
				'name'  => __( 'Vol. Medium', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-volume-low',
				'name'  => __( 'Vol. Low', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-volume-increase',
				'name'  => __( 'Vol. Up', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-volume-decrease',
				'name'  => __( 'Vol. Down', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-volume-mute',
				'name'  => __( 'Mute', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-volume-mute2',
				'name'  => __( 'Mute', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-loop',
				'name'  => __( 'Loop', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-loop2',
				'name'  => __( 'Loop', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'icomoon-shuffle',
				'name'  => __( 'Shuffle', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-accessibility',
				'name'  => __( 'Accessibility', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-address-book',
				'name'  => __( 'Address Book', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-aid',
				'name'  => __( 'Aid', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-airplane',
				'name'  => __( 'Airplane', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-barcode',
				'name'  => __( 'Barcode', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bars',
				'name'  => __( 'Bars', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bars2',
				'name'  => __( 'Bars', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-book',
				'name'  => __( 'Book', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-books',
				'name'  => __( 'Books', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bookmark',
				'name'  => __( 'Bookmark', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bookmarks',
				'name'  => __( 'Bookmarks', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-briefcase',
				'name'  => __( 'Briefcase', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-brightness-medium',
				'name'  => __( 'Brightness', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-brightness-contrast',
				'name'  => __( 'Brightness/Contrast', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bubble',
				'name'  => __( 'Bubble', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bubble2',
				'name'  => __( 'Bubble', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bubbles',
				'name'  => __( 'Bubbles', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bubbles2',
				'name'  => __( 'Bubbles', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bubbles3',
				'name'  => __( 'Bubbles', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bubbles4',
				'name'  => __( 'Bubbles', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-bug',
				'name'  => __( 'Bug', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-busy',
				'name'  => __( 'Busy', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-cabinet',
				'name'  => __( 'Cabinet', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-calculate',
				'name'  => __( 'Calculate', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-calendar',
				'name'  => __( 'Calendar', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-calendar2',
				'name'  => __( 'Calendar', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-cart',
				'name'  => __( 'Cart', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-cart2',
				'name'  => __( 'Cart', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-cart3',
				'name'  => __( 'Cart', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-cog',
				'name'  => __( 'Cog', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-cog2',
				'name'  => __( 'Cog', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-cogs',
				'name'  => __( 'Cogs', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-coin',
				'name'  => __( 'Coin', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-connection',
				'name'  => __( 'Connection', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-contrast',
				'name'  => __( 'Contrast', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-credit',
				'name'  => __( 'Credit', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-drawer',
				'name'  => __( 'Drawer', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-drawer2',
				'name'  => __( 'Drawer', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-drawer3',
				'name'  => __( 'Drawer', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-droplet',
				'name'  => __( 'Droplet', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-earth',
				'name'  => __( 'Earth', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-envelope',
				'name'  => __( 'Envelope', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-equalizer',
				'name'  => __( 'Equalizer', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-eye',
				'name'  => __( 'Eye', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-eye2',
				'name'  => __( 'Eye', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-fire',
				'name'  => __( 'Fire', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-flag',
				'name'  => __( 'Flag', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-food',
				'name'  => __( 'Food', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-gift',
				'name'  => __( 'Gift', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-glass',
				'name'  => __( 'Glass', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-globe',
				'name'  => __( 'Globe', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-hammer',
				'name'  => __( 'Hammer', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-hammer2',
				'name'  => __( 'Hammer', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-history',
				'name'  => __( 'History', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-info',
				'name'  => __( 'Info', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-info2',
				'name'  => __( 'Info', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-key',
				'name'  => __( 'Key', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-key2',
				'name'  => __( 'Key', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-leaf',
				'name'  => __( 'Leaf', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-lightning',
				'name'  => __( 'Lightning', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-magnet',
				'name'  => __( 'Magnet', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-mail',
				'name'  => __( 'Mail', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-mail2',
				'name'  => __( 'Mail', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-mail3',
				'name'  => __( 'Mail', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-mail4',
				'name'  => __( 'Mail', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-map',
				'name'  => __( 'Map', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-map2',
				'name'  => __( 'Map', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-menu',
				'name'  => __( 'Menu', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-menu2',
				'name'  => __( 'Menu', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-meter',
				'name'  => __( 'Meter', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-meter2',
				'name'  => __( 'Meter', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-mug',
				'name'  => __( 'Mug', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-newspaper',
				'name'  => __( 'Newspaper', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-notebook',
				'name'  => __( 'Notebook', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-notification',
				'name'  => __( 'Notification', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-paint-format',
				'name'  => __( 'Paint Format', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-pen',
				'name'  => __( 'Pen', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-pencil',
				'name'  => __( 'Pencil', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-pencil2',
				'name'  => __( 'Pencil', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-pie',
				'name'  => __( 'Pie', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-podcast',
				'name'  => __( 'Podcast', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-powercord',
				'name'  => __( 'Power Cord', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-profile',
				'name'  => __( 'Profile', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-pushpin',
				'name'  => __( 'Pushpin', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-qrcode',
				'name'  => __( 'QR Code', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-question',
				'name'  => __( 'Question', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-quill',
				'name'  => __( 'Quill', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-rocket',
				'name'  => __( 'Rocket', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-settings',
				'name'  => __( 'Settings', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-shield',
				'name'  => __( 'Shield', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-spinner',
				'name'  => __( 'Spinner', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-spinner2',
				'name'  => __( 'Spinner', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-spinner3',
				'name'  => __( 'Spinner', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-spinner4',
				'name'  => __( 'Spinner', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-spinner5',
				'name'  => __( 'Spinner', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-spinner6',
				'name'  => __( 'Spinner', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-stack',
				'name'  => __( 'Stack', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-star',
				'name'  => __( 'Star', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-star2',
				'name'  => __( 'Star', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-star3',
				'name'  => __( 'Star', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-stats',
				'name'  => __( 'Stats', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-switch',
				'name'  => __( 'Switch', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-support',
				'name'  => __( 'Support', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-tag',
				'name'  => __( 'Tag', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-tags',
				'name'  => __( 'Tags', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-target',
				'name'  => __( 'Target', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-ticket',
				'name'  => __( 'Ticket', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-tree',
				'name'  => __( 'Tree', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-trophy',
				'name'  => __( 'Trophy', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-truck',
				'name'  => __( 'Truck', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-user',
				'name'  => __( 'User', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-user2',
				'name'  => __( 'User', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-user3',
				'name'  => __( 'User', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-user4',
				'name'  => __( 'User', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-users',
				'name'  => __( 'Users', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-users2',
				'name'  => __( 'Users', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-wand',
				'name'  => __( 'Wand', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-warning',
				'name'  => __( 'Warning', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icomoon-wrench',
				'name'  => __( 'Wrench', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-blog',
				'name'  => __( 'Blog', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-cloud',
				'name'  => __( 'Cloud', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-cloud2',
				'name'  => __( 'Cloud', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-dashboard',
				'name'  => __( 'Dashboard', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-feed',
				'name'  => __( 'Feed', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-feed2',
				'name'  => __( 'Feed', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-feed3',
				'name'  => __( 'Feed', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-feed4',
				'name'  => __( 'Feed', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-home',
				'name'  => __( 'Home', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-home2',
				'name'  => __( 'Home', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-home3',
				'name'  => __( 'Home', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-office',
				'name'  => __( 'Office', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-lab',
				'name'  => __( 'Lab', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-library',
				'name'  => __( 'Library', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-location',
				'name'  => __( 'Location', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-location2',
				'name'  => __( 'Location', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-remove',
				'name'  => __( 'Trash', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-remove2',
				'name'  => __( 'Trash', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'places',
				'id'    => 'icomoon-road',
				'name'  => __( 'Road', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-angry',
				'name'  => __( 'Angry', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-cool',
				'name'  => __( 'Cool', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-confused',
				'name'  => __( 'Confused', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-evil',
				'name'  => __( 'Evil', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-happy',
				'name'  => __( 'Happy', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-grin',
				'name'  => __( 'Grin', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-neutral',
				'name'  => __( 'Neutral', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-sad',
				'name'  => __( 'Sad', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-shocked',
				'name'  => __( 'Shocked', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-smiley',
				'name'  => __( 'Smiley', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-tongue',
				'name'  => __( 'Tongue', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-wink',
				'name'  => __( 'Wink', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-wondering',
				'name'  => __( 'Wondering', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-angry2',
				'name'  => __( 'Angry', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-cool2',
				'name'  => __( 'Cool', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-confused2',
				'name'  => __( 'Confused', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-evil2',
				'name'  => __( 'Evil', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-happy2',
				'name'  => __( 'Happy', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-grin2',
				'name'  => __( 'Grin', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-neutral2',
				'name'  => __( 'Neutral', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-sad2',
				'name'  => __( 'Sad', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-shocked2',
				'name'  => __( 'Shocked', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-smiley2',
				'name'  => __( 'Smiley', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-tongue2',
				'name'  => __( 'Tongue', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-wink2',
				'name'  => __( 'Wink', 'menu-icons-icomoon' ),
			),
			array(
				'group' => 'smileys',
				'id'    => 'icomoon-wondering2',
				'name'  => __( 'Wondering', 'menu-icons-icomoon' ),
			),
		);

		/**
		 * Filter icomoon items
		 *
		 * @since 0.2.0
		 * @param array $items Icon items.
		 */
		$items = apply_filters( 'icon_picker_icomoon_items', $items );

		return $items;
	}
}
