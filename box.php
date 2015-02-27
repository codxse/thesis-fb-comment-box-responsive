<?php
/*
	Name: Thesis Facebook Comment Responsive
	Author: laksani.com
	Version: v0.1
	Description: Facebook Comment plugin for Thesis 2.0+.
	Class: thesis_facebook_comment_responsive
*/


class thesis_facebook_comment_responsive extends thesis_box {
	
	protected function translate() {
		$this->title = __('Thesis Facebook Comment Box', 'thesis');
	}
	
	
	protected function options() {
		global $thesis;
		return array(
			'img1check' => array(

				'type' => 'checkbox',

					'label' => __('Display Facebook Comments', 'thesis'),

					'options' => array(

						'img1checktext' => __('Click here to enable Facebook Comments', 'thesis'),

					),

					'default' => array(

						'img1checktext' => false,

						'html'	=> ''

					)

				),
			'likebox' => array(
				'type' => 'text',
				'width' => 'medium',
				'label' => __('Enter your Facebook fan page url', 'thesis'),
				'tooltip' => sprintf(__('Enter your Facebook fan page url', 'thesis')),
				'default' => ''
				),
			'numpost' => array(
				'type' => 'text',
				'width' => 'medium',
				'label' => __('Enter number of comments to display in Facebook comment box', 'thesis'),
				'tooltip' => sprintf(__('Enter number of comments to display', 'thesis')),
				'default' => '3'
				),
			);
	}

	public function html() {
		global $thesis;

		// get options

		$options = $thesis->api->get_options($this->options(), $this->options);

		

		?>
		<?php if($options['img1check']){?>

<div class="fb-comments"
     data-href="<?php the_permalink(); ?>"
     data-numposts="<?php echo $options['numpost'];?>"
     data-width="100%"
     data-colorscheme="light">
</div>
<style>
.fb_iframe_widget,
.fb_iframe_widget span,
.fb_iframe_widget span iframe[style] {
  min-width: 100% !important;
  width: 100% !important;
}
</style>
        <?php
		}
	  }
	}
?>