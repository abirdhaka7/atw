<?php 
/**
 * Adds UpcomingTours widget.
 */
class UpcomingTours extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'upcomingTours', // Base ID
			esc_html__( 'Upcoming Tours', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Show 2 Upcoming Tours', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

        $query = array(
            'post_type' => 'tours',
            'posts_per_page' => 2,
            'orderby' => 'title',
            'order' => 'ASC'
        );?>

        <ul class="tours list-footer">
            <?php $tours = new WP_Query($query);
            while($tours->have_posts()): $tours->the_post();?>

            <li class="clear">
                <div class="featured-tour grid2-4">
                    <?php the_post_thumbnail('thumbnail');?>
                </div>
                <div class="content-tour grid2-4 omega">
                    <h3><a href="<?php the_permalink()?>">
                    <?php the_title();?></a></h3>
                </div>
            </li>

            <?php endwhile; wp_reset_postdata();?>
        </ul>

        <?php echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget
// register Foo_Widget widget
function register_upcoming_tours() {
    register_widget( 'UpcomingTours' );
}
add_action( 'widgets_init', 'register_upcoming_tours' );



/**
 * Adds Random_tips_widget.
 */
class RandomTips extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'random_tips', // Base ID
			esc_html__( 'AWT Random Tips', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Show 2 Random Entries from the blog', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

        $query = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
            'orderby' => 'rand',
            'order' => 'ASC'
        );?>

        <ul class="blog-post">
            <?php $post = new WP_Query($query);
            while($post->have_posts()): $post->the_post();?>

            <li class="clear">
                <div class="featured-tour grid2-4">
                    <?php the_post_thumbnail('thumbnail');?>
                </div>
                <div class="content-tour grid2-4 omega">
                    <h3><a href="<?php the_permalink()?>">
                    <?php the_title();?></a></h3>
                </div>
            </li>

            <?php endwhile; wp_reset_postdata();?>
        </ul>

        <?php echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget
// register Foo_Widget widget
function register_RandomTips() {
    register_widget( 'RandomTips' );
}
add_action( 'widgets_init', 'register_RandomTips' );




/**
 * Adds Coupons_widget.
 */
class Coupons extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'coupons_widget', // Base ID
			esc_html__( 'AWT Coupons Widget', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Show 2 Coupons', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

        $query = array(
            'post_type' => 'cupon',
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC'
        );?>

        <ul class="coupons">
            <?php $coupons = new WP_Query($query);
            while($coupons->have_posts()): $coupons->the_post();?>

            <li class="clear">
                <div class="featured-tour grid2-4">
                    <img src="<?php the_field('image');?>" alt="">
                </div>
            </li>

            <?php endwhile; wp_reset_postdata();?>
        </ul>

        <?php echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget
// register Foo_Widget widget
function register_Coupons() {
    register_widget( 'Coupons' );
}
add_action( 'widgets_init', 'register_Coupons' );



